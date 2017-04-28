<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends AdminBase{

    public function __construct(){
        parent::__construct();
    }

    public function classes()
    {
        //获取所有文章分类
        $this->_cdata['classes'] = $this->CModel->getAll('article_class',array());
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
            $this->CModel->delTable('article_class',array('id'=>@$params['id']));
        }elseif($params['oper']=="edit"){
            $this->CModel->updateOne('article_class',array("name"=>$params['name']),array('id'=>@$params['id']));
        }
        returnjson(array('code'=>1,'data'=>$data,'msg'=>"成功！"));
    }
    public function tags()
    {
        $this->load->aview('article/tags',$this->_cdata);
    }
    public function lists()
    {
        $this->load->aview('article/lists',$this->_cdata);
    }

}
