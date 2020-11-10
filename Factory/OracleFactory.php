<?php

namespace Factory;

use DBConnection\DBConnection;
use DBConnection\OracleConnection;
use DBQueryBuilder\DBQueryBuilder;
use DBQueryBuilder\OracleQueryBuilder;
use DBRecord\DBRecord;
use DBRecord\OracleRecord;

class OracleFactory implements PlatformFactory
{
    public function createConnection(): DBConnection
    {
        return new OracleConnection();
    }

    public function createQueryBuilder(DBConnection $connection): DBQueryBuilder
    {
        return new OracleQueryBuilder($connection);
    }

    public function createRecord(): DBRecord
    {
        return new OracleRecord();
    }
}
