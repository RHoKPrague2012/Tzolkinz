<?php

/**
 * Description of AdministratoinPresenter
 *
 * @author vaclav.loffelmann
 */
class AdministrationPresenter extends BasePresenter {

    private $foodId;
    private $dietId;

    protected function startup() {
        parent::startup();
    }

    public function renderCommentNew($foodId, $dietId) {
        $this->foodId = $foodId;
        $this->dietId = $dietId;
    }

    public function createComponentCommentNew() {
        return new CommentNewForm($this, $this->foodId, $this->dietId);
    }

}

