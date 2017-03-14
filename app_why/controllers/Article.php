<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends HomeBase{

	public function __construct(){
		parent::__construct();
		$this->load->model('ArticleM');
	}   

	public function detail($id=0)
	{
		if(empty($id)){ show_error("未找到该文章!");}
		//得到文章详情
		$this->_cdata['article'] = $this->ArticleM->getDetailById($id);
		if(empty($this->_cdata['article'])){ show_error("未找到该文章!");}
		$this->_cdata['artClass'] = $this->ArticleM->getClassById($this->_cdata['article']['cid']);
		//得到文章上下篇
		$this->_cdata['prevAndNext'] = $this->ArticleM->getPrevAndNext($id);
		//得到文章云标签
		$this->_cdata['tags'] = $this->ArticleM->getTags($id);
		//得到文章可能喜欢
		$this->_cdata['likes'] = $this->ArticleM->getLikes($this->_cdata['article']['cid'],$id);
		$this->load->view('article/detail',$this->_cdata);
	}
}
