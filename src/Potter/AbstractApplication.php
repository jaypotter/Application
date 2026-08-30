<?php

declare(strict_types=1);

namespace Potter;

use \Potter\Container;

abstract class AbstractApplication 
    extends \Symfony\Component\Console\Application
    implements ApplicationInterface
{ 
    use \Potter\Environment\EnvironmentTrait;
    
    public function __construct(
        string $name = 'UNKNOWN', 
        string $version = 'UNKNOWN', 
        private ?\Psr\Container\ContainerInterface $container = null
    ) {
        parent::__construct(
            name: $name, 
            version: $version, 
            container: $this->container = new Container
        );
        self::addEnvironment($this);
        $this->addCommands([new \Potter\Command\Start]);
    }
    
    final public function container(): \Potter\Container
    {
        return $this->container;
    }
}
