<?php

namespace ContainerV5jjXVX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TXV7NcTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tXV7NcT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tXV7NcT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'candidaturemissionRepository' => ['privates', 'App\\Repository\\CandidaturemissionRepository', 'getCandidaturemissionRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'candidaturemissionRepository' => 'App\\Repository\\CandidaturemissionRepository',
            'security' => '?',
        ]);
    }
}
