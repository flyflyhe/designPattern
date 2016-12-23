<?php
namespace my\php\test;
include dirname(dirname(dirname(__DIR__))).'/vendor/autoload.php';

use my\php\pattern\single\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $this->assertInstanceOf('my\php\pattern\single\Singleton', $firstCall);

        $secondCall = Singleton::getInstance();
        $this->assertSame($firstCall, $secondCall);
    }

    public function testNoConstructor()
    {
        $obj = Singleton::getInstance();

        $ref = new \ReflectionObject($obj);
        $method = $ref->getMethod('__construct');
        $this->assertTrue($method->isPrivate());
    }

    public function testunSerialize()
    {
        $obj = Singleton::getInstance();
        $serlize = serialize($obj);
        var_dump($serlize);
        $this->assertTrue(unserialize($serlize)->test);
    }
}