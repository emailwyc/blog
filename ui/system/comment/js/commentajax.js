$(document).ready(function() {
    	bindLenVerify('comment_message', 'wrap_letter_leninfo_id');
		//变量定义
    	var arcid = jQuery.trim(jQuery('#snsinfo_arcid').val());

});

/*AJAX刷新评论*/ 
function refreshComment(arcid, type, page)
{
        jQuery.getJSON('/comment/getcomment?callback=?',{arcid:arcid,com_type:type,page:page, r:Math.random()},function(data){
		if(data != "0")
		{
			var html='';
			if(data.clist != null || data.clist != "")
			{
				jQuery.each(data.clist, function(i, item) {
					var cid = 'data.rcount.c'+item.id+'c';
					if(item.avatar ==null || item.avatar==""){
						item.avatar = "/images/comment_default.jpg";
						item.username = "匿名";
						item.userid = "javascript:void(0)"; 
					}else item.userid = "http://sns.hihoku.com?"+item.userid;
					html +='<li id="delcom'+item.id+'" onmouseover="jQuery(\'#reportshowli_'+item.id+'\').show();" onmouseout="jQuery(\'#reportshowli_'+item.id+'\').hide();">';
					html +='<dl class="backup-list-two clearfix">';
					html +='<dt>';
					html +='<a href="'+item.userid+'"><img class="userhead" onerror="this.onerror=null;this.src=\'http://sns.hihoku.com/ucenter/images/noavatar_small.gif\'" title="' +item.username+ '" src="'+item.avatar+'" /></a>';
					html +='</dt>';
					html +='<dd>';
					html +='<p class="backup-text"><a href="'+item.userid+'">' +item.username+ '：</a>' +item.message+ '</p>';
					html +='<div class="time-and-app date"><span>';
					if(data.delcheck == "1") html += '<a href="javascript:void(0);" onclick="delComment(\'' +item.id+ '\',0);">删除</a>';
					html +='<a href="javascript:void(0);" onclick="replay(\'' +item.id+ '\',\'' +item.id+ '\');" class="pinglun">回复';
					if(eval(cid) == null) html +='(<em id="repcomcount_'+item.id+'">0</em>)</a>';
					else html +='(<em id ="repcomcount_'+item.id+'" style=color:blue>'+eval(cid)+'</em>)</a>';
					html += '</span>'+item.sendtime+'</div><div id="div_comment_'+item.id+'" class="commentsList repclearfix" style="display:none" value="0"></div>';
					html +='</dd>';
					html +='</dl>';
					html +='</li>';
				});
			}else
			{
				html = "<h3 id='nowebfriendcomment'><center>暂无网友评论哦!</center></h3>";
			}
			jQuery('#comments').html('');
			jQuery('#comments').html(html);
		}
        });
}

/*得到评论总数*/
function getCommentCount(arcid, type)
{
	jQuery.getJSON('/comment/getcommentcount?callback=?',{arcid:arcid, com_type:type, r:Math.random()},function(data){
		if(data != '1')
		{
			function pageselectCallback(page_index,jq){
				refreshComment(arcid,type,page_index + 1);
			}
			jQuery('#replys').html(data);
			jQuery('#paginate').html('');
			jQuery('#paginate').pagination(data,{
				callback:pageselectCallback,
				prev_text: '上一页',
				next_text: '下一页'
			});
		}else
			jQuery('#comments').html('<div id="Comment" class="comment-area"> <h4 class="index-title"><i class="el-comment-alt"></i> 亲，沙发正空着，还不快来抢？ </h4> </div>');
	});
}

/*删除评论*/
function delComment(commentid, checkid)
{
	var type = jQuery("#snsinfo_type").val();
        jQuery.getJSON('http://comment.hihoku.com/comment.php?ac=comment&do=delcomment&callback=?',{commentid:commentid,pid:checkid,com_type:type},function(data){
                if(data != "0"){
			var replycount;
			if(checkid == 0 ){
				replycount=jQuery('#replys').html() - 1;
				jQuery('#replys').html(replycount);
				jQuery("#delcom"+commentid).hide("slow");
			}else{
				replycount=jQuery('#repcomcount_'+checkid).html() -1;
				jQuery("#repcomcount_"+checkid).html(replycount);
				jQuery("#r_row_"+commentid).hide("slow");
			}
                }else alert("删除失败!");
		
        });
}

//初始化评论
$(document).ready(function(){
    	var arcid = jQuery.trim(jQuery('#snsinfo_aid').val());
		var type = jQuery("#snsinfo_type").val();
        getCommentCount(arcid,type);
});
