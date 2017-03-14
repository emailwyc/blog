<?php
//评论模型处理类
class CommentM extends CI_Model {

	
	public $table;
    public function __construct() {
		parent::__construct();
		$this->table = 'article';
	}
	//得到滚动消息
	public function getCount($table,$where)
	{
		$count  = $this->db->where($where)->count_all_results($table);
		return $count;
	}



}
