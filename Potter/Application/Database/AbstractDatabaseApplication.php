<?php

namespace Potter\Application\Database;

use Potter\{
    Application\AbstractApplication,
    DBAL\Database\DatabaseInterface    
};

abstract class AbstractDatabaseApplication extends AbstractApplication implements DatabaseApplicationInterface
{
    abstract public function getDatabase(): DatabaseInterface;

    abstract public function setDatabase(DatabaseInterface $database): void;
}