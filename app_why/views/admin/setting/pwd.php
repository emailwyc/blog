<!--主题框架开始-->
<?php $this->_cdata['_title']="控制台－".$this->_cdata['_title'];?>
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
                <i class="icon-user"></i>
                <a href="javascript:void(0)">个人中心</a>
            </li>
            <li class="active">设置</li>
            <li class="active">密码修改</li>
        </ul><!-- .breadcrumb -->
    </div>

    <div class="page-content">

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <form class="form-horizontal" role="form">
                    <div class="space-4"></div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 旧密码 </label>
                        <div class="col-sm-9">
                            <input type="password" placeholder="密码" class="col-xs-10 col-sm-5" />

                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 新密码 </label>
                        <div class="col-sm-9">
                            <input type="password" placeholder="新密码" class="col-xs-10 col-sm-5" />

                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="button">
                                <i class="icon-ok bigger-110"></i>
                                提交
                            </button>
                            &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="icon-undo bigger-110"></i>
                                重置
                            </button>
                        </div>
                    </div>
                    <div class="hr hr-24"></div>

                </form>

                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->

<!---底部开始-->
<?php $this->load->aview('common/footer',$this->_cdata);?>
<!---底部结束-->