<?php /* Smarty version Smarty-3.1.6, created on 2017-06-26 20:08:28
         compiled from "./Template/default/Admin\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1201559020252e550a5-75704626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '408aa0e156ccdb7b90072c07bbc1e65c70a1ae73' => 
    array (
      0 => './Template/default/Admin\\Index\\index.html',
      1 => 1498478903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1201559020252e550a5-75704626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5902025302c0e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5902025302c0e')) {function content_5902025302c0e($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>唏里唏里XiliXili后台管理中心</title>  
    <link type="image/x-icon" href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="icon"/>
    <link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
pintuer.css">
    <link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
admin.css">
    <link rel="stylesheet" href="<?php echo @__ADMIN_FONTS__;?>
font-awesome.min.css">
    <script src="<?php echo @__ADMIN_JS__;?>
jquery-1.10.1.js"></script>
    <script src="<?php echo @__ADMIN_JS__;?>
pintuer.js"></script>
    <script src="<?php echo @__ADMIN_JS__;?>
layer.js"></script>

</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="<?php echo @__ADMIN_IMAGE__;?>
y.jpg" class="radius-circle rotate-hover" height="50" alt="后台管理中心" />后台管理中心</h1>
  </div>
  <div class="head-l">
  <a class="button button-little bg-blue" href="<?php echo U('Home/Index/index');?>
" ><span class="fa fa-home"></span> 前台首页</a> 
  <!--&nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a>--> 
  &nbsp;&nbsp;<a class=" button button-little bg-red outright" href="<?php echo U('Admin/Login/login');?>
"><span class="fa fa-power-off "></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="fa fa-bookmark"></span>菜单列表</strong></div>
	<h2><span class="fa fa-navicon"></span>网站管理</h2>
  <ul>
    <li><a href="<?php echo U('Admin/Video/videolist');?>
" target="right"><span class="fa fa-caret-right"></span>内容管理</a></li>
    <li><a href="<?php echo U('Admin/User/userlist');?>
" target="right"><span class="fa fa-caret-right"></span>用户管理</a></li>
    <li><a href="<?php echo U('Admin/Cate/catelist');?>
" target="right"><span class="fa fa-caret-right"></span>分类管理</a></li>  
	 <li><a href="<?php echo U('Admin/Book/booklist');?>
" target="right"><span class="fa fa-caret-right"></span>评论管理</a></li> 
  </ul>  


  <h2><span class="fa fa-gear"></span>基本设置</h2>
  <ul>
    <li><a href="info.html" target="right"><span class="fa fa-caret-right"></span>网站设置</a></li>
       
  </ul>   
  
</div>
<!--将左侧的点击出现下拉框，点击变色，点击面包片出现对应内容-->
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});


</script>

<ul class="bread">
  <li><a href="start.html" target="right" class="fa fa-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt"></a></li>
</ul>

<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="start.html" name="right" width="100%" height="100%" ></iframe>
</div>

</body>
</html><?php }} ?>