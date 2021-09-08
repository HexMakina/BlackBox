<?php

namespace HexMakina\BlackBox\Controllers;

// use Psr\Container\ContainerInterface;
use HexMakina\BlackBox\RouterInterface;
use Psr\Log\LoggerInterface;

interface BaseControllerInterface
{
    public function router(): RouterInterface;
    public function logger(): LoggerInterface;

    // public function container(): ContainerInterface;
    // public function set_container(ContainerInterface $container);

    public function prepare();
    public function execute();
    public function conclude();

    public function errors(): array;
    public function addError($message, $context = []);

    public function routeBack($route_name = null, $route_params = []): string;
    public function routeFactory($route_name = null, $route_params = []): string;
}
