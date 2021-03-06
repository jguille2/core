<?php

namespace Zikula\Core\Forms\Renderer;

use Symfony\Component\Form\FormView;
use Zikula\Core\Forms\RendererInterface;
use Zikula\Core\Forms\FormRenderer;

/**
 *
 */
class RepeatedRow implements RendererInterface
{
    public function getName()
    {
        return 'repeated_row';
    }
    
    public function render(FormView $form, $variables, FormRenderer $renderer)
    {
        return $renderer->getRender('field_rows')->render($form, $variables, $renderer);
    }
}
