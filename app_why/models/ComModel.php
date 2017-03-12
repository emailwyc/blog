<?php
//公共模型处理类
/*后期加缓存*/
class ComModel extends CI_Model {

	
	public $table;
    public function __construct() {
		parent::__construct();
		$this->table = '';
	}
	//得到滚动消息
	public function getMsgRoll()
	{
		$where = array('starttime <'=>$this->curtime,'endtime >'=>$this->curtime);
		$query = $this->db->select("message")->where($where)->get('message_rolling', 10,0);
		$result = $query->result_array();
		return $result;
	}

	//得到文章分类
	public function getArtClass()
	{
		$query = $this->db->select("*")->get('article_class', 10,0);
		$result = $query->result_array();
		return $result;
	}
	
	//得到系统变量
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

	//得到今日访问ip数
	public function getVisitNum()
	{
		$start = date("Y-m-d 00:00:00",$this->curtime);
		$query = $this->db->select("ip")->where(array('ut>='=>$start))->count_all_results('visit_logs');
		return $query;
	}

	//访客访问处理方法（ip存储等）
	public function visitHandle()
	{
		//获取ip地址
		$ipInfo = get_client_addr();
		$query = $this->db->where(array('ip'=>$ipInfo['ip']))->count_all_results('visit_logs');
		if($query){
			$this->db->set('vnum','vnum+1',false)->where(array('ip'=>$ipInfo['ip']))->update('visit_logs');
		}else{
			$this->db->insert('visit_logs',array('ip'=>$ipInfo['ip'],'addr'=>$ipInfo['addr'],'vnum'=>1,'ct'=>date('Y-m-d H:i:s',$this->curtime)));
		}
		$this->db->set('value','value+1',false)->where('mark','visitnum')->update('system_variable');
		//更新总访问量
	}


}
