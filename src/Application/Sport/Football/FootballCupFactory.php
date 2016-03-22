<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 22:01
 */

namespace Application\Sport\Football;

use Application\Sport\AbstractCupFactory;

class FootballCupFactory extends AbstractCupFactory {
    private $context = "Football";

    function startWorldCup() {
        return new FootballWorldCup('Spain', array('Brazil', 'Germany', 'Canada', 'Tunisia', 'Japan'), array('Vicente calderon', 'Misteya', 'Neu camp', 'Sentiego Bernabeu'));
    }

    function startEuropeCup() {
        return new FootballEuropeCup('Spain', array('France', 'Germany', 'England', 'Italy', 'Netherland'), array('Vicente calderon', 'Misteya', 'Neu camp', 'Sentiego Bernabeu'));
    }

    function startAfricaCup() {
        return new FootballWorldCup('Spain', array('France', 'Germany', 'England', 'Italy', 'Netherland'), array('Vicente calderon', 'Misteya', 'Neu camp', 'Sentiego Bernabeu'));
    }

    function startAsieCup() {
        return new FootballWorldCup('Spain', array('France', 'Germany', 'England', 'Italy', 'Netherland'), array('Vicente calderon', 'Misteya', 'Neu camp', 'Sentiego Bernabeu'));
    }

    function startAmericaCup() {
        return new FootballWorldCup('Spain', array('France', 'Germany', 'England', 'Italy', 'Netherland'), array('Vicente calderon', 'Misteya', 'Neu camp', 'Sentiego Bernabeu'));
    }
}