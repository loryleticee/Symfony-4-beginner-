<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGvBqTxY\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGvBqTxY/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerGvBqTxY.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerGvBqTxY\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerGvBqTxY\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'GvBqTxY',
    'container.build_id' => '9ab728d1',
    'container.build_time' => 1542071194,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerGvBqTxY');
