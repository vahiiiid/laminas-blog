<?php

namespace Blog\Controller;


use Blog\Entity\Post;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Psr\Container\ContainerInterface;

/**
 * @TODO Describe BlogController
 *
 * @copyright CHECK24 Vergleichsportal Hotel GmbH
 */
class BlogController extends AbstractActionController
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function indexAction()
    {
        $entityManager = $this->container->get('doctrine.entitymanager.orm_default');
        $postRepository = $entityManager->getRepository(Post::class);
        $posts = $postRepository->findAll();

        return new ViewModel([
            'posts' => $posts,
        ]);
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
