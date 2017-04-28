<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Saying extends AdminBase{

    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $this->load->aview('saying/index',$this->_cdata);
    }

}
