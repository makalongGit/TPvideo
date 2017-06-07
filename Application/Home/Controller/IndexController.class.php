<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$film=M('video');
    	$film_list=$film
    				->join('cate on cate.vt_id=video.vt_id')
    				->where("isPassed=1 and isDelete=0 and cate.level=1")
    				->order('video.vid desc')
    				->limit(4)
    				->select();  	
    	$this->assign('film_list',$film_list);	
    	$this->display();
    }
}
