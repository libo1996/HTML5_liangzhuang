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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Admin/index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('Admin/zc/index');?>">种草管理</a><span class="crumb-step">&gt;</span><span>编辑种草</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/zc/update');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>种草ID：</th>
                                <td>
                                    <input class="common-text required" id="name" name="zid" size="50" value="<?php echo ($zc["zid"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>种草标题</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="title" size="50" value="<?php echo ($zc["title"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>图片1：</th>
                                <td><img src="/liangzhuang/Public/<?php echo ($zc["img1"]); ?>" width="300px" height="50px"/><input type="file" name="img1"></td>
                            </tr>
                            <tr>
                                <th>图片2：</th>
                                <td><img src="/liangzhuang/Public/<?php echo ($zc["img2"]); ?>" width="300px" height="50px"/><input type="file" name="img2"></td>
                            </tr>
                            <tr>
                                <th>图片3：</th>
                                <td><img src="/liangzhuang/Public/<?php echo ($zc["img3"]); ?>" width="300px" height="50px"/><input type="file" name="img3"></td>
                            </tr>
                            
                            <tr>
                                <th>名称1</th>
                                <td> <input class="common-text required" id="name" name="name1" size="50" value="<?php echo ($zc["name1"]); ?>" type="text"></td>
                            </tr>
                            <tr>
                                <th>名称2</th>
                                <td><input class="common-text required" id="name" name="name2" size="50" value="<?php echo ($zc["name2"]); ?>" type="text"></td>
                            </tr><tr>
                                <th>名称3</th>
                                <td><input class="common-text required" id="name" name="name3" size="50" value="<?php echo ($zc["name3"]); ?>" type="text"></td>
                            </tr>
                           <tr>
                                <th>介绍1</th>
                                <td><input type="text" name="introduce1" value="<?php echo ($zc["introduce1"]); ?>"></td>
                            </tr>
                            <tr>
                                <th>介绍2</th>
                                <td><input type="text" name="introduce2" value="<?php echo ($zc["introduce2"]); ?>"></td>
                            </tr><tr>
                                <th>介绍3</th>
                                <td><input type="text" name="introduce3" value="<?php echo ($zc["introduce3"]); ?>"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
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