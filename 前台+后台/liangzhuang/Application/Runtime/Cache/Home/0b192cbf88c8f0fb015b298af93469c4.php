<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>种草内容页</title>
<link href="/liangzhuang/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/liangzhuang/Public/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/liangzhuang/Public/home/css/zc.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/liangzhuang/Public/home/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="/liangzhuang/Public/home/css/layoutit.css" type="text/css"  />
<script src="/liangzhuang/Public/home/js/jquery.js"></script>
<script src="/liangzhuang/Public/home/js/bootstrap.min.js"></script>
<script type="application/x-javascript"> 
    addEventListener("load", function() { 
    	setTimeout(hideURLbar, 0); }, false); 
        function hideURLbar(){ 
    	window.scrollTo(0,1); 
} </script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="/liangzhuang/Public/home/js/jquery-1.8.3.min.js"></script>
<script src="/liangzhuang/Public/home/js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
  </script>
<script type="text/javascript" src="/liangzhuang/Public/home/js/move-top.js"></script>
<script type="text/javascript" src="/liangzhuang/Public/home/js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<style type="text/css">
	body{
	background-color: rgb(255,255,237);
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
					<li><a href="<?php echo U('Home/video/video');?>"><span data-hover="视频教学">视频教学</span></a></li>
					<li><a href="<?php echo U('Home/sce/services');?>"><span data-hover="美妆点评">美妆点评</span></a></li>
					<li><a href="<?php echo U('Home/zc/zcao');?>" class="active"><span data-hover="种草">种草</span></a></li>
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
				 <!-- start search-->
				   
					<!-- search-scripts -->
					<script src="/liangzhuang/Public/home/js/classie.js"></script>
					<script src="/liangzhuang/Public/home/js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
		<div class="clearfix"></div>
		</div>
	</div>
</div>
			<div class="portfolio-work-section" id="portfolio">
			<div class="container">
				<div class="our-work-section-head text-center">
	     
		  <h3>Strongly Recommend</h3>
		  <h3>种草</h3>
	</div>
	    <!-- 内容 -->
	<div class="container">
		<div class="zc_c">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<h3>
						<?php echo ($zc["title"]); ?> ​ ​​​​ 
					</h3>
				</div>
			</div>
			<div class="zc_cc">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<h3>
						1.<?php echo ($zc["name1"]); ?> ​ ​​​​ 
					</h3>
					<div class="img">
					<img src="/liangzhuang/Public/<?php echo ($zc["img1"]); ?>" id="zci"/>
				
					<p class="zcp">
						 <?php echo ($zc["introduce1"]); ?>
					</p>
					</div>
				</div>
			</div>
		</div>
			<div class="zc_cc">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<h3>
						2.<?php echo ($zc["name2"]); ?>
					</h3>
					<div class="img">
					<img src="/liangzhuang/Public/<?php echo ($zc["img2"]); ?>" id="zci"/>
				
					<p class="zcp">
						 <?php echo ($zc["introduce2"]); ?>
					</p>
					</div>
				</div>
			</div>
		</div>
			<div class="zc_cc">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<h3>
						3.<?php echo ($zc["name3"]); ?>
					</h3>
					<div class="img">
					<img src="/liangzhuang/Public/<?php echo ($zc["img3"]); ?>" id="zci" />
				
					<p class="zcp">
						 <?php echo ($zc["introduce3"]); ?>
					</p>
					</div>
				</div>
			</div>
		</div>
			
			
		</div>
	</div>
</div>
</div>
			

					<div>
<div class="clearfix"></div>					
				</div>
 <!-- Script for gallery Here -->
				<script type="text/javascript" src="/liangzhuang/Public/home/js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							
							}
				
						};
						
						// Run the show!
						filterList.init();
						
						
					});	
					</script>
			<!-- Gallery Script Ends -->
			
		
	  
	  
			</div>
		</div>
	</div>
	<!-- portfolio-section-ends -->
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