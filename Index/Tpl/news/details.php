<?php require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>

<div id="content">
    <div class="container clearFix">
        <?php require APP_ROOT.'public/left.php';?>
        <!--            接值（$news_id）-->
        <?php $news=M('news')->where(array('news_id'=>$content_id))->find(); ?>
        <div class="rightcont">
            <dl class="frnytitle clearFix">
                <dt>当前位置：<a href="index.php">首页</a> &gt;&gt; <a href="#" onClick="javascript :history.go(-1)";><?php $classify=M('classify')->where(array('classify_id'=>$classify_id))->find();echo $classify['classify_name'];?></a> &gt;&gt; 浏览文章</dt>
                <dd><?php $classify=M('classify')->where(array('classify_id'=>$classify_id))->find();echo $classify['classify_name'];?></dd>
            </dl>
            <h1><?php echo $news['news_title'];?></h1>
            <div class="keyword">标签：
                                       <?php
                                       $label = unserialize($news['biaoqian']);
                                       foreach($label as $k=>$v){      
                                           $new_label=M('label')->where(array('label_id'=>$v))->find();
                                           echo $new_label['label_title'].',';
                                       }
                                       ?>
                   <?php ?>
                时间：

                阅读
<!--                <script language="Javascript" src="js/GetHits.asp"></script>-->
                <?php echo $news['news_traffic'];?>
                次
            </div>
            <div class="substance">
                <div id="MyContent">
                    <p>&nbsp;
                        <?php echo $news['news_content'];?>
                    </p>
                </div>
            </div>
            <?php
            $news_gt = M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date > '.$news['date'].' and r.content_id=n.news_id')->order('date asc')->find();
            if(!empty($news_gt)){?>
                <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($news_gt['type_id'],$news_gt['news_id']) ?>">上一篇：<?php echo $news_gt['news_title'];?></a></div>
            <?php }?>
            <?php  $news_lt = M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date < '.$news['date'].' and r.content_id=n.news_id')->order('date desc')->find();  if(!empty($news_lt)){?>
                <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($news_lt['type_id'],$news_lt['news_id']) ?>">下一篇：<?php echo $news_lt['news_title'];?></a></div>
            <?php }?>

            <div class="x_g">相关：
                <?php   foreach($label as $k=>$v){
                    $new_label=M('label')->where(array('label_id'=>$v))->find();       ?>
                    <a href="?m=label&a=index&type=news&label=<?php echo $new_label['label_title']; ?>" target="_blank"><?php echo $new_label['label_title']; ?></a>
               <?php }?>


            </div>
        </div>
    </div>
</div>
<?php require APP_ROOT.'public/foot.php';?>
