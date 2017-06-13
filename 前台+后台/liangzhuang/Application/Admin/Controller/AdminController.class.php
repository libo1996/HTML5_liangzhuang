<?php
namespace Admin\Controller;
use Think\Controller;


class AdminController extends Controller {
    public function login(){
        if(IS_POST){
            $adminUsersModel = M('admin'); //admin_user表
            $condition = array(  //查询条件
                "name" => I("post.name"),
                "pw" => I("post.pw")
            );
            $result = $adminUsersModel->where($condition)->count();
            if($result>0){  //能查到数据，说明用户名密码正确
                session("name",I("post.name"));
                //$this->success("登录成功",U("Index/index"));
                 $this->redirect('index/index',0);
            }
            else{
                $this->error("用户名或密码不正确");
            }
        }
        else{
            $this->display();
        }

    }

    
}
