
<?php require APP_ROOT.'public/top2.php';?>

  <!--文章列表开始-->
  <div class="content">
    <ul class="list-loop common_news" id="contentArea">
    <?php
        $perpage=10;$offset=($p-1)*$perpage;
        $news = M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.news_id')->order('date desc')->limit($offset,$perpage)->select();
        $total_num=M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.news_id')->count();
        foreach($news as $k=>$v){
    ?>

      <li class="loop news2"><a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" title="<?php echo $v['news_title'];?>"><span><?php echo $v['news_title'];?></span><span><?php echo date('Y/m/d',$v['date']); ?></span></a></li>

<?php } ?>

    </ul>
   <?php require APP_ROOT.'public/page.php';?>
  </div>
  <!--文章列表结束--> 

<?php require APP_ROOT.'public/bottom.php';?>