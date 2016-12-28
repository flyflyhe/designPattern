<?php
namespace my\php\test;
include dirname(dirname(dirname(__DIR__))).'/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use my\php\pattern\zuhe;

class ZuheTest extends TestCase
{
    public function testRender()
    {
        $form = new zuhe\FormElement();
        $form->addElement(new zuhe\TextElement);
        $form->addElement(new zuhe\InputElement);
        $embed = new zuhe\FormElement();
        $embed->addElement(new zuhe\TextElement);
        $embed->addElement(new zuhe\InputElement);
        $form->addElement($embed);
        $this->assertRegExp('/^\s/m', $form->render());
    }

    /**
     * 组合模式最关键之处在于如果你想要构建组件树每个组件必须实现组件接口
     */
    public function testFormImplementsFormEelement()
    {
        $className = 'my\php\pattern\zuhe\FormElement';
        $abstractName = 'my\php\pattern\zuhe\Form';
        $this->assertTrue(is_subclass_of($className, $abstractName));
    }
}