<?php require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>

<div id="content">
    <div class="container clearFix">
        <?php require APP_ROOT.'public/left.php';?>
        <div class="rightcont">
            <dl class="frnytitle clearFix">
                <dt>当前位置：<a href="index.php">首页</a> &gt;&gt; <a href="javascript:;"><?php $classify=M('classify')->where(array('classify_id'=>206))->find();echo $classify['classify_name'];?>
                <dd><?php $classify=M('classify')->where(array('classify_id'=>206))->find();echo $classify['classify_name'];?></dd>
            </dl>
            <div class="substance">
                <?php $about_us=M()->table('index_about_us n,index_relevance r')->where('r.classify_id =206 and r.content_id=n.about_us_id')->order('date desc')->select();foreach($about_us as $k=>$v){?>
                <p><?php echo $v['about_content'];?></p>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php require APP_ROOT.'public/foot.php';?>
