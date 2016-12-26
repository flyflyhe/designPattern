<?php
namespace my\php\pattern\factorymethod;

class Porsche implements VehicleInterface
{
    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }

    public function addTuningAMG()
    {
        
    }
}