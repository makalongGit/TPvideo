<?php /* Smarty version Smarty-3.1.6, created on 2017-04-30 01:18:59
         compiled from "./Template/default/Admin\Public\success_tip.html" */ ?>
<?php /*%%SmartyHeaderCode:13482590300c2501b57-79610162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37028471e4ed70582b573767fe2df502e1bb381b' => 
    array (
      0 => './Template/default/Admin\\Public\\success_tip.html',
      1 => 1493455969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13482590300c2501b57-79610162',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_590300c26691b',
  'variables' => 
  array (
    'message' => 0,
    'jumpUrl' => 0,
    'waitSecond' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590300c26691b')) {function content_590300c26691b($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>系统信息</title>
<link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
}pintuer.css">
<style type="text/css">
*{ margin:0px; padding:0px;}
.error-container{ background:#fff; border:1px solid #0ae;  text-align:center; width:450px; margin:250px auto; font-family:Microsoft Yahei; padding-bottom:30px; border-top-left-radius:5px; border-top-right-radius:5px;  }
.error-container h1{ font-size:16px; padding:12px 0; background:#0ae; color:#fff;} 
.errorcon{ padding:35px 0; text-align:center; color:#0ae; font-size:18px;}
.errorcon i{ display:block; margin:12px auto; font-size:30px; }
.errorcon span{ color:red; }
h4{ font-size:14px; color:#666;}
a{ color:#0ae; }
</style>
</head>
<body class="no-skin">
<div class="error-container"> 
    <h1> 后台管理系统-<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>   
    <div class="errorcon">     
        <i class="icon-smile-o"></i><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
        
       
  
   </div>
    <h4 class="smaller">页面自动 <a id="href" href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
">跳转</a> 等待时间： <b id="wait"><?php echo $_smarty_tpl->tpl_vars['waitSecond']->value;?>
</b></h4> 
   
</div>

 <script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),
href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>
<?php }} ?>