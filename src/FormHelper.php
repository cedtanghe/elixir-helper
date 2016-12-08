<?php

namespace Elixir\Helper;

use Elixir\Form\FormInterface;

/**
 * @author Cédric Tanghe <ced.tanghe@gmail.com>
 */
class FormHelper implements HelperInterface
{
    public function __construct($theme = 'default')
    {
        // Todo
    }
    
    /**
     * @param string $theme
     * @return self
     */
    public function withTheme($theme)
    {
        // Todo
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function __invoke(FormInterface $form)
    {
        // Todo
    }
}
