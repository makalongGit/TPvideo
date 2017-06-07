<?php
namespace Admin\Controller;
use Think\Controller;
/*
	用户列表
	 */
class UserController extends Controller{	
	public function __construct(){
		parent::__construct();
        $this->user=D('User');
	}
	
	public function userlist(){
	/*
	用户id查询
	 */
		if(I('post.keywords')){
			$info=$this->user->where('userID=%u',I('post.keywords'))->select();
			if(!empty($info)){
				$this->assign('info',$info);
				$this->display();
			}else{  
				$this->error('该用户不存在',U('Admin/User/userlist'),3);
			}
	/*
	排序
	 */
		}else if(I('post.order')){
			$count=$this->user->count();
		    $page=new \Org\Video\Page($count);
		    $pagelist=$page->show();	
			$info=$this->user->order('userVio desc')->select();
			$this->assign('info',$info);
			$this->assign('pagelist',$pagelist);
			$this->display();
		}
	/*
	显示列表
	 */
		else{
			$count=$this->user->count();
		    $page=new \Org\Video\Page($count);
		    $info=$this->user->limit($page->firstRow.','.$page->listRows)->select();
		    $pagelist=$page->show();		
			$this->assign('info',$info);
			$this->assign('pagelist',$pagelist);
			$this->display();
		}
	}

}
