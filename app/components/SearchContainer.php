<?php

/**
 * Description of SearchContainer
 *
 * @author vaclav.loffelmann
 */
use Nette\Application\UI;
use Nette\Application\Responses\JsonResponse;

class SearchContainer extends UI\Control {

    private $presenter;

    public function __construct($presenter) {
        parent::__construct();
        $this->presenter = $presenter;
    }

    public function render() {
        $this->template->setFile(__DIR__ . '/SearchContainer.latte');

        $this->template->render();
    }

    public function createComponentSearchForm() {
        return new SearchForm($this->presenter);
    }

    public function handleAutocomplete() {
        $text = trim($_GET['text']);

        if (strlen($text) > 1) {
            $foods = $this->presenter->model->getFood()
                    ->where('name LIKE ?', '%' . $text . '%')
                    ->limit(10);

            $acStrgs = array();
            while ($row = $foods->fetch()) {
                $acStrgs[] = trim($row->name);
            }
            if (!empty($acStrgs)) {
                $this->presenter->sendResponse(new JsonResponse($acStrgs));
            }
        }
    }

}

