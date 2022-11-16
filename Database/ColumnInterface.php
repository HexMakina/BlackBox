<?php

namespace HexMakina\BlackBox\Database;

interface ColumnInterface
{
    public function name(): string;
    public function tableName(): string;

    public function type(): ?ColumnTypeInterface;

    public function isPrimary(bool $setter = null): bool;
    public function isForeign(bool $setter = null): bool;
    public function isIndex(bool $setter = null): bool;
    public function isAutoIncremented(bool $setter = null): bool;
    public function isNullable(bool $setter = null): bool;

    public function default();

    public function foreignTableName(): ?string;
    public function foreignTableAlias(): ?string;
    public function foreignColumnName(): ?string;

    public function setForeignTableName(?string $setter): void;
    public function setForeignColumnName(?string $setter): void;
    public function uniqueName(string $setter = null);
    public function uniqueGroupName(string $setter = null);
}
