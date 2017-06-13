<?php
namespace Home\Controller;
use Think\Controller;
class ZcController extends Controller {
   public function zcao(){
     $zcModel = M('zc');
     $zc = $zcModel->select();
     $this->assign('zc', $zc);
     $this->display();

   
}
 public function zc_content(){
     $zcModel=M('zc');
     $id=(int)$_GET['zid'];
     $zc=$zcModel->where("zid=$id")->find();
     $this->assign('zc',$zc);
     $this->display();
}


}
