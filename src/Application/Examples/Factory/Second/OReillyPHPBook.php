<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 17:10
 */

namespace Application\Examples\Factory\Second;

use Application\Examples\Factory\AbstractPHPBook;

class OReillyPHPBook extends AbstractPHPBook
{
    private $author;

    private $title;

    function __construct()
    {
        $this->author = 'George Reese, Randy Jay Yarger, and Tim King';
        $this->title = 'Managing and Using MySQL';
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }
}