<?php


namespace HexMakina\BlackBox\Database;

interface ClauseInterface
{
    public const SELECT = 'SELECT FROM';
    public const JOIN = 'JOIN';
    public const JOINS = 'JOINS';
    public const WHERE = 'WHERE';
    public const ORDER = 'ORDER BY';
    public const GROUP = 'GROUP BY';
    public const HAVING = 'HAVING';
    public const LIMIT = 'LIMIT';

    public const UPDATE = 'UPDATE';
    public const SET = 'SET';

    public const INSERT = 'INSERT INTO';
    public const VALUES = 'VALUES';
    public const DELETE = 'DELETE FROM';
    
    public function __toString(): string;

    /**
     * @return string The name of the clause, from the constants defined in this interface.
     */
    public function name(): string;

    /**
     * @return array<string,mixed> The values to bind to the statement.
     */
    public function bindings(): array;

    /**
     * @param mixed $something The value/predicate/string to add to the clause.
     * @return ClauseInterface $this
     */
    public function add($something): ClauseInterface;
}
