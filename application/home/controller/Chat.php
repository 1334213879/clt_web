<?php
namespace app\home\controller;
class Chat extends Common{
    // public function _initialize()
    // {
    //     parent::_initialize();
    // }

    public function index() {

    	$user = session('user');

    	// $_SESSON['id']=$user['id'];
    	
        $this->assign('user',$user);
        return $this->fetch();
    }

}