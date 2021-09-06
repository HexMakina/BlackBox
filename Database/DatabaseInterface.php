<?php

namespace HexMakina\Interfaces\Database;

interface DatabaseInterface
{
    public function connection(): ConnectionInterface;

    public function name();
    
    public function inspect($table_name): TableManipulationInterface;
}
