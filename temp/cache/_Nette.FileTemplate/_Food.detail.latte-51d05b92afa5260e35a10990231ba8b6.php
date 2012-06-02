<?php //netteCache[01]000369a:2:{s:4:"time";s:21:"0.37942300 1338657688";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:47:"/home/vava/rhok/app/templates/Food/detail.latte";i:2;i:1338657031;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"94abcaa released on 2012-02-29";}}}?><?php

// source file: /home/vava/rhok/app/templates/Food/detail.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '842h1r5btq')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbee68f19a0f_content')) { function _lbee68f19a0f_content($_l, $_args) { extract($_args)
?><h3><?php echo Nette\Templating\Helpers::escapeHtml($food->name, ENT_NOQUOTES) ?>
 a <?php echo Nette\Templating\Helpers::escapeHtml($diet->name, ENT_NOQUOTES) ?></h3>

<div id="rating">

    <div id="rating_number"  class="vhodnost<?php echo htmlSpecialChars($foodDietRanks->rank) ?>">
        <?php echo Nette\Templating\Helpers::escapeHtml($foodDietRanks->rank, ENT_NOQUOTES) ?>

    </div>



    <div id="rating_desc">
        <?php echo Nette\Templating\Helpers::escapeHtml($rankDef->desc, ENT_NOQUOTES) ?>

    </div>



    <div id="product_desc">
        <?php echo Nette\Templating\Helpers::escapeHtml($foodDietRanks->desc, ENT_NOQUOTES) ?>

    </div>

</div>

<a href="<?php echo htmlSpecialChars($_presenter->link("Homepage:default")) ?>">Zpět na hledání</a>
<?php $_ctrl = $_control->getComponent("commentsContainer"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
<a href="<?php echo htmlSpecialChars($_presenter->link("Homepage:default")) ?>">Zpět na hledání</a><?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 