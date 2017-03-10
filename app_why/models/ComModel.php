<?php
class ComModel extends CI_Model {

	
	public $table;
    public function __construct() {
		parent::__construct();
		$this->table = '';
	}

	public function getMsgRoll()
	{
		$where = array('starttime <'=>$this->curtime,'endtime >'=>$this->curtime);
		$query = $this->db->select("message")->where($where)->get('message_rolling', 10,0);
		$result = $query->result_array();
		return $result;
	}

	public function getArtClass()
	{
		$query = $this->db->select("*")->get('article_class', 10,0);
		$result = $query->result_array();
		return $result;
	}

	public function getVariable()
	{
		$query = $this->db->select("*")->where(array('init'=>1))->get('system_variable');
		$varRes = ArrKeyFromId($query->result_array(),'mark','value');
		$query = $this->db->select("*")->where(array('init'=>1))->get('system_base');
		$baseRes = ArrKeyFromId($query->result_array(),'mark','value');
		$runing = ceil(($this->curtime-$baseRes['stime'])/86400);
		$res = array('baseRes'=>$baseRes,'varRes'=>$varRes,'runing'=>$runing);
		return $res;
	}


}
