<?php require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>
<?php $label =$_GET['label'];?>
<?php $type =$_GET['type'];?>
<div id="content">

    <div class="container clearFix">
        <?php require APP_ROOT.'public/left.php';?>
        
        <div class="rightcont">
            <dl class="frnytitle clearFix">
                <?php if($type == 'goods'){?>
                    <?php  $goods=M($type)->where('goods_name like "%'.$label.'%" ')->select();
                    $total_num=count($goods);
                    ?>
                <?php }else{?>
                    <?php  $news=M($type)->where('news_title like "%'.$label.'%" ')->select();
                    $total_num=count($news);
                    ?>
                <?php }?>
                <dt>找到 <?php echo $total_num;?> 条记录</dt>
                <dd>关键词：<?php echo $label;?></dd>
            </dl>
            <div class="tagsshow">
                <ul>
                    <?php $perpage=10;$offset=($p-1)*$perpage;             ?>

                    <?php if($type == 'goods'){           ?>
                        <?php  $goods_label = M($type)->where('goods_name like "%'.$label.'%" ')->order('date desc')->limit($offset,$perpage)->select();
                        foreach($goods_label as $k=>$v){  ?>
                            <li>
                                <a href="<?php echo content_url($v['type_id'],$v['goods_id']);?>" title="<?php echo $v['goods_name'];?>">

                                    <?php echo $v['goods_name'];?>

                                </a><br><?php echo cover_time($v['date'],'Y-m-d H:i:s');?></li>
                        <?php }?>
                  <?php  }else{  ?>
                        <?php  $news_label = M($type)->where('news_title like "%'.$label.'%" ')->order('date desc')->limit($offset,$perpage)->select();
                        $total_num=count($news);
                        foreach($news_label as $k=>$v){  ?>
                            <li>
                                <a href="<?php echo content_url($v['type_id'],$v['news_id']);?>" title="<?php echo $v['news_title'];?>">

                                    <?php echo $v['news_title'];?>

                                </a><br><?php echo cover_time($v['date'],'Y-m-d H:i:s');?></li>
                        <?php }?>
                   <?php }?>


                </ul>
                <?php require APP_ROOT.'public/page.php';?>
            </div>
        </div>
    </div>


</div>
<?php require APP_ROOT.'public/foot.php';?>
