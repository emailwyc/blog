<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends HomeBase{

	public function __construct(){
		parent::__construct();
	}   

	public function index()
	{
		//获取轮播图片
		$this->load->view('index/index');
	}
}
