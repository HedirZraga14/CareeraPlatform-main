<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.listeners.pdo_session_handler_schema_listener' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.listeners.pdo_session_handler_schema_listener'] = new \Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener(($container->privates['session.handler.native'] ?? $container->load('getSession_Handler_NativeService')));
    }
}
