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

    public function redirect(){

        if(isPostBack()){
            switch(Input::get('type')){
                case 'home':
                    Redirect::to('/');
                case '401':
                    Redirect::to(401);
                case '404':
                    Redirect::to(404);
                case '500':
                    Redirect::to(500);
            }

        } else {
            $this->render('home/redirect');
        }
    }

}