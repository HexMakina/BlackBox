<?php

namespace HexMakina\BlackBox\Database;

interface QueryInterface
{

    // returns the SQL statement
    public function statement(): string;

    // returns assoc bind_label => bind_value
    public function bindings(): array;


    public function table(): string;
    public function tableAlias($setter = null): string;

    // returns an assoc of [field => binding name] of newly addded bindings
    public function addBindings($assoc_data): array;

    // return the binding name computed or given for the field
    public function addBinding($field, $value, $table_name, $bind_label = null): string;

    // return an assoc [column_name => bind_label]
    public function getBindingNames(): array;

    public function clause(string $clause);

}
