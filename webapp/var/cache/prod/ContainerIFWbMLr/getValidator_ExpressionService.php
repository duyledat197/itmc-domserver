<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.expression' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ConstraintValidator.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Constraints/ExpressionValidator.php';

return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
