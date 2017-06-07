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
	/**
	 * 发送邮件
	 * @param  string $address 需要发送的邮箱地址 发送给多个地址需要写成数组形式
	 * @param  string $subject 标题
	 * @param  string $content 内容
	 * @return boolean       是否成功
	 */
	function send_email($address,$subject,$content){
	    $email_smtp=C('EMAIL_SMTP');
	    $email_username=C('EMAIL_USERNAME');
	    $email_password=C('EMAIL_PASSWORD');
	    $email_from_name=C('EMAIL_FROM_NAME');
	    $email_smtp_secure=C('EMAIL_SMTP_SECURE');
	    $email_port=C('EMAIL_PORT');
	    if(empty($email_smtp) || empty($email_username) || empty($email_password) || empty($email_from_name)){
	        return array("error"=>1,"message"=>'邮箱配置不完整');
	    }
	    require_once './ThinkPHP/Library/Org/Video/class.phpmailer.php';
	    require_once './ThinkPHP/Library/Org/Video/class.smtp.php';
	    $phpmailer=new \Phpmailer();
	    // 设置PHPMailer使用SMTP服务器发送Email
	    $phpmailer->IsSMTP();
	    // 设置设置smtp_secure
	    $phpmailer->SMTPSecure=$email_smtp_secure;
	    // 设置port
	    $phpmailer->Port=$email_port;
	    // 设置为html格式
	    $phpmailer->IsHTML(true);
	    // 设置邮件的字符编码'
	    $phpmailer->CharSet='UTF-8';
	    // 设置SMTP服务器。
	    $phpmailer->Host=$email_smtp;
	    // 设置为"需要验证"
	    $phpmailer->SMTPAuth=true;
	    // 设置用户名
	    $phpmailer->Username=$email_username;
	    // 设置密码
	    $phpmailer->Password=$email_password;
	    // 设置邮件头的From字段。
	    $phpmailer->From=$email_username;
	    // 设置发件人名字
	    $phpmailer->FromName=$email_from_name;
	    // 添加收件人地址，可以多次使用来添加多个收件人
	    if(is_array($address)){
	        foreach($address as $addressv){
	            $phpmailer->AddAddress($addressv);
	        }
	    }else{
	        $phpmailer->AddAddress($address);
	    }
	    // 设置邮件标题
	    $phpmailer->Subject=$subject;
	    // 设置邮件正文
	    $phpmailer->Body=$content;
	    // 发送邮件。
	    if(!$phpmailer->Send()) {
	        $phpmailererror=$phpmailer->ErrorInfo;
	        return array("error"=>1,"message"=>$phpmailererror);
	    }else{
	        return array("error"=>0);
	    }
	}
	/**
	 * 制作缩略图
	 * @param  string  $src_path 原图路径
	 * @param  string  $des_path 存放路径
	 * @param  integer $width    宽度
	 * @param  integer $height   高度
	 * @return [type]            [description]
	 */
	function scale_img($src_path,$des_path,$width=300,$height=168){
		dump($src_path);
		dump($des_path);
		$src_image=imagecreatefromstring(file_get_contents($src_path));
		$src_width=imagesx($src_image);
		$src_height=imagesy($src_image);

		//生成等比例的缩略图
		$tmp_image_width = 0;
		$tmp_image_height = 0;
		if ($src_width / $src_height >= $width / $height) {
		    $tmp_image_width = $width;
		    $tmp_image_height = round($tmp_image_width * $src_height / $src_width);
		} else {
		    $tmp_image_height = $height;
		    $tmp_image_width = round($tmp_image_height * $src_width / $src_height);
		}
		 
		$tmpImage = imagecreatetruecolor($tmp_image_width, $tmp_image_height);
		imagecopyresampled($tmpImage, $src_image, 0, 0, 0, 0, $tmp_image_width, $tmp_image_height, $src_width, $src_height);
		 
		//添加白边
		$final_image = imagecreatetruecolor($width, $height);
		$color = imagecolorallocate($final_image, 255, 255, 255);
		imagefill($final_image, 0, 0, $color);
		 
		$x = round(($width - $tmp_image_width) / 2);
		$y = round(($height - $tmp_image_height) / 2);
		 
		imagecopy($final_image, $tmpImage, $x, $y, 0, 0, $tmp_image_width, $tmp_image_height);		 
		//输出图片
		if(imagejpeg($final_image,$des_path))
			return true;
		else 
			return false;
	}

	
