<?php
namespace my\php\pattern\build;

class BikeBuilder implements BuilderInterface
{
    protected $bike;

    public function addDoors()
    {
        $this->bike->setPart('doors', new parts\Door());        
    }

    public function addEngine()
    {
        $this->bike->setPart('engine', new parts\Engine());
    }

    public function addWheel()
    {
        $this->bike->setPart('forwardWheel', new parts\Wheel());
        $this->bike->setPart('rearWheel', new parts\Wheel());
    }

    public function createVehicle()
    {
        $this->bike = new parts\Bike();
    }

    public function getVehicle()
    {
        return $this->bike;
    }
}