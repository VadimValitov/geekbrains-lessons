<?php

namespace Factory;

use DBConnection\DBConnection;
use DBConnection\MySqlConnection;
use DBQueryBuilder\DBQueryBuilder;
use DBQueryBuilder\MySqlQueryBuilder;
use DBRecord\DBRecord;
use DBRecord\MySqlRecord;

class MySqlFactory implements PlatformFactory
{
    public function createConnection(): DBConnection
    {
        return new MySqlConnection();
    }

    public function createQueryBuilder(DBConnection $connection): DBQueryBuilder
    {
        return new MySqlQueryBuilder($connection);
    }

    public function createRecord(): DBRecord
    {
        return new MySqlRecord();
    }
}
