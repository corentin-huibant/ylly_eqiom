<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYdlqksn\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYdlqksn/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerYdlqksn.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerYdlqksn\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerYdlqksn\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Ydlqksn',
    'container.build_id' => 'efd1a4f6',
    'container.build_time' => 1530864357,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerYdlqksn');
