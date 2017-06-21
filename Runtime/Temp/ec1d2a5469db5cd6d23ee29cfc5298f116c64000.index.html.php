<?php /*%%SmartyHeaderCode:32255594007c39b1d64-17109015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec1d2a5469db5cd6d23ee29cfc5298f116c64000' => 
    array (
      0 => './Template/default/Home\\Index\\index.html',
      1 => 1497368052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32255594007c39b1d64-17109015',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'film_list' => 0,
    'variety_list' => 0,
    'k' => 0,
    'TV_list' => 0,
    'carton_list' => 0,
    'game_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_594007c483b0a',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594007c483b0a')) {function content_594007c483b0a($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<title>唏里唏里XiliXili</title>
<!--网站标签-->
<link type="image/x-icon" href="/TPvideo/Template/default/Home/Public/images/favicon.ico" rel="icon"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--上面导航栏-->
	
	<!-- //左侧快速到达 -->

	<script src="/TPvideo/Template/default/Home/Public/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="/TPvideo/Template/default/Home/Public/js/bootstrap.min.js"></script>
	<script src="/TPvideo/Template/default/Home/Public/js/lrtk.js"></script>
	<script src="/TPvideo/Template/default/Home/Public/js/jquery.SuperSlide.js"></script> 
	<script src="/TPvideo/Template/default/Home/Public/js/layer.js"></script>
	<link href="/TPvideo/Template/default/Home/Public/css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
	<link href="/TPvideo/Template/default/Home/Public/css/dashboard.css" type='text/css' rel="stylesheet">
	<link href="/TPvideo/Template/default/Home/Public/css/style.css" rel='stylesheet' type='text/css' media="all" />

	<link href="/TPvideo/Template/default/Home/Public/css/demo.css" rel="stylesheet">

	<link href="/TPvideo/Template/default/Home/Public/css/share.css" rel="stylesheet" type="text/css" />
	<link href="/TPvideo/Template/default/Home/Public/css/lanrenzhijia.css" type="text/css" rel="stylesheet" />

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
							

			<div style="float:right;margin-top:5px">
				<h3><span class="label label-info" style="">马家隆</span>
				<a href="/tpvideo/index.php/home/user/logout.html"><button  type="button" class="btn btn-danger">退出</button></a>
				</h3>
				
			</div>
				
			</div>
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
	<div class="clearfix"> </div>
	<!-- //导航 -->
	<div class="foucebox">
  <div class="bd">
  		    <div class="showDiv"> <a href="">
		  <img src="/TPvideo/Upload/images/2017-06-12/593e15a5b6674.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2 style="bottom: 60px;"><a href="">G1</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
		    <div class="showDiv"> <a href="">
		  <img src="/TPvideo/Upload/images/2017-06-12/593e15ded76d8.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2 style="bottom: 60px;"><a href="">G4</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
		    <div class="showDiv"> <a href="">
		  <img src="/TPvideo/Upload/images/2017-06-06/59360a22180b7.PNG"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2 style="bottom: 60px;"><a href="">mid11</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
		    <div class="showDiv"> <a href="">
		  <img src="/TPvideo/Upload/images/2017-06-06/5935f8c5c16e0.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2 style="bottom: 60px;"><a href="">mid6</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
		    <div class="showDiv"> <a href="">
		  <img src="/TPvideo/Upload/images/2017-05-07/590ed004ba8e2.png"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2 style="bottom: 60px;"><a href="">爱十分爱人</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
		    <div class="showDiv"> <a href="">
		  <img src="/TPvideo/Upload/images/2017-06-08/5939225b02b53.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2 style="bottom: 60px;"><a href="">卡通3-1</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
		    <div class="showDiv"> <a href="">
		  <img src="/TPvideo/Upload/images/2017-06-06/59360f412f3c6.JPG"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2 style="bottom: 60px;"><a href="">mid12</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
		    <div class="showDiv"> <a href="">
		  <img src="/TPvideo/Upload/images/2017-06-08/59391d9a3e609.jpg"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2 style="bottom: 60px;"><a href="">电视剧3-1</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
	  </div>
  <div class="hd">
    <ul>
          <li class="on"><a href="#"><img src="/TPvideo/Upload/images/2017-06-12/mid_593e15a5b6674.jpg"><span class="txt">G1</span><span class="txt_bg"></span><span class="mask"></span></a></li>
          <li class="on"><a href="#"><img src="/TPvideo/Upload/images/2017-06-12/mid_593e15ded76d8.jpg"><span class="txt">G4</span><span class="txt_bg"></span><span class="mask"></span></a></li>
          <li class="on"><a href="#"><img src="/TPvideo/Upload/images/2017-06-06/mid_59360a22180b7.PNG"><span class="txt">mid11</span><span class="txt_bg"></span><span class="mask"></span></a></li>
          <li class="on"><a href="#"><img src="/TPvideo/Upload/images/2017-06-06/mid_5935f8c5c16e0.jpg"><span class="txt">mid6</span><span class="txt_bg"></span><span class="mask"></span></a></li>
          <li class="on"><a href="#"><img src="/TPvideo/Upload/"><span class="txt">爱十分爱人</span><span class="txt_bg"></span><span class="mask"></span></a></li>
          <li class="on"><a href="#"><img src="/TPvideo/Upload/images/2017-06-08/mid_5939225b02b53.jpg"><span class="txt">卡通3-1</span><span class="txt_bg"></span><span class="mask"></span></a></li>
          <li class="on"><a href="#"><img src="/TPvideo/Upload/images/2017-06-06/mid_59360f412f3c6.JPG"><span class="txt">mid12</span><span class="txt_bg"></span><span class="mask"></span></a></li>
          <li class="on"><a href="#"><img src="/TPvideo/Upload/images/2017-06-08/mid_59391d9a3e609.jpg"><span class="txt">电视剧3-1</span><span class="txt_bg"></span><span class="mask"></span></a></li>
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
						<a href="#" style='font-size:20px;color:black'><img src="/TPvideo/Template/default/Home/Public/images/fenge.png"/>&nbsp;电影</a>
						<a href="/tpvideo/index.php/home/film/movies.html" style='font-size:15px;'>>>更多</a>
						</div>						
					</div>
										<div class="col-md-3 resent-grid recommended-grid slider-top-grids">
						
						<div class="resent-grid-img recommended-grid-img">
							<a href='/tpvideo/index.php/home/player/play/video_id/54.html'><img src="/TPvideo/Upload/images/2017-06-07/mid_5937b7ca40375.jpg" alt="" /></a>
							<div class="time">
								<p>2017-06-07</p>
							</div>
							<div class="clck">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</div>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="#" class="title title-info">123</a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author">123</a></p></li>
								<li class="right-list"><p class="views views-info">24</li>
							</ul>
						</div>

					</div>						<div class="col-md-3 resent-grid recommended-grid slider-top-grids">
						
						<div class="resent-grid-img recommended-grid-img">
							<a href='/tpvideo/index.php/home/player/play/video_id/42.html'><img src="/TPvideo/Upload/images/2017-06-06/mid_593610c80b6f1.JPG" alt="" /></a>
							<div class="time">
								<p>2017-06-06</p>
							</div>
							<div class="clck">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</div>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="#" class="title title-info">123</a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author">123</a></p></li>
								<li class="right-list"><p class="views views-info">0</li>
							</ul>
						</div>

					</div>						<div class="col-md-3 resent-grid recommended-grid slider-top-grids">
						
						<div class="resent-grid-img recommended-grid-img">
							<a href='/tpvideo/index.php/home/player/play/video_id/41.html'><img src="/TPvideo/Upload/images/2017-06-06/mid_59360f412f3c6.JPG" alt="" /></a>
							<div class="time">
								<p>2017-06-06</p>
							</div>
							<div class="clck">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</div>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="#" class="title title-info">123</a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author">123</a></p></li>
								<li class="right-list"><p class="views views-info">77</li>
							</ul>
						</div>

					</div>						<div class="col-md-3 resent-grid recommended-grid slider-top-grids">
						
						<div class="resent-grid-img recommended-grid-img">
							<a href='/tpvideo/index.php/home/player/play/video_id/40.html'><img src="/TPvideo/Upload/images/2017-06-06/mid_59360ef0a2140.JPG" alt="" /></a>
							<div class="time">
								<p>2017-06-06</p>
							</div>
							<div class="clck">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</div>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="#" class="title title-info">123</a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author">123</a></p></li>
								<li class="right-list"><p class="views views-info">7</li>
							</ul>
						</div>

					</div>						<div class="clearfix"> </div>
				</div>

				<div class="recommended-zongyi">
				
					<div class="recommended-grids">
						<div class ="recommended-info">
						<div style ='width:200px;height:50px;'>
						<a href    ="#" style='font-size:20px;color:black'><img src="/TPvideo/Template/default/Home/Public/images/fenge.png"/>&nbsp;综艺</a>
						<a href    ="/tpvideo/index.php/home/video/variety_show.html" style='font-size:15px;'>>>更多</a>
						</div>		
						</div>
																			<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_59390c98725fa.jpg" alt="" /></a>
								<div class="time small-time">
									<p></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">综艺2-2</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">0</a></p></li>
									<li class="right-list"><p class="views views-info">0 Views</p></li>
								</ul>
							</div>
						</div>

																		<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_59390c842202f.jpg" alt="" /></a>
								<div class="time small-time">
									<p></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">综艺1-2</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">0</a></p></li>
									<li class="right-list"><p class="views views-info">0 Views</p></li>
								</ul>
							</div>
						</div>

																		<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_59390c6db7d87.jpg" alt="" /></a>
								<div class="time small-time">
									<p></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">123</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">123</a></p></li>
									<li class="right-list"><p class="views views-info">0 Views</p></li>
								</ul>
							</div>
						</div>

																		<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_59390c5a0da60.jpg" alt="" /></a>
								<div class="time small-time">
									<p></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">123</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">123</a></p></li>
									<li class="right-list"><p class="views views-info">0 Views</p></li>
								</ul>
							</div>
						</div>

																				<div class="clearfix"> </div>
								<div style=" height:20px;">
  								</div> 
													<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_59390bff89df9.jpg" alt="" /></a>
								<div class="time small-time">
									<p></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">123</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">123</a></p></li>
									<li class="right-list"><p class="views views-info">0 Views</p></li>
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
							<a href="#" style='font-size:20px;color:black'><img src="/TPvideo/Template/default/Home/Public/images/fenge.png"/>&nbsp;电视剧</a>
							<a href="/tpvideo/index.php/home/video/tv_show.html" style='font-size:15px;'>>>更多</a>
						</div>
						</div>
																			<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_59391dae7558d.jpg" alt="" /></a>
								<div class="time small-time">
									<p></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">电视剧2-1</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">2313</a></p></li>
									<li class="right-list"><p class="views views-info">0views</p></li>
								</ul>
							</div>
						</div>
																			<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_59391d9a3e609.jpg" alt="" /></a>
								<div class="time small-time">
									<p></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">电视剧2-1</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">123</a></p></li>
									<li class="right-list"><p class="views views-info">46views</p></li>
								</ul>
							</div>
						</div>
																			<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_59391d8803c5d.jpg" alt="" /></a>
								<div class="time small-time">
									<p></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">电视剧2-1</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">123</a></p></li>
									<li class="right-list"><p class="views views-info">564views</p></li>
								</ul>
							</div>
						</div>
																			<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_59391d7758bed.jpg" alt="" /></a>
								<div class="time small-time">
									<p></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">电视剧2-1</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">123</a></p></li>
									<li class="right-list"><p class="views views-info">334views</p></li>
								</ul>
							</div>
						</div>
																					<div class="clearfix"> </div>
								<div style=" height:20px;">
  								</div> 
													<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-06/mid_5935f8c5c16e0.jpg" alt="" /></a>
								<div class="time small-time">
									<p></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">123</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">1</a></p></li>
									<li class="right-list"><p class="views views-info">333views</p></li>
								</ul>
							</div>
						</div>
																			<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="/TPvideo/Upload/" alt="" /></a>
								<div class="time small-time">
									<p></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">打发大沙发</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">142011059</a></p></li>
									<li class="right-list"><p class="views views-info">123views</p></li>
								</ul>
							</div>
						</div>
																			<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="/TPvideo/Upload/" alt="" /></a>
								<div class="time small-time">
									<p></p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title">激4</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">142011058</a></p></li>
									<li class="right-list"><p class="views views-info">1023views</p></li>
								</ul>
							</div>
						</div>
												<div class="clearfix"> </div>
					
					
			    </div>
			
				<div class="recommended-donghua">
					<div class="recommended-grids">
						<div class="recommended-info">
							<div style='width:200px;height:50px;'>
							<a href="#" style='font-size:20px;color:black'><img src="/TPvideo/Template/default/Home/Public/images/fenge.png"/>&nbsp;动画</a>
							<a href="/tpvideo/index.php/home/video/carton_show.html" style='font-size:15px;'>>>更多</a>
						</div>
						</div>						
							<div class="animated-grids">
															<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_5939228dd4a58.jpg" alt="" /></a>
										<div class="time small-time slider-time">
											<p></p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title">卡通3-2</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author">0</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info">33 Views</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
															<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_593922768b52b.jpg" alt="" /></a>
										<div class="time small-time slider-time">
											<p></p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title">卡通3-2</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author">0</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info">11 Views</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
															<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_5939224a626c5.jpg" alt="" /></a>
										<div class="time small-time slider-time">
											<p></p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title">卡通2-1</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author">0</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info">1232 Views</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
															<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href="single.html"><img src="/TPvideo/Upload/images/2017-06-08/mid_5939223835fad.jpg" alt="" /></a>
										<div class="time small-time slider-time">
											<p></p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title">卡通1-2</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author">0</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info">123 Views</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
															<div class="clearfix"> </div>
							}
							</div>													
					</div>
              <div class="recommended-youxi">
					<div class="recommended-grids">
						<div class="recommended-info">
							<div style='width:200px;height:50px;'>
							<a href="#" style='font-size:20px;color:black'><img src="/TPvideo/Template/default/Home/Public/images/fenge.png"/>&nbsp;游戏</a>
							<a href="/tpvideo/index.php/home/video/game_show.html" style='font-size:15px;'>>>更多</a>
						</div>
						</div>						
							<div class="animated-grids">
															<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href=""><img src="/TPvideo/Upload/images/2017-06-12/mid_593e15ded76d8.jpg" alt="" /></a>
										<div class="time small-time slider-time">
											<p>2017-06-12</p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title">G4</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author">123</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info">1231views</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
																<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href=""><img src="/TPvideo/Upload/images/2017-06-12/mid_593e15cd8ac52.jpg" alt="" /></a>
										<div class="time small-time slider-time">
											<p>2017-06-12</p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title">G3</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author">123</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info">22views</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
																<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href=""><img src="/TPvideo/Upload/images/2017-06-12/mid_593e15be8762f.jpg" alt="" /></a>
										<div class="time small-time slider-time">
											<p>2017-06-12</p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title">G2</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author">123</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info">11views</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
																<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href=""><img src="/TPvideo/Upload/images/2017-06-12/mid_593e15a5b6674.jpg" alt="" /></a>
										<div class="time small-time slider-time">
											<p>2017-06-12</p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title">G1</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author">123</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info">1323views</p>
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
							<a href="#" style='font-size:20px;color:black'><img src="/TPvideo/Template/default/Home/Public/images/fenge.png"/>&nbsp;音乐</a>
							<a href="/tpvideo/index.php/home/video/yinyue.html" style='font-size:15px;'>>>更多</a>
						</div>
						</div>						
							<div class="animated-grids">
								<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href="single.html"><img src="/TPvideo/Template/default/Home/Public/images/c.jpg" alt="" /></a>
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