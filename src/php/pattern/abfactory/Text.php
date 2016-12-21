<?php
namespace my\php\pattern\abfactory;

abstract class Text implements MediaInterface
{
    protected $text;

    public function __construct($text)
    {
        $this->text = (string) $text;
    }
}