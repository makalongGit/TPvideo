<?php /* Smarty version Smarty-3.1.6, created on 2017-06-20 19:00:30
         compiled from "./Template/default/Home\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:65175935759a84a156-21758724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec1d2a5469db5cd6d23ee29cfc5298f116c64000' => 
    array (
      0 => './Template/default/Home\\Index\\index.html',
      1 => 1497956238,
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
        <h3><a href="<?php echo U('Home/User/userinfo');?>
"><span class="label label-info" style=""><?php echo $_SESSION['user_name'];?>
</span></a>
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
                        <li class="nav-item"><a id="music" href=<?php echo U('Home/Video/yinyue');?>
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
  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	    <div class="showDiv"> <a href="">
		  <img src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['ori_img'];?>
"></a>
	      <div class="foucebox_bg"></div>
	      <div>
	        <h2 style="bottom: 60px;"><a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
</a></h2>
	        <p style="bottom: 10px;">xilixili--xilixili</p>
	      </div>
	    </div>
	<?php } ?>
  </div>
  <div class="hd">
    <ul>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <li class="on"><a href="#"><img src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['mid_img'];?>
"><span class="txt"><?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
</span><span class="txt_bg"></span><span class="mask"></span></a></li>
    <?php } ?>
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
							<a href='<?php echo U("Home/Player/play?video_id=".($_smarty_tpl->tpl_vars['v']->value['vid']));?>
'><img src="<?php echo @__UPLOAD_IMG__;?>
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
						<a href    ="<?php echo U('Home/Video/variety_show');?>
" style='font-size:15px;'>>>更多</a>
						</div>		
						</div>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['variety_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['k']->value==4){?>
								<div class="clearfix"> </div>
								<div style=" height:20px;">
  								</div> 
							<?php }?>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['mid_img'];?>
" alt="" /></a>
								<div class="time small-time">
									<p><?php echo $_smarty_tpl->tpl_vars['v']->value['publishedTime'];?>
</p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['introduction'];?>
</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</a></p></li>
									<li class="right-list"><p class="views views-info"><?php echo $_smarty_tpl->tpl_vars['v']->value['numofviewed'];?>
 Views</p></li>
								</ul>
							</div>
						</div>

					<?php } ?>
					<div class="clearfix"> </div>	
					</div>
					
					
				</div>
				
			    <div class="recommended-dianshiju">

					<div class="recommended-grids">
						<div class="recommended-info">
							<div style='width:200px;height:50px;'>
							<a href="#" style='font-size:20px;color:black'><img src="<?php echo @__HOME_IMAGE__;?>
fenge.png"/>&nbsp;电视剧</a>
							<a href="<?php echo U('Home/Video/tv_show');?>
" style='font-size:15px;'>>>更多</a>
						</div>
						</div>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TV_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['k']->value==4){?>
								<div class="clearfix"> </div>
								<div style=" height:20px;">
  								</div> 
							<?php }?>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="single.html"><img src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['mid_img'];?>
" alt="" /></a>
								<div class="time small-time">
									<p><?php echo $_smarty_tpl->tpl_vars['v']->value['publishedTime'];?>
</p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="single.html" class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['introduction'];?>
</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</a></p></li>
									<li class="right-list"><p class="views views-info"><?php echo $_smarty_tpl->tpl_vars['v']->value['numofviewed'];?>
views</p></li>
								</ul>
							</div>
						</div>
						<?php } ?>
						<div class="clearfix"> </div>
					
					
			    </div>
			
				<div class="recommended-donghua">
					<div class="recommended-grids">
						<div class="recommended-info">
							<div style='width:200px;height:50px;'>
							<a href="#" style='font-size:20px;color:black'><img src="<?php echo @__HOME_IMAGE__;?>
fenge.png"/>&nbsp;动画</a>
							<a href="<?php echo U('Home/Video/carton_show');?>
" style='font-size:15px;'>>>更多</a>
						</div>
						</div>						
							<div class="animated-grids">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carton_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href="single.html"><img src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['mid_img'];?>
" alt="" /></a>
										<div class="time small-time slider-time">
											<p><?php echo $_smarty_tpl->tpl_vars['v']->value['publishedTime'];?>
</p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['introduction'];?>
</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info"><?php echo $_smarty_tpl->tpl_vars['v']->value['numofviewed'];?>
 Views</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
							<?php } ?>
								<div class="clearfix"> </div>
							}
							</div>													
					</div>
              <div class="recommended-youxi">
					<div class="recommended-grids">
						<div class="recommended-info">
							<div style='width:200px;height:50px;'>
							<a href="#" style='font-size:20px;color:black'><img src="<?php echo @__HOME_IMAGE__;?>
fenge.png"/>&nbsp;游戏</a>
							<a href="<?php echo U('Home/Video/game_show');?>
" style='font-size:15px;'>>>更多</a>
						</div>
						</div>						
							<div class="animated-grids">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['game_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<div class="col-md-3 resent-grid recommended-grid slider-first">
									<div class="resent-grid-img recommended-grid-img">
										<a href=""><img src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['mid_img'];?>
" alt="" /></a>
										<div class="time small-time slider-time">
											<p><?php echo $_smarty_tpl->tpl_vars['v']->value['publishedtime'];?>
</p>
										</div>
										<div class="clck small-clck">
											<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										</div>
									</div>
									<div class="resent-grid-info recommended-grid-info">
										<h5><a href="single.html" class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['introduction'];?>
</a></h5>
										<div class="slid-bottom-grids">
											<div class="slid-bottom-grid">
												<p class="author author-info"><a href="#" class="author"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</a></p>
											</div>
											<div class="slid-bottom-grid slid-bottom-right">
												<p class="views views-info"><?php echo $_smarty_tpl->tpl_vars['v']->value['numofviewed'];?>
views</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<?php } ?>
								<div class="clearfix"> </div>
							</div>													
					</div>
					<div class="recommended-yinyue">
					<div class="recommended-grids">
						<div class="recommended-info">
							<div style='width:200px;height:50px;'>
							<a href="#" style='font-size:20px;color:black'><img src="<?php echo @__HOME_IMAGE__;?>
fenge.png"/>&nbsp;音乐</a>
							<a href="<?php echo U('Home/Video/yinyue');?>
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