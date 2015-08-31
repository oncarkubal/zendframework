<?php

namespace CsnUser\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\TableGateway\TableGateway;

class UserController extends AbstractActionController {

    private $albumTable;

    public function indexAction() {
        return new ViewModel(
                array('rowset' => $this->getAlbumTable()->select())
        );
    }

    public function createAction() {
        return new ViewModel();
    }

    public function updateAction() {
        return new ViewModel();
    }

    public function deleteAction() {
        return new ViewModel();
    }

    public function getAlbumTable() {
        if (!$this->albumTable) {
            $this->albumTable = new TableGateway(
                    'album', $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter')
            );
        }
        return $this->albumTable;
    }

}
