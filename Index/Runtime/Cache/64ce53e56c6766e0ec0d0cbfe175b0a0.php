<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>

    <div id="content">
        <div class="container clearFix">
            <?php require APP_ROOT.'public/left.php';?>
            <div class="rightcont">
                <dl class="frnytitle clearFix">
                    <dt>当前位置：<a href="index.php">首页</a> &gt;&gt; <a href="javascript:;"><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_name'];?></a>
                    <dd><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_name'];?></dd>
                </dl>
                <ul class="nycase clearFix">

                    <?php $perpage=6;$offset=($p-1)*$perpage; $goods = M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.goods_id')->order('date desc')->limit($offset,$perpage)->select(); $total_num=M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.goods_id')->count(); foreach($goods as $k=>$v){ ?>
                                            <li>
                                                <span>
                                                    <a href="<?php echo content_url($v['type_id'],$v['goods_id']);?>" title="<?php echo $v['goods_name'];?>">
                                                        <img src="<?php echo $v['goods_img'];?>" alt="<?php echo $v['goods_name'];?>">
                                                    </a>
                                                </span><a href="<?php echo content_url($v['type_id'],$v['goods_id']);?>" title="<?php echo $v['goods_name'];?>"><?php echo $v['goods_name'];?></a>
                                            </li>
                    <?php }?>
                </ul>
                <?php require APP_ROOT.'public/page.php';?>


            </div>
        </div>
    </div>

<?php require APP_ROOT.'public/foot.php';?>