<?php require APP_ROOT.'public/top2.php';?>

<div class="content">
    <div class="about">
        <?php $about_us=M()->table('index_about_us n,index_relevance r')->where('r.classify_id =206 and r.content_id=n.about_us_id')->order('date desc')->select();foreach($about_us as $k=>$v){

            echo $v['about_content'];
        }?>
    </div>
    <hr class="blue-line" />
</div>
<?php require APP_ROOT.'public/bottom.php';?>
