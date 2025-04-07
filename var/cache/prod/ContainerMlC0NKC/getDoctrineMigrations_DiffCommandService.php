<?php

<<<<<<<< HEAD:var/cache/dev/ContainerE2q9PZJ/getDoctrineMigrations_DiffCommandService.php
namespace ContainerE2q9PZJ;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getDoctrineMigrations_DiffCommandService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMigrations_DiffCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\DiffCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\DiffCommand(($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService')), 'doctrine:migrations:diff');

        $instance->setName('doctrine:migrations:diff');
        $instance->setDescription('Generate a migration by comparing your current database to your mapping information.');

        return $instance;
    }
}
