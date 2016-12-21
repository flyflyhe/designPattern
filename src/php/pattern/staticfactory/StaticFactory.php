<?php
namespace my\php\pattern\staticfactory;

/**
与简单工厂类似，该模式用于创建一组相关或依赖的对象，
不同之处在于静态工厂模式使用一个静态方法来创建所有类型的对象，
该静态方法通常是 factory 或  build。
 */
class StaticFactory
{
    /**
     *通过传入参数创建相应对象实例
     */
     public static function factory($type)
     {
         $className = __NAMESPACE__.'\Format'.ucfirst($type);

         if (!class_exists($className)) {
             throw new \InvalidArgumentException('Missing format class');
         }

         return new $className();
     }
}