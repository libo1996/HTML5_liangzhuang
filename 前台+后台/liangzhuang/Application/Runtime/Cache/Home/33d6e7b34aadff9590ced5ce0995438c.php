<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>美妆点评内容页</title>
<link href="/liangzhuang/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/liangzhuang/Public/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="/liangzhuang/Public/home/css/flexslider.css" type="text/css" media="screen" />
<script src="/liangzhuang/Public/home/js/jquery-1.8.3.min.js"></script>
<script src="/liangzhuang/Public/home/js/responsiveslides.min.js"></script>
<style type="text/css">
	body{
		background-color: rgb(255,255,237);
	}
	#jz{
	 	margin:0 auto; 
	 	width:50%;
	 	margin-top:5%;
	}
	#nhz{
		margin-top: -2%;
		margin-bottom: 1%;
	}
</style>
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
    <link rel="stylesheet" href="/liangzhuang/Public/home/css/swipebox.css">
    <script src="/liangzhuang/Public/home/js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
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
					<li><a href="<?php echo U('Home/sce/services');?>" class="active"><span data-hover="美妆点评">美妆点评</span></a></li>
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
			<!-- content-section-starts -->
			<div class="bjys">
	  <div class="blog-content">
	 <div class="container">
	     <div class="blog-content-head text-left" id="nhz">
			<h3><?php echo ($sce["name"]); ?></h3>
	    </div>
			<div class="section group">
				<div class="cont span_2_of_3">
					  <div class="blog_posts">
				       <div class="blog_date">
							<figure><span>23</span>June</figure>
					    </div>
					       <div class="blog_desc">
								<div class="blog_heading">
									<h3><?php echo ($sce["name"]); ?></h3>
									<p>声明：本文由入驻靓妆坊的作者撰写，观点仅代表作者本人，不代表靓妆坊立场。</p>
							     </div>
						<div class="section group example">			
							<div class="col blog_1_of_2">
				                <div class="blog_img">
				                	<img src="/liangzhuang/Public/<?php echo ($sce["img"]); ?>" alt="image" class="img-responsive zoom-img">
				                </div>
							</div>
								<div class="col blogdata_1_of_2">
									<div class="blog_data">
										<p><?php echo ($sce["introduce"]); ?></p>
				                   </div>
								</div>
							</div>
						 <div class="clearfix"></div>	
					</div>
					 <div class="clearfix"></div>	
				</div>

				<div class="single" id="jz">
					<div id="jz1">
						<p class="text" text-align="center">STEP 1：<?php echo ($sce["s1-content"]); ?></p>
					</div>
					
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="/liangzhuang/Public/<?php echo ($sce["s1-img"]); ?>" class="swipebox"  title="Image Title"> <img src="/liangzhuang/Public/<?php echo ($sce["s2-img"]); ?>" class="img-responsive" alt="" width="100%"><span class="zoom-icon"></span> </a>

		                </div>
					</div>	
				</div>
	   			
	   			<div class="single" id="jz">
					<p class="text">STEP 2：<?php echo ($sce["s2-content"]); ?></p>
		
					
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="/liangzhuang/Public/<?php echo ($sce["s3-img"]); ?>" class="swipebox"  title="Image Title"> <img src="/liangzhuang/Public/<?php echo ($sce["s3-img"]); ?>" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>
					</div>	
				</div>
				
				<div class="single" id="jz">
					<p class="text">STEP 3：<?php echo ($sce["s3-content"]); ?></p>
		
					
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="/liangzhuang/Public/<?php echo ($sce["s3-img"]); ?>" class="swipebox"  title="Image Title"> <img src="/liangzhuang/Public/<?php echo ($sce["s2-img"]); ?>" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>
					</div>	
				</div>

				

				


		    </div>
	 </div>
</div>
</div>
	 <!-- content-section-ends -->
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
							$().UItoTop({ easingType: 'easeOutQuart' });	
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>				
				</div>
</body>
</html>