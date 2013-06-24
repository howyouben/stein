<?php
namespace ALbum\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController {

    protected $albumTable;

    public function indexAction() {
        $view =  new ViewModel(array(
            'albums' => $this->getAlbumTable()->fetchAll(),
        ));

        $view->setTemplate('album/album/index');

        return $view;
    }

   public function addAction() {

   }
   public  function editAction() {

   }
    public  function deleteAction() {

    }
    public function getAlbumTable()
    {
        if (!$this->albumTable) {
            $sm = $this->getServiceLocator();
            $this->albumTable = $sm->get('Album\Model\AlbumTable');
        }
        return $this->albumTable;
    }

}