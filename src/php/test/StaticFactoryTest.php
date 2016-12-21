<?php
namespace my\php\test;
include dirname(dirname(dirname(__DIR__))).'/vendor/autoload.php';

use my\php\pattern\staticfactory\StaticFactory;
use my\php\pattern\staticfactory\FormatterInterface;
use my\php\pattern\staticfactory\FormatString;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    #数据提供者 需要用注释方式指明哪一个方法使用数据拱给器
    public function getTypeList()
    {
        return [
            ['string'],
        ];
    }

    /** 
     * @dataProvider getTypeList
     */
    public function testCreation($type)
    {
        $obj = StaticFactory::factory($type);
        $this->assertInstanceOf('my\php\pattern\staticfactory\FormatterInterface', $obj);
    }

    public function testException()
    {
        StaticFactory::factory("");
    }
} 