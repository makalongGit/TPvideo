<?php /* Smarty version Smarty-3.1.6, created on 2017-06-14 20:45:02
         compiled from "./Template/default/Admin\User\userlist.html" */ ?>
<?php /*%%SmartyHeaderCode:271285902eb85488b16-76413085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a43262bdf3278f4738923317f7c9ec96902ae09' => 
    array (
      0 => './Template/default/Admin\\User\\userlist.html',
      1 => 1497444295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271285902eb85488b16-76413085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5902eb85655a8',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
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
page.css">

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
        <form action="<?php echo @__SELF__;?>
" method="POST" enctype="multipart/form-data">
          <input type="text" placeholder="请输入用户ID" id="keywords"name="keywords"  class="input" style="width:250px; line-height:17px;display:inline-block" />
		  <button type="submit" class="button border-main" onclick="changesearch(this)" id="id_search"><span class="fa fa-search"></span> 
	搜索</button></form>
		</li>
			<form action="<?php echo @__SELF__;?>
" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="order" value="1">
			<li style="margin-left:600px"><span style="font-weight: bold;">筛选：</span><button  type="submit"class="button border-main fa fa-long-arrow-up" onclick="" id="vio_search"> 违规次数</button></li></form>
      </ul>
    </div>
    <table class="table table-hover text-center" >
		<tr>
			
			<th width="10%">用户ID</th>
			<th width="10%">用户名</th>
			<th width="8%">性别</th>
			<th width="8%">电话</th>
			<th width="18%">生日</th>
			<th width="8%">邮箱</th>
			<th width="15%">用户最近登录时间</th>
			<th width="10%">违规次数</th>
			<th width="10%">用户状态</th>
			<th width="10%">修改状态</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
   		<tr>
		
			<td id="UserId" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['userid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['userid'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['sex'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['birthday'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['lastlogintime'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['uservio'];?>
</td>
			<td id="UserState">
			<?php if ($_smarty_tpl->tpl_vars['v']->value['userstatue']==1){?>
			document.getElementById("state").options[1].selected = true;
			<?php }elseif($_smarty_tpl->tpl_vars['v']->value['userstatus']==2){?>
			未激活
			<?php }else{ ?>
			正常使用
			<?php }?>
			</td>
			<td>
				<select name="state" id="state_<?php echo $_smarty_tpl->tpl_vars['v']->value['userid'];?>
" style="padding:5px 15px; border:1px solid #ddd;" onchange="changestate(this)">
					<option id="state0" value="3">更改状态</option>
					<option id="state0" value="0">正常使用</option>
					<option id="state1" value="1">封号中</option>
					<option id="state2" value="2">未激活</option>
				</select>
		  	</td>
        </tr>
        <?php } ?>
		
		<tr> 
			<td colspan="12"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
 </td>
		</tr>
    </table>
  </div>
</div>
<script type="text/javascript">
	//查询
	function changesearch(obj){
		if(obj==id_search){
			var id=document.getElementById("keywords").value;
			if(id==''){
				layer.msg('请输入用户ID', { icon: 2 });				
			}
		}
	}
	//单个修改
	function changestate(obj){
			
			//var selectId = document.getElementByName("state");
			//var selectText = selectId.options[selectId.selectedIndex].text;
			//var selectValue = selectId.options[selectId.selectedIndex].value;
			//var tdtext = document.getElementById("UserState").innerHTML;
			//var userID = document.getElementById("UserId").innerHTML;
			//alert(userID);
			alert(obj.id);
			alert(selectValue);
			if(!( selectText == tdtext ))
			{
					layer.confirm('确定修改吗？', {
					btn: ['确定','取消'] //按钮
					}, function(){
					 //点击第一个运行
					 // $.post("<?php echo U('Admin/User/update_sta');?>
",{ status:selectValue },function(data){
      //               alert(data['status']);
                    
                  
      //             })
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