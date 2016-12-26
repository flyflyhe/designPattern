<?php
namespace my\php\pattern\factorymethod;

class Ferrari implements VehicleInterface
{
    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}