<?php

namespace Omega\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class WorkController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

