<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXQOGHx9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXQOGHx9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXQOGHx9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXQOGHx9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXQOGHx9\App_KernelDevDebugContainer([
    'container.build_hash' => 'XQOGHx9',
    'container.build_id' => 'c8ac6070',
    'container.build_time' => 1680536263,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXQOGHx9');