<?php
namespace app\d\pattern\ob;

class UserObserver implements \SplObserver
{
    public function __construct()
    {
    }

    public function update(\SplSubject $subject)
    {
        #判断此用户是否还能够领取
        $uid = $subject->uid;

    }
}
