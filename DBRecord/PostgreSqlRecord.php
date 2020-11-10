<?php

namespace DBRecord;

class PostgreSqlRecord implements DBRecord
{
    public function dump()
    {
        echo 'PostgreSql record dump.' . PHP_EOL;
    }
}
