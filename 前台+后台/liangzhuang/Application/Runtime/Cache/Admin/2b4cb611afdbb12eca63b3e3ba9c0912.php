<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>登录页面</title>
	<link href="/weiju2/Public/admin/css/login.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="/weiju2/Public/admin/css/bootstrap.min.css"> 
	<script src="/weiju2/Public/admin/js/login.js"></script>
</head>
<body>
<br/><br/><br/><br/><br/><br/><br/><br/>
<div class="body">

	<div class="left">
		<img src="/weiju2/Public/admin/images/u2.jpg" width="100%" height="100%">
	</div>
	<div class="right">
		<h4 class="title">微距管理视窗<br/>WEIJUGUANLISHICHUANG</h4><br/>
		<div class="neirong">
			<form role="form" method="post" action="<?php echo U('Admin/log/login');?>">
		<div class="用户名">
		 <p style="font-size:15px">请输入用户名：</p>
		 <input type="text" value="" name="aname" style="width:230px;height:20px;" />
		 </div>
		 <div>
		 <p style="font-size:15px">密&nbsp;码：</p>
		 <input type="password" value="" name="password" style="width:230px;height:20px;"/>
		 </div>
		
		 <input type="checkbox" value="checkbox" data-label="记住用户名" checked/> 记住用户名<br/>
		 
		<div class="denglu">
       	 <button type="submit" style="background:url(/weiju2/Public/admin/images/登录_u17.png) no-repeat; border:none; color:black; width:84px; height:20px;"  />登录</button>
       	 
       	 </div>
       	</form>
       	 </div>

	</div>
</div>
<p class="bottom" style="font-size:15px">河北师大软件学院微距  版权所有<br/>

服务电话：0311-88888888</p>
</body>
</html>