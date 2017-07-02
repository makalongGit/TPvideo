<?php /* Smarty version Smarty-3.1.6, created on 2017-06-26 20:03:32
         compiled from "./Template/default/Admin\Video\videolist.html" */ ?>
<?php /*%%SmartyHeaderCode:2015759020b1754a172-10535321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '199f98afbfb8f0be6bc08426a6a96b920328e392' => 
    array (
      0 => './Template/default/Admin\\Video\\videolist.html',
      1 => 1498478597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2015759020b1754a172-10535321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59020b17b9f47',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
    'parent_info' => 0,
    'catelist' => 0,
  ),
  'has_nocache_code' => false,
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
page.css">
<link rel="stylesheet" href="<?php echo @__ADMIN_CSS__;?>
font-awesome.min.css">
<script src="<?php echo @__ADMIN_JS__;?>
jquery-1.10.1.js"></script>
<script src="<?php echo @__ADMIN_JS__;?>
pintuer.js"></script>
<script src="<?php echo @__ADMIN_JS__;?>
layer.js"></script>
<style>
        #jdt{ width:300px; height:25px; }
        progress{ display:block;  width:200px; height:25px;  float:left;  }
        #sd{ float:left;  }        
    </style>
  
   <script>
        /*
            我们用到的api有Blob，他的file里面有slice方法可以截取二进制对象的一部分。。
            而且我们需要修改php.ini文件，
            upload_max_filesize = 20M ---上传文件，单个文件的最大值
            post_max_size = 20M  post方式最大上传20M

        */
        function bfbs(bfb){
            var pro = document.getElementsByTagName('progress')[0];
            pro.style.display = 'block';
            pro.setAttribute('value',bfb);
            var sd = document.getElementById('sd');
            sd.innerHTML = bfb +'%';
        }
        var clock = null;

        xhr = new XMLHttpRequest();

        function upgo(){
            /*var up_name=document.getElementById("up_name").value;
            if(up_name!=""){
              $.post("<?php echo U('Upload/upload');?>
",{ video_name : up_name },function(data){
                if(data['status']==1)
                  alert(该视频已存在);
                else
                  clock = window.setInterval(selefile,1000);
              });
            }
            else
              alert(请输入标题);  */
            clock = window.setInterval(selefile,1000);
        }

        var selefile = (function(){
            const LENGTH = 1 * 1024 * 1024; //每次切割10M
            var sta = 0;
            var end = sta + LENGTH;
            var flag = false; //标识上一块正在上传中...
            var blob = null;
            var fd = null;
            var xhr = null;
            var bfb = 0;

            return (function(){
                if(flag == true){
                    return;
                }
                var up_file = document.getElementById('video').files[0];
                //如果sta大于up_file.size那么就结束咯
                if(sta > up_file.size){
                    clearInterval(clock);
                    return false;
                }
                
                blob = up_file.slice(sta,end);
                var fd = new FormData();
                fd.append('up_movie',blob);
                fd.append('vname',123);
                //请求后端
                up(fd);

                sta = end;
                end = sta + LENGTH;
                flag = false;

                //进队条
                bfb = Math.ceil(100 * end / up_file.size);
                bfb > 100 ? bfb = 100 : bfb = bfb;
                bfbs(bfb);
            });
        })();

        function up(fd){
            xhr.open('POST',"<?php echo U('Admin/Upload/upload');?>
",false);
            xhr.send(fd);
        }
    </script>

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
        
          <td >
          <?php if ($_smarty_tpl->tpl_vars['v']->value['ishomepage']==1){?>
            <span class="fa fa-check" ></span>
          <?php }?>
          </td>
		      <td >
          <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['isrem'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?>  
          <span class="fa fa-check" ></span>
          <?php }?>
          </td>
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
  <div class="form-group" style="margin-left: 70px;">

         
       
        <div id="jdt">
         <label style="float: left;">标题：</label>
          <progress max="100" value=""></progress>
          <span id="sd"></span>
        </div>
        <input style="margin-left: 40px;margin-top: 5px" type="file" id="video" name="up_movie" onclick="upgo();" >
        <div id="desc"></div>
  </div>
    <form method="post" enctype="multipart/form-data" class="form-x" action="<?php echo U('video/videoadd');?>
">  
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" id="up_name" name="videoName" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>

     
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="img" class="input" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
         <!--  <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;"> -->
          <input type="file" id="upload_image" style="visibility: hidden;">
		    
        </div>
      </div>     
      
        <div class="form-group">
        <div class="label">
          <label>分类：</label>
        </div>
        <div class="field">
          <select  class="input w50" id="type">
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
          
            <select name="vt_id" class="input w50" id="lables">
            <option>请先选择类型</option>
            </select>
        </div>
      </div>  
       <!--  <div class="form-group">
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
<?php $_tmp2=ob_get_clean();?><?php echo preg_replace('!^!m',str_repeat("&nbsp&nbsp",$_tmp2),$_smarty_tpl->tpl_vars['v']->value['typename']);?>

               <?php }?></option>
       <?php } ?>
           </select>
           <div class="tips"></div>
         </div>
       </div> -->
        <div class="form-group">
          <div class="label">
            <label>其他属性：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            首页 <input id="isHomePage"  name="isHomePage" type="checkbox"  value="1"/>
            推荐 <input id="isRem" name="isRem" type="checkbox" value="1" />
          
         
          </div>
        </div>
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
    <form action="<?php echo U('Video/videoupdate');?>
" method="post" class="form-x" enctype="multipart/form-data" > 
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
        
        <div class="form-group">
        <div class="label">
          <label>分类：</label>
        </div>
        <div class="field">
          <select  class="input w50" id="type2">
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
          
            <select name="vt_id" class="input w50" id="lables2">
            <option>请先选择类型</option>
            </select>
        </div>
      </div> 
        <div class="form-group">
          <div class="label">
            <label>其他属性：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            首页 <input id="isHomePage"  name="isHomePage" type="checkbox"  value="1"/>
            推荐 <input id="isRem" name="isRem" type="checkbox" value="1" />
          
         
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
//栏目动态获得
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
$('#type2').click(function(){
  $(this).change(function(){
    var   value = $(this).val();
    $.post("<?php echo U('Cate/catelist');?>
",{ vt_id : value },function(data){
        $("#lables2").empty();
        var count = data.length;
        var i = 0;
        var b="";
           for(i=0;i<count;i++){
               b+="<option value='"+data[i].vt_id+"'>"+data[i].typename+"</option>";
           }
        $("#lables2").append(b);
    })    
  });
});

</script>






</body>
</html><?php }} ?>