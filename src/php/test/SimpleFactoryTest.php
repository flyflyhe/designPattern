<?php
namespace my\php\test;
include dirname(dirname(dirname(__DIR__))).'/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use my\php\pattern\simplefactory\Bicycle;
use my\php\pattern\simplefactory\Scooter;
use my\php\pattern\simplefactory\ConcreteFactory;
use my\php\pattern\simplefactory\VehicleInterface;

class SimpleFactoryTest extends TestCase
{
    protected $factory;

    protected function setUp()
    {
        $this->factory = new ConcreteFactory();
    }

    public function testCreation($type)
    {
        $obj = $this->factory->createVehicle($type);
        $this->assertInstanceOf('my\php\pattern\simplefactory\VehicleInterface', $obj);
    }

    public function testBicycle()
    {
        $this->factory->createVehicle('bicycle');        
    }

    public function testBadType()
    {
        $this->factory->createVehicle('car');
    }
}