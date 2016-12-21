<?php
namespace my\php\pattern\abfactory\Json;

use my\php\pattern\abfactory\Picture as BasePicture;

class Picture extends BasePicture
{
    public function render()
    {
        return sprintf('<img src="%s" title="%s"/>', $this->path, $this->name);
    }
}