<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ZgQelA_' shared service.

return $this->privates['.service_locator.ZgQelA_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'kernel' => ['services', 'kernel', 'getKernelService', false],
    'metadataFactory' => ['privates', 'jms_serializer.metadata_factory', 'getJmsSerializer_MetadataFactoryService.php', true],
], [
    'kernel' => '?',
    'metadataFactory' => '?',
]);
