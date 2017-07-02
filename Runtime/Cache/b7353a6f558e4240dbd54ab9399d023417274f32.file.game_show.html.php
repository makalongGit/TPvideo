<?php /* Smarty version Smarty-3.1.6, created on 2017-06-26 23:26:26
         compiled from "./Template/default/Home\Video\game_show.html" */ ?>
<?php /*%%SmartyHeaderCode:24010593fe0ed70b417-40128250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7353a6f558e4240dbd54ab9399d023417274f32' => 
    array (
      0 => './Template/default/Home\\Video\\game_show.html',
      1 => 1498490783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24010593fe0ed70b417-40128250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_593fe0ee40dcf',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
    'hot_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593fe0ee40dcf')) {function content_593fe0ee40dcf($_smarty_tpl) {?><!DOCTYPE html>
<!-- saved from url=(0040)http://my.tv.sohu.com/wm/ch/p128100.html -->
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>唏里唏里游戏频道-视频</title>
	 <link type="image/x-icon" href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="icon"/>
	<link href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="shortcut icon"/>
	<link type="text/css" rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
global201302.css">
<!--<link type="text/css" rel="stylesheet" href="http://css.tv.itc.cn/wemedia/channel/nav.css" />-->
<link type="text/css" rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
nav_v1.css">
<link type="text/css" rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
common.css">
<link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
page.css">
	<!-- bootstrap -->
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
style.css" rel='stylesheet' type='text/css' media="all" />

<!-- 导航 -->
    <link href="<?php echo @__HOME_CSS__;?>
demo.css" rel="stylesheet">
<!-- //导航 -->
<!--page
<link type="text/css" rel="stylesheet" href="http://css.tv.itc.cn/wemedia/space/main.css" />
<link type="text/css" rel="stylesheet" href="http://css.tv.itc.cn/wemedia/space/data.css" />
-->
<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
kao.js"></script>
<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
dict.js"></script>
<style>
.w1380 .lastvideo,.w1000 .lastvideo{ display:none; }
</style>
	
 



<style id="__corner">.G-later{ position:fixed;_position:absolute;bottom:10px;right:10px;z-index:900;_width:48px;display:none; }.G-later .l_btn_feed,.G-later .l_btn_top,.G-later .l_btn_survey,.G-later .sbtn-erwm{ display:block;background:url(//css.tv.itc.cn/watchlater/seeLater-imgs/later_btn.png) no-repeat;width:45px;height:44px;font-size:0;line-height:0;overflow:hidden;cursor:pointer}.G-later .l_btn_top{ background-position:-451px 0;margin-top:5px;}.G-later .l_btn_top:hover{ background-position:-524px 0}.G-later .l_btn_feed{ background-position:-310px 0;margin-bottom:5px;}.G-later .l_btn_feed:hover{ background-position:-383px 0;}.G-later .l_btn_pmall{ background:url(//css.tv.itc.cn/watchlater/seeLater-imgs/later_btn.png) no-repeat;background-position:0 0;margin-bottom:5px;width: 45px;height: 44px;text-indent: -400px;overflow: hidden;position: relative;cursor: pointer;display: block;margin: 0 0 5px;}.G-later .l_btn_pmall{ background-position:-383px -73px;}.G-later .l_btn_pmall:hover{ background-position:-451px -73px;}.G-later .iphone7-event{ background:url(//css.tv.itc.cn/watchlater/seeLater-imgs/iphone7.png) no-repeat;background-position:0 0;margin-bottom:5px;width: 45px;height: 44px;text-indent: -400px;overflow: hidden;position: relative;cursor: pointer;display: block;margin: 0 0 5px;}.G-later .iphone7-event:hover{ background:url(//css.tv.itc.cn/watchlater/seeLater-imgs/iphone7_hover.png)}.G-later .sbtn-feed,.G-later .sbtn-return,.G-later .sbtn-remark,.G-later .sbtn-fav,.G-later .sbtn-desktop{ background:url(//css.tv.itc.cn/channel/play_v1_img/ico.png) no-repeat;width:45px;height:44px;text-indent:-400px;overflow:hidden;position:relative;cursor:pointer;display:block;float:left;margin:0 0 5px;}.G-later .sbtn-return:hover{ background-position:-50px 0;}.G-later .sbtn-feed{ background-position:0 -50px;}.G-later .sbtn-feed:hover{ background-position:-50px -50px; }.G-later .sbtn-remark{ background-position:-99px 0;}.G-later .sbtn-remark:hover{ background-position:-148px 0;}.G-later .sbtn-fav{ background-position:-99px -50px; }.G-later .sbtn-fav:hover{ background-position:-148px -50px;}.G-later .sbtn-erwm{ background-position:0 -141px; }.G-later .sbtn-erwm:hover{ background-position:-73px -141px; }.G-later .sbtn-desktop{ background-position:0 -213px; }.G-later .sbtn-desktop:hover{ background-position:-50px -213px; }.G-later .sbox-erwm-par { position:relative; }.G-later .sbox-erwm{ display:none;background:url(//css.tv.itc.cn/channel/play_v1_img/erwm-png24.png) no-repeat;width:137px;height:124px;position:absolute;top:-46px;right:48px;z-index:89;padding:18px 5px 0 0;text-align:center; }.G-later .sbox-erwm img{ margin:0 0 4px; }.G-later .codewrap{ height:49px; _height:44px; _margin-bottom:5px; }.G-later .sbox-erwm-par{ width:45px; }.forDrag{ width:350px;height:25px;position:absolute;line-height:25px;top:3px;left:2px;color:#FFF }.forCIframe{ position:absolute; }.G-later .qinming{ background:url(//css.tv.itc.cn/watchlater/seeLater-imgs/qinming.jpg) no-repeat;background-position:0 0;margin-bottom:5px;width: 45px;height: 44px;text-indent: -400px;overflow: hidden;position: relative;cursor: pointer;display: block;margin: 0 0 5px; }.G-later .qinming:hover{ background:url(//css.tv.itc.cn/watchlater/seeLater-imgs/qinming_hover.jpg) }.G-later .zhoubian{ background:url(//css.tv.itc.cn/watchlater/seeLater-imgs/zhoubian.jpg) no-repeat;background-position:0 0;margin-bottom:5px;width: 45px;height: 44px;text-indent: -400px;overflow: hidden;position: relative;cursor: pointer;display: block;margin: 0 0 5px;}.G-later .zhoubian:hover{ background:url(//css.tv.itc.cn/watchlater/seeLater-imgs/zhoubian_hover.jpg) }</style></head>

<body class="w1000" style="cursor: default;"><div style="display:block;clear:both;float:none;position:absolute;right:0;bottom:0;border:none;"><object id="MTJ2QZEJTT4L6Q8W" data="http://irs01.net/MTFlashStore.swf#" type="application/x-shockwave-flash" width="10" height="10" style="position:absolute;right:0;bottom:0;border:none;"><param name="movie" value="//irs01.net/MTFlashStore.swf#"><param name="wmode" value="transparent"><param name="version" value="10"><param name="allowScriptAccess" value="always"><param name="flashvars" value="jsproxyfunction=MTJ2QZEJPP227TXV"></object></div><div style="display:block;clear:both;float:none;position:absolute;right:0;bottom:0;border:none;"><object name="TTJ2QZEJP56HJWN5" id="TTJ2QZEJP56HJWN5" data="http://tv.sohu.com/upload/swf/playerGetUID131031.swf" type="application/x-shockwave-flash" width="1" height="1" style="position:absolute;right:0;bottom:0;border:none;"><param name="movie" value="//tv.sohu.com/upload/swf/playerGetUID131031.swf"><param name="wmode" value="transparent"><param name="version" value="10"><param name="allowScriptAccess" value="always"><param name="flashvars"></object></div>

	<!--BEGIN:TOP-->
	


		<div id="hd_nav">
<!-- Start:navwrap -->

  
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
          <!-- <div class="file">
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
				<nav class="nav" style="margin-top: 30px">
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
                        <li class="nav-item"><a class="on" id="game" href="<?php echo U('Home/Video/game_show');?>
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
   
	</div>
    
 
	<!--begin:main-->
    <div class="mod">
	    <div class="rowL">
	        <div class="pg-tab cfix">
	        	<span class="cur"><a href='<?php echo U("Home/Video/game_show?sequence=numofviewed");?>
' npb-txid="wm-2_wm-2-zshy-tag-bt_11">本周主打</a></span>         
	            <span><a href='<?php echo U("Home/Video/game_show?sequence=publishedtime");?>
' npb-txid="wm-2_wm-2-zxfb-tag-bt_11">最新发布</a></span>
	        </div>
	        <div class="pg-cont">
	            <div class="">
	                <ul class="col3 cfix" npb-txid="wm-2_wm-2-yx-tag2-zshy_14">
	                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<li>
	                        <p class="r-pic"><a target="_blank"><img src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['mid_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
"></a></p>
	                        <div class="r-neck">
	                            <a target="_blank" class="useravatar" href='<?php echo U("Home/Player/play?video_id=".($_smarty_tpl->tpl_vars['v']->value['vid']));?>
'></a>
	                            <a target="_blank" class="username"  href='<?php echo U("Home/Player/play?video_id=".($_smarty_tpl->tpl_vars['v']->value['vid']));?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</a>
	                        </div>
	                        <h3><a title="" href='<?php echo U("Home/Player/play?video_id=".($_smarty_tpl->tpl_vars['v']->value['vid']));?>
' target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['introduction'];?>
</a></h3>
	                        <p>
	                           <a title="" href="" target="_blank">
	                        	<span rel="87322823" class="bcount" id="bvid87322823"><?php echo $_smarty_tpl->tpl_vars['v']->value['numofviewed'];?>
 Views</span>
	                           </a>
	                        </p>
	                        	
	                    </li>
	                <?php } ?>
	                </ul>
	            </div>
	             
	 					<div class="wpg">
				           <tr> 
						<td colspan="12"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
 </td>
							</tr>

				        </div>
	                  
			    
	 			    
	        </div>
	    </div>
	    <div class="rowR li21">
	        <div class="rtit">
	            <h3 class="rtit-h3">热播榜</h3>
	            <ul class="r tm-tab">
	                <li class="bgn ton">日</li>
	                <li class="">周</li>
	                <li class="">月</li>
	            </ul>
	        </div>
	        <div class="tm-cont">
	            <!--start:日-->
	            <ul class="col4" npb-txid="wm-2_wm-2-yx-rbb-rb_14" style="display: block;">
	            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hot_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<li class="cfix">
	                    <a class="r-pic3" target="_blank" href='<?php echo U("Home/Player/play?video_id=".($_smarty_tpl->tpl_vars['v']->value['vid']));?>
'>
	                        <span class="num nm1">1</span>
	                        <img alt="" src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['mid_img'];?>
">
	                    </a>
	                    <div class="r-txt">
	                        <h3><a target="_blank" href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
</a></h3>
	                        <p><a title="<?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
" href="" target="_blank">
	                        <span rel="89208710" class="bcount" id="bvid89208710"><?php echo $_smarty_tpl->tpl_vars['v']->value['numofviwed'];?>
</span></a></p>                    
	                    </div>
	                </li>
	            <?php } ?>
	            </ul>
	            
	            
	        </div>
	        
	        
	        
	    </div>
	</div> 


<div class="footer"><p align="center">@Copyright Design By <a href="#" style="font-size:20px"><strong>弹幕组</strong></a></div>
   
</body></html><?php }} ?>