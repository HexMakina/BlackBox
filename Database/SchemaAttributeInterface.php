<?php

namespace HexMakina\BlackBox\Database;


interface SchemaAttributeInterface
{
    public const TYPE_BOOLEAN = 'boolean';

    public const TYPE_INTEGER = 'integer';
    public const TYPE_FLOAT = 'float';
    public const TYPE_DECIMAL = 'decimal';

    public const TYPE_TEXT = 'text';
    public const TYPE_STRING = 'string';

    public const TYPE_DATETIME = 'datetime';
    public const TYPE_DATE = 'date';
    public const TYPE_TIMESTAMP = 'timestamp';
    public const TYPE_TIME = 'time';
    public const TYPE_YEAR = 'year';

    public const TYPE_ENUM = 'enum';

    public function nullable(): bool;
    public function default();
    public function length(): ?int;
    public function precision(): ?int;
    public function scale(): ?int;
    public function enums(): array;
    public function type(): ?string;
    public function isAuto(): bool;

    public function validateValue($value = null): ?string;
}