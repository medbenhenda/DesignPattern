<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 14:31
 */

namespace Application\Examples\Factory;

abstract class AbstractBookFactory
{
    abstract function makePHPBook();

    abstract function makeMySQLBook();
}

