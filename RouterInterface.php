<?php

namespace HexMakina\Interfaces;

interface RouterInterface
{
    public const REQUEST_GET = 'GET';
    public const REQUEST_POST = 'POST';
    public const ROUTE_HOME_NAME = 'home';

    public function mapHomeRoute($route);
    public function routeExists($route): bool;

    public function match($requestUrl = null, $requestMethod = null);
    public function targetController();
    public function targetMethod();
    public function name();

    // do you GET it ?
    public function requests(): bool;

    // have you POSTed it ?
    public function submits(): bool;

    // generates URL for href and location
    public function hyp($route, $route_params = []);

    // heads to another location
    public function hop($route = null, $route_params = []);
    public function submitted($param_name = null);

    public function sendFile($file_path);

    public function webRoot(): string;
    public function filePath($setter = null): string;
    public function basePath($setter = null): string;
}
