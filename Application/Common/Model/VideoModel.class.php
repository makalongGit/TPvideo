<?php
namespace Common\Model;
use Think\Model\RelationModel;
/**
* 视频model
*/
class VideoModel extends RelationModel{
	//自动完成
	protected $_auto=array(
		array('publishedTime','date',1,'function',array('Y-m-d')),
		array('isDelete',0),
		array('isPassed',1),
		array('numofviewed','0'),
		);

	//自动验证
	/*protected $_validate = array(
     array('vt_id','has_son','请选择底层栏目',3,'function'),// 自定义函数验证密码格式
   		);*/
   	protected $_link=array(
   		'Cate'=>array( //栏目关联
   			'mapping_type'=>self::BELONGS_TO,
   			'class_name'=>'Cate',
   			'foreign_key'=>'vt_id',
   			'as_fields'=>'typename,level',
   			),
   		);
	/*public function has_son($vt_id){
		$cate=D('Cate');
		if(!empty($cate->getSon($vt_id))){
			return false;
		}
		return true;
	}*/
}