<?php
namespace my\php\pattern\decorator;

/**
 *装饰器的具体实现
 */
class Renderjson extends Decorator
{
    public function renderData()
    {
        $output = $this->wrapped->renderData();
        return json_encode($output);
    }
}