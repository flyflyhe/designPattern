<?php
namespace my\php\pattern\factorymethod;

/**
 *工厂函数模式
 *定义一个创建对象的接口，但是让子类去实例化具体类。工厂方法模式让类的实例化延迟到子类中。
 *父类定义所有标准通用行为，然后将创建细节放到子类中实现并输出给客户端。
 *工厂方法模式和抽象工厂模式有点类似，但也有不同。

  *工厂方法针对每一种产品(车)提供一个工厂类，通过不同的工厂实例来创建不同的产品实例，在同一等级结构中，支持增加任意产品。

  *抽象工厂是应对产品族概念的，比如说，每个汽车公司可能要同时生产轿车，货车，客车，那么每一个工厂都要有创建轿车，货车和客车的方法。
  *应对产品族概念而生，增加新的产品线很容易，但是无法增加新的产品。
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