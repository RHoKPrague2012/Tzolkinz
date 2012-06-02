<?php

/**
 * Zakladni trida modelu
 */
class Model extends Nette\Object {

    /** @var Nette\Database\Connection */
    public $database;

    /**
     * @param Nette\Database\Connection $databse
     */
    public function __construct(Nette\Database\Connection $database) {
        $this->database = $database;
    }

    /**
     * @param Nette\Database\Connection $databse
     */
    public function getDebates() {
        return $this->database->table('debates');
    }

    /**
     * @param Nette\Database\Connection $databse
     */
    public function getFood() {
        return $this->database->table('food');
    }

    /**
     * @param Nette\Database\Connection $databse
     */
    public function getDiet() {
        return $this->database->table('diet');
    }

    /**
     * @param Nette\Database\Connection $databse
     */
    public function getFoodCategories() {
        return $this->database->table('food_categories');
    }

    /**
     * @param Nette\Database\Connection $databse
     */
    public function getFoodCategoriesDef() {
        return $this->database->table('food_categories_def');
    }

    /**
     * @param Nette\Database\Connection $databse
     */
    public function getFoodDietRanks() {
        return $this->database->table('food_diet_ranks');
    }

    /**
     * @param Nette\Database\Connection $databse
     */
    public function getFoodHrefs() {
        return $this->database->table('food_hrefs');
    }
    
    /**
     * @param Nette\Database\Connection $databse
     */
    public function getRanksDef() {
        return $this->database->table('ranks_def');
    }

}