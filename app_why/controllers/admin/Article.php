<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends AdminBase{

    public function __construct(){
        parent::__construct();
        $this->load->model('admin/ArticleM');
    }

    public function classes()
    {
        //获取所有文章分类
        $this->_cdata['classes'] = $this->ComModel->getArtClass();
        $this->_cdata['count'] = count($this->_cdata['classes']);
        $this->load->aview('article/classes',$this->_cdata);
    }

    public function classes_handle() {
        $params = $this->params;
        $data = array();
        if($params['oper']=="add"){
            $data = array("name"=>$params['name']);
            $data['id'] = $this->CModel->insertTableRid('article_class',$data);
            if(!$data['id']){returnjson(array('code'=>11,'msg'=>"失败！"));}
        }elseif($params['oper']=="del"){
            //判断是否有关联文章
            $count = $this->CModel->getCount('article',array('cid'=>@$params['id']));
            if($count){returnjson(array('code'=>12,'msg'=>"无法删除，存在关联文章！"));}
            $this->CModel->delTable('article_class',array('id'=>@$params['id']));
        }elseif($params['oper']=="edit"){
            $this->CModel->updateOne('article_class',array("name"=>$params['name']),array('id'=>@$params['id']));
        }
        returnjson(array('code'=>1,'data'=>$data,'msg'=>"成功！"));
    }
    public function tags()
    {

        $this->_cdata['tags'] = $this->ComModel->getTags();
        $this->_cdata['count'] = count($this->_cdata['tags']);
        $this->load->aview('article/tags',$this->_cdata);
    }
    public function tags_handle() {
        $params = $this->params;
        $data = array();
        if($params['oper']=="add"){
            $data = array("name"=>$params['name'],"order"=>(int)$params['order']);
            $data['id'] = $this->CModel->insertTableRid('tags_cloud',$data);
            if(!$data['id']){returnjson(array('code'=>11,'msg'=>"失败！"));}
        }elseif($params['oper']=="del"){
            //删除文章关联信息
            $this->CModel->delTable('article_tags',array('tid'=>@$params['id']));
            $this->CModel->delTable('tags_cloud',array('id'=>@$params['id']));
        }elseif($params['oper']=="edit"){
            $this->CModel->updateOne('tags_cloud',array("name"=>$params['name'],"order"=>(int)$params['order']),array('id'=>@$params['id']));
        }
        returnjson(array('code'=>1,'data'=>$data,'msg'=>"成功！"));
    }
    public function lists($page=1)
    {
        //获取文章列表
        $this->_cdata['artList'] = $this->ArticleM->getArtList((int)$page);
        $this->load->aview('article/lists',$this->_cdata);
    }

}
