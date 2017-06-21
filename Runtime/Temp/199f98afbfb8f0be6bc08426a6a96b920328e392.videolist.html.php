<?php /*%%SmartyHeaderCode:14291594008dca33088-14640303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '199f98afbfb8f0be6bc08426a6a96b920328e392' => 
    array (
      0 => './Template/default/Admin\\Video\\videolist.html',
      1 => 1496713149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14291594008dca33088-14640303',
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59407ff09d691',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59407ff09d691')) {function content_59407ff09d691($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="/TPvideo/Template/default/Admin/Public/css/pintuer.css">
<link rel="stylesheet" href="/TPvideo/Template/default/Admin/Public/css/admin.css">
<link rel="stylesheet" href="/TPvideo/Template/default/Admin/Public/css/page.css">
<link rel="stylesheet" href="/TPvideo/Template/default/Admin/Public/css/font-awesome.min.css">
<script src="/TPvideo/Template/default/Admin/Public/js/jquery-1.10.1.js"></script>
<script src="/TPvideo/Template/default/Admin/Public/js/pintuer.js"></script>
<script src="/TPvideo/Template/default/Admin/Public/js/layer.js"></script>


</head>
<body>
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head">
	<strong><span class="fa fa-newspaper-o"></span>内容列表</strong> 
	</div>
    <div class="padding border-bottom">
     
       
	 <button type="button" class="button border-blue" onclick="" id="checkall"><span class="fa fa-check-square-o"></span>全选</button>
    <button type="button" class="button border-yellow" onclick="" id="button_add"><span class="fa fa-plus-square-o"></span>增加内容</button>
	<button type="button" class="button border-red" onclick="" id="video_del"><span class="fa fa-trash-o"></span> 
	批量删除</button>
	
	<button type="button" class="button border-blue" onclick="" id="button_gai" ><span class="fa fa-edit"></span> 
	修改</button>
  <form action="/tpvideo/index.php/admin/video/videolist.html" method="POST" enctype="multipart/form-data">
      <input type="text" placeholder="请输入视频ID" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
        
		  <button type="submit" class="button border-main" onclick="changesearch()" id="cate_del"><span class="fa fa-search"></span> 
	搜索</button></form>
    </div>
    <table class="table table-hover text-center">
      <tr>
		<th width="6%" style="text-align:left;">选择</th>
        <th width="6%" >ID</th>
        <th width="10%">图片</th>
        <th width="10%">名称</th>
        <th width="10%">类型</th>
		<th width="6%">首页</th>
		<th width="6%">推荐</th>
        <th width="8%">上级类型</th>
        <th width="10%">更新时间</th>
		<th width="10%">点击次数</th>
      </tr>
      <volist name="list" id="vo">
         		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="video_b_id" id="video_check_id_5" value="5" /></td>
          <td>5</td>
          <td width="10%"><img src="/TPvideo/Upload/" alt="" width="70" height="50" /></td></td>
          <td id="video_name_5">速度与激情4</td>
         <td id="video_vt_5">8</td>
          <td ><span class="fa fa-check" >0</span></td>
		      <td ><span class="fa fa-check">0</span></td>
          <td id="video_vt_5">8</td>
          <td id="video_time_5">2017/4/4</td>
		  <td id="video_num_5">1023</td>
        </tr>
           		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="video_b_id" id="video_check_id_10" value="10" /></td>
          <td>10</td>
          <td width="10%"><img src="/TPvideo/Upload/images/2017-05-07/thumb_590ed004ba8e2.png" alt="" width="70" height="50" /></td></td>
          <td id="video_name_10">爱十分爱人</td>
         <td id="video_vt_10">8</td>
          <td ><span class="fa fa-check" >1</span></td>
		      <td ><span class="fa fa-check">1</span></td>
          <td id="video_vt_10">8</td>
          <td id="video_time_10"></td>
		  <td id="video_num_10">123</td>
        </tr>
           		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="video_b_id" id="video_check_id_18" value="18" /></td>
          <td>18</td>
          <td width="10%"><img src="/TPvideo/Upload/images/2017-05-06/thumb_590d6af45ccc0.png" alt="" width="70" height="50" /></td></td>
          <td id="video_name_18">tset1</td>
         <td id="video_vt_18">2</td>
          <td ><span class="fa fa-check" >1</span></td>
		      <td ><span class="fa fa-check">0</span></td>
          <td id="video_vt_18">2</td>
          <td id="video_time_18">2017-05-06</td>
		  <td id="video_num_18">0</td>
        </tr>
           		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="video_b_id" id="video_check_id_20" value="20" /></td>
          <td>20</td>
          <td width="10%"><img src="/TPvideo/Upload/images/2017-05-06/thumb_590d6bddf346b.png" alt="" width="70" height="50" /></td></td>
          <td id="video_name_20">热死他</td>
         <td id="video_vt_20">11</td>
          <td ><span class="fa fa-check" >1</span></td>
		      <td ><span class="fa fa-check">0</span></td>
          <td id="video_vt_20">11</td>
          <td id="video_time_20">2017-05-06</td>
		  <td id="video_num_20">0</td>
        </tr>
           		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="video_b_id" id="video_check_id_21" value="21" /></td>
          <td>21</td>
          <td width="10%"><img src="/TPvideo/Upload/images/2017-05-06/thumb_590d6c634da84.png" alt="" width="70" height="50" /></td></td>
          <td id="video_name_21">特色t</td>
         <td id="video_vt_21">10</td>
          <td ><span class="fa fa-check" >1</span></td>
		      <td ><span class="fa fa-check">0</span></td>
          <td id="video_vt_21">10</td>
          <td id="video_time_21">2017-05-06</td>
		  <td id="video_num_21">0</td>
        </tr>
           		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="video_b_id" id="video_check_id_22" value="22" /></td>
          <td>22</td>
          <td width="10%"><img src="/TPvideo/Upload/images/2017-05-06/thumb_590d6ccc5960c.png" alt="" width="70" height="50" /></td></td>
          <td id="video_name_22">test5</td>
         <td id="video_vt_22">11</td>
          <td ><span class="fa fa-check" >1</span></td>
		      <td ><span class="fa fa-check">0</span></td>
          <td id="video_vt_22">11</td>
          <td id="video_time_22">2017-05-06</td>
		  <td id="video_num_22">0</td>
        </tr>
           		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="video_b_id" id="video_check_id_23" value="23" /></td>
          <td>23</td>
          <td width="10%"><img src="/TPvideo/Upload/images/2017-05-08/thumb_590fda739a45a.png" alt="" width="70" height="50" /></td></td>
          <td id="video_name_23">test9</td>
         <td id="video_vt_23">3</td>
          <td ><span class="fa fa-check" >1</span></td>
		      <td ><span class="fa fa-check">1</span></td>
          <td id="video_vt_23">3</td>
          <td id="video_time_23">2017-05-08</td>
		  <td id="video_num_23">0</td>
        </tr>
           		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="video_b_id" id="video_check_id_24" value="24" /></td>
          <td>24</td>
          <td width="10%"><img src="/TPvideo/Upload/images/2017-05-08/thumb_59106cf718446.png" alt="" width="70" height="50" /></td></td>
          <td id="video_name_24">test91</td>
         <td id="video_vt_24">2</td>
          <td ><span class="fa fa-check" >1</span></td>
		      <td ><span class="fa fa-check">1</span></td>
          <td id="video_vt_24">2</td>
          <td id="video_time_24">2017-05-08</td>
		  <td id="video_num_24">0</td>
        </tr>
           		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="video_b_id" id="video_check_id_25" value="25" /></td>
          <td>25</td>
          <td width="10%"><img src="/TPvideo/Upload/images/2017-06-05/thumb_5934bd7aebcee.jpg" alt="" width="70" height="50" /></td></td>
          <td id="video_name_25">奇幻冒险</td>
         <td id="video_vt_25">14</td>
          <td ><span class="fa fa-check" >1</span></td>
		      <td ><span class="fa fa-check">1</span></td>
          <td id="video_vt_25">14</td>
          <td id="video_time_25">2017-06-05</td>
		  <td id="video_num_25">0</td>
        </tr>
           		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="video_b_id" id="video_check_id_26" value="26" /></td>
          <td>26</td>
          <td width="10%"><img src="/TPvideo/Upload/images/2017-06-05/thumb_5934bd9937529.jpg" alt="" width="70" height="50" /></td></td>
          <td id="video_name_26">可汗</td>
         <td id="video_vt_26">1</td>
          <td ><span class="fa fa-check" >1</span></td>
		      <td ><span class="fa fa-check">0</span></td>
          <td id="video_vt_26">1</td>
          <td id="video_time_26">2017-06-05</td>
		  <td id="video_num_26">0</td>
        </tr>
           		 
     <tr> 
      <td colspan="12"><div class="page"><a class="first" href="/tpvideo/index.php/admin/video/videolist/p/1.html">首页</a> <a class="prev not-allowed" href="javascript:;">上一页</a> <span class="current">1</span><a class="num" href="/tpvideo/index.php/admin/video/videolist/p/2.html">2</a><a class="num" href="/tpvideo/index.php/admin/video/videolist/p/3.html">3</a><a class="num" href="/tpvideo/index.php/admin/video/videolist/p/4.html">4</a><a class="num" href="/tpvideo/index.php/admin/video/videolist/p/5.html">5</a> <a class="next" href="/tpvideo/index.php/admin/video/videolist/p/2.html">下一页</a> <a class="end" href="/tpvideo/index.php/admin/video/videolist/p/5.html">末页</a> <span class="rows">共 46 条记录</span></div> </td>
    </tr>
      
    </table>
  </div>
</form>


<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="fa fa-plus-square-o"></span> 增加内容</strong></div>
  <div class="body-content">
    <form method="post" enctype="multipart/form-data" class="form-x" action="/tpvideo/index.php/admin/video/videoadd.html">  
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="videoName" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="img" class="input" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <input type="file" id="upload_image" style="visibility: hidden;">
		  
        </div>
      </div>     
      
      <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>分类标题：</label>
          </div>
          <div class="field">
            <select name="vt_id" class="input w50">
				<option value="">请选择分类</option>
        				<option value="1">
                                <span>1</span>电影
                </option>
        				<option value="13">
                                 <span >13</span>&nbsp&nbsp动作
                </option>
        				<option value="14">
                                 <span >14</span>&nbsp&nbsp科幻
                </option>
        				<option value="2">
                                <span>2</span>电视剧
                </option>
        				<option value="8">
                                 <span >8</span>&nbsp&nbsp电视剧2
                </option>
        				<option value="9">
                                 <span >9</span>&nbsp&nbsp电视剧3
                </option>
        				<option value="11">
                                 <span >11</span>&nbsp&nbsp&nbsp&nbsp爱情动作片
                </option>
        				<option value="10">
                                 <span >10</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp电影4
                </option>
        				<option value="3">
                                 <span >3</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp爱情电视剧
                </option>
        				<option value="12">
                                <span>12</span>test12
                </option>
        				<option value="15">
                                <span>15</span>综艺
                </option>
        				<option value="16">
                                 <span >16</span>&nbsp&nbsp综艺节目1
                </option>
        				<option value="17">
                                 <span >17</span>&nbsp&nbsp综艺节目2
                </option>
        				<option value="19">
                                 <span >19</span>&nbsp&nbsp综艺节目3
                </option>
        				<option value="21">
                                 <span >21</span>&nbsp&nbsp综艺节目4
                </option>
        				<option value="22">
                                <span>22</span>卡通
                </option>
        				<option value="23">
                                 <span >23</span>&nbsp&nbsp卡通类型1
                </option>
        				<option value="24">
                                 <span >24</span>&nbsp&nbsp卡通类型2
                </option>
        				<option value="25">
                                 <span >25</span>&nbsp&nbsp卡通类型3
                </option>
        				<option value="26">
                                 <span >26</span>&nbsp&nbsp卡通类型4
                </option>
        				<option value="27">
                                <span>27</span>游戏
                </option>
                    </select>
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>其他属性：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            首页 <input id="isHomePage"  name="isHomePage"type="checkbox"  value="1"/>
            推荐 <input id="isRem" name="isRem" type="checkbox" value="1" />
          
         
          </div>
        </div>
      </if>
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="introduction" style=" height:90px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>

     
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="keywords" value="" />
        </div>
      </div>
      
      
      
      <div class="form-group">
        <div class="label">
          <label>作者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="uid" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main fa fa-check-square add_tijiao" type="submit" style="margin-left:400px"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>



<div class="panel admin-panel">
  <div class="panel-head" id="edit"><strong><span class="fa fa-edit"></span>修改内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" enctype="multipart/form-data" action="/tpvideo/index.php/admin/video/videoupdate.html"> 
    <input type="hidden"  name='vid' id="U-id" value="">
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" id="U-name"class="input w50" value="" name="videoName" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url2" name="img1" class="input" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
          <input type="button" class="button bg-blue margin-left" id="image2" value="+ 浏览上传"  style="float:left;">
		  <!--<a class="button button-little bg-yellow" ><span class="fa fa-eye"></span> 预览</a>-->
		  <input type="file" id="upload_image2" style="visibility: hidden;">
          
        </div>
      </div>     
      
      <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>分类标题：</label>
          </div>
          <div class="field">
            <select id="U-level"name="vt_id" class="input w50">
				<option value="">请选择分类</option>
				        <option value="1">
                                <span>1</span>电影
                </option>
                <option value="13">
                                 <span >13</span>&nbsp&nbsp动作
                </option>
                <option value="14">
                                 <span >14</span>&nbsp&nbsp科幻
                </option>
                <option value="2">
                                <span>2</span>电视剧
                </option>
                <option value="8">
                                 <span >8</span>&nbsp&nbsp电视剧2
                </option>
                <option value="9">
                                 <span >9</span>&nbsp&nbsp电视剧3
                </option>
                <option value="11">
                                 <span >11</span>&nbsp&nbsp&nbsp&nbsp爱情动作片
                </option>
                <option value="10">
                                 <span >10</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp电影4
                </option>
                <option value="3">
                                 <span >3</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp爱情电视剧
                </option>
                <option value="12">
                                <span>12</span>test12
                </option>
                <option value="15">
                                <span>15</span>综艺
                </option>
                <option value="16">
                                 <span >16</span>&nbsp&nbsp综艺节目1
                </option>
                <option value="17">
                                 <span >17</span>&nbsp&nbsp综艺节目2
                </option>
                <option value="19">
                                 <span >19</span>&nbsp&nbsp综艺节目3
                </option>
                <option value="21">
                                 <span >21</span>&nbsp&nbsp综艺节目4
                </option>
                <option value="22">
                                <span>22</span>卡通
                </option>
                <option value="23">
                                 <span >23</span>&nbsp&nbsp卡通类型1
                </option>
                <option value="24">
                                 <span >24</span>&nbsp&nbsp卡通类型2
                </option>
                <option value="25">
                                 <span >25</span>&nbsp&nbsp卡通类型3
                </option>
                <option value="26">
                                 <span >26</span>&nbsp&nbsp卡通类型4
                </option>
                <option value="27">
                                <span>27</span>游戏
                </option>
                    </select>
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>其他属性：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            首页 <input name="Update" id="U-ishome"  value="1"type="checkbox" />
            推荐 <input name="Update" id="U-isvouch"  type="checkbox" value="1" />
          
         
          </div>
        </div>
      </if>
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" id="U-note"name="introduction" style=" height:90px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>

     
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input" id="U-keywords"name="keywords" value="" />
        </div>
      </div>
      
      
      
      <div class="form-group">
        <div class="label">
          <label>作者：</label>
        </div>
        <div class="field">
          <input type="text" id="U-author"class="input w50" name="uid" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main fa fa-check-square edit_tijiao" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">

//搜索
function changesearch(){	
		
}


$('#image1').click(function(){

$('#upload_image').click();

});
$("#upload_image").change(function(){  
  
  var file_name = this.files[0].name; 
  $("#url1").val(file_name);

});
$('#image2').click(function(){

$('#upload_image2').click();

});
$("#upload_image2").change(function(){  
  
  var file_name = this.files[0].name; 
  $("#url2").val(file_name);

});


//修改按钮点击
$('#button_gai').click(function(){ 
//未选择
if($('input[name="video_b_id"]:checked').length==0){
layer.tips('请选择修改内容', '#button_gai', { 
  tips: [1, '#ff0033'] //还可配置颜色
 });
}
else{
//获得选择的id
    var inputs = document.getElementsByName('video_b_id');
    for(var i = 0; i<inputs.length; i++){
      var obj = inputs[i];
      var value;
      if(obj.type == 'checkbox'){
        if(obj.checked == true){
          value = obj.id;
        }
      }
    }
  var arr = value.split('_');
  $.post("/tpvideo/index.php/admin/video/videoupdate.html",{ id : arr[3] },function(data){
      jdata=eval("("+data+")");//解析json数据
      $('#U-name').val(jdata.videoname);
      $('#U-level').val(jdata.vt_id);
      $('#U-author').val(jdata.uid);
      $('#U-keywords').val(jdata.keywords);
      $('#U-note').val(jdata.introduction);
      $('#U-id').val(jdata.vid);
      if(jdata.isrem==1)
        document.getElementsByName("Update")[1].checked=true;     
      if(jdata.ishomepage==1)
        document.getElementsByName("Update")[0].checked=true;
  });
  $("html,body").animate({ scrollTop:$("#edit").offset().top },300);
}
});

//添加分类按钮点击
$('#button_add').click(function(){ 

$("html,body").animate({ scrollTop:$("#add").offset().top },300);

});


//删除按钮点击
$('#video_del').click(function(){ 

if($('input[name="video_b_id"]:checked').length==0){
layer.tips('请选择删除内容', '#cate_del', {
  tips: [1, '#ff0033'] //还可配置颜色
});
}else{
  //获得选中id，传到后台
  layer.confirm('确定删除吗？', {
  btn: ['确定','取消'] //按钮
  }, function(){
  //点击第一个运行
	var id_array=new Array();
    $('input[name="video_b_id"]:checked').each(function(){
      id_array.push($(this).val());
    });
    $.post("/tpvideo/index.php/admin/video/videodelete.html",{ data : id_array },function(res){
      if(res.status==1){
        layer.msg('已删除', { icon: 1 });
        setTimeout("document.location.reload()",500);
      }
      else if(res.status==2)
        layer.msg('删除失败请重试', { icon: 2 });               
    });
}, function(){
  //点击第二个运行
 layer.msg('已取消', { icon: 1 });
  
});

}
 

});


//全选按钮点击
	var i=1;
	var h=1;
$("#checkall").click(function(){ 
	
		$("input[name='video_b_id").each(function(){
			if(i==1){
			this.checked = true;
			$('#button_gai').attr('disabled','disabled');
			h=1;
			}else{
			this.checked = false;
			$("#button_gai").removeAttr("disabled");
			h=0;
			}	
			

});
		if(h==1){
			i=0;
		}else{
			i=1;
		}

		
	});


//单个checkbox点击
$('input[name="video_b_id"]').click(function(){
$("#button_gai").removeAttr("disabled");
         

            if($('input[name="video_b_id"]:checked').length>=2){


			  $('#button_gai').attr('disabled','disabled');

            }

   });


</script>






</body>
</html><?php }} ?>