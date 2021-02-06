<?php

namespace ContainerMUOyZVI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EjDLQHHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EjDLQHH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EjDLQHH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'farmer' => ['privates', '.errored..service_locator.EjDLQHH.App\\Entity\\Farmer', NULL, 'Cannot autowire service ".service_locator.EjDLQHH": it references class "App\\Entity\\Farmer" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'farmer' => 'App\\Entity\\Farmer',
        ]);
    }
}