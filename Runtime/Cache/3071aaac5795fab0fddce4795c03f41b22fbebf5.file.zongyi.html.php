<?php /* Smarty version Smarty-3.1.6, created on 2017-06-08 17:31:06
         compiled from "./Template/default/Home\Variety\zongyi.html" */ ?>
<?php /*%%SmartyHeaderCode:32455937fca9aa9dc6-32617870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3071aaac5795fab0fddce4795c03f41b22fbebf5' => 
    array (
      0 => './Template/default/Home\\Variety\\zongyi.html',
      1 => 1496914264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32455937fca9aa9dc6-32617870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5937fcab631b5',
  'variables' => 
  array (
    '_SESSION' => 0,
    'cate_list' => 0,
    'v' => 0,
    'info' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937fcab631b5')) {function content_5937fcab631b5($_smarty_tpl) {?><!DOCTYPE html>

<html lang="zh-CN" class="ua-chrome ua-chrome45 screen-m"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script async="" src="<?php echo @__HOME_JS__;?>
beacon.js"></script>
<script src="<?php echo @__HOME_JS__;?>
hm.js"></script>
    <title>唏里唏里-综艺频道</title>
	<link type="image/x-icon" href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="icon"/>
	<link href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="shortcut icon"/>
    <meta name="keywords" content="唏里唏里,综艺">
    <meta name="description" content="唏里唏里 综艺频道 为你提供最精彩的生活视频在线观看服务">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telphone=no,email=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="apple-mobile-web-app-title" content="唏里唏里">
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
    <meta name="msapplication-TileColor" content="#3399ff">
   
    <link rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
standard.css" type="text/css" data-merge="true">
    <link href="<?php echo @__HOME_CSS__;?>
page-list.css" type="text/css" rel="stylesheet">
    <script src="<?php echo @__HOME_JS__;?>
honey.hunantv.imgo.js"></script>
    
    
    
    <link rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
page-list(1).css" type="text/css">
    <script>window.PAGE_DATA = { version: "5.0", slider_data: [] };</script><script type="text/javascript" src="<?php echo @__HOME_JS__;?>
jquery.js"></script><script type="text/javascript" src="<?php echo @__HOME_JS__;?>
honey.header.v5.bundle.js"></script><link type="text/css" rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
member-dialog.css"><script type="text/javascript" src="<?php echo @__HOME_JS__;?>
feedback.js"></script><script type="text/javascript" src="<?php echo @__HOME_JS__;?>
gototop.js"></script><script type="text/javascript" src="<?php echo @__HOME_JS__;?>
stk.js"></script><script type="text/javascript" src="<?php echo @__HOME_JS__;?>
jquery.cookie.js"></script><script type="text/javascript" src="<?php echo @__HOME_JS__;?>
jquery.lazyload.js"></script>
</head>

<body style="margin-top: 0px;"><div style="display:block;position:absolute;right:0;bottom:0;border:none;"><object id="_6NGB1" data="http://irs01.net/MTFlashStore.swf#" type="application/x-shockwave-flash" width="10" height="10" style="position:absolute;right:0;bottom:0;"><param name="movie" value="http://irs01.net/MTFlashStore.swf#"><param name="wmode" value="transparent"><param name="version" value="10"><param name="allowScriptAccess" value="always"><param name="flashvars" value="jsproxyfunction=_6SAXM"></object></div>
<div class="list-container">
    <!--头部区域 START-->
<!-- 鼠标上滚时且不在第一屏时触发c-header-fix -->
<div class="c-header c-header-lv1 c-header-lv1-extend" id="honey-header">
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
</div>
<script>honey.go("lib:jquery, lib:honey.header.v5.bundle",function(){  });</script>    <!--头部区域 END-->

    <!--类别区域 START-->
<div class="m-catgory">
    <div class="wp">
        <div class="m-catgory-listbox">
            
        </div>
            <div class="m-catgory-listbox">
                <div class="m-category-meta">
                    <span class="u-meta">类型</span>
                    <span class="u-meta">|</span>
                </div>
                <ul class="m-catgory-list">
                            <li class="on">
                                <a href="<?php echo U('Home/Variety/zongyi');?>
">全部</a>
                            </li>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <li>
                                <a href='<?php echo U("Home/Variety/zongyi?order=".($_smarty_tpl->tpl_vars['v']->value['vt_id']));?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>
</a>
                            </li> 
                            <?php } ?>                          
                </ul>
            </div>
            <div class="m-catgory-listbox">
                <div class="m-category-meta">
                    <span class="u-meta">地区</span>
                    <span class="u-meta">|</span>
                </div>
                <ul class="m-catgory-list">
                            <li class="on">
                                <a href="./唏里唏里 - 综艺频道_files/唏里唏里 - 综艺频道.html">全部</a>
                            </li>
                            <li>
                                <a href="">内地</a>
                            </li>
                            <li>
                                <a href="">中国香港</a>
                            </li>
                            <li>
                                <a href="">中国台湾</a>
                            </li>
                            <li>
                                <a href="">日本</a>
                            </li>
                            <li>
                                <a href="">韩国</a>
                            </li>
                            <li>
                                <a href="">美国</a>
                            </li>
                            <li>
                                <a href="">新加坡</a>
                            </li>
                </ul>
            </div>
            <div class="m-catgory-listbox">
                <div class="m-category-meta">
                    <span class="u-meta">资费</span>
                    <span class="u-meta">|</span>
                </div>
                <ul class="m-catgory-list">
                            <li class="on">
                                <a href="./唏里唏里 - 综艺频道_files/唏里唏里 - 综艺频道.html">全部</a>
                            </li>
                            <li>
                                <a href="#">免费</a>
                            </li>
                            <li>
                                <a href="#">VIP免费</a>
                            </li>
                            <li>
                                <a href="#">VIP用券</a>
                            </li>
                </ul>
            </div>


    </div>
    <!-- 展开时变为"收起"，添加collapse-->
    <!--             <a class="m-catgory-toggle collapse" href="javascript:;">收起<i></i></a>
     -->
</div>    <!--类别区域 END-->

    <!--内容区域 START-->
    <div class="m-content">
        <div class="wp">
<!-- 筛选功能 -->
<div class="m-result">
    <div class="m-relative">
        <p class="u-count">共<b>854</b>个筛选结果</p>
    </div>
   

</div>

        <!-- 列表循环 -->
<div class="m-vlist v-list-v5 v-list">
    <ul class="v-list-inner">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li class="v-item-v5 v-item-x $0">
                <a class="u-video" href="" target="_blank">
                        <img class="u-image" src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['mid_img'];?>
" alt="名侦探俱乐部">
                    <em class="u-time">更新到 <?php echo $_smarty_tpl->tpl_vars['v']->value['publishedtime'];?>
 期</em>
                    <!-- 通过接口返回的颜色和文字，在i标签中插入文字，设置style的background:# -->
                </a>
                <a class="u-title" href="http://www.mgtv.com/b/309803/3899509.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
</a>
                    <span class="u-desc">
                                主持人：
                <a href="" target="_blank" title="何炅">何炅</a>  / 

                <a href="" target="_blank" title="撒贝宁">撒贝宁</a>  / 

                <a href="" target="_blank" title="乔振宇">乔振宇</a>  / 

                <a href="" target="_blank" title="白敬亭">白敬亭</a> 

                    </span>
        </li>
        <?php } ?>
    </ul>
</div>
    <tr> 
        <td colspan="12"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
 </td>
    </tr>

        </div>
    </div>
    

<div class="footer">
 <div class="footer"><p align="center">@Copyright Design By <a href="#" style="font-size:20px"><strong>弹幕组</strong></a></div>
</div>    



</body></html><?php }} ?>