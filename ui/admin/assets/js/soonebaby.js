//当前连接高亮
$(document).ready(function() {
    var curUrl = String(window.location);
    var curUrlSt = false;

    $('.nav-list li a').each(function () {
        if (curUrl.indexOf($($(this))[0].href) != -1) {
            curUrlSt = true;
            $(this).parent("li").addClass('active');
            if ($(this).attr("menu-two") == "true") {
                $(this).parents(".menu-two").addClass('active open');
            }
        }
    });
    if (curUrlSt == false) {
        $('.nav-default').addClass('active');
    }
});


//处理图片
function updateimg(){
    $(document).on("change",".jzr-form .img-add input[type=file]",function(){
        $(this).parent(".img-add").addClass("zhuan11");
        var f=$(this);

        if(f.val()=="") {
            layer.msg("请上传图片");
            f.parent(".img-add").removeClass("zhuan11");
            return false;
        } else {
            if(!/\.(gif|jpg|jpeg|png|GIF|JPG|PNG|JPEG)$/.test(f.val())) {
                layer.msg("图片类型必须是.gif,jpeg,jpg,png中的一种");
                f.parent(".img-add").removeClass("zhuan11");
                return false;
            }
        }

        var canvas = document.createElement("canvas");
        var img = new Image();
        img.onload=function(){
            var width=800;
            var height=800;
            var bor = img.width > img.height ? 1 : 0;
            if(bor){
                if(img.width > width){
                    var target_w = width;
                    var target_h = parseInt(width/img.width*img.height);
                }else{
                    var target_w = img.width;
                    var target_h = img.height;
                }
            }else{
                if(img.height > height){
                    var target_w = parseInt(height/img.height*img.width);
                    var target_h = height;
                }else{
                    var target_w = img.width;
                    var target_h = img.height;
                }
            }
            canvas.width = target_w;
            canvas.height = target_h;
            canvas.getContext("2d").drawImage(img,0,0,target_w,target_h);
            var imgData = canvas.toDataURL();
            imgData = imgData.replace('data:image/png;base64,','')
            alert(imgData);exit;
            var imagedata =  encodeURIComponent(imgData);
            var img_data={"img_info" : imagedata,"img_type" : "png"}
            $.ajax({
                type: "post",
                url: "/admin/json/uploadImg",
                async: false,
                data:img_data,
                dataType: "json",
                beforeSend: function(){

                },
                success: function (data){
                    if(data.st==1){
                        var length=$(".jzr-form .img-add").length;
                        var num=f.parent(".img-add").index(".jzr-form .img-add");
                        if(length<=19)
                        {
                            f.parent(".img-add").after("<div class=\"img-add\"><input type=\"file\" capture=\"camera\" accept=\"image/*\" name='file[]'></div>")
                        }
                        if(length>=1)
                        {
                            $(".jzr-form .image .right").hide();
                        }
                        var img=data.msg;
                        var thumb=img.replace('.png','_thumb.png')
                        var img2 = new Image();
                        img2.onload=function(){
                            f.parent(".img-add").removeClass("zhuan11");
                            $(".jzr-form .img-add").eq(num).empty().append("<img src=\""+img2.src+"\" alt=\"\" /><input name=\"img[]\" type=\"hidden\" value=\""+img+"\" />");
                        }
                        img2.src=thumb;
                    }else{
                        layer.msg(data.msg)
                    }
                }
            })
        }
        if(typeof FileReader != 'undefined'){
            var reader = new FileReader();
            reader.readAsDataURL(this.files[0]);
            reader.onload=function(e){
                img.src=this.result;
            };
        }else{
            if (window.navigator.userAgent.indexOf("MSIE") >= 1) {
                this.select();
                img.src=document.selection.createRange().text;
            }
        }

    })
    $(document).on("click",".jzr-form .img-add img",function(){
        var length=$(".jzr-form .img-add img").length;
        $("body").append("<div class=\"img-pop2\" data-num=\""+length+"\"><div class=\"img\"><img src=\""+$(this).next("input").val()+"\" /></div><div class=\"btn cfix\"><a href=\"javascript:void(0)\" class=\"fl\">删除</a><a href=\"javascript:void(0)\" class=\"fr\">取消</a></div>");
    })
    $(document).on("click",".img-pop2 .fl",function(){
        var length=$(".img-pop2").attr("data-num");
        $(".jzr-form .img-add").eq(length-1).remove();
        if(length==20) {
            $(".jzr-form .image .left").append("<div class=\"img-add\"><input type=\"file\" capture=\"camera\" accept=\"image/*\" name='file[]'></div>")
        }
        if(length==1)
        {
            $(".jzr-form .image .right").show();
        }
        $(".img-pop2").remove();
    })
    $(document).on("click",".img-pop2 .fr",function(){
        $(".img-pop2").remove();
    })
}


function updateimgone(w,h,tp) {
    $(document).on("change", ".jzr-form .img-add-photo input[type=file]", function () {
        $(this).parent(".img-add-photo").addClass("zhuan11");
        var f = $(this);
        if (f.val() == "") {
            layer.msg("请上传图片");
            f.parent(".img-add-photo").removeClass("zhuan11");
            return false;
        } else {
            if (!/\.(gif|jpg|jpeg|png|GIF|JPG|PNG|JPEG)$/.test(f.val())) {
                layer.msg("图片类型必须是.gif,jpeg,jpg,png中的一种");
                f.parent(".img-add-photo").removeClass("zhuan11");
                return false;
            }
        }
        var canvas = document.createElement("canvas");
        var img = new Image();
        img.onload = function () {
            var width = w;
            var height = h;
            var bor = img.width > img.height ? 1 : 0;
            if (bor) {
                if (img.width > width) {
                    var target_w = width;
                    var target_h = parseInt(width / img.width * img.height);
                } else {
                    var target_w = img.width;
                    var target_h = img.height;
                }
            } else {
                if (img.height > height) {
                    var target_w = parseInt(height / img.height * img.width);
                    var target_h = height;
                } else {
                    var target_w = img.width;
                    var target_h = img.height;
                }
            }
            canvas.width = target_w;
            canvas.height = target_h;
            canvas.getContext("2d").drawImage(img, 0, 0, target_w, target_h);
            var imgData = canvas.toDataURL();
            imgData = imgData.replace('data:image/png;base64,', '')
            var imagedata = encodeURIComponent(imgData);
            var img_data = {"img_info": imagedata, "img_type": "png","tp":tp,"thumb":{"w":64,"h":64}}
            $.ajax({
                type: "post",
                url: "/admin/json/uploadImg",
                async: false,
                data: img_data,
                dataType: "json",
                beforeSend: function () {

                },
                success: function (data) {
                    if (data.code == 1) {
                        var img = data.msg;
                        var thumb = img.replace('.png', '.png');
                        var img2 = new Image();
                        img2.onload = function () {
                            f.parent(".img-add-photo").removeClass("zhuan11");
                            var html = "";
                            html+="<img data-action=\"zoom\" src=\"" + img2.src + "\" alt=\"\" /><input name=\""+tp+"\" type=\"hidden\" value=\"" + img + "\" />"
                            $(".jzr-form .img-show").empty().append(html);
                        }
                        img2.src = thumb;
                    } else {
                        layer.msg(data.msg);
                    }
                }
            })
        }
        if(typeof FileReader != 'undefined'){
            var reader = new FileReader();
            reader.readAsDataURL(this.files[0]);
            reader.onload=function(e){
                img.src=this.result;
            };
        }else{
            if (window.navigator.userAgent.indexOf("MSIE") >= 1) {
                this.select();
                img.src=document.selection.createRange().text;
            }
        }
    })
}
