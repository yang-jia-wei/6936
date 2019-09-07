<?php require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>
<div id="content">
    <div class="container clearFix">
        <?php require APP_ROOT.'public/left.php';?>
        <div class="rightcont">
            <dl class="frnytitle clearFix">
                <dt>当前位置：<a href="index.php">首页</a> &gt;&gt; <a href="#" onClick="javascript :history.go(-1)";><?php $classify=M('classify')->where(array('classify_id'=>$classify_id))->find();echo $classify['classify_name'];?></a> </dt>
                <dd><?php $classify=M('classify')->where(array('classify_id'=>$classify_id))->find();echo $classify['classify_name'];?></dd>
            </dl>



           
        </div>
    </div>
</div>
<?php require APP_ROOT.'public/foot.php';?>
