<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title></title>
<link href="/liangzhuang/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/liangzhuang/Public/home/css/geren.css" rel="stylesheet" type="text/css" media="all" />
<link href="/liangzhuang/Public/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/liangzhuang/Public/home/css/bootstrap.css" type="text/css" />
<script src="/liangzhuang/Public/home/js/jquery.js"></script>
<script src="/liangzhuang/Public/home/js/geren.js"></script>
<script src="/liangzhuang/Public/home/js/bootstrap.min.js"></script>
<script type="application/x-javascript"> 
    addEventListener("load", function() { 
    	setTimeout(hideURLbar, 0); }, false); 
        function hideURLbar(){ 
    	window.scrollTo(0,1); 
} </script>
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
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
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
					<li><a href="<?php echo U('Home/index/index');?>"><span data-hover="首页">首页</span></a></li>
					<li><a href="<?php echo U('Home/pp/product');?>"><span data-hover="产品介绍">产品介绍</span></a></li>
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
	    <!-- 内容 -->
	    <div class="container">	
	<div class="row clearfix">
		<div class="col-md-1 column"></div>	
		<div class="col-md-2 column" id="img">
			<img src="/liangzhuang/Public/home/images/banner2.png" style="width:150px; height:150px; border-radius:50%; overflow:hidden;"><span style="font-size:18px;">用户名</span>
			<p style="font-size:18px;">积分：<span id="fen" style="font-size:18px;">200</span></p>
	    </div>
	    <div class="col-md-8 column">
	    	<button id="btn" onclick="bb()">签到</button>
	    </div>	
	    <div class="col-md-1 column"></div>		
    </div>

    <hr style=" height:2px;border:none;border-top:2px dotted #0E0A12;" />
    <div id="TabMain">
	<div class="tabItemContainer">
		<li><a class="tabItemCurrent">我的心愿单</a></li>
		<li><a>修改个人信息</a></li>
		<li><a>修改密码</a></li>
		<li><a>绑定手机</a></li>
		<li><a>充值</a></li>

	</div>
	<div class="tabBodyContainer">
		<div class="tabBodyItem tabBodyCurrent">
			<div class="row clearfix" id="c1">
		    <div class="col-md-6 column">
			<img src="/liangzhuang/Public/home/images/zc1.jpg" width="300px">
		    </div>
		    <div class="col-md-6 column">
			<div class="cp">
	    			<h4>【经典子弹头】魅可（MAC）时尚唇膏3g    “唇”色诱惑让他无法抗拒！</h4>
	    			<p>外色内润，与时尚一吻定情，魅可（MAC）时尚唇膏3g（多色可选）！柔美丝绒触感加高度饱和显色，诠释唇部色彩，将性感的“唇”情本色演绎！持久唇色不沾杯，一次补妆维持一天的亮丽唇色，唇色诱惑让他无法抗拒！</p>
                </div>
            </div>
        </div>

        <div class="row clearfix" id="c1">
		    <div class="col-md-6 column">
			<img src="/liangzhuang/Public/home/images/zc1.jpg" width="300px">
		    </div>
		    <div class="col-md-6 column">
			<div class="cp">
	    			<h4>【经典子弹头】魅可（MAC）时尚唇膏3g    “唇”色诱惑让他无法抗拒！</h4>
	    			<p>外色内润，与时尚一吻定情，魅可（MAC）时尚唇膏3g（多色可选）！柔美丝绒触感加高度饱和显色，诠释唇部色彩，将性感的“唇”情本色演绎！持久唇色不沾杯，一次补妆维持一天的亮丽唇色，唇色诱惑让他无法抗拒！</p>
                </div>
            </div>
        </div>

        <div class="row clearfix" id="c1">
		    <div class="col-md-6 column">
			<img src="/liangzhuang/Public/home/images/zc1.jpg" width="300px">
		    </div>
		    <div class="col-md-6 column">
			<div class="cp">
	    			<h4>【经典子弹头】魅可（MAC）时尚唇膏3g    “唇”色诱惑让他无法抗拒！</h4>
	    			<p>外色内润，与时尚一吻定情，魅可（MAC）时尚唇膏3g（多色可选）！柔美丝绒触感加高度饱和显色，诠释唇部色彩，将性感的“唇”情本色演绎！持久唇色不沾杯，一次补妆维持一天的亮丽唇色，唇色诱惑让他无法抗拒！</p>
                </div>
            </div>
        </div>


		</div>
		<div class="tabBodyItem" style="font-size:18px;">
			<div class="row clearfix" id="m1">
			<div class="col-md-2 column"></div>	
		    <div class="col-md-4 column" >
			新用户名
		    </div>
		    <div class="col-md-4 column">
			<input type="text">
		    </div>
		<div class="col-md-2 column"></div>	
		</div>

		<div class="row clearfix" id="m1">
			<div class="col-md-2 column"></div>	
		    <div class="col-md-4 column" >
			新头像
		    </div>
		    <div class="col-md-4 column">
			<input type="file">
		    </div>
		<div class="col-md-2 column"></div>	
		</div>
		<div class="row clearfix" id="m1">
			<div class="col-md-8 column"></div>	
		    <div class="col-md-2 column">
			<input type="button" value="保存" id="upload">
		    </div>
		    <div class="col-md-2 column"></div>	
			<p></p>
		</div>

		</div>
		<div class="tabBodyItem" style="font-size:18px;">
			<div class="row clearfix" id="m1">
			<div class="col-md-2 column"></div>	
		    <div class="col-md-4 column" >
			原始密码
		    </div>
		    <div class="col-md-4 column">
			<input type="text">
		    </div>
		<div class="col-md-2 column"></div>	
			<p></p>
		</div>
		<div class="row clearfix" id="m1">
			<div class="col-md-2 column"></div>	
		    <div class="col-md-4 column" >
			新密码
		    </div>
		    <div class="col-md-4 column">
			<input type="text">
		    </div>
		<div class="col-md-2 column"></div>	
			<p></p>
		</div>
		<div class="row clearfix" id="m1">
			<div class="col-md-2 column"></div>	
		    <div class="col-md-4 column" >
			确认新密码
		    </div>
		    <div class="col-md-4 column">
			<input type="text">
		    </div>
		<div class="col-md-2 column"></div>	
			<p></p>
		</div>
		<div class="row clearfix" id="m1">
			<div class="col-md-8 column"></div>	
		    <div class="col-md-2 column">
			<input type="button" value="保存">
		    </div>
		    <div class="col-md-2 column"></div>	
			<p></p>
		</div>
	</div>
		<div class="tabBodyItem" style="font-size:18px;">
			<div class="row clearfix" id="m1">
			<div class="col-md-2 column"></div>	
		    <div class="col-md-4 column" >
			请输入手机号码
		    </div>
		    <div class="col-md-4 column">
			<input type="text">
		    </div>
		<div class="col-md-2 column"></div>	
			<p></p>
		</div>
		<div class="row clearfix" id="m1">
			<div class="col-md-2 column"></div>	
		    <div class="col-md-4 column" >
			请输入验证码
		    </div>
		    <div class="col-md-4 column">
			<input type="text">
		    </div>
		<div class="col-md-2 column"></div>	
			<p></p>
		</div>
        </div>
		<div class="tabBodyItem">
			<h2 style="text-align:center">开通会员</h2>
			<div id="t1">
			<table class="t1">
				<thead>
					<tr>
				<th>商品名称</th>
				<th>单价</th>
				<th>小计</th>
			        </tr>
			    </thead>
				<tr>
					<td>靓妆会员</td>
					<td>15</td>
					<td>15.00</td>
				</tr>
			</table>
			<div class="row clearfix" id="m1"></div>

			<div class="col-md-2 column"></div>	
		    <div class="col-md-4 column" >
			<div class="zhifu">
			<button onclick="showImg()">支付宝</button>
			<img src="/liangzhuang/Public/home/images/zhifu.jpg" id="we">
            </div>
            </div>
		    <div class="col-md-4 column" >
            <div  class="wexin">
			<button onclick="showImg1()">微信</button>
			<img src="/liangzhuang/Public/home/images/wechat.jpg" id="we1">
		</div>
	</div>
		    <div class="col-md-2 column" ></div>

		</div>
		</div>
</div>
</div>
  

					<div>
<div class="clearfix"></div>					
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
							<p>    Copyright © 2017.Company name All rights reserved.微距2.0</p>
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