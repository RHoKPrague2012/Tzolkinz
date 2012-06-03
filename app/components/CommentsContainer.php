<?php

/**
 * Description of FoodComments
 *
 * @author vaclav.loffelmann
 */
use Nette\Application\UI;
class CommentsContainer extends UI\Control {

    private $model;

    const COMMENTS_ON_SITE = 1;

    public function __construct($presenter, $foodId, $dietId, $siteId) {
        parent::__construct();
        
        $this->model = $presenter->model;


        $commentCount = $this->model->getDebates()
                ->where('food_id', $foodId)
                ->where('diet_id', $dietId)
                ->count("*");

        $comments = $this->model->getDebates()
                ->where('food_id', $foodId)
                ->where('diet_id', $dietId)
                ->order('insert_date')
                ->limit($siteId * self::COMMENTS_ON_SITE, ($siteId - 1) * self::COMMENTS_ON_SITE);
        
        $this->template->foodId = $foodId;
        $this->template->dietId = $dietId;
        $this->template->commentCount = $commentCount;
        $this->template->comments = $comments;
        $this->template->COMMENTS_ON_SITE = self::COMMENTS_ON_SITE;
    }

    public function render() {

        $this->template->setFile(__DIR__ . '/CommentsContainer.latte');
        $this->template->render();
    }
    
    public function link($target, $args = array()){
     return $this->getPresenter()->link($target, $args);
}

}

