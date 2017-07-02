<?php  
namespace Admin\Controller;
use Think\Controller;
/*
后台登陆
 */
class LoginController extends Controller{

	public function login(){
		if(I('post.')){

			$very=new \Think\Verify();
			if($very->check(I('post.code'))){
				$info=D('Manager')->checkNP(I('post.name'),I('post.password'));
			
				if($info){
					//session持久化用户信息，页面跳转到后台
					session('admin_id',$info['mg_id']);
					session('admin_name',$info['mg_name']);
					$this->success('登陆成功', U('Admin/Index/index'),2);
					//$this->redirect('Index/index');
				}else{
					$this->error('登录失败',U('Admin/Login/login'),3);
				}
			}else
				$this->error('验证码错误',U('Admin/Login/login'),3);
		}else{
		$this->display();
	}
	}
	//验证码
	function passcode(){
		Passcode();
	}
}
