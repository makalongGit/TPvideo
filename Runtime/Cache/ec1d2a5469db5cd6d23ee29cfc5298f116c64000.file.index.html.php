<?php /* Smarty version Smarty-3.1.6, created on 2017-06-06 09:49:27
         compiled from "./Template/default/Home\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:65175935759a84a156-21758724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec1d2a5469db5cd6d23ee29cfc5298f116c64000' => 
    array (
      0 => './Template/default/Home\\Index\\index.html',
      1 => 1496713675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65175935759a84a156-21758724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5935759c96b9b',
  'variables' => 
  array (
    '_SESSION' => 0,
    'film_list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935759c96b9b')) {function content_5935759c96b9b($_smarty_tpl) {?><!DOCTYPE HTML>
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
	<nav class="navbar navbar-inverse navbar-fixed-top">
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
			<div>
				<?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['username'];?>

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
							<form action="<?php echo U('Home/User/regist');?>
" method="post">
								<input type="text" name="email" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="输入有效的邮箱地址"/>
								<input type="text" name="username" placeholder="用户名" />
								<input type="password" name="password" placeholder="Password" required="required" pattern=".{6,}" title="输入至少6位的密码 autocomplete="off" />
								<!--
								<input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]<?php echo 1;?>
\d<?php echo 9;?>
" title="Enter a valid mobile number" />
								-->
								<input type="submit"  value="注 册"/>
							</form>
							<div>
							<!-- <div class="continue-button">
								<a href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">下一步</a>
							</div> -->
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
									<a href="<?php echo U('Home/User/resetPw');?>
">忘记密码 ?</a>
	
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
						<li class="nav-item"><span><a href="<?php echo U('Home/Index/index');?>
" ><i class="icon-home"></i>主页</a></span></li>
						<li class="nav-item"><a id="movies" href="<?php echo U('Home/Film/movies');?>
">电影</a></li>
						<li class="nav-item"><a id="zongyi" href="<?php echo U('Home/Variety/zongyi');?>
">综艺</a></li>
						<li class="nav-item"><a id="dianshiju" href="<?php echo U('Home/TV/dianshiju');?>
">电视剧</a></li>
						<li class="nav-item"><a id="dongman" href="<?php echo U('Home/Carton/carton');?>
">动画</a></li>
						<li class="nav-item"><a id="game" href="<?php echo U('Home/Game/youxi');?>
">游戏</a></li>
						<li class="nav-item"><a id="music" href=<?php echo U('Home/Music/yinyue');?>
>音乐</a></li>
					</ul>
				</nav>
			</div>
		</div>
		
		
		

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
</script>	
	<div class="clearfix"> </div>
	<!-- //导航 -->
	<div class="foucebox">
  <div class="bd">
	    <div class="showDiv"> <a href="">
		  <img src="<?php echo @__HOME_IMAGE__;?>
b1.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2 style="bottom: 60px;"><a href="http://www.lanrenzhijia.com/">xilixili</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
	    <div class="showDiv"><a href="http://www.lanrenzhijia.com/"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
2.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2 style="bottom: 60px;"><a href="http://www.lanrenzhijia.com/">xilixili</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
	    <div class="showDiv"><a href="http://www.lanrenzhijia.com/"><img src="<?php echo @__HOME_IMAGE__;?>
b3.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2 style="bottom: 60px;"><a href="http://www.lanrenzhijia.com/">xilixili</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
	    <div class="showDiv"><a href="http://www.lanrenzhijia.com/"><img src="<?php echo @__HOME_IMAGE__;?>
b4.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2><a href="http://www.lanrenzhijia.com/">xilixili</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
	    <div class="showDiv"><a href="http://www.lanrenzhijia.com/"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
5.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2><a href="http://www.lanrenzhijia.com/">xilixili</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
	    <div class="showDiv"><a href="http://www.lanrenzhijia.com/"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
6.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2><a href="http://www.lanrenzhijia.com/">xilixili</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
	    <div class="showDiv"><a href="http://www.lanrenzhijia.com/"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
7.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2><a href="http://www.lanrenzhijia.com/">xilixili</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
	    <div class="showDiv"><a href="http://www.lanrenzhijia.com/"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
8.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2><a href="http://www.lanrenzhijia.com/">xilixili</a></h2>
	        <p style="bottom: 10px;">xilixili</p>
	      </div>
	    </div>
  </div>
  <div class="hd">
    <ul>
      <li class="on"><a href="#"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
1.1.jpg"><span class="txt">xilixili</span><span class="txt_bg"></span><span class="mask"></span></a></li>
      <li><a href="#"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
1.2.jpg"><span class="txt">xilixili</span><span class="txt_bg"></span><span class="mask"></span></a></li>
      <li><a href="#"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
1.3.jpg"><span class="txt">xilixili</span><span class="txt_bg"></span><span class="mask"></span></a></li>
      <li><a href="#"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
1.4.jpg"><span class="txt">xilixili</span><span class="txt_bg"></span><span class="mask"></span></a></li>
      <li><a href="#"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
1.5.jpg"><span class="txt">xilixili</span><span class="txt_bg"></span><span class="mask"></span></a></li>
      <li><a href="#"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
1.6.jpg"><span class="txt">xilixili</span><span class="txt_bg"></span><span class="mask"></span></a></li>
      <li><a href="#"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
1.7.jpg"><span class="txt">xilixili</span><span class="txt_bg"></span><span class="mask"></span></a></li>
      <li><a href="#"><img src="http://demo.lanrenzhijia.com/2015/banner0212/<?php echo @__HOME_IMAGE__;?>
1.8.jpg"><span class="txt">xilixili</span><span class="txt_bg"></span><span class="mask"></span></a></li>
    </ul>
  </div>
</div><script>
jQuery(".foucebox").slide({ effect:"fold", autoPlay:true, delayTime:300, startFun:function(i){ jQuery(".foucebox .showDiv").eq(i).find("h2").css({ display:"none",bottom:0 }).animate({ opacity:"show",bottom:"60px" },300);jQuery(".foucebox .showDiv").eq(i).find("p").css({ display:"none",bottom:0 }).animate({ opacity:"show",bottom:"10px" },300); } });
</script>
	<!-- //幻灯片 -->

	<!-- 主体 main-grids的位置在style.css padding处可改-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="recommended-film">
					
					<div class="recommended-info">
						<div style='width:200px;height:50px;'>
						<a href="#" style='font-size:20px;color:black'><img src="<?php echo @__HOME_IMAGE__;?>
fenge.png"/>&nbsp;电影</a>
						<a href="<?php echo U('Home/Film/movies');?>
" style='font-size:15px;'>>>更多</a>
						</div>						
					</div>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['film_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class="col-md-3 resent-grid recommended-grid slider-top-grids">
						
						<div class="resent-grid-img recommended-grid-img">
							<a href=""><img src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['mid_img'];?>
" alt="" /></a>
							<div class="time">
								<p><?php echo $_smarty_tpl->tpl_vars['v']->value['publishedtime'];?>
</p>
							</div>
							<div class="clck">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</div>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="#" class="title title-info"><?php echo $_smarty_tpl->tpl_vars['v']->value['introduction'];?>
</a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</a></p></li>
								<li class="right-list"><p class="views views-info"><?php echo $_smarty_tpl->tpl_vars['v']->value['numofviewed'];?>
</li>
							</ul>
						</div>

					</div>	<?php } ?>
					<div class="clearfix"> </div>
				</div>

				<div class="recommended-zongyi">
					
					<div class="recommended-grids">
						<div class ="recommended-info">
						<div style ='width:200px;height:50px;'>
						<a href    ="#" style='font-size:20px;color:black'><img src="<?php echo @__HOME_IMAGE__;?>
fenge.png"/>&nbsp;综艺</a>
						<a href    ="<?php echo U('Home/Variety/zongyi');?>
" style='font-size:15px;'>>>更多</a>
						</div>		
						</div>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="<?php echo @__HOME_IMAGE__;?>
r1.jpg" alt="" /></a>
								<div class="time small-time">
									<p>2:34</p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">Varius sit sed viverra viverra nullam nullam interdum metus</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</div>
						</div>
					
						<div class="clearfix"> </div>
					</div>
					<div class="recommended-grids">
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="<?php echo @__HOME_IMAGE__;?>
r4.jpg" alt="" /></a>
								<div class="time small-time">
									<p>6:34</p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</div>
						</div>
						
						
						<div class="clearfix"> </div>	
					</div>
				</div>
				
			    <div class="recommended-dianshiju">

					<div class="recommended-grids">
						<div class="recommended-info">
							<div style='width:200px;height:50px;'>
							<a href="#" style='font-size:20px;color:black'><img src="<?php echo @__HOME_IMAGE__;?>
fenge.png"/>&nbsp;电视剧</a>
							<a href="<?php echo U('Home/TV/dianshiju');?>
" style='font-size:15px;'>>>更多</a>
						</div>
						</div>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="<?php echo @__HOME_IMAGE__;?>
g.jpg" alt="" /></a>
								<div class="time small-time">
									<p>7:30</p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</div>
						</div>
						
						<div class="clearfix"> </div>
					
					<div class="recommended-grids">
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="<?php echo @__HOME_IMAGE__;?>
we2.jpg" alt=""></a>
								<div class="time small-time">
									<p>7:30</p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</div>
						</div>
						
						<div class="clearfix"> </div>
					</div>	
			    </div>
			
				<div class="recommended-donghua">
					<div class="recommended-grids">
						<div class="recommended-info">
							<div style='width:200px;height:50px;'>
							<a href="#" style='font-size:20px;color:black'><img src="<?php echo @__HOME_IMAGE__;?>
fenge.png"/>&nbsp;动画</a>
							<a href="<?php echo U('Home/Carton/carton');?>
" style='font-size:15px;'>>>更多</a>
						</div>
						</div>						
							<div class="animated-grids">
								<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href="single.html"><img src="<?php echo @__HOME_IMAGE__;?>
c.jpg" alt="" /></a>
										<div class="time small-time slider-time">
											<p>7:34</p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author">John Maniya</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info">2,114,200 views</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								
								<div class="clearfix"> </div>
							</div>													
					</div>
              <div class="recommended-youxi">
					<div class="recommended-grids">
						<div class="recommended-info">
							<div style='width:200px;height:50px;'>
							<a href="#" style='font-size:20px;color:black'><img src="<?php echo @__HOME_IMAGE__;?>
fenge.png"/>&nbsp;游戏</a>
							<a href="<?php echo U('Home/Game/youxi');?>
" style='font-size:15px;'>>>更多</a>
						</div>
						</div>						
							<div class="animated-grids">
								<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href="single.html"><img src="<?php echo @__HOME_IMAGE__;?>
c.jpg" alt="" /></a>
										<div class="time small-time slider-time">
											<p>7:34</p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author">John Maniya</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info">2,114,200 views</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
	
								<div class="clearfix"> </div>
							</div>													
					</div>
					<div class="recommended-yinyue">
					<div class="recommended-grids">
						<div class="recommended-info">
							<div style='width:200px;height:50px;'>
							<a href="#" style='font-size:20px;color:black'><img src="<?php echo @__HOME_IMAGE__;?>
fenge.png"/>&nbsp;音乐</a>
							<a href="<?php echo U('Home/Music/yinyue');?>
" style='font-size:15px;'>>>更多</a>
						</div>
						</div>						
							<div class="animated-grids">
								<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href="single.html"><img src="<?php echo @__HOME_IMAGE__;?>
c.jpg" alt="" /></a>
										<div class="time small-time slider-time">
											<p>7:34</p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author">John Maniya</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info">2,114,200 views</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>													
					</div>

			    </div>
				<!-- footer -->
					
				<!-- //footer -->
			</div>
			
			<div class="clearfix"> 
			</div>

			<div class="drop-menu">
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
					<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
				</ul>
			</div>
		</div>
	<!-- //主体 -->

	<!-- 左侧快速到达 减去150为了去掉移动的距离 -->
		<script type="text/javascript">
			jQuery(document).ready(function($){ 
				$('#scroll_top').click(function(){ $('html,body').animate({ scrollTop:$('.recommended-film').offset().top-150 }, 800); }); 
				$('#scroll_a').click(function(){ $('html,body').animate({ scrollTop:$('.recommended-zongyi').offset().top-150 }, 800); });
				$('#scroll_bottom').click(function(){ $('html,body').animate({ scrollTop:$('.recommended-dianshiju').offset().top-150 }, 800); });
				$('#scroll_donghua').click(function(){ $('html,body').animate({ scrollTop:$('.recommended-donghua').offset().top-150 }, 800); });
				$('#scroll_youxi').click(function(){ $('html,body').animate({ scrollTop:$('.recommended-youxi').offset().top-150 }, 800); });
				$('#scroll_yinyue').click(function(){ $('html,body').animate({ scrollTop:$('.recommended-yinyue').offset().top-150 }, 800); });

				$('#scroll_bottom').click(function(){ $('html,body').animate({ scrollTop:$('.op').offset().top-150 }, 800); });
			 });
		</script>

		<div id="appgame-leftside-share">
			<div class="appgame-leftside-share rwt_share" id="rwt_share">
				<a id="scroll_top"  class="video"  title="电影">电影</a>
				<a id="scroll_a" class="music"  title="综艺">综艺</a>
				<a id="scroll_bottom" class="appgame-leftside-sqq"  title="电视剧">电视剧</a>
				<a id="scroll_donghua" class="appgame-leftside-tsina"  title="动画">动画</a>
				<a id="scroll_youxi" class="appgame-leftside-fbook"  title="游戏">游戏</a>
				<a id="scroll_yinyue" class="appgame-leftside-twi"  title="音乐">音乐</a>
			</div>
			<a class="appgame-leftside-top" onclick="gotoTPoint(&#39;top&#39;,400)"></a>
		</div></div></div>
		<div class="clearfix"> </div>
			
 	<div class="footer">
 	<p align="center">@Copyright Design By <a href="#" style="font-size:20px"><strong>弹幕组</strong></a>
 	</div>
 </body>
</html><?php }} ?>