<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 19/03/2016
 * Time: 00:16
 */
namespace Application\Controller;

class HomeController extends BaseController
{
    public function indexAction() {
        $this->render('home/index');
    }
}