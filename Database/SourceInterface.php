<?php

namespace HexMakina\BlackBox\Database;

interface SourceInterface
{
    // returns the data source name (DSN)
    public function name(): string;

    public function database(): string;

    public function driver(): string;
}
