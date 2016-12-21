<?php
namespace my\php\pattern\abfactory\Text;

use my\php\pattern\abfactory\Text as BaseText;

class Text extends BaseText
{
    public function render()
    {
        return '<div>' . htmlspecialchars($this->text) . '</div>';
    }
}