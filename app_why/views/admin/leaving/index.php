<!--主题框架开始-->
<?php $this->_cdata['_title']="留言－".$this->_cdata['_title'];?>
<?php $this->load->aview('common/header',$this->_cdata);?>
<!--主题框架开始-->
<?php $this->load->aview('common/left',$this->_cdata);?>

<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        </script>
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="javascript:void(0)">留言</a>
            </li>
            <li class="active">列表</li>
        </ul><!-- .breadcrumb -->
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-xs-12">

                <!-- PAGE CONTENT BEGINS -->
                <!-- PAGE CONTENT ENDS -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->
<!---底部开始-->
<?php $this->load->aview('common/footer',$this->_cdata);?>
<!---底部结束-->
