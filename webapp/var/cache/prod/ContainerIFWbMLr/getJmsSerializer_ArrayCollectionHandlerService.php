<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.array_collection_handler' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Handler/ArrayCollectionHandler.php';

return $this->privates['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler(false);
