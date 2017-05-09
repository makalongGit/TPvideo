<?php /* Smarty version Smarty-3.1.6, created on 2017-05-05 16:17:06
         compiled from "./Template/default/Admin\Index\test.html" */ ?>
<?php /*%%SmartyHeaderCode:20952590c26f801be38-17891685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffeb6855759a621b8f0c1eee7fe747f26dbb22fe' => 
    array (
      0 => './Template/default/Admin\\Index\\test.html',
      1 => 1493972222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20952590c26f801be38-17891685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_590c26f8079a5',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c26f8079a5')) {function content_590c26f8079a5($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
pintuer.css">
<link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
admin.css">
<link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
page.css">
<link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
font-awesome.min.css">
<script src="<?php echo @__ADMIN_JS__;?>
jquery-1.10.1.js"></script>
<script src="<?php echo @__ADMIN_JS__;?>
pintuer.js"></script>
<script src="<?php echo @__ADMIN_JS__;?>
layer.js"></script>


</head>
<body>



<div class="panel admin-panel">
  <div class="body-content">
    <form method="post" class="form-x" enctype="multipart/form-data" action="<?php echo U('admin/video/videoupdate');?>
">  
   
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="img" class="input" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
         
         
		  
        </div>
      </div>     
      
      
   
      
      
      
        <div class="field">
          <button class="button bg-main fa fa-check-square add_tijiao" type="submit" style="margin-left:400px"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>




<script type="text/javascript">

//搜索
function changesearch(){	
		
}


$('#image1').click(function(){

$('#upload_image').click();

});
$("#upload_image").change(function(){  
  
  var file_name = this.files[0].name; 
  $("#url1").val(file_name);

});
$('#image2').click(function(){

$('#upload_image2').click();

});



$("#upload_image2").change(function(){  
  
  var file_name = this.files[0].name; 
  $("#url2").val(file_name);

});


//修改按钮点击
$('#button_gai').click(function(){ 


if($('input[name="id[]"]:checked').length==0){
layer.tips('请选择修改内容', '#button_gai', { 
  tips: [1, '#ff0033'] //还可配置颜色
 });
}
else{
$("html,body").animate({ scrollTop:$("#edit").offset().top },300);
}

});

//添加分类按钮点击
$('#button_add').click(function(){ 

$("html,body").animate({ scrollTop:$("#add").offset().top },300);

});


//删除按钮点击
$('#cate_del').click(function(){ 

if($('input[name="id[]"]:checked').length==0){
layer.tips('请选择删除内容', '#cate_del', {
  tips: [1, '#ff0033'] //还可配置颜色
});
}else{
 layer.confirm('确定删除吗？', {
  btn: ['确定','取消'] //按钮
}, function(){
  //点击第一个运行
	layer.msg('已删除', { icon: 1 });
  //alert("1");
}, function(){
  //点击第二个运行
 // alert("2");
 layer.msg('已取消', { icon: 1 });
  
});

}
 

});


//全选按钮点击
	var i=1;
	var h=1;
$("#checkall").click(function(){ 
	
		$("input[name='id[]']").each(function(){
			if(i==1){
			this.checked = true;
			$('#button_gai').attr('disabled','disabled');
			h=1;
			}else{
			this.checked = false;
			$("#button_gai").removeAttr("disabled");
			h=0;
			}	
			

});
		if(h==1){
			i=0;
		}else{
			i=1;
		}

		
	});


//单个checkbox点击
$('input[name="id[]"]').click(function(){
$("#button_gai").removeAttr("disabled");
         

            if($('input[name="id[]"]:checked').length>=2){


			  $('#button_gai').attr('disabled','disabled');

            }

   });


</script>






</body>
</html><?php }} ?>