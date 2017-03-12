<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_Controller extends CI_Controller {
	
	public $curtime;
	public $_cdate = array();
	public function __construct(){
		parent::__construct();
		$this->curtime = time();
	}   
}

class HomeBase extends Blog_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ComModel');
		/*后期加缓存*/
		$this->ComModel->getVisitNum();
		$this->_cdate['msgRoll']  = $this->ComModel->getMsgRoll();
		$this->_cdate['artClass'] = $this->ComModel->getArtClass();
		$this->_cdate['var']  = $this->ComModel->getVariable();
		$this->_cdate['cvisit']  = $this->ComModel->getVisitNum();
		/*后期加缓存*/
	}   
}

class TempBase extends Blog_Controller {

	public function __construct(){
		parent::__construct();
	}   
}

class AdminBase extends Blog_Controller {

	public function __construct(){
		parent::__construct();
	}   
}
