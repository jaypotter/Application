<?php

namespace Potter\Application;

abstract class AbstractApplication implements ApplicationInterface
{
    abstract public function getName(): string;

    abstract public function setName(string $name): void;
}