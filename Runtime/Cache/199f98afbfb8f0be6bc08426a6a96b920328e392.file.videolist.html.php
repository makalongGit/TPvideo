<?php /* Smarty version Smarty-3.1.6, created on 2017-04-27 23:15:35
         compiled from "./Template/default/Admin\Video\videolist.html" */ ?>
<?php /*%%SmartyHeaderCode:2015759020b1754a172-10535321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '199f98afbfb8f0be6bc08426a6a96b920328e392' => 
    array (
      0 => './Template/default/Admin\\Video\\videolist.html',
      1 => 1493306131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2015759020b1754a172-10535321',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59020b17b9f47',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59020b17b9f47')) {function content_59020b17b9f47($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
pintuer.css">
<link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
admin.css">
<link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
font-awesome.min.css">
<script src="<?php echo @__ADMIN_JS__;?>
jquery-1.10.1.js"></script>
<script src="<?php echo @__ADMIN_JS__;?>
pintuer.js"></script>
<script src="<?php echo @__ADMIN_JS__;?>
layer.js"></script>


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
	<button type="button" class="button border-red" onclick="" id="cate_del"><span class="fa fa-trash-o"></span> 
	批量删除</button>
	
	<button type="button" class="button border-blue" onclick="" id="button_gai" ><span class="fa fa-edit"></span> 
	修改</button>
      <input type="text" placeholder="请输入视频ID" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
        
		  <button type="button" class="button border-main" onclick="changesearch()" id="cate_del"><span class="fa fa-search"></span> 
	搜索</button>
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
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" /></td>
          <td>1</td>
          <td width="10%"><img src="<?php echo @__ADMIN_IMAGE__;?>
fuyao.jpg" alt="" width="70" height="50" /></td></td>
          <td>西游：伏妖传</td>
         <td>喜剧</td>
		 <td><span class="fa fa-check"></span></td>
		 <td><span class="fa fa-check"></span></td>
          <td>电影</td>
          <td>2016-07-01</td>
		  <td>2016</td>
        </tr>
           		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" /></td>
          <td>1</td>
          <td width="10%"><img src="<?php echo @__ADMIN_IMAGE__;?>
fuyao.jpg" alt="" width="70" height="50" /></td></td>
          <td>西游：伏妖传</td>
          <td>喜剧</td>
		  <td></td>
		 <td></td>
          <td>电影</td>
          <td>2016-07-01</td>
		  <td>2016</td>
         
        </tr>
		   		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           </td>
          <td>1</td>
          <td width="10%"><img src="<?php echo @__ADMIN_IMAGE__;?>
fuyao.jpg" alt="" width="70" height="50" /></td></td>
          <td>西游：伏妖传</td>
          <td>喜剧</td>
		  <td></td>
		 <td></td>
          <td>电影</td>
          <td>2016-07-01</td>
		  <td>2016</td>
          
        </tr>
		   		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           </td>
          <td>1</td>
          <td width="10%"><img src="<?php echo @__ADMIN_IMAGE__;?>
fuyao.jpg" alt="" width="70" height="50" /></td></td>
          <td>西游：伏妖传</td>
         <td>喜剧</td>
		 <td></td>
		 <td></td>
          <td>电影</td>
          <td>2016-07-01</td>
		  <td>2016</td>
          
        </tr>
		   		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           </td>
          <td>1</td>
          <td width="10%"><img src="<?php echo @__ADMIN_IMAGE__;?>
fuyao.jpg" alt="" width="70" height="50" /></td></td>
          <td>西游：伏妖传</td>
          <td>喜剧</td>
		  <td></td>
		 <td></td>
          <td>电影</td>
          <td>2016-07-01</td>
		  <td>2016</td>
        
				</tr>

		  <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           </td>
          <td>1</td>
          <td width="10%"><img src="<?php echo @__ADMIN_IMAGE__;?>
fuyao.jpg" alt="" width="70" height="50" /></td></td>
          <td>西游：伏妖传</td>
          <td>喜剧</td>
		  <td></td>
		 <td></td>
          <td>电影</td>
          <td>2016-07-01</td>
		  <td>2016</td>
          
        </tr>
     
      <tr>
        <td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>
      </tr>
    </table>
  </div>
</form>


<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="fa fa-plus-square-o"></span> 增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">  
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="img" class="input" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
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
            <select name="cid" class="input w50">
				<option value="">请选择分类</option>
				<option value="">电影</option>
				<option value="">电视剧</option>
				<option value="">动画</option>
				<option value="">游戏</option>
				<option value="">直播</option>
				<option value="">音乐</option>
            </select>
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>其他属性：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            首页 <input id="ishome"  type="checkbox" />
            推荐 <input id="isvouch"  type="checkbox" />
          
         
          </div>
        </div>
      </if>
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="note" style=" height:90px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>

     
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_title" value="" />
        </div>
      </div>
      
      
      <div class="form-group">
        <div class="label">
          <label>发布时间：</label>
        </div>
        <div class="field"> 
          <script src="js/laydate/laydate.js"></script>
          <input type="text" class="laydate-icon input w50" name="datetime" onclick="laydate({ istime: true, format: 'YYYY-MM-DD hh:mm:ss' })" value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>作者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="authour" value=""  />
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
    <form method="post" class="form-x" action="">  
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="text" id="url2" name="img" class="input" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
          <input type="button" class="button bg-blue margin-left" id="image2" value="+ 浏览上传"  style="float:left;">
			&nbsp;&nbsp;
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
            <select name="cid" class="input w50">
				<option value="">请选择分类</option>
				<option value="">电影</option>
				<option value="">电视剧</option>
				<option value="">动画</option>
				<option value="">游戏</option>
				<option value="">直播</option>
				<option value="">音乐</option>
            </select>
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>其他属性：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            首页 <input id="ishome"  type="checkbox" />
            推荐 <input id="isvouch"  type="checkbox" />
          
         
          </div>
        </div>
      </if>
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="note" style=" height:90px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>

     
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_title" value="" />
        </div>
      </div>
      
      
      <div class="form-group">
        <div class="label">
          <label>发布时间：</label>
        </div>
        <div class="field"> 
          <script src="js/laydate/laydate.js"></script>
          <input type="text" class="laydate-icon input w50" name="datetime" onclick="laydate({ istime: true, format: 'YYYY-MM-DD hh:mm:ss' })" value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>作者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="authour" value=""  />
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


if($('input[name="id[]"]:checked').length==0){
layer.tips('请选择修改内容', '#button_gai', { 
  tips: [1, '#ff0033'] //还可配置颜色
 });
}
else{
$("html,body").animate({ scrollTop:$("#edit").offset().top },300);
}

});

//添加分类按钮点击
$('#button_add').click(function(){ 

$("html,body").animate({ scrollTop:$("#add").offset().top },300);

});


//删除按钮点击
$('#cate_del').click(function(){ 

if($('input[name="id[]"]:checked').length==0){
layer.tips('请选择删除内容', '#cate_del', {
  tips: [1, '#ff0033'] //还可配置颜色
});
}else{
 layer.confirm('确定删除吗？', {
  btn: ['确定','取消'] //按钮
}, function(){
  //点击第一个运行
	layer.msg('已删除', { icon: 1 });
  //alert("1");
}, function(){
  //点击第二个运行
 // alert("2");
 layer.msg('已取消', { icon: 1 });
  
});

}
 

});


//全选按钮点击
	var i=1;
	var h=1;
$("#checkall").click(function(){ 
	
		$("input[name='id[]']").each(function(){
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
$('input[name="id[]"]').click(function(){
$("#button_gai").removeAttr("disabled");
         

            if($('input[name="id[]"]:checked').length>=2){


			  $('#button_gai').attr('disabled','disabled');

            }

   });


</script>






</body>
</html><?php }} ?>