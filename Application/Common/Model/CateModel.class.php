<?php
namespace Common\Model;
use Think\Model;
/**
* 分类model
*/
class CateModel extends Model{
	//添加数据
    public function addData(){
        $data=I('post.');
        if($this->create($data)){ //创建数据对象
            return $this->add();	//写入数据库,返回新增的键
        }

    }
    //跟新数据
    public function updateDate(){
    	$data=I('post.');
    	
    }
    /*
		getCatTree 
	pram:int $id
	return $id 栏目下的子孙树
	*/
	public function getCatTree($arr,$id=0,$lev=0){
		$tree=array();
		foreach($arr as $v){
			if($v['level']==$id){
				$v['lev']=$lev;
				$tree[]=$v;
				$tree=array_merge($tree,$this->getCatTree($arr,$v['vt_id'],$lev+1));
			}
		}
		return $tree;
	}
	/*
	parm:int $id
	retrun $id栏目下的子栏目
	 */
	public function getSon($id){
		$data=$this->where("level = '$id'")->select();
		return $data;
	}
	/*
	parm:int $id
	return:array $id栏目的家谱树
	 */
	public function getTree($id=0){
		$tree=array();
		$cats=$this->select();
		while($id>0){
		foreach ($cats as $v) {
			if($v['vt_id']==$id){
				$tree[]=$v;
				$id=$v['level'];
			}
		}
	}
	return array_reverse($tree);
	}
}