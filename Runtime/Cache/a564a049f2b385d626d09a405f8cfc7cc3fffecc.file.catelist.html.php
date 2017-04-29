<?php /* Smarty version Smarty-3.1.6, created on 2017-04-28 15:15:51
         compiled from "./Template/default/Admin\Cate\catelist.html" */ ?>
<?php /*%%SmartyHeaderCode:259315902ec2792d4c7-52090734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a564a049f2b385d626d09a405f8cfc7cc3fffecc' => 
    array (
      0 => './Template/default/Admin\\Cate\\catelist.html',
      1 => 1493363745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259315902ec2792d4c7-52090734',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5902ec27ca7f9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5902ec27ca7f9')) {function content_5902ec27ca7f9($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
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
<div class="panel admin-panel">
  <div class="panel-head"><strong ><span class="fa fa-list-alt"></span> 分类列表</strong></div>
  <div class="padding border-bottom" id="cate_div">
  <button type="button" class="button border-blue" onclick="" id="checkall"><span class="fa fa-check-square-o"></span>全选</button>
    <button type="button" class="button border-yellow" onclick="" id="button_add"><span class="fa fa-plus-square-o"></span> 添加分类</button>
	<button type="button" class="button border-red" onclick="" id="cate_del"><span class="fa fa-trash-o"></span> 
	批量删除</button>
	
	<button type="button" class="button border-blue" onclick="" id="button_gai" ><span class="fa fa-edit"></span> 
	修改</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
	<th width="6%" style="text-align:left;">选择</th>
      <th width="5%">ID</th>
      <th width="12%">类型</th>
	  <th width="12%">上级类型</th>
    </tr>
    <tr>
	<td style="text-align:left;"><input type="checkbox" name="cate_b_id" class="cate_check" value="" /></td>
      <td>1</td>
      <td>电影</td>
	  <td>顶级类型</td>
     
      
    </tr>
    <tr>
	<td style="text-align:left;"><input type="checkbox" name="cate_b_id" value="" class="cate_check"/></td>
      <td>1</td>
      <td>恐怖电影</td>
	  <td>电影</td>
     
      
    </tr>
    <tr>
	<td style="text-align:left;"><input type="checkbox" name="cate_b_id" value="" class="cate_check"/></td>
      <td>1</td>
      <td>RPG游戏</td>
	  <td>游戏</td>
   
     
    </tr>
    <tr>
	<td style="text-align:left;"><input type="checkbox" name="cate_b_id" value="" class="cate_check"/></td>
      <td>1</td>
      <td>国产动漫</td>
	  <td>动画</td>
   
      
    </tr>
    <tr>
	<td style="text-align:left;"><input type="checkbox" name="cate_b_id" value="" class="cate_check"/></td>
      <td>1</td>
      <td>大陆剧</td>
	  <td>电视剧</td>
  
      
    </tr>
    <tr>
	<td style="text-align:left;"><input type="checkbox" name="cate_b_id" value="" class="cate_check"/></td>
      <td>1</td>
      <td>华语新歌</td>
	  <td>音乐</td>
      
      
    </tr>
  </table>
</div>
<script type="text/javascript">



//修改按钮点击
$('#button_gai').click(function(){ 


if($('input[name="cate_b_id"]:checked').length==0){
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

if($('input[name="cate_b_id"]:checked').length==0){
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
	
		$("input[name='cate_b_id']").each(function(){
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
$('input[name="cate_b_id"]').click(function(){
$("#button_gai").removeAttr("disabled");
         

            if($('input[name="cate_b_id"]:checked').length>=2){


			  $('#button_gai').attr('disabled','disabled');

            }

   });


</script>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="fa fa-plus-square-o"></span>添加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
		<div class="form-group">
        <div class="label">
          <label>分类标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="title" value="电影" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>上级分类：</label>
        </div>
        <div class="field">
          <select name="pid" class="input w50">
            <option value="">请选择分类</option>
            <option value="">电影</option>
            <option value="">电视剧</option>
            <option value="">动画</option>
            <option value="">游戏</option>
			<option value="">直播</option>
			<option value="">音乐</option>
          </select>
         
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_title" />
        </div>
      </div>
   
      
      
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main fa fa-check-square add_tijiao" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="panel admin-panel margin-top">
  <div class="panel-head" id="edit"><strong><span class="fa fa-edit"></span>修改分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">        
      <div class="form-group">
        <div class="label">
          <label>分类标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="title" value="电影" />
          <div class="tips"></div>
        </div>
      </div>    
	  <div class="form-group">
        <div class="label">
          <label>上级分类：</label>
        </div>
        <div class="field">
          <select name="pid" class="input w50">
            <option value="">请选择分类</option>
            <option value="">电影</option>
            <option value="">电视剧</option>
            <option value="">动画</option>
            <option value="">游戏</option>
			<option value="">直播</option>
			<option value="">音乐</option>
          </select>
         
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_title" value=""/>         
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

</body>
</html><?php }} ?>