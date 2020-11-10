<?php

spl_autoload_register(function ($name) {
    include __DIR__ . '/' . str_replace('\\', '/', $name) . '.php';
});

use Factory\MySqlFactory;
use Factory\OracleFactory;
use Factory\PlatformFactory;
use Factory\PostgreSqlFactory;

function test(PlatformFactory $factory) {
    $connection = $factory->createConnection();
    $qb = $factory->createQueryBuilder($connection);
    $record = $factory->createRecord();
    $qb->create($record);
    $qb->update($record);
    $qb->delete($record);

    $record = $qb->select();
    $record->dump();
}

test(new MySqlFactory());
test(new PostgreSqlFactory());
test(new OracleFactory());
