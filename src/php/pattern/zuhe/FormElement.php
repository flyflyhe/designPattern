<?php
namespace my\php\pattern\zuhe;

/**
 *组合节点必须实现组件接口,这对构建组件树是强制的
 */
class FormElement extends Form
{
    /**
     *@var array|FormElement[]
     */
    protected $elements;

    /**
     *遍历所有元素并调用他们的render方法，然后返回完整的表单表示
     *但是从外部来看，并没有看见组合过程，就像是单个表单实例一样
     *@param int $indent
     *@return string
     */
    public function render($indent = 0)
    {
        $formCode = '';
        foreach ($this->elements as $element) {
            $formCode .= $element->render($indent + 1).PHP_EOL;
        }

        return $formCode;
    }

    /**
     *@param FormElement $element
     */
    public function addElement(FormElement $element)
    {
        $this->elements[] = $element;
    }
}