<?php

namespace HexMakina\BlackBox\Database;

/**
 * Interface SchemaInterface
 *
 * Provides an interface for database schema operations.
 */
interface SchemaInterface
{
    /**
     * Retrieves all tables in the database.
     * @return array<string> The names of the tables.
     */
    public function tables(): array;

    /**
     * Checks if a table exists in the database.
     *
     * @param string $table
     * @return bool
     */
    public function hasTable(string $table): bool;

    /**
     * Retrieves the primary key columns for the specified table.
     *
     * @param string $table The name of the table.
     * @return array<int,string> An array of column names that are part of the primary key.
     */
    public function primaryKeys(string $table): array;

    /**
     * Retrieves the auto-incremented primary key column for the specified table.
     * 
     * @param string $table The name of the table.
     * @return string|null The name of the auto-incremented primary key column, or null if the table has no auto-incremented primary key.
     */
    public function autoIncrementedPrimaryKey(string $table): ?string;

    /**
     * Retrieves the foreign keys of a table.
     *
     * @param string $table
     * @return array<string,array> An array of foreign references [table, column], indexed by column name.
     */
    public function foreignKeys(string $table): array;

    /**
     * Retrieves the foreign key details for a specific column in a table.
     *
     * @param string $table
     * @param string $column
     * @return array<int,string> An array [table, column] of the foreign reference.
     */
    public function foreignKey(string $table, string $column): array;

    /**
     * Retrieves the unique keys of a table.
     *
     * @param string $table
     * @return array
     */
    public function uniqueKeys(string $table): array;

    /**
     * Retrieves the columns associated with a unique constraint by name.
     *
     * @param string $table
     * @param string $constraint
     * @return array<int,string> The sets of unique columns, indexed by constraint name.
     */
    public function uniqueColumnsByName(string $table, string $constraint): array;

    /**
     * Retrieves the unique constraints for a specific column in a table.
     *
     * @param string $table
     * @param string $column
     * @return array<string,array> The sets of unique constraints columns the column belongs to, indexed by constraint name.
     */
    public function uniqueColumnsFor(string $table, string $column): array;

    /**
     * Retrieves the names of the columns in the specified table.
     *
     * @param string $table The name of the table.
     * @return array<string> The names of the columns in the table.
     */
    public function columns(string $table): array;

    /**
     * Checks if a column exists in a table.
     *
     * @param string $table
     * @param string $column
     * @return bool
     */
    public function hasColumn(string $table, string $column): bool;

    /**
     * Retrieves the schema information for the specified column in the table.
     *
     * @param string $table The name of the table.
     * @param string $column The name of the column.
     * @return array The schema information for the column.
     * @throws \InvalidArgumentException If the column or table do not exist
     */
    public function column(string $table, string $column): array;

    /**
     * Retrieves the attributes for the specified column in the table.
     *
     * @param string $table The name of the table.
     * @param string $column The name of the column.
     * @return SchemaAttributeInterface The attributes of the column.
     */
    public function attributes(string $table, string $column): SchemaAttributeInterface;

    /**
     * Matches data against unique constraints in a table.
     *
     * @param string $table The name of the table.
     * @param array $dat_ass The data to match.
     * @return array The matched uniqueness constraints.
     */
    public function matchUniqueness(string $table, array $dat_ass): array;

    /**
     * Matches data against primary keys in a table.
     *
     * @param string $table The name of the table.
     * @param array $dat_ass The data to match.
     * @return array|null The matched primary key constraints, or null if no match is found.
     */
    public function matchPrimaryKeys(string $table, array $dat_ass): ?array;

    /**
     * Matches data against unique keys in a table.
     *
     * @param string $table The name of the table.
     * @param array $dat_ass The data to match.
     * @return array|null The matched unique key constraints, or null if no match is found.
     */
    public function matchUniqueKeys(string $table, array $dat_ass): ?array;

    /**
     * Creates an insert query for the specified table with the given data.
     *
     * @param string $table The name of the table.
     * @param array $dat_ass The data to insert.
     * @return QueryInterface The insert query.
     */
    public function insert(string $table, array $dat_ass): QueryInterface;

    /**
     * Creates an update query for the specified table with the given alterations and conditions.
     *
     * @param string $table The name of the table.
     * @param array<string,mixed> $alterations The data to update.
     * @param array<string,mixed> $conditions The conditions for the update.
     * @return QueryInterface The update query.
     */
    public function update(string $table, array $alterations = [], array $conditions = []): QueryInterface;

    /**
     * Creates a delete query for the specified table with the given conditions.
     *
     * @param string $table The name of the table.
     * @param array<string,mixed> $conditions The conditions for the delete.
     * @return QueryInterface The delete query.
     */
    public function delete(string $table, array $conditions): QueryInterface;
    
    /**
     * Creates a select query for the specified table with the given columns and table alias.
     *
     * @param string $table The name of the table.
     * @param array|null $columns The columns to select.
     * @param string|null $table_alias The alias for the table.
     * @return SelectInterface The select query.
     */
    public function select(string $table, array $columns = null, string $table_alias = null): QueryInterface;
}
