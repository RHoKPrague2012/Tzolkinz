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

   public function __construct(UI\Presenter $presenter) {
        parent::__construct();
        
        $this->addText('search', 'insert food:');
        
        $this->addSubmit('submit', 'Find IT!');
        
        $this->onSuccess[] = callback($this, 'seachFormSubmitted');
   }
   
   public function seachFormSubmitted($form) {
       $values = $form->values;
       
       dump($values);
   }
    
}

