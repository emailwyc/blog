<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends TempBase{

	public function __construct(){
		parent::__construct();
		$isLogin = checkLogin(0);
		if($isLogin){
			header('Location:admin');exit;
		}
	}   

	public function index() {
		$this->load->aview('login/index',$this->_cdata);
	}


}
