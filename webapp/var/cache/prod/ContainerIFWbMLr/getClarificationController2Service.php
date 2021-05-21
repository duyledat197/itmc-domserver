<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Jury\ClarificationController' shared autowired service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/Jury/ClarificationController.php';

$this->services['App\\Controller\\Jury\\ClarificationController'] = $instance = new \App\Controller\Jury\ClarificationController(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()), ($this->privates['App\\Service\\EventLogService'] ?? $this->getEventLogServiceService()));

$instance->setContainer(($this->privates['.service_locator.LNRNTgI'] ?? $this->load('get_ServiceLocator_LNRNTgIService.php'))->withContext('App\\Controller\\Jury\\ClarificationController', $this));

return $instance;
