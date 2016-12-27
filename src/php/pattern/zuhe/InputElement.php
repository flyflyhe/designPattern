<?php
namespace my\php\pattern\zuhe;

class InputElement extends FormElement
{
    public function render($indent = 0)
    {
        return str_repeat('  ', $indent).'<input type="text" />';
    }
}