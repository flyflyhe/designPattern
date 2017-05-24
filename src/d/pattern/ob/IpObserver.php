<?php
namespace app\d\pattern\ob;

class IpObserver implements \SplObserver
{
    #ip限制名单
    public $ipArr = [];

    public function __construct()
    {
        $this->ipArr = [];
    }

    public function update(\SplSubject $subject)
    {
        if (in_array($subject->ip, $this->ipArr)) {
            return false;
        }
    }
}