<?php

namespace HexMakina\BlackBox\Templating;

interface EngineInterface
{
    // render the template as HTML string
    public function render(string $template, $data = []): string;

    // locate the template file
    public function locate(string $template): string;

    // check if the template exists
    public function exists(string $template): bool;

    // add a directory to the template search path
    public function addDirectory(string $path);

    // assign variables to the template
    public function assign(string $key, $value);
    public function assignAssoc(array $assoc);

    // register classes and methods to be used in the template
    public function registerClass(string $class_alias, string $namespaced_class);
    public function registerFunction(string $function_alias, $function);
}
