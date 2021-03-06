<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.choice_list_factory.cached' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/ChoiceList/Factory/ChoiceListFactoryInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/ChoiceList/Factory/PropertyAccessDecorator.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php';

return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ($this->privates['property_accessor'] ?? $this->load('getPropertyAccessorService.php'))));
