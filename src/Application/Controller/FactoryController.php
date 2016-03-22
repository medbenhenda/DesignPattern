<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 18/03/2016
 * Time: 23:29
 */
namespace Application\Controller;

use DB\Doctrine;
use Application\Models\Entity\Article;
use Application\Examples\Factory\Second\OreillyBookFactory;

class FactoryController extends BaseController
{

    public function indexAction()
    {
        $doctrine = new Doctrine();
        //$article = new Article();
        $article = $doctrine->em->find('Application\Models\Entity\Article', 1);
        $OreillyBookFactory = new OreillyBookFactory();
        $phpBook = $OreillyBookFactory->makePHPBook();
        dump($phpBook);
        $this->render('factory/index', array('entity' => $article));
    }
}