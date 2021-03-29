<?php

namespace ContainerZ47IcId;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAmenagementInterieurControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AmenagementInterieurController' shared autowired service.
     *
     * @return \App\Controller\AmenagementInterieurController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AmenagementInterieurController.php';

        $container->services['App\\Controller\\AmenagementInterieurController'] = $instance = new \App\Controller\AmenagementInterieurController(($container->privates['App\\Repository\\AmenagementsRepository'] ?? $container->load('getAmenagementsRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\AmenagementInterieurController', $container));

        return $instance;
    }
}
