<?php
//评论模型处理类
class CommentM extends CI_Model {

	
	public $table;
    public function __construct() {
		parent::__construct();
		$this->table = 'article';
	}
	//comment count
	public function getCount($table,$where)
	{
		$count  = $this->db->where($where)->count_all_results($table);
		return $count;
	}
	//comment list
	public function getList($table,$where,$offset=10,$page=1,$order="id desc")
	{
		$page = $page<=0?1:$page;
		$start = ($page-1)*$offset;
		$query = $this->db->where($where)->order_by($order)->from($table)->limit($offset,$start)->get();
		$result = $query->result_array();
		return $result;
	}
	//reply count
	public function getReplyCount($table,$where,$group,$wherein)
	{
		$query= $this->db->select("$group,count(id) as count")->where($where)->where_in($wherein)->group_by($group)->get($table);
		$result = $query->result_array();
		$list = ArrKeyFromId($result,$group,'count');
		return $list;
	}




}
