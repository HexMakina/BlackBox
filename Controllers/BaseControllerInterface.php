<?php

namespace HexMakina\BlackBox\Controllers;

use HexMakina\BlackBox\RouterInterface;
use HexMakina\BlackBox\StateAgentInterface;
use Psr\Log\LoggerInterface;

interface BaseControllerInterface
{
    public function router(): RouterInterface;
    public function logger(): LoggerInterface;
    public function state(): StateAgentInterface;


    public function prepare(): void;
    
    public function execute($method);
    
    public function conclude() : void;
    
    public function headers(): void;
    
    public function errors(): array;
    public function addError($message, $context = []);

    public function routeBack($route_name = null, $route_params = []): string;
    public function routeFactory($route_name = null, $route_params = []): string;
}
