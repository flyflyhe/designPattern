<?php
namespace my\php\pattern\simplefactory;

class ConcreteFactory
{
    protected $typeList;

    /**
     *在这里注入自己的车子类型
     */
    public function __construct()
    {
        $this->typeList = [
            'bicycle' => __NAMESPACE__.'\Bicycle',
            'other' => __NAMESPACE__.'\Scooter',
        ];
    }

    /**
     *创建车子
     */
     public function createVehicle($type)
     {
         if (!array_key_exists($type, $this->typeList)) {
             throw new \InvalidArgumentException("$type is not valid vehicle");
         }
         $className = $this->typeList[$type];

         return new $className();
     }
}