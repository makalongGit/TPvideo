<?php
namespace Home\Controller;
use Think\Controller;
class GameController extends Controller {
	public function __construct()
	{
		parent::__construct();
		$this->video=D('Video');
		$this->type=27;//视频类型id
		$this->sequence='vid';  //默认排序
	}
    public function youxi(){
    	if(I('get.sequence'))
    		$this->sequence=I('get.sequence');
    	$hot_list=$this->video
    					->join('Cate on video.vt_id=Cate.vt_id')
						->where("isDelete=0 and isPassed=1 and Cate.vt_id=$this->type")
						->order('numOfViewed desc')
						->limit(10)
						->select();
    	$count=$this->video
					->join('Cate on video.vt_id=Cate.vt_id')
			    	->where("isDelete=0 and isPassed=1 and Cate.vt_id='$this->type'")
			    	->count();
		$page=new \Org\Video\Page($count,12);
		$info=$this->video
				    ->join('Cate on video.vt_id=Cate.vt_id')
				    ->limit($page->firstRow.','.$page->listRows)
		    		->where("isDelete=0 and isPassed=1 and Cate.vt_id='$this->type'")
				    ->order("$this->sequence desc")
				    ->select();			
		    $pagelist=$page->show();
		    $this->assign('info',$info);
			$this->assign('hot_list',$hot_list);
			$this->assign('pagelist',$pagelist);	
	    	$this->display();
    }
}
