<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>

<div id="bannerBox">
    <div id="flashs">
        <div class="bgitem" id="flashbg0" style="opacity: 1; z-index: 2;">
            <div class="banner"><img src="images/banner1_1.jpg" alt="南宁西门子洗衣机售后维修服务电话"></div>
        </div>
        <div class="bgitem" id="flashbg1" style="opacity: 0; z-index: 1;">
            <div class="banner"><img src="images/banner2_1.jpg" alt="南宁西门子洗衣机维修电话"></div>
        </div>
        <div class="btn"><span style="opacity: 1;" class="cur">1</span><span style="opacity: 0.7;" class="">2</span></div></div>
</div>
<div id="content">
    <div class="center">
        <div class="our clearFix">
            <div class="lianxi">
                联系人：南宁客服<br>
                <span>服务热线</span><br>

            </div>
<!--            关于我们   -->
            <div class="us">
                <div class="sytitle"><?php $classify=M('classify')->where(array('classify_id'=>206))->find();echo $classify['classify_name'];?></div>
                <div class="uscont" style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
                    <img src="<?php $classify=M('classify')->where(array('classify_id'=>206))->find();echo $classify['classify_img'];?>" alt="">
                    <?php $about_us=M()->table('index_about_us')->where('about_us_id = 1 ')->find();?> <?php echo $about_us['about_content']; ?>
                </div>
                <div class="ckxq">
                    <a href="<?php echo classify_url(60,206);?>"><img src="images/ckxq.jpg" alt=""></a>
                </div>
            </div>
<!--新闻中心              -->
            <div class="news">
                <div class="sytitle" ><?php $classify=M('classify')->where(array('classify_id'=>208))->find();echo $classify['classify_name'];?></div>
                <ul class="newstit" style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">

                    <?php $news=M()->table('index_news n,index_relevance r')->where('r.classify_id =208 and r.content_id=n.news_id')->limit(6)->order('date desc')->select();foreach($news as $k=>$v){?>
                    <li><a href="<?php echo content_url($v['type_id'],$v['news_id']);?>" title="<?php echo $v['news_title'];?>"><?php echo $v['news_title'];?></a></li>
                    <?php }?>

                  
                </ul>
                <div class="ckxq"><a href="<?php echo classify_url(14,208);?>"><img src="images/ckxq.jpg" alt=""></a></div>
            </div>
        </div>

<!--        服务项目     -->

        <div class="fuwu clearFix">
            <div class="xiangmu">
                <div class="sytitle"><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_name'];?></div>
                <ul class="flmenu">
                    <?php $list=M('classify')->where(array('classify_pid'=>207))->order('date asc')->select(); foreach($list as $k=>$v){?>
                    <li><a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>"><?php echo $v['classify_name']?></a></li>
                    <?php }?>
                </ul>

                <div class="ckxq"><a href="<?php echo classify_url(3,207);?>"><img src="images/ckxq.jpg" alt=""></a></div>
            </div>

            <ul class="case clearFix">

                <?php $goods=M()->table('index_goods n,index_relevance r')->where('r.classify_id =207 and r.content_id=n.goods_id')->order('date desc')->limit(3)->select();foreach($goods as $k=>$v){?>

                <li>
                    <span>
                        <a href="<?php echo content_url($v['type_id'],$v['goods_id']);?>" title="西门子XQG70-WM12E2680W"><img src="<?php echo $v['goods_img'];?>" alt="<?php echo $v['goods_name'];?>">
                        </a>
                    </span>
                    <a href="<?php echo content_url($v['type_id'],$v['goods_id']);?>" title="<?php echo $v['goods_name'];?>"><?php echo $v['goods_name'];?></a></li>
                <?php }?>

            </ul>
        </div>


<!--        洗衣机故障-->
        <div class="zixun clearFix">
            <div class="zhishi">
                <div class="sytitle"><?php $classify=M('classify')->where(array('classify_id'=>211))->find();echo $classify['classify_name'];?></div>
                <ul class="newstit" style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">

                    <?php $news=M()->table('index_news n,index_relevance r')->where('r.classify_id =211 and r.content_id=n.news_id')->limit(4)->order('date desc')->select();foreach($news as $k=>$v){?>
                    <li><a href="<?php echo content_url($v['type_id'],$v['news_id']);?>" title="<?php echo $v['news_title'];?>"><?php echo $v['news_title'];?></a></li>
                    <?php }?>
                </ul>
                <div class="ckxq"><a href="<?php echo classify_url(14,211);?>"><img src="images/ckxq.jpg" alt="<?php echo $v['news_title'];?>"></a></div>
            </div>

<!--            洗衣机常识-->
            
            <div class="changshi">
                <div class="sytitle"><?php $classify=M('classify')->where(array('classify_id'=>210))->find();echo $classify['classify_name'];?></div>
                <ul class="newstit" style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">

                    <?php $news=M()->table('index_news n,index_relevance r')->where('r.classify_id =210 and r.content_id=n.news_id')->limit(4)->order('date desc')->select();foreach($news as $k=>$v){?>
                    <li><a href="<?php echo content_url($v['type_id'],$v['news_id']);?>" title="<?php echo $v['news_title'];?>"><?php echo $v['news_title'];?></a></li>
                    <?php }?>
                </ul>
                <div class="ckxq"><a href="<?php echo classify_url(14,210);?>"><img src="images/ckxq.jpg" alt=""></a></div>
            </div>


<!--            洗衣机知识-->
            
            <div class="guzhang">
                <div class="sytitle"><?php $classify=M('classify')->where(array('classify_id'=>209))->find();echo $classify['classify_name'];?></div>
                <ul class="newstit" style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">

                    <?php $news=M()->table('index_news n,index_relevance r')->where('r.classify_id =209 and r.content_id=n.news_id')->limit(4)->order('date desc')->select();foreach($news as $k=>$v){?>
                    <li><a href="<?php echo content_url($v['type_id'],$v['news_id']);?>" title="<?php echo $v['news_title'];?>
"><?php echo $v['news_title'];?>
                        </a></li>
                    <?php }?>
                </ul>
                <div class="ckxq"><a href="<?php echo classify_url(14,209);?>"><img src="images/ckxq.jpg" alt=""></a></div>
            </div>
        </div>
        <div class="brand">
            <div class="brandtitle">服务项目</div>
            <div class="xwzxbox">
                <dl class="xwzx clearFix">
                    <dt><img src="images/xq01.jpg" alt="南宁西门子洗衣机维修电话"></dt>
                    <dd><strong>南宁西门子洗衣机维修电话</strong><span>洗衣机是我们生活中应用十分频繁的家电产品，不过长期使用洗衣机，如果
不注意日常使用方法的话，很容易留下隐患，请拨打400-8935-918南宁西门子洗衣机售后维修电话就能解决。有的消费者习惯一次性洗涤很多衣服，洗
衣机用电负荷较大，如若使用过程中不注意极易留下火灾隐患，火灾隐患请联系南宁西门子洗衣机售后维修电话。今天南宁西门子洗衣机售后维修电话就来给大家说
说洗衣机在日常使用时的注意事项。插头不拔—火灾隐患。洗衣机使用频率相对来说没有其他家电那么高，而且也没有诸如电视之类的遥控器可以控制电路，所以为
了避免火灾隐患，洗衣机在使用结束后一定要将其电源切断以免除后患。联系南宁西门子洗衣机售后维修电话可解决这些烦恼。</span></dd>
                </dl>
                <dl class="xwzx clearFix">
                    <dt><img src="images/xq02.jpg" alt="南宁西门子洗衣机售后维修电话"></dt>
                    <dd><strong>南宁西门子洗衣机售后维修电话</strong><span>很多爱干净的家庭主妇在使用完洗衣机之后，都会为洗衣机里外擦洗最
后罩上罩子，以避免落入灰尘，殊不知，这种看似很干净的做法，其实却隐藏了很大的卫生隐患。其实可以拨通南宁西门子洗衣机售后维修电话来进行咨询。首先，
在使用洗衣机之后应该打开舱门或者顶盖，使其风干，以避免细菌滋生。其次，在洗衣机使用一段时间之后，要对机器内筒进行彻底的清洁，以保证洗衣机的卫生程
度。南宁西门子洗衣机售后维修电话告诉我们这些知识，不少朋友又该有疑问了，打开盖子通风很容易，到底洗衣机内筒该如何清洁呢？下面，通过南宁西门子洗衣
机售后维修电话大家知道了洗衣机内筒的清洁方法，赶快来去试试吧！</span></dd>
                </dl>
                <dl class="xwzx clearFix">
                    <dt><img src="images/xq03.jpg" alt="南宁西门子洗衣机售后维修服务电话"></dt>
                    <dd><strong>南宁西门子洗衣机售后维修服务电话</strong><span>洗衣机使用日久后，由于机械磨损、缺乏润滑油、机件老化、弹簧
疲劳变形等原因，会出现各种不正常的振动与噪声。若不及时修理，会导致洗衣机的机件加速磨损甚至损坏。因此及时拨打南宁西门子洗衣机维修电话可咨询解决方
法。实际上，通过南宁西门子洗衣机维修电话我们得知，适当的调整和简单修理，即可以消除或减小振动与噪声。南宁西门子洗衣机维修电话告诉我们洗衣时，机身
发出"砰砰"响声。该故障多是洗衣桶与外壳之间产生碰撞或者是洗衣机放置的地面不平整或四只底脚未与地面保持良好的接触。这时需将洗衣机重心调整，放置平
稳，或在四个底脚垫上适当垫块。南宁西门子洗衣机维修电话告诉我们洗衣时，波轮转动发出"咯咯"摩擦声。检修时，可放入水，不放衣物进行检查。</span></dd>
                </dl>
            </div>
        </div>
    </div>
</div>

<!-- published at 2019-9-7 15:24:36 南宁西门子洗衣机售后维修中心 -->
<?php require APP_ROOT.'public/foot.php';?>