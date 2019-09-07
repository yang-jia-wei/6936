<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php $site=M('site')->order('date asc')->find() ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $site['company_name'] ?>-后台管理系统</title>
<link href="<?php echo APP_ROOT.'css/main.css';?>" rel="stylesheet" type="text/css" />
<script src="<?php echo APP_ROOT;?>js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo APP_ROOT;?>js/index.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo APP_ROOT;?>css/style.css">




</head>
<body >



<div id="particles"><canvas class="pg-canvas" width="1464" height="944"></canvas>

<div class="login">
    <div class="login_con">
        <div class="login_tit">后台管理系统</div>
        <div class="login_subtit">System Management Center </div>
        <div class="login_line"></div>
        <div class="login_submit">
<form action="admin.php?m=login&a=login_save" method="post" id="form">
            <p><img class="logo_icon" src="<?php echo APP_ROOT;?>images/user.png"><input type="text" name="data[username]" class="item" placeholder="用户名" autocomplete="off"/></p>
            <p><img class="logo_icon" src="<?php echo APP_ROOT;?>images/pass.png"><input type="password" name="data[password]" class="item" placeholder="密码" autocomplete="off"/></p>
            <p>
      <!--       <img class="logo_icon" src="<?php echo APP_ROOT;?>images/yzm.png">
                 <input type="text" class="item" placeholder="验证码" name="code" style="width:200px;float:left">
                 <img style="height:40px; width:80px;margin-left:10px;" title="点击可更换验证码" src="admin.php?m=Index&a=verify" alt="" onclick="this.src='admin.php?m=Index&a=verify&code='+Math.random()">    -->           
            </p>
            <p><input type="submit" class="login_a" value="登录"></a></p>
</form> 
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
  $('#particles').particleground({
    dotColor: 'rgba(255,255,255,0.1)',
    lineColor: 'rgba(255,255,255,0.1)'
});
</script>

<script src="<?php echo APP_ROOT;?>js/demo.js" type="text/javascript"></script>
<script src="<?php echo APP_ROOT;?>js/jquery.js" type="text/javascript"></script>
</body>
</html>
