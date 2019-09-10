<div id="header">
    <div class="top">
        <div class="toubu clearFix">
            <a href="index.php">
                <h1 class="logo"><img src="<?php echo $site['logo_img'];?>" alt=""></h1>
            </a>
            <a href="index.php">
            <div class="tel"><img src="<?php echo $site['header_bj'];?>" alt=""></div>
            </a>
        </div>
        <ul class="nav clearFix">
            <?php $list=M('classify')->where(array('classify_pid'=>2))->order('date asc')->select();foreach($list as $k=>$v){?>
            <li><a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>"><?php echo $v['classify_name'];?></a></li>
            <?php }?>
<!--            <li><a href="http://www.gxnnxmzsh.com/?list-2.html">关于我们</a></li>-->
<!--            <li><a href="http://www.gxnnxmzsh.com/?list-3.html">服务项目</a></li>-->
<!--            <li><a href="http://www.gxnnxmzsh.com/?list-4.html">新闻中心</a></li>-->
<!--            <li><a href="http://www.gxnnxmzsh.com/?list-5.html">洗衣机知识</a></li>-->
<!--            <li><a href="http://www.gxnnxmzsh.com/?list-6.html">洗衣机常识</a></li>-->
<!--            <li><a href="http://www.gxnnxmzsh.com/?list-7.html">洗衣机故障</a></li>-->
<!--            <li><a href="http://www.gxnnxmzsh.com/?list-8.html">联系我们</a></li>-->
        </ul>
    </div>
</div>

<script type="text/javascript" src="./js/flash.js"></script>
<div id="bannerBox">
    <div id="flashs">
        <?php $banner=M()->table('index_banner n,index_relevance r')->where('r.classify_id =204 and r.content_id=n.banner_id')->order('date desc')->select();?>
        <div class="bgitem" id="flashbg0" style="opacity: 1; z-index: 2;">
            <div class="banner"><img src="<?php echo $banner[1]['banner_img']?>" alt="南宁西门子洗衣机售后维修服务电话"></div>
        </div>
        <div class="bgitem" id="flashbg1" style="opacity: 0; z-index: 1;">
            <div class="banner"><img src="<?php echo $banner[0]['banner_img']?>" alt="南宁西门子洗衣机维修电话"></div>
        </div>
    </div>
</div>


</div>