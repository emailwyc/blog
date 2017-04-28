<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Other extends AdminBase{

    public function __construct(){
        parent::__construct();
    }

    public function rollmsg()
    {
        $this->load->aview('other/rollmsg',$this->_cdata);
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
