<?php

namespace HexMakina\BlackBox\Database;

interface TableDescriptionInterface
{
    // getters
    public function connection(): ConnectionInterface;
    public function name(): string;

    //introspection
    public function addColumn(TableColumnInterface $column);
    public function columns(): array;
    public function column($name);

    public function addPrimaryKey(TableColumnInterface $column);
    public function primaryKeys($with_values = null): array;
    public function primaryKeysMatch($dat_ass): array;

    public function addForeignKey(TableColumnInterface $column);
    public function foreignKeysByName(): array;
    public function foreignKeysByTable(): array;
    public function singleForeignKeyTo($other_table);

    public function addUniqueKey($constraint_name, $columns);
    public function uniqueKeysByName(): array;

    public function autoIncrementedPrimaryKey(TableColumnInterface $setter = null);

    //EOF introspection
}
