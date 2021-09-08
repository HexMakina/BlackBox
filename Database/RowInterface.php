<?php

namespace HexMakina\BlackBox\Database;

interface RowInterface
{
    public function table(): TableManipulationInterface;

    public function lastQuery();

    public function lastAlterQuery(): QueryInterface;

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
     * @param  Array $dat_ass an associative array containing primary key data matches
     * @return $this
     */
    public function load($dat_ass);


    /**
     * records changes vis-à-vis loaded data
     *
     * loops through the $dat_ass params
     *
     * @param  Array $dat_ass an associative array containing the new data
     * @return $this
     */
    public function alter($dat_ass);

    public function persist(): array;
    public function wipe(): bool;

    //------------------------------------------------------------  type:data validation
    /**
     * @return array containing all invalid data, indexed by field name, or empty if all valid
     */
    public function validate(): array;
}
