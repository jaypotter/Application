<?php

namespace Potter\Application;

trait ApplicationTrait
{
    private string $name = ApplicationInterface::DEFAULT_NAME;

    final public function getName(): string
    {
        return $this->name;
    }

    final public function setName(string $name): void
    {
        $this->name = $name;
    }
}