<?php

namespace HexMakina\BlackBox\Database;

interface TableDescriptionInterface
{
    // getters
    public function connection(): ConnectionInterface;
    public function name(): string;

    //introspection

    /** @return array<string,array> */
    public function describe(): array;

    public function addColumn(TableColumnInterface $column);
    public function columns(): array;
    public function column($name);

    public function addPrimaryKey(TableColumnInterface $column);
    public function primaryKeys($with_values = null): array;
    public function primaryKeysMatch($dat_ass): array;

    public function addForeignKey(TableColumnInterface $column);

    /** @return array<string,TableColumnInterface> */
    public function foreignKeysByName(): array;

    /** @return array<string,array> */
    public function foreignKeysByTable(): array;

    public function singleForeignKeyTo(TableDescriptionInterface $other_table) : ?array;


    /** @param array<string,TableColumnInterface> $columns     */
    public function addUniqueKey(string $constraint_name, array $columns);

    /** @return array<string,TableColumnInterface>    */
    public function uniqueKeysByName(): array;

    public function autoIncrementedPrimaryKey(TableColumnInterface $setter = null);

    //EOF introspection
}
