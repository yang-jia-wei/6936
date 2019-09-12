<?php require APP_ROOT.'public/top2.php';?>


<div class="content">
    <div class="about">

        　　<ul class="list-loop common_news" id="contentArea">
            <?php
            $perpage=6;$offset=($p-1)*$perpage;
            $text=M()->table('index_text n,index_relevance r')->where('r.classify_id =208 and r.content_id=n.text_id')->order('date desc')->select();
            $total_num=M()->table('index_text n,index_relevance r')->where('r.classify_id =208 and r.content_id=n.text_id')->count();
            foreach($text as $k=>$v){  ?>
                <li class="loop news4"><a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" title="<?php echo $v['text_title'];?>"><img  src="<?php echo $v['text_picture'];?>" alt="<?php echo $v['text_title'];?>"><span><?php echo $v['text_title'];?></span></a>
                </li>
            <?php }?>


        </ul>
    </div>
</div>



<?php require APP_ROOT.'public/bottom.php';?>
