<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>Product</title>
<link href="/liangzhuang/Public/home/css/product.css" rel="stylesheet" type="text/css" media="all" />
<link href="/liangzhuang/Public/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="/liangzhuang/Public/home/js/jquery.js"></script>
<script type="text/javascript" src="/liangzhuang/Public/home/js/bootstrap.min.js"></script>
<link href="/liangzhuang/Public/home/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
	.header{
		margin-bottom: 5%;
	}
	body{
		background-color: rgb(255,255,237);
	}
</style>
</head>
<body>
<div class="header" id="home">
	<div class="container">
	   <div class="header-bottom">
		<div class="logo">
			<img src="/liangzhuang/Public/home/images/LOGO.png" width="60%">
		</div>
			<div class="top-menu">
				<span class="menu"> </span>
				<ul>
					<nav class="cl-effect-5">
					<li><a href="<?php echo U('Home/index/index');?>" ><span data-hover="首页">首页</span></a></li>
					<li><a href="<?php echo U('Home/pp/product');?>" class="active"><span data-hover="产品介绍">产品介绍</span></a></li>
					<li><a href="<?php echo U('Home/video/video');?>"><span data-hover="视频教学">视频教学</span></a></li>
					<li><a href="<?php echo U('Home/sce/services');?>"><span data-hover="美妆点评">美妆点评</span></a></li>
					<li><a href="<?php echo U('Home/zc/zcao');?>"><span data-hover="种草">种草</span></a></li>
					</nav>
				</ul>
				</div>
				 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
		
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row">
				<?php if(is_array($pp)): $i = 0; $__LIST__ = $pp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-4">
					<div class="thumbnail">
						<img src="/liangzhuang/Public/<?php echo ($vo["img1"]); ?>" style="height:345px" />
						<p><?php echo ($vo["name"]); ?></p>
						<h3><?php echo ($vo["brand"]); ?></h3>
						<a href="<?php echo U('Home/pp/product_content');?>/pid/<?php echo ($vo["pid"]); ?>"><input type="button" class="ww" value="去看看" ></a>
					</div>	
				</div><?php endforeach; endif; else: echo "" ;endif; ?>	
			</div>
		</div>
	</div> 
</div>

<div class="footer-section">
					<div class="container">
						<div class="footer-left">
							<p>    Copyright © 靓妆.Company name All rights reserved.</p>
						</div>
							<div class="bottom-menu">
								<ul>
								<li><a href="<?php echo U('Home/index/index');?>" class="active"><span data-hover="首页">首页</span></a></li>
					<li><a href="<?php echo U('Home/pp/product');?>"><span data-hover="产品介绍">产品介绍</span></a></li>
					<li><a href="<?php echo U('Home/video/video');?>"><span data-hover="视频教学">视频教学</span></a></li>
					<li><a href="<?php echo U('Home/sce/services');?>"><span data-hover="美妆点评">美妆点评</span></a></li>
					<li><a href="<?php echo U('Home/zc/zcao');?>"><span data-hover="种草">种草</span></a></li>
				
								</ul>
							</div>
							<div class="clearfix"></div>
							<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>				
				</div>
</body>
</html>