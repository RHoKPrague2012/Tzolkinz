-- phpMyAdmin SQL Dump
-- version 3.4.9deb1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Sob 02. čen 2012, 14:50
-- Verze MySQL: 5.5.23
-- Verze PHP: 5.3.10-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databáze: `duha`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `debates`
--

CREATE TABLE IF NOT EXISTS `debates` (
  `food_id` int(11) NOT NULL,
  `diet_id` int(11) NOT NULL,
  `nick` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `insert_date` date NOT NULL,
  PRIMARY KEY (`food_id`,`diet_id`),
  KEY `fk_debates_food1` (`food_id`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `diet`
--

CREATE TABLE IF NOT EXISTS `diet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `food_categories`
--

CREATE TABLE IF NOT EXISTS `food_categories` (
  `food_id` int(11) NOT NULL,
  `food_category_def_id` int(11) NOT NULL,
  PRIMARY KEY (`food_id`,`food_category_def_id`),
  KEY `fk_food_categories_food1` (`food_id`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `food_categories_def`
--

CREATE TABLE IF NOT EXISTS `food_categories_def` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `food_diet_ranks`
--

CREATE TABLE IF NOT EXISTS `food_diet_ranks` (
  `food_id` int(11) NOT NULL,
  `diet_id` int(11) NOT NULL,
  `rank` float NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`food_id`,`diet_id`),
  KEY `fk_food_diet_ranks_food1` (`food_id`),
  KEY `fk_food_diet_ranks_diet1` (`diet_id`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `food_hrefs`
--

CREATE TABLE IF NOT EXISTS `food_hrefs` (
  `food_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(1024) NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=latin1;

