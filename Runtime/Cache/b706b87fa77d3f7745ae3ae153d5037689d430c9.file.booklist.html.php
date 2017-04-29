<?php /* Smarty version Smarty-3.1.6, created on 2017-04-28 15:16:54
         compiled from "./Template/default/Admin\Book\booklist.html" */ ?>
<?php /*%%SmartyHeaderCode:220645902ec66dbfb19-07761642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b706b87fa77d3f7745ae3ae153d5037689d430c9' => 
    array (
      0 => './Template/default/Admin\\Book\\booklist.html',
      1 => 1493363806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220645902ec66dbfb19-07761642',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5902ec670bbb1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5902ec670bbb1')) {function content_5902ec670bbb1($_smarty_tpl) {?><!DOCTYPE html>
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
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 评论管理</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button" class="button border-blue" onclick="" id="checkall"><span class="fa fa-check-square-o"></span>全选</button>
         <button type="button" class="button border-red" onclick="" id="cate_del"><span class="fa fa-trash-o"></span> 
	批量删除</button>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
		<th width="3%">选择</th>
        <th width="3%">ID</th>
        <th width="5%">账号</th>       
        <th width="10%">内容</th>
		<th width="5%">所属视频ID</th>
		<th width="10%">所属视频名称</th>
		<th width="2%">是否违规</th>
        <th width="10%">留言时间</th>
            
      </tr>      
        <tr>
          <td><input type="checkbox" name="id[]" value="1" /></td>
            <td>1</td>
          <td>神夜</td>      
          <td>这是一套后台UI，喜欢的朋友请多多支持谢谢。</td>
		   <td>1</td>
			<td>神夜</td> 
			<td><span class="fa fa-check"></span></td>
          <td>2016-07-01</td>
          
        </tr>
        <tr>
          <td><input type="checkbox" name="id[]" value="1" /></td>
            <td>1</td>
          <td>神夜</td>      
          <td>这是一套后台UI，喜欢的朋友请多多支持谢谢。</td>
		   <td>1</td>
			<td>神夜</td> 
			<td><span class="fa fa-check"></span></td>
          <td>2016-07-01</td>
     
        </tr>
          <tr>
          <td><input type="checkbox" name="id[]" value="1" /></td>
            <td>1</td>
          <td>神夜</td>      
          <td>这是一套后台UI，喜欢的朋友请多多支持谢谢。</td>
		   <td>1</td>
			<td>神夜</td> 
			<td><span class="fa fa-check"></span></td>
          <td>2016-07-01</td>
         
        </tr>
          <tr>
          <td><input type="checkbox" name="id[]" value="1" /></td>
            <td>1</td>
          <td>神夜</td>      
          <td>这是一套后台UI，喜欢的朋友请多多支持谢谢。</td>
		   <td>1</td>
			<td>神夜</td> 
			<td><span class="fa fa-check"></span></td>
          <td>2016-07-01</td>
       
        </tr>
          <tr>
         <td><input type="checkbox" name="id[]" value="1" /></td>
            <td>1</td>
          <td>神夜</td>      
          <td>这是一套后台UI，喜欢的朋友请多多支持谢谢。</td>
		   <td>1</td>
			<td>神夜</td> 
			<td><span class="fa fa-check"></span></td>
          <td>2016-07-01</td>
          
        </tr>
      <tr>
        <td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>
      </tr>
    </table>
  </div>
</form>
<script>

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
</body></html><?php }} ?>