<?php
namespace Admin\Controller;
use Think\Controller;
class VideoController extends Controller {
  // public function __construct(){
  //       parent::__construct();
  //       if(!isLogin()){
  //          $this->error("请先登录",U("Admin/login"));
  //          //  $this->redirect('Admin/login',0);
  //       }
  //   }
  
  
public function index(){
    //1、获取数据
    $videoModel = M('video');
    $video = $videoModel->select();
    //2、分配数据
    $this->assign('video', $video);
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
        $videoModel = M('video');
        //组织数据
        $data = $videoModel->create();
        $data['name']=$_POST['name'];
        $data['kind']=$_POST['kind'];
        $data['introduce']=$_POST['introduce'];
        //设置thumb字段属性(目录+名字)
        $data['path']=$info['path']['savepath'].$info['path']['savename'];
        $data['img']=$info['img']['savepath'].$info['img']['savename'];

        //添加
        if($videoModel->add($data))
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
     $videoModel=M('video');
     $id=(int)$_GET['vid'];
     $video=$videoModel->where("vid=$id")->find();
     $this->assign('video',$video);
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
        $videoModel = M('video');
        $data['name']=$_POST['name'];
        $data['vid']=$_POST['vid'];
        $id=$data['vid'];
        $data['kind']=$_POST['kind'];
        $data['introduce']=$_POST['introduce'];
        //设置thumb字段属性(目录+名字)
        $data['path']=$info['path']['savepath'].$info['path']['savename'];
        $data['img']=$info['img']['savepath'].$info['img']['savename'];
        //添加
        if($videoModel->where("vid=$id")->save($data)){
            header("Content-type:text/html;charset=utf-8");
               echo("<script type='text/javascript'> alert('更新数据成功！');location.href='index';</script>"); }
           
        else{
            header("Content-type:text/html;charset=utf-8");
            echo "<script>alert('更新数据失败！');history.go(-1);</script>";
        }
    }
}
public function destroy(){
    $id = I('vid');
    $videoModel = M('video');
    if($videoModel->where("vid=$id")->delete()){
        $this->success('删除成功');
    }else{
        $this->showError('删除失败');
    }
}
}


