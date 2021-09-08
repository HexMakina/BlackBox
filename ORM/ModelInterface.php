<?php

namespace HexMakina\Interfaces\ORM;

use HexMakina\Interfaces\Database\{TableManipulationInterface, SelectInterface};

interface ModelInterface
{
    public const IMMORTAL_BY_DEFAULT = true; // immortal by default, prevent deletion without thinking, NEVER change that value

    public function immortal(): bool;

    public function isNew(): bool;

    public function getId($mode = null);

    public function get($prop_name);
    public function set($prop_name, $value);

    public function import($assoc_data);


    public function validate(): array;

    public function before_save(): array;
    public function save($operator_id);
    public function after_save();

    public function before_destroy(): bool;
    public function destroy($operator_id): bool;
    public function after_destroy();

    public static function table(): TableManipulationInterface;
    public static function table_name(): string;
    public static function table_alias(): string;

    public static function model_type(): string;

    public static function query_retrieve($filters = [], $options = []): SelectInterface;
}
