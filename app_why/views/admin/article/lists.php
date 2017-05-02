<!--主题框架开始-->
<?php $this->_cdata['_title']="文章列表－".$this->_cdata['_title'];?>

<?php $this->load->aview('common/header',$this->_cdata);?>
<!--主题框架开始-->
<style type="text/css">
    .table th, .table td {
        text-align: center;
        vertical-align: middle!important;
    }
</style>
<?php $this->load->aview('common/left',$this->_cdata);?>

<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        </script>
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="javascript:void(0)">文章</a>
            </li>
            <li class="active">列表</li>
        </ul><!-- .breadcrumb -->
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-xs-12">

                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-header">
                            共<span style="color:yellow;"><?=$artList['page']['count']?></span>条数据
                        </div>
                        <div class="table-responsive">
                            <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
                                <!--search-->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div id="sample-table-2_length" class="dataTables_length">
                                            <label>Display
                                                <select size="1" name="sample-table-2_length" aria-controls="sample-table-2">
                                                    <option value="10" selected="selected">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>
                                                records
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="dataTables_filter" id="sample-table-2_filter">
                                            <label>Search:
                                                <input aria-controls="sample-table-2" type="text">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--search-->

                                <!--table-->
                                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">ID</th>
                                    <th>分类</th>
                                    <th>标题</th>
                                    <th>ICON</th>
                                    <th>PV</th>
                                    <th>评论数</th>
                                    <th><i class="icon-time bigger-110 hidden-480"></i>创建时间</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($artList['data'] as $k=>$v):?>
                                <tr>
                                    <td class="center"><?=$v['id']?></td>
                                    <td><?=$v['name']?></td>
                                    <td title="<?=$v['title']?>"><?=mb_substr($v['title'],0,9,"utf-8");?></td>
                                    <td><img width="60px;" height="40px;" src="<?=$v['img']?>"/></td>
                                    <td><?=$v['pv']?></td>
                                    <td><?=$v['comnum']?></td>
                                    <td><?=$v['createtime']?></td>
                                    <td>
                                        <?php if($v['status']==1){?>
                                        <span class="label label-sm label-success">显示</span>
                                        <?php }else{?>
                                            <span class="label label-sm label-danger">隐藏</span>
                                        <?php }?>
                                    </td>
                                    <td>
                                        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                            <a class="blue" target="_blank" href="/article/detail/<?=$v['id']?>">
                                                <i class="icon-zoom-in bigger-130"></i>
                                            </a>
                                            <a class="green" href="#">
                                                <i class="icon-pencil bigger-130"></i>
                                            </a>
                                            <a class="red" href="#"><i class="icon-trash bigger-130"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                                <!--table-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--page-->
                <div style="margin:0 auto;text-align:center;">
                    <ul class="pagination no-margin" id="paginate">
                    <li class="prev disabled">
                        <a href="#">
                            <i class="icon-double-angle-left"></i>
                        </a>
                    </li>
                    <li class="active">
                        <a href="/">1</a>
                    </li>
                    <li>
                        <a href="/">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li class="next">
                        <a href="#">
                            <i class="icon-double-angle-right"></i>
                        </a>
                    </li>
                </ul>
                </div>
                <script type="text/javascript" src="/ui/admin/assets/js/jquery.pagination.js?v=1"></script>
                <script type="text/javascript">
                    jQuery('#paginate').pagination(<?=$artList['page']['count']?>,{
                        current_page:<?=$artList['page']['curpage']?>,
                        items_per_page:<?=$artList['page']['per']?>,
                        link_to:"/admin/article/lists/__id__"
                    });
                </script>
                <!--page-->

                <!-- PAGE CONTENT ENDS -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->
<!---底部开始-->
<?php $this->load->aview('common/footer',$this->_cdata);?>
<!---底部结束-->
