<?php

namespace DBConnection;

class PostgreSqlConnection implements DBConnection
{
    public function connect()
    {
        echo 'Connect to PostgreSql.' . PHP_EOL;
    }
}
