<?php

namespace Factory;

use DBConnection\DBConnection;
use DBConnection\PostgreSqlConnection;
use DBQueryBuilder\DBQueryBuilder;
use DBQueryBuilder\PostgreSqlQueryBuilder;
use DBRecord\DBRecord;
use DBRecord\PostgreSqlRecord;

class PostgreSqlFactory implements PlatformFactory
{
    public function createConnection(): DBConnection
    {
        return new PostgreSqlConnection();
    }

    public function createQueryBuilder(DBConnection $connection): DBQueryBuilder
    {
        return new PostgreSqlQueryBuilder($connection);
    }

    public function createRecord(): DBRecord
    {
        return new PostgreSqlRecord();
    }
}
