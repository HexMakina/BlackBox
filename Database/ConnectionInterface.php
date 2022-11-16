<?php

namespace HexMakina\BlackBox\Database;

interface ConnectionInterface
{
    public function __construct($dsn, $username = '', $password = '', $driver_options = []);

    public function driverName();
    public function databaseName(): string;
    public function useDatabase($name);

    public function prepare(string $sql_statement, $options = []) : ?\PDOStatement;

    public function transact(): bool;
    public function commit(): bool;
    public function rollback(): bool;

    public function lastInsertId($name = null);
    public function errorCode(): ?string;
    public function errorInfo(): array;

    public function query(string $sql_statement, ?int $fetch_mode = null, $fetch_col_num = null): ?\PDOStatement;
    public function alter(string $sql_statement) : ?int;
}
