<?php

namespace HexMakina\Interfaces\Controllers;

use HexMakina\Interfaces\Auth\OperatorInterface;

interface AuthControllerInterface
{
    public function requires_operator(): bool;
    public function authorize($permission = null): bool;
    public function operator(): OperatorInterface;
}
