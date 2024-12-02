<?php

namespace HexMakina\BlackBox\Database;

interface ConnectionInterface
{
    public function __construct(string $dsn, string $username = '', string $password = '', array $driver_options = []);

    public function database(): string;
    public function schema(): SchemaInterface;

    public function lastInsertId($name = null);

    public function pdo(): \PDO;
}
