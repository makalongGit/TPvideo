<?php /* Smarty version Smarty-3.1.6, created on 2017-06-20 11:02:57
         compiled from "./Template/default/Home\User\userinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:341059422b3420c5f8-03860256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9021c3d4d45524943c6e77fbdfabe0083099987d' => 
    array (
      0 => './Template/default/Home\\User\\userinfo.html',
      1 => 1497927749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '341059422b3420c5f8-03860256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59422b34661cf',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59422b34661cf')) {function content_59422b34661cf($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<title>唏里唏里XiliXili</title>
<!--网站标签-->
<link type="image/x-icon" href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="icon"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--上面导航栏-->
		
	<!-- //左侧快速到达 -->

	<script src="<?php echo @__HOME_JS__;?>
jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo @__HOME_JS__;?>
bootstrap.min.js"></script>
	<script src="<?php echo @__HOME_JS__;?>
lrtk.js"></script>
	<script src="<?php echo @__HOME_JS__;?>
jquery.SuperSlide.js"></script> 
	<script src="<?php echo @__HOME_JS__;?>
layer.js"></script>
	<link href="<?php echo @__HOME_CSS__;?>
bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
	<link href="<?php echo @__HOME_CSS__;?>
dashboard.css" type='text/css' rel="stylesheet">
	<link href="<?php echo @__HOME_CSS__;?>
style.css" rel='stylesheet' type='text/css' media="all" />

	<link href="<?php echo @__HOME_CSS__;?>
demo.css" rel="stylesheet">

	<link href="<?php echo @__HOME_CSS__;?>
share.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo @__HOME_CSS__;?>
lanrenzhijia.css" type="text/css" rel="stylesheet" />
</head>
<body>
	
	<div>
		<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a id="logo" class="navbar-brand" href="U('Home/Index/index')"><h1><img src="<?php echo @__HOME_IMAGE__;?>
logo.png1.png" alt="xilixili" /></h1></a>
      </div>
      
       <div id="navbar" class="navbar-collapse collapse">
        <!-- 搜索栏 -->
        <div class="top-search">
          <form class="navbar-form navbar-right" method="post" action="<?php echo U('Home/Index/search_key');?>
">
            <input type="text" name="key_word" class="form-control" placeholder="Search...">
            <input type="submit" value=" ">
          </form>
        </div>

        <div class="header-top-right">
        <!-- 上传 -->
          <div class="file">
            <a href="upload.html">上传</a>
          </div>  
      <?php if ($_SESSION['user_name']==null){?>  
      <!-- 注册-->
                <div class="signin">
            <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">注册</a>
            <!-- pop-up-box -->
              <script type="text/javascript" src="<?php echo @__HOME_JS__;?>
modernizr.custom.min.js"></script>    
              <link href="<?php echo @__HOME_CSS__;?>
popuo-box.css" rel="stylesheet" type="text/css" media="all" />
              <script src="<?php echo @__HOME_JS__;?>
jquery.magnific-popup.js" type="text/javascript"></script>
            <!--//pop-up-box -->
            <div id="small-dialog2" class="mfp-hide">
              <h3>创建账户</h3> 
              
            <div class="signup">
              <form id="registform" action="<?php echo U('Home/User/regist');?>
" method="post">
              
                <input  id="email" type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="输入有效的邮箱地址"/>
                <input  id="name" type="text" class="username" placeholder="用户名" required="required" pattern="" title="输入用户名"/>
                <input  id="password" type="password" placeholder="Password" required="required" pattern=".{6,}" title="输入至少6位的密码 autocomplete="off" />
                <!--
                <input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]<?php echo 1;?>
\d<?php echo 9;?>
" title="Enter a valid mobile number" />
                -->
                
              </form>
              <div class="continue-button">
                <a id="next" href="#small-dialog" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">确定</a>
              </div>
              <div>
              <script>
                $('#next').click(function(){
                  
                  var reg_email=$('#email').val();
                  var reg_name=$('#name').val();
                  var reg_passwd=$('#password').val();                  
                  $.post("<?php echo U('Home/User/regist');?>
",{ email:reg_email,name:reg_name,password:reg_passwd },function(data){
                    if(data['status']==1)
                      layer.msg('已发送,请到邮箱激活', { icon: 1 });
                    else if(data['status']==3)
                      layer.msg('邮箱已注册', { icon: 2 });
                    else
                      layer.msg('系统错误,请重试', { icon: 3 });
                  })

                });
              </script>
              <p style="margin-left:210px;margin-top:-20px"><span style="positon:relative;left:20px">已有账户? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">登录</p ></a></span>
              </div>
            
            </div>
            <div class="clearfix"> 
            </div>
          </div>  
          <div id="small-dialog3" class="mfp-hide">
            <h3>创建账户</h3> 
            <div class="social-sits">
              
            </div>
            <div class="signup">
              <form>
                <input type="text" class="email" placeholder="验证码" required="required" title="输入收到的验证码"/>
                <!--
                <input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]<?php echo 1;?>
\d<?php echo 9;?>
" title="Enter a valid mobile number" />
                -->
                <input type="submit"  value="注 册"/>
                <span style="margin-left:5px"><a onclick="sendyanzheng();" class="play-icon popup-with-zoom-anim">重新发送</a> </span>
                <span style="margin-left:45px">已有账户? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">登录</a> </span>
              </form>
            </div>
          <div class="clearfix"> 
            </div>
          </div>  
            
          
          
          <script>
            function sendyanzheng(){
              // layer.msg('的确很重要', { icon: 1 });
            
            }

            $(document).ready(function() {
              $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
              });
                                                      
            });
          </script> 
          </div>
        <!-- //注册-->

        <!-- 登录 -->
          <div class="signin">
            <a href="#small-dialog" class="play-icon popup-with-zoom-anim">登录</a>
            <div id="small-dialog" class="mfp-hide">
              <h3>登录</h3>
              <div class="social-sits">
                <div class="button-bottom">
                  
                </div>
              </div>
              <div class="signup">
                <form action="<?php echo U('Home/User/login');?>
" method="post">
                  <input type="text" name="email" class="email" placeholder="Enter email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?"/>
                  <input type="password" name="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
                  <input type="submit"  value="登录"/>
                </form>
                <div>
                <div class="forgot">
                  <a href="#small-dialog4" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim" style="color:red">忘记密码?</a>
                  
  
                </div>
                <p style="margin-left:200px;margin-top:-20px">新账户? <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">注册</a></p>
                </div>
                
              </div>
              <div class="clearfix"> 
              </div>
            </div>

            <div id="small-dialog4" class="mfp-hide">
            <h3>重置密码</h3> 
            <div class="social-sits">
              
            </div>
            <div class="signup">
              <form>
                
                <div>
                
                <input type="text" id="email" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="输入有效的邮箱地址"/>
                </div>
                <div class="continue-button">
                <input type="submit"  value="确定" id="checkbt" /><span id="checkEmail" style="color:green">请前往邮箱查看激活链接</span>
                </div>
              
            
          
                
              </form>
            </div>
            <script>
                $('#checkbt').click(function(){
                  
                  var reg_email=$('#email').val();
                    //alert(reg_email);
                  $.post("<?php echo U('Home/User/resetPw');?>
",{ email:reg_email },function(data){
                    alert(data['link']);
                    if(data['status']==1)
                      alert('已发送');
                    else
                      alert('邮箱不存在');
                  
                  })

                });
              </script>
          <div class="clearfix"> 
            </div>
          </div>  
    </div>
          </div>
      <!-- //登录 -->
      <?php }else{ ?>
        

      <div style="float:right;margin-top:5px">
        <h3><span class="label label-info" style=""><?php echo $_SESSION['user_name'];?>
</span>
        <a href="<?php echo U('Home/User/logout');?>
"><button  type="button" class="btn btn-danger">退出</button></a>
        </h3>
        
      </div>
        
      </div>
<?php }?>
    <div class="clearfix"> </div>


    

  </nav>

	<!-- 导航 666-->
	
		<div class="wrapper">
			<div class="navmai">
				<nav class="nav">
					<ul class="nav-list">
						<li class="nav-item"><span><a href='index.php' ><i class="icon-home"></i>主页</a></span></li>
						<li class="nav-item"><a id="movies" href='films/movies.php'>电影</a></li>
						<li class="nav-item"><a id="zongyi" href='zongyi/zongyi.php'>综艺</a></li>
						<li class="nav-item"><a id="dianshiju" href='dianshiju/dianshiju.php'>电视剧</a></li>
						<li class="nav-item"><a id="dongman" href='donghua/donghua.php'>动画</a></li>
						<li class="nav-item"><a id="game" href='youxi/youxi.php'>游戏</a></li>
						<li class="nav-item"><a id="music" href='yinyue/yinyue.php'>音乐</a></li>
					</ul>
				</nav>
			</div>
		</div>
		

<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
headroom.min.js"></script>


	</div>

	<div class="container" style="margin-top:200px;margin-bottom:200px">
    <div class="row" >
        <div class="col-xs-12 col-sm-12" 
            style="background-color: #dedef8;
            box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
            
<div style="padding: 50px 100px 10px;">
	<form class="bs-example bs-example-form" method="post" entype="multipart/form-data" action="<?php echo U('Home/User/userinfo');?>
"   role="form">
		<div class="input-group" style="margin-bottom:10px">
                          

		<button type="button" class="btn btn-primary" onclick="select();">选择头像</button>
		<input type="file" id="upload_image" style="visibility: hidden;">

			</div>
		<div  class="input-group" style="margin-bottom:10px">
			<span class="input-group-addon">用户名</span>
			<input type="text" id="username" class="form-control" placeholder="输入至少6位密码">							
		</div>
		<div class="input-group" style="margin-bottom:10px">
			<span class="input-group-addon">邮箱</span>
			<input name="email" type="text" id="email" class="form-control" placeholder="输入正确邮箱">
			</div>
			
			<div class="input-group" style="margin-bottom:10px">
			<span class="input-group-addon" >电话</span>
			<input name="pass" type="text" class="form-control" placeholder="输入电话">
			</div>

			<div class="input-group" style="margin-bottom:10px">
			<span class="input-group-addon" >密码</span>
			<input type="password" id="passwd" name="pass" class="form-control" placeholder="输入至少6位密码">
			</div>
		

			<div class="input-group">
				<span class="input-group-addon" >性别</span>
				<select class="form-control">
				  <option>男</option>
				  <option>女</option>
				</select>
			</div>

		<button style="margin-left:450px;margin-top:10px">  <input type="submit" class="btn btn-primary" 
    data-toggle="button" value="保存"> </button>
		<br>
		
	</form>
</div>
        </div>
        <script>
				/*document.getElementById('email').value='332606742@qq.com';
				document.getElementById('passwd').value='123456';
				document.getElementById('passwd').value='123456';
				document.getElementById('username').value='jiao';

				function select(){
				document.getElementById('upload_image').click();
			}
*/		</script>
 
  
 
        
    </div>
</div>

		<div class="footer"><p align="center">@Copyright Design By <a href="#" style="font-size:20px"><strong>弹幕组</strong></a></div>
					
				

	

			
 	
 </body>
</html><?php }} ?>