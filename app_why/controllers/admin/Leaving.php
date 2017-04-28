<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Leaving extends AdminBase{

    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $this->load->aview('leaving/index',$this->_cdata);
    }

}
