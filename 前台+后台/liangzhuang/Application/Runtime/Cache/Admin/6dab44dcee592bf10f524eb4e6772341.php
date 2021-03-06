<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>微距后台主页</title>
    <link rel="stylesheet" type="text/css" href="/weiju2/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/weiju2/Public/admin/css/main.css"/>
    <link href="/weiju2/Public/admin/css/jquery-accordion-menu.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/weiju2/Public/admin/js/libs/modernizr.min.js"></script>
    <script src="/weiju2/Public/admin/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="/weiju2/Public/admin/js/jquery-accordion-menu.js" type="text/javascript"></script>

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
            <li ><a href="#"><i class="fa fa-suitcase"></i>游客管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/visitor/index');?>"><i class="fa fa-book"></i>所有游客 </a></li>
                    <li><a href="<?php echo U('Admin/visitor/create');?>"><i class="fa fa-plus"></i>添加游客 </a>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-suitcase"></i>导游管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/guide/index');?>"><i class="fa fa-book"></i>所有导游 </a></li>
                    <li><a href="<?php echo U('Admin/guide/create');?>"><i class="fa fa-plus"></i>添加导游 </a>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-suitcase"></i>景点管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/sight/index');?>"><i class="fa fa-book"></i>所有景点 </a></li>
                    <li><a href="<?php echo U('Admin/sight/create');?>"><i class="fa fa-plus"></i>添加景点 </a>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-suitcase"></i>酒店管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/hotel/index');?>"><i class="fa fa-book"></i>所有酒店 </a></li>
                    <li><a href="<?php echo U('Admin/hotel/create');?>"><i class="fa fa-plus"></i>添加酒店 </a>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-suitcase"></i>美食管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/food/index');?>"><i class="fa fa-book"></i>所有美食 </a></li>
                    <li><a href="<?php echo U('Admin/food/create');?>"><i class="fa fa-plus"></i>添加美食 </a>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-suitcase"></i>攻略管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/strategy/index');?>"><i class="fa fa-book"></i>所有攻略 </a></li>
                    <li><a href="<?php echo U('Admin/strategy/create');?>"><i class="fa fa-plus"></i>添加攻略 </a>
                </ul>
            </li>
             <li><a href="#"><i class="fa fa-suitcase"></i>子攻略管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/stra/index');?>"><i class="fa fa-book"></i>所有子攻略 </a></li>
                    <li><a href="<?php echo U('Admin/stra/create');?>"><i class="fa fa-plus"></i>添加子攻略 </a>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-suitcase"></i>留言板管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/board/index');?>"><i class="fa fa-book"></i>所有留言 </a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-suitcase"></i>洲管理 </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Admin/state/index');?>"><i class="fa fa-book"></i>所有洲 </a></li>
                    <li><a href="<?php echo U('Admin/state/create');?>"><i class="fa fa-plus"></i>添加州 </a>
                </ul>
            </li>
        </ul>
        
    </div>
       
    </div> 
    </div>
    <!--/sidebar-->
    
 <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Admin/index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('Admin/visitor/index');?>">游客管理</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('Admin/visitor/edit');?>">编辑游客</a></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/visitor/update');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                         <tbody>
                            <tr>
                                <th><i class="require-red">*</i>游客ID：</th>
                                <td>
                                    <input class="common-text required" id="name" name="uid" size="50" value="<?php echo ($visitor["uid"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>游客昵称：</th>
                                <td>
                                    <input class="common-text required" id="name" name="name" size="50" value="<?php echo ($visitor["name"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>密码：</th>
                                <td>
                                    <input class="common-text required" id="name" name="password" size="50" value="<?php echo ($visitor["password"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>上传头像：</th>
                                <td>
                                    <img src="/weiju2/Public/<?php echo ($visitor["thumb"]); ?>" width="300px" height="50px"/>
                                    <input type="file" name="thumb">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>QQ/WeChat：</th>
                                <td><input class="common-text required" id="name" name="number" size="50" value="<?php echo ($visitor["number"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <a href="<?php echo U('Admin/visitor/index');?>"><input class="btn btn6" onclick="history.go(-1)" value="返回" type="button"> 
                                </td>
                            </tr>
                        </tbody>

                    </table>
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