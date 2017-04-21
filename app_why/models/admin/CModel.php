<?php
//公共模型处理类
/*后期加缓存*/
class CModel extends CI_Model {


    public $table;
    public function __construct() {
        parent::__construct();
        $this->table = '';
    }
    //comment count
    public function getCount($table,$where)
    {
        $count  = $this->db->where($where)->count_all_results($table);
        return $count;
    }
    public function getList($table,$where,$offset=10,$page=1,$order="id desc")
    {
        $page = $page<=0?1:$page;
        $start = ($page-1)*$offset;
        $query = $this->db->where($where)->order_by($order)->from($table)->limit($offset,$start)->get();
        $result = $query->result_array();
        return $result;
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
    //得到详情
    public function getDetailById($table,$where) {
        $query = $this->db->select("*")->where($where)->from($table)->limit(1,0)->get();
        $result = $query->row_array();
        return $result;
    }

}
