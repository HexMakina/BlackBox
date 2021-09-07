<?php

namespace HexMakina\Interfaces\Database;

interface TableManipulationInterface extends TableDescriptionInterface
{
    // fetch or instanciate new Table\Rows
    public function produce($dat_ass = []): RowInterface;
    public function restore($dat_ass): RowInterface;

    // query generators
    public function insert($values = []): QueryInterface;
    public function select($columns = null, $table_alias = null): SelectInterface;
    public function update($modifications = [], $conditions = []): QueryInterface;
    public function delete($conditions = []): QueryInterface;
}
