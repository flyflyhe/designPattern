<?php
namespace my\php\pattern\abfactory\Json;

use my\php\pattern\abfactory\Text as BaseText;

class Text extends BaseText
{
    public function render()
    {
        return json_encode(['content' => $text]);
    }
}