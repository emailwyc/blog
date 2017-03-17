<!--wangyc-->
<script type="text/javascript" src="/ui/system/comment/js/script_common.js"></script>
<script type="text/javascript" src="/ui/system/comment/js/XTools.js"></script>
<!--评论-->
<link rel="stylesheet" href="/ui/system/comment/styles/commentmod.css">
<style>
.authorc-tx{width:100%;position:relative;}
.authorc-tx a{border:5px solid #fff;box-shadow: 0 1px 5px #666;width:60px;height:60px;display:block;overflow:hidden;position:absolute;top:-30px;left:0;right:0;margin:auto;transition:all 0.8s;-webkit-transition:all 0.8s;}
.authorc-tx a:hover{transform:rotate(360deg);-webkit-transform:rotate(360deg);transition:all 0.8s;-webkit-transition:all 0.8s;}
.authorc-tx a img{width:100%;height:100%;}
</style>
<div class="Comment" id="mycomment">
	<h3 class="form-btn blue-text"><a href="javascript:;"><i class="el-edit"></i>我要留言</a></h3>
	<div class="pinglun_big_div">
		<div class="authorc-tx">
			<a class="img-circle" href="javascript:void(0);" title="我的头像,点击随机切换" style="height: 60px;">
			<img class="img-circle" id="comment_avatar" onclick="reloadMyAvatar('comment_avatar',true)" src="<?=$_var['baseRes']['avatar'];?>">
			</a>
		</div>
		<div class="album-final-pinglun">
			<p class="review-text-leavings clear"><span style="color: #0181da;float:left;">我也来说几句</span><span id="wrap_letter_leninfo_id" style="color:#0181da;"></span></p>
			<textarea id="comment_message" name="message" rows="4" ></textarea>
			<div class="clearfix snsinfo_fabiao">
					<i class="el el-reddit" id="comment_face" onclick="showFace(this.id, 'comment_message');return false;"></i>
					<input style="height:30px;width:20%;font-size:12px;margin-top:1px;" class="form-control b-email" name="nickname" placeholder="昵称(必填)" type="text">
					<input style="height:30px;width:20%;font-size:12px;margin-top:1px;" class="form-control b-email" name="email" placeholder="接收回复的email地址" type="text">
					<span> <input class="repcom-btn-sure" type="button" value="评论" id="com_sub_btn" onclick="sendcom(0)"/> </span>
			</div>
		</div>
		<div class="all-comment">
			<h4 class="index-title"><i class="el el-comment-alt"></i> 当前共有<span id="replys" style="color:red">0</span> 条评论
				<a href="#paginate" style="float:right;margin-right:10px;"><i class="el el-th-list"></i>浏览所有评论</a>
			</h4>
			<!--网友回复内容-->

<div id="Comment" class="comment-area" data-garbage="true" style="border:1px dashed #ccc;">
	<ul id="comments" class="say-backup-detail-other">

		<li class="bg-color">
		<div class="comment-ava">
			<a href="#" id="Comment-137" target="_blank" rel="nofollow" title="王延崇">
				<img class="img-circle" src="http://tva3.sinaimg.cn/crop.0.0.664.664.180/90aab708jw8f6x0ac046gj20ig0igta1.jpg" alt="王延崇"></a>
			<!--<span><i class="el-user"></i>木杉</span>-->
		</div>
		<div class="comment-info" style="width:90%">
			<div class="comment-line">
				<ul>
					<li style="float:left;border-bottom:none;"><a><i class="el-user"></i>王延崇</a></li>
					<li style="float:left;border-bottom:none;"><a title="发表于2016-7-8"><i class="el-time"></i>2017-03-13 22:54:20</a></li>
					<li style="float:left;border-bottom:none;"><a title="王延崇 当前位于："><i class="el-map-marker"></i></a></li>
					<li style="float:right;border-bottom:none;">|<a href="javascript:;" aid="54" pid="117" username="王延崇" onclick="reply(this)">回复</a></li>
				</ul>
			</div>
			<div class="comment-content">
				<img src="http://www.100txy.com/Public/emote/tuzki/t_0006.gif" title="顶" alt="雷小天博客">
			</div>
			<!--回复-->
			<div class="album-final-pinglun-huifu">
				<textarea id="comment_message_rep" name="message" rows="4" ></textarea>
				<div class="clearfix snsinfo_fabiao">
						<i class="el el-reddit" id="comment_face_rep" onclick="showFace(this.id, 'comment_message_rep');return false;"></i>
						<input style="height:30px;width:30%;font-size:12px;margin-top:1px;" class="form-control b-email" name="nickname" placeholder="昵称(必填)" type="text">
						<span> <input class="repcom-btn-sure" type="button" value="回复" id="com_sub_btn" onclick="sendcom(0)"/> </span>
				</div>
				<ul class="b-emote-submit"> <li class="b-clear-float"></li> </ul>
			</div>				
	
			<ul class="re-comment-huifu" style="clear:both;">
				<li style="clear:both;">
					<div class="admin-ava"><img src="http://tva3.sinaimg.cn/crop.0.0.664.664.180/90aab708jw8f6x0ac046gj20ig0igta1.jpg" alt="雷小天" title="雷小天" class="img-circle"></div>
					<div class="re-info">
						<span>
							<img src="/Template/xiao/Home/Public/images/icon/ok.png"><a href="#" target="_blank" title="">王延崇</a>
							<time>2017-03-13 22:55:20</time> 回复 <a href="#Comment-1">王延崇</a>
						</span>
						<div class=" re-content">666|<a href="javascript:;" aid="54" pid="118" username="王延崇" onclick="reply(this)" title="">回复</a></div>
					</div>
				</li>
				<li style="clear:both;">
					<div class="admin-ava"><img src="http://tva3.sinaimg.cn/crop.0.0.664.664.180/90aab708jw8f6x0ac046gj20ig0igta1.jpg" alt="雷小天" title="雷小天" class="img-circle"></div>
					<div class="re-info">
						<span>
							<img src="/Template/xiao/Home/Public/images/icon/ok.png"><a href="#" target="_blank" title="">王延崇</a>
							<time>2017-03-13 22:55:20</time> 回复 <a href="#Comment-1">王延崇</a>
						</span>
						<div class=" re-content">666|<a href="javascript:;" aid="54" pid="118" username="王延崇" onclick="reply(this)" title="">回复</a></div>
					</div>
				</li>
				</ul>
			<!--回复-->
		</div>
	</li>	
	
	
	</ul>
	<div class="page" id="paginate"></div>
</div>






		</div>
	</div>
</div>
<script type="text/javascript" src="/ui/system/comment/js/jquery.pagination.js"></script>
<script type="text/javascript" src="/ui/system/comment/js/commentajax.js"></script>
