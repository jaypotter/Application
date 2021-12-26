<?php

namespace Potter\Application\Database;

use Potter\DBAL\Database\DatabaseInterface;

final class DatabaseApplication extends AbstractDatabaseApplication
{
    use DatabaseApplicationTrait;

    public function __construct(DatabaseInterface $database, string $name = self::DEFAULT_NAME)
    {
        $this->setDatabase($database);
        parent::_construct($name);
    }
}