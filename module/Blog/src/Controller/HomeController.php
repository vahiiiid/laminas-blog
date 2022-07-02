<?php

namespace Blog\Controller;


use Storage\Entity\Post;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Psr\Container\ContainerInterface;

/**
 * @TODO Describe HomeController
 *
 * @copyright CHECK24 Vergleichsportal Hotel GmbH
 */
class HomeController extends AbstractActionController
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

    public function store()
    {
        print_r(22222);
        die();
    }
}
