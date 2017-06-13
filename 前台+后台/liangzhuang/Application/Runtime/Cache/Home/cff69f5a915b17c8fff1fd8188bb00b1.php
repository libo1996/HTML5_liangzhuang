<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/liangzhuang/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/liangzhuang/Public/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/liangzhuang/Public/home/css/geren.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/liangzhuang/Public/home/css/layoutit.css" type="text/css"  />

<script src="/liangzhuang/Public/home/js/jquery.js"></script>

<script type="text/javascript" src="/liangzhuang/Public/home/js/move-top.js"></script>
<script type="text/javascript" src="/liangzhuang/Public/home/js/easing.js"></script>

<style type="text/css">

	.search-box a{
		font-weight:bold;
		font-family: 'Arvo', serif;
		font-size: 1em;
		color: rgb(255,255,255);
	}
	.search-box a:hover{
	color: rgb(255,134,13);
	}
	</style>
</head>
<body>
<!-- header -->
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
					<li><a href="<?php echo U('Home/pp/product');?>"><span data-hover="产品介绍">产品介绍</span></a></li>
					<li><a href="<?php echo U('Home/video/video');?>" class="active"><span data-hover="视频教学">视频教学</span></a></li>
					<li><a href="<?php echo U('Home/sce/services');?>" ><span data-hover="美妆点评">美妆点评</span></a></li>
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
				<div class="search-box">
					    <div id="sb-search" class="sb-search">
					        <a href="<?php echo U('Home/user/ge1');?>"><p>zmalqp@163.com</p></a>
						</div>
				    </div>
		<div class="clearfix"></div>
	</div>
	</div>
</div>

			<div class="content">
			<div class="con4">
				<canvas id="cvs" width="200" height="200"></canvas>
				<span class="btn upload">上传头像<input type="file" class="upload_pic" id="upload"></span>
			</div>
			</div>
			<div class="xx">
				<div class="dbt">
					<h1>积分签到</h1>
					<HR style="border:1 dashed #987cb9; margin-left:20%; margin-top:20px; margin-bottom:50px;" width="60%" color=#987cb9 SIZE=1>
				</div>
				<div class="xxxg">
					<div class="row clearfix">
						<div class="col-md-1 column"></div>	
						<div class="col-md-2 column" id="img">
							<p>积分：<span id="fen">200</span></p>
					    </div>
					    <div class="col-md-8 column">
					    	<button id="btn" onclick="aa()">签到</button>
					    </div>	
					    <div class="col-md-1 column"></div>		
				    </div>
				</div>
			

			<div class="xx">
				<div class="dbt">
					<h1>会员中心</h1>
					<HR style="border:1 dashed #987cb9; margin-left:20%; margin-top:20px; margin-bottom:50px;" width="60%" color=#987cb9 SIZE=1>
				</div>
				<div class="xxxg">
					<div class="row clearfix">
						<div class="col-md-1 column"></div>	
						<div class="col-md-2 column" id="img">
							<p>您已经是会员了！</p>
					    </div>
				    </div>
				</div>


				<div class="footer-section" id="c123">
					<div class="container">
						<div class="footer-left">
							<p>    Copyright © 靓妆.Company name All rights reserved.</p>
						</div>
							<div class="bottom-menu">
								<ul>
								<li><a href="<?php echo U('Home/index/index');?>" ><span data-hover="首页">首页</span></a></li>
					<li><a href="<?php echo U('Home/pp/product');?>"><span data-hover="产品介绍">产品介绍</span></a></li>
					<li><a href="<?php echo U('Home/video/video');?>" class="active"><span data-hover="视频教学">视频教学</span></a></li>
					<li><a href="<?php echo U('Home/sce/services');?>" ><span data-hover="美妆点评">美妆点评</span></a></li>
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
<script src="/liangzhuang/Public/home/js/geren.js"></script>
</html>