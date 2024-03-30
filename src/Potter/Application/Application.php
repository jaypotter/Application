<?php

declare(strict_types=1);

namespace Potter\Application;

use \Potter\Aware\{AwareInterface, AwareTrait};
use \Potter\Cloneable\{CloneableInterface, CloneableTrait};
use \Potter\Container\ContainerInterface, \Potter\Container\Aware\{ContainerAwareInterface, ContainerAwareTrait};
use \Potter\Buffer\Output\Aware\{OutputBufferAwareInterface, OutputBufferAwareTrait};
use \Potter\Session\Aware\{SessionAwareInterface, SessionAwareTrait};

final class Application extends AbstractApplication implements AwareInterface, CloneableInterface, ContainerAwareInterface, OutputBufferAwareInterface, SessionAwareInterface
{
    use ApplicationTrait, AwareTrait, CloneableTrait, ContainerAwareTrait, OutputBufferAwareTrait, SessionAwareTrait;
    
    public function __construct(ContainerInterface $container)
    {
        $this->setContainer($container);
        $this->start();
    }
}