<?php  
namespace Home\Controller;
use Think\Controller;
/*
前台登陆
 */
class UserController extends Controller{

	public function __construct(){
		parent::__construct();
        $this->user=D('User');
	}
	
	public function login(){
		if(I('post.')){
			dump(I('post.'));
			$info=D('User')->checkNP($_POST['email'],$_POST['password']);
			if($info){
					//session持久化用户信息，页面跳转到后台
					session('user_id',$info['userID']);
					session('user_name',$info['username']);
					$this->success('登陆成功', U('Home/Index/index'),2);
					//$this->redirect('Index/index');
				}else{
					$this->error('登录失败',U('Home/Index/index'),99);
				}
		}
	}

	/*
	用户注册
	 */
	public function regist(){
		if(I('post.')){
			dump(I('post.'));
			$data['username']=I('post.name');
			$data['password']=I('post.password');
			$data['email']=I('post.email');
			$data['registerTime']=time();
			$data['accessToken']=md5(I('post.userID').I('post.password').I('email'));

			if($this->user->create($data)){
				if($this->user->add()){
					$link="http://localhost:8011/TPvideo/index.php/Home/User/activation?accessToken=".$data['accessToken'];
					dump($link);
					send_email($data['email'],'验证',$link);
					echo '请到邮箱激活信息';
					
				}else
					echo '创建用户失败';
			}
		}
	}
	/*
	激活
	 */
	public function activation(){
		$accessToken=I('get.accessToken');
		$nowTime=time();
		dump($accessToken);
		$rs=$this->user->where("accessToken='$accessToken'")->find();
		dump($rs);
		if($rs){
			if(round(($nowTime-$rs['registertime'])/3600/24)>1){
				echo '链接已过期';
			}else{
				$data['userstatus']=2;
				$update=$this->user->where("accessToken='$accessToken'")->save($data);
				if($update){
					echo '激活成功';
				}else
					echo '已激活或激活失败';
				}
		}else
			echo '插入数据失败';
	}
	/*
	找回密码
	 */
	public function resetPw(){
		$email=I('get.email');
		$accessToken=I('get.accessToken');
		//判断邮箱是否存在，令牌是否正确
		//正确进行修改密码操作
		//ajax做
	}
}