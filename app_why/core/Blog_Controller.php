<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_Controller extends CI_Controller {
	
	public $curtime;
	public $author;
	public $author_link;
	public $_cdata = array();
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
		$this->_cdata['_msgRoll']  = $this->ComModel->getMsgRoll();
		$this->_cdata['_artClass'] = $this->ComModel->getArtClass();
		$this->_cdata['_var']  = $this->ComModel->getVariable();
		$this->_cdata['_cvisit']  = $this->ComModel->getVisitNum();
		$this->_cdata['_title']  = $this->_cdata['_var']['baseRes']['author']."博客-个人原创博客网站";
		$this->author = $this->_cdata['_var']['baseRes']['author'];
		$this->author_link = $this->_cdata['_var']['baseRes']['avatar'];
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
