    <div class="right_top">
        <div class="top">

         <div class="top_li">
           <p><img src="Admin/Tpl/images/users.png"></p> 
           <p><?php echo $user['name']?></p>
         </div>

        <div class="top_li">
        <a target="_blank" href="./">
           <p><img src="Admin/Tpl/images/site.png"></p> 
           <p>网站首页</p>
           </a>
           </div>
  
        <div class="top_li">
          <a href="javascript:;" onclick="if(confirm('确定删除吗!')){ajax_list('admin.php?m=Index&a=cache','admin.php?m=classify&a=index&admin_classify_id=3')}">
           <p><img src="Admin/Tpl/images/cache.png"></p> 
           <p>清除缓存</p>
          </a>
           </div>

        <div class="top_li">
          <a href="admin.php?m=site&a=password_edit&admin_classify_id=2">
           <p><img src="Admin/Tpl/images/xgmm.png"></p> 
           <p>修改密码</p>
          </a>
           </div>

  <?php $site = M('site')->select(); if(count($site)>1){
    foreach($site as $k=>$v){?>
<div class="edition top_li">
  <a class="<?php if(session('version_id')==$v['version_id'])echo ' on';?>" href="admin.php?m=site&a=switch_version&version_id=<?php echo $v['version_id'];?>">
  <p><img src="Admin/Tpl/images/edition.png"></p>
  <p><?php echo $v['version_name'];?></p>
  </a>
</div>
  <?php } }?>
        </div> 
       <div class="exit">
         <a href="admin.php?m=login&a=login_exit">
           <p><img src="Admin/Tpl/images/exit.png"></p> 
           <p>退出登录</p>
         </a>
       </div>
    </div>


