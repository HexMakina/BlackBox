<?php

namespace HexMakina\BlackBox\Database;

interface QueryInterface
{
    public function statement(): string;

    public function connection(ConnectionInterface $setter = null): ConnectionInterface;

    public function table(): TableInterface;
    public function tableAlias($setter = null): string;

    public function isExecuted(): bool;
    public function isSuccess(): bool;

    public function setBindings($dat_ass);

    // returns assoc bind_label => bind_value
    public function getBindings(): array;

    // return an assoc [column_name => bind_label]
    public function getBindingNames(): array;

    // return the binding name computed or given for the field
    public function addBinding($field, $value, $table_name, $bind_label = null): string;

    public function bindLabel($field, $table_name = null): string;

    public function backTick($string, $table_name = null): string;

    // public function join()
    public function joinedTables(): array;

    public function run(): QueryInterface;


    public function errorInfo(): array;
}
