<?php

namespace Container4MyL7UM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JwEoUGOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JwEoUGO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JwEoUGO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'doctrine' => '?',
            'security' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
