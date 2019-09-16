<div class="footer">
    <div class="share">
        <!--百度分享-->
        <div class="bdsharebuttonbox" data-tag="share_2" style="width: 190px;margin: 0.5rem auto;"> <a href="#" class="bds_qzone" data-cmd="qzone"></a> <a href="#" class="bds_tsina" data-cmd="tsina"></a> <a href="#" class="bds_baidu" data-cmd="baidu"></a> <a href="#" class="bds_tqq" data-cmd="tqq"></a> <a  href="#" class="bds_renren" data-cmd="renren"></a> <a href="" class="bds_weixin" data-cmd="weixin"></a> </div>
        <script>
            window._bd_share_config = {
                share : [{
                    "bdSize" : 32
                }],
            }
            with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
        </script>
        <!--百度分享-->
    </div>
  <div class="foot foot-relative" id="foot">
    <div class="foot-relative"> 
<?php $list=M('classify')->where(array('classify_id'=>219))->order('date asc')->find();?>
<!--    <a href="--><?php //echo classify_url($list['type_id'],$list['classify_id']);?><!--" target="_blank"><span class="commonfont"></span>-->
<!--      <h3>地图</h3>-->
<!--      </a>-->



      </a>
        <a href="sms:<?php echo $site['mobile'];?>"title="短信"><span class="commonfont"></span>
      <h3>短信</h3>
      </a>


        <a href="javascript:;" class="cbtn-share common-search-btn" title="分享"><span class="commonfont"></span>
      <h3>分享</h3>

      <a href="tel:<?php echo $site['tel'];?>" title="电话"><span class="commonfont"></span>
      <h3>电话</h3>
      </a>
    </div>
  </div>
</div>
 </div>
<!--内容结束-->


<?php require APP_ROOT.'public/foot.php';?>
