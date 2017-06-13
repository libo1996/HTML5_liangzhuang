<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>美妆点评</title>
<link href="/liangzhuang/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/liangzhuang/Public/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="/liangzhuang/Public/home/css/flexslider.css" type="text/css" media="screen" />
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
	#hzxd{
		margin-top: -2%;
		margin-bottom: 1%;
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
					<li><a href="<?php echo U('Home/index/index');?>"><span data-hover="首页">首页</span></a></li>
					<li><a href="<?php echo U('Home/pp/product');?>"><span data-hover="产品介绍">产品介绍</span></a></li>
					<li><a href="<?php echo U('Home/video/video');?>"><span data-hover="视频教学">视频教学</span></a></li>
					<li><a href="<?php echo U('Home/sce/services');?>" class="active"><span data-hover="美妆点评">美妆点评</span></a></li>
					<li><a href="<?php echo U('Home/zc/zcao');?>"><span data-hover="种草">种草</span></a></li>
					</nav>
				</ul>
				</div>
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
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
	  <div class="blog-content">
	 <div class="container">
	     <div class="blog-content-head text-left" id="hzxd">
			<h3>化妆心得</h3>
	    </div>
			<div class="section group">
				<div class="cont span_2_of_3">
					<?php if(is_array($sce)): $i = 0; $__LIST__ = $sce;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="blog_posts">
				       <div class="blog_date">
							<figure><span><?php echo (substr($vo["date"],8,2)); ?></span><?php echo (substr($vo["date"],8,2)); ?></figure>
					    </div>
					       <div class="blog_desc">
								<div class="blog_heading">
									<a href="<?php echo U('Home/sce/single');?>/sid/<?php echo ($vo["sid"]); ?>"><?php echo ($vo["name"]); ?></a>
									<p>声明：本文由入驻靓妆坊的作者撰写，观点仅代表作者本人，不代表靓妆坊立场。</p>
							     </div>
						<div class="section group example">			
							<div class="col blog_1_of_2">
				                <div class="blog_img">
				                	<a href="<?php echo U('Home/sce/single');?>/sid/<?php echo ($vo["sid"]); ?>"><img src="/liangzhuang/Public/<?php echo ($vo["img"]); ?>" alt="image" class="img-responsive zoom-img"></a>
				                </div>
							</div>
								<div class="col blogdata_1_of_2">
									<div class="blog_data">
										<p><?php echo ($vo["introduce"]); ?></p>				                     
				                    <div class="more">
				         	  			<span><a class="button outline-outward hvr-rectangle-in" href="<?php echo U('Home/sce/single');?>/sid/<?php echo ($vo["sid"]); ?>">Read More</a></span>
				         	  			</div>
				                   </div>
								</div>
							</div>
						 <div class="clearfix"></div>	
					</div>
					 <div class="clearfix"></div>	
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<!-- <div class="blog_posts">
				       <div class="blog_date">
							<figure><span>05</span>May</figure>
					    </div>
					       <div class="blog_desc">
								<div class="blog_heading">
									<a href="<?php echo U('Home/sce/single');?>">约会妆</a>
									<p>声明：本文由入驻靓妆坊的作者撰写，观点仅代表作者本人，不代表靓妆坊立场。</p>
							     </div>
						<div class="section group example">			
							<div class="col blog_1_of_2">
				                <div class="blog_img">
				                	<a href="<?php echo U('Home/sce/single');?>"><img src="/liangzhuang/Public/home/images/pic12.jpg" alt="image" class="img-responsive zoom-img"></a>
				                </div>
							</div>
								<div class="col blogdata_1_of_2">
									<div class="blog_data">
										<p>对于爱赖床的妹纸来说，起床晚了紧赶慢赶的化妆出门，导致妆没画好迟到也在所难免，实在不想要这样啦!噔噔~懒人福利登场!想要时间紧迫快迟到的情况下还能画个快速又美貌的妆容，那就赶紧来学习吧.......</p>				                     
				                    <div class="more">
				         	  			<span><a class="button outline-outward hvr-rectangle-in" href="<?php echo U('Home/sce/single');?>">Read More</a></span>
				         	  			</div>
				                   </div>
								</div>
							</div>
						 <div class="clearfix"></div>	
					</div>
					 <div class="clearfix"></div>	
					</div> -->
				<!-- <div class="blog_posts">
				       <div class="blog_date">
							<figure><span>21</span>sep</figure>
					    </div>
					       <div class="blog_desc">
								<div class="blog_heading">
								<a href="<?php echo U('Home/sce/single');?>">派对妆</a>
									<p>声明：本文由入驻靓妆坊的作者撰写，观点仅代表作者本人，不代表靓妆坊立场。</p>
							     </div>
						<div class="section group example">			
							<div class="col blog_1_of_2">
				                <div class="blog_img">
				                <a href="<?php echo U('Home/sce/single');?>"><img src="/liangzhuang/Public/home/images/pic11.jpg" alt="image" class="img-responsive zoom-img"></a>
				                </div>
							</div>
								<div class="col blogdata_1_of_2">
									<div class="blog_data">
										<p>最近编编的朋友圈被各种特型的万圣节化妆刷屏,化妆高手太多每每吓得小编心惊胆跳,虽然万圣节的派对妆以魑魅魍魉为主题,但就不能好好的美美哒过个节吗,即使是日系妆容和贵妇红唇妆,甚至暗黑潮女妆容都是美腻而不恐怖哒,快来学习吧......</p>				                     
				                    <div class="more">
				         	  			<span><a class="button outline-outward hvr-rectangle-in" href="<?php echo U('Home/sce/single');?>">Read More</a></span>
				         	  			</div>
				                   </div>
								</div>
							</div>
						 <div class="clearfix"></div>	
					</div>
					 <div class="clearfix"></div>	
				</div> -->
				<!--  <div class="blog_posts">
				       <div class="blog_date">
							<figure><span>12</span>Aug</figure>
					    </div>
					       <div class="blog_desc">
								<div class="blog_heading">
									<a href="<?php echo U('Home/sce/single');?>">舞台妆</a>
									<p>声明：本文由入驻靓妆坊的作者撰写，观点仅代表作者本人，不代表靓妆坊立场。</p>
							     </div>
						<div class="section group example">			
							<div class="col blog_1_of_2">
				                <div class="blog_img">
				                	<a href="<?php echo U('Home/sce/single');?>"><img src="/liangzhuang/Public/home/images/pic15.jpg" alt="image" class="img-responsive zoom-img"></a>
				                </div>
							</div>
								<div class="col blogdata_1_of_2">
									<div class="blog_data">
										<p>常见的舞台妆有：舞蹈演员妆（新疆舞、肚皮舞、印度舞等）、歌手妆（民族歌手、流行歌手、主旋律歌手等）、T台模特妆（时装模特、内衣模特、运动服模特等）、主持人妆（新闻主播、娱乐节目主持人、儿童节目主持人等）……通过舞台妆对演职人员进行人物塑造，让其舞台形象更鲜明更立体，是舞台妆的主要目的。舞台妆的特点是妆比较浓，以适应舞台灯光的特点。</p>				                     
				                    <div class="more">
				         	  			<span><a class="button outline-outward hvr-rectangle-in" href="<?php echo U('Home/sce/single');?>">Read More</a></span>
				         	  			</div>
				                   </div>
								</div>
							</div>
						 <div class="clearfix"></div>	
					</div>
					 <div class="clearfix"></div>	
				</div> -->
				<div class="content-pagenation">
						<li><a href="#">Frist</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><span>. . .</span></li>
						<li><a href="#">Last</a></li>
						<div class="clearfix"> </div>
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