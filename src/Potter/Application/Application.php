<?php

declare(strict_types=1);

namespace Potter\Application;

use \Potter\Aware\{AwareInterface, AwareTrait};
use \Potter\Cloneable\{CloneableInterface, CloneableTrait};
use \Potter\Container\ContainerInterface;
use \Potter\Container\Aware\{ContainerAwareInterface, ContainerAwareTrait};
use \Potter\Session\Aware\{SessionAwareInterface, SessionAwareTrait};

final class Application extends AbstractApplication implements AwareInterface, CloneableInterface, ContainerAwareInterface, SessionAwareInterface
{
    use ApplicationTrait, AwareTrait, CloneableTrait, ContainerAwareTrait, SessionAwareTrait;
    
    public function __construct(ContainerInterface $container)
    {
        $this->setContainer($container);
        $this->start();
    }
}