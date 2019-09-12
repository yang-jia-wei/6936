<?php require APP_ROOT.'public/top2.php';?>
    <!--文章内容开始-->
    <!--            接值（$news_id）-->
<?php $news=M('news')->where(array('news_id'=>$content_id))->find(); ?>
    <div class="content">
        <div class="about">
            <h1><?php echo $news['news_title'];?></h1>
            <span class="picContent">
      <p>
             <?php echo $news['news_content'];?>


<!--	<span style="font-size:14px;">........待续</span></div>-->
                </p>
      </span>

            <?php  $news_gt = M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date > '.$news['date'].' and r.content_id=n.news_id')->order('date asc')->find();  if(!empty($news_gt)){?>
                <a href="<?php echo content_url($news_gt['type_id'],$news_gt['news_id']) ?>" class="page" data-ignore="true">上一条：<?php echo $news_gt['news_title'];?></a>
            <?php }?>
            <?php  $news_lt = M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date < '.$news['date'].' and r.content_id=n.news_id')->order('date desc')->find();  if(!empty($news_lt)){?>
                <a href="<?php echo content_url($news_lt['type_id'],$news_lt['news_id']) ?>" class="page" data-ignore="true">下一条：<?php echo $news_lt['news_title'];?></a>
            <?php }?>


            <!--            <a href="javascript:;" class="page" data-ignore="true">上一条：暂无记录</a>-->
<!--            <a href="javascript:;" class="page" data-ignore="true">下一条：暂无记录</a>-->
            <a href="<?php $classify=M('classify')->where(array('classify_id'=>212))->find();echo classify_url($classify['type_id'],$classify['classify_id']);?>" title="返回列表" class="back">返回列表</a>
        </div>
    </div>
    <!--文章内容结束-->
<?php require APP_ROOT.'public/bottom.php';?>