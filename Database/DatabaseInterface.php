<?php

namespace HexMakina\BlackBox\Database;

interface DatabaseInterface
{
    public function connection(): ConnectionInterface;

    public function name();

    public function table(string $table_name): TableInterface;

    //legacy
    public function inspect(string $table_name): TableInterface;

    public function schema(): SchemaInterface;
}
