<?php

namespace HexMakina\BlackBox\ORM;

interface RelationManyToManyInterface
{
    public static function setMany($linked_models, ModelInterface $m);
    public static function setManyByIds($linked_ids, ModelInterface $m);

    public static function otm($k = null);
    public static function model_type(): string;
}
