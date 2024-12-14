<?php

namespace HexMakina\BlackBox\Database;

interface ConnectionInterface
{
    public function __construct(string $dsn, string $username = '', string $password = '', array $driver_options = []);

    /**
     * @return string The name of the database.
     */
    public function database(): string;

    /**
     * @return SchemaInterface The schema of the database.
     */
    public function schema(): SchemaInterface;
    
    /**
     * @return The query builder.
     */
    public function crud();

    /**
     * @param mixed $statement The SQL statement to execute.
     * @param array $bindings The values to bind to the statement.
     * @return ResultInterface The result of the query.
     */
    public function result($statement, $bindings = []): ResultInterface;

    public function pdo(): \PDO;
}
