<?php
namespace Home\Controller;
use Think\Controller;
class UploadController extends Controller {
    public function _initialize(){  
    $v=session('user_name');
        if(!isset($v)){
            session('returnUrl',$_SERVER['HTTP_REFERER']);
            dump(session('returnUrl'));
           $this->error('还未登录',U('Home/Index/index'),2);       
        }
    }
    public function _before_text()
    {
        echo 'before';
    }
    public function text(){
        echo '1';
    }
    
}
