<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Download extends HomeBase{

	public function __construct(){
		parent::__construct();
		$this->load->model('DownloadM');
	}   

	public function index($page=1){
		$this->_cdata['download'] = $this->DownloadM->getList('download',$field,array(),(int)$page,12);
		$this->load->view('download/index',$this->_cdata);
	}
	//详情
	public function details($cid){
		$this->_cdata['album_class'] = $this->AlbumM->getDetailById('album_class',(int)$cid);
		if(empty($this->_cdata['album_class'])){ show_error("官人,未找到该相册!");}
		$this->_cdata['album'] = $this->AlbumM->getList('album',array('cid'=>(int)$cid),(int)$page,12);
		$this->load->view('album/photos',$this->_cdata);
	}

}
