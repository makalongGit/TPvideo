<?php
namespace Common\Model;
use Think\Model;
/**
* 评论model
*/
class BookModel extends Model{
	//自动完成
	protected $_auto=array(
		array('Retime','data',1,'function',array('Y-m-d H:i:s')),
		);
}