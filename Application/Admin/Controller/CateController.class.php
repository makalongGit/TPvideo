<?php
namespace Admin\Controller;
use Think\Controller;
/*
	栏目列表
	 */
class CateController extends Controller{	
	public function __construct(){
		parent::__construct();
        $this->cate=D('Cate');
        //$this->cateDate=$this->cate->getAllDate();
	}
	public function catelist(){
		$info=$this->cate->select();		
		$catelist=$this->cate->getCatTree($info,0);
		$this->assign('catelist',$catelist);		
		$this->display();
	}
	public function add(){
		if(IS_POST){
			if($this->cate->addData()){
				$this->success('分类添加成功');
			}
		}
	}
	public function cateupdate(){
		if(IS_AJAX){		
			$id=I('post.id');
			$info=$this->cate->where("vt_id=".$id)->find();
			$data=json_encode($info,JSON_UNESCAPED_UNICODE);
			$this->ajaxReturn($data);
		}else if(IS_POST){
			$data['vt_id']=I('post.vt_id_up');
			$data['typeName']=I('post.typeName');
			$data['vt_key']=I('post.vt_key');
			$data['level']=I('post.level2');
			if($this->cate->save($data)){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
		}
	}

	public function deleteCat(){
		if(IS_AJAX){
			$str=I('post.data');
			for($i=0;$i<count($str);$i++){
				if(!empty($this->cate->getSon($str[$i]))){//有子栏目不能删
					$data['status']=1;
					break;
				}else if(!empty(D('video')->where("vt_id='$str[$i]'")->select())){//该栏目下有电影不给删
					$data['status']=2;
					break;
				}else if(flase===$this->cate->delete($str[$i])){
					$data['status']=4;
					break;	
				}else
					$data['status']=3;
			}
			$this->ajaxReturn($data);				
		}
	}
}

