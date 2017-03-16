<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Comment extends TempBase{

	public $get;
	public $ctype;
	public function __construct(){
		parent::__construct();
		$this->get = $this->input->get();
		$this->load->model('CommentM');
		$typeAll = array('article'=>1);
		if(!$this->input->is_ajax_request()){ echo $_REQUEST['callback']."(".json_encode(0).")";exit; }
		if(!isset($this->get['com_type']) || empty($typeAll[$this->get['com_type']])){
			echo $_REQUEST['callback']."(".json_encode(0).")";exit;	
		}
		$this->ctype = $typeAll[$this->get['com_type']];
	}   

	public function getcommentcount()
	{
		$post = $this->input->get();
		if(empty($post['arcid'])){ echo $_REQUEST['callback']."(".json_encode(0).")";exit; }
		if($this->ctype==1){
			$where = array('aid'=>(int)$post['arcid'],'type'=>1);
			$count = $this->CommentM->getCount('article_comment',$where);
		}else{
			$count = 0;	
		}
		echo $_REQUEST['callback']."(".json_encode($count).")";exit;
	}
	public function getcomment()
	{
		$this->emptyCheck($this->get,array('aid','page'));	
		if(empty($this->get['aid'])){ echo $_REQUEST['callback']."(".json_encode(0).")";exit; }
		if($this->ctype==1){
			$where = array('aid'=>(int)$this->get['aid'],'type'=>1);
			$list  = $this->CommentM->getList('article_comment',$where,10,$this->get['page'],"id desc"); $ids = ArrKeyAll($list,'id');
			$replycount = $this->CommentM->getReplyCount('article_comment',array('type'=>2),"pid",array('pid'=>$ids));
		}else{
			echo $_REQUEST['callback']."(".json_encode($count).")";exit;
		}
		$res = array('clist'=>$list,'rcount'=>$replycount);
		echo $_REQUEST['callback']."(".json_encode($res).")";exit;
	}

	protected function emptyCheck($params,$key_arr) {
		foreach($key_arr as $v){
			if(!isset($params[$v])){
				echo $_REQUEST['callback']."(".json_encode(0).")";exit;
			}   
		}   
	}

}
