<?php
namespace app\home\controller;
class Dh extends Common{
    // public function _initialize()
    // {
    //     parent::_initialize();
    // }

    public function gszc() {

    	// $user = session('user');

    	// $_SESSON['id']=$user['id'];
    	
     //    $this->assign('user',$user);
        return $this->fetch('gszc');
    }
	public function dljz() {
	
		// $user = session('user');
	
		// $_SESSON['id']=$user['id'];
		
	 //    $this->assign('user',$user);
	    return $this->fetch('dljz');
	}
	public function zzdb() {
	
		// $user = session('user');
	
		// $_SESSON['id']=$user['id'];
		
	 //    $this->assign('user',$user);
	    return $this->fetch('zzdb');
	}
	public function zscq() {
	
		// $user = session('user');
	
		// $_SESSON['id']=$user['id'];
		
	 //    $this->assign('user',$user);
	    return $this->fetch('zscq');
	}
	public function gsbg() {
	
		// $user = session('user');
	
		// $_SESSON['id']=$user['id'];
		
	 //    $this->assign('user',$user);
	    return $this->fetch('gsbg');
	}
	public function zxgs() {
	
		// $user = session('user');
	
		// $_SESSON['id']=$user['id'];
		
	 //    $this->assign('user',$user);
	    return $this->fetch('zxgs');
	}
}