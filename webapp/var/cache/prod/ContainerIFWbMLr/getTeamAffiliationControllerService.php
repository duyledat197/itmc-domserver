<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Jury\TeamAffiliationController' shared autowired service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/Jury/TeamAffiliationController.php';

$this->services['App\\Controller\\Jury\\TeamAffiliationController'] = $instance = new \App\Controller\Jury\TeamAffiliationController(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()), ($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->privates['App\\Service\\EventLogService'] ?? $this->getEventLogServiceService()));

$instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
    'form.factory' => ['services', 'form.factory', 'getForm_FactoryService.php', true],
    'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
    'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
    'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
    'router' => ['services', 'router', 'getRouterService', false],
    'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
    'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService.php', true],
    'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
    'session' => ['services', 'session', 'getSessionService.php', true],
    'twig' => ['services', 'twig', 'getTwigService', false],
], [
    'doctrine' => '?',
    'form.factory' => '?',
    'http_kernel' => '?',
    'parameter_bag' => '?',
    'request_stack' => '?',
    'router' => '?',
    'security.authorization_checker' => '?',
    'security.csrf.token_manager' => '?',
    'security.token_storage' => '?',
    'session' => '?',
    'twig' => '?',
]))->withContext('App\\Controller\\Jury\\TeamAffiliationController', $this));

return $instance;
