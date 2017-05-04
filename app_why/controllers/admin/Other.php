<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Other extends AdminBase{

    public function __construct(){
        parent::__construct();
    }
    //滚动消息
    public function rollmsg($page=1)
    {
        $this->_cdata['lists'] = $this->CModel->getArtList('message_rolling',(int)$page,array(),8);
        $this->load->aview('other/rollmsg',$this->_cdata);
    }
    public function rollmsg_add()
    {
        $params = $this->params;
        if(!empty($params['oper'])){
            $this->emptyCheck1($params,array('message'));
            $starttime = !empty($params['starttime'])?strtotime($params['starttime']):0;
            $endtime   = !empty($params['endtime'])?strtotime($params['endtime']):1999999999;
            $newdata = array(
                'message'=>$params['message'],
                'starttime'=>$starttime,
                'endtime'=>$endtime
            );
            $aid = $this->CModel->insertTableRid("message_rolling",$newdata);
            if($aid){
                returnjson(array('code'=>1,'msg'=>"成功！"));
            }else{
                returnjson(array('code'=>3,'msg'=>"添加失败！"));
            }
        }
        $this->load->aview('other/rollmsg_add',$this->_cdata);
    }
    public function rollmsg_edit()
    {
        $id = isset($_GET['id'])?(int)$_GET['id']:0;
        $detail = $this->CModel->getDetailById('message_rolling',array('id'=>$id));
        $params = $this->params;
        if(!empty($params['oper'])){
            if(empty($detail)){returnjson(array('code'=>11,'msg'=>"未找到该记录！"));}
            $this->emptyCheck1($params,array('message'));
            $starttime = !empty($params['starttime'])?strtotime($params['starttime']):0;
            $endtime   = !empty($params['endtime'])?strtotime($params['endtime']):1999999999;
            $newdata = array(
                'message'=>$params['message'],
                'starttime'=>$starttime,
                'endtime'=>$endtime
            );
            $aid = $this->CModel->updateOne("message_rolling",$newdata,array('id'=>$id));
            if($aid){
                returnjson(array('code'=>1,'msg'=>"成功！"));
            }else{
                returnjson(array('code'=>3,'msg'=>"更新失败！"));
            }
        }
        $this->_cdata['msg'] = $detail;
        if(empty($detail)) { show_error("未找到该记录!");}
        $this->load->aview('other/rollmsg_edit',$this->_cdata);
    }
    public function rollmsg_del()
    {
        $params = $this->params;
        if(!empty($params['id'])){
            $this->CModel->delTable("message_rolling",array('id'=>(int)$params['id']));
            returnjson(array('code'=>1,'msg'=>"删除成功！"));
        }else{
            returnjson(array('code'=>2,'msg'=>"参数错误！"));
        }
    }





    public function rollpic()
    {
        $this->load->aview('other/rollpic',$this->_cdata);
    }
    public function friendlink()
    {
        $this->load->aview('other/friendlink',$this->_cdata);
    }

}
