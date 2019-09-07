
  <div id="left" class="left_panel">
    <div class="company">
      <div class="table">
        <div class="table_cell">
          <a href="admin.php?m=classify&a=index&admin_classify_id=3"><img src="<?php echo $site['logo_img'];?>"></a>
        </div>
      </div>
    </div>
    <div class="navigation">
      <ul>
        <?php 
  $list = M('admin_classify')->where(array('level_id'=>2))->order('date asc')->select(); //dump($list);die;
  foreach($list as $k=>$v){
    $user_classify = M('user_classify')->where(array('user_id'=>$user['user_id'],'classify_id'=>$v['classify_id']))->find();
    if(!empty($user_classify)){
  ?>
        <li <?php if($v['classify_id']==pg('admin_classify_id')){echo "class='active'";}?>>
          <a href="<?php echo $v['classify_url'];?>&admin_classify_id=<?php echo $v['classify_id'];?>">
            <img src="Admin/Tpl/images/left_<?php echo $k+1;?>.png">
            <span><?php echo $v['classify_name'];?></span>
          </a>
        </li>
        <?php
        if($v['classify_id'] == 3){
        $flist = M('classify')->where(['classify_pid'=>1])->order('date asc')->select();
        //dump($flist);die;
        foreach($flist as $li){ ?>
          <li <?php if($li['classify_id']==pg('classify_id')){echo "class='active'";}?>>
          <a href="admin.php?m=classify&a=index&&admin_classify_id=<?php echo $v['classify_id'];?>&classify_id=<?php  echo $li['classify_id'];?>">
            
            <span style="margin-left:50px;"><?php echo $li['classify_name'];?></span>
          </a>
        </li>
      <?php  } }}} ?>
      </ul>
    </div>

  </div>



