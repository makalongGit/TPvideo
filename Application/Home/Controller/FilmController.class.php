<?php
namespace Home\Controller;
use Think\Controller;
class FilmController extends Controller {
	public function __construct(){
		parent::__construct();
		$this->video=D('Video');
	}
    public function movies(){
    	$cate=M('cate');
    	$cate_list=$cate
    				->where("cate.level=1")
    				->field('typeName')
    				->select();
    	$count=$this->video->where('isDelete=0 and isPassed=1')->count();
	    $page=new \Org\Video\Page($count);
	    $info=$this->video
				    ->where('isDelete=0 and isPassed=1')
				    ->limit($page->firstRow.','.$page->listRows)
				    ->order('vid desc')
				    ->select();
		$hot_list=$this->video
					->where('isDelete=0 and isPassed=1')
					->order('numOfViewed desc')
					->limit(10)
					->select();
	    $pagelist=$page->show();	
		$this->assign('info',$info);
		$this->assign('hot_list',$hot_list);
		$this->assign('pagelist',$pagelist);
    	$this->assign('cate_list',$cate_list);	
    	$this->display();
    }
}
