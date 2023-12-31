<?php

namespace ContainerFv7U34S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VyeK47GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VyeK47G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VyeK47G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'messierCatalogueRepository' => ['privates', 'App\\Repository\\MessierCatalogueRepository', 'getMessierCatalogueRepositoryService', true],
        ], [
            'messierCatalogueRepository' => 'App\\Repository\\MessierCatalogueRepository',
        ]);
    }
}
