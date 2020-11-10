<?php

namespace DBRecord;

class OracleRecord implements DBRecord
{
    public function dump()
    {
        echo 'Oracle record dump.' . PHP_EOL;
    }
}
