<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type.choice' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/Extension/Core/Type/ChoiceType.php';

return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->load('getForm_ChoiceListFactory_CachedService.php')));
