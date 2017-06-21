<?php /*%%SmartyHeaderCode:2040159400a12b20466-74688100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a43262bdf3278f4738923317f7c9ec96902ae09' => 
    array (
      0 => './Template/default/Admin\\User\\userlist.html',
      1 => 1497399256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2040159400a12b20466-74688100',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59408007e8ee7',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59408007e8ee7')) {function content_59408007e8ee7($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>
<link rel="stylesheet" href="/TPvideo/Template/default/Admin/Public/css/pintuer.css">
<link rel="stylesheet" href="/TPvideo/Template/default/Admin/Public/css/admin.css">
<link rel="stylesheet" href="/TPvideo/Template/default/Admin/Public/css/page.css">

<link rel="stylesheet" href="/TPvideo/Template/default/Admin/Public/css/font-awesome.min.css">
<script src="/TPvideo/Template/default/Admin/Public/js/pintuer.js"></script>
<script src="/TPvideo/Template/default/Admin/Public/js/jquery-1.10.1.js"></script>

<script src="/TPvideo/Template/default/Admin/Public/js/layer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="fa fa-user"></span> 用户列表</strong></div>
	<div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
      
        <li>
        <form action="/tpvideo/index.php/admin/user/userlist.html" method="POST" enctype="multipart/form-data">
          <input type="text" placeholder="请输入用户ID" id="keywords"name="keywords"  class="input" style="width:250px; line-height:17px;display:inline-block" />
		  <button type="submit" class="button border-main" onclick="changesearch(this)" id="id_search"><span class="fa fa-search"></span> 
	搜索</button></form>
		</li>
			<form action="/tpvideo/index.php/admin/user/userlist.html" method="POST" enctype="multipart/form-data">
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
			<th width="10%">修改状态<th>
		</tr>
		   		<tr>
		
			<td>15</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>0</td>
			<td id="UserState" >0</td>
			<td>
				<select id="state" style="padding:5px 15px; border:1px solid #ddd;" onchange="changestate()">
					<option id="normal" value="normal">正常使用</option>
					<option id="unnormal" value="unnormal">封号中</option>
					<option id="unnormal" value="unnormal">未激活</option>
				</select>
		  </td>
        </tr>
           		<tr>
		
			<td>16</td>
			<td>123</td>
			<td></td>
			<td></td>
			<td></td>
			<td>214693085@qq.com</td>
			<td></td>
			<td>0</td>
			<td id="UserState" >0</td>
			<td>
				<select id="state" style="padding:5px 15px; border:1px solid #ddd;" onchange="changestate()">
					<option id="normal" value="normal">正常使用</option>
					<option id="unnormal" value="unnormal">封号中</option>
					<option id="unnormal" value="unnormal">未激活</option>
				</select>
		  </td>
        </tr>
           		<tr>
		
			<td>22</td>
			<td>马家隆</td>
			<td></td>
			<td></td>
			<td></td>
			<td>214693086@qq.com</td>
			<td></td>
			<td>0</td>
			<td id="UserState" >2</td>
			<td>
				<select id="state" style="padding:5px 15px; border:1px solid #ddd;" onchange="changestate()">
					<option id="normal" value="normal">正常使用</option>
					<option id="unnormal" value="unnormal">封号中</option>
					<option id="unnormal" value="unnormal">未激活</option>
				</select>
		  </td>
        </tr>
           		<tr>
		
			<td>23</td>
			<td>123123</td>
			<td></td>
			<td></td>
			<td></td>
			<td>921162960@qq.com</td>
			<td></td>
			<td>0</td>
			<td id="UserState" >0</td>
			<td>
				<select id="state" style="padding:5px 15px; border:1px solid #ddd;" onchange="changestate()">
					<option id="normal" value="normal">正常使用</option>
					<option id="unnormal" value="unnormal">封号中</option>
					<option id="unnormal" value="unnormal">未激活</option>
				</select>
		  </td>
        </tr>
        		
		<tr> 
			<td colspan="12"><div class="page"><a class="first" href="/tpvideo/index.php/admin/user/userlist/p/1.html">首页</a> <a class="prev not-allowed" href="javascript:;">上一页</a> <span class="current">1</span> <a class="next not-allowed" href="javascript:;">下一页</a> <a class="end" href="/tpvideo/index.php/admin/user/userlist/p/1.html">末页</a> <span class="rows">共 4 条记录</span></div> </td>
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
				alert('请输入用户ID');
			}
		}
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