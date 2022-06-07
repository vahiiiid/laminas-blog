<?php

namespace Blog\Controller;


use Laminas\Mvc\Controller\AbstractActionController;

/**
 * @TODO Describe BlogController
 *
 * @copyright CHECK24 Vergleichsportal Hotel GmbH
 */
class BlogController extends AbstractActionController
{
    public function indexAction()
    {
        #todo here I want to obtains entity manager and I think I should use container instance but how to inject it?
    }

    public function addAction()
    {
        var_dump('add');
    }

    public function editAction()
    {
        var_dump('edit');
    }

    public function deleteAction()
    {
        var_dump('delete');
    }
}
