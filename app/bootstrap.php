<?php

use Nette\Diagnostics\Debugger, Nette\Application\Routers\Route;

require_once LIBS_DIR . '/Nette/loader.php';

Debugger::enable(Debugger::PRODUCTION);

Debugger::$logDirectory = __DIR__ . '/../log';
Debugger::$strictMode = TRUE;
$ConnectionPanel = new \Nette\Database\Diagnostics\ConnectionPanel;
Debugger::addPanel($ConnectionPanel);


// Configure application
$configurator = new Nette\Config\Configurator;
$configurator -> setProductionMode(FALSE);
$configurator -> setTempDirectory(__DIR__ . '/../temp');

// Enable RobotLoader - this will load all classes automatically
$configurator -> createRobotLoader() -> addDirectory(APP_DIR) -> addDirectory(LIBS_DIR) -> register();

// Create Dependency Injection container from config.neon file
$configurator -> addConfig(__DIR__ . '/config/config.neon');
$container = $configurator -> createContainer();
$container->getService("database")->onQuery[] = callback($ConnectionPanel, 'logQuery');


$application = $container -> application;

$router = $application->getRouter();

$router[] = new Route('index.php', array(
	'presenter' => 'Homepage',
	'action' => 'default',
), Route::ONE_WAY);

$router[] = new Route('food/detail/<dietId>/<foodId>[/<commentSite>]', array(
	'presenter' => 'Food',
	'action' => 'detail',
	'dietId' => NULL,
    'foodId' => NULL,
    'commentSite' => 1,
));

$router[] = new Route('administration/commentNew/<foodId>/<dietId>', array(
	'presenter' => 'Administration',
	'action' => 'commentNew',
    'foodId' => NULL,
	'dietId' => NULL,
));

$router[] = new Route('Food/list/<dietId>', array(
	'presenter' => 'Food',
	'action' => 'list',
	'id' => 1,
));

$router[] = new Route('<presenter>/<action>/<id>', array(
	'presenter' => 'Homepage',
	'action' => 'default',
	'id' => NULL,
));



//$application->errorPresenter = 'Error';
$application->catchExceptions = FALSE;

$application->run();
