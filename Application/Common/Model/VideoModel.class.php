<?php
namespace Common\Model;
use Think\Model;
/**
* 视频model
*/
class VideoModel extends Model{
	//自动完成
	protected $_auto=array(
		array('publishedTime','date',1,'function',array('Y-m-d')),
		array('isDelete','0'),
		array('numofviewed','0'),
		);
}