<?php

namespace ContainerZ47IcId;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RmlT2DKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RmlT2DK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RmlT2DK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'design' => ['privates', '.errored..service_locator.RmlT2DK.App\\Entity\\Amenagements', NULL, 'Cannot autowire service ".service_locator.RmlT2DK": it references class "App\\Entity\\Amenagements" but no such service exists.'],
        ], [
            'design' => 'App\\Entity\\Amenagements',
        ]);
    }
}
