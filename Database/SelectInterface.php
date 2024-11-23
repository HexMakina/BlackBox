<?php

namespace HexMakina\BlackBox\Database;

interface SelectInterface extends PreparedQueryInterface
{
    public function tableLabel($forced_value = null);

    public function columns($setter = null);
    public function selectAlso(array $setter);

    public function join($table_names, $joins, $join_type = '');
    public function groupBy($clause);
    public function having($condition);
    public function orderBy($clause);
    public function limit($number, $offset = null);
    public function addJoinedTable($name, $alias);

    public function retObj($c = null);
    public function retNum();
    public function retAss();
    public function retCol();
    public function retPar();
    public function retKey();

    public function where($where_condition);
    public function whereWithBind($where);
    public function whereBindField($table, $field, $operator, $value);

    public function whereEqualOrNull($field, $value, $table_name = null, $bindname = null);

    public function whereNotEQ($field, $value, $table_name = null, $bindname = null);
    public function whereEQ($field, $value, $table_name = null, $bindname = null);
    public function whereGT($field, $value, $table_name = null, $bindname = null);
    public function whereLT($field, $value, $table_name = null, $bindname = null);

    public function whereGTE($field, $value, $table_name = null, $bindname = null);
    public function whereLTE($field, $value, $table_name = null, $bindname = null);

    public function whereFieldsEQ($assoc_data, $table_name = null);

    public function whereLike($field, $prep_value, $table_name = null, $bindname = null);
    public function whereNotLike($field, $prep_value, $table_name = null, $bindname = null);

    public function whereNumericIn($field, $values, $table_name = null);
    public function whereStringIn($field, $values, $table_name = null);

    public function whereEmpty($field, $table_name = null);
    public function whereNotEmpty($field, $table_name = null);
    public function whereIsNull($field, $table_name = null);

    public function whereField($field, $condition, $table_name = null);

    public function whereFilterContent(array $filters_content, $search_table = null, $filters_operator = null);
}
