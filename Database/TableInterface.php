<?php

namespace HexMakina\BlackBox\Database;

interface TableInterface extends TableMetaInterface
{
    // fetch or instantiate new Table\Rows

    /**
      * creates a new Row based on the table
      * @param array<mixed,mixed> $dat_ass
      */
    public function produce(array $dat_ass = []): RowInterface;

    /** @param array<mixed,mixed> $dat_ass */
    public function restore(array $dat_ass): RowInterface;

    // query generators


    /** @param array<mixed,mixed> $dat_ass   */
    public function insert(array $dat_ass): QueryInterface;

    /** @param array<string,string> $columns */
    public function select(array $columns = null, string $table_alias = null): SelectInterface;

    /** @param array<mixed,mixed> $modifications
      * @param array<mixed,mixed> $conditions
      */
    public function update(array $modifications = [], array $conditions = []): QueryInterface;

    /** @param array<string,mixed> $conditions */
    public function delete(array $conditions): QueryInterface;

}
