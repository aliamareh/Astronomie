<?php

namespace ContainerFv7U34S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConstellationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ConstellationController' shared autowired service.
     *
     * @return \App\Controller\ConstellationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ConstellationController.php';

        $container->services['App\\Controller\\ConstellationController'] = $instance = new \App\Controller\ConstellationController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ConstellationController', $container));

        return $instance;
    }
}