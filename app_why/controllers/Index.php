<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends HomeBase{

	public function __construct(){
		parent::__construct();
	}   

	public function index()
	{
		$this->load->view('index/index');
	}
}
