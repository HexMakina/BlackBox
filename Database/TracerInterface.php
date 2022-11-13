<?php

namespace HexMakina\BlackBox\Database;

interface TracerInterface
{
    public function tracingTable(): TableManipulationInterface;

    public function trace(TraceInterface $trace): bool;

    /**
     * @param array<string, mixed> $options
     * @return array<array>
     */
    public function traces(array $options = []): array;
}
