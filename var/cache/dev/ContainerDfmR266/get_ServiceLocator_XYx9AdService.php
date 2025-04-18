<?php

namespace ContainerDfmR266;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XYx9AdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xYx9Ad_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xYx9Ad_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'candidaturemissionRepository' => ['privates', 'App\\Repository\\CandidaturemissionRepository', 'getCandidaturemissionRepositoryService', true],
        ], [
            'candidaturemissionRepository' => 'App\\Repository\\CandidaturemissionRepository',
        ]);
    }
}
