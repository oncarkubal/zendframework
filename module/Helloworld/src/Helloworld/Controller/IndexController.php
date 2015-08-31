<?php

namespace Helloworld\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        $vw = new ViewModel();
        $objmodel = new \Helloworld\Model\Hi();
        $str = $objmodel->sayHello('Onkar Kubal');
        $vw->setVariable('message',$str);
        return $vw;
    }


}

