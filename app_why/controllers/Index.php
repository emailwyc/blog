<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends HomeBase{

	public function __construct(){
		parent::__construct();
		$this->load->model('SwiperM');
		$this->load->model('ArticleM');
	}   

	public function index($page=1)
	{
		//获取轮播图片(最多获取8张)
		$this->_cdata['swiper'] = $this->SwiperM->getIndexSwiper();
		$this->_cdata['swiperc'] = count($this->_cdata['swiper']);
		$this->_cdata['artList'] = $this->ArticleM->getArtList((int)$page);
		$this->load->view('index/index',$this->_cdata);
	}
}
