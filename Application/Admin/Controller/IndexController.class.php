<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller{
	public function index(){
		$this->display();
	}
	public function info(){
		$this->display();
	}
	public function email(){
		send_email('214693086@qq.com','test','test');
	}
}