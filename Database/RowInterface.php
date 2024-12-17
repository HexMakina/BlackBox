<?php

namespace HexMakina\BlackBox\Database;

interface RowInterface
{
    public function table(): string;

    public function isNew(): bool;

    public function isAltered(): bool;


    /**
     * records changes vis-à-vis loaded data
     *
     * loops through the $dat_ass params
     *
     * @param  array<int|string,mixed> $dat_ass an associative array containing the new data
     */
    public function import(array $dat_ass): Rowinterface;

    public function export(): array;


    /**
     * loads row content from database if the associative data $dat_ass 
     * contains unique data matches (primary keys & unique constraints)
     *
     * if $dat_ass matches, it queries the dabase and sets the $load property
     * $load stays null if
     * 1. not match is found in $dat_ass
     * 2. multiple or no records are returned
     *
     * @param  array<int|string,mixed> $dat_ass an associative array 
     */
    public function load(?array $dat_ass): Rowinterface;
    public function save(): array;
    public function wipe(): bool;

    //------------------------------------------------------------  type:data validation
    /**
     * @return array containing all invalid data, indexed by field name, or empty if all valid
     */
    public function validate(): array;
}
