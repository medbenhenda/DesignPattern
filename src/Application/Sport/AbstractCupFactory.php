<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 22:07
 */

namespace Application\Sport;


abstract class AbstractCupFactory {

    abstract function startWorldCup();

    abstract function startEuropeCup();

    abstract function startAfricaCup();

    abstract function startAsieCup();

    abstract function startAmericaCup();
}