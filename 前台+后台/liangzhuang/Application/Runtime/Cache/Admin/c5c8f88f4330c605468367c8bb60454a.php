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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Admin/index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('Admin/user/index');?>">用户管理</a><span class="crumb-step">&gt;</span><span>编辑用户</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/user/update');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>用户ID：</th>
                                <td>
                                    <input class="common-text required" id="name" name="uid" size="50" value="<?php echo ($user["uid"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>用户名字</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="name" size="50" value="<?php echo ($user["name"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>头像：</th>
                                <td><img src="/liangzhuang/Public/<?php echo ($user["img"]); ?>" width="300px" height="50px"/><input type="file" name="img"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>用户积分</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="integral" size="50" value="<?php echo ($user["integral"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>密码</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="pw" size="50" value="<?php echo ($user["pw"]); ?>" type="text">
                                </td>
                            </tr>
                           <tr>
                                <th><i class="require-red"></i>心愿</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="xy-id" size="50" value="<?php echo ($user["xy-id"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>收藏</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="sc-id" size="50" value="<?php echo ($user["sc-id"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>手机</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="phone" size="50" value="<?php echo ($user["phone"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>VIP</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="vip" size="50" value="<?php echo ($user["vip"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>邮箱</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="email" size="50" value="<?php echo ($user["email"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>性别</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="sex" size="50" value="<?php echo ($user["sex"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>生日</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="birthday" size="50" value="<?php echo ($user["birthday"]); ?>" type="text">
                                </td>
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