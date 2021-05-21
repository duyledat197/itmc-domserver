<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.builder' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ValidatorBuilderInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ValidatorBuilder.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Validation.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Traits/ProxyTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Traits/PhpArrayTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ObjectInitializerInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Mapping/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Mapping/Loader/AutoMappingTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/doctrine-bridge/Validator/DoctrineLoader.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php';

$this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

$a = ($this->privates['property_info.cache'] ?? $this->load('getPropertyInfo_CacheService.php'));

$instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Validator\\Constraints\\CountryValidator' => ['privates', 'App\\Validator\\Constraints\\CountryValidator', 'getCountryValidatorService.php', true],
    'App\\Validator\\Constraints\\IdentifierValidator' => ['privates', 'App\\Validator\\Constraints\\IdentifierValidator', 'getIdentifierValidatorService.php', true],
    'App\\Validator\\Constraints\\TimeStringValidator' => ['privates', 'App\\Validator\\Constraints\\TimeStringValidator', 'getTimeStringValidatorService.php', true],
    'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
    'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
    'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService.php', true],
    'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
    'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService.php', true],
    'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
    'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
    'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
], [
    'App\\Validator\\Constraints\\CountryValidator' => '?',
    'App\\Validator\\Constraints\\IdentifierValidator' => '?',
    'App\\Validator\\Constraints\\TimeStringValidator' => '?',
    'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
    'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
    'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
    'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
    'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
    'doctrine.orm.validator.unique' => '?',
    'security.validator.user_password' => '?',
    'validator.expression' => '?',
])));
$instance->setTranslationDomain('validators');
$instance->addXmlMappings([0 => (\dirname(__DIR__, 5).'/lib/vendor/symfony/form/Resources/config/validation.xml')]);
$instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
$instance->addMethodMapping('loadValidatorMetadata');
$instance->setMappingCache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/validation.php'), ($this->privates['cache.validator'] ?? $this->load('getCache_ValidatorService.php'))));
$instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);
$instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));
$instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));

return $instance;
