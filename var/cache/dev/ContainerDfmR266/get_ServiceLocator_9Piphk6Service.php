<?php

namespace ContainerDfmR266;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9Piphk6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9Piphk6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9Piphk6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'demandeMission' => ['privates', '.errored..service_locator.9Piphk6.App\\Entity\\DemandeMission', NULL, 'Cannot autowire service ".service_locator.9Piphk6": it needs an instance of "App\\Entity\\DemandeMission" but this type has been excluded in "config/services.yaml".'],
        ], [
            'demandeMission' => 'App\\Entity\\DemandeMission',
        ]);
    }
}
