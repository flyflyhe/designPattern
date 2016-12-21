<?php
namespace my\php\pattern\abfactory\Json;

use my\php\pattern\abfactory\Picture as BasePicture;

class Picture extends BasePicture
{
    public function render()
    {
        return json_encode(['title' => $this->name, 'path' => $this->path]);
    }
}