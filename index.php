<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');

// 定义模板主题
define("DEFAULT_THEME","default");

// 定义模板文件默认目录
define("TMPL_PATH","./Template/".DEFAULT_THEME."/");
//define("THEME_PATH",TMPL_PATH);

// 定义缓存目录
define('RUNTIME_PATH','./Runtime/');
//定义常用路徑
//define("__HOME_CSS__", '/TPvideo/Template/default/Home/Public/css');
//define("__HOME_IMAGE__", __ROOT__.trim(TMPL_PATH,'.').'Home/Public/js');
define("__ADMIN_CSS__", '/TPvideo/Template/default/Admin/Public/css/');
define("__ADMIN_JS__", '/TPvideo/Template/default/Admin/Public/js/');
define("__ADMIN_IMAGE__", '/TPvideo/Template/default/Admin/Public/images/');
define("__ADMIN_FONTS__", '/TPvideo/Template/default/Admin/Public/css/');

define("__HOME_JS__",'/TPvideo/Template/default/Home/Public/js/');
define("__HOME_IMAGE__",'/TPvideo/Template/default/Home/Public/images/');
define("__HOME_CSS__",'/TPvideo/Template/default/Home/Public/css/');
define("__HOME_FONTS__",'/TPvideo/Template/default/Home/Public/fonts/');
define("__HOME__",'/TPvideo/Template/default/Home/Index/');
//上传图片视频路径
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
define('THINK_PATH',ROOT.'/TPvideo/ThinkPHP/');
define("__UPLOAD__",'./Upload/');
define("__UPLOAD_IMG__",'/TPvideo/Upload/');
define("__UPLOAD_VIDEO__",'/TPvideo/Upload/video/');
define("__UPLOAD_TVIDEO__","./Upload/video/tem_upload.wmv");
//视频
define("MOVIE_TYPE",1);
define("TV_TYPE",2);
define("GAME_TYPE",27);
define("CARTON_TYPE",22);
define("VARIETY_TYPE",15);
// 引入ThinkPHP入口文件

require THINK_PATH.'ThinkPHP.php';
//Thinkphp/ThinkPHP.php
// 亲^_^ 后面不需要任何代码了 就是如此简单