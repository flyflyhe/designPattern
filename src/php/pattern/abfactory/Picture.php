<?php
namespace my\php\pattern\abfactory;

abstract class Picture implements MediaInterface
{
    protected $path;

    protected $name;

    public function __construct($path, $name = '')
    {
        $this->name = (string) $name;
        $this->path = (string) $path;
    }
}