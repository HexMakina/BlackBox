<?php

namespace HexMakina\Interfaces\Controllers;

// use Psr\Container\ContainerInterface;
use HexMakina\Interfaces\RouterInterface;
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
    public function add_error($message, $context = []);

    public function has_route_back(): bool;
    public function route_back($route_name = null, $route_params = []): string;
    public function route_factory($route_name = null, $route_params = []): string;
}
