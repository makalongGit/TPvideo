<?php /* Smarty version Smarty-3.1.6, created on 2017-06-07 16:26:32
         compiled from "./Template/default/Home\TV\dianshiju.html" */ ?>
<?php /*%%SmartyHeaderCode:13799592ec7a0783256-60027451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b30c3130e51fdcb145d3d0efd1c3bf5a2c220615' => 
    array (
      0 => './Template/default/Home\\TV\\dianshiju.html',
      1 => 1496823986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13799592ec7a0783256-60027451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_592ec7a13ca30',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592ec7a13ca30')) {function content_592ec7a13ca30($_smarty_tpl) {?><!DOCTYPE html>
<!-- saved from url=(0040)http://www.ccgzwl.cn/dianying/index.html -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>电视剧 第1页</title>
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
1.7.2.min.js"></script>
<script src="<?php echo @__HOME_JS__;?>
superslide.2.1.js"></script>
<script src="<?php echo @__HOME_JS__;?>
jq.js"></script>
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
<div id="header" class="header-fixed">
	<div id="headbar">
		

<div id="content" class="wrap clearfix">

	<div class="content-left clearfix">
		<div class="ui-title border-gray">
            <h3 class="tt-tab">电视剧&nbsp;&nbsp;<span class="ml19">展开筛选</span></h3>
        </div>
		<div class=" ui-cnt filter-focusdl mbfilter border-gray">		

		
			<div class="filter-list fn-clear">
				<h5><i class="iconfont m-r-3 f-s-16">󰅄</i>按剧情：</h5>
				<ul>			
						  
					<li>
					  <a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;jq=%E8%A8%80%E6%83%85">言情</a>
					</li>          
						  
					<li>
					  <a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;jq=%E4%B9%A1%E6%9D%91">乡村</a>
					</li>          
						  
					<li>
					  <a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;jq=%E9%83%BD%E5%B8%82">都市</a>
					</li>          
						  
					<li>
					  <a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;jq=%E5%B0%91%E5%84%BF">少儿</a>
					</li>          
						  
					<li>
					  <a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;jq=%E6%83%8A%E6%82%9A">惊悚</a>
					</li>          
						  
					<li>
					  <a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;jq=%E6%90%9E%E7%AC%91">搞笑</a>
					</li>          
				     
				</ul>
			</div>		
			
			
			  
			<div class="filter-list fn-clear">
			  <h5><i class="iconfont m-r-3 f-s-16">󰁣</i>按年代：</h5>
				<ul>			    
			  
				<li>
					<a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;year=2016">2016</a>
				  </li>
				<li>
					<a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;year=2015">2015</a>
				  </li>
				<li>
					<a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;year=2014">2014</a>
				  </li>
				<li>
					<a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;year=2013">2013</a>
				  </li>
				<li>
					<a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;year=2012">2012</a>
				  </li>
				<li>
					<a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;year=2011">2011</a>
				  </li>
				<li>
					<a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;year=2010">2010</a>
				  </li>
				<li>
					<a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;year=2009">2009</a>
				  </li>
				<li>
					<a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;year=2008">2008</a>
				  </li>
				<li>
					<a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;year=2007">2007</a>
				  </li>
				<li>
					<a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;year=2006">2006</a>
				  </li>
				<li>
					<a href="http://www.ccgzwl.cn/search.php?searchtype=5&amp;tid=&amp;year=more">更早</a>
				  </li>
				 </ul>
			</div>
			
			

			<div class="ui-bar fn-clear">
				<ul class="view-mode">
					<li id="view-list"><a class="current"><i class="iconfont m-r-3 f-s-14">󰅙</i>选择排序方式</a></li>
				</ul>
				<div class="view-filter">
					<a id="time" href="http://www.ccgzwl.cn/search.php?page=1&amp;searchtype=5&amp;order=time&amp;tid=1" class="order current" target="_self"><span>按时间</span></a>
					<a id="hits" href="http://www.ccgzwl.cn/search.php?page=1&amp;searchtype=5&amp;order=hit&amp;tid=1" class="order" target="_self"><span>按人气</span></a>
				</div>
			</div>
		</div>
		<section class="clearfix channellist-box">
			<div class="hello-box">

				<div class="module-content">
					<ul class="yun-list clearfix" id="yun-list">		
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/xiju/legaobianfuxiadadianying/" title="乐高蝙蝠侠大电影">
								<div class="img">
									<img class="lazy" data-original="http://www.520885.com/pic/uploadimg/2016-12/2016123012561067767.jpg" src="<?php echo @__HOME_IMAGE__;?>
2016123012561067767.jpg" alt="乐高蝙蝠侠大电影" style="display: block;">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清</p>
									<p class="other">剧情：蝙蝠侠（威尔·阿奈特 配音）一边要阻止小丑（扎克·加利费安纳基斯 配音）犯罪，一边要抚养罗宾长大（迈克尔·塞拉 配音），而且，为了保护哥谭市的安全，蝙蝠侠不得不从一个独行侠，变成善于“团队合作”的城市警察。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">乐高蝙蝠侠大电影</p><p class="actor">主演：威尔·阿奈特 / 罗莎里奥·道森 / 拉尔夫·费因斯 / 迈克尔·塞拉 / 扎克·加利凡纳基斯</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/xiju/xianyuchuanqi/" title="咸鱼传奇">
								<div class="img">
									<img class="lazy" data-original="http://www.citure.net/src/20172916115989.jpg" src="<?php echo @__HOME_IMAGE__;?>
20172916115989.jpg" alt="咸鱼传奇" style="display: block;">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">BD高清版</p>
									<p class="other">剧情：咸鱼式的小人物罗恒（王宁饰），跨越千年，历经15种身份，遭遇痛苦、诋毁、惊悚、欺骗、背叛以及温暖和爱，七样不同类型的人生滋味，只为追求梦想的故事。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">咸鱼传奇</p><p class="actor">主演：王宁 / 葛天 / 来喜 / 黄一飞 / 连晋 / 李克龙</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/juqing/yitiaogoudeshiming/" title="一条狗的使命">
								<div class="img">
									<img class="lazy" data-original="http://ent.hangzhou.com.cn/movie/<?php echo @__HOME_IMAGE__;?>
attachement/jpg/site2/20170214/bc305bb44f141a0d0d0360.jpg" src="<?php echo @__HOME_IMAGE__;?>
bc305bb44f141a0d0d0360.jpg" alt="一条狗的使命" style="display: block;">
									
									<span class="bgb" style="bottom: -150px; left: 0px;">
									<i class="bgbbg"></i>
									<p class="name">BD高清版</p>
									<p class="other">剧情：影片讲述了一条狗经历多次重生，在一次次生命的轮回中寻找不同的使命，最后又回到了最初的主人身边的故事。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">一条狗的使命</p><p class="actor">主演：布丽特·罗伯森 / 丹尼斯·奎德 / 佩吉·利普顿 / 乔什·加德 / K·J·阿帕 / 布莱斯·吉扎尔 / 朱丽叶·瑞兰斯 / 卢克·科比 / 加布里埃尔·罗斯 / 迈克尔·博夫</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/xiju/huanlehaoshengyin/" title="欢乐好声音">
								<div class="img">
									<img class="lazy" data-original="http://cms-bucket.nosdn.127.net/catchpic/2/2b/2becb5e0d50fa8883e09d3c1803612dd.jpg" src="<?php echo @__HOME_IMAGE__;?>
2becb5e0d50fa8883e09d3c1803612dd.jpg" alt="欢乐好声音" style="display: block;">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">BD高清版</p>
									<p class="other">剧情：曾制作过《小黄人》的环球公司和Illumination Entertainment今天公布了他们一部新的动画电影档期和配音阵容。该片堪称动物界的“达人秀”和“好声音”，片中会用到超过85首热门歌曲！</p>
									</span>
								</div>
								<div class="text">
									<p class="name">欢乐好声音</p><p class="actor">主演：马修·麦康纳 / 瑞茜·威瑟斯彭 / 塞思·麦克法兰 / 斯嘉丽·约翰逊 / 塔伦·埃格顿 / 托瑞·凯利 / 约翰·C·赖利 / 珍妮弗·桑德斯 / 詹妮弗·哈德森 / 加斯·</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/aiqing/wanmeiyouduomei/" title="完美有多美">
								<div class="img">
									<img class="lazy" data-original="http://www.itedou.com/data/attachment/portal/image/20170119/20170119100753_73098.png" src="<?php echo @__HOME_IMAGE__;?>
20170119100753_73098.png" alt="完美有多美" style="display: block;">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：《完美有多美》讲述了汽车修理工程天乐（姜武 饰）落魄无助，无意中从一位老者手中获得一把能穿越不同世界的钥匙，这把钥匙可以带他通往有钱有权、与校花卓彦妮（蒋勤勤 饰）拥有美满婚姻的新世界。频繁穿梭于两个世界的程天乐，一边享受A世界家庭的温馨，另一边享受B世界富豪的奢华生活，可是却逐渐对自己所追求的完美生活开始迷茫......</p>
									</span>
								</div>
								<div class="text">
									<p class="name">完美有多美</p><p class="actor">主演：姜武 / 蒋勤勤 / 李乃文 / 朱旭 / 傅颖 / 胡明 / 安琥 / 杜维瀚 / 沙宝亮</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/juqing/shanghaiwang/" title="上海王">
								<div class="img">
									<img class="lazy" data-original="http://www.gdongw.com/uploads/allimg/170209/091225D53-0.jpg" src="<?php echo @__HOME_IMAGE__;?>
noimage.gif" alt="上海王">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">BD高清版</p>
									<p class="other">剧情：电影讲述了20世纪初上海滩十里洋场、黑帮势力的角逐纷争。纷杂乱世中，奇女子筱月桂（余男 饰）与三代上海王之间充满传奇色彩的爱恨情仇。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">上海王</p><p class="actor">主演：胡军 / 余男 / 凤小岳 / 秦昊 / 李梦 / 刘佩琦 / 曹可凡 / 蒲巴甲 / 多布杰 / 乔翰·厄布 / 何赛飞 / 徐冬冬 / 白灵</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/xiju/fengyueqiaojiaren/" title="疯岳撬佳人">
								<div class="img">
									<img class="lazy" data-original="http://cdn2.bjweekly.com/uploads/2017-01-23/2855489716928953706.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="疯岳撬佳人">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">BD高清版</p>
									<p class="other">剧情：性格怯懦的李帅亭（岳云鹏 饰）自大学时期起，一直暗恋自己的女同学张子墨（袁姗姗 饰）。在他鼓起勇气告白后却惨遭当众奚落，使得本就不够自信的李帅亭更加自卑。随后李帅亭“躲”进一家高端养老院当起了护工。六年来，李帅亭悉心照料植物人老朱（石小满 饰），在一次意外事件之后老朱因祸得福恢复了意识，并给予李帅亭一笔丰厚的奖金。李帅亭拿着这笔巨款来到一个叫做“爱情战略中心”的地方，要求爱情战略师帮自己完成一个心愿——让女神张子墨向自己表白......</p>
									</span>
								</div>
								<div class="text">
									<p class="name">疯岳撬佳人</p><p class="actor">主演：岳云鹏 / 袁姗姗 / 孙坚 / 马元 / 石小满 / 郭德纲 / 艾伦 / 潘斌龙 / 杨能</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/aiqing/heyuenannv/" title="合约男女">
								<div class="img">
									<img class="lazy" data-original="http://static.zhidao.manmankan.com/k<?php echo @__HOME_IMAGE__;?>
201702/10_1486711272117631.png" src="./电影 第1页-电影天堂_files/noimage.gif" alt="合约男女">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：保险公司CEO叶瑾（郑秀文 饰），是众人心中不怒而威的霸道女总裁，对爱情感到绝望的她认为只有对孩子的感情才是永恒的，于是决定借精生子。在严格的层层筛选后，帅气不羁的快递员肖博（张孝全 饰）意外成为孩子父亲的最终人选。有苦难言的肖博，义无反顾地签订了“变态”合约。而此时故事才刚刚开始…</p>
									</span>
								</div>
								<div class="text">
									<p class="name">合约男女</p><p class="actor">主演：郑秀文 / 张孝全 / 林雪 / 冯文娟 / 弦子 / 金巧巧 / 尹子维 / 李茂 / 徐冬冬</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/dongzuo/dajiaoyin/" title="大脚印">
								<div class="img">
									<img class="lazy" data-original="http://www.juqingba.cn/uploads/allimg/170205/29_170205090945_1.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="大脚印">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">BD高清版</p>
									<p class="other">剧情：影片以中国家喻户晓的湖北神农架野人的传说为故事核心元素，试图还原野人的神秘形象。影片讲述了一位在中国担任家庭女教师的美国大学生与她的学生乘坐的飞机遇险，迫降神农架原始森林，随着他们与野人发生神秘呼应，一连串惊心动魄的事情接连发生⋯⋯为了保护野人，他们与盗猎集团展开层层惊险且充满智慧的周旋、较量，最终正义战胜邪恶，而人性的善与恶也在这过程中得以深入展现并引人思考。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">大脚印</p><p class="actor">主演：萨沙·杰克逊 / 曹操 / 道格拉斯·泰特</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/dongzuo/cikexintiao/" title="刺客信条">
								<div class="img">
									<img class="lazy" data-original="http://www.91xiazai.com/Uploads/__ueditor__/upload/image/20160516/1463385529686356.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="刺客信条">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：卡勒姆·林奇（迈克尔·法斯宾德 饰）在死刑即将执行之前清醒过来，发现他被索菲娅（玛丽昂·歌迪亚 饰）选中，来参加一个能让人类摆脱暴力冲动的计划。虚拟现实机器Animus能让用户体验祖先的记忆，被绑在机器上之后，卡勒姆·林奇意识到他是生活在西班牙宗教法庭时期一位刺客阿圭拉的后裔，他们寻找的是可以控制自由意志的伊甸园苹果。索菲娅在父亲艾伦（杰瑞米·艾恩斯 饰）施加的压力下不情愿地操纵着卡勒姆·林奇回到过去寻找伊甸园苹果在现代世界的下落，威胁着他身体和心理的健康。但在杀手同行穆萨（迈克尔·威廉姆斯 饰）暗示了卡勒姆·林奇，提醒他艾伦有可能动机不纯之后，卡勒姆·林奇开始重新考虑他的行为和动机，而人类自由意志的命运也变得悬而未决……</p>
									</span>
								</div>
								<div class="text">
									<p class="name">刺客信条</p><p class="actor">主演：比尔·科拉奇 / 亚当·库珀 / 迈克尔·莱斯利 主演: 迈克尔·法斯宾德 / 玛丽昂·歌迪亚 / 杰瑞米·艾恩斯 / 布莱丹·格里森 / 夏洛特·兰普林 / 迈克尔·威廉</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/juqing/juezhanshishen/" title="决战食神">
								<div class="img">
									<img class="lazy" data-original="http://9c9vimg.000129.com:7861/201702/6525339071859338.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="决战食神">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：影片主要讲述了高天赐是广州一个小厨师，和来自法国拥有米芝莲三颗星荣誉的名厨安保罗，厨艺各有千秋，从一开始的争锋相对，到成为惺惺相惜的好友，并联手参加‘全球美食之王’大赛夺得冠军的故事。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">决战食神</p><p class="actor">主演：葛优 / 谢霆锋 / 唐嫣 / 郑容和 / 白冰 / 杜海涛 / 王太利 / 詹瑞文 / 海鸣威</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/dongzuo/youxiguize/" title="游戏规则">
								<div class="img">
									<img class="lazy" data-original="http://img.tui555.com/upload/201702/08/163152881.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="游戏规则">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：李子豪与方杰历经多次血雨腥风，逐渐成为生死兄弟。不料，方杰爱慕已久的对象—唐先生的爱女唐芊芊，却对李子豪一见钟情，而李子豪此时却也发现心上人蓝若云，在自己被捕期间成了唐先生的情妇。&nbsp; 　　唐先生为称霸上海滩，布下惊天骗局，而这个骗局里最重要的一环就是李子豪。可唐先生并不知，李子豪的真实身份是暗杀组织蓝衣社成员。&nbsp; 　　唐先生最终查出子豪的真实身份，两人正面对峙，一声枪响，最终倒下的是谁？方杰会作何选择？芊芊又怎么面对父亲和爱人的生死之斗……</p>
									</span>
								</div>
								<div class="text">
									<p class="name">游戏规则</p><p class="actor">主演：何润东 / 黄子韬 / 娜扎 / 王学圻 / 秋瓷炫 / 高捷 / 师鹏</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/dongzuo/jixiantegong3_zhongjihuigui/" title="极限特工3：终极回归">
								<div class="img">
									<img class="lazy" data-original="http://www.ffpic.net/vod/2017-02/58917d7087e06.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="极限特工3：终极回归">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：故事聚焦在由范·迪塞尔带头的的特工小队和以甄子丹为首的反派组织之间的对决。在这部作品中，迪塞尔饰演的特工凯奇不再是孤胆英雄，他将与一群出色的伙伴共同作战：塞缪尔·杰克逊饰演的国安局特工，印度女星迪皮卡·帕度柯妮饰演的与凯奇颇有渊源的女猎人，凭借《吸血鬼日记》走红的妮娜·杜波夫扮演的技术专家，《女子监狱》女星露比·罗丝饰演的狙击手,中国当红偶像演员吴亦凡饰演的特工Nicks。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">极限特工3：终极回归</p><p class="actor">主演： 范·迪塞尔 / 甄子丹 / 迪皮卡·帕度柯妮 / 吴亦凡 / 鲁比·罗丝 / 塞缪尔·杰克逊 / 妮娜·杜波夫 / 托尼·贾 / 托妮·科莱特 / 赫敏·科菲尔德 / 阿尔·萨皮恩</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/xiju/dongbeiwangshizhipomazhangfei/" title="东北往事之破马张飞">
								<div class="img">
									<img class="lazy" data-original="http://www.bukaba.com/pic/uploadimg/2017-1/24675.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="东北往事之破马张飞">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">BD高清版</p>
									<p class="other">剧情：讲述了几个性格迥异的东北青年，无意落入了香港反派的圈套，而后用离间计、苦肉计、连环计等一系列套路，与其斗智斗勇的爆笑喜剧故事。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">东北往事之破马张飞</p><p class="actor">主演：贾乃亮 / 马丽 / 王迅 / 梁超 / 于洋 / 屈菁菁 / 九孔 / 刘慧 / 金士杰 / 曾志伟 / 李小璐 / 贾云馨</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/kehuan/shenghuaweiji6_zhongzhang/" title="生化危机6：终章">
								<div class="img">
									<img class="lazy" data-original="http://imgtu.5011.net/uploads/content/20161216/4790631481856956.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="生化危机6：终章">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">BD高清</p>
									<p class="other">剧情：故事紧接《生化危机5：惩罚》，在华盛顿特区爱丽丝被威斯克背叛后人类几乎要失去最后的希望。作为唯一的幸存者，也是人类对抗僵尸大军的最后防线，爱丽丝必须回到噩梦开始的地方——浣熊市。在那里雨伞公司正在集结所有的力量企图对残余的幸存者发起最后的打击。 在和时间赛跑的过程中，爱丽丝将和昔日的朋友一起对抗僵尸和最新变种怪物。爱丽丝失去了自己的超能力，加上雨伞公司的疯狂进攻，这将是她拯救人类以来打得最艰难的一仗。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">生化危机6：终章</p><p class="actor">主演：米拉·乔沃维奇 / 伊恩·格雷 / 艾丽·拉特 / 肖恩·罗伯茨 / 欧文·马肯 / 威廉·莱维 / 鲁比·罗丝 / 罗拉 / 艾尔·安德森 / 密尔顿·施尔 / 西沃恩·霍奇森 / </p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/aiqing/ailezhicheng/" title="爱乐之城">
								<div class="img">
									<img class="lazy" data-original="http://house.chinanews.com/yl/2017/01-13/U398P4T8D8123047F107DT20170113111601.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="爱乐之城">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">BD高清</p>
									<p class="other">剧情：故事发生在当代的洛杉矶，寂寥的小演员米娅的志向是女演员兼剧作家，她沉迷老电影明星。她在华纳兄弟的片场当咖啡师，经常翘班去试镜，如果真的接到戏，哪怕再小的角色也会让她欣喜若狂。塞巴斯蒂安是一名系丝绸领带的爵士钢琴师，对艺术有着近乎洁癖的追求。他想开间俱乐部，但他所痴迷的音 乐更适合 博物馆，几乎没有人会愿意花钱去听。为了生存，他违心加入了一支流行爵士乐队，在尖叫的观众面前摆弄音乐合成器。同样追求梦想的两人在这座城市里遇见彼此，在唱唱跳跳中坠入了爱河，相互慰藉扶持，一起追求毕生梦想。但在逐渐达成梦想的同时，艺术与商业、梦想与现实之间的朦胧博弈，令两人的情感也面临抉择和考验，在经历了一系列挫折、分歧后，他们彼此鼓励对方不要放弃梦想。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">爱乐之城</p><p class="actor">主演：瑞恩·高斯林 / 艾玛·斯通 / 约翰·传奇 / J·K·西蒙斯 / 罗丝玛丽·德薇特 / 芬·维特洛克 / 考莉·赫尔南德斯 / 水野索诺娅 / 杰西卡·罗德 / 贾森·福克斯 </p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/xiju/xiyoufuyaopian/" title="西游伏妖篇">
								<div class="img">
									<img class="lazy" data-original="http://www.ty163.cn/dou/uploads/allimg/20170101/010109_10058.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="西游伏妖篇">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：作为《西游降魔篇》的后继故事，唐三藏在上集感化了杀死段小姐的齐天大圣，并收其为徒后，带着孙悟空、猪八戒及沙僧，一行四人踏上西天取经之旅，路途凶险，除魔伏妖，师徒四人也在取经的过程中有个各自的成长与改变。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">西游伏妖篇</p><p class="actor">主演：吴亦凡 / 林更新 / 姚晨 / 林允 / 包贝尔 / 巴特尔 / 杨一威 / 大鹏 / 王丽坤 / 汪铎 / 张美娥</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/xiju/laoshiyefengkuang/" title="老师也疯狂">
								<div class="img">
									<img class="lazy" data-original="http://img.btdog.com/vod/2016-11-21/58330adb14806.jpg" src="C:/wamp/www/TPvideo/Upload/images/2017-06-07/mid_5937b7ca40375.jpg" alt="老师也疯狂">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：光正实验学校“六一”实验班，是一个终日充斥着自私、鬼马、娇气、难缠、集结了全校超级不良学生的问题班级。为了整顿这个宛如毒瘤一般的班级，校方请来了有过海外教学背景的热血教师肖子恩来担任“六一”实验班的班主任。不服管教的问题学生们轮番给新来的班主任肖子恩下马威，企图吓跑这个毫不起眼的新老师。肖子恩却始终不以为然，一心想要积极拉近与大家的关系，并用自己独特的教育方法激发、引导、打动这群问题学生，他不按常理的教育方式亦引起了其他老师和学生家长的不满，每天都有意想不到的麻烦出现，陷入窘境的肖子恩却始终选择相信自己的学生们，并努力将他们领向正途，达成学年总成绩第一的目标。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">老师也疯狂</p><p class="actor">主演：韩立/贡米/方青卓</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/dongzuo/gongfuyuga/" title="功夫瑜伽">
								<div class="img">
									<img class="lazy" data-original="http://www.sd.xinhuanet.com/news/yule/2017-01/24/1120373241_14852217295411n.jpeg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="功夫瑜伽">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：考古学教授Jack（成龙 饰）多年没有踏出学校，校长和学生都对他添油加醋的历史半信半疑。一次授课后，一个印度女孩找到Jack，用一张千年地图吸引了Jack的目光。于是Jack和挚友的儿子李琼斯（李治廷 饰）、助教小光（张艺兴 饰）组成“寻宝小分队”，为“神秘宝石”展开冒险，在迪拜和土豪飙车，在冰岛潜入神秘冰穴，在印度大战土狼，和印度贵族斗舞，动作喜剧再升级，打笑全世界。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">功夫瑜伽</p><p class="actor">主演：成龙 / 李治廷 / 张艺兴 / 索努·苏德 / 母其弥雅 / 迪莎·帕塔尼 / 艾米拉·达斯特 / 尚语贤 / 姜雯 / 张国立 / 伊利亚娜·狄克鲁兹</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/xiju/danaotianzhu/" title="大闹天竺">
								<div class="img">
									<img class="lazy" data-original="http://ent.southcn.com/8/attachment/20170114/20064107/33797c47c99d44739a94.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="大闹天竺">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：盛唐集团总裁唐宗突然离世并留下遗训,让他的儿子唐森（白客 饰）在穷小子武空（王宝强 饰）的陪同下前往印度寻找遗嘱。在印度巧遇自恋臭美却又忠诚的朱天鹏（岳云鹏 饰）,以及美丽性感却深藏秘密的美女吴静（柳岩 饰）,四人兜兜转转竟结为同盟,而最令四人不解的是为何这次取遗嘱之旅凶险重重,危机四伏,并且遗嘱之所以放在印度，更是隐藏着秘密。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">大闹天竺</p><p class="actor">主演：王宝强 / 白客 / 岳云鹏 / 柳岩 / 黄渤 / 林永健 / 马浴柯 / 陈佩斯 / 朱时茂 / 王祖蓝 / 刘昊然</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/juqing/chengfengpolang/" title="乘风破浪">
								<div class="img">
									<img class="lazy" data-original="http://enjoy.eastday.com/<?php echo @__HOME_IMAGE__;?>
thumbnailimg/month_1701/201701121038263934.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="乘风破浪">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：赛车手阿浪一直对父亲反对自己的赛车事业耿耿于怀，在向父亲证明自己的过程中，阿浪却意外的卷入了一场奇妙的冒险。他在这段经历中结识了一群兄弟好友，一同闯过许多奇幻的经历，也对自己的身世有了更多的了解。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">乘风破浪</p><p class="actor">主演：邓超 / 彭于晏 / 赵丽颖 / 董子健 / 金士杰 / 易小星 / 张本煜 / 李荣浩 / 高华阳 / 李淳 / 孙伊涵 / 熊黎 / 李春嫒 / 潘米 / 马达加斯加 / 金毛期期</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/xiju/jianwangcun/" title="健忘村">
								<div class="img">
									<img class="lazy" data-original="http://uploads.rayli.com.cn/2016/1216/1481851089665.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="健忘村">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">BD高清版</p>
									<p class="other">剧情：《健忘村》的故事发生在一片世外桃源般的村落里，因为一名不速之客的到访和一个神秘宝物的出现而引发了一系列喜剧故事。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">健忘村</p><p class="actor">主演：舒淇 / 王千源 / 张孝全 / 曾志伟 / 杨祐宁 / 张少怀 / 许杰辉 / 林美秀 / 顾宝明 / 陈竹昇 / 柯宇纶 / 黄健玮</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/xiju/28suiweichengniandianyingban/" title="28岁未成年电影版">
								<div class="img">
									<img class="lazy" data-original="http://www.laogu.cc/pic/uploadimg/2016-11/29603.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="28岁未成年电影版">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：&nbsp;28岁的凉夏与30岁的猫粮恋爱10年同居5年，每天都在为结婚做准备，每天认真的敷脸，对着自己眼角的细纹发愁，打电话咨询婚礼场地，挑选婚纱，上淑女课程待嫁状态。 然而这个时候的猫粮正在筹备公司的第二轮融资的事情，无暇顾忌凉夏的一些小情趣，可以说是反感，提出了分手。凉夏在因猫粮提出分手而悲伤欲绝时，吃了魔法巧克力，让心智重返17岁的小凉夏，小凉夏对猫粮的冷漠及她年轻的心态，让猫粮又燃起了对她的兴趣，装在大凉夏身体里的小凉夏因为偶遇爱上了严岩。 面对两段不同的感情，凉夏如何选择。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">28岁未成年电影版</p><p class="actor">主演：倪妮 霍建华 马苏 王大陆</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/xiju/mojinxiaowei/" title="摸金笑尉">
								<div class="img">
									<img class="lazy" data-original="http://fun.youth.cn/yl24xs/201701/W020170120403387791077.png" src="./电影 第1页-电影天堂_files/noimage.gif" alt="摸金笑尉">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：东汉末年，曹操为补充军饷，首开官家盗墓之滥觞，建立了中国历史上第一支专业的盗墓部队，并设置了摸金校尉、发丘中郎将、搬山道人、卸岭力士等四职，四职术业不同、各司其职，其后更演变成了中国盗墓界的四大门派。曹操南征北讨之余，更着人将多年所探华夏版图内的各大墓址及破解之法编成了一本奇书——《摸金秘术》，交由最信任的摸金校尉保管。临死前，曹操令摸金发血誓世代守护此书，以备后用，与此同时，发丘、搬山、卸岭等三派的九门门人因觊觎书中之财宝，也一代代追寻着摸金校尉一派的下落，一千多年来，四派门人或互相攻伐或合纵连横，但《摸金秘术》的下落始终是个谜……而所谓老九门，实为十门，而这第十门就是天下各门九九归一之不二正门，一本《摸金秘术》相当于华夏墓葬的高德地图，是摸金界的《史记》，所谓秘中之密门中之门也……</p>
									</span>
								</div>
								<div class="text">
									<p class="name">摸金笑尉</p><p class="actor">主演：冯可 / 张悦 / 谢毅 / 曹云金</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/dongzuo/sanshaoyedejian/" title="三少爷的剑">
								<div class="img">
									<img class="lazy" data-original="http://imgwx5.2345.com/dypcimg/img/8/56/sup168227_223x310.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="三少爷的剑">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：剑气纵横三万里，一剑光寒十九洲”，神剑山庄三少爷谢晓峰（林更新 饰）惊才绝艳，十年来历经上千大战未尝一败，被天下人尊为“剑神”。传奇剑客燕十三（何润东 饰）一直以谢晓峰为目标，苦修剑道，终于在生死边缘悟出惊天地泣鬼神的“绝命十三剑”。一时之间，江湖沸腾，然而，就在燕十三赶到神剑山庄下战书的时候，迎接他的，却是三少爷谢晓峰的灵柩。燕十三因痛失对手大感失望，此时神秘女子慕容秋荻（江一燕 饰）出现并告知燕十三，谢晓峰并没有死，要想找到他决战，燕十三就必须要替她杀一个人……</p>
									</span>
								</div>
								<div class="text">
									<p class="name">三少爷的剑</p><p class="actor">主演：林更新 / 何润东 / 江一燕 / 蒋梦婕 / 鲍起静 / 顾曹斌</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/juqing/youjikexun/" title="有迹可循">
								<div class="img">
									<img class="lazy" data-original="http://mp4img.xiacb.com/vod/6/57e87468173c2.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="有迹可循">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：北漂青年周海（董博睿 饰）与小棠（雅玫 饰）青梅竹马，两人一路打拼，周海职场得意将迎娶小棠，小棠却在旅途中神秘失踪。一晃三年，同一条路、同一间旅馆，周海每年都来寻找。&nbsp; 　　这一次线索接连出现，周海抽丝剥茧，破解一个又一个谜团，沿着蛛丝马迹锁定两个幕后人物：职场对手David（王程 饰）或杀人狂老三（颜玮良 饰）。小棠被困地下室视频随之曝光，然而距离真相越近，周海越发觉得自己正落入一个又一个无限死循环的怪圈……</p>
									</span>
								</div>
								<div class="text">
									<p class="name">有迹可循</p><p class="actor">主演：张雅玫 / 董博睿 / 颜玮良 / 王程 / 崔靖</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/kehuan/jianglin/" title="降临">
								<div class="img">
									<img class="lazy" data-original="http://img.yuanlai521.com/file/dianyingxiazai/2016-11-19/c3c7b997e1af594677ed7a86d18e3f24.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="降临">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清版</p>
									<p class="other">剧情：影片由《囚徒》《边境杀手》导演丹尼斯·维伦纽瓦执导，根据星云奖以及雨果奖得主、华裔科幻作家特德·姜的短篇小说《你一生的故事》改编，讲述了外星人飞船来到地球，艾米·亚当斯饰演的语言学家受雇于政府，来与外星人沟通了解它们此行的目的。然而当用外星语言“七肢桶”与这些来客交流时， 她眼前突然浮现了她从出生到死亡、已知或未知的完整一生。杰瑞米·雷纳将饰演一名物理学教授，他与亚当斯饰演的语言学家一同受雇于政府。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">降临</p><p class="actor">主演：艾米·亚当斯 / 杰瑞米·雷纳 / 福里斯特·惠特克 / 迈克尔·斯图巴 / 马志 / 马克·奥布莱恩 / 乔·柯布登 / 派特·凯利 / 娜塔莉·希波蒂 / 袁罗素 / 克里斯蒂</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/dongzuo/moxianchuanshuo/" title="魔弦传说">
								<div class="img">
									<img class="lazy" data-original="http://shp.qpic.cn/txdiscuz_pic/0/_bbs_open_qq_com_forum_201701_01_175303pyl819l7y712i9o7.jpg/0" src="./电影 第1页-电影天堂_files/noimage.gif" alt="魔弦传说">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">BD高清</p>
									<p class="other">剧情：《久保与二弦琴》的故事主角是生活在海岸边的男孩久保。当一位来自过去的怨灵将他卷入复仇之中的时候，久保平静低调的生活瞬间掀起巨浪。在神灵与妖怪的追杀之下，久保反败为胜的唯一希望就是寻回父亲生前披戴过的那副拥有法力的盔甲。鼓起勇气的久保就此踏上了奥德赛式的征程，而路上等待他的不仅有埋藏在家族里的秘密，还有为保护这片土地与头顶的星空展开的英勇抗争。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">魔弦传说</p><p class="actor">主演：阿特·帕金森/查理兹·塞隆</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/aiqing/taikonglvke/" title="太空旅客">
								<div class="img">
									<img class="lazy" data-original="http://www.ffpic.net/vod/2017-01/5871c168921ef.jpg" src="./电影 第1页-电影天堂_files/noimage.gif" alt="太空旅客">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">BD高清</p>
									<p class="other">剧情：在120年的太空航程中，两位旅客吉姆和奥罗拉的休眠舱故障，并使他们在到达目的地前90年醒来。吉姆和奥罗拉必须在飞船发生更大的危机前解开故障背后的秘密，解救人类历史上最伟大的迁徙途中旅客的生命。</p>
									</span>
								</div>
								<div class="text">
									<p class="name">太空旅客</p><p class="actor">主演：詹妮弗·劳伦斯/克里斯·帕拉特</p>
								</div>
							</a>
						</li>
								
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="http://www.ccgzwl.cn/dianying/dongzuo/shuaijiaoba_baba/" title="摔跤吧！爸爸">
								<div class="img">
									<img class="lazy" data-original="http://down.52pk.com/uploads/170104/5019_172601_1.png" src="./电影 第1页-电影天堂_files/noimage.gif" alt="摔跤吧！爸爸">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清</p>
									<p class="other">剧情：这是一部女性为自己争取命运自主权并赢得尊严的励志喜剧电影。马哈维亚·辛格·珀尕是印度国家摔跤冠军，却因生活所迫放弃摔跤。他希望让儿子可以帮他完成梦想——为印度赢得世界级金牌。不料命运捉弄让他生了四个女儿，偶然的机会他开始培养女儿学习摔跤，过程中发生各种趣事，同时面对社会的歧视，亲友的嘲笑等困境会压垮这队父女军吗？他们能否顶住舆论的压力、化解隔阂、颠覆保守的价值观观赢得最后的胜利吗？</p>
									</span>
								</div>
								<div class="text">
									<p class="name">摔跤吧！爸爸</p><p class="actor">主演： 阿米尔·汗 / 沙克希·坦沃 / 维万·巴特那</p>
								</div>
							</a>
						</li>
						

					</ul>
				</div>
			</div>	
		</section>
		<div class="page clearfix">
		
		
		
		<em>1</em>
		
		
		
		<a href="http://www.ccgzwl.cn/dianying/index2.html">2</a>
		
		
		
		<a href="http://www.ccgzwl.cn/dianying/index3.html">3</a>
		
		
		
		<a href="http://www.ccgzwl.cn/dianying/index4.html">4</a>
		
		
		
		<a href="http://www.ccgzwl.cn/dianying/index5.html">5</a>
		
		
		
		<a href="http://www.ccgzwl.cn/dianying/index6.html">6</a>
		
		
		
		<a href="http://www.ccgzwl.cn/dianying/index7.html">7</a>
		
		
		
		<a href="http://www.ccgzwl.cn/dianying/index8.html">8</a>
		
		
		
		<a href="http://www.ccgzwl.cn/dianying/index2.html">&gt;</a>
		<a href="http://www.ccgzwl.cn/dianying/index628.html">..628</a>
		
		</div>
	</div>
	<div class="content-right clearfix">
		
		<div class="ui-ranking border-gray">
        <div class="cont-box-list">
          <h2 class="cont-box-tit-tvs-list"><i class="iconfont m-r-3 f-s-16">󰃐</i>最热排行榜</h2><span class="border-r-15"></span>
        </div>
        <ul class="ranking-list">
				
            <li>
            </li>
				
            <li><span>17298</span>
				<em class="">1</em>
				<a href="http://www.ccgzwl.cn/dianying/aiqing/ailezhicheng/">爱乐之城</a>
            </li>
				
            <li><span>114469</span>
				<em class="">2</em>
				<a href="http://www.ccgzwl.cn/dianying/xiju/xiyoufuyaopian/">西游伏妖篇</a>
            </li>
				
            <li><span>130716</span>
				<em class=''>3</em>
				<a href="http://www.ccgzwl.cn/dianying/dongzuo/gongfuyuga/">功夫瑜伽</a>
            </li>
				
            <li><span>4254</span>
				<em>4</em>
				<a href="http://www.ccgzwl.cn/dianying/xiju/huanlehaoshengyin/">欢乐好声音</a>
            </li>
				
            <li><span>6026</span>
				<em>5</em>
				<a href="http://www.ccgzwl.cn/dianying/dongzuo/cikexintiao/">刺客信条</a>
            </li>
				
            <li><span>5235</span>
				<em>7</em>
				<a href="http://www.ccgzwl.cn/dianying/dongzuo/luomandikexiaowangshi/">罗曼蒂克消亡史</a>
            </li>
				
            <li><span>13209</span>
				<em>8</em>
				<a href="http://www.ccgzwl.cn/dianying/dongzuo/jixiantegong3_zhongjihuigui/">极限特工3：终极回归</a>
            </li>
				
            <li><span>35659</span>
				<em>9</em>
				<a href="http://www.ccgzwl.cn/dianying/juqing/chengfengpolang/">乘风破浪</a>
            </li>
				
				
		</ul>
		</div>
			
		<div class="ui-ranking border-gray">
        <div class="cont-box-list">
          <h2 class="cont-box-tit-tvs-list"><i class="iconfont m-r-3 f-s-16">󰃐</i>评分排行榜</h2><span class="border-r-15"></span>
        </div>
        <ul class="ranking-list2">
				
           
			<li></li>
            <li><span>0.0</span>
				<em class=''>1</em>
				<a href="http://www.ccgzwl.cn/dianying/kongbu/buhanerli/">不寒而栗</a>
            </li>
				
            <li><span>0.0</span>
				<em class=''>2</em>
				<a href="http://www.ccgzwl.cn/dianying/dongzuo/juedizhanjiang/">绝地战将</a>
            </li>
				
            <li><span>0.0</span>
				<em class=''>3</em>
				<a href="http://www.ccgzwl.cn/dianying/xiju/lanyanjingmiqi/">蓝眼睛米奇</a>
            </li>
				
            <li><span>0.0</span>
				<em>4</em>
				<a href="http://www.ccgzwl.cn/dianying/dongzuo/tegongshaote/">特工绍特</a>
            </li>
				
            <li><span>0.0</span>
				<em>5</em>
				<a href="http://www.ccgzwl.cn/dianying/dongzuo/guojiagongdi/">国家公敌</a>
            </li>						
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