<?php

namespace Container4MyL7UM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WeuR7V2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WeuR7V2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WeuR7V2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'offre' => ['privates', '.errored..service_locator.WeuR7V2.App\\Entity\\Missionfreelencer', NULL, 'Cannot autowire service ".service_locator.WeuR7V2": it needs an instance of "App\\Entity\\Missionfreelencer" but this type has been excluded in "config/services.yaml".'],
        ], [
            'offre' => 'App\\Entity\\Missionfreelencer',
        ]);
    }
}
