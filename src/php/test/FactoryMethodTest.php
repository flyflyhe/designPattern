<?php
namespace my\php\test;
include dirname(dirname(dirname(__DIR__))).'/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use my\php\pattern\factorymethod\FactoryMethod;
use my\php\pattern\factorymethod\ItalianFactory;
use my\php\pattern\factorymethod\GermanFactory;

class FactoryMethodTest extends TestCase
{
    protected $type = [
        FactoryMethod::CHEAP,
        FactoryMethod::FAST,
    ];

    public function getShop()
    {
        return [
            [new GermanFactory()],
            [new ItalianFactory()]
        ];
    }

    /**
     *@dataProvider getShop
     */
    public function testCreation(FactoryMethod $shop)
    {
        #该方法扮演客户端角色，我们不关心什么工厂，我们只知道可以用它来造车
        foreach ($this->type as $oneType) {
            $vehicle = $shop->create($oneType);
            $this->assertInstanceOf('my\php\pattern\factorymethod\VehicleInterface', $vehicle);
        }
    }

    /**
     *@dataProvider getShop
     *@expectedException \InvalidArgementException
     *@expectedExceptionMessage spaceship is not a valid vehicle
     */
    public function testUnKnownType(FactoryMethod $shop)
    {
        $shop->create('spaceship');
    }
}