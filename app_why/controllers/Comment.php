<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Comment extends TempBase{

	public $get;
	public function __construct(){
		parent::__construct();
		$this->get = $this->input->get();
		$this->load->model('CommentM');
	}   

	public function getcommentcount()
	{
		$post = $this->input->get();
		if(empty($post['arcid']) || empty($post['com_type'])){ echo $_REQUEST['callback']."(".json_encode(0).")";exit; }
		if(!$this->input->is_ajax_request()){ echo $_REQUEST['callback']."(".json_encode(0).")";exit; }
		if($post['com_type']=="article"){
			$where = array('aid'=>(int)$post['arcid']);
			$count = $this->CommentM->getCount('article_comment',$where);
		}else{
			$count = 0;	
		}
		echo $_REQUEST['callback']."(".json_encode($count).")";exit;
	}
}
