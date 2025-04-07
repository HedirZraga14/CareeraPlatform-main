<?php

namespace ContainerV5jjXVX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReplyRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ReplyRepository' shared autowired service.
     *
     * @return \App\Repository\ReplyRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Repository\\ReplyRepository'])) {
            return $container->privates['App\\Repository\\ReplyRepository'];
        }

        return $container->privates['App\\Repository\\ReplyRepository'] = new \App\Repository\ReplyRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)), $a);
    }
}
