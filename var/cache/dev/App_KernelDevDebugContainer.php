<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZ47IcId\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZ47IcId/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZ47IcId.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZ47IcId\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZ47IcId\App_KernelDevDebugContainer([
    'container.build_hash' => 'Z47IcId',
    'container.build_id' => 'db89af63',
    'container.build_time' => 1613488405,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZ47IcId');
