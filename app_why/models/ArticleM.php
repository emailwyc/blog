<?php
//文章模型处理类
/*后期加缓存*/
class ArticleM extends CI_Model {

	
	public $table;
    public function __construct() {
		parent::__construct();
		$this->table = 'article';
	}
	//得到滚动消息
	public function getArtList($page)
	{
		$offset = 10;
		$page = $page<=0?1:$page;
		$start = ($page-1)*$offset;
		$field = "article.id,article.title,article.short,article.author,article.author_link,article.is_hot,article.pv,article.comnum,article_class.name,article.img,article.createtime,article.cid";
		$query = $this->db->select($field)->where(array('article.status'=>1))->order_by('article.id desc')->from($this->table)->join('article_class', "article.cid=article_class.id",'left')->limit($offset,$start)->get();
		$result = $query->result_array();
		$count  = $this->db->where(array('article.status'=>1))->count_all_results($this->table);
		$allpage = ceil($count/$offset);
		$res = array("page"=>array('per'=>$offset,'curpage'=>$page,'count'=>$count),'data'=>$result);
		return $res;
	}

	//得到文章详情
	public function getDetailById($id)
	{
		$query = $this->db->select("*")->where(array('id'=>$id))->from($this->table)->limit(1,0)->get();
		$result = $query->row_array();
		return $result;
	}

	//得到文章分类
	public function getClassById($id)
	{
		$query = $this->db->select("*")->where(array('id'=>$id))->from("article_class")->limit(1,0)->get();
		$result = $query->row_array();
		return $result;
	}

	//得到文章上下篇
	public function getPrevAndNext($value,$key="id") {
		$query = $this->db->select("id,title")->where(array("$key<"=>$value))->order_by("$key desc")->from($this->table)->limit(1,0)->get();
		$prev= $query->row_array();
		$query = $this->db->select("id,title")->where(array("$key>"=>$value))->order_by("$key asc")->from($this->table)->limit(1,0)->get();
		$next= $query->row_array();
		return array('prev'=>$prev,'next'=>$next);
	}
	//得到文章云标签
	public function getTags($id) {
		$field = "article_tags.id,tags_cloud.name";
		$query = $this->db->select($field)->where(array('article_tags.aid'=>$id))->from("article_tags")->join('tags_cloud', "article_tags.tid=tags_cloud.id",'left')->limit(5,0)->get();
		$result = $query->result_array();
		return $result;
	}
	//得到文章可能喜欢
	public function getLikes($class,$id) {
		$query = $this->db->select("id,title,img")->where(array("cid"=>$class,'id!='=>$id))->order_by("id desc")->from($this->table)->limit(4,0)->get();
		$result = $query->result_array();
		return $result;
	}

	//访客访问处理方法（ip存储等）
	public function visitHandle($id)
	{
		//获取ip地址
		$this->db->set('pv','pv+1',false)->where(array('id'=>(int)$id))->update($this->table);
		//更新总访问量
	}


}
