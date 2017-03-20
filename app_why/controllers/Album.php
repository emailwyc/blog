<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Album extends HomeBase{

	public function __construct(){
		parent::__construct();
	}   

	public function index()
	{
		$this->load->view('album/index',$this->_cdata);
	}
}
