<?php

namespace HexMakina\BlackBox\Database;

interface TraceInterface
{
    public const CODE_CREATE = 'C';
    public const CODE_SELECT = 'R';
    public const CODE_UPDATE = 'U';
    public const CODE_DELETE = 'D';
    public const CODE_INCREM = 'I';
    public const CODE_TOGGLE = 'T';
    public const CODE_EXPIRE = 'E';
    public const CODE_SOFDEL = 'S';

    public function traceCode(string $setter = null): string;
    public function traceTable(string $setter = null): string;
    public function tracePrimary(string $setter = null): string;
    public function traceBy(string $setter = null): string;
    public function traceOn(string $setter = null): string;

}
