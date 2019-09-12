<?php require APP_ROOT . 'public/top.php'; ?>
  <div class="content content_new"> 
    <!--幻灯片图片开始-->
    <div class="bannerfra">
      <div class="banner">
        <div class="swiper-container">


<div class="swiper-wrapper"> 
<?php $banner=M()->table('index_banner n,index_relevance r')->where('r.classify_id =204 and r.content_id=n.banner_id')->order('date desc')->select();foreach($banner as $k=>$v){?> 
  <div class="swiper-slide"><img src="<?php echo $v['banner_img'];?>"></div>
<?php }?>

 </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
    <!--幻灯片图片结束--> 

    
    <!--产品展示开始-->
    <div class="product_i common_i_css">
<?php $listcs=M('classify')->where(array('classify_id'=>207))->order('date asc')->find();?> 
      <div class="common_i_title">
        <h2><?php echo $listcs['classify_name'];?></h2>
        <span></span></div>
      <!--产品分类开始-->
      <div class="common_i_title_tab"> 


    </div>
      <!--产品分类结束#0075bb-->
      <div class="c"></div>
      <div class="product_i_list">
        <ul>
<?php $goods=M()->table('index_goods n,index_relevance r')->where('r.classify_id =216 and r.content_id=n.goods_id')->order('date desc')->limit(4)->select();foreach($goods as $k=>$v){?> 
          <li><a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" title="<?php echo $v['goods_name'];?>"><img src="<?php echo $v['goods_img'];?>" alt="<?php echo $v['goods_name'];?>" width="320" height="100px"><span><?php echo $v['goods_name'];?></span></a></li>
<?php }?>


        </ul>
        <div class="c"></div>
      </div>
    </div>
    <div class="more_i"><a href="<?php echo classify_url($listcs['type_id'],$listcs['classify_id']);?>">查看更多</a></div> 
    <!--产品展示结束--> 
    
    <!--公司介绍开始-->
    <div class="about_i common_i_css">
      <div class="common_i_title common_i_title_color5">
<?php $list=M('classify')->where(array('classify_id'=>206))->order('date asc')->find();?>
        <h2><?php echo $list['classify_name'];?></h2>
        <span></span></div>
      <div class="about_i_text">  <?php echo $list['classify_intro'];?> </div>
    </div>
    <div class="more_i"><a href="<?php echo classify_url($list['type_id'],$list['classify_id']);?>">查看更多</a></div> 
    <!--公司介绍结束-->
    
    <!--新闻资讯开始-->
    <div class="yewu_i common_i_css">
      <div class="common_i_title">
<?php $listns=M('classify')->where(array('classify_id'=>212))->order('date asc')->find();?>
        <h2><?php echo $listns['classify_name'];?></h2>
        <span></span></div>
      <div class="yewu_i_list">
        <ul>
<?php $news=M()->table('index_news n,index_relevance r')->where('r.classify_id =212 and r.content_id=n.news_id')->order('date desc')->limit(4)->select();foreach($news as $k=>$v){?> 

          <li>
            <div class="i_list_text"><a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" title="<?php echo $v['news_title'];?>">
              <h2 style="font-weight:bold;color:#ff0000"><?php echo $v['news_title'];?></h2>
              <strong><?php echo date('Y-m-d',$v['date']); ?></strong><span><?php echo $v['news_intro'];?></span></a></div>
            <div class="c"></div>
          </li>
<?php }?>

        </ul>
      </div>
    </div>
    <div class="more_i"><a href="<?php echo classify_url($listns['type_id'],$listns['classify_id']);?>">查看更多</a></div> 
    <!--新闻资讯结束-->
    
    <!--联系我们开始-->
    <div class="common_i_css">
      <div class="common_i_title">
<?php $listus=M('classify')->where(array('classify_id'=>213))->order('date asc')->find();?>
        <h2><?php echo $listus['classify_name'];?></h2>
        <span></span></div>
    </div>
    <div class="contact">
      <?php echo $listus['classify_intro'];?>
    </div>

      <!--联系我们结束-->
    <div class="beian">　</div>
      <div class="more_i"><a href="<?php echo classify_url($listus['type_id'],$listus['classify_id']);?>">查看更多</a></div>

  </div>
<?php require APP_ROOT.'public/bottom.php';?>