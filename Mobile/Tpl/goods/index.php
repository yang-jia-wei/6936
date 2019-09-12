<?php require APP_ROOT.'public/top2.php';?>


    <!--图片列表开始-->
    <div class="content">

        <div class="common_i_title_tab">

            <?php $list=M('classify')->where(array('classify_pid'=>207))->order('date asc')->select();foreach($list as $k=>$v){?>
            <a style="margin: 1px;" href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>" title="<?php echo $v['classify_name'];?>"><?php echo $v['classify_name'];?></a>
            <?php }?>
        </div>


            
        <ul class="list-loop common_news" id="contentArea">


            <?php
            $perpage=6;$offset=($p-1)*$perpage;
            $goods=M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.goods_id')->order('date desc')->limit($offset,$perpage)->select();
            $total_num=M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.goods_id')->count();
            foreach($goods as $k=>$v){?>
            <li class="loop news4"><a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" title="<?php echo $v['goods_name'];?>"><img  src="<?php echo $v['goods_img'];?>" alt="<?php echo $v['goods_name'];?>"><span><?php echo $v['goods_name'];?></span></a>
            </li>
            <?php }?>

       
        </ul>
        <?php require APP_ROOT.'public/page.php';?>
    </div>

    <!--图片列表结束-->

<?php require APP_ROOT.'public/bottom.php';?>