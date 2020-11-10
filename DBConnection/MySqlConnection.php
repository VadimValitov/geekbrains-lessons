<?php

namespace DBConnection;

class MySqlConnection implements DBConnection
{
    public function connect()
    {
        echo 'Connect to MySql.' . PHP_EOL;
    }
}
