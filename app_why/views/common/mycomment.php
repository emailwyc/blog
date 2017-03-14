<!--wangyc-->
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
	<script type="text/javascript" src="/ui/system/comment/js/script_common.js"></script>
	<script type="text/javascript" src="/ui/system/comment/js/XTools.js"></script>
	<div class="pinglun_big_div">
		<input type="hidden" id="snsinfo_username" value="">
		<input type="hidden" id="snsinfo_userid" value="">
		<input type="hidden" id="snsinfo_userpic" value="">
		<div class="authorc-tx">
			<a class="img-circle" href="javascript:void(0);" title="我的头像" style="height: 60px;">
				<img class="img-circle" src="/ui/system/images/soonebaby.jpg">
			</a>
		</div>
		<div class="album-final-pinglun">
			<p class="review-text-leavings clear"><strong style="color: #0181da;">我也来说几句</strong><span id="wrap_letter_leninfo_id" style="color: #0181da;"></span></p>
			<textarea id="comment_message" name="message" rows="5" ></textarea>
			<div class="clearfix snsinfo_fabiao">
					<i class="el el-reddit" onclick="getTuzki(this)"></i>
					<input style="height:30px;font-size:12px;margin-top:1px;" class="form-control b-email" name="email" placeholder="接收回复的email地址" type="text">
				<span>
					<input id="reply_uid" value="0" type="hidden">
					<input id="reply_realname" value="" type="hidden">
					<input class="repcom-btn-sure" type="button" value="评论" id="com_sub_btn" onclick="sendcom(0)"/>
				</span>
			</div>
		</div>
		<div class="all-comment">
			<h3 class="pinglun-cutline" >评论（<span id="replys" style="color:red" >0</span>）</h3>
			<!--网友回复内容-->
			<ul id="comments" class="say-backup-detail-other"></ul>
			<div class="page-number-ol"><ol class="paginate" id="paginate"></ol></div>

		</div>
	</div>
	<script type="text/javascript" src="/ui/system/comment/js/jquery.pagination.js"></script>
	<script type="text/javascript" src="/ui/system/comment/js/commentajax.js"></script>
</div>
