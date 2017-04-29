<?php
	//验证码
	function Passcode(){
		//做配置
		$cfg=array(
			'imageH'=>'45',
			'imageW'=>'110',
			'fontSize'=>'15',
			'length'=>'4',
			'fontttf'=>'4.ttf',
		);
		//实例化Verify类
		$ver=new \Think\Verify($cfg);
		$ver->entry();//输出验证码
		return $ver;
	}

	
