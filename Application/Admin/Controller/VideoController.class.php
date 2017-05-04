<?php
namespace Admin\Controller;
use Think\Controller;
/*
	用户列表
	 */
class VideoController extends Controller{	
	public function __construct(){
		parent::__construct();
		$this->video=D('Video');
	}
	public function videolist(){
	/*
	用户id查询
	 */
		if(I('post.keywords')){
			$info=$this->video->where('vid=%u',I('post.keywords'))->select();
			if(!empty($info)){
				$this->assign('info',$info);
				$this->display();
			}else{
				$this->error('该视频不存在',U('Admin/Video/videolist'),3);
			}
		}else{
			$count=$this->video->count();
		    $page=new \Org\Video\Page($count);
		    $info=$this->video->limit($page->firstRow.','.$page->listRows)->select();
		    $pagelist=$page->show();		
			$this->assign('info',$info);
			$this->assign('pagelist',$pagelist);
			$this->display();
		}
	}
}