<?php
namespace Home\Controller;
use Think\Controller;
class VideoController extends Controller {
   public function video(){
     $videoModel = M('video');
     $video = $videoModel->select();
     $this->assign('video', $video);
     $this->display();
}
}
