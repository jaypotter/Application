<?php

namespace Potter\Application\Database;

use Potter\DBAL\Database\DatabaseInterface;

trait DatabaseApplicationTrait
{
    private DatabaseInterface $database;

    public function getDatabase(): DatabaseInterface
    {
        return $this->database;
    }

    public function setDatabase(DatabaseInterface $database): void
    {
        $this->database = $database;
    }
}