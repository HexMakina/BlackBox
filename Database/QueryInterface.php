<?php 

/**
 * Interface QueryInterface
 *
 * Provides an interface for building and managing SQL queries.
 *
 * @package HexMakina\BlackBox\Database
 */
namespace HexMakina\BlackBox\Database;

use HexMakina\Crudites\Grammar\Clause\Clause;

interface QueryInterface
{
    /**
     * Returns the generated SQL statement
     *
     * @return string The SQL statement.
     */
    public function statement(): string;

    /**
     * Optional bindings for the query.
     * 
     * @return array An associative array of bind labels and bind values.
     * @return array An empty array if no bindings are set.
     */
    public function bindings(): array;

    /**
     * Returns the clause of the specified type.
     *
     * @param string $clause The type of clause to retrieve.
     * @return mixed The clause of the specified type.
     */
    public function clause(string $clause): ?Clause;

    /**
     * Adds a clause to the query.
     *
     * @param Clause $clause The clause to add.
     * @return self The current instance for method chaining.
     */
    public function add(Clause $clause): self;

    /**
     * Sets a clause to the query, all previous clauses of the same type are removed.
     *
     * @param Clause $clause The clause to set.
     * @return self The current instance for method chaining.
     */
    public function set(Clause $clause): self;
    /**
     * Returns the name of the base table.
     *
     * @return string The table name.
     */
    public function table(): string;

    /**
     * Returns the alias of the base table, if any.
     *
     * @return string|null The table alias or null if no alias is set.
     */
    public function alias(): ?string;

    /**
     * Use base() when you need to address the base table, 
     * but don't know if an alias has already been set.
     * 
     * @return string the base table's alias or name if no alias is set.
     */
    public function base(): string;

    /**
     * Returns an associative array of column names and their corresponding bind labels.
     *
     * @return array An associative array of [column_name => bind_label].
     */
    public function addBindings($assoc_data): array;

    /**
     * Adds a binding for a field and returns the binding name.
     *
     * @param string $field The field name.
     * @param mixed $value The value to bind.
     * @param string $table_name The name of the table.
     * @param string|null $bind_label The binding label (optional).
     * @return string The binding name.
     */
    public function addBinding($field, $value, $table_name, $bind_label = null): string;

}
