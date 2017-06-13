<?php
namespace Admin\Controller;
use Think\Controller;
class SceController extends Controller {
   // public function __construct(){
   //      parent::__construct();
   //      if(!isLogin()){
   //         $this->error("请先登录",U("Admin/login"));
   //         //  $this->redirect('Admin/login',0);
   //      }
   //  }
  
public function index(){
    //1、获取数据
    $sceModel = M('sce');
    $sce = $sceModel->select();
    //2、分配数据
    $this->assign('sce', $sce);
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
        $sceModel = M('sce');
        //组织数据
        $data = $sceModel->create();
        $data['name']=$_POST['name'];
        $data['date']=$_POST['date'];
        $data['introduce']=$_POST['introduce'];
        $data['s1-content']=$_POST['s1-content'];
        $data['s2-content']=$_POST['s2-content'];
        $data['s3-content']=$_POST['s3-content'];
        $data['author']=$_POST['author'];
        //设置thumb字段属性(目录+名字)
        $data['img']=$info['img']['savepath'].$info['img']['savename'];

        $data['s1-img']=$info['s1-img']['savepath'].$info['s1-img']['savename'];
        $data['s2-img']=$info['s2-img']['savepath'].$info['s2-img']['savename'];
        $data['s3-img']=$info['s3-img']['savepath'].$info['s3-img']['savename'];

        //添加
        if($sceModel->add($data))
        {
            header("Content-type:text/html;charset=utf-8");
               echo("<script type='text/javascript'> alert('添加数据成功！');location.href='index';</script>"); }
        else{
            header("Content-type:text/html;charset=utf-8");
                echo "<script>alert('添加数据失败！');history.go(-1);</script>";
    }
}
    
}

public  function edit(){
     $sceModel=M('sce');
     $id=(int)$_GET['sid'];
     $sce=$sceModel->where("sid=$id")->find();
     $this->assign('sce',$sce);
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
        $sceModel = M('sce');
        $data['sid']=$_POST['sid'];
        $id=$data['sid'];
        $data['name']=$_POST['name'];
        $data['date']=$_POST['date'];
        $data['introduce']=$_POST['introduce'];
        $data['s1-content']=$_POST['s1-content'];
        $data['s2-content']=$_POST['s2-content'];
        $data['s3-content']=$_POST['s3-content'];
        $data['author']=$_POST['author'];
        //设置thumb字段属性(目录+名字)
        $data['img']=$info['img']['savepath'].$info['img']['savename'];

        $data['s1-img']=$info['s1-img']['savepath'].$info['s1-img']['savename'];
        $data['s2-img']=$info['s2-img']['savepath'].$info['s2-img']['savename'];
        $data['s3-img']=$info['s3-img']['savepath'].$info['s3-img']['savename'];
        //添加
        if($sceModel->where("sid=$id")->save($data)){
            header("Content-type:text/html;charset=utf-8");
               echo("<script type='text/javascript'> alert('更新数据成功！');location.href='index';</script>"); }
           
        else{
            header("Content-type:text/html;charset=utf-8");
            echo "<script>alert('更新数据失败！');history.go(-1);</script>";
        }
    }
}
public function destroy(){
    $id = I('sid');
    $sceModel = M('sce');
    if($sceModel->where("sid=$id")->delete()){
        $this->success('删除成功');
    }else{
        $this->showError('删除失败');
    }
}
}


