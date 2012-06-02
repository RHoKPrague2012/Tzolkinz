<?php

/**
 * Description of SearchForm
 *
 * @author vaclav.loffelmann
 */
use Nette\Application\UI,
    Nette\Forms\Form,
    Nette\Forms\Container;

class SearchForm extends UI\Form {

    private $model;

    public function __construct(UI\Presenter $presenter) {
        parent::__construct();
        $this->model = $presenter->model;


        $this->getElementPrototype()->class[] = "searchform";

        $dietTypes = $this->model->getDiet()
                ->order('display_order');


        $this->addText('search', 'insert food:')
                ->setAttribute('value', 'food name')
                ->setAttribute('onclick', 'this.value=\'\';')
                ->setAttribute('class', 'searchbox');

        $this->addSelect('dietType', 'diet type', $dietTypes->fetchPairs('id', 'name'))
                ->setAttribute('class', 'searchbutton');

        $this->addSubmit('submit', 'Find IT!')
                ->setAttribute('class', 'searchbutton');

        $this->onSuccess[] = callback($this, 'seachFormSubmitted');
    }

    public function seachFormSubmitted($form) {
        $values = $form->values;

        $food = $this->model->getFood()
                ->where('name LIKE ?', '%' . $values->search . '%')
                ->fetch();

        
        
        $this->parent->parent->redirect('Food:detail', array(
            "diet" => $values->dietType,
            "id" => $food->id));
        //dump($food);
        //dump($values);
    }

}

