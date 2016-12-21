<?php
namespace my\php\test;
include dirname(dirname(dirname(__DIR__))).'/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use my\php\pattern\abfactory\HtmlFactory;
use my\php\pattern\abfactory\AbstractFactory;
use my\php\pattern\abfactory\JsonFactory;

class AbstractFactroyTest extends TestCase
{
    public function getFactories()
    {
        return [
            [new JsonFactory()],
            [new HtmlFactory()]
        ];
    }

    /**
     * 这里是工厂的客户端，我们无需关心传递过来的是什么工厂类，
     * 只需以我们想要的方式渲染任意想要的组件即可。
     *
     * @dataProvider getFactories
     */
    public function testComponentCreation(AbstractFactory $factory)
    {
        $article = [
            $factory->createText('设计模式'),
            $factory->createPicture('/image.jpg', '设计'),
            $factory->createText('test')
        ];

        $this->assertContainsOnly('my\php\pattern\abfactory\MediaInterface', $article);
    }
}