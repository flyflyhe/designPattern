<?php
namespace my\php\pattern\decorator;

/**
 *装饰器
 */
abstract class Decorator implements RendererInterface
{
    protected $wrapped;

    public function __construct(RendererInterface $wrappalbe)
    {
        $this->wrapped = $wrappalbe;
    }
}