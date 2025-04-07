<?php

namespace ContainerV5jjXVX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YGmjiG4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yGmjiG4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yGmjiG4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'demandeMission' => ['privates', '.errored..service_locator.yGmjiG4.App\\Entity\\DemandeMission', NULL, 'Cannot autowire service ".service_locator.yGmjiG4": it needs an instance of "App\\Entity\\DemandeMission" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'demandeMission' => 'App\\Entity\\DemandeMission',
            'entityManager' => '?',
        ]);
    }
}
