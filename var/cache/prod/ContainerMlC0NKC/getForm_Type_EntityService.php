<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/getForm_Type_EntityService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getForm_Type_EntityService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_Type_EntityService extends App_KernelProdContainer
{
    /*
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
