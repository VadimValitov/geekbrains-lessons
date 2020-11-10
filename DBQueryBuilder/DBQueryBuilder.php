<?php

namespace DBQueryBuilder;

use DBRecord\DBRecord;

interface DBQueryBuilder
{
    public function select(): DBRecord;
    public function create(DBRecord $record);
    public function update(DBRecord $record);
    public function delete(DBRecord $record);
}
