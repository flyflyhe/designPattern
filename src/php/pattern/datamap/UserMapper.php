<?php
namespace my\php\pattern\datamap;

/**
 *数据映射类
 */
class UserMapper
{
    protected $adapter;

    public function __construct(DBAL $dbLayer)
    {
        $this->adapter = $dbLayer;
    }

    /**
     *将用户对象保存到数据库
     */
    public function save(User $user)
    {
        $data = [
            'userid' => $user->getUserId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
        ];

        /**
         *如果没有指定id则在数据库中创建新纪录，否则更新已有记录
         */
        if (null === ($id = $user->getUserId())) {
            unset($data['userid']);
            $this->adapter->insert($data);

            return true;
        } else {
            $this->adapter->update($data, ['userid = ?' => $id]);

            return true;
        }
    }

    /**
     *基于ID在数据库中查找用户并返回用户实例
     */
    public function findById($id)
    {
        $result = $this->adapter->find($id);

        if (0 == count($result))
            throw new \Exception("User #$id not found");
        return $this->mapObject($row);
    }

    /**
     *获取数据库所有记录并返回用户实例数组
     *
     */
    public function findAll()
    {
        $resultSet = $this->adapter->findAll();
        $entries = [];

        foreach ($resultSet as $row) {
            $entries[] = $this->mapObject($row);
        }

        return $entries;
    }

    /**
     *映射表记录到对象
     */
    protected function mapObject(array $row)
    {
        $entry = new User();
        $entry->setUserID($row['userid']);
        $entry->setUsername($row['username']);
        $entry->setEmail($row['email']);

        return $entry;
    }
}