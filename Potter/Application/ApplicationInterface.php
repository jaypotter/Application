<?php

namespace Potter\Application;

interface ApplicationInterface
{
    public const DEFAULT_NAME = 'PHP 8 Application';

    public function getName(): string;

    public function setName(string $name): void;
}