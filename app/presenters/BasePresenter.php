<?php

/**
 * Description of BasePresenter
 *
 * @author vaclav.loffelmann
 */

abstract class BasePresenter extends Nette\Application\UI\Presenter {
    
    public $model;
    
    protected function startup() {
        parent::startup();
        
        $this->model = $this -> getService('model');
    }
    
    public function createComponentSearchContainer() {
        return new SearchContainer($this);
    }
}

