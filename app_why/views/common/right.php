	<!--=========右侧开始==========-->
<aside class="myaside" style="animation: 0.8s ease 0s normal none 1 running fuxiasuo;">
<!--关注我-->
<div class="focus-me bg-color animation-div" style="animation-name: fuxiasuo; animation-duration: 1s;">
	<h4 class="index-title"><i class="el-heart"></i>关注我<small>Focus Me</small></h4>
		<div class="xiangguan">
				<div><a class="benbo" href="http://weibo.com/u/5107691374" target="_blank"><i class="el el-home"></i></a><span>新浪微博</span></div>
				<!-- <div><a class="benbo" href="#" target="_blank"><span id="qq" style="padding-top:45px;">QQ空间</span></a><span>QQ空间</span></div> -->
				<div><a class="taobao" href="http://user.qzone.qq.com/1285263707/main" target="_blank"><i class="el el-star"></i></a><span>QQ空间</span></div>
				<div><a class="side-fx"><i class="el-share-alt"></i></a><span>分享本博</span></div>
				<div><a class="mail-btn" href="javascript:;"><i class="el-envelope"></i></a><span>订阅我</span></div>
		</div>
		<div class="mail-dy">
			<form action="http://list.qq.com/cgi-bin/qf_compose_send" method="post" target="_blank">
				<input name="t" value="qf_booked_feedback" type="hidden">
				<input name="id" value="b2b151b4bc010575c083e18e227ae907aac82bc47e84d3e0" type="hidden">
				<span>订阅</span>
				<input name="to" placeholder="输入邮箱点击订阅吧" onfocus="this.placeholder=''" onblur="this.placeholder='输入邮箱点击订阅吧'" type="text">
				<i class="el-envelope"><input value=" " type="submit"></i>
			</form>
			<i class="el-remove fx-close"></i>
		</div>
		<div class="bd-fx side-bdfx ">
			<i class="el-remove fx-close"></i>
			<ul class="bdsharebuttonbox bdshare-button-style1-32" data-bd-bind="1488780402523">
				<li><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></li>
				<li><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a></li>
				<li><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a></li>
				<li><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a></li>
			</ul>
			<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
		</div>
</div>
<!--右侧个人统计-->
<div class="web-author bg-color animation-div" style="animation-name: fuxiasuo; animation-duration: 1.14286s;">
		<div class="author-tx">
			<a class="img-circle" href="http://www.100txy.com/Home/Index/about.html" title="点击查看详细信息">
				<img class="img-circle" src="<?=$_var['baseRes']['avatar'];?>">
			</a>
		</div>
		<div class="author-name"><span class="blue-text"><?=$_var['baseRes']['author'];?></span><p><?=$_var['baseRes']['desc'];?></p></div>
		<div class="data-info">
			<ul>
				<li><strong><?=$_var['runing'];?></strong><span>运行天数</span></li>
				<li><strong><?=$_cvisit;?></strong><span>今日访问ip</span></li>
				<li><strong><?=$_var['varRes']['visitnum'];?></strong><span>总访问量</span></li>
			</ul>
		</div>
</div>
<!--END 右侧个人统计-->
<!--搜索-->
<div class="search animation-div" style="animation-name: fuxiasuo; animation-duration: 1.28571s;">
	<form action="/Home/Index/search.html" method="get">
		<div class="search-index">
			<input name="search_word" placeholder="请输入关键字" onfocus="this.placeholder=''" onblur="this.placeholder='请输入关键字'" type="text">
			<i class="el-search"><input value=" " type="submit"></i>
		</div>
	</form>
</div>
<!--最新更新-->
<div class="clos-new bg-color animation-div" style="animation-name: fuxiasuo; animation-duration: 1.42857s;">
	<h4 class="index-title"><i class="el-bulb"></i>最新更新<small>Close New</small></h4>
	<ul>
	<!-- <li><i class="el-cloud"></i><iframe id="tianqi"  scrolling="no" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=34&icon=1&num=3"></iframe></li> -->
	<li><span><i class="el-arrow-up"></i>最近：<font class="blue-text">雷小天</font> 四天前&nbsp;&nbsp;13:10</span><a title="Windows Redis安装及使用">更新了<b class="lable">文章</b></a></li>
	<li><i class="el-calendar"></i>历史上的今天：<a title="1987年3月6日 英渡轮“自由企业先驱”号倾覆，184人丧生" class="orange-text">英渡轮“自由企业先驱”号倾覆，184人丧生</a></li>
</ul>
</div>
<!--说说-->
<div class="bg-color animation-div" style="animation-name: fuxiasuo; animation-duration: 1.57143s;">
	<h4 class="index-title"><i class="el-headphones"></i>说说<small>Shuo Shuo</small></h4>
	<div class="shuo-side">
		<ul>
			<li id="Hots">
				<span class="shuobg1"><strong>02-23 </strong></span>
				<div><a href="http://www.100txy.com/Home/Index/chatdetail/chid/26.html" title="1.MySQL优化方法
2.Redis、Memcahe使用案例介绍
3.缓存技术
4.Linux系统
5.Apache运行原理
6.算法、数据结构
7.大型网站高访问量处理方案
8.自己突破的技术难点有哪些？">高级PHP程序员面试高概率题目</a><b title="点击34">(34)</b></div>
			</li><li id="Hots">
				<span class="shuobg2"><strong>02-15 </strong></span>
				<div><a href="http://www.100txy.com/Home/Index/chatdetail/chid/25.html" title="Apache、NGINX、MySQL、PHP、Samba、MongoDB、Python、Ruby、Sphinx">Linux系统开源软件有哪些？</a><b title="点击46">(46)</b></div>
			</li><li id="Hots">
				<span class="shuobg3"><strong>02-15 </strong></span>
				<div><a href="http://www.100txy.com/Home/Index/chatdetail/chid/24.html" title="1.Sql数据库：（oracle，MySQL...）支持sql语言的数据库
2.Nosql数据库：（Redis，Mongo DB...）不支持sql语言的数据库">数据库的分类</a><b title="点击43">(43)</b></div>
			</li>		</ul>
	</div>
</div>
<!--推荐图文-->
<div class="article-push  bg-color animation-div" style="animation-name: fuxiasuo; animation-duration: 1.71429s;">
	<h4 class="index-title"><i class="el-asl"></i>推荐图文<small>Push Article</small></h4>
	<ul>
		<li>
			<div class="arcimg">
				<a href="http://www.100txy.com/article/50.html" target="_blank">
          <img src="/ui/system/images/2017030258b7a67fe3a5c.jpg" alt="Windows Redis安装及使用" title="Windows Redis安装及使用">
        </a>
			</div>
			<div class="arc-right">
				<h4 class="blue-text"><a href="http://www.100txy.com/article/50.html">Windows Redis安装及使用</a></h4>
				<p>Redis是一个开源的使用ANSI C语言编写、遵守BSD协议、支持网络、可基于内存亦可持久化的日志型、Key-Value数据库，并提供多种语言的API。它通常被称为数据结构服务器</p>
				<ul>
					<li><a title="发表于2017-03-02"><i class="el-time"></i>2017-03-02</a></li>
					<li><a title="53次浏览"><i class="el-fire"></i>53</a></li>
				</ul>
			</div>
		</li><li>
			<div class="arcimg">
				<a href="http://www.100txy.com/article/42.html" target="_blank">
          <img src="/ui/system/images/201701315890b2d182cee.png" alt="个人网站微信授权登录功能怎么开发？" title="个人网站微信授权登录功能怎么开发？">
        </a>
			</div>
			<div class="arc-right">
				<h4 class="blue-text"><a href="http://www.100txy.com/article/42.html">个人网站微信授权登录功能怎么开发？</a></h4>
				<p>当你们在浏览这篇文章的时候，我是非常忐忑的，因为我不知道这篇文章是否对你有所帮助，但是我希望你能通过这篇文章更深刻的认识的微信授权登录</p>
				<ul>
					<li><a title="发表于2017-01-31"><i class="el-time"></i>2017-01-31</a></li>
					<li><a title="144次浏览"><i class="el-fire"></i>144</a></li>
				</ul>
			</div>
		</li><li>
			<div class="arcimg">
				<a href="http://www.100txy.com/article/36.html" target="_blank">
          <img src="/ui/system/images/20170104586c84e2065c9.jpg" alt="node.js编程之函数调用" title="node.js编程之函数调用">
        </a>
			</div>
			<div class="arc-right">
				<h4 class="blue-text"><a href="http://www.100txy.com/article/36.html">node.js编程之函数调用</a></h4>
				<p>Node.js 是一个基于 Chrome V8 引擎的 JavaScript 运行环境。Node.js 使用了一个事件驱动、非阻塞式 I/O 的模型，使其轻量又高效。Node.js 的包管理器 npm，是全球最大的开源库生态系统</p>
				<ul>
					<li><a title="发表于2017-01-04"><i class="el-time"></i>2017-01-04</a></li>
					<li><a title="259次浏览"><i class="el-fire"></i>259</a></li>
				</ul>
			</div>
		</li>	</ul>
</div>
<!--文章排行tab-->
<div class="mytab bg-color animation-div" style="animation-name: fuxiasuo; animation-duration: 1.85714s;">
	<div class="tab-btn"><a class="hd-btn tab-active" href="javascript:;"><i class="el-comment-alt"></i>文章互动</a><a class="ph-btn" href="javascript:;"><i class="el-signal"></i>文章排行</a></div>
	<ul class="hudong-ul">
<!--=======查询相册=============-->
	<li>
			<div class="sd-tx">
			<a href="http://www.100txy.com/article/40.html" target="_blank" rel="nofollow" title="去《接入微信公众号API》看看">
					<img src="/ui/system/images/100.png" alt="雷小天" class="img-circle">
			</a>
			</div>
			<div class="sd-name">
				<span><i class="el-user"></i>雷小天<time>2017-01-19</time></span>
				<a class="blue-text" href="#" title="&lt;img src=&quot;http://www.100txy.com/Public/emote/tuzki/t_0002.gif&quot; title=&quot;Love&quot; alt=&quot;雷小天博客&quot;&gt;推荐阅读"><img src="/ui/system/images/t_0002.gif" title="Love" alt="雷小天博客">推荐阅读</a>
			</div>
		</li><li>
			<div class="sd-tx">
			<a href="http://www.100txy.com/article/36.html" target="_blank" rel="nofollow" title="去《node.js编程之函数调用》看看">
					<img src="/ui/system/images/100.jpeg" alt="璀☆璨※星◇空" class="img-circle">
			</a>
			</div>
			<div class="sd-name">
				<span><i class="el-user"></i>璀☆璨※星◇空<time>2017-01-08</time></span>
				<a class="blue-text" href="#" title="很漂亮啊">很漂亮啊</a>
			</div>
		</li><li>
			<div class="sd-tx">
			<a href="http://www.100txy.com/article/26.html" target="_blank" rel="nofollow" title="去《PHP开发环境：如何启用MySQL功能》看看">
					<img src="/ui/system/images/100.png" alt="雷小天" class="img-circle">
			</a>
			</div>
			<div class="sd-name">
				<span><i class="el-user"></i>雷小天<time>2016-12-28</time></span>
				<a class="blue-text" href="#" title="不错">不错</a>
			</div>
		</li><li>
			<div class="sd-tx">
			<a href="http://www.100txy.com/article/32.html" target="_blank" rel="nofollow" title="去《如何判定PHP常量是否被定义？》看看">
					<img src="/ui/system/images/90af5a89gw1fbfjlkyz75g20200203yb.gif" alt="魔道小学者" class="img-circle">
			</a>
			</div>
			<div class="sd-name">
				<span><i class="el-user"></i>魔道小学者<time>2016-12-18</time></span>
				<a class="blue-text" href="#" title="这模板不错">这模板不错</a>
			</div>
		</li><li>
			<div class="sd-tx">
			<a href="http://www.100txy.com/article/32.html" target="_blank" rel="nofollow" title="去《如何判定PHP常量是否被定义？》看看">
					<img src="/ui/system/images/90af5a89gw1fbfjlkyz75g20200203yb.gif" alt="魔道小学者" class="img-circle">
			</a>
			</div>
			<div class="sd-name">
				<span><i class="el-user"></i>魔道小学者<time>2016-12-18</time></span>
				<a class="blue-text" href="#" title="点赞">点赞</a>
			</div>
		</li>	</ul>
	<!--文章排行-->
	<ul class="paihang-ul">
		<li><span></span><a href="http://www.100txy.com/article/32.html" title="如何判定PHP常量是否被定义？">如何判定PHP常量是否被定义？<b>(599)</b></a></li><li><span></span><a href="http://www.100txy.com/article/31.html" title="个人技术博客该如何定位？">个人技术博客该如何定位？<b>(453)</b></a></li><li><span></span><a href="http://www.100txy.com/article/18.html" title="我的个人博客网站是怎么制作的？">我的个人博客网站是怎么制作的？<b>(394)</b></a></li><li><span></span><a href="http://www.100txy.com/article/30.html" title="HTTPS的中那些加密算法">HTTPS的中那些加密算法<b>(360)</b></a></li><li><span></span><a href="http://www.100txy.com/article/33.html" title="什么是Web编程，搞懂这几点你就入门了">什么是Web编程，搞懂这几点你就入门了<b>(295)</b></a></li>	</ul>
	</div>
<!--标签-->
<div class="cloud bg-color animation-div" style="animation-name: fuxiasuo; animation-duration: 2s;">
    <h4 class="index-title"><i class="el-tags"></i>标签云<small>Tags Clouds</small></h4>
	<ul id="3dcloud">
						 		<li><a class="tstyle-1" href="http://www.100txy.com/tag/20.html" onclick="return recordId('tid',20)" title="标签：PHP ">PHP (10)</a></li>				 		<li><a class="tstyle-2" href="http://www.100txy.com/tag/21.html" onclick="return recordId('tid',21)" title="标签：HTML5 ">HTML5 (0)</a></li>				 		<li><a class="tstyle-3" href="http://www.100txy.com/tag/22.html" onclick="return recordId('tid',22)" title="标签：ECOS ">ECOS (1)</a></li>				 		<li><a class="tstyle-4" href="http://www.100txy.com/tag/23.html" onclick="return recordId('tid',23)" title="标签：Linux ">Linux (1)</a></li>				 		<li><a class="tstyle-1" href="http://www.100txy.com/tag/24.html" onclick="return recordId('tid',24)" title="标签：Mysql ">Mysql (2)</a></li>				 		<li><a class="tstyle-2" href="http://www.100txy.com/tag/25.html" onclick="return recordId('tid',25)" title="标签：jQuery ">jQuery (3)</a></li>				 		<li><a class="tstyle-3" href="http://www.100txy.com/tag/26.html" onclick="return recordId('tid',26)" title="标签：ThinkPHP ">ThinkPHP (0)</a></li>				 		<li><a class="tstyle-4" href="http://www.100txy.com/tag/27.html" onclick="return recordId('tid',27)" title="标签：SEO ">SEO (4)</a></li>				 		<li><a class="tstyle-1" href="http://www.100txy.com/tag/28.html" onclick="return recordId('tid',28)" title="标签：工程师 ">工程师 (1)</a></li>				 		<li><a class="tstyle-2" href="http://www.100txy.com/tag/29.html" onclick="return recordId('tid',29)" title="标签：Mysql ">Mysql (0)</a></li>				 		<li><a class="tstyle-3" href="http://www.100txy.com/tag/30.html" onclick="return recordId('tid',30)" title="标签：个人博客 ">个人博客 (2)</a></li>				 		<li><a class="tstyle-4" href="http://www.100txy.com/tag/31.html" onclick="return recordId('tid',31)" title="标签：session ">session (2)</a></li>				 		<li><a class="tstyle-1" href="http://www.100txy.com/tag/32.html" onclick="return recordId('tid',32)" title="标签：cookie ">cookie (0)</a></li>				 		<li><a class="tstyle-2" href="http://www.100txy.com/tag/33.html" onclick="return recordId('tid',33)" title="标签：安全 ">安全 (1)</a></li>				 		<li><a class="tstyle-3" href="http://www.100txy.com/tag/34.html" onclick="return recordId('tid',34)" title="标签：Web开发 ">Web开发 (1)</a></li>				 		<li><a class="tstyle-4" href="http://www.100txy.com/tag/35.html" onclick="return recordId('tid',35)" title="标签：node.js ">node.js (1)</a></li>				 		<li><a class="tstyle-1" href="http://www.100txy.com/tag/36.html" onclick="return recordId('tid',36)" title="标签：bootstrap ">bootstrap (1)</a></li>				 		<li><a class="tstyle-2" href="http://www.100txy.com/tag/37.html" onclick="return recordId('tid',37)" title="标签：个人博客模板 ">个人博客模板 (0)</a></li>				 		<li><a class="tstyle-3" href="http://www.100txy.com/tag/38.html" onclick="return recordId('tid',38)" title="标签：微信 ">微信 (2)</a></li>				 		<li><a class="tstyle-4" href="http://www.100txy.com/tag/39.html" onclick="return recordId('tid',39)" title="标签：缓存 ">缓存 (0)</a></li>				 		<li><a class="tstyle-1" href="http://www.100txy.com/tag/40.html" onclick="return recordId('tid',40)" title="标签：页面静态化 ">页面静态化 (1)</a></li>				 		<li><a class="tstyle-2" href="http://www.100txy.com/tag/41.html" onclick="return recordId('tid',41)" title="标签：面试题 ">面试题 (2)</a></li>				 		<li><a class="tstyle-3" href="http://www.100txy.com/tag/42.html" onclick="return recordId('tid',42)" title="标签：数据结构 ">数据结构 (1)</a></li>				 		<li><a class="tstyle-4" href="http://www.100txy.com/tag/43.html" onclick="return recordId('tid',43)" title="标签：Redis ">Redis (1)</a></li>	</ul>
</div>
<!--友情链接-->
<div class="side-link ">
	<h4 class="index-title"><i class="el-paper-clip"></i>友情链接<small>Friend Links</small><a href="http://www.100txy.com/Home/Index/link.html"><i class="el el-plus"></i>申请</a></h4>
	<ul>
		<li><a href="http://100txy.com/" target="_blank" title="雷小天博客">雷小天博客</a></li><li><a href="http:///#" target="_blank" title="杨青个人博客">杨青个人博客</a></li><li><a href="http:///#" target="_blank" title="月光博客">月光博客</a></li><li><a href="http:///#" target="_blank" title="卢松松博客">卢松松博客</a></li><li><a href="http://www.luoyechenfei.com/" target="_blank" title="落叶尘飞">落叶尘飞</a></li>	</ul>
</div>
</aside>
<!--=========END右侧==========-->
