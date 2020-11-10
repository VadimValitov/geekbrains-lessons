<?php

namespace DBQueryBuilder;

use DBConnection\DBConnection;
use DBRecord\DBRecord;
use DBRecord\OracleRecord;

class OracleQueryBuilder implements DBQueryBuilder
{
    private $connection;

    public function __construct(DBConnection $connection)
    {
        $this->connection = $connection;
        $this->connection->connect();
    }

    public function select(): DBRecord
    {
        echo __METHOD__ . ': ';

        return new OracleRecord();
    }

    public function create(DBRecord $record)
    {
        echo __METHOD__ . ': ';
        $record->dump();
    }

    public function update(DBRecord $record)
    {
        echo __METHOD__ . ': ';
        $record->dump();
    }

    public function delete(DBRecord $record)
    {
        echo __METHOD__ . ': ';
        $record->dump();
    }
}
