<?php

namespace Potter\Application\Database;

use Potter\{
    Application\ApplicationInterface,
    DBAL\Database\DatabaseInterface
};

interface DatabaseApplicationInterface extends ApplicationInterface
{
    public function getDatabase(): DatabaseInterface;

    public function setDatabase(DatabaseInterface $database): void;
}