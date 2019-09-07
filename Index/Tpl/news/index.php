<?php require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>

<div id="content">
    <div class="container clearFix">
        <?php require APP_ROOT.'public/left.php';?>
        <div class="rightcont">
            <dl class="frnytitle clearFix">
                <dt>当前位置：<a href="index.php">首页</a> &gt;&gt; <a href="javascript:;"><?php $classify=M('classify')->where(array('classify_id'=>$classify_id))->find();echo $classify['classify_name'];?></a></dt>
                <dd><?php $classify=M('classify')->where(array('classify_id'=>$classify_id))->find();echo $classify['classify_name'];?></dd>
            </dl>
            <ul class="newstitle">


                <?php $perpage=10;$offset=($p-1)*$perpage;
                $news = M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.news_id')->order('date desc')->limit($offset,$perpage)->select();
                $total_num=M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.news_id')->count();
                foreach($news as $k=>$v){  ?>
                    <li><span><?php echo cover_time($v['date'],'Y-m-d');?></span><a href="<?php echo content_url($v['type_id'],$v['news_id']);?>" title="<?php echo $v['news_title'];?>"><?php echo $v['news_title'];?></a><span class="news_time"></span></li>
<!--                    <li><span>2018-06-11</span><a href="http://www.gxnnxmzsh.com/?thread-3-1.html" title="统帅提议年轻社群互动李荣浩首位“真我”明星">统帅提议年轻社群互动李荣浩首位“真我”明星</a></li>-->
                <?php }?>
            </ul>
            <?php require APP_ROOT.'public/page.php';?>


        </div>
    </div>
</div>
<?php require APP_ROOT.'public/foot.php';?>
