<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
     <link rel="stylesheet" href="/liangzhuang/Public/home/css/bootstrap.min.css">
	<meta charset="utf-8">
	<title>用户登录</title>
	<link rel="stylesheet" href="/liangzhuang/Public/home/css/layout.css">
	<style>
	</style>
</head>
<body>
	<script src="/liangzhuang/Public/home/js/jquery.js"></script>
	<script src="/liangzhuang/Public/home/js/bootstrap.min.js"></script>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-7 column" >
		<div>
			<!-- <h1 style="color:#FF6600;"><b>靓妆网</b></h1>
			<p style="color:#FF9966;font-size:15px;">一家专门为你实现美妆梦想的网站</p> -->
			<a href="index.html"><img src="/liangzhuang/Public/home/images/LOGO.png" style="width:45%;padding-top:20px;"></a>

		</div>
	</div>
	<!-- <div class="row clearfix" style="margin-top:100px;background-color:#ffe1ed;"> -->
	<div class="row clearfix" style="margin-top:100px;background-color:#AFD0F3;">


		<div class="col-md-7 column" >
		<img src="/liangzhuang/Public/home/images/bg.png">
		</div>
		<div class="col-md-5 column" style="border:1px solid #DDDDDD;background-color:white;padding-left:15px;width:400px; padding-right:15px;margin-top:60px;margin-bottom:60px;">
			<h3 style="padding-top:10px;padding-bottom:10px;">账号登录</h3>
			<!-- <form class="form-horizontal" role="form"> -->
				<form role="form" method="post" action="">
				<div class="form-group">
					 <label for="inputEmail3" class="col-sm-2 control-label">账号</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" id="inputEmail3" style="width:280px;" />
					</div>
				</div>
				<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">密码</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="pw" id="inputPassword3" style="width:280px;"/>
					</div>
				</div>
				
				<div class="form-group" style="padding-left:30px;">
					<div style="padding-bottom:20px;">
						<input type="checkbox" style=" float:left;" />&nbsp;&nbsp;记住我<br/>
								
													
					</div>
					<div style="padding-bottom:10px;">
						<button type="submit" class="btn btn-default" style="width:340px;height:45px;background-color:#f68f3c; color:white;">登 录</button>
					</div>
					<br/>
					其他方式:
					<a href="#"><img src="/liangzhuang/Public/home/images/qq.png"></a>
					<a href="#"><img src="/liangzhuang/Public/home/images/weibo.png"></a>
					<a href="#"><img src="/liangzhuang/Public/home/images/weichat.png"></a>
					<a href="#"><img src="/liangzhuang/Public/home/images/pay.png"></a>
					<!-- <a href="register.html" style="font-size:15px;color:#666666;float:right;padding-right:25px;">注册</a> -->
					<a href="<?php echo U('Home/login/register');?>" style="float:right;padding-right:40px;padding-top:5px;">注册</a>


				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>