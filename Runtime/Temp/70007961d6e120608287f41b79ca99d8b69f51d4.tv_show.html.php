<?php /*%%SmartyHeaderCode:24002594008c3172f10-69347490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70007961d6e120608287f41b79ca99d8b69f51d4' => 
    array (
      0 => './Template/default/Home\\Video\\tv_show.html',
      1 => 1497367765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24002594008c3172f10-69347490',
  'variables' => 
  array (
    'cate_list' => 0,
    'v' => 0,
    'info' => 0,
    'pagelist' => 0,
    'hot_list' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_594008c3b5656',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594008c3b5656')) {function content_594008c3b5656($_smarty_tpl) {?><!DOCTYPE html>
<!-- saved from url=(0040)http://www.ccgzwl.cn/dianying/index.html -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>电视剧 第1页</title>
<meta name="keywords" content="电影第1页">
<meta name="description" content="电影第1页">
	<script src="/TPvideo/Template/default/Home/Public/js/jquery-1.11.1.min.js"></script>

	<script src="/TPvideo/Template/default/Home/Public/js/lrtk.js"></script>
	<script src="/TPvideo/Template/default/Home/Public/js/layer.js"></script>

 <!-- bootstrap -->
	<link href="/TPvideo/Template/default/Home/Public/css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
	<link href="/TPvideo/Template/default/Home/Public/css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
	
<link href="/TPvideo/Template/default/Home/Public/css/filmstyle.css" rel="stylesheet">
	<link href="/TPvideo/Template/default/Home/Public/css/demo.css" rel="stylesheet">

	<link href="/TPvideo/Template/default/Home/Public/css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- 导航 -->
<script src="/TPvideo/Template/default/Home/Public/js/1.7.2.min.js"></script>
<script src="/TPvideo/Template/default/Home/Public/js/superslide.2.1.js"></script>
<script src="/TPvideo/Template/default/Home/Public/js/jq.js"></script>
<script src="/TPvideo/Template/default/Home/Public/js/common.js"></script>
<script src="/TPvideo/Template/default/Home/Public/js/function.js"></script>
<script src="/TPvideo/Template/default/Home/Public/js/jquery.lazyload.js"></script>

</head>
<body>
	
	<div>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a id="logo" class="navbar-brand" href="U('Home/Index/index')"><h1><img src="/TPvideo/Template/default/Home/Public/images/logo.png1.png" alt="xilixili" /></h1></a>
			</div>
			
			 <div id="navbar" class="navbar-collapse collapse">
			 	<!-- 搜索栏 -->
				<div class="top-search">
					<form class="navbar-form navbar-right" method="post" action="U('Home/Index/Search')">
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
							<script type="text/javascript" src="/TPvideo/Template/default/Home/Public/js/modernizr.custom.min.js"></script>    
							<link href="/TPvideo/Template/default/Home/Public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
							<script src="/TPvideo/Template/default/Home/Public/js/jquery.magnific-popup.js" type="text/javascript"></script>
						<!--//pop-up-box -->
						<div id="small-dialog2" class="mfp-hide">
							<h3>创建账户</h3> 
							
						<div class="signup">
							<form id="registform" action="/tpvideo/index.php/home/user/regist.html" method="post">
							
								<input  id="email" type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="输入有效的邮箱地址"/>
								<input  id="name" type="text" class="username" placeholder="用户名" required="required" pattern="" title="输入用户名"/>
								<input  id="password" type="password" placeholder="Password" required="required" pattern=".{6,}" title="输入至少6位的密码 autocomplete="off" />
								<!--
								<input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]1\d9" title="Enter a valid mobile number" />
								-->
								
							</form>
							<div class="continue-button">
								<a id="next" href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">确定</a>
							</div>
							<div>
							<script>
								$('#next').click(function(){
									
									var reg_email=$('#email').val();
									var reg_name=$('#name').val();
									var reg_passwd=$('#password').val();									
									$.post("/tpvideo/index.php/home/user/regist.html",{ email:reg_email,name:reg_name,password:reg_passwd },function(data){
										alert(data['status']);
										
									
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
								<input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]1\d9" title="Enter a valid mobile number" />
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
								<form action="/tpvideo/index.php/home/user/login.html" method="post">
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
									$.post("/tpvideo/index.php/home/user/resetpw.html",{ email:reg_email },function(data){
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
					<div class="clearfix"> </div>


		

	</nav>

	<!-- 导航 666-->
	
		<div class="wrapper">
			<div class="navmai">
				<nav class="nav">
					<ul class="nav-list">
                        <li class="nav-item"><span><a href="/tpvideo/index.php/home/index/index.html" ><i class="icon-home"></i>主页</a></span></li>
                        <li class="nav-item"><a id="movies" href="/tpvideo/index.php/home/video/movie_show.html">电影</a></li>
                        <li class="nav-item"><a id="zongyi" href="/tpvideo/index.php/home/video/variety_show.html">综艺</a></li>
                        <li class="nav-item"><a id="dianshiju" href="/tpvideo/index.php/home/video/tv_show.html">电视剧</a></li>
                        <li class="nav-item"><a id="dongman" href="/tpvideo/index.php/home/video/carton_show.html">动画</a></li>
                        <li class="nav-item"><a id="game" href="/tpvideo/index.php/home/video/game_show.html">游戏</a></li>
                        <li class="nav-item"><a id="music" href=/tpvideo/index.php/home/video/yinyue.html>音乐</a></li>
                    </ul>
				</nav>
			</div>
		</div>
		
		
		

<script type="text/javascript" src="/TPvideo/Template/default/Home/Public/js/headroom.min.js"></script>
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
					  <a href='/tpvideo/index.php/home/video/tv_show/order/8.html'>电视剧2</a>
					</li>          
			     						<li>
					  <a href='/tpvideo/index.php/home/video/tv_show/order/9.html'>电视剧3</a>
					</li>          
			     					</ul>
			</div>		
			
			
			  
			<div class="filter-list fn-clear">
			  <h5><i class="iconfont m-r-3 f-s-16">󰁣</i>按年代：</h5>
				<ul>			    
			  
				<li>
					<a href="">2016</a>
				  </li>
				<li>
					<a href="">2015</a>
				  </li>
				<li>
					<a href="">2014</a>
				  </li>
				<li>
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
					<li id="view-list"><a class="current"><i class="iconfont m-r-3 f-s-14">󰅙</i>选择排序方式</a></li>
				</ul>
				<div class="view-filter">
					<a id="time" href='/tpvideo/index.php/home/video/tv_show/sequence/publishedTime.html' class="order" target="_self"><span>按时间</span></a>
					<a id="hits" href='/tpvideo/index.php/home/video/tv_show/sequence/numOfViewed.html' class="order" target="_self"><span>按人气</span></a>
				</div>
			</div>
		</div>
		<script>
					var index=window.location.href.split("/").length-1;
					var href=window.location.href.split("/")[index];
					if(href=== 'numOfViewed.html'){
						$('#hits').addClass('current');
					}else if(href === 'publishedTime.html'){
						$('#time').addClass('current');
					}
			</script>
		<section class="clearfix channellist-box">
			<div class="hello-box">

				<div class="module-content">
					<ul class="yun-list clearfix" id="yun-list">
							
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="" title="电视剧3-2">
								<div class="img">
									<img class="lazy"  src="/TPvideo/Upload/images/2017-06-08/mid_59391dae7558d.jpg" alt="电视剧3-2" style="display: block;">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清</p>
									<p class="other">剧情：电视剧2-1</p>
									</span>
								</div>
								<div class="text">
									<p class="name">电视剧3-2</p><p class="actor">发布时间:2017-06-08</p>
								</div>
							</a>
						</li>
                    		
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="" title="电视剧3-1">
								<div class="img">
									<img class="lazy"  src="/TPvideo/Upload/images/2017-06-08/mid_59391d9a3e609.jpg" alt="电视剧3-1" style="display: block;">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清</p>
									<p class="other">剧情：电视剧2-1</p>
									</span>
								</div>
								<div class="text">
									<p class="name">电视剧3-1</p><p class="actor">发布时间:2017-06-08</p>
								</div>
							</a>
						</li>
                    		
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="" title="电视剧2-2">
								<div class="img">
									<img class="lazy"  src="/TPvideo/Upload/images/2017-06-08/mid_59391d8803c5d.jpg" alt="电视剧2-2" style="display: block;">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清</p>
									<p class="other">剧情：电视剧2-1</p>
									</span>
								</div>
								<div class="text">
									<p class="name">电视剧2-2</p><p class="actor">发布时间:2017-06-08</p>
								</div>
							</a>
						</li>
                    		
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="" title="电视剧2-1">
								<div class="img">
									<img class="lazy"  src="/TPvideo/Upload/images/2017-06-08/mid_59391d7758bed.jpg" alt="电视剧2-1" style="display: block;">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清</p>
									<p class="other">剧情：电视剧2-1</p>
									</span>
								</div>
								<div class="text">
									<p class="name">电视剧2-1</p><p class="actor">发布时间:2017-06-08</p>
								</div>
							</a>
						</li>
                    		
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="" title="mid6">
								<div class="img">
									<img class="lazy"  src="/TPvideo/Upload/images/2017-06-06/mid_5935f8c5c16e0.jpg" alt="mid6" style="display: block;">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清</p>
									<p class="other">剧情：123</p>
									</span>
								</div>
								<div class="text">
									<p class="name">mid6</p><p class="actor">发布时间:2017-06-06</p>
								</div>
							</a>
						</li>
                    		
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="" title="爱十分爱人">
								<div class="img">
									<img class="lazy"  src="/TPvideo/Upload/" alt="爱十分爱人" style="display: block;">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清</p>
									<p class="other">剧情：打发大沙发</p>
									</span>
								</div>
								<div class="text">
									<p class="name">爱十分爱人</p><p class="actor">发布时间:</p>
								</div>
							</a>
						</li>
                    		
						<li class="yun yun-large border-gray">
							<a class="yun-link" href="" title="速度与激情4">
								<div class="img">
									<img class="lazy"  src="/TPvideo/Upload/" alt="速度与激情4" style="display: block;">
									
									<span class="bgb">
									<i class="bgbbg"></i>
									<p class="name">HD高清</p>
									<p class="other">剧情：激4</p>
									</span>
								</div>
								<div class="text">
									<p class="name">速度与激情4</p><p class="actor">发布时间:2017/4/4</p>
								</div>
							</a>
						</li>
                    					</ul>
				</div>
			</div>	
		</section>
		<div class="page clearfix">
			<tr> 
				<td colspan="12"><div class="page"><a class="first" href="/tpvideo/index.php/home/video/tv_show/p/1.html">首页</a> <a class="prev not-allowed" href="javascript:;">上一页</a> <span class="current">1</span> <a class="next not-allowed" href="javascript:;">下一页</a> <a class="end" href="/tpvideo/index.php/home/video/tv_show/p/1.html">末页</a> <span class="rows">共 7 条记录</span></div> </td>
			</tr>
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
			            <li><span>1323</span>
				<em class="">1</em>
				<a href="">G1</a>
            </li>						
			            <li><span>1232</span>
				<em class="">2</em>
				<a href="">卡通2-1</a>
            </li>						
			            <li><span>1231</span>
				<em class="">3</em>
				<a href="">G4</a>
            </li>						
			            <li><span>1023</span>
				<em class="">4</em>
				<a href="">速度与激情4</a>
            </li>						
			            <li><span>655</span>
				<em class="">5</em>
				<a href="">mid11</a>
            </li>						
			            <li><span>564</span>
				<em class="">6</em>
				<a href="">电视剧2-2</a>
            </li>						
			            <li><span>334</span>
				<em class="">7</em>
				<a href="">电视剧2-1</a>
            </li>						
			            <li><span>333</span>
				<em class="">8</em>
				<a href="">mid6</a>
            </li>						
			            <li><span>123</span>
				<em class="">9</em>
				<a href="">爱十分爱人</a>
            </li>						
			            <li><span>123</span>
				<em class="">10</em>
				<a href="">卡通1-2</a>
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