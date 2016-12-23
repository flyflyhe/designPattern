<?php
namespace my\php\pattern\single;

class Singleton
{
    /**
     *全局引用用实例
     */
    private static $instance;

    public $test = true;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }

    /**
     *构造函数私有，不允许外部实例化
     */
    private function __construct()
    {
    }

    /**
     *防止对象实例被克隆
     */
    private function __clone()
    {

    }

    /**
     *__wakeup当对象被成功反序列化后会尝试调用此函数
     */
    private function __wakeup()
    {
        echo 'I am __wakeup'.PHP_EOL;
        return false;
    }

    public function __destruct()
    {

    }
}