<?php require APP_ROOT.'public/top2.php';?>
<!--单页开始-->
<div class="content">
    <?php $contact_us=M('contact_us')->where(array('content_id'=>1))->find();?>
    <div class="about">
        <p style="text-indent: 2em;"> <div>
            <strong><span style="font-size:14px;"><?php echo $contact_us['contact_company'];?></span></strong></div>
        <div>
            <span style="font-size:14px;">联系人：<?php echo $contact_us['contact_people'];?></span>
        </div>
        <div>
            <span style="font-size:14px;">联系热线：<?php echo $contact_us['contact_tel'];?></span>
        </div>

    </div>

    </p>
</div>
</div>
<!--单页结束-->
<?php require APP_ROOT.'public/bottom.php';?>
