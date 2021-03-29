<?php

namespace Container1FU6axx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QWGWKfRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qWGWKfR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qWGWKfR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\AdminAmenagementsController::delete' => ['privates', '.service_locator.jqkX.GM', 'get_ServiceLocator_JqkX_GMService', true],
            'App\\Controller\\Admin\\AdminAmenagementsController::edit' => ['privates', '.service_locator.jqkX.GM', 'get_ServiceLocator_JqkX_GMService', true],
            'App\\Controller\\AmenagementInterieurController::show' => ['privates', '.service_locator.RmlT2DK', 'get_ServiceLocator_RmlT2DKService', true],
            'App\\Controller\\ArchitectureController::show' => ['privates', '.service_locator.bIrh9qF', 'get_ServiceLocator_BIrh9qFService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.XheqsZu', 'get_ServiceLocator_XheqsZuService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'FM\\ElfinderBundle\\Controller\\ElFinderController::load' => ['privates', '.service_locator.wSTQLB9', 'get_ServiceLocator_WSTQLB9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\AdminAmenagementsController:delete' => ['privates', '.service_locator.jqkX.GM', 'get_ServiceLocator_JqkX_GMService', true],
            'App\\Controller\\Admin\\AdminAmenagementsController:edit' => ['privates', '.service_locator.jqkX.GM', 'get_ServiceLocator_JqkX_GMService', true],
            'App\\Controller\\AmenagementInterieurController:show' => ['privates', '.service_locator.RmlT2DK', 'get_ServiceLocator_RmlT2DKService', true],
            'App\\Controller\\ArchitectureController:show' => ['privates', '.service_locator.bIrh9qF', 'get_ServiceLocator_BIrh9qFService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.XheqsZu', 'get_ServiceLocator_XheqsZuService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'FM\\ElfinderBundle\\Controller\\ElFinderController:load' => ['privates', '.service_locator.wSTQLB9', 'get_ServiceLocator_WSTQLB9Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\AdminAmenagementsController::delete' => '?',
            'App\\Controller\\Admin\\AdminAmenagementsController::edit' => '?',
            'App\\Controller\\AmenagementInterieurController::show' => '?',
            'App\\Controller\\ArchitectureController::show' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'FM\\ElfinderBundle\\Controller\\ElFinderController::load' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\AdminAmenagementsController:delete' => '?',
            'App\\Controller\\Admin\\AdminAmenagementsController:edit' => '?',
            'App\\Controller\\AmenagementInterieurController:show' => '?',
            'App\\Controller\\ArchitectureController:show' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'FM\\ElfinderBundle\\Controller\\ElFinderController:load' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
