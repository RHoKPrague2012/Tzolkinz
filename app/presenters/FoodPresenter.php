<?php

/**
 * Description of FoodPresenter
 *
 * @author vaclav.loffelmann
 */
class FoodPresenter extends BasePresenter {

    private $commentSite;
    private $foodId;
    private $dietId;

    protected function startup() {
        parent::startup();
    }

    public function actionDetail($dietId, $foodId, $commentSite) {
        $this->dietId = $dietId;
        $this->foodId = $foodId;
        $this->commentSite = $commentSite;
        
        $this->template->id = $foodId;

        $foodDietRanks = $this->model->getFoodDietRanks()
                ->where('food_id', $foodId)
                ->where('diet_id', $dietId)
                ->fetch();
        
        if ($foodDietRanks === FALSE) {
            $this->flashMessage('Kombinaci toho jídla a této diety nemáme v DB');
            $this->redirect("Homepage:default");
        }
        
        $food = $this->model->getFood()
                ->where('id', $foodId)
                ->fetch();
        $diet = $this->model->getDiet()
                ->where('id', $dietId)
                ->fetch();

        $rankDef = $this->model->getRanksDef()
                ->where('id', round($foodDietRanks->rank))
                ->fetch();
        
        $this->template->food = $food;
        $this->template->diet = $diet;
        $this->template->foodDietRanks = $foodDietRanks;
        $this->template->rankDef = $rankDef;
    }
    
    public function createComponentCommentsContainer() {
        return new CommentsContainer($this, $this->foodId, $this->dietId, $this->commentSite);
    }

}

