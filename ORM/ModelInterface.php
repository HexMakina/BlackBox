<?php

namespace HexMakina\BlackBox\ORM;

use HexMakina\BlackBox\Database\{TableInterface, SelectInterface};

interface ModelInterface
{
    public const IMMORTAL_BY_DEFAULT = true; // immortal by default, prevent deletion without thinking, NEVER change that value

    public function immortal(): bool;

    public function isNew(): bool;

    public function id();
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

    public static function table(): string;
    public static function tableAlias(): string;

    public static function model_type(): string;

    public static function filter($filters = [], $options = []): SelectInterface;
}
