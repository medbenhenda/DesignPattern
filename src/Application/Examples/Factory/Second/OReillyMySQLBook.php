<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 14:48
 */
namespace Application\Examples\Factory\Second;

use Application\Examples\Factory\AbstractMySQLBook;

class OReillyMySQLBook extends AbstractMySQLBook
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