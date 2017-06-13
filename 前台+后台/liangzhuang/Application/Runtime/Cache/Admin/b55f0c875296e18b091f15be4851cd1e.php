<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>微距后台主页</title>
    <link rel="stylesheet" type="text/css" href="/thinkphp_3/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/thinkphp_3/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/thinkphp_3/Public/admin/js/libs/modernizr.min.js"></script>
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
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>用户管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/user/index');?>"><i class="icon-font">&#xe008;</i>所有用户</a></li>
                        <li><a href="<?php echo U('Admin/user/create');?>"><i class="icon-font">&#xe026;</i>添加用户</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe040;</i>城市管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/city/index');?>"><i class="icon-font">&#xe008;</i>所有城市</a></li>
                        <li><a href="<?php echo U('Admin/city/create');?>"><i class="icon-font">&#xe026;</i>添加城市</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe033;</i>景点管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/sight/index');?>"><i class="icon-font">&#xe008;</i>所有景点</a></li>
                        <li><a href="<?php echo U('Admin/sight/create');?>"><i class="icon-font">&#xe026;</i>添加景点</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe043;</i>酒店管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/hotel/index');?>"><i class="icon-font">&#xe008;</i>所有酒店</a></li>
                        <li><a href="<?php echo U('Admin/hotel/create');?>"><i class="icon-font">&#xe026;</i>添加酒店</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe048;</i>留言板管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/board/index');?>"><i class="icon-font">&#xe008;</i>留言板信息</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe049;</i>攻略管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/strategy/index');?>"><i class="icon-font">&#xe008;</i>所有攻略</a></li>
                        <li><a href="<?php echo U('Admin/strategy/create');?>"><i class="icon-font">&#xe026;</i>添加攻略</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div> 
    <!--/sidebar-->
    
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Admin/index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('Admin/hotel/index');?>">酒店管理</a><span class="crumb-step">&gt;</span><span>新增酒店</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/hotel/store');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>酒店名称：：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>所属城市：</th>
                                <td><select name="colId" id="catid" class="required">
                                    <option value="">请选择州、领地</option>
                                    <option value="19">南澳大利亚</option>
                                    <option value="19">塔斯马尼亚</option>
                                    <option value="20">维多利亚州</option>
                                    <option value="20">西澳大利亚州</option>
                                    <option value="20">澳大利亚首都领地</option>
                                    <option value="20">北领地</option>
                                </select>
                                <select name="colId" id="catid" class="required">
                                    <option value="">请选择城市</option>
                                    
                                </select></td>
                            </tr>
                            <tr>
                                <th>房间类型</th>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <th>酒店电话</th>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <th>酒店价格</th>
                                <td><input type="text"></td>
                            </tr>
                            <th width="120"><i class="require-red">*</i>早餐：</th>
                                <td>
                                    <input type="radio" value="yes" name="breakfast" checked="checked" />有   &nbsp; &nbsp; &nbsp; &nbsp;
                                    <input type="radio" value="yes" name="breakfast" checked="checked" />无
                                </td>
                            </tr>
                            <tr>
                                <th width="120"><i class="require-red">*</i>宽带：</th>
                                <td>
                                    <input type="radio" value="yes" name="brandband" checked="checked" />有   &nbsp; &nbsp; &nbsp; &nbsp;
                                    <input type="radio" value="yes" name="brandband" checked="checked" />无
                                </td>
                            <tr>
                                <th>具体位置</th>
                                <td>
                                <textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="3"></textarea>
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
</body>
</html>