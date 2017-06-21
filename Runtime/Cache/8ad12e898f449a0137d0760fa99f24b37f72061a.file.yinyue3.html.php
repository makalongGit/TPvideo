<?php /* Smarty version Smarty-3.1.6, created on 2017-06-21 09:29:37
         compiled from "./Template/default/Home\Video\yinyue3.html" */ ?>
<?php /*%%SmartyHeaderCode:155905949cacdc2e3e4-22376285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ad12e898f449a0137d0760fa99f24b37f72061a' => 
    array (
      0 => './Template/default/Home\\Video\\yinyue3.html',
      1 => 1498008574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155905949cacdc2e3e4-22376285',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5949cacde1a75',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5949cacde1a75')) {function content_5949cacde1a75($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- seo内容开始 -->
		<title>唏里唏里XiliXili-音乐</title>

		<meta name="title" content="">
		<link type="image/x-icon" href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="icon"/>
		<link href="<?php echo @__HOME_IMAGE__;?>
favicon.ico" rel="shortcut icon"/>
		<link rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
mplayer.css">
		<style>
	.info {
		font-family: "Microsoft Yahei";
		text-align: center;
	}
	.info h1 {
		font-weight: 400;
	}
</style>



<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
pageload.js"></script>

		
		<!-- seo内容结束 -->
		<!-- 头尾播放器通用样式 -->
		<link rel="stylesheet" type="text/css" href="<?php echo @__HOME_CSS__;?>
reset.css">
		<link rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
jquery.mCustomScrollbar.css">
		<link rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
common.css">
		<link rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
player.css">
		<!-- 每个页面独立样式 -->
		<link type="text/css" rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
index.css">
		<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
jquery.js"></script>
		<script type="text/javascript" src="<?php echo @__HOME_JS__;?>
jquery.mCustomScrollbar.concat.min.js"></script>
		<link type="text/css" rel="stylesheet" href="<?php echo @__HOME_CSS__;?>
ugc.css">
		</head>
	<body avalonctrl="player">
			


<!-- 网站头部通用html -->


<div class="mp">
	<div class="mp-box">
		<img src="<?php echo @__HOME_IMAGE__;?>
mplayer_error.png" alt="music cover" class="mp-cover">
		<div class="mp-info">
			<p class="mp-name">燕归巢</p>
			<p class="mp-singer">许嵩</p>
			<p><span class="mp-time-current">00:00</span>/<span class="mp-time-all">00:00</span></p>
		</div>
		<div class="mp-btn">
			<button class="mp-prev" title="上一首"></button>
			<button class="mp-pause" title="播放"></button>
			<button class="mp-next" title="下一首"></button>
			<button class="mp-mode" title="播放模式"></button>
			<div class="mp-vol">
				<button class="mp-vol-img" title="静音"></button>
				<div class="mp-vol-range" data-range_min="0" data-range_max="100" data-cur_min="80">
					<div class="mp-vol-current"></div>
					<div class="mp-vol-circle"></div>
				</div>
			</div>
		</div>
		<div class="mp-pro">
			<div class="mp-pro-current"></div>
		</div>
		<div class="mp-menu">
			<button class="mp-list-toggle"></button>
			<button class="mp-lrc-toggle"></button>
		</div>
	</div>
	<button class="mp-toggle">
		<span class="mp-toggle-img"></span>
	</button>
	<div class="mp-lrc-box">
		<ul class="mp-lrc"></ul>
	</div>
	<button class="mp-lrc-close"></button>
	<div class="mp-list-box">
		<ul class="mp-list-title"></ul>
		<table class="mp-list-table">
			<thead>
				<tr>
					<th>歌名</th>
					<th>歌手</th>
					<th>时长</th>
				</tr>
			</thead>
			<tbody class="mp-list"></tbody>
		</table>
	</div>
</div>

<script src="<?php echo @__HOME_JS__;?>
jquery-2.1.1.js"></script>
<script src="<?php echo @__HOME_JS__;?>
mplayer.js"></script>
<script src="<?php echo @__HOME_JS__;?>
mplayer-list.js"></script>
<script src="<?php echo @__HOME_JS__;?>
mplayer-functions.js"></script>
<script src="<?php echo @__HOME_JS__;?>
jquery.nstSlider.min.js"></script>
<script>
var modeText = ['顺序播放','单曲循环','随机播放','列表循环'];
var player = new MPlayer({
	// 容器选择器名称
	containerSelector: '.mp',
	// 播放列表
	songList: mplayer_song,
	// 专辑图片错误时显示的图片
	defaultImg: '<?php echo @__HOME_IMAGE__;?>
mplayer_error.png',
	// 自动播放
	autoPlay: true,
	// 播放模式(0->顺序播放,1->单曲循环,2->随机播放,3->列表循环(默认))
	playMode:0,
	playList:0,
	playSong:0,
	// 当前歌词距离顶部的距离
	lrcTopPos: 34,
	// 列表模板，用${ 变量名 }$插入模板变量
	listFormat: '<tr><td>${name}$</td><td>${singer}$</td><td>${time}$</td></tr>',
	// 音量滑块改变事件名称
	volSlideEventName:'change',
	// 初始音量
	defaultVolume:80
}, function () {
	// 绑定事件
	this.on('afterInit', function () {
		console.log('播放器初始化完成，正在准备播放');
	}).on('beforePlay', function () {
		var $this = this;
		var song = $this.getCurrentSong(true);
		var songName = song.name + ' - ' + song.singer;
		console.log('即将播放'+songName+'，return false;可以取消播放');
	}).on('timeUpdate', function () {
		var $this = this;
		console.log('当前歌词：' + $this.getLrc());
	}).on('end', function () {
		var $this = this;
		var song = $this.getCurrentSong(true);
		var songName = song.name + ' - ' + song.singer;
		console.log(songName+'播放完毕，return false;可以取消播放下一曲');
	}).on('mute', function () {
		var status = this.getIsMuted() ? '已静音' : '未静音';
		console.log('当前静音状态：' + status);
	}).on('changeMode', function () {
		var $this = this;
		var mode = modeText[$this.getPlayMode()];
		$this.dom.container.find('.mp-mode').attr('title',mode);
		console.log('播放模式已切换为：' + mode);
	});
});

$(document.body).append(player.audio); // 测试用

setEffects(player);

</script>		
			
<!-- 网站底部通用html -->
</body></html><?php }} ?>