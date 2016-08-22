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
     * @var array
     */
    protected $aliases = [];

    /**
     * @param ContainerInterface $container
     * @param mixed              $context
     * @param array              $aliases
     */
    public function __construct(ContainerInterface $container, $context = null, array $aliases = [])
    {
        $this->container = $container;
        $this->context = $context;
        $this->aliases += $aliases;

        foreach ($this->aliases as $alias => $original) {
            $this->container->addAlias($original, $alias);
        }
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

    /**
     * @see ContainerInterface::get();
     */
    public function get($key, array $options = [], $default = null)
    {
        $helper = $this->container->get($key, $options, $default);

        if ($helper instanceof ContextInterface) {
            $helper->setContext($this->context);
        }

        return $helper;
    }

    /**
     * @ignore
     */
    public function __call($method, $arguments)
    {
        return call_user_func([$this->container, $method], $arguments);
    }
}
