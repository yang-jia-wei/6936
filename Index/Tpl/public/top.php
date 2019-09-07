<div id="header">
    <div class="top">
        <div class="toubu clearFix">
            <h1 class="logo"><img src="images/logo.jpg" alt="南宁西门子洗衣机维修电话"></h1>
            <div class="tel"><img src="images/tel.jpg" alt="南宁西门子洗衣机售后维修电话"></div>
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