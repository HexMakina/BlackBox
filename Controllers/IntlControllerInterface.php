<?php

namespace HexMakina\BlackBox\Controllers;

interface IntlControllerInterface
{
    public function l($message, $context = []): string;
}
