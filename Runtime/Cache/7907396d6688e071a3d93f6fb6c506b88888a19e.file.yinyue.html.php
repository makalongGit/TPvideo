<?php /* Smarty version Smarty-3.1.6, created on 2017-06-01 10:43:55
         compiled from "./Template/default/Home\Music\yinyue.html" */ ?>
<?php /*%%SmartyHeaderCode:3891592f7f6b320164-46310385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7907396d6688e071a3d93f6fb6c506b88888a19e' => 
    array (
      0 => './Template/default/Home\\Music\\yinyue.html',
      1 => 1496285023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3891592f7f6b320164-46310385',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_592f7f6d2b327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592f7f6d2b327')) {function content_592f7f6d2b327($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- seo内容开始 -->
		<title>唏里唏里XiliXili-音乐</title>

		<meta name="title" content="">
		<link type="image/x-icon" href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="icon"/>
		<link href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="shortcut icon"/>

<!-- bootstrap -->
	<link href="<?php echo @__HOME_CSS__;?>
bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
	<link href="<?php echo @__HOME_CSS__;?>
dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
	<link href="<?php echo @__HOME_CSS__;?>
style.css" rel='stylesheet' type='text/css' media="all" />
	<script src="<?php echo @__HOME_JS__;?>
jquery-1.11.1.min.js"></script>
<!-- 导航 -->
	<link href="<?php echo @__HOME_CSS__;?>
demo.css" rel="stylesheet">
<!-- //导航 -->

<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
pageload.js"></script>

		
		<!-- seo内容结束 -->
		<!-- 头尾播放器通用样式 -->
		<link rel="stylesheet" type="text/css" href="<?php echo @__HOME_CSS__;?>
reset (2).css">
		<link rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
jquery.mCustomScrollbar.css">
		<link rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
common (2).css">
		<link rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
player.css">
		<!-- 每个页面独立样式 -->
		<link type="text/css" rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
index.css">
		<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
jquery.js"></script>
		<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
jquery.mCustomScrollbar.concat.min.js"></script>
		<link type="text/css" rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
ugc.css">
		<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
personalAd.js"></script><script type="text/javascript" src="<?php echo @__HOME_JS__;?>
kwgg_466_3.js"></script></head>
	<body avalonctrl="player">
			


<!-- 网站头部通用html -->

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
			
<!-- 播放器开始 -->
	<div id="player" style="bottom: -57px;">
		<div class="playerSplice opacity95"></div>
		<div id="playerBox">
			<div class="player">
				<!--<div class="open" class="opacity95"></div> -->
				<div class="open lock"></div>
				<div class="playerLeft">
					<div class="musicControll">
						<div class="prev" id="wp_playPreBtn" title="上一首"></div>
						<div class="play" id="wp_playBtn" title="暂停/播放"></div>
						<div class="next" id="wp_playNextBtn" title="下一首"></div>
					</div>
					<img id="artist_Image" src="<?php echo @__HOME_IMAGE__;?>
50-50.jpg" onerror="imgOnError(this,&#39;50&#39;)">
				</div>
				<div class="playerMid">
					<p id="wp_text" title="好音质 用酷我">好音质 用酷我</p>
					<div id="prograssBar">
						<div id="wp_bufBar" style="width: 0px;">
							<div class="prograssBar" id="wp_processBar" style="width: 0px;"></div>
							<a href="javascript:;" class="schedule_btn" id="wp_processBtn" style="left: 0"></a>
						</div>
					</div>
				</div>
				<div class="playerRight">
					<p id="wp_playTime" class="opacity">00:00</p>
					<div id="pinzhi">
						<a class="changePz" href="javascript:down('index');">流畅</a>
					</div>
					<div id="controllBtn">
						<div class="sound" id="wp_mute">
							<div id="soundBox">
								<div class="soundBox">
									<div id="soundPro">
										<div class="soundPro" id="wp_volBar"></div>
										<a href="javascript:;" id="wp_volBtn"></a>
									</div>
								</div>
							</div>
						</div>
						<a class="loop" id="mode" href="javascript:;" title="顺序循环"></a>
						<a class="kSong" title="k歌" onclick="picLog(&#39;www2016_2_kge&#39;)" target="_blank" href="http://k.kuwo.cn/"></a>
						<div class="menu" title="列表"></div>
						<a class="down click_log" data-click="index_player_bar" title="下载" href="javascript:down('index');"></a>
						<div class="share" title="分享">
							<div class="shareBox">
								<div class="sharecontent">
									<a href="javascript:;" class="quickShare new_sina" data-cmd="tsina" title="分享到新浪微博"></a>
									<a href="javascript:;" class="quickShare new_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
									<a href="javascript:;" class="quickShare new_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
									<a href="javascript:;" class="quickShare new_douban" data-cmd="douban" title="分享到豆瓣网"></a>
									<a href="javascript:;" class="quickShare new_renren" data-cmd="renren" title="分享到人人网"></a>
								</div>
							</div>
						</div>
						<div class="ewm" title="二维码">
							
						<div class="ewmBox"><div class="ewmCon"><img width="144" src="<?php echo @__HOME_IMAGE__;?>
ewm.png"></div></div></div>
						<div id="addTips">
							<p>已添加至播放列表</p>
						</div>
					</div>
				</div>
			</div>
			<!-- 播放列表开始 -->
			<div id="playList">
				<div id="playListBox">
					<div class="splice opacity90"></div>
					<div id="playCon">
						<!-- 歌词 -->
						<div id="lrc">
							<div class="splice"></div>
							<p id="lrcName">好音质 用酷我</p>
							<div id="lrcConId"></div>
						</div>
						<!-- 列表 -->
						<div id="musicList">
							<div class="splice opacity30"></div>
							<div class="listNum">
								<p>播放列表(1)</p>
								<span title="关闭"></span>
							</div>
							<ul class="musicList scrollbar mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-light-3 mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
								<!--repeat494182121009--><li id="plMUSIC_6651148" data-pay="0">
									<div class="musicInfo">
										<div class="name"><a href="javascript:wb_playSong('MUSIC_6651148','无心','花たん','0');" title="无心">无心</a></div>
										<div class="album" title=""></div>
										<div class="artist" title="花たん">花たん</div>
									</div>
									<div class="listRight">
										<div class="musicTools">
											<a class="down click_log" data-click="index_player_listen" title="下载" href="javascript:down('index');"></a>
											<div class="share" title="分享">
												<div class="shareBox">
													<div class="sharecontent">
														<a href="javascript:;" class="quickShare new_sina" data-cmd="tsina" title="分享到新浪微博"></a>
														<a href="javascript:;" class="quickShare new_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
														<a href="javascript:;" class="quickShare new_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
														<a href="javascript:;" class="quickShare new_douban" data-cmd="douban" title="分享到豆瓣网"></a>
														<a href="javascript:;" class="quickShare new_renren" data-cmd="renren" title="分享到人人网"></a>
													</div>
												</div>
											</div>
											<a class="ksong" title="k歌" onclick="picLog(&#39;www2016_2_kge&#39;)" target="_blank" href="http://k.kuwo.cn/"></a>
											<a title="删除" class="delete" href="javascript:delPlSong('MUSIC_6651148');"></a>
										</div>
									</div>
								</li><!--repeat494182121009--><!--repeat494182121009:end-->
							</div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light-3 mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px; height: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></ul>
						</div>
						<div class="border opacity40"></div>
						<!-- 列表结束 -->
					</div>
				</div>
			</div>
			<!-- 播放列表结束 -->
		</div>
	</div>
	
<!-- 播放器结束 -->	
<!-- playerScript start -->
<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
avalon.js"></script>
<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
KW_DqPlayer_v2.js"></script>
<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
KW_WebPlayer_v2.js"></script>
<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
player.js"></script>
<!-- playerScript end -->
			
			<!-- banner轮播开始 -->

	
			<div id="banner" class="small">
		
				<a class="tabLeft" id="tabLeft" style="display: none;"><span></span></a>
				<a class="tabRight" id="tabRight" style="display: none;"><span></span></a>
				<ul style="width: 24588px; left: 0px;">
					
					
							<li onclick="postFocusClick(&#39;357&#39;)" class="click_log other">
								<img class="bannerItem" src="<?php echo @__HOME_IMAGE__;?>
1476867119115_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>酷我音乐盒2016</h1>
										<p>高音质版震撼来袭</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_1" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
										
						
							<li onclick="postFocusClick(&#39;368&#39;)" class="click_log other" 
								<img class="bannerItem"  src="<?php echo @__HOME_IMAGE__;?>
1491054479455_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>经典回归</h1>
										<p>歌手·第十一期</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_2" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
											
							<li data-href="http://www.kuwo.cn/mv/20722859">
								<img class="bannerItem" data-imgsrc="http://img1.kwcdn.kuwo.cn/star/upload/14/14/1490757786286_.jpg" data-imgsrc2="http://img2.kwcdn.kuwo.cn/star/upload/2/2/1490757800354_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1490757800354_.jpg" style="left: -8.5px;">
								<div class="splice opacity50" style="left: -8.5px;"></div>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>鹿晗——敢(Roleplay)-舞蹈版</h1>
										<p>爆发力的舞蹈和犀利眼神传递“敢”冒险的精神</p>
										<div class="mv" style="margin-left: 74.5px;">
											<div class="mvItem" data-imgsrc="http://img1.kwcdn.kuwo.cn/star/upload/14/14/1490757786286_.jpg" data-imgsrc2="http://img2.kwcdn.kuwo.cn/star/upload/2/2/1490757800354_.jpg" data-href="http://www.kuwo.cn/mv/20722859">
												<img src="<?php echo @__HOME_IMAGE__;?>
1490757776000_.jpg" onerror="imgOnError(this,&#39;mvItem&#39;)" style="left: -8.5px;">
												<div class="mvSplice opacity30" style="display: none;"></div>
												<div class="item" data-bigtitle="鹿晗——敢(Roleplay)-舞蹈版" data-smalltitle="爆发力的舞蹈和犀利眼神传递“敢”冒险的精神">
													<a title="播放全部" href="javascript:;" data-href="http://www.kuwo.cn/mv/20722859"></a>
												</div>
											</div>
											<div class="mvItem mvMid" data-imgsrc="http://img1.kwcdn.kuwo.cn/star/upload/5/5/1490757885381_.jpg" data-imgsrc2="http://img4.kwcdn.kuwo.cn/star/upload/12/12/1490757895820_.jpg" data-href="http://www.kuwo.cn/mv/23038269">
												<img src="<?php echo @__HOME_IMAGE__;?>
1490757903218_.jpg" onerror="imgOnError(this,&#39;mvItem&#39;)" style="left: -8.5px;">
												<div class="mvSplice opacity30"></div>
												<div class="item" data-bigtitle="王啸坤——是否我真的一无所有" data-smalltitle="在呐喊和挣扎中，积极应对人生曲折">
													<a title="播放全部" href="javascript:;" data-href="http://www.kuwo.cn/mv/23038269"></a>
												</div>
											</div>
											<div class="mvItem" data-imgsrc="http://img3.kwcdn.kuwo.cn/star/upload/9/9/1490757960249_.jpg" data-imgsrc2="http://img1.kwcdn.kuwo.cn/star/upload/6/6/1490757970758_.jpg" data-href="http://www.kuwo.cn/mv/23486969">
												<img src="<?php echo @__HOME_IMAGE__;?>
1490757981121_.jpg" onerror="imgOnError(this,&#39;mvItem&#39;)" style="left: -8.5px;">
												<div class="mvSplice opacity30"></div>
												<div class="item" data-bigtitle="杨乃文——逃兵" data-smalltitle="枯绝的音色娓娓道来一触即发的战斗">
													<a title="播放全部" href="javascript:;" data-href="http://www.kuwo.cn/mv/23486969"></a>
												</div>
											</div>
											
												<a onclick="postFocusClick(&#39;384&#39;)" class="all click_log" data-click="www2016focus_link_3" href="javascript:;" data-href="http://album.kuwo.cn/album/h/mbox?id=2325&amp;jxjType=2015Web">查看全部</a>
											
										</div>
										<a class="bannerDown mvDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_3" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
											
							<li onclick="postFocusClick(&#39;366&#39;)" class="click_log other" data-click="www2016focus_link_4" data-href="http://www.kuwo.cn/playlist/index?pid=1444199436">
								<img class="bannerItem" src="<?php echo @__HOME_IMAGE__;?>
1490960189450_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>港乐时代</h1>
										<p>钟情张国荣</p>
										<a class="bannerDown albumDown click_log indexAB" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
										
							<li onclick="postFocusClick(&#39;319&#39;)" class="click_log other" data-click="www2016focus_link_5" data-href="http://club.kuwo.cn">
								<img class="bannerItem" data-imgsrc="http://img1.kwcdn.kuwo.cn/star/upload/13/13/1488941285693_.jpg" data-imgsrc2="http://img3.kwcdn.kuwo.cn/star/upload/15/15/1488941302031_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1488941302031_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>酷我音乐发烧友社区上线啦</h1>
										<p>来这里听最真的音乐，遇见志同道合的人</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_5" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>					
						
							<li onclick="postFocusClick(&#39;328&#39;)" class="click_log other" data-click="www2016focus_link_6" data-href="http://www.kuwo.cn/playlist/index?pid=975019210">
								<img class="bannerItem" data-imgsrc="http://img3.kwcdn.kuwo.cn/star/upload/3/3/1491268677507_.jpg" data-imgsrc2="http://img1.kwcdn.kuwo.cn/star/upload/8/8/1491268697224_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1491268697224_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>一曲唱罢，感心动耳</h1>
										<p>用歌声为自己代言</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_6" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
					
							<li onclick="postFocusClick(&#39;365&#39;)" class="click_log other" data-click="www2016focus_link_7" data-href="http://www.kuwo.cn/playlist/index?pid=868757129">
								<img class="bannerItem" data-imgsrc="http://img4.kwcdn.kuwo.cn/star/upload/7/7/1491101716567_.jpg" data-imgsrc2="http://img2.kwcdn.kuwo.cn/star/upload/7/7/1491101740167_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1491101740167_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>3D烧脑系列</h1>
										<p>小心让你无法自拔</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_7" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
					
							<li onclick="postFocusClick(&#39;364&#39;)" class="click_log other" data-click="www2016focus_link_8" data-href="http://jx.kuwo.cn/659555?from=1001004053">
								<img class="bannerItem" data-imgsrc="http://img4.kwcdn.kuwo.cn/star/upload/14/14/1487577506062_.jpg" data-imgsrc2="http://img4.kwcdn.kuwo.cn/star/upload/4/4/1487577470628_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1487577470628_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>激情演绎热辣新歌曲！</h1>
										<p>不容错过的绝美女声！</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_8" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
												
							<li onclick="postFocusClick(&#39;341&#39;)" class="click_log other" data-click="www2016focus_link_9" data-href="http://www.kuwo.cn/pc/original/index">
								<img class="bannerItem" data-imgsrc="http://img3.kwcdn.kuwo.cn/star/upload/8/8/1480068109864_.jpg" data-imgsrc2="http://img3.kwcdn.kuwo.cn/star/upload/4/4/1480068129300_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1480068129300_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>母带音频</h1>
										<p>震撼首发</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_9" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>				
						
							<li onclick="postFocusClick(&#39;357&#39;)" class="click_log other" data-click="www2016focus_link_1" data-href="http://down.kuwo.cn/mbox/kwmusic2016_web_1_bds_20161208.exe">
								<img class="bannerItem" data-imgsrc="http://img3.kwcdn.kuwo.cn/star/upload/0/0/1476867184096_.jpg" data-imgsrc2="http://img1.kwcdn.kuwo.cn/star/upload/11/11/1476867119115_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1476867119115_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>酷我音乐盒2016</h1>
										<p>高音质版震撼来袭</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_1" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
						
						<li onclick="postFocusClick(&#39;368&#39;)" class="click_log other" data-click="www2016focus_link_2" data-href="http://album.kuwo.cn/album/h/hdSub?id=2254&amp;from=www">
								<img class="bannerItem" data-imgsrc="http://img1.kwcdn.kuwo.cn/star/upload/9/9/1491054387497_.jpg" data-imgsrc2="http://img1.kwcdn.kuwo.cn/star/upload/15/15/1491054479455_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1491054479455_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>经典回归</h1>
										<p>歌手·第十一期</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_2" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
												
							<li data-href="http://www.kuwo.cn/mv/20722859">
								<img class="bannerItem" data-imgsrc="http://img1.kwcdn.kuwo.cn/star/upload/14/14/1490757786286_.jpg" data-imgsrc2="http://img2.kwcdn.kuwo.cn/star/upload/2/2/1490757800354_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1490757800354_.jpg" style="left: -8.5px;">
								<div class="splice opacity50" style="left: -8.5px;"></div>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>鹿晗——敢(Roleplay)-舞蹈版</h1>
										<p>爆发力的舞蹈和犀利眼神传递“敢”冒险的精神</p>
										<div class="mv" style="margin-left: 74.5px;">
											<div class="mvItem" data-imgsrc="http://img1.kwcdn.kuwo.cn/star/upload/14/14/1490757786286_.jpg" data-imgsrc2="http://img2.kwcdn.kuwo.cn/star/upload/2/2/1490757800354_.jpg" data-href="http://www.kuwo.cn/mv/20722859">
												<img src="<?php echo @__HOME_IMAGE__;?>
1490757776000_.jpg" onerror="imgOnError(this,&#39;mvItem&#39;)" style="left: -8.5px;">
												<div class="mvSplice opacity30" style="display: none;"></div>
												<div class="item" data-bigtitle="鹿晗——敢(Roleplay)-舞蹈版" data-smalltitle="爆发力的舞蹈和犀利眼神传递“敢”冒险的精神">
													<a title="播放全部" href="javascript:;" data-href="http://www.kuwo.cn/mv/20722859"></a>
												</div>
											</div>
											<div class="mvItem mvMid" data-imgsrc="http://img1.kwcdn.kuwo.cn/star/upload/5/5/1490757885381_.jpg" data-imgsrc2="http://img4.kwcdn.kuwo.cn/star/upload/12/12/1490757895820_.jpg" data-href="http://www.kuwo.cn/mv/23038269">
												<img src="<?php echo @__HOME_IMAGE__;?>
1490757903218_.jpg" onerror="imgOnError(this,&#39;mvItem&#39;)" style="left: -8.5px;">
												<div class="mvSplice opacity30"></div>
												<div class="item" data-bigtitle="王啸坤——是否我真的一无所有" data-smalltitle="在呐喊和挣扎中，积极应对人生曲折">
													<a title="播放全部" href="javascript:;" data-href="http://www.kuwo.cn/mv/23038269"></a>
												</div>
											</div>
											<div class="mvItem" data-imgsrc="http://img3.kwcdn.kuwo.cn/star/upload/9/9/1490757960249_.jpg" data-imgsrc2="http://img1.kwcdn.kuwo.cn/star/upload/6/6/1490757970758_.jpg" data-href="http://www.kuwo.cn/mv/23486969">
												<img src="<?php echo @__HOME_IMAGE__;?>
1490757981121_.jpg" onerror="imgOnError(this,&#39;mvItem&#39;)" style="left: -8.5px;">
												<div class="mvSplice opacity30"></div>
												<div class="item" data-bigtitle="杨乃文——逃兵" data-smalltitle="枯绝的音色娓娓道来一触即发的战斗">
													<a title="播放全部" href="javascript:;" data-href="http://www.kuwo.cn/mv/23486969"></a>
												</div>
											</div>
											
												<a onclick="postFocusClick(&#39;384&#39;)" class="all click_log" data-click="www2016focus_link_3" href="javascript:;" data-href="http://album.kuwo.cn/album/h/mbox?id=2325&amp;jxjType=2015Web">查看全部</a>
											
										</div>
										<a class="bannerDown mvDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_3" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
									
						
							<li onclick="postFocusClick(&#39;366&#39;)" class="click_log other" data-click="www2016focus_link_4" data-href="http://www.kuwo.cn/playlist/index?pid=1444199436">
								<img class="bannerItem" data-imgsrc="http://img2.kwcdn.kuwo.cn/star/upload/8/8/1490960145912_.jpg" data-imgsrc2="http://img4.kwcdn.kuwo.cn/star/upload/10/10/1490960189450_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1490960189450_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>港乐时代</h1>
										<p>钟情张国荣</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_4" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
						
				
							<li onclick="postFocusClick(&#39;319&#39;)" class="click_log other" data-click="www2016focus_link_5" data-href="http://club.kuwo.cn">
								<img class="bannerItem" data-imgsrc="http://img1.kwcdn.kuwo.cn/star/upload/13/13/1488941285693_.jpg" data-imgsrc2="http://img3.kwcdn.kuwo.cn/star/upload/15/15/1488941302031_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1488941302031_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>酷我音乐发烧友社区上线啦</h1>
										<p>来这里听最真的音乐，遇见志同道合的人</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_5" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
						
					
							<li onclick="postFocusClick(&#39;328&#39;)" class="click_log other" data-click="www2016focus_link_6" data-href="http://www.kuwo.cn/playlist/index?pid=975019210">
								<img class="bannerItem" data-imgsrc="http://img3.kwcdn.kuwo.cn/star/upload/3/3/1491268677507_.jpg" data-imgsrc2="http://img1.kwcdn.kuwo.cn/star/upload/8/8/1491268697224_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1491268697224_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>一曲唱罢，感心动耳</h1>
										<p>用歌声为自己代言</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_6" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
										
						
							<li onclick="postFocusClick(&#39;365&#39;)" class="click_log other" data-click="www2016focus_link_7" data-href="http://www.kuwo.cn/playlist/index?pid=868757129">
								<img class="bannerItem" data-imgsrc="http://img4.kwcdn.kuwo.cn/star/upload/7/7/1491101716567_.jpg" data-imgsrc2="http://img2.kwcdn.kuwo.cn/star/upload/7/7/1491101740167_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1491101740167_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>3D烧脑系列</h1>
										<p>小心让你无法自拔</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_7" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
						
					
							<li onclick="postFocusClick(&#39;364&#39;)" class="click_log other" data-click="www2016focus_link_8" data-href="http://jx.kuwo.cn/659555?from=1001004053">
								<img class="bannerItem" data-imgsrc="http://img4.kwcdn.kuwo.cn/star/upload/14/14/1487577506062_.jpg" data-imgsrc2="http://img4.kwcdn.kuwo.cn/star/upload/4/4/1487577470628_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1487577470628_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>激情演绎热辣新歌曲！</h1>
										<p>不容错过的绝美女声！</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_8" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
										
						
							<li onclick="postFocusClick(&#39;341&#39;)" class="click_log other" data-click="www2016focus_link_9" data-href="http://www.kuwo.cn/pc/original/index">
								<img class="bannerItem" data-imgsrc="http://img3.kwcdn.kuwo.cn/star/upload/8/8/1480068109864_.jpg" data-imgsrc2="http://img3.kwcdn.kuwo.cn/star/upload/4/4/1480068129300_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1480068129300_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>母带音频</h1>
										<p>震撼首发</p>
										<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_9" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a>
									</div>
								</div>
							</li>
						
						
						
						
					
				</ul>
				<div id="point" style="display: block;">
					<div class="point" style="width: 304px;">
						<div class="pointBox" style="width: 324px;">
							
							<a class="active" href="javascript:;"></a>
							
							<a href="javascript:;" class=""></a>
							
							<a href="javascript:;" class=""></a>
							
							<a href="javascript:;" class=""></a>
							
							<a href="javascript:;" class=""></a>
							
							<a href="javascript:;" class=""></a>
							
							<a href="javascript:;" class=""></a>
							
							<a href="javascript:;" class=""></a>
							
							<a href="javascript:;" class=""></a>
							
						</div>
					</div>
				</div>
			</div>
			<!-- banner轮播结束 -->
			<!-- 内容区域开始 -->
			<div id="content">
				<div id="conBanner">
					<div class="conBanner">
						<div class="conBox">
							
							<a target="_blank" title="胡彦斌《X》" href="http://vip1.kuwo.cn/fans/fans/template/index.html?key=huyb20170331&fromSrc=19&catalog=yueku2016"><img width="579" height="320" src="<?php echo @__HOME_IMAGE__;?>
1491048397977_.jpg" data-src="http://img3.kwcdn.kuwo.cn/star/upload/9/9/1491048397977_.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;activity&#39;)"></a>
							
							<a target="_blank" title="艾德希兰" href="http://vip1.kuwo.cn/fans/fanss/template2/index.html?key=eds20170226&fromSrc=19&catalog=yueku2016"><img width="579" height="320" src="<?php echo @__HOME_IMAGE__;?>
1489566255055_.jpg" data-src="http://img3.kwcdn.kuwo.cn/star/upload/15/15/1489566255055_.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;activity&#39;)"></a>
							
						</div>
					</div>
				</div>
				<div id="song" class="list">
					<div class="title_">
						<h2>歌单</h2>
						<a href="http://yinyue.kuwo.cn/yy/category.htm" target="_blank">查看更多</a>
					</div>
					<ul>
						<li>
							<div class="cover">
								<a href="http://www.kuwo.cn/playlist/index?pid=1082685104">
									<img width="220" height="220" src="<?php echo @__HOME_IMAGE__;?>
1461561898863_.jpg" data-src="http://img4.kwcdn.kuwo.cn/star/upload/15/15/1461561898863_.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;album&#39;)">
								</a><span class="listen"><em>80414</em></span><a href="javascript:playAllPlayList(1082685104);" class="play_pl"></a>
							</div><span class="name"><a href="http://www.kuwo.cn/playlist/index?pid=1082685104">每日最新单曲</a></span>
						</li>
						<li>
							<div class="cover">
								<a href="http://www.kuwo.cn/playlist/index?pid=1082685106">
									<img width="220" height="220" src="<?php echo @__HOME_IMAGE__;?>
1455342310364_132026710b.jpg" data-src="http://img3.kwcdn.kuwo.cn/star/userpl2015/10/13/1455342310364_132026710b.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;album&#39;)">
								</a><span class="listen"><em>109913</em></span><a href="javascript:playAllPlayList(1082685106);" class="play_pl" style="display: none;"></a>
							</div><span class="name"><a href="http://www.kuwo.cn/playlist/index?pid=1082685106">酷我热门单曲</a></span>
						</li>
						<li>
							<div class="cover">
								<a href="http://www.kuwo.cn/playlist/index?pid=1082656711">
									<img width="220" height="220" src="<?php echo @__HOME_IMAGE__;?>
1455592122915_132026710b.jpg" data-src="http://img3.kwcdn.kuwo.cn/star/userpl2015/10/13/1455592122915_132026710b.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;album&#39;)">
								</a><span class="listen"><em>74656</em></span><a href="javascript:playAllPlayList(1082656711);" class="play_pl" style="display: none;"></a>
							</div><span class="name"><a href="http://www.kuwo.cn/playlist/index?pid=1082656711">每日最新网络单曲</a></span>
						</li>
						<li>
							<div class="cover">
								<a href="http://www.kuwo.cn/playlist/index?pid=1163941465">
									<img width="220" height="220" src="<?php echo @__HOME_IMAGE__;?>
1453967239975_185766193b.jpg" data-src="http://img3.kwcdn.kuwo.cn/star/userpl2015/93/19/1453967239975_185766193b.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;album&#39;)">
								</a><span class="listen"><em>102668</em></span><a href="javascript:playAllPlayList(1163941465);" class="play_pl" style="display: none;"></a>
							</div><span class="name"><a href="http://www.kuwo.cn/playlist/index?pid=1163941465">每日最新DJ舞曲</a></span>
						</li>
						<li>
							<div class="cover">
								<a href="http://www.kuwo.cn/playlist/index?pid=1185421675">
									<img width="220" height="220" src="<?php echo @__HOME_IMAGE__;?>
1444623850992_185766193b.jpg" data-src="http://img4.kwcdn.kuwo.cn/star/userpl2015/93/19/1444623850992_185766193b.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;album&#39;)">
								</a><span class="listen"><em>96167</em></span><a href="javascript:playAllPlayList(1185421675);" class="play_pl" style="display: none;"></a>
							</div><span class="name"><a href="http://www.kuwo.cn/playlist/index?pid=1185421675">每日最新伤感情歌</a></span>
						</li>
						<li>
							<div class="cover">
								<a href="http://www.kuwo.cn/playlist/index?pid=1163945334">
									<img width="220" height="220" src="<?php echo @__HOME_IMAGE__;?>
1452244369390_185766193b.jpg" data-src="http://img3.kwcdn.kuwo.cn/star/userpl2015/93/19/1452244369390_185766193b.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;album&#39;)">
								</a><span class="listen"><em>91060</em></span><a href="javascript:playAllPlayList(1163945334);" class="play_pl"></a>
							</div><span class="name"><a href="http://www.kuwo.cn/playlist/index?pid=1163945334">每日最新影视单曲</a></span>
						</li>
						<li>
							<div class="cover">
								<a href="http://www.kuwo.cn/playlist/index?pid=1163943627">
									<img width="220" height="220" src="<?php echo @__HOME_IMAGE__;?>
1437030245804_185766193b.jpg" data-src="http://img4.kwcdn.kuwo.cn/star/userpl2015/93/19/1437030245804_185766193b.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;album&#39;)">
								</a><span class="listen"><em>91594</em></span><a href="javascript:playAllPlayList(1163943627);" class="play_pl"></a>
							</div><span class="name"><a href="http://www.kuwo.cn/playlist/index?pid=1163943627">每日最新90后歌曲</a></span>
						</li>
						<li>
							<div class="cover">
								<a href="http://www.kuwo.cn/playlist/index?pid=1162441383">
									<img width="220" height="220" src="<?php echo @__HOME_IMAGE__;?>
1435275959597_141050697b.jpg" data-src="http://img1.kwcdn.kuwo.cn/star/userpl2013/aiting/luger/1435275959597_141050697b.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;album&#39;)">
								</a><span class="listen"><em>107461</em></span><a href="javascript:playAllPlayList(1162441383);" class="play_pl" style="display: none;"></a>
							</div><span class="name"><a href="http://www.kuwo.cn/playlist/index?pid=1162441383">每日最新欧美单曲</a></span>
						</li>
						<li>
							<div class="cover">
								<a href="http://www.kuwo.cn/playlist/index?pid=1421315563">
									<img width="220" height="220" src="<?php echo @__HOME_IMAGE__;?>
1432971445330_141050697b.jpg" data-src="http://img4.kwcdn.kuwo.cn/star/userpl2013/aiting/luger/1432971445330_141050697b.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;album&#39;)">
								</a><span class="listen"><em>105078</em></span><a href="javascript:playAllPlayList(1421315563);" class="play_pl" style="display: none;"></a>
							</div><span class="name"><a href="http://www.kuwo.cn/playlist/index?pid=1421315563">每日最新日韩单曲</a></span>
						</li>
						<li>
							<div class="cover">
								<a href="http://www.kuwo.cn/playlist/index?pid=1162443613">
									<img width="220" height="220" src="<?php echo @__HOME_IMAGE__;?>
1432544148941_141050697b.jpg" data-src="http://img3.kwcdn.kuwo.cn/star/userpl2013/aiting/luger/1432544148941_141050697b.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;album&#39;)">
								</a><span class="listen"><em>102692</em></span><a href="javascript:playAllPlayList(1162443613);" class="play_pl" style="display: none;"></a>
							</div><span class="name"><a href="http://www.kuwo.cn/playlist/index?pid=1162443613">每日最新韩剧原声</a></span>
						</li>
					</ul>
				</div>
				<div id="singer" class="list">
					<div class="title_">
						<h2>歌手</h2>
						<a href="http://www.kuwo.cn/artist/index">查看更多</a>
					</div>
					<ul>
						
							
								
								
									<li>
										<img src="<?php echo @__HOME_IMAGE__;?>
1490169657486_.jpg" data-src="http://img4.kwcdn.kuwo.cn/star/upload/14/14/1490169657486_.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;singer&#39;)">
										<div class="infoSplice opacity70" style="display: block;"></div>
										<div class="info" style="display: block;"><span class="name">王菲</span><span>代表作：红豆</span>
											<div class="num"><span class="share">625249</span><span class="like">630427</span>
											</div>
										</div>
										<div class="songListSplice opacity70" style="display: none;"></div>
										<div class="songList" style="display: none;">
											<h2>热门单曲</h2><a class="more" href="http://www.kuwo.cn/artist/content?name=%E7%8E%8B%E8%8F%B2">查看全部</a>
											<ul>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_14406944&#39;,&#39;name&#39;:&#39;清静经&#39;,&#39;artist&#39;:&#39;王菲&#39;,&#39;album&#39;:&#39;栾树·之礼&#39;,&#39;pay&#39;:&#39;255&#39; }"><span>1.</span><a class="play" href="http://www.kuwo.cn/yinyue/14406944" target="_blank">清静经</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_169744&#39;,&#39;name&#39;:&#39;红豆&#39;,&#39;artist&#39;:&#39;王菲&#39;,&#39;album&#39;:&#39;唱游&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>2.</span><a class="play" href="http://www.kuwo.cn/yinyue/169744" target="_blank">红豆</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_5844591&#39;,&#39;name&#39;:&#39;匆匆那年-(电影《匆匆那年》同名主题曲)&#39;,&#39;artist&#39;:&#39;王菲&#39;,&#39;album&#39;:&#39;匆匆那年&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>3.</span><a class="play" href="http://www.kuwo.cn/yinyue/5844591" target="_blank">匆匆那年-(电影《匆匆那年》同名主题曲)</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_650441&#39;,&#39;name&#39;:&#39;你快乐所以我快乐&#39;,&#39;artist&#39;:&#39;王菲&#39;,&#39;album&#39;:&#39;我的王菲时代&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>4.</span><a class="play" href="http://www.kuwo.cn/yinyue/650441" target="_blank">你快乐所以我快乐</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_169370&#39;,&#39;name&#39;:&#39;旋木&#39;,&#39;artist&#39;:&#39;王菲&#39;,&#39;album&#39;:&#39;将爱&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>5.</span><a class="play" href="http://www.kuwo.cn/yinyue/169370" target="_blank">旋木</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_92657&#39;,&#39;name&#39;:&#39;旋木&#39;,&#39;artist&#39;:&#39;王菲&#39;,&#39;album&#39;:&#39;终身伴侣-[新歌+精选]&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>6.</span><a class="play" href="http://www.kuwo.cn/yinyue/92657" target="_blank">旋木</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_892063&#39;,&#39;name&#39;:&#39;传奇&#39;,&#39;artist&#39;:&#39;王菲&#39;,&#39;album&#39;:&#39;传奇&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>7.</span><a class="play" href="http://www.kuwo.cn/yinyue/892063" target="_blank">传奇</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_109321&#39;,&#39;name&#39;:&#39;我愿意&#39;,&#39;artist&#39;:&#39;王菲&#39;,&#39;album&#39;:&#39;王菲的故事&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>8.</span><a class="play" href="http://www.kuwo.cn/yinyue/109321" target="_blank">我愿意</a></li>
												
											</ul><a class="playAllSong" href="javascript:;">播放全部</a>
										</div>
									</li>
								
							
						
							
								
								
									<li>
										<img src="<?php echo @__HOME_IMAGE__;?>
1490169716438_.jpg" data-src="http://img4.kwcdn.kuwo.cn/star/upload/6/6/1490169716438_.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;singer&#39;)">
										<div class="infoSplice opacity70" style="display: block;"></div>
										<div class="info" style="display: block;"><span class="name">赵雷</span><span>代表作：成都</span>
											<div class="num"><span class="share">1208496</span><span class="like">1249460</span>
											</div>
										</div>
										<div class="songListSplice opacity70" style="display: none;"></div>
										<div class="songList" style="display: none;">
											<h2>热门单曲</h2><a class="more" href="http://www.kuwo.cn/artist/content?name=%E8%B5%B5%E9%9B%B7">查看全部</a>
											<ul>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_16827761&#39;,&#39;name&#39;:&#39;成都&#39;,&#39;artist&#39;:&#39;赵雷&#39;,&#39;album&#39;:&#39;无法长大&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>1.</span><a class="play" href="http://www.kuwo.cn/yinyue/16827761" target="_blank">成都</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_16827764&#39;,&#39;name&#39;:&#39;八十年代的歌&#39;,&#39;artist&#39;:&#39;赵雷&#39;,&#39;album&#39;:&#39;无法长大&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>2.</span><a class="play" href="http://www.kuwo.cn/yinyue/16827764" target="_blank">八十年代的歌</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_16827759&#39;,&#39;name&#39;:&#39;鼓楼&#39;,&#39;artist&#39;:&#39;赵雷&#39;,&#39;album&#39;:&#39;无法长大&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>3.</span><a class="play" href="http://www.kuwo.cn/yinyue/16827759" target="_blank">鼓楼</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_16827757&#39;,&#39;name&#39;:&#39;玛丽&#39;,&#39;artist&#39;:&#39;赵雷&#39;,&#39;album&#39;:&#39;无法长大&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>4.</span><a class="play" href="http://www.kuwo.cn/yinyue/16827757" target="_blank">玛丽</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_16827755&#39;,&#39;name&#39;:&#39;再见北京&#39;,&#39;artist&#39;:&#39;赵雷&#39;,&#39;album&#39;:&#39;无法长大&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>5.</span><a class="play" href="http://www.kuwo.cn/yinyue/16827755" target="_blank">再见北京</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_16827763&#39;,&#39;name&#39;:&#39;无法长大&#39;,&#39;artist&#39;:&#39;赵雷&#39;,&#39;album&#39;:&#39;无法长大&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>6.</span><a class="play" href="http://www.kuwo.cn/yinyue/16827763" target="_blank">无法长大</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_16827756&#39;,&#39;name&#39;:&#39;朵儿&#39;,&#39;artist&#39;:&#39;赵雷&#39;,&#39;album&#39;:&#39;无法长大&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>7.</span><a class="play" href="http://www.kuwo.cn/yinyue/16827756" target="_blank">朵儿</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_16827760&#39;,&#39;name&#39;:&#39;孤独&#39;,&#39;artist&#39;:&#39;赵雷&#39;,&#39;album&#39;:&#39;无法长大&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>8.</span><a class="play" href="http://www.kuwo.cn/yinyue/16827760" target="_blank">孤独</a></li>
												
											</ul><a class="playAllSong" href="javascript:;">播放全部</a>
										</div>
									</li>
								
							
						
							
								
								
									<li>
										<img src="<?php echo @__HOME_IMAGE__;?>
1490671535927_.jpg" data-src="http://img1.kwcdn.kuwo.cn/star/upload/7/7/1490671535927_.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;singer&#39;)">
										<div class="infoSplice opacity70" style="display: none;"></div>
										<div class="info" style="display: none;"><span class="name">许嵩</span><span>代表作：不如吃茶去</span>
											<div class="num"><span class="share">727737</span><span class="like">760269</span>
											</div>
										</div>
										<div class="songListSplice opacity70" style="display: block;"></div>
										<div class="songList" style="display: block;">
											<h2>热门单曲</h2><a class="more" href="http://www.kuwo.cn/artist/content?name=%E8%AE%B8%E5%B5%A9">查看全部</a>
											<ul>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_349914&#39;,&#39;name&#39;:&#39;断桥残雪&#39;,&#39;artist&#39;:&#39;许嵩&#39;,&#39;album&#39;:&#39;断桥残雪&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>1.</span><a class="play" href="http://www.kuwo.cn/yinyue/349914" target="_blank">断桥残雪</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_455880&#39;,&#39;name&#39;:&#39;有何不可&#39;,&#39;artist&#39;:&#39;许嵩&#39;,&#39;album&#39;:&#39;自定义&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>2.</span><a class="play" href="http://www.kuwo.cn/yinyue/455880" target="_blank">有何不可</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_857052&#39;,&#39;name&#39;:&#39;素颜&#39;,&#39;artist&#39;:&#39;许嵩&amp;何曼婷&#39;,&#39;album&#39;:&#39;素颜&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>3.</span><a class="play" href="http://www.kuwo.cn/yinyue/857052" target="_blank">素颜</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_231534&#39;,&#39;name&#39;:&#39;玫瑰花的葬礼&#39;,&#39;artist&#39;:&#39;许嵩&#39;,&#39;album&#39;:&#39;V&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>4.</span><a class="play" href="http://www.kuwo.cn/yinyue/231534" target="_blank">玫瑰花的葬礼</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_461317&#39;,&#39;name&#39;:&#39;清明雨上&#39;,&#39;artist&#39;:&#39;许嵩&#39;,&#39;album&#39;:&#39;自定义&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>5.</span><a class="play" href="http://www.kuwo.cn/yinyue/461317" target="_blank">清明雨上</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_461314&#39;,&#39;name&#39;:&#39;多余的解释&#39;,&#39;artist&#39;:&#39;许嵩&#39;,&#39;album&#39;:&#39;自定义&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>6.</span><a class="play" href="http://www.kuwo.cn/yinyue/461314" target="_blank">多余的解释</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_681684&#39;,&#39;name&#39;:&#39;半城烟沙&#39;,&#39;artist&#39;:&#39;许嵩&#39;,&#39;album&#39;:&#39;半城烟沙&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>7.</span><a class="play" href="http://www.kuwo.cn/yinyue/681684" target="_blank">半城烟沙</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_4856712&#39;,&#39;name&#39;:&#39;惊鸿一面&#39;,&#39;artist&#39;:&#39;许嵩&amp;黄龄&#39;,&#39;album&#39;:&#39;不如吃茶去&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>8.</span><a class="play" href="http://www.kuwo.cn/yinyue/4856712" target="_blank">惊鸿一面</a></li>
												
											</ul><a class="playAllSong" href="javascript:;">播放全部</a>
										</div>
									</li>
								
							
						
							
								
								
									<li>
										<img src="<?php echo @__HOME_IMAGE__;?>
1488249877171_.png" data-src="http://img4.kwcdn.kuwo.cn/star/upload/3/3/1488249877171_.png" class="lazyLoad" onerror="imgOnError(this,&#39;singer&#39;)">
										<div class="infoSplice opacity70" style="display: block;"></div>
										<div class="info" style="display: block;"><span class="name">薛之谦</span><span>代表作：绅士</span>
											<div class="num"><span class="share">2607107</span><span class="like">2650199</span>
											</div>
										</div>
										<div class="songListSplice opacity70" style="display: none;"></div>
										<div class="songList" style="display: none;">
											<h2>热门单曲</h2><a class="more" href="http://www.kuwo.cn/artist/content?name=%E8%96%9B%E4%B9%8B%E8%B0%A6">查看全部</a>
											<ul>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_23498554&#39;,&#39;name&#39;:&#39;动物世界&#39;,&#39;artist&#39;:&#39;薛之谦&#39;,&#39;album&#39;:&#39;动物世界&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>1.</span><a class="play" href="http://www.kuwo.cn/yinyue/23498554" target="_blank">动物世界</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_6468891&#39;,&#39;name&#39;:&#39;演员&#39;,&#39;artist&#39;:&#39;薛之谦&#39;,&#39;album&#39;:&#39;绅士&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>2.</span><a class="play" href="http://www.kuwo.cn/yinyue/6468891" target="_blank">演员</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_23082492&#39;,&#39;name&#39;:&#39;高尚&#39;,&#39;artist&#39;:&#39;薛之谦&#39;,&#39;album&#39;:&#39;高尚&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>3.</span><a class="play" href="http://www.kuwo.cn/yinyue/23082492" target="_blank">高尚</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_3620537&#39;,&#39;name&#39;:&#39;你还要我怎样&#39;,&#39;artist&#39;:&#39;薛之谦&#39;,&#39;album&#39;:&#39;意外&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>4.</span><a class="play" href="http://www.kuwo.cn/yinyue/3620537" target="_blank">你还要我怎样</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_4147754&#39;,&#39;name&#39;:&#39;丑八怪-(电视剧《如果我爱你》插曲)&#39;,&#39;artist&#39;:&#39;薛之谦&#39;,&#39;album&#39;:&#39;如果我爱你 原声大碟(酷我自制)&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>5.</span><a class="play" href="http://www.kuwo.cn/yinyue/4147754" target="_blank">丑八怪-(电视剧《如果我爱你》插曲)</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_6449273&#39;,&#39;name&#39;:&#39;绅士&#39;,&#39;artist&#39;:&#39;薛之谦&#39;,&#39;album&#39;:&#39;绅士&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>6.</span><a class="play" href="http://www.kuwo.cn/yinyue/6449273" target="_blank">绅士</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_7201080&#39;,&#39;name&#39;:&#39;刚刚好&#39;,&#39;artist&#39;:&#39;薛之谦&#39;,&#39;album&#39;:&#39;刚刚好&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>7.</span><a class="play" href="http://www.kuwo.cn/yinyue/7201080" target="_blank">刚刚好</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_625294&#39;,&#39;name&#39;:&#39;认真的雪&#39;,&#39;artist&#39;:&#39;薛之谦&#39;,&#39;album&#39;:&#39;未完成的歌&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>8.</span><a class="play" href="http://www.kuwo.cn/yinyue/625294" target="_blank">认真的雪</a></li>
												
											</ul><a class="playAllSong" href="javascript:;">播放全部</a>
										</div>
									</li>
								
							
						
							
								
								
									<li>
										<img src="<?php echo @__HOME_IMAGE__;?>
1490671581360_.jpg" data-src="http://img4.kwcdn.kuwo.cn/star/upload/0/0/1490671581360_.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;singer&#39;)">
										<div class="infoSplice opacity70" style="display: block;"></div>
										<div class="info" style="display: block;"><span class="name">庄心妍</span><span>代表作：Hello</span>
											<div class="num"><span class="share">1449845</span><span class="like">1455715</span>
											</div>
										</div>
										<div class="songListSplice opacity70" style="display: none;"></div>
										<div class="songList" style="display: none;">
											<h2>热门单曲</h2><a class="more" href="http://www.kuwo.cn/artist/content?name=%E5%BA%84%E5%BF%83%E5%A6%8D">查看全部</a>
											<ul>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_6657692&#39;,&#39;name&#39;:&#39;走着走着就散了&#39;,&#39;artist&#39;:&#39;庄心妍&#39;,&#39;album&#39;:&#39;走着走着就散了&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>1.</span><a class="play" href="http://www.kuwo.cn/yinyue/6657692" target="_blank">走着走着就散了</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_3971731&#39;,&#39;name&#39;:&#39;以后的以后&#39;,&#39;artist&#39;:&#39;庄心妍&#39;,&#39;album&#39;:&#39;庄心妍情歌精选集&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>2.</span><a class="play" href="http://www.kuwo.cn/yinyue/3971731" target="_blank">以后的以后</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_23375964&#39;,&#39;name&#39;:&#39;爱音乐(DJ版)&#39;,&#39;artist&#39;:&#39;庄心妍&amp;DJ7爷&#39;,&#39;album&#39;:&#39;7爷电音中文车载舞曲-2017年第一辑&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>3.</span><a class="play" href="http://www.kuwo.cn/yinyue/23375964" target="_blank">爱音乐(DJ版)</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_6651913&#39;,&#39;name&#39;:&#39;再见只是陌生人&#39;,&#39;artist&#39;:&#39;庄心妍&#39;,&#39;album&#39;:&#39;再见只是陌生人&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>4.</span><a class="play" href="http://www.kuwo.cn/yinyue/6651913" target="_blank">再见只是陌生人</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_3971725&#39;,&#39;name&#39;:&#39;爱囚&#39;,&#39;artist&#39;:&#39;庄心妍&#39;,&#39;album&#39;:&#39;庄心妍情歌精选集&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>5.</span><a class="play" href="http://www.kuwo.cn/yinyue/3971725" target="_blank">爱囚</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_5840386&#39;,&#39;name&#39;:&#39;两个人的回忆一个人过&#39;,&#39;artist&#39;:&#39;庄心妍&#39;,&#39;album&#39;:&#39;好可惜&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>6.</span><a class="play" href="http://www.kuwo.cn/yinyue/5840386" target="_blank">两个人的回忆一个人过</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_3277957&#39;,&#39;name&#39;:&#39;一万个舍不得&#39;,&#39;artist&#39;:&#39;庄心妍&amp;祁隆&#39;,&#39;album&#39;:&#39;一万个舍不得&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>7.</span><a class="play" href="http://www.kuwo.cn/yinyue/3277957" target="_blank">一万个舍不得</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_3252474&#39;,&#39;name&#39;:&#39;真的不容易&#39;,&#39;artist&#39;:&#39;庄心妍&#39;,&#39;album&#39;:&#39;真的不容易&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>8.</span><a class="play" href="http://www.kuwo.cn/yinyue/3252474" target="_blank">真的不容易</a></li>
												
											</ul><a class="playAllSong" href="javascript:;">播放全部</a>
										</div>
									</li>
								
							
						
							
								
								
									<li>
										<img src="<?php echo @__HOME_IMAGE__;?>
1484122478204_.png" data-src="http://img3.kwcdn.kuwo.cn/star/upload/12/12/1484122478204_.png" class="lazyLoad" onerror="imgOnError(this,&#39;singer&#39;)">
										<div class="infoSplice opacity70" style="display: block;"></div>
										<div class="info" style="display: block;"><span class="name">大卫鲍伊</span><span>代表作：Heroes </span>
											<div class="num"><span class="share">2095</span><span class="like">19695</span>
											</div>
										</div>
										<div class="songListSplice opacity70" style="display: none;"></div>
										<div class="songList" style="display: none;">
											<h2>热门单曲</h2><a class="more" href="http://www.kuwo.cn/artist/content?name=%E5%A4%A7%E5%8D%AB%E9%B2%8D%E4%BE%9D">查看全部</a>
											<ul>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_3213053&#39;,&#39;name&#39;:&#39;Heroes&#39;,&#39;artist&#39;:&#39;David Bowie&#39;,&#39;album&#39;:&#39;The Perks Of Being A Wallflower (Original Motion Picture Soundtrack)-[壁花少年]&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>1.</span><a class="play" href="http://www.kuwo.cn/yinyue/3213053" target="_blank">Heroes</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_15782994&#39;,&#39;name&#39;:&#39;No Plan&#39;,&#39;artist&#39;:&#39;David Bowie&#39;,&#39;album&#39;:&#39;No Plan&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>2.</span><a class="play" href="http://www.kuwo.cn/yinyue/15782994" target="_blank">No Plan</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_1224019&#39;,&#39;name&#39;:&#39;Starman&#39;,&#39;artist&#39;:&#39;David Bowie&#39;,&#39;album&#39;:&#39;Ziggy Stardust&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>3.</span><a class="play" href="http://www.kuwo.cn/yinyue/1224019" target="_blank">Starman</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_6003435&#39;,&#39;name&#39;:&#39;Changes&#39;,&#39;artist&#39;:&#39;David Bowie&#39;,&#39;album&#39;:&#39;Nothing Has Changed (The Best Of David Bowie)&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>4.</span><a class="play" href="http://www.kuwo.cn/yinyue/6003435" target="_blank">Changes</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_6794073&#39;,&#39;name&#39;:&#39;Lazarus&#39;,&#39;artist&#39;:&#39;David Bowie&#39;,&#39;album&#39;:&#39;&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>5.</span><a class="play" href="http://www.kuwo.cn/yinyue/6794073" target="_blank">Lazarus</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_86882&#39;,&#39;name&#39;:&#39;New Killer Star&#39;,&#39;artist&#39;:&#39;David Bowie&#39;,&#39;album&#39;:&#39;全英音乐奖Brit Awards 2004&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>6.</span><a class="play" href="http://www.kuwo.cn/yinyue/86882" target="_blank">New Killer Star</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_6795003&#39;,&#39;name&#39;:&#39;Lazarus&#39;,&#39;artist&#39;:&#39;David Bowie&#39;,&#39;album&#39;:&#39;Blackstar&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>7.</span><a class="play" href="http://www.kuwo.cn/yinyue/6795003" target="_blank">Lazarus</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_3955854&#39;,&#39;name&#39;:&#39;Space Oddity&#39;,&#39;artist&#39;:&#39;David Bowie&amp;Kristen Wiig&#39;,&#39;album&#39;:&#39;The Secret Life Of Walter Mitty-[《白日梦想家》 电影原声带]&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>8.</span><a class="play" href="http://www.kuwo.cn/yinyue/3955854" target="_blank">Space Oddity</a></li>
												
											</ul><a class="playAllSong" href="javascript:;">播放全部</a>
										</div>
									</li>
								
							
						
							
								
								
									<li>
										<img src="<?php echo @__HOME_IMAGE__;?>
1489750423024_.png" data-src="http://img1.kwcdn.kuwo.cn/star/upload/0/0/1489750423024_.png" class="lazyLoad" onerror="imgOnError(this,&#39;singer&#39;)">
										<div class="infoSplice opacity70" style="display: block;"></div>
										<div class="info" style="display: block;"><span class="name">Lana Del Rey</span><span>代表作：Young and Beautiful</span>
											<div class="num"><span class="share">25488</span><span class="like">39876</span>
											</div>
										</div>
										<div class="songListSplice opacity70" style="display: none;"></div>
										<div class="songList" style="display: none;">
											<h2>热门单曲</h2><a class="more" href="http://www.kuwo.cn/artist/content?name=Lana%20Del%20Rey">查看全部</a>
											<ul>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_4686815&#39;,&#39;name&#39;:&#39;Old Money&#39;,&#39;artist&#39;:&#39;Lana Del Rey&#39;,&#39;album&#39;:&#39;Ultraviolence&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>1.</span><a class="play" href="http://www.kuwo.cn/yinyue/4686815" target="_blank">Old Money</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_1129352&#39;,&#39;name&#39;:&#39;Off To The Races&#39;,&#39;artist&#39;:&#39;Lana Del Rey&#39;,&#39;album&#39;:&#39;Born To Die&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>2.</span><a class="play" href="http://www.kuwo.cn/yinyue/1129352" target="_blank">Off To The Races</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_3336199&#39;,&#39;name&#39;:&#39;Young And Beautiful&#39;,&#39;artist&#39;:&#39;Lana Del Rey&#39;,&#39;album&#39;:&#39;Young And Beautiful&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>3.</span><a class="play" href="http://www.kuwo.cn/yinyue/3336199" target="_blank">Young And Beautiful</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_6616066&#39;,&#39;name&#39;:&#39;Salvatore&#39;,&#39;artist&#39;:&#39;Lana Del Rey&#39;,&#39;album&#39;:&#39;Honeymoon&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>4.</span><a class="play" href="http://www.kuwo.cn/yinyue/6616066" target="_blank">Salvatore</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_4691547&#39;,&#39;name&#39;:&#39;West Coast (Radio Mix)&#39;,&#39;artist&#39;:&#39;Lana Del Rey&#39;,&#39;album&#39;:&#39;Ultraviolence&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>5.</span><a class="play" href="http://www.kuwo.cn/yinyue/4691547" target="_blank">West Coast (Radio Mix)</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_3479537&#39;,&#39;name&#39;:&#39;Summertime Sadness&#39;,&#39;artist&#39;:&#39;Lana Del Rey&#39;,&#39;album&#39;:&#39;Born To Die-The Paradise Edition&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>6.</span><a class="play" href="http://www.kuwo.cn/yinyue/3479537" target="_blank">Summertime Sadness</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_20675445&#39;,&#39;name&#39;:&#39;Love&#39;,&#39;artist&#39;:&#39;Lana Del Rey&#39;,&#39;album&#39;:&#39;Love&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>7.</span><a class="play" href="http://www.kuwo.cn/yinyue/20675445" target="_blank">Love</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_1129396&#39;,&#39;name&#39;:&#39;Summertime Sadness&#39;,&#39;artist&#39;:&#39;Lana Del Rey&#39;,&#39;album&#39;:&#39;Born To Die&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>8.</span><a class="play" href="http://www.kuwo.cn/yinyue/1129396" target="_blank">Summertime Sadness</a></li>
												
											</ul><a class="playAllSong" href="javascript:;">播放全部</a>
										</div>
									</li>
								
							
						
							
								
								
									<li>
										<img src="<?php echo @__HOME_IMAGE__;?>
1489750844059_.png" data-src="http://img4.kwcdn.kuwo.cn/star/upload/11/11/1489750844059_.png" class="lazyLoad" onerror="imgOnError(this,&#39;singer&#39;)">
										<div class="infoSplice opacity70" style="display: block;"></div>
										<div class="info" style="display: block;"><span class="name">周杰伦</span><span>代表作：东风破</span>
											<div class="num"><span class="share">1785218</span><span class="like">1791294</span>
											</div>
										</div>
										<div class="songListSplice opacity70" style="display: none;"></div>
										<div class="songList" style="display: none;">
											<h2>热门单曲</h2><a class="more" href="http://www.kuwo.cn/artist/content?name=%E5%91%A8%E6%9D%B0%E4%BC%A6">查看全部</a>
											<ul>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_7149583&#39;,&#39;name&#39;:&#39;告白气球&#39;,&#39;artist&#39;:&#39;周杰伦&#39;,&#39;album&#39;:&#39;周杰伦的床边故事&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>1.</span><a class="play" href="http://www.kuwo.cn/yinyue/7149583" target="_blank">告白气球</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_3233705&#39;,&#39;name&#39;:&#39;彩虹&#39;,&#39;artist&#39;:&#39;周杰伦&#39;,&#39;album&#39;:&#39;爱你，那些年 国语情歌精选&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>2.</span><a class="play" href="http://www.kuwo.cn/yinyue/3233705" target="_blank">彩虹</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_4078923&#39;,&#39;name&#39;:&#39;珊瑚海&#39;,&#39;artist&#39;:&#39;周杰伦&amp;梁心颐&#39;,&#39;album&#39;:&#39;绝赞K情歌&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>3.</span><a class="play" href="http://www.kuwo.cn/yinyue/4078923" target="_blank">珊瑚海</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_324244&#39;,&#39;name&#39;:&#39;青花瓷&#39;,&#39;artist&#39;:&#39;周杰伦&#39;,&#39;album&#39;:&#39;我很忙&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>4.</span><a class="play" href="http://www.kuwo.cn/yinyue/324244" target="_blank">青花瓷</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_228908&#39;,&#39;name&#39;:&#39;晴天&#39;,&#39;artist&#39;:&#39;周杰伦&#39;,&#39;album&#39;:&#39;叶惠美&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>5.</span><a class="play" href="http://www.kuwo.cn/yinyue/228908" target="_blank">晴天</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_440613&#39;,&#39;name&#39;:&#39;稻香&#39;,&#39;artist&#39;:&#39;周杰伦&#39;,&#39;album&#39;:&#39;魔杰座&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>6.</span><a class="play" href="http://www.kuwo.cn/yinyue/440613" target="_blank">稻香</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_243826&#39;,&#39;name&#39;:&#39;龙卷风&#39;,&#39;artist&#39;:&#39;周杰伦&#39;,&#39;album&#39;:&#39;Jay&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>7.</span><a class="play" href="http://www.kuwo.cn/yinyue/243826" target="_blank">龙卷风</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_94237&#39;,&#39;name&#39;:&#39;七里香&#39;,&#39;artist&#39;:&#39;周杰伦&#39;,&#39;album&#39;:&#39;七里香&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>8.</span><a class="play" href="http://www.kuwo.cn/yinyue/94237" target="_blank">七里香</a></li>
												
											</ul><a class="playAllSong" href="javascript:;">播放全部</a>
										</div>
									</li>
								
							
						
							
								
								
									<li>
										<img src="<?php echo @__HOME_IMAGE__;?>
1489998197503_.jpg" data-src="http://img3.kwcdn.kuwo.cn/star/upload/15/15/1489998197503_.jpg" class="lazyLoad" onerror="imgOnError(this,&#39;singer&#39;)">
										<div class="infoSplice opacity70" style="display: block;"></div>
										<div class="info" style="display: block;"><span class="name">王俊凯</span><span>代表作：树读</span>
											<div class="num"><span class="share">130331</span><span class="like">170063</span>
											</div>
										</div>
										<div class="songListSplice opacity70" style="display: none;"></div>
										<div class="songList" style="display: none;">
											<h2>热门单曲</h2><a class="more" href="http://www.kuwo.cn/artist/content?name=%E7%8E%8B%E4%BF%8A%E5%87%AF">查看全部</a>
											<ul>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_23489524&#39;,&#39;name&#39;:&#39;骄傲的少年-(真人秀《高能少年团》主题曲)&#39;,&#39;artist&#39;:&#39;王俊凯&amp;张一山&amp;刘昊然&amp;王大陆&amp;董子健&#39;,&#39;album&#39;:&#39;骄傲的少年&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>1.</span><a class="play" href="http://www.kuwo.cn/yinyue/23489524" target="_blank">骄傲的少年-(真人秀《高能少年团》主题曲)</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_7202171&#39;,&#39;name&#39;:&#39;摩天轮的思念-(网络剧《超少年密码》插曲)&#39;,&#39;artist&#39;:&#39;王俊凯&#39;,&#39;album&#39;:&#39;摩天轮的思念&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>2.</span><a class="play" href="http://www.kuwo.cn/yinyue/7202171" target="_blank">摩天轮的思念-(网络剧《超少年密码》插曲)</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_8327586&#39;,&#39;name&#39;:&#39;树读&#39;,&#39;artist&#39;:&#39;王俊凯&#39;,&#39;album&#39;:&#39;树读&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>3.</span><a class="play" href="http://www.kuwo.cn/yinyue/8327586" target="_blank">树读</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_16572748&#39;,&#39;name&#39;:&#39;小棉袄&#39;,&#39;artist&#39;:&#39;王俊凯&#39;,&#39;album&#39;:&#39;小棉袄&#39;,&#39;pay&#39;:&#39;16515324&#39; }"><span>4.</span><a class="play" href="http://www.kuwo.cn/yinyue/16572748" target="_blank">小棉袄</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_6477241&#39;,&#39;name&#39;:&#39;明天，你好&#39;,&#39;artist&#39;:&#39;王俊凯&amp;王源&#39;,&#39;album&#39;:&#39;明天， 你好&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>5.</span><a class="play" href="http://www.kuwo.cn/yinyue/6477241" target="_blank">明天，你好</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_15193067&#39;,&#39;name&#39;:&#39;告白气球&#39;,&#39;artist&#39;:&#39;王俊凯&#39;,&#39;album&#39;:&#39;【歌单】酷我网友反馈华语热门歌曲合集&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>6.</span><a class="play" href="http://www.kuwo.cn/yinyue/15193067" target="_blank">告白气球</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_5609968&#39;,&#39;name&#39;:&#39;继续-给十五岁的自己&#39;,&#39;artist&#39;:&#39;王俊凯&#39;,&#39;album&#39;:&#39;继续-给十五岁的自己&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>7.</span><a class="play" href="http://www.kuwo.cn/yinyue/5609968" target="_blank">继续-给十五岁的自己</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_6150875&#39;,&#39;name&#39;:&#39;红玫瑰 (Live)&#39;,&#39;artist&#39;:&#39;王俊凯&#39;,&#39;album&#39;:&#39;&#39;,&#39;pay&#39;:&#39;0&#39; }"><span>8.</span><a class="play" href="http://www.kuwo.cn/yinyue/6150875" target="_blank">红玫瑰 (Live)</a></li>
												
											</ul><a class="playAllSong" href="javascript:;">播放全部</a>
										</div>
									</li>
								
							
						
							
								
								
									<li>
										<img src="<?php echo @__HOME_IMAGE__;?>
1490000132225_.png" data-src="http://img4.kwcdn.kuwo.cn/star/upload/1/1/1490000132225_.png" class="lazyLoad" onerror="imgOnError(this,&#39;singer&#39;)">
										<div class="infoSplice opacity70" style="display: block;"></div>
										<div class="info" style="display: block;"><span class="name">泰勒斯威夫特</span><span>代表作：Picture To Burn</span>
											<div class="num"><span class="share">53540</span><span class="like">83931</span>
											</div>
										</div>
										<div class="songListSplice opacity70" style="display: none;"></div>
										<div class="songList" style="display: none;">
											<h2>热门单曲</h2><a class="more" href="http://www.kuwo.cn/artist/content?name=%E6%B3%B0%E5%8B%92%E6%96%AF%E5%A8%81%E5%A4%AB%E7%89%B9">查看全部</a>
											<ul>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_5836888&#39;,&#39;name&#39;:&#39;Style&#39;,&#39;artist&#39;:&#39;Taylor Swift&#39;,&#39;album&#39;:&#39;1989(Deluxe) - [1989豪华版]&#39;,&#39;pay&#39;:&#39;255&#39; }"><span>1.</span><a class="play" href="http://www.kuwo.cn/yinyue/5836888" target="_blank">Style</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_5836892&#39;,&#39;name&#39;:&#39;Wildest Dreams&#39;,&#39;artist&#39;:&#39;Taylor Swift&#39;,&#39;album&#39;:&#39;1989(Deluxe) - [1989豪华版]&#39;,&#39;pay&#39;:&#39;255&#39; }"><span>2.</span><a class="play" href="http://www.kuwo.cn/yinyue/5836892" target="_blank">Wildest Dreams</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_5836883&#39;,&#39;name&#39;:&#39;How You Get The Girl&#39;,&#39;artist&#39;:&#39;Taylor Swift&#39;,&#39;album&#39;:&#39;1989(Deluxe) - [1989豪华版]&#39;,&#39;pay&#39;:&#39;255&#39; }"><span>3.</span><a class="play" href="http://www.kuwo.cn/yinyue/5836883" target="_blank">How You Get The Girl</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_5820473&#39;,&#39;name&#39;:&#39;Out Of The Woods&#39;,&#39;artist&#39;:&#39;Taylor Swift&#39;,&#39;album&#39;:&#39;1989(Deluxe) - [1989豪华版]&#39;,&#39;pay&#39;:&#39;255&#39; }"><span>4.</span><a class="play" href="http://www.kuwo.cn/yinyue/5820473" target="_blank">Out Of The Woods</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_5836891&#39;,&#39;name&#39;:&#39;Blank Space&#39;,&#39;artist&#39;:&#39;Taylor Swift&#39;,&#39;album&#39;:&#39;1989(Deluxe) - [1989豪华版]&#39;,&#39;pay&#39;:&#39;255&#39; }"><span>5.</span><a class="play" href="http://www.kuwo.cn/yinyue/5836891" target="_blank">Blank Space</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_5836887&#39;,&#39;name&#39;:&#39;Bad Blood&#39;,&#39;artist&#39;:&#39;Taylor Swift&#39;,&#39;album&#39;:&#39;1989(Deluxe) - [1989豪华版]&#39;,&#39;pay&#39;:&#39;255&#39; }"><span>6.</span><a class="play" href="http://www.kuwo.cn/yinyue/5836887" target="_blank">Bad Blood</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_5834386&#39;,&#39;name&#39;:&#39;Welcome To New York&#39;,&#39;artist&#39;:&#39;Taylor Swift&#39;,&#39;album&#39;:&#39;1989(Deluxe) - [1989豪华版]&#39;,&#39;pay&#39;:&#39;255&#39; }"><span>7.</span><a class="play" href="http://www.kuwo.cn/yinyue/5834386" target="_blank">Welcome To New York</a></li>
												
													
													
													<li data-music="{ &#39;id&#39;:&#39;MUSIC_5837223&#39;,&#39;name&#39;:&#39;New Romantics&#39;,&#39;artist&#39;:&#39;Taylor Swift&#39;,&#39;album&#39;:&#39;1989(Deluxe) - [1989豪华版]&#39;,&#39;pay&#39;:&#39;255&#39; }"><span>8.</span><a class="play" href="http://www.kuwo.cn/yinyue/5837223" target="_blank">New Romantics</a></li>
												
											</ul><a class="playAllSong" href="javascript:;">播放全部</a>
										</div>
									</li>
								
							
						
					</ul>
				</div>
				<div id="delay_load_web2016_home_img" class="list"><div id="web2016_home_img_div_0" style="display: none;"><iframe width="1200" height="108" scrolling="no" frameborder="0" src="<?php echo @__HOME_IMAGE__;?>
index.html"></iframe></div><div id="web2016_home_img_div_1" style="display: block;"><iframe width="1200" height="108" scrolling="no" frameborder="0" src="<?php echo @__HOME_IMAGE__;?>
index(1).html"></iframe></div><div id="web2016_home_img_div_2" style="display: none;"><iframe width="1200" height="108" scrolling="no" frameborder="0" src="<?php echo @__HOME_IMAGE__;?>
index(2).html"></iframe></div><div id="web2016_home_img_div_3" style="display: none;"><iframe width="1200" height="108" scrolling="no" frameborder="0" src="<?php echo @__HOME_IMAGE__;?>
index(3).html"></iframe></div></div>
			</div>
			<!-- 内容区域结束 -->
			<!-- 友情链接 -->
			<div class="clearfix"> 
			</div>	
		<div class="footer"><p align="center">@Copyright Design By <a href="#" style="font-size:20px"><strong>弹幕组</strong></a></div>
<div style="width:30px;height:80px"></div>
			<div class="drop-menu">
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
					<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
				</ul>
			</div>
			
			<div class="loadBlock" id="loadBlock">
				<p></p>
				<a class="loadBlockClose"></a>
				<a class="loadBtn" href="http://down.kuwo.cn/mbox/kwmusic_web_2.exe"></a>
			</div>
			<div class="loadShadow"></div>
			<!-- 通用页面底部 -->
			
<!-- 网站底部通用html -->

<script>
//    var _hmt = _hmt || [];
//    (function() {
//        var hm = document.createElement("script");
//        hm.src = "//hm.baidu.com/hm.js?47fa0c42177f08ce640a93f4489e9319";
//        var s = document.getElementsByTagName("script")[0];
//        s.parentNode.insertBefore(hm, s);
//    })();
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fcdb524f42f0ce19b169a8071123a4797' type='text/javascript'%3E%3C/script%3E"));
var url=window.location.href;

if(url.indexOf("http://www.kuwo.cn") < 0 && url.indexOf("http://kuwo.cn") < 0){
    $("#shiting_license").remove();
}
</script>

<script src="<?php echo @__HOME_JS__;?>
h.js" type="text/javascript"></script>
			
				
			
	
	<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
common.js"></script>
	<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
index.js"></script>
	<script type="text/javascript"  src="<?php echo @__HOME_JS__;?>
kwgg_466.js"></script>
	<script type="text/javascript">
		function downloadABUrl(){
			var second = new Date().getSeconds();
			var indexABUrl = "";
			if(parseInt(second) < 30){
				indexABUrl = "http://down.kuwo.cn/mbox/kwmusic_web_1.exe";
				picLog('www2016_index_down_ab1');
			}else{
				indexABUrl = "http://down.kuwo.cn/mbox/kwmusic_web_1.exe";
				picLog('www2016_index_down_ab2');
			}
			$(".indexAB").attr("data-down",indexABUrl);

		}
		downloadABUrl();
		window.setTimeout(function(){
			picLog('www2016_index');
		},300);
	</script>


</body></html><?php }} ?>