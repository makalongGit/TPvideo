<?php /*%%SmartyHeaderCode:1640759400a4facc3e8-64004997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b706b87fa77d3f7745ae3ae153d5037689d430c9' => 
    array (
      0 => './Template/default/Admin\\Book\\booklist.html',
      1 => 1493889301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1640759400a4facc3e8-64004997',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59400a4fdb279',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59400a4fdb279')) {function content_59400a4fdb279($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
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
      <form  action="">
        <tr>
                  <td><input type="checkbox" name="id" id="checkbox"value="2" /></td>
          <td>2</td>
          <td>142011058</td>      
          <td>sjfdfkaf</td>
		      <td>54</td>
			    <td>54</td> 
			    <td><span class="fa fa-check"></span></td>
          <td>0000-00-00 00:00:00</td>
          
        </tr>
                  <td><input type="checkbox" name="id" id="checkbox"value="3" /></td>
          <td>3</td>
          <td>142011058</td>      
          <td>sjfdfkaf</td>
		      <td>53</td>
			    <td>53</td> 
			    <td><span class="fa fa-check"></span></td>
          <td>2017-06-13 20:08:11</td>
          
        </tr>
                  <td><input type="checkbox" name="id" id="checkbox"value="4" /></td>
          <td>4</td>
          <td>123</td>      
          <td>123123</td>
		      <td>54</td>
			    <td>54</td> 
			    <td><span class="fa fa-check"></span></td>
          <td>2017-06-13 20:08:11</td>
          
        </tr>
                  <td><input type="checkbox" name="id" id="checkbox"value="5" /></td>
          <td>5</td>
          <td>123</td>      
          <td>123123</td>
		      <td>54</td>
			    <td>54</td> 
			    <td><span class="fa fa-check"></span></td>
          <td>0000-00-00 00:00:00</td>
          
        </tr>
                  <td><input type="checkbox" name="id" id="checkbox"value="6" /></td>
          <td>6</td>
          <td>123</td>      
          <td>24</td>
		      <td>54</td>
			    <td>54</td> 
			    <td><span class="fa fa-check"></span></td>
          <td>0000-00-00 00:00:00</td>
          
        </tr>
                  <td><input type="checkbox" name="id" id="checkbox"value="7" /></td>
          <td>7</td>
          <td>123</td>      
          <td>123123123</td>
		      <td>54</td>
			    <td>54</td> 
			    <td><span class="fa fa-check"></span></td>
          <td>0000-00-00 00:00:00</td>
          
        </tr>
                  <td><input type="checkbox" name="id" id="checkbox"value="8" /></td>
          <td>8</td>
          <td>123</td>      
          <td>23234234</td>
		      <td>54</td>
			    <td>54</td> 
			    <td><span class="fa fa-check"></span></td>
          <td>2017-06-13 20:08:11</td>
          
        </tr>
                  <td><input type="checkbox" name="id" id="checkbox"value="9" /></td>
          <td>9</td>
          <td>123</td>      
          <td>123123123</td>
		      <td>54</td>
			    <td>54</td> 
			    <td><span class="fa fa-check"></span></td>
          <td>0000-00-00 00:00:00</td>
          
        </tr>
                  <td><input type="checkbox" name="id" id="checkbox"value="10" /></td>
          <td>10</td>
          <td>123</td>      
          <td>5345345</td>
		      <td>54</td>
			    <td>54</td> 
			    <td><span class="fa fa-check"></span></td>
          <td>0000-00-00 00:00:00</td>
          
        </tr>
                  <td><input type="checkbox" name="id" id="checkbox"value="11" /></td>
          <td>11</td>
          <td>123</td>      
          <td>4353453453</td>
		      <td>54</td>
			    <td>54</td> 
			    <td><span class="fa fa-check"></span></td>
          <td>2017-06-13 20:08:11</td>
          
        </tr>
                </form>
      <tr>
        <td colspan="12"><div class="page"><a class="first" href="/tpvideo/index.php/admin/book/booklist/p/1.html">首页</a> <a class="prev not-allowed" href="javascript:;">上一页</a> <span class="current">1</span><a class="num" href="/tpvideo/index.php/admin/book/booklist/p/2.html">2</a><a class="num" href="/tpvideo/index.php/admin/book/booklist/p/3.html">3</a><a class="num" href="/tpvideo/index.php/admin/book/booklist/p/4.html">4</a> <a class="next" href="/tpvideo/index.php/admin/book/booklist/p/2.html">下一页</a> <a class="end" href="/tpvideo/index.php/admin/book/booklist/p/4.html">末页</a> <span class="rows">共 32 条记录</span></div> </td>
      </tr>
    </table>
  </div>

<script>

//删除按钮点击
$('#cate_del').click(function(){ 

if($('input[name="id"]:checked').length==0){
layer.tips('请选择删除内容', '#cate_del', {
  tips: [1, '#ff0033'] //还可配置颜色
});
}else{

 layer.confirm('确定删除吗？', {
  btn: ['确定','取消'] //按钮
}, function(){
  //点击第一个运行 
  var id_array=new Array();
  $('input[name="id"]:checked').each(function(){
      id_array.push($(this).val());
  });
  var idstr=id_array.join(',');
  //alert($('form').serializeArray() );
  $.post("/tpvideo/index.php/admin/book/bookdelete.html",{ data : idstr },function(res){
    if(res.state==1){
      layer.msg('已删除', { icon: 1 });
      setTimeout("document.location.reload()",1250);
    }
    else
      layer.msg('请重试', { icon: 2 });
    
  } )
}, function(){
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