<?php

<<<<<<<< HEAD:var/cache/dev/ContainerAf3Rx11/getValidator_Mapping_CacheWarmerService.php
namespace ContainerAf3Rx11;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/getValidator_Mapping_CacheWarmerService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_Mapping_CacheWarmerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($container->privates['validator.builder'] ?? self::getValidator_BuilderService($container)), ($container->targetDir.''.'/validation.php'));
    }
}
