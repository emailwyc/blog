//百度统计
//访问统计
$(document).ready(function(){
    $.ajax({  
        type : "POST",  
        url : "/common/visit",  
        dataType : "json",  
        async : true,  
        data:{},  
        success : function(data) { 
		},
        error: function(res) {  
        },
    });  
})
// 登陆
function login(){
    $('#b-modal-login').modal('show');
    setCookie('this_url',window.location.href);
}

// 退出
function logout(){
    $.post(logoutUrl);
    setTimeout(function(){location.replace(location)},500);
}
/**
 * 设置cookie
 * @param {string} name  键名
 * @param {string} value 键值
 * @param {integer} days cookie周期
 */
function setCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }else{
        var expires = "";
    }
    document.cookie = name+"="+value+expires+"; path=/";
}

// 获取cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

// 删除cookie
function deleteCookie(name) {
    setCookie(name,"",-1);
}

/**
 * 记录当前选中的分类或者标签
 * @param  {string} category index：首页 cid：分类  tid：标签
 * @param  {integer} id      id
 * @return {boolean}         true 接着跳转
 */
function recordId(category,id){
    // 设置默认值为0
    setCookie('cid',0);
    setCookie('tid',0);
    setCookie('search_word',0);
    // 如果不是首页 则记录当前选中的分类或者标签
    if (category!='index' && category!='/') {
        setCookie(category,id);
    }
    return true;
}


function getRandom(min, max){
	var r = Math.random() * (max - min);
	var re = Math.round(r + min);
	re = Math.max(Math.min(re, max), min)
	return re;
}

function reloadMyAvatar(obj,auto){
	//生成头像cookie
	var avatarKey = "client_random_avatar";
	var avaUrl = getCookie(avatarKey);
	if(avaUrl==null || avaUrl=="" || auto){
		var rand = getRandom(0,120);
		avaUrl = "/ui/system/images/default_avatar/"+rand+".jpg";
	}
	setCookie(avatarKey,avaUrl,100);
	$('#'+obj).attr('src',avaUrl);
	return true;	
}
