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
    
<style>
  .result-tab{
    table-layout:fixed;
  }
  .result-tab td{
width:100%;
word-break:keep-all;/* 不换行 */
white-space:nowrap;/* 不换行 */
overflow:hidden;/* 内容超出宽度时隐藏超出部分的内容 */
text-overflow:ellipsis;/* 当对象内文本溢出时显示省略标记(...) ；需与overflow:hidden;一 起使用。*/
}

</style>
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">
            </i><a href="<?php echo U('Admin/index/index');?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">所有游客</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo U('Admin/visitor/create');?>"><i class="icon-font"></i>新增游客</a>
                        
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>游客ID</th>
                            <th>游客昵称</th>
                            <th>密码</th>
                            <th>QQ/WeChat</th>
                            <th>头像</th>
                            <th>操作</th>
                        </tr>

                        <?php if(is_array($visitor)): $i = 0; $__LIST__ = $visitor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tc"><input name="id[]" value="<?php echo ($vo["uid"]); ?>" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="<?php echo ($vo["uid"]); ?>" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="<?php echo ($vo["uid"]); ?>" type="text">
                            </td>
                            <td><?php echo ($vo["uid"]); ?></td>
                            <td><?php echo ($vo["name"]); ?></td>
                            <td><?php echo ($vo["password"]); ?></td>
                            <td><?php echo ($vo["number"]); ?></td>
                            <td><?php echo ($vo["thumb"]); ?></td>
                            <td>
                                <a class="link-update" href="<?php echo U('Admin/visitor/edit');?>/uid/<?php echo ($vo["uid"]); ?>">修改</a>
                                <a class="link-del" href="<?php echo U('Admin/visitor/destroy');?>/uid/<?php echo ($vo["uid"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                       

                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
<script type="text/javascript">

    jQuery("#jquery-accordion-menu").jqueryAccordionMenu();
    
</script>
</body>
</html>