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
			$email=I('post.email');
			$info=$this->user->where("email='$email'")->find();
			if($info['userstatus']==2){
				$info=$this->user->checkNP($_POST['email'],$_POST['password']);
				if($info){
					$update['userID']=$this->user->where("email='$email'")->getField('userID');
					$update['lastLoginTime']=date('Y-m-d H:i:s',time());
					$this->user->save($update);
					//session持久化用户信息，页面跳转到后台
					session('user_id',$info['userid']);
					session('user_name',$info['username']);
					$returnUrl=session('returnUrl');//登陆后跳转到上一页面
					$this->success('登陆成功',$returnUrl,2);
				}else
					$this->error('密码错误',U('Home/Index/index'),2);				
			}else if($info['userstatus']==0)
				$this->error('账号未激活',U('Home/Index/index'),3);
			else if($info['userstatus']==1)
				$this->error('账号已被封，请联系管理员',U('Home/Index/index'),2);
		}
	}
	
	/*
	用户注册
	 */
	public function regist(){
		if(I('post.')){
			$email=I('post.email');
			$data['username']=I('post.name');
			$data['password']=I('post.password');
			$data['email']=$email;
			$data['registerTime']=time();
			$data['accessToken']=md5(I('post.name').I('post.password').I('post.email'));
			if($this->user->where("email='$email'")->find())
				$res['status']=3;
			else{
				if($this->user->create($data)){
					if($mess=$this->user->add()){
						$link="http://localhost:8011/TPvideo/index.php/Home/User/activation?accessToken=".$data['accessToken'];
						if(send_email($data['email'],'验证',$link))
							$res['status']=1;						
					}
				}else
					$res['status']=2;
			}
			$this->ajaxReturn($res);	
		}
	}
	/*
	激活
	 */
	public function activation(){
		$accessToken=I('get.accessToken');
		$nowTime=time();
		$rs=$this->user->where("accessToken='$accessToken'")->find();
		if($rs){
			if(round(($nowTime-$rs['registertime'])/3600/24)>1){
				$this->error("链接已过期",U('Home/Index/index'),2);
			}else{
				$data['userstatus']=2;
				$update=$this->user->where("accessToken='$accessToken'")->save($data);
				if($update){
					$this->success('激活成功',U('Home/Index/index'),2);
				}else
					$this->error('已激活',U('Home/Index/index'),2);
				}
		}else
			$this->error('系统错误',U('Home/Index/index'),2);
	}
	/**
	 * 验证邮箱
	 * @return [type] [description]
	 */
	public function resetPw(){
		if(I('post.email')){
			$email=I('post.email');
			$info=$this->user->where("email='$email'")->find();
			if($info){				
				$link="http://localhost:8011/TPvideo/index.php/Home/User/resetPw?accessToken=".$info['accesstoken'];
				send_email($info['email'],'验证',$link);
				$res['link']=$link;
				$res['status']=1;
			}else
				$res['status']=2;
			$this->ajaxReturn($res);
			
		}else if(I('get.accessToken')){
			$token=I('get.accessToken');
			$info=$this->user->where("accessToken='$token'")->find();
			if($info)
				$this->success('验证成功，请重置密码',U("Home/User/resetPw?success=$token"),2);			
			else
				$this->error('验证失败',U('Home/Index/index'),2);
		}else if(I('post.password')){
			$data['password']=md5(I('post.password'));
			$token=I('post.token');
			$info=$this->user->where("accesstoken='$token'")->find();
			if($info){
				if($this->user->where("accesstoken='$token'")->save($data))
					$res['status']=1;
				else
					$res['status']=2;
			}else
				$res['status']=3;
			$this->ajaxReturn($res);
			// $token=I('get.accessToken');
			// $info=$this->user->where("accessToken='$token'")->find();
		}else 
			$this->display();
	}

	/**
	 * 退出登陆
	 * @return [type] [description]
	 */
	public function logout(){
		session('user_name',null);
		session('user_id',null);
		$this->success('退出成功', U('Home/Index/index'),2);
	}
	public function userinfo()
	{
		if(I('post.')){
			dump($_POST);
		}else{
		$this->display();
	}
	}
}