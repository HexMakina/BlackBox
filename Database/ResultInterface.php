<?php

namespace HexMakina\BlackBox\Database;

interface ResultInterface
{
    /**
     * Runs the statement with the given bindings (optional)
     * Without bindings, the string statement is executed with PDO::query()
     * @param array $bindings
     * @return self
     * @throws CruditesException if the statement could not be queried, executed or prepared or if a PDOException is thrown
     */
    public function run(array $bindings = []);

    /**
     * Returns true if the statement has been executed without error
     * @return bool
     */
    public function ran(): bool;

    /**
     * Returns the result set (by default as an array of associative arrays) 
     * A wrapper for PDOStatement::fetchAll()
     */
    public function ret($mode = \PDO::FETCH_ASSOC, $fetch_argument = null, $ctor_args = null);

    /**
     * Returns the first row of the result set
     * A wrapper for PDOStatement::fetch()
     * @param int $mode 
     * @param mixed $orientation
     * @param mixed $offset 
     * @return mixed
     */
    public function retOne($mode = \PDO::FETCH_ASSOC, $orientation = null, $offset = null);
    public function retObject(string $class = null);

    /**
     * Returns the number of rows affected by the last SQL statement
     * A wrapper for PDOStatement::rowCount()
     * 
     * @return int, -1 if the statement has not been executed
     */
    public function count(): int;

    public function lastInsertId($name = null);
    public function errorInfo(): array;
}