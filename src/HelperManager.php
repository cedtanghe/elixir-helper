<?php

namespace Elixir\Helper;

use Elixir\DI\ContainerInterface;

/**
 * @author Cédric Tanghe <ced.tanghe@gmail.com>
 */
class HelperManager
{
    /**
     * @var mixed
     */
    protected $context;
    
    /**
     * @var ContainerInterface
     */
    protected $container;
    
    /**
     * @param ContainerInterface $container
     * @param mixed $context
     */
    public function __construct(ContainerInterface $container, $context = null) 
    {
        $this->container = $container;
        $this->context = $context;
    }
    
    /**
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }
    
    /**
     * @param mixed $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }
    
    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }
}
