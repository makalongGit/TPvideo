<?php /*%%SmartyHeaderCode:469659400a0cb13373-31713475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e8319dcf0803a427b121219be938793a19867a7' => 
    array (
      0 => './Template/default/Admin\\Index\\info.html',
      1 => 1493968437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469659400a0cb13373-31713475',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59400a0cdab51',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59400a0cdab51')) {function content_59400a0cdab51($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
  <link rel="stylesheet" href="/TPvideo/Template/default/Admin/Public/css/pintuer.css">
<link rel="stylesheet" href="/TPvideo/Template/default/Admin/Public/css/admin.css">
<link rel="stylesheet" href="/TPvideo/Template/default/Admin/Public/css/font-awesome.min.css">
<script src="/TPvideo/Template/default/Admin/Public/js/jquery-1.10.1.js"></script>
<script src="/TPvideo/Template/default/Admin/Public/js/pintuer.js"></script>
<script src="/TPvideo/Template/default/Admin/Public/js/layer.js"></script>
 
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="fa fa-address-card"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
      <div class="form-group">
        <div class="label">
          <label>网站标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="stitle" value="" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label" style="margin-top:20px;margin-bottom:20px">
          <label>网站LOGO：</label>
        </div>
		
        <div class="label" style="margin-top:15px;margin-bottom:20px">
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
        </div>
		<input type="file" id="upload_image" name="file0" style="visibility: hidden;">
		<div class="label" style="width:165px;height:70px;margin-left:15px">
			
			<img src="" id="img0" style="border:1px solid #ddd;disiplay:none">
			<span style="position:relative;top:20px;text-align: left">图片类型：jpeg,jpg,png<br />大小为159x60</span>
		  </div>
		  
		
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>网站关键字：</label>
        </div>
        <div class="field">
          <textarea class="input" name="skeywords" style="height:80px"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="sdescription"></textarea>
          <div class="tips"></div>
        </div>
      </div>
     
              
      <div class="form-group">
        <div class="label">
          <label>底部信息：</label>
        </div>
        <div class="field">
          <textarea name="scopyright" class="input" style="height:120px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main fa fa-check-square add_tijiao" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>

$('#image1').click(function(){

$('#upload_image').click();

});


$("#upload_image").change(function(){  
 
	var file = $("#upload_image").val();
	if(!/\.(jpg|jpeg|png||JPG|PNG|JPEG)$/.test(file)) {
       
          alert("图片类型必须是.gif,jpeg,jpg,png中的一种")
          return false;
        }
	
  /*
		
	var img=null;
 img=document.createElement("img");
 document.body.insertAdjacentElement("beforeend",img);
 img.style.visibility="hidden";
 img.src=file;
 var w=img.offsetWidth;
var h=img.offsetHeight;
		alert(w);
		if(w=158&&h==60){
			alert("ok");
		}
		*/
	var objUrl = getObjectURL(this.files[0]) ;  
    
	if (objUrl) {  
    
			$("#img0").attr("src", objUrl) ;  
	}  

}) ;  
//建立一個可存取到該file的url  
function getObjectURL(file) {  
  var url = null ;   
  
  if (window.createObjectURL!=undefined) { // basic  
    url = window.createObjectURL(file) ;  
  } else if (window.URL!=undefined) { // mozilla(firefox)  
    url = window.URL.createObjectURL(file) ;  
  } else if (window.webkitURL!=undefined) { // webkit or chrome  
    url = window.webkitURL.createObjectURL(file) ;  
  }  
  return url ;  
}  



$(function(){

$("#img0").on("load",function(){
		$("#img0").style
        var w = $(this).width();
        var h=$(this).height();
		if(w=158&&h==60){
			//alert("ok");
			layer.msg('上传成功', { icon: 1 });
		}else{
			var file = $("#upload_image");   
			file.after(file.clone().val(""));     
			file.remove(); 
			file = $("#upload_image");
			$("#img0").hide();
			layer.msg('格式不符合', { icon: 2 });
		
		}
    });

});
</script>
</body></html><?php }} ?>