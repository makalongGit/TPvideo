<?php /* Smarty version Smarty-3.1.6, created on 2017-06-13 21:16:03
         compiled from "./Template/default/Home\Carton\carton.html" */ ?>
<?php /*%%SmartyHeaderCode:24251592ecd475e03b0-19116175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f3bf03da5236869d018f3127b57de2ee7a40888' => 
    array (
      0 => './Template/default/Home\\Carton\\carton.html',
      1 => 1497359756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24251592ecd475e03b0-19116175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_592ecd486b367',
  'variables' => 
  array (
    'cate_list' => 0,
    'v' => 0,
    'info' => 0,
    'pagelist' => 0,
  ),
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
                                <a id="next" href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">确定</a>
                            </div>
                            <div>
                            <script>
                                $('#next').click(function(){
                                    
                                    var reg_email=$('#email').val();
                                    var reg_name=$('#name').val();
                                    var reg_passwd=$('#password').val();                                    
                                    $.post("<?php echo U('Home/User/regist');?>
",{ email:reg_email,name:reg_name,password:reg_passwd },function(data){
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
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <a href='<?php echo U("Home/Carton/carton?order=".($_smarty_tpl->tpl_vars['v']->value['vt_id']));?>
' data-key="type" data-val="情感" class="filter-sel " title="<?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>
">
                        <span><?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>
</span>
                    </a>
                    <?php } ?>
                    
                
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

    
        <a href='<?php echo U("Home/Carton/carton?sequence=numOfViewed");?>
' data-val="hot" class="filter-sel filter-sel-active" title="按热门">
            <span>按热门</span>
        </a>
    
        <a href='<?php echo U("Home/Carton/carton?sequence=publishedTime");?>
' data-key="order" data-val="pubtime" class="filter-sel filter-sel-middle" title="按更新">
        <span>按更新</span>
        </a>
    
</div>
<div class="bd-tabs-advs" static="bl=advs">

</div>
</div>
<div id="bd-videos" class="bd-videos">
    <ul id="bd-video-list" class="bd-video-list" style="display: block;">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <li static="bl=subcomic_show&amp;to=search&amp;no=0" data-id="14262" class="bd-video-item   bd-video-meta-right ">
                <div class="bd-video-poster">
                    <a static="stp=po" href="" target="_blank" class="bd-video-link">
                        <img class="bd-video-img" src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['mid_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
">
                        
                        
                            <span class="bd-video-update">
                                
                                更新至<?php echo $_smarty_tpl->tpl_vars['v']->value['publishedtime'];?>

                            </span>
                        
                        <span class="bd-video-bg"></span>
                    </a>
                </div>
                <div class="bd-video-primary">
                    <a static="stp=ti" href="" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
" target="_blank">
                        </a><h4 class="" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
" target="_blank">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
</a>
                        </h4>                  
                </div>
            </li>        
        <?php } ?>
   </ul>
 
                   
<div class="bd-video-loading" id="bd-video-loading" style="display: none;">
<div class="bd-video-loading-icon">加载中</div>
</div>
</div>
<div id="bd-pagination" class="bd-pagination">
<div id="bd-pagination-list" static="bl=pagebar" class="bd-pagination-list filter-group">

<tr> 
    <td colspan="12"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
 </td>
</tr>
      
    
</div>
</div>
</div>

<div class="footer"><p align="center">@Copyright Design By <a href="#" style="font-size:20px"><strong>弹幕组</strong></a></div>



</body>

</html><?php }} ?>