<?php

namespace Factory;

use DBConnection\DBConnection;
use DBQueryBuilder\DBQueryBuilder;
use DBRecord\DBRecord;

interface PlatformFactory
{
    public function createConnection(): DBConnection;
    public function createQueryBuilder(DBConnection $connection): DBQueryBuilder;
    public function createRecord(): DBRecord;
}
