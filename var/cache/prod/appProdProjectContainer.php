<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUboxdtj\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUboxdtj/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerUboxdtj.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerUboxdtj\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerUboxdtj\appProdProjectContainer([
    'container.build_hash' => 'Uboxdtj',
    'container.build_id' => 'cc45ed86',
    'container.build_time' => 1660834984,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUboxdtj');