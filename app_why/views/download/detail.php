<?php $this->_cdata['_title']=$this->_cdata['_titleb'].$this->_cdata['dw']['title'];?>
<?php $this->load->view('common/header',$this->_cdata);?>
<!--主题框架开始-->
<div class="container">
<!--左侧开始-->
<section class="mysection">
</section>
<!--左侧结束-->
<!--=========右侧开始==========-->
<?php $this->load->view('common/right',$this->_cdata);?>
<!--=========END右侧==========-->
</div>

<!---底部开始-->
<?php $this->load->view('common/footer',$this->_cdata);?>
<!---底部结束-->
