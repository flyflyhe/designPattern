<?php
namespace my\php\pattern\factorymethod;

/**
 *工厂函数模式
 *定义一个创建对象的接口，但是让子类去实例化具体类。工厂方法模式让类的实例化延迟到子类中。
 *父类定义所有标准通用行为，然后将创建细节放到子类中实现并输出给客户端。
 */
abstract class FactoryMethod
{
    const CHEAP = 1;
    const FAST = 2;

    abstract protected function createVehicle($type);

    public function create($type)
    {
        $obj = $this->createVehicle($type);
        $obj->setColor("#f00");

        return $obj;
    }
}