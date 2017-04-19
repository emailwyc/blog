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
		//最新更新
		$this->_cdata['_publog']  = $this->ComModel->getPublishLog();
		//获取历史上的今天
		$this->_cdata['_historyToday']  = $this->ComModel->getHistoryToday($this->curtime);
		//说说3条
		$this->_cdata['_saying']  = $this->ComModel->getSaying();
		//热门文章
		$this->_cdata['_arthot']  = $this->ComModel->getArtHot();
		//文章评论
		$this->_cdata['_artcomment']  = $this->ComModel->getArtComment();
		//文章排行
		$this->_cdata['_arttop']  = $this->ComModel->getArtTop();
		//标签云
		$this->_cdata['_tags']  = $this->ComModel->getTags();
		//友情链接
		$this->_cdata['_linkyes']  = $this->ComModel->getLinks();
		//相册
		$this->_cdata['_albumnew']  = $this->ComModel->getAlbumNew();
		//留言频道
		$this->_cdata['_leavenew']  = $this->ComModel->getLeaveNew();
		//素材排行
		$this->_cdata['_dwtop']  = $this->ComModel->getDwTop();

		$this->_cdata['_title']  = $this->_cdata['_var']['baseRes']['author']."博客-个人原创博客网站";
		$this->_cdata['_titleb']  = $this->_cdata['_var']['baseRes']['author'];
		$this->_cdata['_skeyword']  = "";
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
        $this->load->model('admin/ComModel');
        $this->_cdata['_var'] = $this->ComModel->getVariable();
        $this->_cdata['_title']  = $this->_cdata['_var']['author']."个人博客后台";
        //检测是否登录
		$w=$this->ComModel->checkLogin(1);
	}   
}
