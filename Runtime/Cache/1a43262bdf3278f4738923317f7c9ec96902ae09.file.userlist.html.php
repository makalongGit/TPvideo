<?php /* Smarty version Smarty-3.1.6, created on 2017-04-28 15:13:09
         compiled from "./Template/default/Admin\User\userlist.html" */ ?>
<?php /*%%SmartyHeaderCode:271285902eb85488b16-76413085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a43262bdf3278f4738923317f7c9ec96902ae09' => 
    array (
      0 => './Template/default/Admin\\User\\userlist.html',
      1 => 1493363584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271285902eb85488b16-76413085',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5902eb85655a8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5902eb85655a8')) {function content_5902eb85655a8($_smarty_tpl) {?><!DOCTYPE html>
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
pintuer.js"></script>
<script src="<?php echo @__ADMIN_JS__;?>
jquery-1.10.1.js"></script>

<script src="<?php echo @__ADMIN_JS__;?>
layer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="fa fa-user"></span> 用户列表</strong></div>
	<div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
      
        <li>
          <input type="text" placeholder="请输入用户ID" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
        
		  <button type="button" class="button border-main" onclick="changesearch()" id="cate_del"><span class="fa fa-search"></span> 
	搜索</button>
		</li>
			<li style="margin-left:600px"><span style="font-weight: bold;">筛选：</span><a href="javascript:void(0)" class="button border-main fa fa-long-arrow-up" onclick="changesearch()" id="shaixuan"> 违规次数</a></li>
      </ul>
    </div>
    <table class="table table-hover text-center" >
		<tr>
			
			<th width="10%">用户ID</th>
			<th width="10%">用户名</th>
			<th width="8%">性别</th>
			<th width="8%">电话</th>
			<th width="10%">生日</th>
			<th width="8%">邮箱</th>
			<th width="15%">用户最近登录时间</th>
			<th width="10%">违规次数</th>
			<th width="10%">用户状态</th>
			<th width="10%">修改状态<th>
		</tr>
   		<tr>
		
			<td>142011068</td>
			<td>pzs</td>
			<td>男</td>
			<td>15521226396</td>
			<td>1998-3-20</td>
			<td>666@sina.com</td>
			<td>2017-4-11 08:50:25</td>
			<td>0</td>
			<td id="UserState" >正常使用</td>
			<td>
				<select id="state" style="padding:5px 15px; border:1px solid #ddd;" onchange="changestate()">
					<option id="normal" value="normal">正常使用</option>
					<option id="unnormal" value="unnormal">封号中</option>
				</select>
		  </td>
        </tr>
		
		<tr> 
			<td colspan="12"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>
		</tr>
    </table>
  </div>
</div>
<script type="text/javascript">
	//搜索
	function changesearch(){	
		
	}

	//单个修改
	function changestate(){
			
			var selectId = document.getElementById("state");
			var selectText = selectId.options[selectId.selectedIndex].text;



			var tdtext = document.getElementById("UserState").innerHTML;
			if(!( selectText == tdtext))  
			{
					layer.confirm('确定修改吗？', {
					btn: ['确定','取消'] //按钮
					}, function(){
					 //点击第一个运行
						layer.msg('已修改', { icon: 1 });
						document.getElementById("UserState").innerHTML=selectId.options[selectId.selectedIndex].text; 
					//alert("1");
					}, function(){
					 //点击第二个运行
					// alert("2");
					layer.msg('已取消', { icon: 1 });
					if(selectId.selectedIndex == 0){
							selectId.options[1].selected = true;
							
						}
						else{
							selectId.options[0].selected = true;
							
						}
  
			});
		
				
			}  
			
	}
	


	var i = 1;
		$('#shaixuan').click(function(){
			
			if(i==1){
			$("#shaixuan").attr("class", "button border-main fa fa-long-arrow-down"); 
			i=0;
			}else{
			$("#shaixuan").attr("class", "button border-main fa fa-long-arrow-up");
			i=1;
			}
		
			
		
		});


</script>
</body>
</html><?php }} ?>