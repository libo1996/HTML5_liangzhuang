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
    
<style>
  table{
    table-layout:fixed;
  }
  td{
width:100%;
word-break:keep-all;/* 不换行 */
white-space:nowrap;/* 不换行 */
overflow:hidden;/* 内容超出宽度时隐藏超出部分的内容 */
text-overflow:ellipsis;/* 当对象内文本溢出时显示省略标记(...) ；需与overflow:hidden;一 起使用。*/
}

</style>
    <div class="main-wrap">

        <div class="crumb-wrap">
           <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Admin/index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('Admin/pp/index');?>">产品管理</a></div>
        </div>

        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            
                            <th>产品ID</th>
                            <th>产品名字</th>
                            <th>品牌</th>
                            <th>功效</th>
                            <th>适用人群</th>
                            <th>容量</th>
                            <th>保质期</th>
                            <th>色号</th>
                            <th>原产国家</th>
                            <th>特别说明</th>
                            <th>种类</th>
                            <th>具体种类</th>
                            <th>图片1</th>
                            <th>图片2</th>
                            <th>图片3</th>                        
                            <th style="width:100px;">操作</th>
                        </tr>

                        
                         <?php if(is_array($pp)): $i = 0; $__LIST__ = $pp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tc"><input name="id[]" value="<?php echo ($vo["pid"]); ?>" type="checkbox"></td>
                            <td><?php echo ($vo["pid"]); ?></td>
                            <td><?php echo ($vo["name"]); ?></td>
                            <td><?php echo ($vo["brand"]); ?></td>
                            <td><?php echo ($vo["effect"]); ?></td>
                            <td><?php echo ($vo["fit-people"]); ?></td>
                            <td><?php echo ($vo["volume"]); ?></td>
                            <td><?php echo ($vo["time"]); ?></td>
                            <td><?php echo ($vo["color"]); ?></td>
                            <td><?php echo ($vo["country"]); ?></td>
                            <td><?php echo ($vo["explain"]); ?></td>
                            <td><?php echo ($vo["b_kind"]); ?></td>
                            <td><?php echo ($vo["s_kind"]); ?></td>
                            <td><?php echo ($vo["img1"]); ?></td>
                            <td><?php echo ($vo["img2"]); ?></td>
                            <td><?php echo ($vo["img3"]); ?></td>
                           
                            <td>
                                <a class="link-update" href="<?php echo U('Admin/pp/edit');?>/pid/<?php echo ($vo["pid"]); ?>">修改</a>
                                <a class="link-del" href="<?php echo U('Admin/pp/destroy');?>/pid/<?php echo ($vo["pid"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                       
                    </table>
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