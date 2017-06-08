<?php /* Smarty version Smarty-3.1.6, created on 2017-06-08 17:47:46
         compiled from "./Template/default/Home\Film\movies.html" */ ?>
<?php /*%%SmartyHeaderCode:72385936c70d08e046-12271718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3e4968031174015301215b450707cd482c4a2d1' => 
    array (
      0 => './Template/default/Home\\Film\\movies.html',
      1 => 1496915053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72385936c70d08e046-12271718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5936c70e055dd',
  'variables' => 
  array (
    '_SESSION' => 0,
    'cate_list' => 0,
    'v' => 0,
    'info' => 0,
    'pagelist' => 0,
    'hot_list' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936c70e055dd')) {function content_5936c70e055dd($_smarty_tpl) {?><!DOCTYPE html>
<!-- saved from url=(0040)http://www.ccgzwl.cn/dianying/index.html -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>电影 第1页</title>
<meta name="keywords" content="电影第1页">
<meta name="description" content="电影第1页">
	<script src="<?php echo @__HOME_JS__;?>
jquery-1.11.1.min.js"></script>

	<script src="<?php echo @__HOME_JS__;?>
lrtk.js"></script>
	<script src="<?php echo @__HOME_JS__;?>
layer.js"></script>

 <!-- bootstrap -->
	<link href="<?php echo @__HOME_CSS__;?>
bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
	<link href="<?php echo @__HOME_CSS__;?>
dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
	
<link href="<?php echo @__HOME_CSS__;?>
filmstyle.css" rel="stylesheet">
	<link href="<?php echo @__HOME_CSS__;?>
demo.css" rel="stylesheet">

	<link href="<?php echo @__HOME_CSS__;?>
style.css" rel='stylesheet' type='text/css' media="all" />
<!-- 导航 -->

<script src="<?php echo @__HOME_JS__;?>
superslide.2.1.js"></script>

<script src="<?php echo @__HOME_JS__;?>
common.js"></script>
<script src="<?php echo @__HOME_JS__;?>
function.js"></script>
<script src="<?php echo @__HOME_JS__;?>
jquery.lazyload.js"></script>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a id="logo" class="navbar-brand" href="<?php echo U('Home/Index/index');?>
"><h1><img src="<?php echo @__HOME_IMAGE__;?>
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
<div id="header" class="header-fixed">
	<div id="headbar">
		

<div id="content" class="wrap clearfix">
	
	<div class="content-left clearfix">
		<div class="ui-title border-gray">
            <h3 class="tt-tab">电影&nbsp;&nbsp;<span class="ml19">展开筛选</span></h3>
        </div>
		<div class=" ui-cnt filter-focusdl mbfilter border-gray">		
		
			<div class="filter-list fn-clear">
				<h5><i class="iconfont m-r-3 f-s-16"></i>按剧情：</h5>
				<ul>			
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>	  
					<li>
					  <a href='<?php echo U("Home/Film/movies?order=".($_smarty_tpl->tpl_vars['v']->value['vt_id']));?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>
</a>
					</li>          						  
					<?php } ?>    				     
				</ul>
			</div>		
			
			
			  
			<div class="filter-list fn-clear">
			  <h5><i class="iconfont m-r-3 f-s-16"></i>按年代：</h5>
				<ul>			    
			  
				<li>
					<a href="">2016</a>
				  </li>
				<li>
					<a href="">2015</a>
				  </li>
				<li>
					<a href="
					<a href="">2013</a>
				  </li>
				<li>
					<a href="">2012</a>
				  </li>
				<li>
					<a href="">2011</a>
				  </li>
				<li>
					<a href="">2010</a>
				  </li>
				<li>
					<a href="">2009</a>
				  </li>
				<li>
					<a href="">2008</a>
				  </li>
				<li>
					<a href="">2007</a>
				  </li>
				<li>
					<a href="">2006</a>
				  </li>
				<li>
					<a href="">更早</a>
				  </li>
				 </ul>
			</div>
			
			

			<div class="ui-bar fn-clear">
				<ul class="view-mode">
					<li id="view-list"><a class="current"><i class="iconfont m-r-3 f-s-14"></i>选择排序方式</a></li>
				</ul>
				<div class="view-filter">
					<a id="time" href='<?php echo U("Home/Film/movies?sequence=publishedTime");?>
' class="order current" target="_self"><span>按时间</span></a>
					<a id="hits" href='<?php echo U("Home/Film/movies?sequence=numOfViewed");?>
' class="order" target="_self"><span>按人气</span></a>
				</div>
			</div>
		</div>
		<section class="clearfix channellist-box">
			<div class="hello-box">

				<div class="module-content">
					<ul class="yun-list clearfix" id="yun-list">		
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['videoName'];?>
">
								<div class="img">
									<img class="lazy"  src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['mid_img'];?>
" alt="乐高蝙蝠侠大电影" style="display: block;">
									
									<span class="bgb">
										<i class="bgbbg"></i>
										<p class="name">HD高清</p>
									</span>
								</div>
								<div class="text">
									<p class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
</p>
									<p class="actor">发布者:<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</p>
								</div>
							</a>
							
						</li>
						<?php } ?>						
					</ul>
					<tr> 
						<td colspan="12"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
 </td>
					</tr>

				</div>
			</div>	
		</section>
		
	</div>
	<div class="content-right clearfix">
		
		<div class="ui-ranking border-gray">
        <div class="cont-box-list">
          <h2 class="cont-box-tit-tvs-list"><i class="iconfont m-r-3 f-s-16">󰃐</i>最热排行榜</h2><span class="border-r-15"></span>
        </div>
        <ul class="ranking-list">
				
            <li>
            </li>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hot_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li><span><?php echo $_smarty_tpl->tpl_vars['v']->value['numofviewed'];?>
</span>
				<em class=""><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</em>
				<a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
</a>
            </li>						
				<?php } ?>
		</ul>
		</div>
			
		
	</div>
</div>
<div class="footer"><p align="center">@Copyright Design By <a href="#" style="font-size:20px"><strong>弹幕组</strong></a></div>
</body>
<script>

				$('.ranking-list li em').eq(0).addClass('stress');
				$('.ranking-list li em').eq(1).addClass('stress');
				$('.ranking-list li em').eq(2).addClass('stress');
				$('.ranking-list2 li em').eq(0).addClass('stress');
				$('.ranking-list2 li em').eq(1).addClass('stress');
				$('.ranking-list2 li em').eq(2).addClass('stress');


</script>
</html><?php }} ?>