<?php 
namespace Common\Model;
use Think\Model;
/**
* 用户model
*/
class UserModel extends Model{
	//自动完成
	protected $_auto=array(
		//array('registerTime','data',1,'function',array('Y-m-d')),
		array('password','md5',3,'function'),
		array('userstatus','0'),
		array('userVio','0'),
		);

	//检查用户，密码
	function checkNP($email,$pwd){
		//判断名字是否存在
		$info=$this->where("email='$email'")->find();
		//$nm记录存在,让记录密码和$pwd比较
		if($info){
			if($info['userstatus']!=2){
				$this->error('请先激活账号',U('Home/Index/index'),3);
			}
			if($info['password']===md5($pwd)){
				return $info;
			}else
			return null;
		}
	}
}