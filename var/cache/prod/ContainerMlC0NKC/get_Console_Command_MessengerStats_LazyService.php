<?php

<<<<<<<< HEAD:var/cache/dev/ContainerAf3Rx11/get_Console_Command_MessengerStats_LazyService.php
namespace ContainerAf3Rx11;
========
namespace ContainerMlC0NKC;
>>>>>>>> origin/HechBackUp:var/cache/prod/ContainerMlC0NKC/get_Console_Command_MessengerStats_LazyService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MessengerStats_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.console.command.messenger_stats.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.console.command.messenger_stats.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('messenger:stats', [], 'Show the message count for one or more transports', false, #[\Closure(name: 'console.command.messenger_stats', class: 'Symfony\\Component\\Messenger\\Command\\StatsCommand')] fn (): \Symfony\Component\Messenger\Command\StatsCommand => ($container->privates['console.command.messenger_stats'] ?? $container->load('getConsole_Command_MessengerStatsService')));
    }
}
