<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 15:31
 */

namespace Application\Examples\Factory;


abstract class AbstractBook
{
    abstract function getAuthor();

    abstract function getTitle();
}