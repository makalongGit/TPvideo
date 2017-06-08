<?php
namespace Admin\Controller;
use Think\Controller;
/*
	视频表
	 */
class VideoController extends Controller{	
	public function __construct(){
		parent::__construct();
		$this->video=D('Video');
	}

	public function videolist(){
	/*
	视频id查询
	 */
		if(I('post.keywords')){
			$info=$this->video->where('vid=%u',I('post.keywords'))->select();
			if(!empty($info)){
				$this->assign('info',$info);
				$this->display();
			}else{
				$this->error('该视频不存在',U('Admin/Video/videolist'),3);
			}			
		}else{
			$count=$this->video->where('isDelete=0')->count();
		    $page=new \Org\Video\Page($count);
		    $info=$this->video->where('isDelete=0')->limit($page->firstRow.','.$page->listRows)->select();
		    $pagelist=$page->show();
		    $cinfo=D('Cate')->select();		
			$catelist=D('Cate')->getCatTree($cinfo,0);
			$this->assign('catelist',$catelist);			
			$this->assign('info',$info);
			$this->assign('pagelist',$pagelist);
			$this->display();
		}
	}

	public function videoadd(){
		if(I('post.')){
			$data=I('post.');
			//上传图片
			if($_FILES['img']){		
				$upload=new \Think\Upload();
				$info=$upload->uploadOne($_FILES['img']);
				if(!$info) {// 上传错误提示错误信息
	    			$this->error($upload->getError());
				}else{// 上传成功 获取上传文件信息,对图片进行处理
					//原图路径
	        		$img=$info['savepath'].$info['savename'];
	        		//缩略图路径
	        		$thumb_img=dirname($img).'/thumb_'.basename($img);
	        		$mid_img=dirname($img).'/mid_'.basename($img);
	        		//生成缩略图	        		 
	        		 scale_img(__UPLOAD__.$img,__UPLOAD__.$thumb_img,85,55);
	        		 scale_img(__UPLOAD__.$img,__UPLOAD__.$mid_img);
	        		$data['ori_img']=$img;
	        		$data['thumb_img']=$thumb_img;
	        		$data['mid_img']=$mid_img;
				}
				if($this->video->create($data)){
           	 		if($this->video->add())//写入数据库,返回新增的键
           	 			$this->success('新增成功', U('Admin/Video/videolist'));
           	 		else
           	 			$this->error('请重试',U('Admin/Video/videolist'));
				}
			}
		}
	}
	
	public function videoupdate(){
		if(IS_AJAX){
			$id=I('post.id');
			
			$info=$this->video->where("vid=".$id)->find();
			//将数组转为json格式
			$data=json_encode($info,JSON_UNESCAPED_UNICODE);
			$this->ajaxReturn($data);
		}
		$data=I('post.');
		if($_FILES['img1']){
			$upload=new \Think\Upload();
			$info=$upload->uploadOne($_FILES['img1']);
			if(!$info) {// 上传错误提示错误信息
    			$this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息,对图片进行处理
				//原图路径
        		$img=$info['savepath'].$info['savename'];
        		//缩略图路径
        		$thumb_img=dirname($img).'/thumb_'.basename($img);
        		//生成缩略图
        		$image=new \Think\Image();
        		$image->open(__UPLOAD__.$img);
        		$image->thumb(85,55)->save(__UPLOAD__.$thumb_img);
        		$data['ori_img']=$img;
        		$data['thumb_img']=$thumb_img;
			}
   	 		if($this->video->where("vid=".$data['vid'])->save($data))//写入数据库,返回新增的键
   	 			$this->success('更改成功', U('Admin/Video/videolist'));
   	 		else
   	 			$this->error('请重试');
		}
	}

	public function videodelete(){
		if(IS_AJAX){
			$str=I('post.data');
			$data['isDelete'] = 1;
			for($i=0;$i<count($str);$i++){
				if(false===$this->video->where("vid='$str[$i]'")->save($data)){
					$str['status']=2;
					break;
				}else
					$str['status']=1;
			}
			$this->ajaxReturn($str);
		}
	}
}