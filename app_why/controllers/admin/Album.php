<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Album extends AdminBase{

    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $this->load->aview('album/index',$this->_cdata);
    }

}
