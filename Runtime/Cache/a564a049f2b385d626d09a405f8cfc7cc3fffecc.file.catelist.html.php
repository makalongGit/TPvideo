<?php /* Smarty version Smarty-3.1.6, created on 2017-05-04 16:56:22
         compiled from "./Template/default/Admin\Cate\catelist.html" */ ?>
<?php /*%%SmartyHeaderCode:259315902ec2792d4c7-52090734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a564a049f2b385d626d09a405f8cfc7cc3fffecc' => 
    array (
      0 => './Template/default/Admin\\Cate\\catelist.html',
      1 => 1493888173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259315902ec2792d4c7-52090734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5902ec27ca7f9',
  'variables' => 
  array (
    'catelist' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
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
    <form>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['catelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <tr>
	<td style="text-align:left;">
  <input id="cate_check_id_<?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
" type="checkbox" name="cate_b_id" class="cate_check" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
" /></td>
      <td id="cate_id_<?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
</td>
      <td id="cate_cate_<?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>
</td>
	    <td id="up_cate_cate_<?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['level'];?>
</td>
     
      
    </tr>

    <?php } ?>
    </form>
</table>
    
  
  
</div>
<div id="div"></div>  
    <button class="ajaxtest" onclick="">AJAX</button>  

<script type="text/javascript">
$('.ajaxtest').click(function(){
  var test=123;
  var cons={
     test : test,
  };
  $.post("<?php echo U('Cate/ajax');?>
",cons,function(data){
    alert(data['status']);
    alert(data['content']);
  },'json');
});




//修改按钮点击
$('#button_gai').click(function(){ 
  //未选择
  if($('input[name="cate_b_id"]:checked').length==0){
    layer.tips('请选择修改内容', '#button_gai', {
      tips: [1, '#ff0033'] //还可配置颜色
    });
  }
  else{
    $("html,body").animate({ scrollTop:$("#edit").offset().top },300);
    //获得选择的id
    var inputs = document.getElementsByName('cate_b_id');
    for(var i = 0; i<inputs.length; i++){
      var obj = inputs[i];
      var value;
      if(obj.type == 'checkbox'){
        if(obj.checked == true){
         // alert(obj.id);//选中的id打印
          value = obj.id;
        }
      }
    }
  var arr = value.split('_');
  var str = $('#cate_cate_'+arr[3]).text();
  var id=$('#cate_id_'+arr[3]).text();
  var lev=$('#up_cate_cate_'+arr[3]).text();
  //alert(str);
  //alert(id);
  //alert(lev);
  $('#cate_cate_change').val(str);//获得栏目名称
  $('.vt_id_up').val(value);
  $('#level2').val(lev);

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
    //获得选中id，传到后台
    layer.confirm('确定删除吗？',{ 
    btn: ['确定','取消']}, function(){
    //点击第一个运行
    /*var id_array=new Array();
    $('input[name="cate_b_id"]:checked').each(function(){
      id_array.push($(this).val());
    });
    var idstr=id_array.join(',');
    //alert(idstr);
    $.post("<?php echo U('Cate/deleteCat');?>
",{ data : idstr },function(res){
      alert(res.status);
      //alert(res.status1);
      if(res.status==3){
        alert(123);
        
      else if(res.status==1)
        layer.msg('请先删除子栏目', { icon: 0 });
      else if(res.status==2)
        layer.msg('该栏目下有电影不给删', { icon: 0 });
      else if(res.status==4)
        layer.msg('删除失败请重试', { icon: 2 });
    });*/
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
    <form method="post" class="form-x" action="<?php echo U('Admin/Cate/add');?>
">
		<div class="form-group">
        <div class="label">
          <label>分类标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="typeName"  />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>上级分类：</label>
        </div>
        <div class="field">
          <select name="level" class="input w50">
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
         
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="vt_key" />
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
    <form method="post" class="form-x" action="<?php echo U('Admin/Cate/update');?>
">   
    <input type="hidden"  class="vt_id_up" name="vt_id_up"  >    
      <div class="form-group">
        <div class="label" >
          <label>分类标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="typeName" id="cate_cate_change" />
          <div class="tips"></div>
        </div>
      </div>    
	  <div class="form-group">
        <div class="label">
          <label>上级分类：</label>
        </div>
        <div class="field">
          <select id="level2" class="input w50">
            <option value="0">顶级分类</option>
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
                <?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>

                <?php }else{ ?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['lev'];?>
<?php $_tmp2=ob_get_clean();?><?php echo preg_replace('!^!m',str_repeat("&nbsp&nbsp",$_tmp2),$_smarty_tpl->tpl_vars['v']->value['typename']);?>

                <?php }?></option>
              <?php } ?>
          </select>
         
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="vt_key" value=""/>         
        </div>
      </div>
     
      
     
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button  id="updateS" onclick="" type="submit" class="button bg-main fa fa-check-square edit_tijiao" > 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body>
</html><?php }} ?>