<?php
namespace my\php\pattern\datamap;

/**
 *这是数据库记录在内存的表现层
 *验证也该在该对象中进行
 */
class User
{
    protected $userId;

    protected $username;

    protected $email;

    public function __construct($id = null, $username = null, $email = null)
    {
        $this->userId = $id;
        $this->username = $username;
        $this->email = $email;
    }

    public function __set($name, $value) 
    {
        if (!$this->$name)
            throw new \Exception('not exists');
        $this->$name = $value;
    }

    public function __get($name)
    {
        if (!$this->$name)
            throw new \Exception('not exists');
        return $this->$name;
    }
}