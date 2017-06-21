<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 播放
 */
class PlayerController extends Controller{
	public function __construct(){
		parent::__construct();
        $this->video=D('video');
	}
	public function play()
	{
		if(I('get.video_id')){
			$vid=I('get.video_id');
			session('video_id',"$vid");	
			$count=D('review')
						->where("vid=$vid")			
						->count();
		    $page=new \Org\Video\Page($count,5);
		    $review_info=D('review')
							->where("vid=$vid")
							->limit($page->firstRow.','.$page->listRows)
							->order('ReID desc')
							->select();
		    $pagelist=$page->show();
			$video_info=$this->video
							->where("isDelete=0 and isPassed=1 and vid=$vid")
							->find();
			if(!empty($video_info['videosrc'])){
				//增加观看次数
				$data['numOfViewed']=intval($video_info['numofviewed'])+1;
				$st=$this->video->where("vid=$vid")->save($data);
				$this->assign('pagelist',$pagelist);
				$this->assign('video_info',$video_info);
				$this->assign('review_info',$review_info);
				$this->display();
			}else{
				$this->error('视频不存在',U('Home/Index/index'),2);
			}			
		}
	}

}