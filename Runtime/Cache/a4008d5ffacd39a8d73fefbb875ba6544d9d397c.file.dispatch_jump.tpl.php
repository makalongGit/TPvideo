<?php /* Smarty version Smarty-3.1.6, created on 2017-06-01 11:43:08
         compiled from "C:\wamp\www\TPvideo\ThinkPHP\Tpl\dispatch_jump.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4178592f8d4c92fd19-99837995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4008d5ffacd39a8d73fefbb875ba6544d9d397c' => 
    array (
      0 => 'C:\\wamp\\www\\TPvideo\\ThinkPHP\\Tpl\\dispatch_jump.tpl',
      1 => 1496288586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4178592f8d4c92fd19-99837995',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_592f8d4ca2205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592f8d4ca2205')) {function content_592f8d4ca2205($_smarty_tpl) {?><<?php ?>?php
    if(C('LAYOUT_ON')) {
        echo '{ __NOLAYOUT__ }';
    }
?<?php ?>>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
.system-message{ padding: 24px 48px; }
.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
</style>
</head>
<body>
<div class="system-message">
<<?php ?>?php if(isset($message)) { ?<?php ?>>
<h1>:)</h1>
<p class="success"><<?php ?>?php echo($message); ?<?php ?>></p>
<<?php ?>?php }else{ ?<?php ?>>
<h1>:(</h1>
<p class="error"><<?php ?>?php echo($error); ?<?php ?>></p>
<<?php ?>?php }?<?php ?>>
<p class="detail"></p>
<p class="jump">
页面自动 <a id="href" href="<<?php ?>?php echo($jumpUrl); ?<?php ?>>">跳转</a> 等待时间： <b id="wait"><<?php ?>?php echo($waitSecond); ?<?php ?>></b>
</p>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
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