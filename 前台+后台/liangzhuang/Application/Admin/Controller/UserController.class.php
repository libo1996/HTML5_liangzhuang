<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller {
    // public function __construct(){
    //     parent::__construct();
    //     if(!isLogin()){
    //        $this->error("请先登录",U("Admin/login"));
    //        //  $this->redirect('Admin/login',0);
    //     }
    // }
  
public function index(){
    //1、获取数据
    $userModel = M('user');
    $user = $userModel->select();
    //2、分配数据
    $this->assign('user', $user);
    //3、显示视图
    $this->display();
}

public function create(){
    $this->display();
}

public function store(){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize=3145728 ;// 设置附件上传大小
    $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
    $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{// 上传成功
        //$this->success('上传成功！');
        //创建模型
        $userModel = M('user');
        //组织数据
        $data = $userModel->create();
        $data['name']=$_POST['name'];
        $data['integral']=$_POST['integral'];
        $data['pw']=$_POST['pw'];
        $data['xy-id']=$_POST['xy-id'];
        $data['sc-id']=$_POST['sc-id'];
        $data['phone']=$_POST['phone'];
        $data['vip']=$_POST['vip'];
        $data['email']=$_POST['email'];
        $data['sex']=$_POST['sex'];
        $data['birthday']=$_POST['birthday'];
        //设置thumb字段属性(目录+名字)
        $data['img']=$info['img']['savepath'].$info['img']['savename'];
       

        if($userModel->add($data))
        {
            header("Content-type:text/html;charset=utf-8");
               echo("<script type='text/javascript'> alert('添加数据成功！');location.href='index';</script>"); 
           }
        else{
            header("Content-type:text/html;charset=utf-8");
                echo "<script>alert('添加数据失败！');history.go(-1);</script>";
            } 
        } 
}

public  function edit(){
     $userModel=M('user');
     $id=(int)$_GET['uid'];
     $user=$userModel->where("uid=$id")->find();
     $this->assign('user',$user);
     $this->display();
   }
public function update(){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize=3145728 ;// 设置附件上传大小
    $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
    $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录
    $info   =   $upload->upload();
    if(!$info) {
        $this->error($upload->getError());
    }else{
        $userModel = M('user');
        $data['uid']=$_POST['uid'];
        $id=$data['uid'];
         $data['name']=$_POST['name'];
        $data['integral']=$_POST['integral'];
        $data['pw']=$_POST['pw'];
        $data['xy-id']=$_POST['xy-id'];
        $data['sc-id']=$_POST['sc-id'];
        $data['phone']=$_POST['phone'];
        $data['vip']=$_POST['vip'];
        $data['email']=$_POST['email'];
        $data['sex']=$_POST['sex'];
        $data['birthday']=$_POST['birthday'];
        //设置thumb字段属性(目录+名字)
        $data['img']=$info['img']['savepath'].$info['img']['savename'];
    //添加
        if($userModel->where("uid=$id")->save($data)){
            header("Content-type:text/html;charset=utf-8");
               echo("<script type='text/javascript'> alert('更新数据成功！');location.href='index';</script>"); }
           
        else{
            header("Content-type:text/html;charset=utf-8");
            echo "<script>alert('更新数据失败！');history.go(-1);</script>";
        }
    }
}


public function destroy(){
    $id = I('uid');
    $userModel = M('user');
    if($userModel->where("uid=$id")->delete()){
        $this->success('删除成功');
    }else{
        $this->showError('删除失败');
    }
}

}
