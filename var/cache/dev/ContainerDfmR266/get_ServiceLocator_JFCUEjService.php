<?php

namespace ContainerDfmR266;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JFCUEjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JFCU_Ej' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JFCU_Ej'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'evenement' => ['privates', '.errored..service_locator.JFCU_Ej.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.JFCU_Ej": it needs an instance of "App\\Entity\\Evenement" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'evenement' => 'App\\Entity\\Evenement',
        ]);
    }
}
