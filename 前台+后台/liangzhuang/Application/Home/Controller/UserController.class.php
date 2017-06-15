<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function ge(){
    $userModel=M('user');
     $id=(int)$_GET['uid'];
     $user=$userModel->where("uid=$id")->find();
     $this->assign('user',$user);
     $this->display();
     }
}