<?php

namespace HexMakina\BlackBox\Database;

interface ConnectionInterface
{
    public function __construct(string $dsn, string $username = '', string $password = '', array $driver_options = []);

    public function driverName();
    public function databaseName(): string;
    public function useDatabase(string $name) : void;
    public function restoreDatabase() : void;

    public function errorCode(): ?string;
    public function errorInfo(): array;

    public function prepare(string $sql_statement, $options = []) : ?\PDOStatement;
    public function query(string $sql_statement, $fetch_mode = null, $fetch_col_num = null) : ?\PDOStatement;
    public function alter(string $sql_statement) : ?int;

    public function lastInsertId($name = null);

    public function transact(): bool;
    public function commit(): bool;
    public function rollback(): bool;


}
