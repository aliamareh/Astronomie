<?php

namespace ContainerW5QocT6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getObjetCelesteTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ObjetCelesteType' shared autowired service.
     *
     * @return \App\Form\ObjetCelesteType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ObjetCelesteType.php';

        return $container->privates['App\\Form\\ObjetCelesteType'] = new \App\Form\ObjetCelesteType();
    }
}
