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
}
