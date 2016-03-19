<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 18/03/2016
 * Time: 23:29
 */
namespace Application\Controller;

class FactoryController extends BaseController
{

    public function indexAction()
    {
        $this->render('factory/index');
    }
}