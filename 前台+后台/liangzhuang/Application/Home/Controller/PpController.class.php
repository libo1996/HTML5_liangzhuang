<?php
namespace Home\Controller;
use Think\Controller;
class PpController extends Controller {
   public function product(){
   	 $ppModel = M('pp');
     $this->assign('pp', $pp);
     $this->display();
}
 public function product_content(){
     $ppModel = M('pp');
     $id=(int)$_GET['pid'];
     $pp=$ppModel->where("pid=$id")->find();
     $this->assign('pp', $pp);
     $this->display();
}
 public function productlist(){
    $ppModel = M('pp');
     $pp = $ppModel->select();
     $this->assign('pp', $pp);
     $this->display();
}
public function pl_jiemian(){
     $ppModel = M('pp');
     $pp = $ppModel->where("b_kind='洁面'")->select();
     $this->assign('pp', $pp);
     $this->display();
}
public function pl_mianmo(){
     $ppModel = M('pp');
     $pp = $ppModel->where("b_kind='面膜'")->select();
     $this->assign('pp', $pp);
     $this->display();
}
public function pl_hauzhuangshui(){
     $ppModel = M('pp');
     $pp = $ppModel->where("b_kind='化妆水'")->select();
     $this->assign('pp', $pp);
     $this->display();
}
}