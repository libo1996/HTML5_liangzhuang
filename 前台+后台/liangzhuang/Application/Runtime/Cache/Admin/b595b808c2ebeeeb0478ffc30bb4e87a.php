<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>靓妆后台主页</title>
    <link rel="stylesheet" type="text/css" href="/liangzhuang/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/liangzhuang/Public/admin/css/main.css"/>
    <link href="/liangzhuang/Public/admin/css/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/liangzhuang/Public/admin/js/libs/modernizr.min.js"></script>
    <script src="/liangzhuang/Public/admin/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="/liangzhuang/Public/admin/js/jquery-accordion-menu.js" type="text/javascript"></script>

</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Admin/index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Home/index/index');?>" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
               
                <li><a href="#">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div  style="width:19px; ">
        <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="box-shadow:none; ">
        <ul  >
            <li ><a href="#"><i class="fa fa-suitcase"></i>产品管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/pp/index');?>"><i class="fa fa-book"></i>所有产品 </a></li>
                    <li><a href="<?php echo U('Admin/pp/create');?>"><i class="fa fa-plus"></i>添加产品 </a>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-suitcase"></i>视频管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/video/index');?>"><i class="fa fa-book"></i>所有视频 </a></li>
                    <li><a href="<?php echo U('Admin/video/create');?>"><i class="fa fa-plus"></i>添加视频 </a>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-suitcase"></i>文章管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/sce/index');?>"><i class="fa fa-book"></i>所有文章 </a></li>
                    <li><a href="<?php echo U('Admin/sce/create');?>"><i class="fa fa-plus"></i>添加文章 </a>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-suitcase"></i>种草管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/zc/index');?>"><i class="fa fa-book"></i>所有种草 </a></li>
                    <li><a href="<?php echo U('Admin/zc/create');?>"><i class="fa fa-plus"></i>添加种草 </a>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-suitcase"></i>用户管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/user/index');?>"><i class="fa fa-book"></i>所有用户 </a></li>
                    <li><a href="<?php echo U('Admin/user/create');?>"><i class="fa fa-plus"></i>添加用户 </a>
                </ul>
            </li>
        </ul>
        
    </div>
       
    </div> 
    </div>
    <!--/sidebar-->
    

    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎进入靓妆管理后台</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <a href="<?php echo U('Admin/pp/index');?>"><i class="icon-font">&#xe014;</i>所有产品</a>
                    <a href="<?php echo U('Admin/video/index');?>"><i class="icon-font">&#xe014;</i>所有视频</a>
                    <a href="<?php echo U('Admin/sce/index');?>"><i class="icon-font">&#xe029;</i>所有文章</a>
                    <a href="<?php echo U('Admin/zc/index');?>"><i class="icon-font">&#xe043;</i>所有种草</a>
                    <a href="<?php echo U('Admin/user/index');?>"><i class="icon-font">&#xe048;</i>用户管理</a>
                </div>
            </div>
        </div>
        
        <div class="result-wrap">
            <div class="result-title">
                <h1>基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">网站基本介绍</label><span class="res-info">靓妆XXXXXXX</span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info">Apache/2.2.21 (Win64) PHP/5.3.10</span>
                    </li>
                    <li>
                        <label class="res-lab">上传附件限制</label><span class="res-info">2M</span>
                    </li>
                    <li>
                        <label class="res-lab">北京时间</label><span class="res-info">

<script language=Javascript> 
var now=new Date() 
document.write(1900+now.getYear()+"-"+(now.getMonth()+1)+"-"+now.getDate()+" "+now.getHours()+":"+now.getMinutes()+":"+now.getSeconds()) 
</script> 

</span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名/IP</label><span class="res-info">localhost [ 127.0.0.1 ]</span>
                    </li>
                    <li>
                        <label class="res-lab">Host</label><span class="res-info">127.0.0.1</span>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
    <!--/main-->
</div>
<script type="text/javascript">

    jQuery("#jquery-accordion-menu").jqueryAccordionMenu();
    
</script>
</body>
</html>