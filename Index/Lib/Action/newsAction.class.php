<?php
class newsAction extends Action {
    public function index(){
		$this->display();
    }

    public function details(){
        //浏览量
        $site =get_site();

        $p=pg('p')==''?1:pg('p');
        $classify_id=get_classify_id();
        $content_id=pg('content_id');
        $type_id=get_type_id();
        $dir = __FILE__;
        $file = fopen($dir,"r");
        if ($file){
            if (!feof($file)) { //判断是否到最后一行
                $news = M('news')->where(array('type_id' => $type_id, 'news_id' => $content_id))->select();
                $temp = $news[0]['news_traffic']+1;
                M('news')-> where(array('type_id' => $type_id, 'news_id' => $content_id))->setField('news_traffic',$temp);

            }

        }
        $this->display();
    }
}
