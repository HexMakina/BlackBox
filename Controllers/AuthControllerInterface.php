<?php

namespace HexMakina\BlackBox\Controllers;

use HexMakina\BlackBox\Auth\OperatorInterface;

interface AuthControllerInterface
{
    public function requiresOperator(): bool;
    public function authorize($permission = null): bool;
    public function operator(): OperatorInterface;
}
