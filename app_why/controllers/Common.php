<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Common extends TempBase{

	public function __construct(){
		parent::__construct();
	}   

	public function visit()
	{
		if($this->input->is_ajax_request()){
			$this->load->model('ComModel');
			$this->ComModel->visitHandle();
			echo 1;exit;
		}else{
			echo 0;exit;
		}
	}
	//访问统计
	public function visits() {
		if(!$this->input->is_ajax_request()){ echo 0;}
		$post = $this->input->post();
		if(empty($post['type']) || empty($post['aid'])){ echo 0;}
		if($post['type']=="article"){
			$this->load->model('ArticleM');
			$this->ArticleM->visitHandle((int)$post['aid']);
			echo 1;exit;
		}elseif($post['type']=="saying"){
			$this->load->model('ComModel');
			$this->ComModel->updateaddone('saying','pv',array('id'=>(int)$post['aid']));
			echo 1;exit;
		}
	}
}
