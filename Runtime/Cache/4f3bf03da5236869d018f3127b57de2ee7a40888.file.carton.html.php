<?php /* Smarty version Smarty-3.1.6, created on 2017-06-01 10:40:30
         compiled from "./Template/default/Home\Carton\carton.html" */ ?>
<?php /*%%SmartyHeaderCode:24251592ecd475e03b0-19116175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f3bf03da5236869d018f3127b57de2ee7a40888' => 
    array (
      0 => './Template/default/Home\\Carton\\carton.html',
      1 => 1496284827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24251592ecd475e03b0-19116175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_592ecd486b367',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592ecd486b367')) {function content_592ecd486b367($_smarty_tpl) {?><!DOCTYPE html>
<html class="h-category-v2 "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
 <link type="image/x-icon" href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="icon"/>
<link href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="shortcut icon"/>


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
	
<!-- //导航 -->
<title>唏里唏里动画_卡通动漫</title>
<script async="" src="<?php echo @__HOME_JS__;?>
element.min.js"></script><script async="" src="<?php echo @__HOME_JS__;?>
monkey.min.js"></script><script>window.product = 'video';</script>
<link rel="stylesheet" type="text/css" href="<?php echo @__HOME_CSS__;?>
common_ui_5dd938cf.css"><link rel="stylesheet" type="text/css" href="<?php echo @__HOME_CSS__;?>
category_d1f1d577.css"><link rel="stylesheet" type="text/css" href="<?php echo @__HOME_CSS__;?>
common_ui_video_d3b07667.css"><script src="<?php echo @__HOME_JS__;?>
video.js"></script></head>
<body class="global-logged">


<script src="<?php echo @__HOME_JS__;?>
main_0d32686a.js"></script>

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

<div id="main">
<div id="bd-content" class="bd-content bd-subchannel-cartoon">
<div id="bd-filter" class="bd-filter">
<div class="bd-filter-content">
<div class="bd-filter-section">


</div>
<div class="bd-filter-sections" id="bd-filter-condition">
    
        
        <div class="bd-filter-section">
            <h3 class="bd-filter-title">类型：</h3>
            <div class="bd-filter-list filter-group" static="bl=type&amp;stp=type">
                
                    <a data-key="type" data-val="" class="filter-sel  filter-sel-active " title="全部">
                        <span>全部</span>
                    </a>
                
                    <a data-key="type" data-val="情感" class="filter-sel " title="情感">
                        <span>情感</span>
                    </a>
                
                    <a data-key="type" data-val="科幻" class="filter-sel " title="科幻">
                        <span>科幻</span>
                    </a>
                
                    <a data-key="type" data-val="热血" class="filter-sel " title="热血">
                        <span>热血</span>
                    </a>
                
                    <a data-key="type" data-val="推理" class="filter-sel " title="推理">
                        <span>推理</span>
                    </a>
                
                    <a data-key="type" data-val="搞笑" class="filter-sel " title="搞笑">
                        <span>搞笑</span>
                    </a>
                
                    <a data-key="type" data-val="冒险" class="filter-sel " title="冒险">
                        <span>冒险</span>
                    </a>
                
                    <a data-key="type" data-val="萝莉" class="filter-sel " title="萝莉">
                        <span>萝莉</span>
                    </a>
                
                    <a data-key="type" data-val="校园" class="filter-sel " title="校园">
                        <span>校园</span>
                    </a>
                
                    <a data-key="type" data-val="动作" class="filter-sel " title="动作">
                        <span>动作</span>
                    </a>
                
                    <a data-key="type" data-val="机战" class="filter-sel " title="机战">
                        <span>机战</span>
                    </a>
                
                    <a data-key="type" data-val="运动" class="filter-sel " title="运动">
                        <span>运动</span>
                    </a>
                
                    <a data-key="type" data-val="战争" class="filter-sel " title="战争">
                        <span>战争</span>
                    </a>
                
                    <a data-key="type" data-val="少年" class="filter-sel " title="少年">
                        <span>少年</span>
                    </a>
                
                    <a data-key="type" data-val="少女" class="filter-sel " title="少女">
                        <span>少女</span>
                    </a>
                
                    <a data-key="type" data-val="社会" class="filter-sel " title="社会">
                        <span>社会</span>
                    </a>
                
                    <a data-key="type" data-val="原创" class="filter-sel " title="原创">
                        <span>原创</span>
                    </a>
                
                    <a data-key="type" data-val="亲子" class="filter-sel " title="亲子">
                        <span>亲子</span>
                    </a>
                
                    <a data-key="type" data-val="益智" class="filter-sel " title="益智">
                        <span>益智</span>
                    </a>
                
                    <a data-key="type" data-val="励志" class="filter-sel " title="励志">
                        <span>励志</span>
                    </a>
                
                    <a data-key="type" data-val="其他" class="filter-sel " title="其他">
                        <span>其他</span>
                    </a>
                
            </div><span class="sp-filter-toggle">更多<i class="ic-ar"></i></span>
        </div>
        
    
        
        <div class="bd-filter-section">
            <h3 class="bd-filter-title">地区：</h3>
            <div class="bd-filter-list filter-group" static="bl=type&amp;stp=area">
                
                    <a data-key="area" data-val="" class="filter-sel  filter-sel-active " title="全部">
                        <span>全部</span>
                    </a>
                
                    <a data-key="area" data-val="日本" class="filter-sel " title="日本">
                        <span>日本</span>
                    </a>
                
                    <a data-key="area" data-val="欧美" class="filter-sel " title="欧美">
                        <span>欧美</span>
                    </a>
                
                    <a data-key="area" data-val="国产" class="filter-sel " title="国产">
                        <span>国产</span>
                    </a>
                
                    <a data-key="area" data-val="其他" class="filter-sel " title="其他">
                        <span>其他</span>
                    </a>
                
            </div>
        </div>
        
    
        
        <div class="bd-filter-section">
            <h3 class="bd-filter-title">日期：</h3>
            <div class="bd-filter-list filter-group" static="bl=type&amp;stp=start">
                
                    <a data-key="start" data-val="" class="filter-sel  filter-sel-active " title="全部">
                        <span>全部</span>
                    </a>
                
                    <a data-key="start" data-val="2017" class="filter-sel " title="2017">
                        <span>2017</span>
                    </a>
                
                    <a data-key="start" data-val="2016" class="filter-sel " title="2016">
                        <span>2016</span>
                    </a>
                
                    <a data-key="start" data-val="2015" class="filter-sel " title="2015">
                        <span>2015</span>
                    </a>
                
                    <a data-key="start" data-val="2014" class="filter-sel " title="2014">
                        <span>2014</span>
                    </a>
                
                    <a data-key="start" data-val="2013" class="filter-sel " title="2013">
                        <span>2013</span>
                    </a>
                
                    <a data-key="start" data-val="2012" class="filter-sel " title="2012">
                        <span>2012</span>
                    </a>
                
                    <a data-key="start" data-val="2011" class="filter-sel " title="2011">
                        <span>2011</span>
                    </a>
                
                    <a data-key="start" data-val="2010" class="filter-sel " title="2010">
                        <span>2010</span>
                    </a>
                
                    <a data-key="start" data-val="2009" class="filter-sel " title="2009">
                        <span>2009</span>
                    </a>
                
                    <a data-key="start" data-val="2008" class="filter-sel " title="2008">
                        <span>2008</span>
                    </a>
                
                    <a data-key="start" data-val="2007" class="filter-sel " title="2007">
                        <span>2007</span>
                    </a>
                
                    <a data-key="start" data-val="2006" class="filter-sel " title="2006">
                        <span>2006</span>
                    </a>
                
                    <a data-key="start" data-val="2005之前" class="filter-sel " title="2005之前">
                        <span>2005之前</span>
                    </a>
                
            </div>
        </div>
        
    
        
        <div class="bd-filter-section">
            <h3 class="bd-filter-title">版本：</h3>
            <div class="bd-filter-list filter-group" static="bl=type&amp;stp=prop">
                
                    <a data-key="prop" data-val="" class="filter-sel  filter-sel-active " title="全部">
                        <span>全部</span>
                    </a>
                
                    <a data-key="prop" data-val="剧场版" class="filter-sel " title="剧场版">
                        <span>剧场版</span>
                    </a>
                
                    <a data-key="prop" data-val="TV版" class="filter-sel " title="TV版">
                        <span>TV版</span>
                    </a>
                
                    <a data-key="prop" data-val="OVA版" class="filter-sel " title="OVA版">
                        <span>OVA版</span>
                    </a>
                
                    <a data-key="prop" data-val="SP版" class="filter-sel " title="SP版">
                        <span>SP版</span>
                    </a>
                
                    <a data-key="prop" data-val="其他" class="filter-sel " title="其他">
                        <span>其他</span>
                    </a>
                
            </div>
        </div>
        
    
</div>
</div>
<div class="bd-filter-tabs">
<div class="bd-filter-order filter-group" id="bd-filter-order" static="bl=type&amp;stp=order">

    
        <a data-key="order" data-val="hot" class="filter-sel filter-sel-active" title="按热门">
            <span>按热门</span>
        </a>
    
        <a data-key="order" data-val="pubtime" class="filter-sel filter-sel-middle" title="按更新">
            <span>按更新</span>
        </a>
    
</div>
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
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=5" data-id="14206" class="bd-video-item bd-video-item-last bd-video-meta-left">
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
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=11" data-id="15996" class="bd-video-item bd-video-item-last bd-video-meta-left">
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
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=16" data-id="17406" class="bd-video-item  bd-video-meta-left">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/17406.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=924311981,2305963323&fm=20" alt="碧蓝幻想">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至7话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/17406.htm?frp=browse" title="碧蓝幻想" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/17406.htm?frp=browse" title="碧蓝幻想" target="_blank">
                            碧蓝幻想</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=17" data-id="15399" class="bd-video-item bd-video-item-last bd-video-meta-left">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/15399.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=3839103291,3088484477&fm=20" alt="民间鬼术">
                        
                        
                            <span class="bd-video-update">
                                
                                第2部 全23话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/15399.htm?frp=browse" title="民间鬼术" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/15399.htm?frp=browse" title="民间鬼术" target="_blank">
                            民间鬼术</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=18" data-id="16367" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/16367.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=2372709731,1127054541&fm=20" alt="全职法师">
                        
                        
                            <span class="bd-video-update">
                                
                                全12话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/16367.htm?frp=browse" title="全职法师" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/16367.htm?frp=browse" title="全职法师" target="_blank">
                            全职法师</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=19" data-id="7679" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/7679.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=901004293,2058047111&fm=20" alt="熊出没之丛林总动员">
                        
                        
                            <span class="bd-video-update">
                                
                                第3部 全104话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/7679.htm?frp=browse" title="熊出没之丛林总动员" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/7679.htm?frp=browse" title="熊出没之丛林总动员" target="_blank">
                            熊出没之丛林总动员</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=20" data-id="17780" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/17780.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=494003402,2545047587&fm=20" alt="神兽金刚之超变星甲">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至45话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/17780.htm?frp=browse" title="神兽金刚之超变星甲" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/17780.htm?frp=browse" title="神兽金刚之超变星甲" target="_blank">
                            神兽金刚之超变星甲</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=21" data-id="17754" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/17754.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=3530237116,3165818344&fm=20" alt="霹雳天命之仙魔鏖锋斩魔录">
                        
                        
                            <span class="bd-video-update">
                                
                                第2部 全42话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/17754.htm?frp=browse" title="霹雳天命之仙魔鏖锋斩魔录" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/17754.htm?frp=browse" title="霹雳天命之仙魔鏖锋斩魔录" target="_blank">
                            霹雳天命之仙魔鏖锋斩魔录</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=22" data-id="17237" class="bd-video-item  bd-video-meta-left">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/17237.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=633454111,3978737681&fm=20" alt="斗破苍穹">
                        
                        
                            <span class="bd-video-update">
                                
                                全12话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/17237.htm?frp=browse" title="斗破苍穹" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/17237.htm?frp=browse" title="斗破苍穹" target="_blank">
                            斗破苍穹</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=23" data-id="6557" class="bd-video-item bd-video-item-last bd-video-meta-left">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/6557.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=4048047381,1491292599&fm=20" alt="巨神战击队">
                        
                        
                            <span class="bd-video-update">
                                
                                第1部 全52话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/6557.htm?frp=browse" title="巨神战击队" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/6557.htm?frp=browse" title="巨神战击队" target="_blank">
                            巨神战击队</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=24" data-id="15400" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/15400.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=3320019772,2272156840&fm=20" alt="太乙仙魔录之灵飞纪 番外篇">
                        
                        
                            <span class="bd-video-update">
                                
                                全7话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/15400.htm?frp=browse" title="太乙仙魔录之灵飞纪 番外篇" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/15400.htm?frp=browse" title="太乙仙魔录之灵飞纪 番外篇" target="_blank">
                            太乙仙魔录之灵飞纪 番外篇</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=25" data-id="7269" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/7269.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=4270036784,507209928&fm=20" alt="植物大战僵尸 动画版">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至101话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/7269.htm?frp=browse" title="植物大战僵尸 动画版" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/7269.htm?frp=browse" title="植物大战僵尸 动画版" target="_blank">
                            植物大战僵尸 动画版</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=26" data-id="15168" class="bd-video-item   bd-video-meta-right">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/15168.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=3306499429,3524902413&fm=20" alt="熊出没之夏日连连看">
                        
                        
                            <span class="bd-video-update">
                                
                                第6部 全52话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/15168.htm?frp=browse" title="熊出没之夏日连连看" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/15168.htm?frp=browse" title="熊出没之夏日连连看" target="_blank">
                            熊出没之夏日连连看</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=27" data-id="14859" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/14859.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=2862545432,2436871935&fm=20" alt="数码宝贝tri">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至17话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/14859.htm?frp=browse" title="数码宝贝tri" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/14859.htm?frp=browse" title="数码宝贝tri" target="_blank">
                            数码宝贝tri</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=28" data-id="8618" class="bd-video-item  bd-video-meta-left">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/8618.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=3631029309,2307412310&fm=20" alt="可可小爱">
                        
                        
                            <span class="bd-video-update">
                                
                                第4部 全20话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/8618.htm?frp=browse" title="可可小爱" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/8618.htm?frp=browse" title="可可小爱" target="_blank">
                            可可小爱</a>
                        </h4>
                        
                        
                    
                </div>
            </li>
        
            
            <li static="bl=subcomic_show&amp;to=search&amp;no=29" data-id="15768" class="bd-video-item bd-video-item-last bd-video-meta-left">
                <div class="bd-video-poster">
                    <a static="stp=po" href="http://v.baidu.com/comic/15768.htm?frp=browse" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="./唏里唏里动画_卡通动漫_files/u=2140195506,2204143411&fm=20" alt="熊出没之秋日团团转">
                        
                        
                            <span class="bd-video-update">
                                
                                全52话
                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="http://v.baidu.com/comic/15768.htm?frp=browse" title="熊出没之秋日团团转" target="_blank">
                        </a><h4 class="bd-video-title"><a static="stp=ti" href="http://v.baidu.com/comic/15768.htm?frp=browse" title="熊出没之秋日团团转" target="_blank">
                            熊出没之秋日团团转</a>
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

<div class="footer"><p align="center">@Copyright Design By <a href="#" style="font-size:20px"><strong>弹幕组</strong></a></div>



</body>

</html><?php }} ?>