<?php

namespace HexMakina\BlackBox\Database;

interface ConnectionInterface
{
    public function __construct($dsn, $username = '', $password = '', $driver_options = []);

    public function driverName();
    public function databaseName(): string;

    public function prepare($sql_statement, $options = []);

    public function transact(): bool;
    public function commit(): bool;
    public function rollback(): bool;

    public function lastInsertId($name = null);
    public function errorCode(): ?string;
    public function errorInfo(): array;

    public function query($sql_statement, $fetch_mode = null, $fetch_col_num = null);
    public function alter($sql_statement);
}
