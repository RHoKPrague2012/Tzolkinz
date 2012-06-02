<?php

/**
 * Description of SearchContainer
 *
 * @author vaclav.loffelmann
 */
use Nette\Application\UI;

class SearchContainer extends UI\Control {

    private $presenter;
    
    public function __construct($presenter) {
        parent::__construct();
        $this->presenter = $presenter;
    }
    
    public function render() {
        $this->template->setFile(__DIR__ . '/SearchContainer.latte');

        $this->template->render();die("search container construct2");
    }

    public function createComponentSearchForm() {
        return new SearchForm($this->presenter);
    }
}

