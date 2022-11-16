<?php

namespace HexMakina\BlackBox\Database;

interface ColumnInterface
{
    public function name(): string;
    public function tableName(): string;

    public function type(): ?ColumnTypeInterface;

    public function isPrimary(): bool;
    public function isForeign($setter = null): bool;
    public function isIndex($setter = null): bool;

    public function isAutoIncremented(): bool;
    public function isNullable(): bool;

    public function default();

    public function foreignTableName(): ?string;
    public function foreignTableAlias(): ?string;
    public function foreignColumnName(): ?string;

    public function setForeignTableName(?string $setter): void;
    public function setForeignColumnName(?string $setter): void;
    public function uniqueName($setter = null);
    public function uniqueGroupName($setter = null);
}
