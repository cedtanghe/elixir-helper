<?php

namespace Elixir\Helper;

use Elixir\Form\FormInterface;

/**
 * @author Cédric Tanghe <ced.tanghe@gmail.com>
 */
class FormHelper implements HelperInterface
{
    /**
     * @var callable 
     */
    protected $escaper;

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        // Todo
    }
    
    /**
     * @param callable $value
     */
    public function setEscaper(callable $value)
    {
        $this->escaper = $value;
    }
    
    /**
     * @return callable
     */
    public function getEscaper()
    {
        return $this->escaper;
    }
    
    /**
     * {@inheritdoc}
     */
    public function __invoke(FormInterface $form)
    {
        // Todo
    }
}
