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
	//异步登录
	public function login() {
		if(!$this->input->is_ajax_request()){ echo 0;exit;}
		$post = $this->input->post();
		if(empty($post['name']) || empty($post['pwd'])){ echo 0;exit;}
		$cap = strtolower($_SESSION["verification"]);
		if($cap!=strtolower($post['captcha'])){
			echo 2;	exit;
		}
		$data = array('title'=>$post['name'],'email'=>$post['email'],'website'=>$post['website'],'desc'=>$post['desc'],'status'=>0);
		$this->ComModel->insertTable('friend_links',$data);
		echo 1;exit;
		
	}


}
