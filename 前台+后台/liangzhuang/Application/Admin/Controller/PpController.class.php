<?php
namespace Admin\Controller;
use Think\Controller;

class PpController extends Controller {
    //  public function __construct(){
    //     parent::__construct();
    //     if(!isLogin()){
    //        $this->error("请先登录",U("Admin/login"));
    //        //  $this->redirect('Admin/login',0);
    //     }
    // }
public function index(){
    //1、获取数据
    $ppModel = M('pp');
    $pp = $ppModel->select();
    //2、分配数据
    $this->assign('pp', $pp);
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
        $ppModel = M('pp');
        //组织数据
        $data = $ppModel->create();
        $data['name']=$_POST['name'];
        $data['brand']=$_POST['brand'];
        $data['effect']=$_POST['effect'];
        $data['fit-people']=$_POST['fit-people'];
        $data['volume']=$_POST['volume'];
        $data['time']=$_POST['time'];
        $data['color']=$_POST['color'];
        $data['country']=$_POST['country'];
        $data['explain']=$_POST['explain'];
        $data['b_kind']=$_POST['b_kind'];
        $data['s_kind']=$_POST['s_kind'];
        //设置thumb字段属性(目录+名字)
        $data['img1']=$info['img1']['savepath'].$info['img1']['savename'];
        $data['img2']=$info['img2']['savepath'].$info['img2']['savename'];
        $data['img3']=$info['img2']['savepath'].$info['img3']['savename'];
       

        if($ppModel->add($data))
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
     $ppModel=M('pp');
     $id=(int)$_GET['pid'];
     $pp=$ppModel->where("pid=$id")->find();
     $this->assign('pp',$pp);
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
        $ppModel = M('pp');
        $data['pid']=$_POST['pid'];
        $id=$data['pid'];
        $data['name']=$_POST['name'];
        $data['brand']=$_POST['brand'];
        $data['effect']=$_POST['effect'];
        $data['fit-people']=$_POST['fit-people'];
        $data['volume']=$_POST['volume'];
        $data['time']=$_POST['time'];
        $data['color']=$_POST['color'];
        $data['country']=$_POST['country'];
        $data['explain']=$_POST['explain'];
        $data['b_kind']=$_POST['b_kind'];
        $data['s_kind']=$_POST['s_kind'];
        //设置thumb字段属性(目录+名字)
        $data['img1']=$info['img1']['savepath'].$info['img1']['savename'];
        $data['img2']=$info['img2']['savepath'].$info['img2']['savename'];
        $data['img3']=$info['img2']['savepath'].$info['img3']['savename'];
        $data['img4']=$info['img2']['savepath'].$info['img4']['savename'];
        $data['img5']=$info['img2']['savepath'].$info['img5']['savename'];
        if($ppModel->where("pid=$id")->save($data)){
            header("Content-type:text/html;charset=utf-8");
               echo("<script type='text/javascript'> alert('更新数据成功！');location.href='index';</script>"); }
           
        else{
            header("Content-type:text/html;charset=utf-8");
            echo "<script>alert('更新数据失败！');history.go(-1);</script>";
        }
    }
}


public function destroy(){
    $id = I('pid');
    $ppModel = M('pp');
    if($ppModel->where("pid=$id")->delete()){
        $this->success('删除成功');
    }else{
        $this->showError('删除失败');
    }
}

}
