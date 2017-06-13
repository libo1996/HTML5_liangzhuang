<?php
namespace Home\Controller;
use Think\Controller;
class SceController extends Controller {
   public function services(){
     $sceModel=M('sce');
     $sce = $sceModel->select();
     $this->assign('sce',$sce);
     $this->display();

   
}
 public function single(){
     $sceModel=M('sce');
     $id=(int)$_GET['sid'];
     $sce=$sceModel->where("sid=$id")->find();
     $this->assign('sce',$sce);
     $this->display();
}


}