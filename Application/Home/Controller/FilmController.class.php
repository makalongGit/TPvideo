<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');//控制器输出中文，需要转码，使用时可以删除或注释 
class FilmController extends Controller {
	public function __construct(){
		parent::__construct();
		$this->video=D('Video');
		$this->type=1;//视频类型id
		$this->sequence='vid';  //默认排序
	}
    public function movies(){  	   	
    	if(I('get.sequence'))
    			$this->sequence=I('get.sequence');
    	//类型
    	$cate=M('cate');
    	$cate_list=$cate
    				->where("cate.level=$this->type")
    				->field('typeName,vt_id')
    				->select();
    	//人气排行
    	$hot_list=$this->video
						->where('isDelete=0 and isPassed=1')
						->order('numOfViewed desc')
						->limit(10)
						->select();
		
    	if(I('get.order')){
    		$order=I('get.order');
    		$count=$this->video->where("isDelete=0 and isPassed=1 and vt_id=$order")->count();
	    	$page=new \Org\Video\Page($count,12);
    		$info=$this->video
				    ->where("isDelete=0 and isPassed=1 and vt_id=$order")
				    ->limit($page->firstRow.','.$page->listRows)
				    ->order("$this->sequence desc")
				    ->select();
			$pagelist=$page->show();
    	}else{
    		
	    	$count=$this->video
	    			->join('Cate on video.vt_id=Cate.vt_id')
			    	->where("isDelete=0 and isPassed=1 and Cate.level=$this->type")
			    	->count();
		    $page=new \Org\Video\Page($count,12);
		    $info=$this->video
					    ->join('Cate on video.vt_id=Cate.vt_id')
					    ->limit($page->firstRow.','.$page->listRows)
			    		->where("isDelete=0 and isPassed=1 and Cate.level=$this->type")
					    ->order("$this->sequence desc")
					    ->select();			
		    $pagelist=$page->show();
	    }	
		$this->assign('info',$info);
		$this->assign('hot_list',$hot_list);
		$this->assign('pagelist',$pagelist);
    	$this->assign('cate_list',$cate_list);	
    	$this->display();
    }

}
