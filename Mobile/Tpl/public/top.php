<?php require APP_ROOT . 'public/head.php'; ?>

<!--导航开始--> 
<ul class="nav">
<?php $list=M('classify')->where(array('classify_pid'=>2))->order('date asc')->select();foreach($list as $k=>$v){?> 
  <li><a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>" title="<?php echo $v['classify_name'];?>"><?php if($k==0){ ?><span class="iconfont">&#xe607;</span><?php } ?><?php echo $v['classify_name'];?></a></li>
<?php }?>

</ul>
 
<!--导航结束--> 

<!--内容开始-->
<div class="allpage">
  <div class="black-fixed iconfont"></div>
  <!--页头开始-->
  <div class="header">
    <div class="head"> <a href="mobile.php"  title="" class="logo">
            <span style="font-size: 15px;" class="top-title"><?php echo $site['company_name'];?></span>
             </a>
      <div class="nav-btn commonfont"></div>
    </div>
  </div>
  <!--页头结束-->