<?php
namespace my\php\pattern\test;
include dirname(dirname(dirname(__DIR__))).'/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use my\php\pattern\build\BikeBuilder;
use my\php\pattern\build\Director;
use my\php\pattern\build\BuilderInterface;
/**
 * DirectorTest 用于测试建造者模式
 */
class DirectorTest extends TestCase
{

    protected $director;

    protected function setUp()
    {
        $this->director = new Director();
    }

    public function getBuilder()
    {
        return array(
            array(new BikeBuilder()),
        );
    }

   /**
    * 这里我们测试建造过程，客户端并不知道具体的建造者。
    *
    * @dataProvider getBuilder
    */
    public function testBuild(BuilderInterface $builder)
    {
        $newVehicle = $this->director->build($builder);
        $this->assertInstanceOf('my\php\pattern\build\Parts\Vehicle', $newVehicle);
    }
}