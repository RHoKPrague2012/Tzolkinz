<?php

/**
 * Description of HomepagePresenter
 *
 * @author vaclav.loffelmann
 */
class HomepagePresenter extends BasePresenter {
    
    protected function startup() {
        parent::startup();
    }
    
    
    public function createComponentSearchContainer() {
        return new SearchContainer($this);
    }
    
}

