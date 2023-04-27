<?php

namespace HexMakina\BlackBox\Database;

interface PreparedQueryInterface extends QueryInterface
{
    public function setBindings($dat_ass);

    // returns assoc bind_label => bind_value
    public function getBindings(): array;

    // return an assoc [column_name => bind_label]
    public function getBindingNames(): array;

    // returns an assoc of [field => binding name] of newly addded bindings
    public function addBindings($assoc_data): array;

    // return the binding name computed or given for the field
    public function addBinding($field, $value, $table_name = null, $bind_label = null): string;

    public function bindLabel($field, $table_name = null): string;

    // public function join()
    public function joinedTables(): array;

    public function run(): PreparedQueryInterface;
}
