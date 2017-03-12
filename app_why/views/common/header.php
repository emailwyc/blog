<!DOCTYPE html> 
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>SooneBaby博客-个人原创博客网站</title>
<meta name="keywords" content="个人博客，个人博客模板，个人网站，模板分享，博客程序，网站模板,php个人博客,seo个人博客">
<meta name="description" content="SooneBaby个人博客是php开发的个人网站，该博客涵盖PHP技术，前端，Linux系统，数据库，SEO优化等方面的知识.">
<meta name="author" content="SooneBaby">
<meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="no">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="shortcut icon" href="/ui/system/images/favicon.ico">
<!--CSS-->
<link rel="stylesheet" href="/ui/system/css/default.css">
<link rel="stylesheet" href="/ui/system/css/public.css?v=1">
<link rel="stylesheet" href="/ui/system/css/animation.css">
<link rel="stylesheet" type="text/css" href="/ui/system/css/skin_1.css" title="qingxin">
<link rel="stylesheet" type="text/css" href="/ui/system/css/skin_2.css?v=1" title="jianyue">
<link rel="stylesheet" type="text/css" href="/ui/system/css/skin_3.css" title="qingshuang">
<link rel="stylesheet" href="/ui/system/css/font-icon.css">
<link rel="stylesheet" href="/ui/system/css/face.css">
<link rel="stylesheet" href="/ui/system/css/share_style1_32.css"></head>
<link rel="stylesheet" href="/ui/system/css/layer.css" id="layui_layer_skinlayercss" style="">
<!--CSS-->
<!--JS-->
<script type="text/javascript" src="/ui/system/js/jquery.js"></script>
<script type="text/javascript">
	$("html").append("<div class='jiazai'><img src='/ui/system/images/loading3.gif'/><span>正在加载中请等待...</span></div>")
</script>
<!--JS-->
<link rel="stylesheet" href="/ui/system/css/swiper.css">
<body class="nobg" style="display: block;">
<!--导航开始-->

<header class="myheader" style="animation: 0.5s ease 0s normal none 1 running fushang;">
	<div class="top">
		<!--头像左边部分-->
		<div class="top-left" style="animation: 1s ease 0s normal none 1 running fuzuo;">
		  <div class="logo"><a href="/"><img src="/ui/system/images/logo3.gif"></a></div>
				<!--滚动消息-->
			<div class="web-xiaoxi">
				<i class="el-speaker"></i>
				<ul class="mulitline">
					<?php foreach($msgRoll as $val):?>
					<li style="margin-top: 0px;"><?=$val['message'];?></li>
					<?php endforeach;?>
				</ul>
			</div>
				<!--END 消息 -->

			<!--手机菜单按钮-->
			<div class="mobile-nav"><i class="el-lines"></i><i class="el-remove"></i></div>
		</div>
	<!--电脑导航开始-->
		<nav class="mynav">
			<ul class="orange-text">
				<li class="nav-active" style="width: 85.7143px; animation-name: fushang; animation-duration: 0.5s;"><a href="/" title="">首页</a></li>

				<li style="width: 85.7143px; animation-name: fushang; animation-duration: 0.666667s;"><a href="http://www.100txy.com/Home/Index/chat.html">说说</a></li>

				<li class="drop" style="width: 85.7143px; animation-name: fushang; animation-duration: 0.833333s;">
					<a href="javascript:;">分类<i class="el-chevron-down"></i></a>
					<div class="drop-nav orange-text ">
						<ul>
							<?php foreach($artClass as $val):?>
							<li><a href="/article/getListByClass/<?=$val['id'];?>"><?=$val['name'];?>(<?=$val['number'];?>)</a></li>
							<?php endforeach;?>
						</ul>
					</div>

				</li>

				<!-- <li  ><a href="/Links/" >链接</a></li> -->

				<li style="width: 85.7143px; animation-name: fushang; animation-duration: 1s;"><a href="http://www.100txy.com/Home/Index/album.html">相册</a></li>

				<li style="width: 85.7143px; animation-name: fushang; animation-duration: 1.16667s;"><a href="http://www.100txy.com/Home/Index/downlist.html">素材</a></li>

				<li style="width: 85.7143px; animation-name: fushang; animation-duration: 1.33333s;"><a href="http://www.100txy.com/Home/Index/feedback.html">留言</a>	</li>

				<li style="width: 85.7143px; animation-name: fushang; animation-duration: 1.5s;"><a href="http://www.100txy.com/Home/Index/about.html" title="">关于</a></li>

			</ul>
			 <!--移动的滑动-->
        <div class="move-bg"></div>
        <!--移动的滑动 end-->
		</nav>

		<!--这里是手机导航-->
		<div class="mob-menu">
		<!--手机顶部搜索-->
			<div class="search ">
				<form action="/Search/" method="get">
					<div class="search-index">
						<input name="s" placeholder="请输入关键字" onfocus="this.placeholder=''" onblur="this.placeholder='请输入关键字'" type="text">
						<i class="el-search"><input value=" " type="submit"></i>
					</div>
				</form>
			</div>
			<!--手机下拉菜单-->
			<ul class="mob-ulnav">
				<li><a href="http://www.100txy.com/">首页</a></li>

				<li><a href="http://www.100txy.com/Home/Index/chat.html">说说</a></li>

				<li class="mob-drop">
					<a href="javascrip:;">分类<i></i></a>

					<ul class="mob-dropmenu">
							<?php foreach($artClass as $val):?>
							<li><a href="/article/getListByClass/<?=$val['id'];?>"><?=$val['name'];?>(<?=$val['number'];?>)</a></li>
							<?php endforeach;?>
						</ul>

					</li>

					<!-- <li  ><a href="/Links/" >链接</a></li> -->

					<li><a href="http://www.100txy.com/Home/Index/album.html">相册</a></li>

					<li><a href="http://www.100txy.com/Home/Index/downlist.html">素材</a></li>

					<li><a href="http://www.100txy.com/Home/Index/feedback.html">留言</a>	</li>

					<li><a href="http://www.100txy.com/Home/Index/about.html">关于</a></li>

				</ul>
			</div>
	</div>
</header>
<!--导航结束-->
