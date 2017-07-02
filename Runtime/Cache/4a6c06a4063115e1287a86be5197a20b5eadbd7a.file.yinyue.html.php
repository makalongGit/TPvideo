<?php /* Smarty version Smarty-3.1.6, created on 2017-06-26 23:54:02
         compiled from "./Template/default/Home\Video\yinyue.html" */ ?>
<?php /*%%SmartyHeaderCode:2715559511f41cee1c7-49866679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a6c06a4063115e1287a86be5197a20b5eadbd7a' => 
    array (
      0 => './Template/default/Home\\Video\\yinyue.html',
      1 => 1498492173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2715559511f41cee1c7-49866679',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59511f42c8cab',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59511f42c8cab')) {function content_59511f42c8cab($_smarty_tpl) {?><!DOCTYPE HTML>
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
<link rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
mplayer.css">
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
		<!-- <link rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
common (2).css"> -->
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
kwgg_466_3.js"></script>

<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
pageload.js"></script>

		</head>
	<body avalonctrl="player">
			


<!-- 网站头部通用html -->
<div class="mp" style="z-index: 999;bottom:0px">
	<div class="mp-box">
		<img src="<?php echo @__HOME_IMAGE__;?>
mplayer_error.png" alt="music cover" class="mp-cover">
		<div class="mp-info">
			<p class="mp-name">燕归巢</p>
			<p class="mp-singer">许嵩</p>
			<p><span class="mp-time-current">00:00</span>/<span class="mp-time-all">00:00</span></p>
		</div>
		<div class="mp-btn">
			<button class="mp-prev" title="上一首"></button>
			<button class="mp-pause" title="播放"></button>
			<button class="mp-next" title="下一首"></button>
			<button class="mp-mode" title="播放模式"></button>
			<div class="mp-vol">
				<button class="mp-vol-img" title="静音"></button>
				<div class="mp-vol-range" data-range_min="0" data-range_max="100" data-cur_min="80">
					<div class="mp-vol-current"></div>
					<div class="mp-vol-circle"></div>
				</div>
			</div>
		</div>
		<div class="mp-pro">
			<div class="mp-pro-current"></div>
		</div>
		<div class="mp-menu">
			<button class="mp-list-toggle"></button>
			<button class="mp-lrc-toggle"></button>
		</div>
	</div>
	<button class="mp-toggle">
		<span class="mp-toggle-img"></span>
	</button>
	<div class="mp-lrc-box">
		<ul class="mp-lrc"></ul>
	</div>
	<button class="mp-lrc-close"></button>
	<div class="mp-list-box">
		<ul class="mp-list-title"></ul>
		<table class="mp-list-table">
			<thead>
				<tr>
					<th>歌名</th>
					<th>歌手</th>
					<th>时长</th>
				</tr>
			</thead>
			<tbody class="mp-list"></tbody>
		</table>
	</div>
</div>

<script src="<?php echo @__HOME_JS__;?>
jquery-2.1.1.js"></script>
<script src="<?php echo @__HOME_JS__;?>
mplayer.js"></script>
<script src="<?php echo @__HOME_JS__;?>
mplayer-list.js"></script>
<script src="<?php echo @__HOME_JS__;?>
mplayer-functions.js"></script>
<script src="<?php echo @__HOME_JS__;?>
jquery.nstSlider.min.js"></script>
<script>
var modeText = ['顺序播放','单曲循环','随机播放','列表循环'];
var player = new MPlayer({
	// 容器选择器名称
	containerSelector: '.mp',
	// 播放列表
	songList: mplayer_song,
	/*songList: [[
	{
		"basic":true,
		"name":"江湖",
		"singer":"许嵩",
		"src":"http://ws.stream.qqmusic.qq.com/108344251.m4a?fromtag=46",
		"img":"http://imgcache.qq.com/music/photo/album_500/65/500_albumpic_1588165_0.jpg",
	},	
	{
		"name":"江湖1",
		"singer":"许嵩1",
		"src":"http://ws.stream.qqmusic.qq.com/108344251.m4a?fromtag=46",
		"img":"http://imgcache.qq.com/music/photo/album_500/65/500_albumpic_1588165_0.jpg",
	},
]],*/
	// songList: [
	
	// {
	// 	"name":"江湖",
	// 	"singer":"许嵩",
	// 	"src":"http://ws.stream.qqmusic.qq.com/108344251.m4a?fromtag=46",
	// 	"img":"http://imgcache.qq.com/music/photo/album_500/65/500_albumpic_1588165_0.jpg",
	// }],
	// songList:[
	// {"name":"1","singer":"佚名","src":"","img":""},
	// {"name":"2","singer":"佚名","src":"...","img":"..."},
	// {"name":"3","singer":"佚名","src":"...","img":"..."},
	// {"name":"4","singer":"佚名","src":"...","img":"..."}
	// ],
	
	// 专辑图片错误时显示的图片
	defaultImg: '<?php echo @__HOME_IMAGE__;?>
mplayer_error.png',
	// 自动播放
	autoPlay: true,
	// 播放模式(0->顺序播放,1->单曲循环,2->随机播放,3->列表循环(默认))
	playMode:0,
	playList:0,
	playSong:0,
	// 当前歌词距离顶部的距离
	lrcTopPos: 34,
	// 列表模板，用${ 变量名 }$插入模板变量
	listFormat: '<tr><td>${name}$</td><td>${singer}$</td><td>${time}$</td></tr>',
	// 音量滑块改变事件名称
	volSlideEventName:'change',
	// 初始音量
	defaultVolume:80
}, function () {
	// 绑定事件
	this.on('afterInit', function () {
		console.log('播放器初始化完成，正在准备播放');
	}).on('beforePlay', function () {
		var $this = this;
		var song = $this.getCurrentSong(true);
		var songName = song.name + ' - ' + song.singer;
		console.log('即将播放'+songName+'，return false;可以取消播放');
	}).on('timeUpdate', function () {
		var $this = this;
		console.log('当前歌词：' + $this.getLrc());
	}).on('end', function () {
		var $this = this;
		var song = $this.getCurrentSong(true);
		var songName = song.name + ' - ' + song.singer;
		console.log(songName+'播放完毕，return false;可以取消播放下一曲');
	}).on('mute', function () {
		var status = this.getIsMuted() ? '已静音' : '未静音';
		console.log('当前静音状态：' + status);
	}).on('changeMode', function () {
		var $this = this;
		var mode = modeText[$this.getPlayMode()];
		$this.dom.container.find('.mp-mode').attr('title',mode);
		console.log('播放模式已切换为：' + mode);
	});
});

$(document.body).append(player.audio); // 测试用

setEffects(player);

</script>		
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
         <!--  <div class="file">
            <a href="upload.html">上传</a>
          </div>   -->
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
                        <li class="nav-item"><span><a href="<?php echo U('Home/Index/index');?>
" ><i class="icon-home"></i>主页</a></span></li>
                        <li class="nav-item"><a id="movies" href="<?php echo U('Home/Video/movie_show');?>
">电影</a></li>
                        <li class="nav-item"><a id="zongyi" href="<?php echo U('Home/Video/variety_show');?>
">综艺</a></li>
                        <li class="nav-item"><a id="dianshiju" href="<?php echo U('Home/Video/tv_show');?>
">电视剧</a></li>
                        <li class="nav-item"><a id="dongman" href="<?php echo U('Home/Video/carton_show');?>
">动画</a></li>
                        <li class="nav-item"><a id="game" href="<?php echo U('Home/Video/game_show');?>
">游戏</a></li>
                        <li class="nav-item"><a class="on" id="music" href=<?php echo U('Home/Video/yinyue');?>
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
										<h1>xilixili音乐盒2016</h1>
										<p>高音质版震撼来袭</p>
								<!-- 		<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_1" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a> -->
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
										<!-- <a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_2" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a> -->
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
										<!-- <a class="bannerDown mvDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_3" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a> -->
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
									<!-- 	<a class="bannerDown albumDown click_log indexAB" style="margin-left: 524.5px;">下载客户端</a> -->
									</div>
								</div>
							</li>
										
							<li onclick="postFocusClick(&#39;319&#39;)" class="click_log other" data-click="www2016focus_link_5" data-href="http://club.kuwo.cn">
								<img class="bannerItem" data-imgsrc="http://img1.kwcdn.kuwo.cn/star/upload/13/13/1488941285693_.jpg" data-imgsrc2="http://img3.kwcdn.kuwo.cn/star/upload/15/15/1488941302031_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1488941302031_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>xilixili音乐发烧友社区上线啦</h1>
										<p>来这里听最真的音乐，遇见志同道合的人</p>
										<!-- <a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_5" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a> -->
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
									<!-- 	<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_6" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a> -->
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
									<!-- 	<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_7" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a> -->
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
										<!-- <a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_8" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a> -->
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
										<!-- <a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_9" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a> -->
									</div>
								</div>
							</li>				
						
							<li onclick="postFocusClick(&#39;357&#39;)" class="click_log other" data-click="www2016focus_link_1" data-href="http://down.kuwo.cn/mbox/kwmusic2016_web_1_bds_20161208.exe">
								<img class="bannerItem" data-imgsrc="http://img3.kwcdn.kuwo.cn/star/upload/0/0/1476867184096_.jpg" data-imgsrc2="http://img1.kwcdn.kuwo.cn/star/upload/11/11/1476867119115_.jpg" src="<?php echo @__HOME_IMAGE__;?>
1476867119115_.jpg" style="left: -8.5px;">
								<a href="javascript:;"><div class="splice opacity50" style="left: -8.5px;"></div></a>
								<div class="bannerConBox" style="width: 1349px;">
									<div class="bannerCon" style="margin-left: -674.5px;">
										<h1>xilixili音乐盒2016</h1>
										<!-- <p>高音质版震撼来袭</p> -->
									<!-- 	<a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_1" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a> -->
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
										<!-- <a class="bannerDown albumDown click_log indexAB" data-down="http://down.kuwo.cn/mbox/kwmusic_web_1.exe" data-click="www2016focus_down_2" href="javascript:;" style="margin-left: 524.5px;">下载客户端</a> -->
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
			
			<!-- 内容区域结束 -->
			<!-- 友情链接 -->
			<div class="clearfix"> 
			</div>	
			
		<div class="footer"><p align="center">@Copyright Design By <a href="#" style="font-size:20px;color:#337ab7"><strong>弹幕组</strong></a></div>
			
<!-- 网站底部通用html -->



			
				
			
	
	<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
common.js"></script>
	<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
index.js"></script>
	
	


</body></html><?php }} ?>