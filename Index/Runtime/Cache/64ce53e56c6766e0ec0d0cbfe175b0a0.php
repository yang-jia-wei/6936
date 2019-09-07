<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>

    <div id="content">
        <div class="container clearFix">
            <?php require APP_ROOT.'public/left.php';?>
            <div class="rightcont">
                <dl class="frnytitle clearFix">
                    <dt>当前位置：<a href="http://www.gxnnxmzsh.com/">南宁西门子洗衣机售后维修中心</a> &gt;&gt; <a href="http://www.gxnnxmzsh.com/?list-3.html">服务项目</a> &gt;&gt; 频道首页</dt>
                    <dd>服务项目</dd>
                </dl>
                <ul class="nycase clearFix">

                    <?php $perpage=6;$offset=($p-1)*$perpage; $goods = M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.goods_id')->order('date desc')->limit($offset,$perpage)->select(); $total_num=M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.goods_id')->count(); foreach($goods as $k=>$v){ ?>
                                            <li>
                                                <span>
                                                    <a href="<?php echo content_url(3,$v['goods_id']);?>" title="<?php echo $v['goods_name'];?>">
                                                        <img src="<?php echo $v['goods_img'];?>" alt="<?php echo $v['goods_name'];?>">
                                                    </a>
                                                </span><a href="<?php echo content_url(3,$v['goods_id']);?>" title="西门子XQG70-WM12E2680W"><?php echo $v['goods_name'];?></a>
                                            </li>
                    <?php }?>
                </ul>
                <?php require APP_ROOT.'public/page.php';?>


            </div>
        </div>
    </div>

<?php require APP_ROOT.'public/foot.php';?>