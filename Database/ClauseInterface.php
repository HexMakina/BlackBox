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
    public function bindings(): array;
    public function name(): string;
}
