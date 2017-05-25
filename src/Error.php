<?php
namespace my;

/**
 * 全局错误类
 * Class Error
 * @package my
 */
class Error
{
    protected static $errorArr = [];

    public static function push($msg = null)
    {
        $oldCount = count(static::$errorArr);
        static::$errorArr[] = $msg;
        $newCount = count(static::$errorArr);
        return $newCount - $oldCount;
    }

    public static function pop()
    {
        $msg = array_pop(static::$errorArr);
        return $msg;
    }

}