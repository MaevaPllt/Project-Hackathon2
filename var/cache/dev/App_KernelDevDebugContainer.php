<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMUOyZVI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMUOyZVI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMUOyZVI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMUOyZVI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMUOyZVI\App_KernelDevDebugContainer([
    'container.build_hash' => 'MUOyZVI',
    'container.build_id' => '2d9bac71',
    'container.build_time' => 1610713476,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMUOyZVI');