<?php
namespace my\php\test;
include dirname(dirname(dirname(__DIR__))).'/vendor/autoload.php';
use my\php\pattern\decorator\Webservice;
use my\php\pattern\decorator\Renderjson;
use my\php\pattern\decorator\Decorator;
use my\php\pattern\decorator\RendererInterface;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    protected $service;

    protected function setUp()
    {
        $this->service = new Webservice(['msg' => 'phpunit']);
    }

    public function testJsonDecorator()
    {
        $service = new Renderjson($this->service);
        $this->assertEquals('{"msg":"phpunit"}', $service->renderData());
    }

    public function testDecoratorMustImplementsRenderer()
    {
        $className = 'my\php\pattern\decorator\Decorator';
        $interfaceName = 'my\php\pattern\decorator\RendererInterface';
        $this->assertTrue(is_subclass_of($className, $interfaceName));
    }

    public function testDecoratorOnlyAcceptRenderer()
    {
        $mock = $this->getMock('my\php\pattern\decorator\RendererInterface');
        $dec = $this->getMockForAbstractClass('my\php\pattern\decorator\Decorator', array($mock));
        $this->assertNotNull($dec);
    }
}