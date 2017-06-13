<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Video</title>
<link href="/liangzhuang/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/liangzhuang/Public/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
	#spjx{
		margin-bottom: -4%;
	}
</style>
<script type="application/x-javascript">
   addEventListener("load", function() 
   	{ 
   		setTimeout(hideURLbar, 0); 
   	}, false); 
   function hideURLbar(){ 
   	window.scrollTo(0,1); 
   } 
</script>
<script src="/liangzhuang/Public/home/js/jquery-1.8.3.min.js"></script>
<script src="/liangzhuang/Public/home/js/video.js"></script>
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
    <link rel="stylesheet" href="/liangzhuang/Public/home/css/swipebox.css">
    <script src="/liangzhuang/Public/home/js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<style type="text/css">
	#jfdh{
		background-color:#CC99CC;
	}
	#vip{
		background-color:#FF6666;
	}
	#mf{
		background-color:#FFCC99;
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
		<div class="clearfix"></div>
	</div>
	</div>
</div>
			<div class="portfolio-work-section" id="portfolio">
			<div class="container">
				<div class="our-work-section-head text-center" id="spjx">
		  <h3>视频教学</h3>
	</div>	    
		 <ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon web logo1">全部</span></li>
						<li><span class="filter" data-filter="app">普通</span></li>
						<li><span class="filter" data-filter="card">付费</span></li>
						<li><span class="filter" data-filter="icon">会员专区</span></li>
						</ul>
					<div id="portfoliolist">
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="/liangzhuang/Public/home/images/sc1.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="/liangzhuang/Public/home/images/2.png" alt=""/></h2>
							</div></a>
							<h3>桃花妆</h3>
							<input type="button" class="vv" id="jfdh" value="150积分兑换" onclick="aa()" >
		                </div>
		                
					</div>				
					<div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="#small-dialog1" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="/liangzhuang/Public/home/images/st11.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="/liangzhuang/Public/home/images/2.png" alt=""/></h2>
						  	</div></a>
                            <h3>儿童妆</h3>
                            <input type="button" class="vv" id="mf" value="免费" >
		                </div>
					</div>					
					<div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="#small-dialog2" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="/liangzhuang/Public/home/images/sc2.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="/liangzhuang/Public/home/images/2.png" alt=""/></h2>
						  	</div></a>
                            <h3>舞台妆</h3>
                            <input type="button" class="vv" id="vip" value="VIP专享" onclick="cc()">
		                </div>

					</div>
					
					<div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="#small-dialog3" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="/liangzhuang/Public/home/images/sc3.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="/liangzhuang/Public/home/images/2.png" alt=""/></h2>
						  	</div></a>
                            <h3>戏剧妆</h3>
                            <input type="button" class="vv" id="mf" value="免费" >
		                </div>
					</div>			
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="#small-dialog4" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="/liangzhuang/Public/home/images/sc4.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="/liangzhuang/Public/home/images/2.png" alt=""/></h2>
						  	</div></a>
                            <h3>宴会妆</h3>
                            <input type="button" class="vv" id="jfdh" value="150积分兑换"  onclick="aa()">
		                </div>
					</div>	
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="#small-dialog5" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="/liangzhuang/Public/home/images/sc5.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="/liangzhuang/Public/home/images/2.png" alt=""/></h2>
						  	</div></a>
                            <h3>新娘妆</h3>
                            <input type="button" class="vv" id="jfdh" value="150积分兑换" onclick="aa()" >
		                </div>
					</div>
<div class="clearfix"></div>					
				</div>		  
		  <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
				<script type="text/javascript" src="/liangzhuang/Public/home/js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
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
			<!-- pop-up-box -->
					  <script type="text/javascript" src="/liangzhuang/Public/home/js/modernizr.custom.min.js"></script>    
					<link href="/liangzhuang/Public/home/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
					<script src="/liangzhuang/Public/home/js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!-- //pop-up-box -->
			<div id="small-dialog" class="mfp-hide">
						<div class="image-top">
							<img src="/liangzhuang/Public/home/images/sc1.jpg">
						</div>
					</div>
					<div id="small-dialog1" class="mfp-hide">
						<div class="image-top">
							<video width="420" height="500" controls>  <source src="/liangzhuang/Public/home/video/2.mp4" type="video/mp4">  <source src="movie.ogg" type="video/ogg">  <source src="movie.webm" type="video/webm">  <object data="/liangzhuang/Public/home/video/2.mp4" width="320" height="240">    <embed src="movie.swf" width="320" height="240">  </object> </video>

						</div>
					</div>
					<div id="small-dialog2" class="mfp-hide">
						<div class="image-top">
							<img src="/liangzhuang/Public/home/images/sc2.jpg">
						</div>
					</div>
					<div id="small-dialog3" class="mfp-hide">
						<div class="image-top">
							<video width="420" height="500" controls>  <source src="/liangzhuang/Public/home/video/2.mp4" type="video/mp4">  <source src="movie.ogg" type="video/ogg">  <source src="movie.webm" type="video/webm">  <object data="/liangzhuang/Public/home/video/2.mp4" width="320" height="240">    <embed src="movie.swf" width="320" height="240">  </object> </video>
						</div>
					</div>
					<div id="small-dialog4" class="mfp-hide">
						<div class="image-top">
							<img src="/liangzhuang/Public/home/images/sc4.jpg">
						</div>
					</div>
					<div id="small-dialog5" class="mfp-hide">
						<div class="image-top">
							<img src="/liangzhuang/Public/home/images/sc5.jpg">
						</div>
					</div>
			<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
			</div>
		</div>
	</div>
	<!-- portfolio-section-ends -->
	<div class="footer-section">
					<div class="container">
						<div class="footer-left">
							<p>Copyright © 2017.Company name All rights reserved.微距2.0</p>
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