<?php
namespace Common\Model;
use Think\Model;
class ManagerModel extends Model{
	//检查管理员用户，密码
	function checkNP($nm,$pwd){
		//判断名字是否存在
		$info=$this->where("mg_name='$nm'")->find();
		//$nm记录存在,让记录密码和$pwd比较
		if($info){
			if($info['mg_pwd']===$pwd)
				return $info;
		}
		return null;
	}
}