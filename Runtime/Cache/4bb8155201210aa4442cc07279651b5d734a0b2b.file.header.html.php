<?php /* Smarty version Smarty-3.1.6, created on 2017-05-31 08:27:57
         compiled from "C:\wamp\www\TPvideo\Template\default\Home\Index\header.html" */ ?>
<?php /*%%SmartyHeaderCode:3665592d1cfbc161f2-37400485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb8155201210aa4442cc07279651b5d734a0b2b' => 
    array (
      0 => 'C:\\wamp\\www\\TPvideo\\Template\\default\\Home\\Index\\header.html',
      1 => 1496190456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3665592d1cfbc161f2-37400485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_592d1cfbedd19',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592d1cfbedd19')) {function content_592d1cfbedd19($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a id="logo" class="navbar-brand" href="index.php"><h1><img src="<?php echo @__HOME_IMAGE__;?>
logo.png1.png" alt="xilixili" /></h1></a>
			</div>
			
			 <div id="navbar" class="navbar-collapse collapse">
			 	<!-- 搜索栏 -->
				<div class="top-search">
					<form class="navbar-form navbar-right" method="post" action="sousuo/sousuo.php">
						<input type="text" class="form-control" placeholder="Search...">
						<input type="submit" value=" ">
					</form>
				</div>

				<div class="header-top-right">
				<!-- 上传 -->
					<div class="file">
						<a href="upload.html">上传</a>
					</div>	
				

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
							<form>
								<input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{ 2,4 })?" title="输入有效的邮箱地址"/>
								<input type="text" class="email" placeholder="用户名" required="required" pattern="" title="输入用户名"/>
								<input type="password" placeholder="Password" required="required" pattern=".{ 6, }" title="输入至少6位的密码 autocomplete="off" />
								<!--
								<input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]<?php echo 1;?>
\d<?php echo 9;?>
" title="Enter a valid mobile number" />
								-->
								
							</form>
							<div>
							<div class="continue-button">
								<a href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">下一步</a>
							</div>
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
								<form>
									<input type="text" class="email" placeholder="Enter email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{ 2,4 })?"/>
									<input type="password" placeholder="Password" required="required" pattern=".{ 6, }" title="Minimum 6 characters required" autocomplete="off" />
									<input type="submit"  value="登录"/>
								</form>
								<div>
								<div class="forgot">
									<a href="#">忘记密码 ?</a>
	
								</div>
								<p style="margin-left:200px;margin-top:-20px">新账户? <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">注册</a></p>
								</div>
								
							</div>
							<div class="clearfix"> 
							</div>
						</div>
					</div>
				<!-- //登录 -->
				</div>
		</div>
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
		<script>
		$(function(){
				
				var index = window.location.href.split("/").length-1;
				var href=window.location.href.split("/")[index];
				//alert(href);
				if(href == ''||href == 'index.php'){
					$('.nav-item span a').attr('href','index.php');		
				}else{
					$('#logo h1 img').attr('src','<?php echo @__HOME_IMAGE__;?>
logo.png1.png');
					$('#movies').attr('href','../films/movies.php');

					$('#zongyi').attr('href','../zongyi/zongyi.php');
					$('#dianshiju').attr('href','../dianshiju/dianshiju.php');
					$('#dongman').attr('href','../donghua/donghua.php');
					$('#game').attr('href','../youxi/youxi.php');
					$('#music').attr('href','../yinyue/yinyue.php');

					$('.navbar-brand').attr('href','../index.php');
					$('.nav-item span a').attr('href','../index.php');
				}
				
				//alert(href);
				//$(".nav-item a[href='"+href2+'/'+href+"'] ").addClass('on');
			
		
		});
		
		//var p =$('.nav-item span a').attr('href',);
			
		</script>

<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
headroom.min.js"></script>
<script>
		
    $(function() {
    new Headroom(document.querySelector(".wrapper"), { //这里的nav-scroll改为你的导航栏的id或class
                
        classes: {
            initial: "animated",  // 当元素初始化后所设置的class
            pinned: "slideUp", // 向上滚动时设置的class
            unpinned: "slideDown" // 向下滚动时所设置的class
        }
    }).init();
    
});

$(function(){
	var index = window.location.href.split("/").length-1;
	var index2 = window.location.href.split("/").length-2;
	var href=window.location.href.split("/")[index];
	var href2=window.location.href.split("/")[index2];
	//alert(href2+'/'+href);
	var p = $('.nav-item span a').attr('href');
	//alert(p);
	$(".nav-item a[href='../"+href2+'/'+href+"'] " ).addClass('on');
	
	if(href == ''||href == 'index.php'){
		$('.nav-item .on').attr('href',href2+'/'+href);		
	}else{
		$('.nav-item .on').attr('href',href);
	}
});
</script><?php }} ?>