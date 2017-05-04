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
		dump(empty($this->cate->getSon(3)));
		//dump(D('video')->where("vt_id=3")->select());
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
	public function update(){
		if(IS_POST){
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
	public function ajax(){
		if(IS_AJAX){

			$id=$_POST['test'];
			$test['status']  = 1;
			$test['content'] = $id;
			$this->ajaxReturn($test);
		}
	}

	public function deleteCat(){
		if(IS_AJAX){
			$id=I('post.data');
			$str=explode(',',$id);
$data['status']=3;
			//$data['s']=$str;
			/*for($i=0;$i<count($str);$i++){
				//dump(!empty(D('video')->where("vt_id='$str[i]'")->select()));
				if(!empty($this->cate->getSon($str[i]))){//有子栏目不能删
					$data['status']=1;
					//$this->success('$i');
					break;
				}else if(1/*!empty(D('video')->where("vt_id='$str[i]'")->select())){//该栏目下有电影不给删
					/*$data['status']=2;
					break;
				}else 
					$data['status2']=3;
			}*/
			/*if($this->cate->delete($id)){
				$data['status']=3;
			}else{
				$data['status']=4;
			}*/
					//$data['status']=2;
				/*}
				if($this->cate->delete($id))
												
				else
						*/
						
					
								
		$this->ajaxReturn($data);
	}
	
}
}

