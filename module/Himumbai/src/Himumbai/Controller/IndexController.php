<?php

namespace Himumbai\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        $vw = new ViewModel(); 
        $objmodel = new \Himumbai\Model\Hi(); 
        $str = $objmodel->sayHi('Hi Mumbai');
        $vw->setVariable('message',$str);
        return $vw;
    }


}

