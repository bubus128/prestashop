<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGflls7v\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGflls7v/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerGflls7v.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerGflls7v\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerGflls7v\appDevDebugProjectContainer([
    'container.build_hash' => 'Gflls7v',
    'container.build_id' => 'bc79ad6c',
    'container.build_time' => 1610035042,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGflls7v');
