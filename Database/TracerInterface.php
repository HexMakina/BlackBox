<?php

namespace HexMakina\Interfaces\Database;

interface TracerInterface
{
    public const CODE_CREATE = 'C';
    public const CODE_SELECT = 'R';
    public const CODE_UPDATE = 'U';
    public const CODE_DELETE = 'D';

    public function tracingTable(): TableManipulationInterface;

    public function trace(TraceInterface $trace): bool;
    public function traces($options = []): array;

    // public function queryCode($sql_statement): string;

    // public function history($table_name, $table_pk, $sort='DESC') : array;
}
