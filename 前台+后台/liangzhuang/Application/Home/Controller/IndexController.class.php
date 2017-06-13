<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       
         $this->display();
     }
     public function index1(){
     	$userModel = M('user');
        $user = $userModel->select();
        $this->assign('user', $user);
        $this->display();
      
     }
}