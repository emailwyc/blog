$(document).ready(function() {
    	bindLenVerify('comment_message', 'wrap_letter_leninfo_id');
		//变量定义
    	var arcid = jQuery.trim(jQuery('#snsinfo_arcid').val());
		//随机更新头像
	reloadMyAvatar('comment_avatar',false);

});

/*AJAX刷新评论*/ 
function refreshComment(arcid, type, page)
{
        jQuery.getJSON('/comment/getcomment?callback=?',{aid:arcid,com_type:type,page:page, r:Math.random()},function(data){
		if(data != "0")
		{
			var html='';
			if(data.clist != null || data.clist != "")
			{
				jQuery.each(data.clist, function(i, item) {
					html +='<li class="bg-color" style="border-bottom:none;">';

					html +='<div class="comment-ava"><a href="javascript:void(0)" id="Comment-137" rel="nofollow" title="王延崇"><img class="img-circle" onerror="this.onerror=null;this.src=\'/ui/system/images/default_avatar/118.jpg\'" title="' +item.nickname+ '" src="'+item.avatar+'" alt="' +item.nickname+ '"></a></div>';

					html +='<div class="comment-info" style="width:90%">';
					html +='<div class="comment-line ">';
					//start
					html +='<ul><li style="float:left;border-bottom:none;"><a><i class="el-user"></i>' +item.nickname+ '</a></li><li style="float:left;border-bottom:none;"><span title="发表于' +item.createtime+ '"><i class="el-time"></i>' +item.createtime+ '</a></li><li style="float:left;border-bottom:none;"><a title="'+item.nickname+' 位于："><i class="el-map-marker">'+item.address+'</i></a></li>';
					html+='<li style="float:right;border-bottom:none;">';
					html+='<a href="javascript:void(0);" username="' +item.nickname+ '" onclick="replay(\''+item.id+'\')">回复';
					html +='(<em id="repcomcount_'+item.id+'">0</em>)</a>';
					html+='</a>';
					html+='</li></ul>';
					//end
						
					html+='</div>';
					html +='<div class="comment-content">' +item.content+ '</div>';
					//html +='<a href="javascript:void(0);" onclick="replay(\'' +item.id+ '\',\'' +item.id+ '\');" class="pinglun">回复';
					//if(eval(cid) == null) html +='(<em id="repcomcount_'+item.id+'">0</em>)</a>';
					//else html +='(<em id ="repcomcount_'+item.id+'" style=color:blue>'+eval(cid)+'</em>)</a>';
					html +='</div>';
					html +='</div><div id="div_comment_'+item.id+'" class="commentsList repclearfix" style="display:none" value="0"></div>';

					html +='</li>';

				});

			}else{
				html = "<div id='Comment' class='comment-area'> <h4 class='index-title'><i class='el-comment-alt'></i> 亲，沙发正空着，还不快来抢？ </h4> </div>";
			}
			jQuery('#comments').html('');
			jQuery('#comments').html(html);
		}
        });
}

/*得到评论总数*/
function getCommentCount(arcid, type,myOffset)
{
	jQuery.getJSON('/comment/getcommentcount?callback=?',{arcid:arcid, com_type:type, r:Math.random()},function(data){
		if(data != '0')
		{
			function pageselectCallback(page_index,jq){
				refreshComment(arcid,type,page_index + 1);
			}
			jQuery('#replys').html(data);
			jQuery('#paginate').html('');
			jQuery('#paginate').pagination(data,{
				callback:pageselectCallback,
				items_per_page:myOffset
			});
		}else
			jQuery('#comments').html('<div id="Comment" class="comment-area"> <h4 class="index-title"><i class="el-comment-alt"></i> 亲，沙发正空着，还不快来抢？ </h4> </div>');
	});
}

//初始化评论
$(document).ready(function(){
    	var arcid = jQuery.trim(jQuery('#snsinfo_aid').val());
    	var type = jQuery("#snsinfo_type").val();
    	var myOffset = jQuery("#snsinfo_get_offset").val();
        //getCommentCount(arcid,type,myOffset);
});
