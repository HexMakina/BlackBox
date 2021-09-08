<?php

namespace HexMakina\Interfaces\Database;

interface ColumnTypeInterface
{
    public const TYPE_BOOLEAN = 'boolean';

    public const TYPE_INTEGER = 'integer';
    public const TYPE_FLOAT = 'float';
    public const TYPE_DECIMAL = 'decimal';

    public const TYPE_TEXT = 'text';
    public const TYPE_STRING = 'char';

    public const TYPE_DATETIME = 'datetime';
    public const TYPE_DATE = 'date';
    public const TYPE_TIMESTAMP = 'timestamp';
    public const TYPE_TIME = 'time';
    public const TYPE_YEAR = 'year';

    public const TYPE_ENUM = 'enum';

  // public function isText(): bool;
  // public function isString(): bool;
    public function getLength(): int;

  // public function isBoolean(): bool;
  // public function isInteger(): bool;
  // public function isDecimal(): bool;
    public function isNumeric(): bool;

    public function isEnum(): bool;
    public function getEnumValues(): array;

    public function isYear(): bool;
    public function isDate(): bool;
    public function isTime(): bool;
    public function isTimestamp(): bool;
    public function isDatetime(): bool;
    public function isDateOrTime(): bool;

    public function validateValue($field_value);
}
