<?php /* Smarty version Smarty-3.1.6, created on 2017-06-15 18:32:55
         compiled from "./Template/default/Home\Index\search.html" */ ?>
<?php /*%%SmartyHeaderCode:225995942612b1d65b7-00993526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da1ffbb5a829e57b49191b4564657fbca86ebc7' => 
    array (
      0 => './Template/default/Home\\Index\\search.html',
      1 => 1497522773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225995942612b1d65b7-00993526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5942612c04436',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5942612c04436')) {function content_5942612c04436($_smarty_tpl) {?><!DOCTYPE html>
<html class="h-category-v2 "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
 <link type="image/x-icon" href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="icon"/>
<link href="images/favicon.ico" rel="shortcut icon"/>

<style>

</style>
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
<title>唏里唏里动画_卡通动漫</title>
<script async="" src="./donghua/唏里唏里动画_卡通动漫_files/element.min.js"></script>
<script async="" src="./donghua/唏里唏里动画_卡通动漫_files/monkey.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo @__HOME_CSS__;?>
common_ui_5dd938cf.css">
<link rel="stylesheet" type="text/css" href="<?php echo @__HOME_CSS__;?>
category_d1f1d577.css">
<link rel="stylesheet" type="text/css" href="<?php echo @__HOME_CSS__;?>
common_ui_video_d3b07667.css">
<script src="<?php echo @__HOME_JS__;?>
video.js"></script>
</head>
<body class="global-logged">


<script src="<?php echo @__HOME_JS__;?>
main_0d32686a.js"></script>


<div>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a id="logo" class="navbar-brand" href="index.php"><h1><img src="images/logo.png1.png" alt="xilixili" /></h1></a>
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
								<input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="输入有效的邮箱地址"/>
								<input type="text" class="email" placeholder="用户名" required="required" pattern="" title="输入用户名"/>
								<input type="password" placeholder="Password" required="required" pattern=".{6,}" title="输入至少6位的密码 autocomplete="off" />
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
									<input type="text" class="email" placeholder="Enter email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?"/>
									<input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
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
								<form>
								<input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="输入有效的邮箱地址"/>
								</div>
								<div class="continue-button">
								<input type="submit"  value="确定" id="checkbt" /><span id="checkEmail" style="color:green">请前往邮箱查看激活链接</span>
							</div>
						
					
								
							</form>
						</div>
					<div class="clearfix"> 
						</div>
					</div>	
		</div>
					</div>

				<!-- //登录 -->
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
		

<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
headroom.min.js"></script>


	</div>  


<div id="main">
<div id="bd-content" class="bd-content bd-subchannel-cartoon">
<div id="bd-filter" class="bd-filter">
<div class="bd-filter-content">
<div class="bd-filter-section">


</div>
<div class="bd-filter-sections" id="bd-filter-condition">
    
        
        
<div class="bd-tabs-advs" static="bl=advs">

</div>
</div>
<div id="bd-videos" class="bd-videos">
<ul id="bd-video-list" class="bd-video-list" style="display: block;">

    
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=0" data-id="14262" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/14262.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=4080195901,2013295905&fm=20" alt="龙珠超">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至90话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/14262.htm?frp=browse" title="龙珠超" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/14262.htm?frp=browse" title="龙珠超" target="_blank">
                            龙珠超</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=1" data-id="10718" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/10718.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=811654722,130101203&fm=20" alt="暴走漫画">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至第3部 53话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/10718.htm?frp=browse" title="暴走漫画" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/10718.htm?frp=browse" title="暴走漫画" target="_blank">
                            暴走漫画</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=2" data-id="1410" class="bd-video-item   bd-video-meta-right">
    
    <div class="bd-video-meta" style="display: none;">
        <div class="bd-video-meta-bg"></div>
        <div static="id=poplayer" class="bd-video-meta-bd">
                <h4 class="bd-video-title">
                    <a static="stp=ti" href="http://v.baidu.com/comic/1410.htm?frp=browse" title="火影忍者" target="_blank">
                        火影忍者
                    </a>
                </h4>
                
                <ul class="bd-video-meta-list">
                    
                    <li class="bd-video-types">
                        <span class="bd-video-tip">类型:</span>
                        
                            
                            <span class="bd-video-meta-filter">热血</span>
                            
                        
                            
                            <span class="bd-video-meta-filter">科幻</span>
                            
                        
                    </li>
                    <li class="bd-video-areas">
                        <span class="bd-split">|</span>
                        <span class="bd-video-tip">地区:</span>
                        
                            
                            <span class="bd-video-meta-filter">日本</span>
                            
                        
                    </li>
                    <li class="bd-video-starts">
                        <span class="bd-split">|</span>
                        <span class="bd-video-tip">年代:</span>
                        
                            <span class="bd-video-meta-filter">2002</span>
                        
                    </li>
                </ul>
                <p class="bd-video-intro">
                    
                    这是一个忍者的世界。从小身上封印着邪恶的九尾妖狐，鸣人受尽了村人的冷落，只是拼命用各种恶作剧试图吸引大家的注意力。...
                    <a static="stp=more" class="bd-video-intro-more" href="http://v.baidu.com/comic/1410.htm?frp=browse" title="火影忍者" target="_blank">更多</a>
                    
                </p>
            </div>
        <div class="bd-video-meta-bg"></div>
    </div>


                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/1410.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=1286010796,1762813222&fm=20" alt="火影忍者">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至720话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/1410.htm?frp=browse" title="火影忍者" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/1410.htm?frp=browse" title="火影忍者" target="_blank">
                            火影忍者</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=3" data-id="15695" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/15695.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=4241987513,3789419715&fm=20" alt="画江湖之不良人">
                        
                        
                            <span class="bd-video-update">
                                
                                第2部 全40话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/15695.htm?frp=browse" title="画江湖之不良人" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/15695.htm?frp=browse" title="画江湖之不良人" target="_blank">
                            画江湖之不良人</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=4" data-id="16811" class="bd-video-item  bd-video-meta-left">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/16811.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=2557811826,2007786970&fm=20" alt="兔小贝之千字文">
                        
                        
                            <span class="bd-video-update">
                                
                                全31话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/16811.htm?frp=browse" title="兔小贝之千字文" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/16811.htm?frp=browse" title="兔小贝之千字文" target="_blank">
                            兔小贝之千字文</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=5" data-id="14206" class="bd-video-item  bd-video-meta-left">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/14206.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=3986239096,2714751997&fm=20" alt="狐妖小红娘">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至第1部 60话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/14206.htm?frp=browse" title="狐妖小红娘" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/14206.htm?frp=browse" title="狐妖小红娘" target="_blank">
                            狐妖小红娘</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=6" data-id="17798" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/17798.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=1618794280,2578314300&fm=20" alt="博人传之火影忍者新时代">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至6话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/17798.htm?frp=browse" title="博人传之火影忍者新时代" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/17798.htm?frp=browse" title="博人传之火影忍者新时代" target="_blank">
                            博人传之火影忍者新时代</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=7" data-id="4601" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/4601.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=593616858,2597100286&fm=20" alt="海贼王">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至788话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/4601.htm?frp=browse" title="海贼王" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/4601.htm?frp=browse" title="海贼王" target="_blank">
                            海贼王</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=8" data-id="13917" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/13917.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=2216158858,2922819176&fm=20" alt="尸兄之我叫白小飞">
                        
                        
                            <span class="bd-video-update">
                                
                                第2部 全39话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/13917.htm?frp=browse" title="尸兄之我叫白小飞" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/13917.htm?frp=browse" title="尸兄之我叫白小飞" target="_blank">
                            尸兄之我叫白小飞</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=9" data-id="16473" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/16473.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=1344325322,3246165502&fm=20" alt="假面骑士EX-AID">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至30话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/16473.htm?frp=browse" title="假面骑士EX-AID" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/16473.htm?frp=browse" title="假面骑士EX-AID" target="_blank">
                            假面骑士EX-AID</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=10" data-id="12687" class="bd-video-item  bd-video-meta-left">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/12687.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=1493723840,2405594587&fm=20" alt="刀剑神域">
                        
                        
                            <span class="bd-video-update">
                                
                                第2部 
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/12687.htm?frp=browse" title="刀剑神域" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/12687.htm?frp=browse" title="刀剑神域" target="_blank">
                            刀剑神域</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=11" data-id="15996" class="bd-video-item  bd-video-meta-left">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/15996.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=783138555,3487996589&fm=20" alt="精灵梦叶罗丽">
                        
                        
                            <span class="bd-video-update">
                                
                                第4部 全26话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/15996.htm?frp=browse" title="精灵梦叶罗丽" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/15996.htm?frp=browse" title="精灵梦叶罗丽" target="_blank">
                            精灵梦叶罗丽</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=12" data-id="847" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/847.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=3334375866,3406600830&fm=20" alt="名侦探柯南">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至837话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/847.htm?frp=browse" title="名侦探柯南" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/847.htm?frp=browse" title="名侦探柯南" target="_blank">
                            名侦探柯南</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=13" data-id="7513" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/7513.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=1402296845,1515441770&fm=20" alt="海绵宝宝">
                        
                        
                            <span class="bd-video-update">
                                
                                第2部 全227话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/7513.htm?frp=browse" title="海绵宝宝" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/7513.htm?frp=browse" title="海绵宝宝" target="_blank">
                            海绵宝宝</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=14" data-id="4267" class="bd-video-item   bd-video-meta-right">
    
    <div class="bd-video-meta" style="display: none;">
        <div class="bd-video-meta-bg"></div>
        <div static="id=poplayer" class="bd-video-meta-bd">
                <h4 class="bd-video-title">
                    <a static="stp=ti" href="http://v.baidu.com/comic/4267.htm?frp=browse" title="葫芦兄弟 TV版" target="_blank">
                        葫芦兄弟 TV版
                    </a>
                </h4>
                
                <ul class="bd-video-meta-list">
                    
                    <li class="bd-video-types">
                        <span class="bd-video-tip">类型:</span>
                        
                            
                            <span class="bd-video-meta-filter">动作</span>
                            
                        
                            
                            <span class="bd-video-meta-filter">其他</span>
                            
                        
                    </li>
                    <li class="bd-video-areas">
                        <span class="bd-split">|</span>
                        <span class="bd-video-tip">地区:</span>
                        
                            
                            <span class="bd-video-meta-filter">国产</span>
                            
                        
                    </li>
                    <li class="bd-video-starts">
                        <span class="bd-split">|</span>
                        <span class="bd-video-tip">年代:</span>
                        
                            <span class="bd-video-meta-filter">1986</span>
                        
                    </li>
                </ul>
                <p class="bd-video-intro">
                    
                    传说葫芦山里关着蝎子精和蛇精。一只穿山甲不小心打穿了山洞，两个妖精逃了出来。老汉在穿山甲的指引下，得到了宝葫芦籽，...
                    <a static="stp=more" class="bd-video-intro-more" href="http://v.baidu.com/comic/4267.htm?frp=browse" title="葫芦兄弟 TV版" target="_blank">更多</a>
                    
                </p>
            </div>
        <div class="bd-video-meta-bg"></div>
    </div>


                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/4267.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=2835012470,3957468117&fm=20" alt="葫芦兄弟 TV版">
                        
                        
                            <span class="bd-video-update">
                                
                                全13话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/4267.htm?frp=browse" title="葫芦兄弟 TV版" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/4267.htm?frp=browse" title="葫芦兄弟 TV版" target="_blank">
                            葫芦兄弟 TV版</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=15" data-id="10599" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/10599.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=466111325,46442140&fm=20" alt="中国惊奇先生">
                        
                        
                            <span class="bd-video-update">
                                
                                全63话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/10599.htm?frp=browse" title="中国惊奇先生" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/10599.htm?frp=browse" title="中国惊奇先生" target="_blank">
                            中国惊奇先生</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
        
           
            
        
            
          
        
    
</ul>
<div class="bd-video-loading" id="bd-video-loading" style="display: none;">
<div class="bd-video-loading-icon">加载中</div>
</div>
</div>
<div id="bd-pagination" class="bd-pagination">
<div id="bd-pagination-list" static="bl=pagebar" class="bd-pagination-list filter-group">

    
    
    
        <a data-key="pn" data-val="1" class="bd-pagination-page  filter-sel-active  filter-sel" title="第1页" href="http://v.baidu.com/comic/list/order-hot+pn-1+channel-comic#">1</a>
    
        <a data-key="pn" data-val="2" class="bd-pagination-page  filter-sel" title="第2页" href="http://v.baidu.com/comic/list/order-hot+pn-1+channel-comic#">2</a>
    
        <a data-key="pn" data-val="3" class="bd-pagination-page  filter-sel" title="第3页" href="http://v.baidu.com/comic/list/order-hot+pn-1+channel-comic#">3</a>
    
        <a data-key="pn" data-val="4" class="bd-pagination-page  filter-sel" title="第4页" href="http://v.baidu.com/comic/list/order-hot+pn-1+channel-comic#">4</a>
    
        <a data-key="pn" data-val="5" class="bd-pagination-page  filter-sel" title="第5页" href="http://v.baidu.com/comic/list/order-hot+pn-1+channel-comic#">5</a>
    
    
        <a data-key="pn" data-val="2" class="bd-pagination-page bd-pagination-next filter-sel" title="下一页" href="http://v.baidu.com/comic/list/order-hot+pn-1+channel-comic#">下一页</a>
    
    
        <a data-key="pn" data-val="67" class="bd-pagination-page bd-pagination-prev filter-sel" title="尾页" href="http://v.baidu.com/comic/list/order-hot+pn-1+channel-comic#">尾页</a>
    
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer"><p align="center">@Copyright Design By <a href="#" style="font-size:20px"><strong>弹幕组</strong></a></div>



</body>

</html><?php }} ?>