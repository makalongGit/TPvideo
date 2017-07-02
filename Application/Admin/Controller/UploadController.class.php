<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * 上传
 */
class UploadController extends Controller{	
	public function __construct(){
		parent::__construct();
		$this->video=D('Video');
		static $name;
	}
	public function check_name()
	{
		if(I('post.video_name')){
			$name=I('post.video_name');
			if($this->video->where("videoName='$name'")->find()){
				$rs['status']=1;	
			}else{
				$rs['status']=2;
			}
			$this->ajaxReturn($rs);
		}
	}
	public function upload()
	{
	
		if(I('post.video_name')){
			$name=I('post.video_name');
			if($this->video->where("videoName='$name'")->find()){
				$rs['status']=1;	
			}else{
				$rs['status']=2;
			}
			$this->ajaxReturn($rs);
		}
		$filename =__UPLOAD_TVIDEO__;//确定上传的文件名
		//第一次上传时没有文件，就创建文件，此后上传只需要把数据追加到此文件中
		if(!file_exists($filename)){
		    move_uploaded_file($_FILES['up_movie']['tmp_name'],$filename);
		}else{
		    file_put_contents($filename,file_get_contents($_FILES['up_movie']['tmp_name']),FILE_APPEND);
		}
	
	}
	public function up_mo()
	{
		
		$filename = './Upload/upload.wmv';//确定上传的文件名
		//第一次上传时没有文件，就创建文件，此后上传只需要把数据追加到此文件中
	
		if(!file_exists($filename)){
		    move_uploaded_file($_FILES['up_movie']['tmp_name'],$filename);
		}else{
		    file_put_contents($filename,file_get_contents($_FILES['up_movie']['tmp_name']),FILE_APPEND);
		}
	}

}