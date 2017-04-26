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
                                <i class="icon-home"></i>
                                <a href="javascript:void(0)">控制台</a>
                            </li>
                            <li class="active">首页</li>
						</ul><!-- .breadcrumb -->
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">


								<!-- PAGE CONTENT BEGINS -->
                                        <h3 class="header smaller lighter blue">数据控制台</h3>
                                        <div class="table-header">作者：<?=$_var['author']?>---<?=$_var['desc']?></div>

                                        <div class="table-responsive">
                                            <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="label-sm label-warning">
                                                            图片数量
                                                        </span>
                                                    </td>
                                                    <td>$45</td>
                                                    <td class="hidden-480" rowspan=4></td>
                                                    <td>文章数量</td>
                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-warning">Expiring</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">图片数量</a>
                                                    </td>
                                                    <td>$45</td>
                                                    <td>Feb 12</td>
                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-warning">Expiring</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">图片数量</a>
                                                    </td>
                                                    <td>$45</td>
                                                    <td>Feb 12</td>
                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-warning">Expiring</span>
                                                    </td>
                                                </tr>





                                                </tbody>
                                            </table>
                                        </div>


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
<!---底部开始-->
<?php $this->load->aview('common/footer',$this->_cdata);?>
<!---底部结束-->
