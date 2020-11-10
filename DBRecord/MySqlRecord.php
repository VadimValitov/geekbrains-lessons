<?php

namespace DBRecord;

class MySqlRecord implements DBRecord
{
    public function dump()
    {
        echo 'MySql record dump' . PHP_EOL;
    }
}
