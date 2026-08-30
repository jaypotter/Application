<?php

declare(strict_types=1);

namespace Potter\Command;

final class Start 
    extends \Potter\Command
{
    protected function configure(): void
    {
        $this->setName('start')
            ->setDescription('Start the web application');
    }
}
