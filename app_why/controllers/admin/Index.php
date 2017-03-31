<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends AdminBase{

	public function __construct(){
		parent::__construct();
	}   

	public function index()
	{
		$this->load->aview('index/index',$this->_cdata);
	}

}
