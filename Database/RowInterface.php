<?php

namespace HexMakina\BlackBox\Database;

interface RowInterface
{
    public function table(): string;

    public function isNew(): bool;

    public function isAltered(): bool;

    public function export(): array;


    /**
     * loads row content from database,
     *
     * looks for primary key matching data in $dat_ass and sets the $load variable
     * $load stays null if
     * 1. not match is found in $dat_ass
     * 2. multiple records are returned
     * 3. no record is found
     *
     * @param  array<int|string,mixed> $dat_ass an associative array containing primary key data matches
     */
    public function load(array $dat_ass): Rowinterface;


    /**
     * records changes vis-à-vis loaded data
     *
     * loops through the $dat_ass params
     *
     * @param  array<int|string,mixed> $dat_ass an associative array containing the new data
     */
    public function alter(array $dat_ass): Rowinterface;

    public function persist(): array;
    public function wipe(): bool;

    //------------------------------------------------------------  type:data validation
    /**
     * @return array containing all invalid data, indexed by field name, or empty if all valid
     */
    public function validate(): array;
}
