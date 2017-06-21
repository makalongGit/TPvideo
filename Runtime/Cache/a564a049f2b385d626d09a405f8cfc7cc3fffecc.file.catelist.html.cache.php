<?php /* Smarty version Smarty-3.1.6, created on 2017-06-13 23:51:47
         compiled from "./Template/default/Admin\Cate\catelist.html" */ ?>
<?php /*%%SmartyHeaderCode:322259400a1313d1b9-79325029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a564a049f2b385d626d09a405f8cfc7cc3fffecc' => 
    array (
      0 => './Template/default/Admin\\Cate\\catelist.html',
      1 => 1497266599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322259400a1313d1b9-79325029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'catelist' => 0,
    'v' => 0,
    'parent_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59400a1362ae5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59400a1362ae5')) {function content_59400a1362ae5($_smarty_tpl) {?><!DOCTYPE html>
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
          <select name="type" size="1" id="type">
             <option>请选择类型</option>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parent_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>
</option>
              <?php } ?>
          </select>
          标签：
            <select name="lable" size="1" id="lables">
            <option>请先选择类型</option>
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
    <form method="post" class="form-x" action="<?php echo U('Admin/Cate/cateupdate');?>
">   
      <input type="hidden"  class="vt_id_up" name="vt_id_up"id="vt_id_up"  >    
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
          <select name="type" size="1" id="type">
             <option>请选择类型</option>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parent_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['vt_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>
</option>
              <?php } ?>
          </select>
          标签：
            <select name="lable" size="1" id="lables">
            <option>请先选择类型</option>
            </select>
         
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input" id="vt_key"name="vt_key" value=""/>         
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
<script type="text/javascript">

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
  $.post("<?php echo U('Cate/cateupdate');?>
",{ id : arr[3] },function(data){
    jdata=eval("("+data+")");
    $('#cate_cate_change').val(jdata.typename);//获得栏目名称
    $('#vt_id_up').val(jdata.vt_id);
    $('#level2').val(jdata.level);
    $('#vt_key').val(jdata.vt_key);
  })

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
    var id_array=new Array();
    $('input[name="cate_b_id"]:checked').each(function(){
      id_array.push($(this).val());
    });
    $.post("<?php echo U('Cate/deleteCat');?>
",{ data : id_array },function(res){
      if(res.status==3){
        layer.msg('已删除', { icon: 1 });
        setTimeout("document.location.reload()",1250);
      }
      else if(res.status==1)
        layer.msg('请先删除子栏目', { icon: 0 });
      else if(res.status==2)
        layer.msg('该栏目下有电影不给删', { icon: 0 });
      else if(res.status==4)
        layer.msg('删除失败请重试', { icon: 2 });        
    });

    }, function(){
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

$('#type').click(function(){
  $(this).change(function(){
    var   value = $(this).val();
    $.post("<?php echo U('Cate/catelist');?>
",{ vt_id : value },function(data){
        $("#lables").empty();
        var count = data.length;
        var i = 0;
        var b="";
           for(i=0;i<count;i++){
               b+="<option value='"+data[i].vt_id+"'>"+data[i].typename+"</option>";
           }
        $("#lables").append(b);
    })    
  });
});
</script>
</body>
</html><?php }} ?>