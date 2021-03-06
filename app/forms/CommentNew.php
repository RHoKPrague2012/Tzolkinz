<?php

/**
 * Description of CommentNew
 *
 * @author vaclav.loffelmann
 */
use Nette\Application\UI,
    Nette\Forms\Form,
    Nette\Forms\Container;

class CommentNewForm extends UI\Form {

    private $model;
    private $foodId;
    private $dietId;

    public function __construct(UI\Presenter $presenter, $foodId, $dietId) {
        parent::__construct();

        $this->model = $presenter->model;
        $this->foodId = $foodId;
        $this->dietId = $dietId;

        $this->addText('nick', 'nick')
                ->setRequired('nick je povinný');

        $this->addTextArea('message', 'text')
                ->setRequired('text je povinný');

        $this->addHidden('renderTime', time());
        $this->addHidden('foodId', $foodId);
        $this->addHidden('dietId', $dietId);

        $this->addSubmit('submit', 'Vložit');

        $this->onSuccess[] = callback($this, 'commentNewFormSubmitted');
    }

    public function commentNewFormSubmitted($form) {
        $values = $form->values;

        if ($values->renderTime + 4 > time()) {
            $this->addError('You are Robot!');
            return;
        }

        $this->model->getDebates()
                ->insert(array(
                    'food_id' => $values->foodId,
                    'diet_id' => $values->dietId,
                    'nick' => $values->nick,
                    'message' => $values->message,
                    'insert_date' => new DateTime,
                ));


        $this->parent->redirect('Food:detail', array(
            "dietId" => $values->foodId,
            "foodId" => $values->dietId
        ));
    }

}

