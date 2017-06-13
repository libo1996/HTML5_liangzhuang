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
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac3.jpg" />
						<p>菲拉格慕(Ferragamo)蓝色经典男士淡香水50ml</p>
						<h3>￥159</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac4.jpg" />
						<p>范思哲（versace）绅情香水100ml</p>
						<h3>￥269</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>						
					</div>						
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac11.jpg" />
						<p>古弛（GUCCI）罪爱（男士/男性）喷式淡香水50ml</p>
						<h3>￥399</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac12.jpg" />
						<p>爱马仕大地男士淡香水50ml</p>
						<h3>￥378</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>						
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac13.jpg" />
						<p>阿玛尼寄情男士香水50ml</p>
						<h3>￥339</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>						
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac16.jpg" />
						<p>卡文克莱(CALVIN KLEIN)飞男士淡香水（又名卡尔文克雷恩飞男士淡香水） 50ml</p>
						<h3>￥269</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>				
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac6.jpg" />
						<p>博柏利 英伦迷情香水30ml</p>
						<h3>￥109</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>							
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac7.jpg" />
						<p>菲拉格慕(Ferragamo)梦中情人淡香水30ml</p>
						<h3>￥129</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>							
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac8.jpg" />
						<p>伊丽莎白雅顿 (Elizabeth Arden)第五大道淡香水 75ml</p>
						<h3>￥189</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>
												
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac9.jpg" />
						<p>菲拉格慕(Ferragamo)梦中彩虹淡香水30ml</p>
						<h3>￥139</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>					
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac17.jpg" />
						<p>菲拉格慕(Ferragamo)梦中彩虹淡香水30ml</p>
						<h3>￥139</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/18.jpg" />
						<p>莫杰（Marc Jacobs）雏菊女士淡香氛50ml</p>
						<h3>￥349</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac19.jpg" />
						<p>卡文克莱卡雷比香水200ml</p>
						<h3>￥209</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac20.jpg" />
						<p>卡尔文克雷恩卡莱优淡香水 200ml</p>
						<h3>￥219</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>						
					</div>						
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img  src="/liangzhuang/Public/home/images/ac21.jpg" />
						<p>爱马仕 尼罗河香水 100ml</p>
						<h3>￥469</h3>
						<a href="<?php echo U('Home/pp/product_content');?>"><input type="button" class="ww" value="去看看" ></a>						
					</div>
				</div>
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