<?php /* Smarty version Smarty-3.1.6, created on 2017-06-13 23:46:36
         compiled from "./Template/default/Admin\Video\videolist.html" */ ?>
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
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
    'catelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_594008dd2ebde',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594008dd2ebde')) {function content_594008dd2ebde($_smarty_tpl) {?><!DOCTYPE html>
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
	<button type="button" class="button border-red" onclick="" id="video_del"><span class="fa fa-trash-o"></span> 
	批量删除</button>
	
	<button type="button" class="button border-blue" onclick="" id="button_gai" ><span class="fa fa-edit"></span> 
	修改</button>
  <form action="<?php echo @__SELF__;?>
" method="POST" enctype="multipart/form-data">
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
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
   		 <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="video_b_id" id="video_check_id_<?php echo $_smarty_tpl->tpl_vars['v']->value['vid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['vid'];?>
" /></td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['vid'];?>
</td>
          <td width="10%"><img src="<?php echo @__UPLOAD_IMG__;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb_img'];?>
" alt="" width="70" height="50" /></td></td>
          <td id="video_name_<?php echo $_smarty_tpl->tpl_vars['v']->value['vid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
</td>
         <td id="video_vt_<?php echo $_smarty_tpl->tpl_vars['v']->value['vid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
</td>
          <td ><span class="fa fa-check" ><?php echo $_smarty_tpl->tpl_vars['v']->value['ishomepage'];?>
</span></td>
		      <td ><span class="fa fa-check"><?php echo $_smarty_tpl->tpl_vars['v']->value['isrem'];?>
</span></td>
          <td id="video_vt_<?php echo $_smarty_tpl->tpl_vars['v']->value['vid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
</td>
          <td id="video_time_<?php echo $_smarty_tpl->tpl_vars['v']->value['vid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['publishedtime'];?>
</td>
		  <td id="video_num_<?php echo $_smarty_tpl->tpl_vars['v']->value['vid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['numofviewed'];?>
</td>
        </tr>
        <?php } ?>   		 
     <tr> 
      <td colspan="12"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
 </td>
    </tr>
      
    </table>
  </div>
</form>


<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="fa fa-plus-square-o"></span> 增加内容</strong></div>
  <div class="body-content">
    <form method="post" enctype="multipart/form-data" class="form-x" action="<?php echo U('video/videoadd');?>
">  
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
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['catelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['v']->value['lev']==0){?>
                <span><?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
</span><?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>

                <?php }else{ ?>
                 <span ><?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
</span><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['lev'];?>
<?php $_tmp1=ob_get_clean();?><?php echo preg_replace('!^!m',str_repeat("&nbsp&nbsp",$_tmp1),$_smarty_tpl->tpl_vars['v']->value['typename']);?>

                <?php }?></option>
        <?php } ?>
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
    <form method="post" class="form-x" enctype="multipart/form-data" action="<?php echo U('Video/videoupdate');?>
"> 
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
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['catelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['v']->value['lev']==0){?>
                <span><?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
</span><?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>

                <?php }else{ ?>
                 <span ><?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
</span><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['lev'];?>
<?php $_tmp2=ob_get_clean();?><?php echo preg_replace('!^!m',str_repeat("&nbsp&nbsp",$_tmp2),$_smarty_tpl->tpl_vars['v']->value['typename']);?>

                <?php }?></option>
        <?php } ?>
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
  $.post("<?php echo U('Video/videoupdate');?>
",{ id : arr[3] },function(data){
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
    $.post("<?php echo U('Video/videodelete');?>
",{ data : id_array },function(res){
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