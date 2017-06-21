<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 视频展示
 */
class VideoController extends Controller{
	public function __construct(){
		parent::__construct();
        $this->video=D('Video');
        $this->cate=D('cate');
        $this->type=0;//视频类型id
		$this->sequence='vid';  //默认排序
	}
	/**
	 * 游戏视频展示
	 * @return [type] [description]
	 */
	public function game_show(){
		$this->type=GAME_TYPE;
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
    /**
     * 电影视频展示
     * @return [type] [description]
     */
    public function movie_show(){ 
    	$this->type=MOVIE_TYPE; 	   	
    	if(I('get.sequence'))
    		$this->sequence=I('get.sequence');
    	//类型
    	$cate_list=$this->cate
    				->where("cate.level=$this->type")
    				->field('typeName,vt_id')
    				->select();
    	//人气排行
    	$hot_list=$this->video
    					->join('Cate on video.vt_id=Cate.vt_id')
						->where("isDelete=0 and isPassed=1 and Cate.level=$this->type")
						->order('numOfViewed desc')
						->limit(10)
						->select();
		
    	if(I('get.order')){
    		$order=I('get.order');
    		$count=$this->video
    					->where("isDelete=0 and isPassed=1 and vt_id=$order")
    					->count();
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
    /**
     * 卡通视频展示
     * @return [type] [description]
     */
    public function carton_show(){
    	$this->type=CARTON_TYPE;
    	if(I('get.sequence'))
    			$this->sequence=I('get.sequence');
    	//类型
    	$cate_list=$this->cate
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
    /**
     * 电视剧视频展示
     * @return [type] [description]
     */
    public function tv_show(){
    	$this->type=TV_TYPE;
    	$cate_list=$this->cate
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
    /**
     * 综艺
     * @return [type] [description]
     */
    public function variety_show(){
    	$this->type=VARIETY_TYPE;
    	$cate_list=$this->cate
    				->where("cate.level=$this->type")
    				->field('typeName,vt_id')
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
		$this->assign('pagelist',$pagelist);
    	$this->assign('cate_list',$cate_list);	
    	$this->display();   	
    }
 //    {
	// 	"name":"江湖",
	// 	"singer":"许嵩",
	// 	"src":"http://ws.stream.qqmusic.qq.com/108344251.m4a?fromtag=46",
	// 	"img":"http://imgcache.qq.com/music/photo/album_500/65/500_albumpic_1588165_0.jpg",
	// }
   public function yinyue()
   {
   	//  $info=D('music')->field('name,singer,src,img')->select();

   	//  $info=json_encode($info,JSON_UNESCAPED_UNICODE);
   	
   	// var_dump($info);
   	 // $this->assign('info',$info);
   	$this->display();
   }

}