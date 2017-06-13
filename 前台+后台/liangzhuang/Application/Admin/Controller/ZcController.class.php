<?php
namespace Admin\Controller;
use Think\Controller;

class ZcController extends Controller {
  // public function __construct(){
  //       parent::__construct();
  //       if(!isLogin()){
  //          $this->error("请先登录",U("Admin/login"));
  //          //  $this->redirect('Admin/login',0);
  //       }
  //   }
  
public function index(){
    //1、获取数据
    $zcModel = M('zc');
    $zc = $zcModel->select();
    //2、分配数据
    $this->assign('zc', $zc);
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
        $zcModel = M('zc');
        //组织数据
        $data = $zcModel->create();
        $data['title']=$_POST['title'];
        $data['introduce1']=$_POST['introduce1'];
        $data['introduce2']=$_POST['introduce2'];
        $data['introduce3']=$_POST['introduce3'];
        
        $data['name1']=$_POST['name1'];
        $data['name2']=$_POST['name2'];
        $data['name3']=$_POST['name3'];
        //设置thumb字段属性(目录+名字)
        $data['img1']=$info['img1']['savepath'].$info['img1']['savename'];
        $data['img2']=$info['img1']['savepath'].$info['img2']['savename'];
        $data['img3']=$info['img1']['savepath'].$info['img3']['savename'];
         

        if($zcModel->add($data))
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
     $zcModel=M('zc');
     $id=(int)$_GET['zid'];
     $zc=$zcModel->where("zid=$id")->find();
     $this->assign('zc',$zc);
     $this->display();
   }
public function update(){
   $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize=3145728 ;// 设置附件上传大小
    $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
    $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{
        $zcModel = M('zc');
        $data = $zcModel->create();
        $data['title']=$_POST['title'];
        $data['introduce1']=$_POST['introduce1'];
        $data['introduce2']=$_POST['introduce2'];
        $data['introduce3']=$_POST['introduce3'];
        $data['name1']=$_POST['name1'];
        $data['name2']=$_POST['name2'];
        $data['name3']=$_POST['name3'];
        $data['img1']=$info['img1']['savepath'].$info['img1']['savename'];
        $data['img2']=$info['img1']['savepath'].$info['img2']['savename'];
        $data['img3']=$info['img1']['savepath'].$info['img3']['savename'];
        $data['zid']=$_POST['zid'];
        $id=$data['zid'];
         if($zcModel->where("zid=$id")->save($data))
        {
               header("Content-type:text/html;charset=utf-8");
               echo("<script type='text/javascript'> alert('更新数据成功！');location.href='index';</script>"); 
           }
        else{
            header("Content-type:text/html;charset=utf-8");
                echo "<script>alert('更新数据失败！');history.go(-1);</script>";
            } 
}
}

public function destroy(){
    $id = I('zid');
    $zcModel = M('zc');
    if($zcModel->where("zid=$id")->delete()){
        $this->success('删除成功');
    }else{
        $this->showError('删除失败');
    }
}

}
