SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `duha` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `duha` ;

-- -----------------------------------------------------
-- Table `duha`.`food`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `duha`.`food` ;

CREATE  TABLE IF NOT EXISTS `duha`.`food` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `category_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MRG_MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `duha`.`debates`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `duha`.`debates` ;

CREATE  TABLE IF NOT EXISTS `duha`.`debates` (
  `food_id` INT(11) NOT NULL ,
  `diet_id` INT(11) NOT NULL ,
  `nick` VARCHAR(50) NOT NULL ,
  `message` TEXT NOT NULL ,
  `insert_date` DATE NOT NULL ,
  PRIMARY KEY (`food_id`, `diet_id`) ,
  INDEX `fk_debates_food1` (`food_id` ASC) )
ENGINE = MRG_MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `duha`.`diet`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `duha`.`diet` ;

CREATE  TABLE IF NOT EXISTS `duha`.`diet` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MRG_MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `duha`.`food_categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `duha`.`food_categories` ;

CREATE  TABLE IF NOT EXISTS `duha`.`food_categories` (
  `food_id` INT(11) NOT NULL ,
  `food_category_def_id` INT(11) NOT NULL ,
  PRIMARY KEY (`food_id`, `food_category_def_id`) ,
  INDEX `fk_food_categories_food1` (`food_id` ASC) )
ENGINE = MRG_MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `duha`.`food_categories_def`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `duha`.`food_categories_def` ;

CREATE  TABLE IF NOT EXISTS `duha`.`food_categories_def` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MRG_MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `duha`.`food_diet_ranks`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `duha`.`food_diet_ranks` ;

CREATE  TABLE IF NOT EXISTS `duha`.`food_diet_ranks` (
  `food_id` INT(11) NOT NULL ,
  `diet_id` INT(11) NOT NULL ,
  `rank` FLOAT NOT NULL ,
  `desc` TEXT NOT NULL ,
  PRIMARY KEY (`food_id`, `diet_id`) ,
  INDEX `fk_food_diet_ranks_food1` (`food_id` ASC) ,
  INDEX `fk_food_diet_ranks_diet1` (`diet_id` ASC) )
ENGINE = MRG_MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `duha`.`food_hrefs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `duha`.`food_hrefs` ;

CREATE  TABLE IF NOT EXISTS `duha`.`food_hrefs` (
  `food_id` INT(11) NOT NULL ,
  `title` VARCHAR(255) NOT NULL ,
  `url` VARCHAR(1024) NOT NULL ,
  PRIMARY KEY (`food_id`) )
ENGINE = MRG_MyISAM
DEFAULT CHARACTER SET = latin1;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
