<?php
namespace my\php\pattern\factorymethod;

class Bicycle implements VehicleInterface
{
    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}