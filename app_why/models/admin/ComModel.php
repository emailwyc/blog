<?php
//公共模型处理类
/*后期加缓存*/
class ComModel extends CI_Model {

	
	public $table;
    public function __construct() {
		parent::__construct();
		$this->table = '';
	}
	//得到最新更新
	public function getUserByName($name) {
		$query = $this->db->select("*")->from('admin_user')->where(array('username'=>$name))->limit(1,0)->get();
		$result = $query->row_array();
		return $result;
	}
	public function reduceErrorNum($id)
    {
        $check = $this->db->set('errornum', 'errornum-1', false)->where(array('id' => $id))->update('admin_user');
        return $check;
    }
	public function insertTable($table,$data) {
		$check = $this->db->insert($table,$data);
		return $check;
	}
    //updateaddone
    public function updateOne($table,$data,$where) {
        //获取ip地址
        $check = $this->db->where($where)->update($table,$data);
        return $check;
    }


}
