<?php

namespace Potter\Application\Database;

use Potter\Application\{
    AbstractApplication,
    ApplicationTrait
};
use Potter\DBAL\Database\DatabaseInterface;

abstract class AbstractDatabaseApplication extends AbstractApplication implements DatabaseApplicationInterface
{
    use ApplicationTrait;
    
    abstract public function getDatabase(): DatabaseInterface;

    abstract public function setDatabase(DatabaseInterface $database): void;
}