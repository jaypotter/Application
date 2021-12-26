<?php

namespace Potter\Application;

final class Application extends AbstractApplication
{
    use ApplicationTrait;

    public function __construct(string $name = self::DEFAULT_NAME)
    {
        $this->setName($name);
    }
}