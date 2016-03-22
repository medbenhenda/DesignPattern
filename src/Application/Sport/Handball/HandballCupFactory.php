<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 22:18
 */

namespace Application\Sport\Handball;


use Application\Sport\AbstractCupFactory;

class HandballCupFactory extends AbstractCupFactory {
    private $context = "Handball";

    function startWorldCup() {
        return new HandballWorldCup('Spain', array('Brazil', 'Germany', 'Canada', 'Tunisia', 'Japan'), array('Vicente calderon', 'Misteya', 'Neu camp', 'Sentiego Bernabeu'));
    }

    function startEuropeCup() {
        return new HandballEuropeCup('Spain', array('France', 'Germany', 'England', 'Italy', 'Netherland'), array('Vicente calderon', 'Misteya', 'Neu camp', 'Sentiego Bernabeu'));
    }

    function startAfricaCup() {
        return new HandballWorldCup('Spain', array('France', 'Germany', 'England', 'Italy', 'Netherland'), array('Vicente calderon', 'Misteya', 'Neu camp', 'Sentiego Bernabeu'));
    }

    function startAsieCup() {
        return new HandballWorldCup('Spain', array('France', 'Germany', 'England', 'Italy', 'Netherland'), array('Vicente calderon', 'Misteya', 'Neu camp', 'Sentiego Bernabeu'));
    }

    function startAmericaCup() {
        return new HandballWorldCup('Spain', array('France', 'Germany', 'England', 'Italy', 'Netherland'), array('Vicente calderon', 'Misteya', 'Neu camp', 'Sentiego Bernabeu'));
    }
}