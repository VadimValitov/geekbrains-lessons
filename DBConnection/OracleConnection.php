<?php

namespace DBConnection;

class OracleConnection implements DBConnection
{
    public function connect()
    {
        echo 'Connect to Oracle.' . PHP_EOL;
    }
}
