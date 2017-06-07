<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 10:12:18
         compiled from "./Template/default/Admin\User\registe.html" */ ?>
<?php /*%%SmartyHeaderCode:84095912d084e0dd43-51271484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c7b8a5813f558bcf96db959ebce71bc0772d703' => 
    array (
      0 => './Template/default/Admin\\User\\registe.html',
      1 => 1494468691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84095912d084e0dd43-51271484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5912d08502b29',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5912d08502b29')) {function content_5912d08502b29($_smarty_tpl) {?><html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="<?php echo U('User/registe');?>
" method="post">
			id<input type="text" name="userID"><br>
			用户名<input type="text" name="name"><br>
			密码<input type="password" name="password"><br>
			邮箱<input type="email" name="email"><br>
			<input type="submit" value="提交">

		</form>
	</body>
</html><?php }} ?>