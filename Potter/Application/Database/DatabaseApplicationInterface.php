<?php

namespace Potter\Application\Database;

use Potter\DBAL\Database\DatabaseInterface;

interface DatabaseApplicationInterface
{
    public function getDatabase(): DatabaseInterface;

    public function setDatabase(DatabaseInterface $database): void;    
}