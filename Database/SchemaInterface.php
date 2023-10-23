<?php

namespace HexMakina\BlackBox\Database;

interface SchemaInterface
{
    public function table(string $table_name): TableInterface;

    public function uniqueConstraintNameFor(string $table, string $column): ?string;

    public function uniqueColumnNamesFor(string $table, string $column): array;

    public function foreignKeysFor(?string $table_name = null, ?string $column_name = null): ?array;

}
