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
    public function tags()
    {
        $this->load->aview('article/tags',$this->_cdata);
    }
    public function lists()
    {
        $this->load->aview('article/lists',$this->_cdata);
    }

}
