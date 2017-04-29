<?php /* Smarty version Smarty-3.1.6, created on 2017-04-28 16:10:16
         compiled from "./Template/default/Admin\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:213205901dd244d5a81-72376077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad47bdadd6fede545099dc0212f1f8177d3a9080' => 
    array (
      0 => './Template/default/Admin\\Login\\login.html',
      1 => 1493366968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213205901dd244d5a81-72376077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5901dd2473af9',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5901dd2473af9')) {function content_5901dd2473af9($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>登录</title>  
    <link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
pintuer.css">
    <link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
admin.css">
    <script src="<?php echo @__ADMIN_JS__;?>
pintuer.js"></script>  
</head>
<body>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form action="<?php echo U('Admin/Login/login');?>
" method="post">
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>后台管理中心</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="name" placeholder="登录账号" data-validate="required:请填写账号" />
                            <span class="icon icon-user margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="password" placeholder="登录密码" data-validate="required:请填写密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input input-big" name="code" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
                           <img src="<?php echo @__CONTROLLER__;?>
/passcode" alt="" class="passcode" onclick="this.src='<?php echo @__CONTROLLER__;?>
/passcode/'+Math.random()">  
                                                   
                        </div>
                    </div>
                </div>
                <div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" value="登录"></div>
            </div>
            </form>          
        </div>
    </div>
</div>

</body>
</html><?php }} ?>