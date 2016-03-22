<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 17:04
 */

namespace Application\Examples\Factory\Second;

use Application\Examples\Factory\AbstractBookFactory;

class OreillyBookFactory extends AbstractBookFactory
{
    public function makePHPBook()
    {
        return new OReillyPHPBook();
    }

    public function makeMySQLBook()
    {
        return new OReillyMySQLBook();
    }
}