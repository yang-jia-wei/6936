<?php
/**
 * KindEditor PHP
 *
 * 本PHP程序是演示程序，建议不要直接在实际项目中使用。
 * 如果您确定直接使用本程序，使用之前请仔细确认相关安全设置。
 *
 */

require_once 'JSON.php';
$php_path = dirname(__FILE__) . '/';
$php_url = dirname($_SERVER['PHP_SELF']) . '/';

session_start();

//文件保存目录路径
$save_path =  '../../../../../Uploads/';
//文件保存目录URL
//$save_url = 'http://'.$_SERVER['SERVER_NAME'].'/Uploads/';
$save_url = 'Uploads/';
//定义允许上传的文件扩展名
$ext_arr = array(
	'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
	'flash' => array('swf', 'flv'),
	'media' => array('swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'),
	'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2'),
);
//最大文件大小   单位 字节
$max_size = 31457280;


$save_path = realpath($save_path) . '/';

//PHP上传失败
if (!empty($_FILES['imgFile']['error'])) {
	switch($_FILES['imgFile']['error']){
		case '1':
			$error = '超过php.ini允许的大小。';
			break;
		case '2':
			$error = '超过表单允许的大小。';
			break;
		case '3':
			$error = '图片只有部分被上传。';
			break;
		case '4':
			$error = '请选择图片。';
			break;
		case '6':
			$error = '找不到临时目录。';
			break;
		case '7':
			$error = '写文件到硬盘出错。';
			break;
		case '8':
			$error = 'File upload stopped by extension。';
			break;
		case '999':
		default:
			$error = '未知错误。';
	}
	alert($error);
}

//有上传文件时
if (empty($_FILES) === false) {
	//原文件名
	$file_name = $_FILES['imgFile']['name'];
	//服务器上临时文件名
	$tmp_name = $_FILES['imgFile']['tmp_name'];
	//文件大小
	$file_size = $_FILES['imgFile']['size'];
	//类型
	$file_type = $_FILES['imgFile']['type'];
	
	//finfo
	if(function_exists('finfo_open')){
		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		$type = finfo_file($finfo, $tmp_name);
		switch ($type) {
			case 'image/pjpeg' : $ok=1;
				break;
			case 'image/jpeg' : $ok=1;
				break;
			case 'image/jpg' : $ok=1;
				break;
			case 'image/gif' : $ok=1;
				break;
			case 'image/x-png' : $ok=1;
				break;
			case 'image/png' : $ok=1;
				break;
			case 'image/bmp' : $ok=1;
				break;
			default:
				alert("上传文件扩展名是不允许的扩展名。");
		}
	}
	
	//检查文件名
	if (!$file_name) {
		alert("请选择文件。");
	}
	//检查目录
	if (@is_dir($save_path) === false) {
		alert("上传目录不存在。");
	}
	//检查目录写权限
	if (@is_writable($save_path) === false) {
		alert("上传目录没有写权限。");
	}
	//检查是否已上传
	if (@is_uploaded_file($tmp_name) === false) {
		alert("上传失败。");
	}
	//检查文件大小
	if ($file_size > $max_size) {
		alert("上传文件大小超过限制。");
	}
	//检查目录名
	$dir_name = 'image';//empty($_GET['dir']) ? 'image' : trim($_GET['dir']);
	if (empty($ext_arr[$dir_name])) {
		alert("目录名不正确。");
	}
	//获得文件扩展名
	//$temp_arr = explode(".", $file_name);
	//$file_ext = array_pop($temp_arr);
	//$file_ext = trim($file_ext);
	//$file_ext = strtolower($file_ext);
	$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
	$file_ext = strtolower($file_ext);
	//echo $file_ext;die;
	//检查扩展名
	if (in_array($file_ext, $ext_arr[$dir_name]) === false) {
		alert("上传文件扩展名是不允许的扩展名。\n只允许" . implode(",", $ext_arr[$dir_name]) . "格式。");
	}
	//创建文件夹
	if ($dir_name !== '') {
		$save_path .= $dir_name . "/";
		$save_url .= $dir_name . "/";
		if (!file_exists($save_path)) {
			mkdir($save_path);
		}
	}
	$ymd = date("Ymd");
	$save_path .= $ymd . "/";
	$save_url .= $ymd . "/";
	if (!file_exists($save_path)) {
		mkdir($save_path);
	}
	//新文件名
	$new_file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $file_ext;
	//移动文件
	$file_path = $save_path . $new_file_name;
	
	$img_info = getimagesize($tmp_name);
	//var_dump($img_info['mime']);die;
	// cut_img($tmp_name, $img_info[0]-1, $img_info[0]-1, $file_path, $img_info['mime']);
	if (move_uploaded_file($tmp_name, $file_path) === false) {
		alert("上传文件失败。");
	}
	
	@chmod($file_path, 0644);
	$file_url = $save_url . $new_file_name;

	header('Content-type: text/html; charset=UTF-8');
	$json = new Services_JSON();
	echo $json->encode(array('error' => 0, 'url' => $file_url));
	exit;
}

function alert($msg) {
	header('Content-type: text/html; charset=UTF-8');
	$json = new Services_JSON();
	echo $json->encode(array('error' => 1, 'message' => $msg));
	exit;
}




//要裁减的图片，宽度，高度
function cut_img($img,$w,$h, $save_address, $type_img){ 
	if($type_img == "image/pjpeg" || $type_img == "image/jpeg")
	    $s = imagecreatefromjpeg($img); 
	else if($type_img == "image/png")
	    $s = imagecreatefrompng($img);
	$w = imagesx($s)<$w?imagesx($s):$w;  //如果图片的宽比要求的小，则以原图宽为准
	$h = imagesy($s)<$w?imagesy($s):$h;
	$bg = imagecreatetruecolor($w,$h);        //创建$w*$h的空白图像
	
	if(imagecopy($bg,$s,0,0,0,0,$w,$h)){
		if(imagejpeg($bg,$save_address)){            //将生成的图片保存到img/new_img.jpg
			echo "success";
		}else{
			echo "false";
		}
	}else{
		echo "false";
	}
	
	//imagecopy ($dst_im,$src_im,$dst_x,$dst_y,$src_x,$src_y,$src_w,$src_h);
	 
	imagedestroy($s);                //关闭图片
	imagedestroy($bg);
}
