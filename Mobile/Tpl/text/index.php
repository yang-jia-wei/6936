<?php require APP_ROOT.'public/top2.php';?>
 <div style="margin: 10px 0px 0px 10px;">
    <li>
        <div class="album_list_cover">
            <a rel="nofollow" href="?m=text&a=details&classify_id=208" target="_blank">
                <img src="images/s_2834621_201908081240399934.jpg">
            </a>
            <span class="cover_label"></span>
        </div>
        <div class="album_list_tit"><a rel="nofollow" href="?m=text&a=details&classify_id=208">公司图片</a></div>
        <?php $total_num=M()->table('index_text n,index_relevance r')->where('r.classify_id =208 and r.content_id=n.text_id')->count();?>
        <div class="album_list_count"><?php echo $total_num;?>张图片</div>
    </li>
 </div>
   <div class="content">
        <div class="about">

         <?php $text = M()->table('index_text t,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=t.text_id')->find(); echo $text['text_content']; ?>
            　　
        </div>
    </div>




<!--<ul class="list-loop common_news" id="contentArea">-->
<!---->
<!---->
<!--    --><?php
//    $perpage=6;$offset=($p-1)*$perpage;
//    $text=M()->table('index_text n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.text_id')->order('date desc')->limit($offset,$perpage)->select();
//    $total_num=M()->table('index_text n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.text_id')->count();
//    foreach($text as $k=>$v){?>
<!--        <li class="loop news4"><a href="--><?php //echo content_url($v['type_id'],$v['content_id']);?><!--" title="--><?php //echo $v['text_title'];?><!--"><img  src="--><?php //echo $v['text_img'];?><!--" alt="--><?php //echo $v['text_title'];?><!--"><span>--><?php //echo $v['text_title'];?><!--</span></a>-->
<!--        </li>-->
<!--    --><?php //}?>
<!---->
<!---->
<!--</ul>-->


<?php require APP_ROOT.'public/bottom.php';?>
