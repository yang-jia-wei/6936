<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>

    <div id="content">
        <div class="container clearFix">
            <?php require APP_ROOT.'public/left.php';?>
            <div class="rightcont">
                <!--            接值（$goods_id）-->
                <?php $goods=M('goods')->where(array('goods_id'=>$content_id))->find(); ?>
                <dl class="frnytitle clearFix">
                    <dt>当前位置：<a href="index.php">首页</a> &gt;&gt; <a href="javascript:;">服务项目</a> &gt;&gt; 浏览产品</dt>
                    <dd>服务项目</dd>
                </dl>

                
                <h1><?php echo $goods['goods_name'];?></h1>
                <div class="keyword">标签：西门,西门子,门子 时间： 阅读
                    <script language="Javascript" src="/item/GetHits.asp?Action=Count&amp;GetFlag=0&amp;m=114&amp;ID=6"></script>302次
                </div>
                <div class="substance"><div id="MyContent">
                        <p><img src="<?php echo $goods['goods_img'];?>"></p>
                        <p>
                            <?php echo $goods['goods_content'];?>

                        </p></div>
                </div>



                <?php  $goods_gt = M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date > '.$goods['date'].' and r.content_id=n.goods_id')->order('date asc')->find(); if(!empty($goods_gt)){?>
                    <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($goods_gt['type_id'],$goods_gt['goods_id']) ?>">上一篇：<?php echo $goods_gt['goods_name'];?></a></div>
                <?php }?>
                <?php  $goods_lt = M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date < '.$goods['date'].' and r.content_id=n.goods_id')->order('date desc')->find(); if(!empty($goods_lt)){?>
                    <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($goods_lt['type_id'],$goods_lt['goods_id']) ?>">下一篇：<?php echo $goods_lt['goods_name'];?></a></div>
                <?php }?>



                
                <div class="x_g">相关：<a href="/plus/tags/index.asp?n=1&amp;ChannelID=0&amp;ClassID=0&amp;page=1" target="_blank">西门</a> <a href="/plus/tags/index.asp?n=2&amp;ChannelID=0&amp;ClassID=0&amp;page=1" target="_blank">西门子</a> <a href="/plus/tags/index.asp?n=3&amp;ChannelID=0&amp;ClassID=0&amp;page=1" target="_blank">门子</a> </div>
            </div>
        </div>
    </div>

<?php require APP_ROOT.'public/foot.php';?>