<?php

namespace HexMakina\BlackBox\Database;

interface TracerInterface
{
    public const CODE_CREATE = 'C';
    public const CODE_SELECT = 'R';
    public const CODE_UPDATE = 'U';
    public const CODE_DELETE = 'D';

    public function tracingTable(): TableInterface;

    public function trace(TraceInterface $trace): bool;

    /**
     * @param array<string, mixed> $options
     * @return array<array>
     */
    public function traces($options = []): array;
}
