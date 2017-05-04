<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Album extends AdminBase{

    public function __construct(){
        parent::__construct();
    }

    public function index($page=1)
    {
        $this->_cdata['albumClass'] = $this->CModel->getArtList('album_class',(int)$page,array(),8);
        $this->load->aview('album/index',$this->_cdata);
    }
    public function index_add()
    {
        $params = $this->params;
        if(!empty($params['oper'])){
            $this->emptyCheck1($params,array('title','icon'));
            $status = $params['status']=="true"?1:0;
            $newdata = array(
                'name'=>$params['title'],
                'icon'=>$params['icon'],
                'photo_num'=>0,
                'status'=>$status
            );
            $aid = $this->CModel->insertTableRid("album_class",$newdata);
            if($aid){
                $this->CModel->insertTable("publish_logs",array("class"=>3,"content"=>$params['title']));
                returnjson(array('code'=>1,'msg'=>"成功！"));
            }else{
                returnjson(array('code'=>3,'msg'=>"添加失败！"));
            }
        }
        $this->load->aview('album/index_add',$this->_cdata);
    }
    public function index_edit()
    {
        $id = isset($_GET['id'])?(int)$_GET['id']:0;
        $detail = $this->CModel->getDetailById('album_class',array('id'=>$id));
        $params = $this->params;
        if(!empty($params['oper'])){
            if(empty($detail)){returnjson(array('code'=>11,'msg'=>"未找到该相册！"));}
            //检查参数
            $this->emptyCheck1($params,array('title','icon'));
            $status = $params['status']=="true"?1:0;
            $newdata = array(
                'name'=>$params['title'],
                'icon'=>$params['icon'],
                'status'=>$status
            );
            $aid = $this->CModel->updateOne("album_class",$newdata,array('id'=>$id));
            if($aid){
                returnjson(array('code'=>1,'msg'=>"成功！"));
            }else{
                returnjson(array('code'=>3,'msg'=>"更新失败！"));
            }
        }
        $this->_cdata['album'] = $detail;
        if(empty($detail)) { show_error("未找到该相册!");}
        $this->load->aview('album/index_edit',$this->_cdata);
    }
    public function index_del()
    {
        $params = $this->params;
        if(!empty($params['id'])){
            $check=$this->CModel->delTable("album_class",array('id'=>(int)$params['id']));
            if($check) {
                //删除照片
                $this->CModel->delTable("album",array('cid'=>(int)$params['id']));
                $count = $this->CModel->getCount("album",array());
                $this->CModel->updateOne("system_variable", array("value"=>$count), array("mark" => "photonum"));
            }
            returnjson(array('code'=>1,'msg'=>"删除成功！"));
        }else{
            returnjson(array('code'=>2,'msg'=>"参数错误！"));
        }
    }

}
