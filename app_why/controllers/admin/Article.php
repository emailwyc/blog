<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends AdminBase{

    public function __construct(){
        parent::__construct();
    }

    public function classes()
    {
        $this->load->aview('index/index',$this->_cdata);
    }
    public function tags()
    {
        $this->load->aview('index/index',$this->_cdata);
    }
    public function lists()
    {
        $this->load->aview('index/index',$this->_cdata);
    }

}
