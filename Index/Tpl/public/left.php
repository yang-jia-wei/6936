<div class="leftcont">
    <div class="nylianxi">
        <?php $contact_us=M()->table('index_contact_us')->where(array('contact_us_id'=>1))->find();?>
        联系人：<?php echo $contact_us['contact_people'];?><br>
        <span>服务热线 : <?php echo $contact_us['contact_tel'];?></span><br>

    </div>
<!--    服务项目-->
    <div class="nyxiangmu">
        <div class="sytitle"><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_name'];?></div>
        <ul class="flmenu">
            <?php $list=M('classify')->where(array('classify_pid'=>207))->order('date asc')->select();
            //                    dump($list);die;

            foreach($list as $k=>$v){?>
                <li><a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>"><?php echo $v['classify_name']?></a></li>
            <?php }?>
        </ul>
    </div>


<!--    点击排行-->
<!--    --><?php //dump($classify_id);die; ?>
    <?php if($classify_id == 208 || $classify_id==209 || $classify_id==210 || $classify_id==211){ ?>
    <div class="nyzx">
        <div class="sytitle">点击排行</div>

        <ul class="newstit" style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
            <?php $news_max=M('news')->where('news_traffic')->order('news_traffic desc')->limit(4)->select();
            foreach($news_max as $k=>$v){       ?>

            <li><a href="<?php echo content_url($v['type_id'],$v['news_id']);?>" title="<?php echo $v['news_title'];?>"><?php echo $v['news_title'];?></a>
            </li>

                     <?php }?>
        </ul>
    </div>
     <?php }else{ ?>
        <!--    新闻-->
        <div class="nyzx">
            <div class="sytitle"><?php $classify=M('classify')->where(array('classify_id'=>208))->find();echo $classify['classify_name'];?></div>
            <ul class="newstit" style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
                <?php $news=M()->table('index_news n,index_relevance r')->where('r.classify_id =208 and r.content_id=n.news_id')->limit(3)->order('date desc')->select();foreach($news as $k=>$v){?>
                    <li><a href="<?php echo content_url($v['type_id'],$v['news_id']);?>" title="<?php echo $v['news_title'];?>"><?php echo $v['news_title'];?></a></li>
                <?php }?>
            </ul>
        </div>
    <?php }?>
</div>