<?php
namespace Admin\Controller;
use Think\Controller;
/*
	评论列表
	 */
class BookController extends Controller{	
	public function __construct(){
		parent::__construct();
        $this->book=D('Review');
	}
	public function booklist(){
		$count=$this->book->count();
	    $page=new \Org\Video\Page($count);
	    $info=$this->book->limit($page->firstRow.','.$page->listRows)->select();
	    $pagelist=$page->show();	
		$this->assign('info',$info);
		$this->assign('pagelist',$pagelist);
		$this->display();
		
	}
	public function bookdelete(){
		$deleteArr=I('post.data');
		if($this->book->delete($deleteArr)){
  			$data['state']=1;
  		}else
  			$data['state']=0;
  		$this->ajaxReturn($data);  	
 	}
}