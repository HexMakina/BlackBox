<?php

namespace HexMakina\Interfaces\Database;

interface QueryInterface
{
    public function statement($setter = null): string;

    public function connection(ConnectionInterface $setter = null): ConnectionInterface;

    public function tableName(): string;
    public function table(): TableManipulationInterface;

    public function isPrepared();
    public function isExecuted($setter = null): bool;
    public function isSuccess(): bool;

    public function setBindings($dat_ass);
    public function getBindings(): array;

    public function addBindings($assoc_data): array;
    public function addBinding($field, $value, $table_name=null, $bind_label=null): string;

    public function bindLabel($field, $table_name = null): string;

    public function backTick($string, $table_name=null): string;

    public function run(): QueryInterface;
}
