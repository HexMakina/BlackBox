<?php

namespace HexMakina\BlackBox\Database;

interface TraceInterface
{
    public const CODE_CREATE = 'C';
    public const CODE_SELECT = 'R';
    public const CODE_UPDATE = 'U';
    public const CODE_DELETE = 'D';

    // public function queryCode($sql_statement): string;

    // public function history($table_name, $table_pk, $sort='DESC') : array;
}
