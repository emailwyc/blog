<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_Controller extends CI_Controller {
	
	public $curtime;
	public function __construct(){
		parent::__construct();
		$this->curtime = time();
	}   
}

class HomeBase extends Blog_Controller {

	public $_cdate = array();
	public function __construct(){
		parent::__construct();
		$this->load->model('ComModel');
		$this->_cdate['msgRoll']  = $this->ComModel->getMsgRoll();
		$this->_cdate['artClass'] = $this->ComModel->getArtClass();
		$this->_cdate['var']  = $this->ComModel->getVariable();
	}   
}
