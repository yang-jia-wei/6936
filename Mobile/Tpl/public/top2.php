<?php require APP_ROOT.'public/head.php';?>
<!--导航开始--> 
<ul class="nav">
<?php $list=M('classify')->where(array('classify_pid'=>2))->order('date asc')->select();foreach($list as $k=>$v){?> 
  <li><a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>" title="<?php echo $v['classify_name'];?>"><?php if($k==0){ ?><span class="iconfont">&#xe607;</span><?php } ?><?php echo $v['classify_name'];?></a></li>
<?php }?>
  
</ul>
 
<!--导航结束--> 

<!--内容开始-->
<div class="allpage">
  <div class="black-fixed iconfont">&#xe60f;</div>
  <!--页头开始-->
  <div class="header">
    <div class="head"> <a href="mobile.php" title="首页" class="home-btn commonfont">&#xe608;</a>
<?php $list=M('classify')->where(array('classify_id'=>$recursive_classify_id))->order('date asc')->find();?>
      <p class="top-title"><?php echo $list['classify_name'];?></p>
<!--      <div class="class-btn"><span class="commonfont">&#xe60a;</span></div>-->
      <div class="nav-btn commonfont">&#xe60b;</div>
    </div>
 <?php $list=M('classify')->where(array('classify_pid'=>$recursive_classify_id))->order('date asc')->find();
 if($list['classify_id']!=''){
 ?>   
    <div class="type">
      <h1>二级分类：</h1>
      <ul>
<?php $list=M('classify')->where(array('classify_pid'=>$recursive_classify_id))->order('date asc')->select();foreach($list as $k=>$v){?> 
        <li><a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>" title="<?php echo $v['classify_name'];?>"><?php echo $v['classify_name'];?></a> <span class="commonfont class-down"></span></li>
<?php }?>
 
      </ul>
    </div>
<?php } ?>
  </div>
  <!--页头结束--> 