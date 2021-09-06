<?php

namespace HexMakina\Interfaces\Controllers;

interface IntlControllerInterface
{
    public function l($message, $context = []): string;
}
