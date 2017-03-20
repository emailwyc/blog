<?php $this->_cdata['_title']=$this->_cdata['_titleb']."-相册列表";?>
<?php $this->load->view('common/header',$this->_cdata);?>
<link rel="stylesheet" href="/ui/system/layui/css/layui.css"  media="">
<script src="/ui/system/layui/layui.js" charset="utf-8"></script>
<!--主题框架开始-->
<div class="container">
<!--左侧开始-->
<div class="album w95">

			<h4 class="index-title"><a href="javascript::void(0);" class="all"><i class="el-camera"></i>查看所有相册&gt; &gt;</a></h4>

      <ul class="wall" id="album-wall" style="margin-bottom: 90px;"><div class="wall-column" style="animation-name: zhengshang; animation-duration: 0.5s;"><div class="wall-li" id="">
					<a class="orange-text" href="/Home/Index/picture/id/1.html" title="杨青个人博客">
						<img alt="杨青个人博客" src="http://www.100txy.com/Upload/image/album/2016411192233455.jpg">
						<p>杨青个人博客</p>
						<!--<small></i>GTA5的精美截图</small>-->
						<small><i class="el-time"></i>2016-10-04</small>
						<small><i class="el-picture"></i>3</small>
					</a>
				</div></div><div class="wall-column" style="animation-name: zhengshang; animation-duration: 0.7s;"><div class="wall-li" id="">
					<a class="orange-text" href="/Home/Index/picture/id/2.html" title="卢松松博客">
						<img alt="卢松松博客" src="/Upload/image/album/2016418225948574.jpg">
						<p>卢松松博客</p>
						<!--<small></i>GTA5的精美截图</small>-->
						<small><i class="el-time"></i>2016-10-04</small>
						<small><i class="el-picture"></i>3</small>
					</a>
				</div></div><div class="wall-column" style="animation-name: zhengshang; animation-duration: 0.9s;"><div class="wall-li" id="">
					<a class="orange-text" href="/Home/Index/picture/id/3.html" title="个人博客主页欣赏">
						<img alt="个人博客主页欣赏" src="/Upload/image/album/20161225585ea5215cfc2.jpg">
						<p>个人博客主页欣赏</p>
						<!--<small></i>GTA5的精美截图</small>-->
						<small><i class="el-time"></i>2016-12-25</small>
						<small><i class="el-picture"></i>3</small>
					</a>
				</div></div><div class="wall-column" style="animation-name: zhengshang; animation-duration: 1.1s;"><div class="wall-li" id="">
					<a class="orange-text" href="/Home/Index/picture/id/4.html" title="月光博客">
						<img alt="月光博客" src="/Upload/image/album/201701095872e61ed4a98.jpg">
						<p>月光博客</p>
						<!--<small></i>GTA5的精美截图</small>-->
						<small><i class="el-time"></i>2017-01-09</small>
						<small><i class="el-picture"></i>2</small>
					</a>
				</div></div></ul>

<!-- End gallery list-->
<script type="text/javascript">
layui.use('flow', function(){
	var $ = layui.jquery; 
  var flow = layui.flow;
  flow.load({
    elem: '#album-wall' //流加载容器
    ,scrollElem: '' //滚动条所在元素，一般不用填，此处只是演示需要。
    ,isAuto:true
    ,isLazyimg: true
    ,done: function(page, next){ //加载下一页
      //模拟插入
      setTimeout(function(){
        var lis = [];
var html='<div class="wall-column"><div class="wall-li" id=""> <a class="orange-text" href="/Home/Index/picture/id/1.html" title="杨青个人博客"> <img alt="杨青个人博客" src="http://www.100txy.com/Upload/image/album/2016411192233455.jpg"> <p>杨青个人博客</p> <!--<small></i>GTA5的精美截图</small>--> <small><i class="el-time"></i>2016-10-04</small> <small><i class="el-picture"></i>3</small> </a> </div></div>';
 		for(var i = 0; i < 10; i++){
          lis.push(html)
        }
        next(lis.join(''), page < 6); //假设总页数为 6
      }, 500);
    }
  });
});



		$(function(){
			$('.wall').jaliswall({ item: '.wall-li' });
			var xlen=$(".wall .wall-column").length
			for (var x=0;x<=xlen;x++){

						$(".wall .wall-column").eq(x).css({
							"-webkit-animation-name":"zhengshang",
							"-webkit-animation-duration":x/5+0.5+"s",
							"animation-name":"zhengshang",
							"animation-duration":x/5+0.5+"s"
				});


			}
		});
	</script>
		</div>

<!--左侧结束-->
<!--=========右侧开始==========-->
<!--=========END右侧==========-->
</div>


<!---底部开始-->
<?php $this->load->view('common/footer',$this->_cdata);?>
<!---底部结束-->
