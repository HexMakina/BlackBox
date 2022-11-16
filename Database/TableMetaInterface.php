<?php

namespace HexMakina\BlackBox\Database;

interface TableMetaInterface
{
    // getters
    public function connection(): ConnectionInterface;
    public function name(): string;

    //introspection

    /** @return array<string,array> */
    public function describe($schema): void;

    public function addColumn(ColumnInterface $column);
    public function columns(): array;
    public function column(string $name): ?ColumnInterface;

    public function addPrimaryKey(ColumnInterface $column);
    public function primaryKeys($with_values = null): array;
    public function primaryKeysMatch($dat_ass): array;

    public function addForeignKey(ColumnInterface $column);

    /** @return array<string,ColumnInterface> */
    public function foreignKeysByName(): array;

    /** @return array<string,array> */
    public function foreignKeysByTable(): array;

    public function singleForeignKeyTo(TableMetaInterface $other_table): ?ColumnInterface;


    /** @param array<string,ColumnInterface> $columns     */
    public function addUniqueKey(string $constraint_name, array $columns);

    /** @return array<string,ColumnInterface>    */
    public function uniqueKeysByName(): array;

    public function autoIncrementedPrimaryKey(ColumnInterface $setter = null);

    //EOF introspection
}
