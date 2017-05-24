<?php
namespace my\d\pattern\ob;

class Card implements \SplSubject
{
    #卡
    protected $card;

    #申请卡的用户
    public $uid;

    public $ip;

    protected $_storage;

    function __construct($uid = null, $ip = null)
    {
        $this->_storage = new \SplObjectStorage();
        $this->uid = $uid;
        $this->ip = $ip;
    }

    public function attach(\SplObserver $observer)
    {
        $this->_storage->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->_storage->detach($observer);
    }

    public function notify()
    {
        foreach ($this->_storage as $obser) {
            if (!$obser->update($this)) {
                return false;
            }
        }
        return true;
    }

    public function getCard()
    {
        if (!$this->notify()) {
            return false;
        }
        #如果观察都通过则
        $card = 1;
        $this->card = $card;
        return $card;
    }
}
