<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->video=D('video');
        $this->film_type=1;//视频类型id

    }
    public function index(){
        $info=$this->video
                    ->where("isPassed=1 and isDelete=0 and isHomePage=1")
                    ->order('numOfViewed desc')
                    ->limit(8)
                    ->select();
    	$film_list=$this->video
    				->join('cate on video.vt_id=cate.vt_id')
    				->where("isPassed=1 and isDelete=0 and cate.level='$this->film_type'")
    				->order('video.vid desc')
    				->limit(4)
    				->select();
        $variety_list=$this->video
                    ->join('cate on video.vt_id=cate.vt_id')
                    ->where("isPassed=1 and isDelete=0 and cate.level='15'")
                    ->order('video.vid desc')
                    ->limit(8)
                    ->select();
        $TV_list=$this->video
                    ->join('cate on video.vt_id=cate.vt_id')
                    ->where("isPassed=1 and isDelete=0 and cate.level='2'")
                    ->order('video.vid desc')
                    ->limit(8)
                    ->select();
        $carton_list=$this->video
                    ->join('cate on video.vt_id=cate.vt_id')
                    ->where("isPassed=1 and isDelete=0 and cate.level='22'")
                    ->order('video.vid desc')
                    ->limit(4)
                    ->select();
        $game_list=$this->video
                    ->join('cate on video.vt_id=cate.vt_id')
                    ->where("isPassed=1 and isDelete=0 and cate.vt_id='27'")
                    ->order('video.vid desc')
                    ->limit(4)
                    ->select(); 
        $this->assign('info',$info);
        $this->assign('variety_list',$variety_list);
    	$this->assign('film_list',$film_list);
        $this->assign('TV_list',$TV_list);
        $this->assign('carton_list',$carton_list);
        $this->assign('game_list',$game_list);
    	$this->display();
    }
    /**
     * 搜索栏
     * @return [type] [description]
     */
    public function search_key()
    {
        $data=I('post.key_word');
        $count=$this->video->where("keywords like '%$data%'")->count();
        $page=new \Org\Video\Page($count,20);
        $video=$this->video->where("keywords like '%$data%'")->limit($page->firstRow.','.$page->listRows)->select();
        $pagelist=$page->show();
        if(empty($video)){
            $this->error('无查询数据',U('Home/Index/index'),2);
        }
        $this->assign('pagelist',$pagelist);
        $this->assign('video',$video);
        $this->display();
    }
}
