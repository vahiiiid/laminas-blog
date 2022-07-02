<?php

namespace Admin\Controller;


use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

/**
 * @copyright CHECK24 Vergleichsportal Hotel GmbH
 */
class AdminController  extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
//        print_r('action');
//        die();
    }

    public function createAction()
    {
        print_r('create');
        die();
    }
}
