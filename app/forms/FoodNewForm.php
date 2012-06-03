<?php

/**
 * Description of FoodNewForm
 *
 * @author vaclav.loffelmann
 */
use Nette\Application\UI,
    Nette\Forms\Form,
    Nette\Forms\Container;

class FoodNewForm extends UI\Form {

    private $model;

    public function __construct(UI\Presenter $presenter) {
        parent::__construct();

        $this->model = $presenter->model;

        $this->addText('name', 'název')
                ->setRequired('název je povinný');
        $this->addTextArea('desc', 'popis')
                ->setRequired('popis je povinný');



        $this->addText('sourceTitle1', 'titulek');
        $this->addText('sourceUrl1', 'url');

        $this->addText('sourceTitle2', 'titulek');
        $this->addText('sourceUrl2', 'url');

        $this->addText('sourceTitle3', 'titulek');
        $this->addText('sourceUrl3', 'url');

        $this->addText('sourceTitle4', 'titulek');
        $this->addText('sourceUrl4', 'url');

        $this->addText('sourceTitle5', 'titulek');
        $this->addText('sourceUrl5', 'url');

        $dietTypes = $this->model->getDiet()
                ->order('display_order');

        $this->addText('danger', 'nebezpečnost')
                ->setRequired('nebezpečnost je povinná')
                ->addRule(Form::INTEGER, 'nebezpečnost musí být číslo');

        $this->addSelect('dietType', 'typ diety', $dietTypes->fetchPairs('id', 'name'))
                ->setAttribute('class', 'searchbutton');

        $this->addSubmit('submit', 'Vložit');

        $this->onSuccess[] = callback($this, 'foodNewFormSubmitted');
    }

    public function foodNewFormSubmitted($form) {
        $values = $form->values;

        $food = $this->model->getFood()
                ->where('name', $values->name)
                ->fetch();

        if ($food === FALSE) {
            $food = $this->model->getFood()
                    ->insert(array(
                'name' => $values->name,
                    ));
        }

        $foodDiet = $this->model->getFoodDietRanks()
                ->where('food_id', $food->id)
                ->where('diet_id', $values->dietType)
                ->fetch();

        if ($foodDiet === FALSE) {
            $this->model->getFoodDietRanks()
                    ->insert(array(
                        'food_id' => $food->id,
                        'diet_id' => $values->dietType,
                        'rank' => $values->danger,
                        'desc' => $values->desc,
                    ));
            
            $this->model->getFoodHrefs()
                    ->insert($this->fuckWithHrefs($food->id, $values));
            
        } else {
            $this->addError("vazba jídlo - dieta již existuje");
        }
    }

    private function fuckWithHrefs($foodId, $values) {

        $hrefs = array();
        if ($values->sourceUrl1) {
            $hrefs[] = array(
                'food_id' => $foodId,
                'title' => $values->sourceTitle1,
                'url' => $values->sourceUrl1,
            );
        }
        if ($values->sourceUrl2) {
            $hrefs[] = array(
                'food_id' => $foodId,
                'title' => $values->sourceTitle2,
                'url' => $values->sourceUrl2,
            );
        }
        if ($values->sourceUrl3) {
            $hrefs[] = array(
                'food_id' => $foodId,
                'title' => $values->sourceTitle3,
                'url' => $values->sourceUrl3,
            );
        }
        if ($values->sourceUrl4) {
            $hrefs[] = array(
                'food_id' => $foodId,
                'title' => $values->sourceTitle4,
                'url' => $values->sourceUrl4,
            );
        }
        if ($values->sourceUrl5) {
            $hrefs[] = array(
                'food_id' => $foodId,
                'title' => $values->sourceTitle5,
                'url' => $values->sourceUrl5,
            );
        }

        return $hrefs;
    }

}

