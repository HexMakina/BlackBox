<?php

namespace HexMakina\BlackBox\Database;

interface TraceInterface
{
    public const CODE_CREATE = 'C';
    public const CODE_SELECT = 'R';
    public const CODE_UPDATE = 'U';
    public const CODE_DELETE = 'D';

    public function queryCode(): string;
    public function tableName(string $setter = null): string;
    public function tablePk(string $setter = null): string;
    public function operatorId(string $setter = null): string;


    public function isUpdate(bool $setter = null): bool;
    public function isDelete(bool $setter = null): bool;
    public function isInsert(bool $setter = null): bool;
    public function isSelect(bool $setter = null): bool;
}
