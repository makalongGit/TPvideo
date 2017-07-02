<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 评论
 */
class BookController extends Controller{
	public function __construct(){
		parent::__construct();
        $this->book=D('review');
	}
	public function getBook()
	{
		$vid=session('video_id');
		$mess=$this->book->field("reviews as text,time,color,position")->where("vid=$vid")->select();
		$mess=json_encode($mess);
		echo $mess;		
	}
	public function sendBook()
	{
		if(I('post.')){
			//$danmu=strip_tags(I('post.danmu'));
			$danmu=json_decode($_POST['danmu'],true);
			$data['time']=$danmu['time']+10;
			$data['color']=$danmu['color'];
			$data['reviews']=$danmu['text'];
			$data['Retime']=date("Y-m-d H:i:s");
			$num=rand(0,1000);
			$data['userID']=session('user_name')?session('user_name'):"游客$num";
			$data['vid']=session('video_id')?session('video_id'):0;
			if($this->book->add($data)){
				echo 'chengg';
			}else{
				echo '失败';
			}
		}
	}
	/**
	 * 发表评论
	 */
	public function review()
	{
		if(I('post.data')){
			if(session('user_id') && session('video_id')){
				$review=I('post.data');
				$data['userID']=session('user_id');
				$data['reviews']=$review;
				$data['vid']=session('video_id');
				$data['Retime']=date("Y-m-d H:i:s");
				$id=$this->book->add($data);
				if($id){
					$info=$this->book->where("ReID=$id")->find();
					$info['status']=1;
					$info['username']=session('user_name');
					$rs=json_encode($info,JSON_UNESCAPED_UNICODE);				
				}
				$this->ajaxReturn($rs);
			}else{
				$info['status']=2;
				$rs=json_encode($info,JSON_UNESCAPED_UNICODE);	
				$this->ajaxReturn($rs);
			}
		}
	}
}