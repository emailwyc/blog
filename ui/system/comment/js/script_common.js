 //限制字数信息存储容器
var verifyLenInfo   = {defMaxLen: 158};
/**
 * 绑定字符长度检测
 * 
 * @param string contentDomId 输入区域ID
 * @param string showDomId 显示区域ID
 * @param int maxLen 最大长度 默认 158
 * @return void
 */
var bindLenVerify = function(contentDomId, showDomId, maxLen) {
    if(jQuery('#' + contentDomId).length < 1) {
        //showWarn('长度检测的内容DOM不存在！<br/>ID为：' + contentDomId);
        return false;
    }
    if(jQuery('#' + showDomId).length < 1) {
        //showWarn('剩余字数提示显示DOM不存在！<br/>ID为：' + showDomId);
        return false;
    }
    if(typeof maxLen == 'undefined') {
        maxLen  = verifyLenInfo.defMaxLen;
    }
    verifyLenInfo[contentDomId]  = {len: maxLen, show: showDomId};
    jQuery('#' + contentDomId).bind('change keyup mousemove', function() {
        XTools.checkValidWords(this.id, verifyLenInfo[this.id].show, verifyLenInfo[this.id].len);
    });
    jQuery('#' + contentDomId).change();
};

//隐藏表情
function hideFace(showid)
{
        jQuery('#' + showid + '_menu').css('display','none');
        //jQuery('#face_bg_' + showid).css('display','none');
}

 //显示表情菜单
function showFace(showid, target) 
{
        //jQuery('#face_bg').css('height',document.body.clientHeight);
        if(jQuery('#' + showid + '_menu').html() != null) 
        {
                jQuery('#' + showid+'_menu').css('display','');
        }
        else 
        {
                var parentdiv = '<div id="append_parent"></div>';
                var faceDivHtml = '<div id="' + showid + '_menu" class="facebox" style="position:absolute;"' + '><ul>';
                for(i=1; i<31; i++) {
                        faceDivHtml += '<li><img src="/ui/system/comment/images/face/'+i+'.gif" onclick="insertFace(\''+showid+'\','+i+', \''+ target +'\')" style="cursor:pointer; position:relative;" />    </li>';
                }
                faceDivHtml += '</ul></div>';
                var facebg = '<div id="face_bg_' + showid + '" onclick="hideFace(\'' + showid + '\');" style="height: 1566px; display: none;" class="back_model"></div>';
                jQuery('body').append(parentdiv);
                jQuery('#append_parent').append(faceDivHtml);
                jQuery('#append_parent').append(facebg);
		jQuery('body').bind('click', function(event) {
			var et = event.target;
			if (jQuery(et).attr('id') != showid)
				hideFace(showid);
		});
        }
        setMenuPosition(showid,0);
        jQuery('#face_bg_' + showid).css('opacity',0);
        jQuery('#face_bg_' + showid).css('height',jQuery('body').height());
        jQuery('#face_bg_' + showid).css('display','block');
}
//插入表情
function insertFace(showid, id, target) {
        var faceText = '[em:'+id+':]';
        if(jQuery('#' + target).html() != null) {
                //var text = jQuery('#' + target).val();
                insertContent(target, faceText);
                //jQuery('#' + target).val(text + faceText);
                //jQuery('#' + target).focus();
        }
	hideFace(showid);
        jQuery('#' + showid+'_menu').css('display','none');
        jQuery('#face_bg_' + showid).css('display','none');
}
 /*div位置*/
 function setMenuPosition(showid, offset) {
         var showobj = document.getElementById(showid);
         var menuobj = document.getElementById(showid + '_menu');
         if(isUndefined(offset)) offset = 0;
         if(showobj) {
                 showobj.pos = fetchOffset(showobj);
                 showobj.X = showobj.pos['left'];
                 showobj.Y = showobj.pos['top'];
                 showobj.w = showobj.offsetWidth;
                 showobj.h = showobj.offsetHeight;
                 menuobj.w = menuobj.offsetWidth;
                 menuobj.h = menuobj.offsetHeight;
                 var sTop = document.documentElement && document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop;
                 if(offset != -1) {
                         menuobj.style.left = (showobj.X + menuobj.w > document.body.clientWidth) && (showobj.X + showobj.w - menuobj.w >= 0) ? showobj.X + showobj.w - menuobj.w + 'px    ' : showobj.X + 'px';
                         menuobj.style.top = offset == 1 ? showobj.Y + 'px' : (offset == 2 || ((showobj.Y + showobj.h + menuobj.h > sTop + document.documentElement.clientHeight) && (showobj.Y - menuobj.h >= 0)) ? (showobj.Y - menuobj.h) + 'px' : showobj.Y + showobj.h + 'px');
                 } else if(offset == -1) {
                         menuobj.style.left = (document.body.clientWidth-menuobj.w)/2 + 'px';
                         var divtop = sTop + (document.documentElement.clientHeight-menuobj.h)/2;
                         if(divtop > 100) divtop = divtop - 100;
                         menuobj.style.top = divtop + 'px';
                 }
                 if(menuobj.style.clip && !is_opera) {
                         menuobj.style.clip = 'rect(auto, auto, auto, auto)';
                 }
         }
 }
function isUndefined(variable) 
{
        return typeof variable == 'undefined' ? true : false;
}
function fetchOffset(obj) {
        var left_offset = obj.offsetLeft;
        var top_offset = obj.offsetTop;
        while((obj = obj.offsetParent) != null) {
                left_offset += obj.offsetLeft;
                top_offset += obj.offsetTop;
        }
        return { 'left' : left_offset, 'top' : top_offset };
}
//处理文本
function insertContent(target, text) {
        var obj = document.getElementById(target);
        selection = document.selection;
        obj.focus();
        if(!isUndefined(obj.selectionStart)) {
                var opn = obj.selectionStart + 0;
                obj.value = obj.value.substr(0, obj.selectionStart) + text + obj.value.substr(obj.selectionEnd);
        } else if(selection && selection.createRange) {
                var sel = selection.createRange();
                sel.text = text;
                sel.moveStart('character', -strlen(text));
        } else {
                obj.value += text;
        }
        jQuery(obj).trigger('keyup');
}

// 把光标搁到最前面
function locatePoint(target){
        var tea = document.getElementById(target);

        if (!tea)
                return;
        if (tea.setSelectionRange) {
                //setTimeout(function() {
                                tea.setSelectionRange(0, 0); //将光标定位在textarea的开头，需要定位到其他位置的请自行修改
                                tea.focus();
                //              }, 0);
        }else if (tea.createTextRange) {
                var txt=tea.createTextRange();
                txt.moveEnd("character",0-txt.text.length);
                txt.select();
        }
}
 function strlen(str) { 
         return (is_ie && str.indexOf('\n') != -1) ? str.replace(/\r?\n/g, '_').length : str.length; 
 }
//点击回复触发该函数
function replay(tid){
	alert(tid);
                if (!tid)    
                        return;
		var div_comment = jQuery("#div_comment_"+tid);
		if(div_comment.attr("value")=="1" && div_comment.css('display') == 'none'){ div_comment.slideToggle("fast"); return;}
                if (div_comment.css('display') == 'block' && div_comment.attr('value')=="1") {
                        div_comment.slideUp('fast');
                        return;
                }   

		var html = ''; 
			html +='<div class="repcom-review rep-open-box">';
			html += '               <textarea name="repcomment_' + tid + '" cols="" rows="" id="repcomment_' + tid + '"></textarea>';
			html +='                <div class="repclearfix"><a href="javascript:void(0);" class="icon global-face-icon2 float-left" style="cursor:pointer" id="comment_face_' + tid + '" onclick="showFace(this.id,\'repcomment_' + tid + '\');return false;">表情</a><span class="rep-float-right">';
			html +='                        <span class="rep-float-left"><input type="checkbox" name="comment_agree_' + tid + '" id="comment_agree_' + tid + '" class="rep-checkbox-vertical" />';
			html +='                        <label for="tomine" class="rep-margin-lr">转发至微博</label>';
			html += '                       </span>';
			html += '                       <input type="hidden" name="reply_content_' + tid + '" id="reply_content_' + tid + '">';
			html +='                        <input class="repcom-btn-sure" type="button" name="comment_button'+ tid + '" onclick="sendcom(' + tid + ');" value="评论" />';
			html +='                        </span></div>';
			html +='        <ul class="rep-review-list" id="reply_list_' + tid + '">';
			html +='        </ul>';
			html +='<div class="page-number-ol"><ol class="paginate" id="reply_paginate_' + tid + '"></ol></div>';
			html +='</div>';
               	jQuery('#div_comment_' + tid).html(html).slideToggle('fast');
		var page = 1;
		var repcomcount = parseInt(jQuery("#repcomcount_"+tid).html());
		div_comment.attr({value:"1"});
		function reppageselectCallback(page_index,jq){
			getcomrepinfo(tid,page_index + 1);
		}
		jQuery('#reply_paginate_' + tid).pagination(repcomcount,{
			callback:reppageselectCallback,
			items_per_page:10,
			prev_text: '<<<',
			next_text: '>>>',
			
		},1);

}

function getcomrepinfo(tid,page){
	var checkuid = jQuery("#snsinfo_userid").val();
       jQuery.getJSON('http://comment.hihoku.com/comment.php?ac=comment&do=getRepCom&callback=?', {tid: tid, userid:checkuid, page:page, r: Math.random()}, function(data) {
		if (data != 0) {
			var html='';
			jQuery.each(data.replist, function(i, item) {
				if(item.avatar ==null || item.avatar==""){
					item.avatar = "/images/comment_default.jpg";
					item.username = "匿名";
					item.userid = "javascript:void(0)"; 
				}else item.userid = "http://sns.hihoku.com?"+item.userid;
				html +='                <li id="r_row_' + item.id + '" >';
				html +='                        <dl class="repclearfix">'; 
				html +='                                <dt><a href="' + item.userid + '"><img class="repuserhead" onerror="this.onerror=null;this.src=\'http://sns.hihoku.com/ucenter/images/noavatar_small.gif\'" src="' + item.avatar + '" /></a></dt>';                                 
				html +='                                <dd>';
				html +='                                        <p><span id="t_reply_name_' + item.id + '"><a href="' + item.userid + '">' + item.username + ': </a></span><span id="t_reply_msg_' + item.id + '">' + item.message + '</span></p>';
				html +='                                        <div class="time-and-app date"><span>';
				if (data.delcheck == "1") {
			 		html += ' <a href="javascript:void(0);" onclick="delComment('+item.id+','+tid+')" >删除</a>';
				}

				html += '<a href="javascript:void(0);" onclick="comment.rep_msg_change(' + tid + ', ' + item.id + ');" class="pinglun">回复</a>';
				html += '</span>' + item.sendtime + '</div>';
				html +='                                </dd>';
				html +='                        </dl>';
				html +='                </li>';
			});

		} else {
		}
		jQuery("#reply_list_"+tid).html(html);
		jQuery('#repcomment_' + tid).focus();
	});
}

function sendcom(comid){
	var message;
	var pid;
	if(comid === 0){
		var message = jQuery('#comment_message').val();
		var pid = 0;
	}else{
		var message = jQuery('#repcomment_'+comid+"").val();
		var pid = comid;
		message = comment.recovery_href(message);
	}
	var exp = new Date();    
	exp.setTime(exp.getTime()+60*1000);   
	var cookieval = getCookie("hhkcmchk");
	var outtimeval= getCookie("hcomdate");
	if(outtimeval == "" || outtimeval == null){
		document.cookie = "hcomdate=" + escape(1) + ";expires=" + exp.toGMTString() + ";path=/";
		document.cookie = "hhkcmchk=" + escape(1) + ";expires=" + exp.toGMTString() + ";path=/";
	}else{
		newcookieval = parseInt(cookieval)+1;
		if(newcookieval > 7){
			alert("评论有些频繁,休息一下再试吧!");return ;
		}
		document.cookie="hhkcmchk=" + escape(newcookieval) + ";expires=" + exp.toGMTString() + ";path=/";
	}
	message = jQuery.trim(message);
	var userid = jQuery("#snsinfo_userid").val();
	var username = jQuery("#snsinfo_username").val();
	var photourl = jQuery("#snsinfo_userpic").val();
	var type = jQuery("#snsinfo_type").val();
	var arcid = jQuery.trim(jQuery('#snsinfo_arcid').val());
	message     = XTools.verifyStringLen(message);
	if(message === false){
	    alert('评论' + XTools.error);
	    if(comid === 0) jQuery('#comment_message').focus();
	    else jQuery("#repcomment_"+comid).focus();
	    return false;
	}
	jQuery.getJSON('http://comment.hihoku.com/comment.php?ac=comment&do=send&callback=?',{message:message,userid:userid,username:username,photourl:photourl,arcid:arcid,pid:pid,type:type},function(data){
		if(data == "1") alert("您的评论太过频繁,休息一下再评论吧!");
		else if(data == "0") alert("评论失败,请联系管理员!");
		else if(data == "3") alert("评论字数有误,请修正!");
		else{
			if(comid === 0){
				var html = '';
				html +='<li id="delcom' + data.commentid + '" onmouseover="jQuery(\'#reportshowli_'+data.commentid+'\').show();" style="display:none;" onmouseout="jQuery(\'#reportshowli_'+data.id+'\').hide();">';
				html +='<dl class="backup-list-two clearfix">';
				html +='<dt>';
				html +='<a href="'+data.userid+'"><img class="userhead" onerror="this.onerror=null;this.src=\'http://sns.hihoku.com/ucenter/images/noavatar_small.gif\'" title="'+data.username+'" src="'+data.photourl+'" /></a>';
				html +='</dt>';
				html +='<dd>';
				html +='<p class="backup-text"><a href="'+data.userid+'">' +data.username+ '：</a>' +data.message+'</p>';
				html +='<div class="time-and-app date"><span>';
				if(data.delcheck == "1") html += '<a href="javascript:void(0);" onclick="delComment(' +data.commentid+ ',0);">删除</a>';
				html +='<a href="javascript:void(0);" onclick="replay(\''+data.commentid+'\');" class="pinglun">回复(<em id="repcomcount_'+data.commentid+'">0</em>)</a>';
				html += '</span>' +data.sendtime+ '</div>';
				html +='<div id="div_comment_'+data.commentid+'" class="commentsList repclearfix" style="display:none" value="0"></div></dd>';
				html +='</dl>';
				html +='</li>';
				var newli=jQuery('#comments');
				newli.prepend(html);
				var replycount = parseInt(jQuery('#replys').html())+1;
				if(replycount == 1) jQuery("#nowebfriendcomment").slideUp();
				jQuery('#replys').html(replycount);
				var oneid = document.getElementById("comments").childNodes.item(0).id;
				if(replycount > 8){
					 var eightid = document.getElementById("comments").childNodes.item(8).id;
					jQuery("#"+eightid+"").slideUp();
				}	
				jQuery("#"+oneid+"").slideDown();	
				jQuery('#comment_message').val("");
			}else{
				var repcomcount = '#repcomcount_'+comid;
				var replycount = parseInt(jQuery(repcomcount).html())+1;
				if(replycount == 1 ) jQuery(repcomcount).attr({style:"color:blue;"});
				jQuery(repcomcount).html(replycount);
				var newli = jQuery('#reply_list_'+comid);

				var hmtl = '';
				hmtl += '<li id="r_row_'+data.commentid+'" style="display:none;"><dl class="repclearfix"><dt><a href="'+data.userid+'">';
				hmtl += '<img class="repuserhead" onerror="this.onerror=null;this.src=\'http://sns.hihoku.com/ucenter/images/noavatar_small.gif\'" src="'+data.photourl+'"></a></dt><dd><p>';
				hmtl += '<span id="t_reply_name_'+data.commentid+'"><a href="'+data.userid+'">'+data.username+': </a></span>';
				hmtl += '<span id="t_reply_msg_'+data.commentid+'">'+data.message+'</span></p><div class="time-and-app date"><span>';
				if(data.delcheck == "1") hmtl += '<a onclick="delComment('+data.commentid+','+data.pid+')";" href="javascript:void(0);">删除</a>';
				hmtl += '<a class="pinglun" onclick="comment.rep_msg_change('+data.pid+', '+data.commentid+');" href="javascript:void(0);">回复</a></span>'+data.sendtime+'</div></dd></dl></li>';
				newli.prepend(hmtl);
				var oneid = document.getElementById('reply_list_'+comid).childNodes.item(0).id;
				jQuery("#repcomment_"+comid).val("");
				if(replycount > 10){
					 jQuery("#reply_list_"+comid+" li:eq(10)").slideUp();
				}	
				jQuery("#"+oneid+"").slideDown();
				
			}
		}
	});
}

//获取指定名称的cookie的值
function getCookie(objName){	
	var arrStr = document.cookie.split("; ");
	for(var i = 0;i < arrStr.length;i ++){
		var temp = arrStr[i].split("=");
		if(temp[0] == objName) return unescape(temp[1]);
	} 
}

/*评论系统对象*/
var comment={
	uids:{},
	recovery_href: function(str) {
		var item, tmp_reg, tmp_obj;
		if (!str)
			return '';

		str = str.replace(/</g, "&lt;").replace(/>/g, "&gt;");
		for (item in comment.uids) {
			tmp_obj = comment.uids[item];
			tmp_reg = new RegExp("@" + tmp_obj[1], "g");
			str = str.replace(tmp_reg, '<a href="http://sns.hihoku.com?' + tmp_obj[0] + '">@' + tmp_obj[1] + '</a>');
		} 
		return str;
	},
	clean_href: function(str) {
		var row, uid;
		var reg1 = new RegExp("<a.*?\\.com\\?(\\d+).*?>@?([^@]+?)<\/a>", "ig");
		var reg2 = new RegExp("<[^>]*>", "g");
		comment.uids = {};
		while ((row = reg1.exec(str)) != null) {
			uid = row[1];
			if (!comment.uids[uid]) {
				comment.uids[uid] = [uid, row[2]];
			}
		}
		return str.replace(reg2, '');
	},
	rep_msg_change: function(cid, rid) {
		var r_msg = jQuery('#t_reply_name_' + rid).html() + ':' + jQuery('#t_reply_msg_' + rid).html();
		jQuery('#repcomment_' + cid).val('');
		insertContent('repcomment_' + cid, '回复@' + comment.clean_href(jQuery('#t_reply_name_' + rid).html().replace(/\&amp;/g,'&')));

	},
}
