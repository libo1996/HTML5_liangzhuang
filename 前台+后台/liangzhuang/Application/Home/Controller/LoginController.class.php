<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
   public function login(){
        if(IS_POST){
            $UsersModel = M('user'); 
            $condition = array(  
                "name" => I("post.name"),
                "pw" => I("post.pw")
            );

            $result = $UsersModel->where($condition)->count();
               // echo("<script type='text/javascript'> alert($result);location.href='../index';</script>"); 

             if($result>0){  
                header("Content-type:text/html;charset=utf-8");
               echo("<script type='text/javascript'> alert('登录成功！');location.href='../index/index1';</script>"); 
            }
            else{
                $this->error("用户名或密码不正确");
            }
        }
        else{
            $this->display();
        }
    }
      public function register(){

       
         $this->display();
     }
     
  public function store(){
        $userModel = M('user');
        $data = $userModel->create();
        $data['name']=$_POST['pw'];
        $data['pw']=$_POST['pw'];
        if($userModel->add($data))
        {
            header("Content-type:text/html;charset=utf-8");
               echo("<script type='text/javascript'> alert('添加数据成功！');location.href='../index/index1';</script>"); 
        }
        else
        {
            header("Content-type:text/html;charset=utf-8");
                echo "<script>alert('添加数据失败！');history.go(-1);</script>";
     }        
    
}


}
