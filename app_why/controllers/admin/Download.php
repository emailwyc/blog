<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Download extends AdminBase{

    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $this->load->aview('download/index',$this->_cdata);
    }

}