<?php
return array(
	//'配置项'=>'配置值'
	'SHOW_PAGE_TRACE'=>true,
	//Smarty模板引擎切换
	'TMPL_ENGINE_TYPE'=>'Smarty',
    //默认错误跳转对应的模板文件
    'TMPL_ACTION_ERROR' => 'Public:error_tip',
    //默认成功跳转对应的模板文件
    'TMPL_ACTION_SUCCESS' =>'Public:success_tip',
	//数据库设置
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'video_web',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'     		=>	'utf8',
    
);