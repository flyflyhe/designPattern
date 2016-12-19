<?php
namespace my\php\pattern\decorator;

/**
 *要被装饰的对象
 */
class Webservice implements RendererInterface
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function renderData()
    {
        return $this->data;
    }
}