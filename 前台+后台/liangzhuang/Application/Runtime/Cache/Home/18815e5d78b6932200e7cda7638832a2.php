<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>要去的地方</title>
		<link type="image/x-icon" rel="icon" href="/weiju2/Public/home/images/bitbug_favicon.ico" media="screen" />
		<!--头部导航轮播图-->
		<link rel="stylesheet" href="/weiju2/Public/home/css/main.css">
    	<link rel="stylesheet" type="text/css" href="/weiju2/Public/home/css/style4.css">
		<link href="/weiju2/Public/home/css/footer.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="/weiju2/Public/home/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/weiju2/Public/home/js/jquery.mousewheel.min.js"></script>
   		<script type="text/javascript" src="/weiju2/Public/home/js/index.js"></script>
	    <script type="text/javascript" src="/weiju2/Public/home/js/main.js"></script> 
		<!--界面和面包屑-->
		<link rel="stylesheet" href="/weiju2/Public/home/css/style.css">
		<link href="/weiju2/Public/home/css/lightbox.css" rel="stylesheet"/>
        <script src="/weiju2/Public/home/js/lightbox-2.6.min.js"></script>
        <script type="text/javascript" src="/weiju2/Public/home/js/juheweb.js"></script>
        <script type="text/javascript" src="/weiju2/Public/home/js/style.js"></script>

        <link rel="stylesheet" type="text/css" href="/weiju2/Public/home/css/rocketTop.css">
		<script type="text/javascript" src="/weiju2/Public/home/js/rocketTop.js"></script>
		<style>
			h1{
				font-size: 1.8em;
				font-family: "微软雅黑";
			}
			p{
				font-family: "微软雅黑";
			}
			.zwz{
				margin-left: 1%;
			}
			.txwz h2{
				font-size:1.5em;
				padding-top: 5%;
			}
			.txwz p{
				margin-top: 5%;
			}
			.qbwz{
				width: 90%;
			}
			.ybtp{
				margin-left: 10%;
			}
		</style>
	</head>
	<body>
		<!--头部导航与轮播图-->
		 		<section class="banner" role="banner">
			      <header id="header">
			        <div class="header-content clearfix"> 
			          <a class="logo" href="<?php echo U('Home/index/index');?>"><img src="/weiju2/Public/home/images/u146.gif" width="98px" height="70px" id="logowj"></a>
			          <nav class="navigation" role="navigation">
			          	<div class="headernav">
				            <ul class="primary-nav">
				    		  <li>
	                        	<a href="<?php echo U('Home/index/index');?>" title="首页" class="index" >首页</a>
	                       	</li>
	                        <li id="ejdh1">
	                        	<a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>" title="要去的地方" class="ejdh1">要去的地方</a>
	                        	<ul id="ejdhlist1">
	                        		<li><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">新南威尔士州</a></li>
									<li><a href="<?php echo U('Home/yaoqu/yaoqu_qunshilan');?>">昆士兰</a></li>
									<li><a href="<?php echo U('Home/yaoqu/yaoqu_weiduoliya');?>">维多利亚州</a></li>
									<li><a href="<?php echo U('Home/yaoqu/yaoqu_beilingdi');?>">北领地</a></li>
									<li><a href="<?php echo U('Home/yaoqu/yaoqu_nanaodaliya');?>">南澳大利亚</a></li>
									<li><a href="<?php echo U('Home/yaoqu/yaoqu_xiaodaliya');?>">西澳大利亚</a></li>
	                        	</ul>
	                        </li>
	                        <li id="ejdh2">
	                        	<a href="<?php echo U('Home/siji/sijituijian');?>" title="四季推荐" class="ejdh2">四季推荐</a>
	                        	<ul id="ejdhlist2">
	                        		<li><a href="<?php echo U('Home/siji/sijituijian');?>">春</a></li>
	                        		<li><a href="<?php echo U('Home/siji/sijituijian_xia');?>">夏</a></li>
	                        		<li><a href="<?php echo U('Home/siji/sijituijian_qiu');?>">秋</a></li>
	                        		<li><a href="<?php echo U('Home/siji/sijituijian_dong');?>">冬</a></li>
	                        	</ul>
	                        </li>
	                        <li>
	                        	<a href="<?php echo U('Home/xingcheng/xingcheng');?>" title="行程推荐">行程推荐</a>
	                        </li>
	                        <li id="ejdh3">
	                        	<a href="<?php echo U('Home/zhuyi/zhuyishixiang_hb');?>" title="注意事项" class="ejdh3">注意事项</a>
	                        	<ul id="ejdhlist3">
	                        		<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_hb');?>">货币</a></li>
	                        		<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_sq');?>">时区</a></li>
	                        		<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_jt');?>">交通</a></li>
	                        		<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_qz');?>">签证</a></li>
	                        		<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_lyts');?>">旅游贴士</a></li>
	                        		<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_jkaq');?>">健康安全</a></li>
	                        	</ul>
	                        </li>
	                        <li>
	                        	<a href="<?php echo U('Home/zhuna/zhunali');?>" title="住哪里">住哪里</a>
	                        </li>
	                        <li><a href="<?php echo U('Home/liuxue/student');?>" title="留学生导游">留学生导游</a></li>
	            </ul>
	        </div>
            <div class="rheader">
		        <div class="dlzc">
			        <ul>	
			            <li><a href="javascript:void(0)" title="登录" onclick="login()">登录</a></li>
			            <li>|</li>
			            <li><a href="javascript:void(0)" title="注册" onclick="register1()" title="注册">注册</a></li>
			        </ul>
			    </div>
			    <div class="search">
			        <a href="javascript:void(0)" onclick="search1()"><img src="/weiju2/Public/home/images/u127.jpg" width="20px" height="20px" /></a>
			    </div>
			</div>
        </div>
          </nav>
          <a href="#" class="nav-toggle">Menu<span></span></a>
        </div>
        </header>
        <div class="search1">
				<div id="searchform">
					<input type="text-align" name="" style="display: none;">
				</div>
			</div>
			<div class="search2" id="search2" style="display: none;">
				<div class="searchz">
					<h6 class="searchztb">
						<a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>" onmouseover="searchqh1()" style="font-weight: bold;" id="searchztb1">新南威尔士州</a>
						<a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>" onmouseover="searchqh2()" id="searchztb2">昆士兰</a>
						<a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">维多利亚州</a>
						<a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">北领地</a>
						<a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">南澳大利亚</a>
						<a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">西澳大利亚</a>
					</h6>
				</div>
				<a href="javascript:void(0);" class="searchgb" id="search2_2"></a>
				<div class="searchcs" id="searchcslist">
					<table class="searchcs1" id="searchcs1">
						<tr>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">悉尼</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">卧龙岗</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">蓝山</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">纽卡斯尔</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">斯蒂芬斯港</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">卢拉镇</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">布罗肯希尔</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">默威伦巴</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">利斯莫尔</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">库马</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">巴利纳</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">卡通巴</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">古尔本</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">楠巴卡黑兹</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">德尼利昆</a></td>
						</tr>
					</table>
					<table class="searchcs2" id="searchcs2">
						<tr>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">大堡礁</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">南岸公园</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">洛岛</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">海洋世界</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">袋鼠角</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">其瓦拉海滩</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">天堂农庄</a></td>
							<td><a href="<?php echo U('Home/yaoqu/content');?>">库克敦</a></td>
							<td><a href="<?php echo U('Home/yaoqu/content');?>">莫斯曼</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">萨瓦纳湾</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">奈利湾</a></td>
							<td><a href="<?php echo U('Home/yaoqu/content');?>">惠森迪岛</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifangt');?>">昆士兰绿岛</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">水晶洞穴</a></td>
							<td><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">云戈布拉</a></td>
						</tr>
					</table>
				</div>
			</div>

      <!-- banner text --> 
        <div class="banner" id="banner">
        	<label>
    	   <ul class="cb-slideshow">
                <li><span><img src="/weiju2/Public/admin/images/dao.jpg" width="100%" height="668px"></span><div><h3>悉尼歌剧院</h3></div></li>
                <li><span><img src="/weiju2/Public/admin/images/dao1.jpg" width="100%" height="668px"></span><div><h3>大堡礁</h3></div></li>
                <li><span><img src="/weiju2/Public/home/images/3.jpg" width="100%" height="668px"></span><div><h3>黄金海岸</h3></div></li>
                <li><span><img src="/weiju2/Public/home/images/4.jpg" width="100%" height="668px"></span><div><h3>国王公园</h3></div></li>
                <li><span><img src="/weiju2/Public/admin/images/dao2.jpg" width="100%" height="668px"></span><div><h3>圣玛丽大教堂</h3></div></li>
                <li><span><img src="/weiju2/Public/admin/images/dao3.jpg" width="100%" height="668px"></span><div><h3>袋鼠岛</h3></div></li>
            </ul>
            </label> 
        </div> 
    </section>
    <div id="light1" class="white_content1">
			<a href="javascript:void(0)" onclick="close1()">
				<img src="/weiju2/Public/home/images/03q58PICtSW_1024.png" width="18" height="24" id="imgclose">
			</a>
			<form method="post" id="signin1" action="index.html">
				<h1>登录</h1>
				<hr/>
				<div>
					<label>
						<p>用户名</p>
						<p>
							<input id="USERNAMEDL" name="usernamedl" value="" title="usernamedl" tabindex="4" type="text" onfocus="showDesc(this)" onblur="checkText(this)" placeholder="您的用户名"> 
						</p>
						<span id="usernamedl"  class='tip'></span>
					</label>
				</div>
				<div>
					<label>
						<p>密码</p>
						<p>
					       	<input id="PASSWORDDL" name="passworddl" value="" title="password" tabindex="5" type="password"  onfocus="showDesc(this)" onblur="checkText(this)" placeholder="您的密码">
					    </p>
					    <span id="passworddl"  class='tip'></span>
					</label>
				</div>
				<p class="remember">
					<label><input type="checkbox" name="自动登录" > 保存密码</label>        
					<a href=""></a>
				</p>
				<p class="logosub1">
					<input type="button" name="" value="立即登录">
				</p>
				<div>
					<p class="toregister">
						还没有账号？<a href="javascript:void(0)" onclick="register1()">点击这里注册</a>
					</p>
				</div>
			</form>
		</div>
		<div id="light2" class="white_content2">
			<a href="javascript:void(0)" onclick="close2()">
				<img src="/weiju2/Public/home/images/03q58PICtSW_1024.png" width="18" height="24" id="imgclose">
			</a>
			<form method="post" id="signin2" action="index.html">
				<h1>注册</h1>
				<hr/>
				<div class="tregister">
					<div>
						<label>
							<p>用户名<span> *</span></p>
							<p>
								<input id="USERNAME" name="username" value="" title="username" tabindex="4" type="text" onfocus="showDesc(this)" onblur="checkText(this)" placeholder="请输入1~16位以内的英文、数字组合" class="inputpp"> 
							</p>
							<span id="username"  class='tip'></span>
						</label>
					</div>
					<div style="clear: left;" class="margintop">
						<label>
							<p>登录密码<span> *</span></p>
							<p>
						       	<input id="PASSWORD" name="password" value="" title="password" tabindex="5" type="password" onfocus="showDesc(this)" onblur="checkText(this)" placeholder="请输入6~16位以内的英文、数字组合" class="inputpp">
						       	<span id="password" class='tip'></span>
							</p>
						</label>
					</div>
					<div class="margintop">
						<label>
							<p>确认密码<span> *</span></p>
							<p>
						       	<input id="PASSWORD2" name="password2" value="" title="password" tabindex="5" type="password" onfocus="showDesc(this)" onblur="checkText(this)" placeholder="请再次输入密码" class="inputpp">
						       	<span id="password2"  class='tip'></span>
							</p>
						</label>
					</div>
					<div class="margintop">
						<label>
							<p>姓名</p>
							<p>
						       	<input id="IDname" name="IDname" value="" title="IDname" tabindex="5" type="text" placeholder="请输入您的真实姓名(选填)" class="inputpp">
							</p>
						</label>
					</div>
					<div class="sex">
						<p>性别</p>
						<p>
							<div class="nan"><input type="radio" name="sex" checked="checked"> 男</div>
							<div class="nv"><input type="radio" name="sex"> 女</div>
						</p>
					</div>
					<div class="margintop">
						<label>
							<p>国家/地区</p>
							<p>
								<div>
						       		<input id="place" name="place" value="" title="place" tabindex="5" type="text" placeholder="请输入您所在的国家/地区(选填)" class="inputpp">
								</div>
							</p>
						</label>
					</div>
					<div class="IDtype">
							<p>用户类型<span> *</span></p>
							<p>
								<div class="tourist"><label><input type="radio" name="用户类型" checked="checked"> 游客</label></div>
							    <div class="ciceroni"><label><input type="radio" name="用户类型" > 导游</label></div>
						    </p>
					</div>
				</div>
				<div class="bregister">
					<div class="logosub2">
						<a href="javascript:void(0)"  onclick="login()"><input type="button" name="" value="完成注册" style="text-align: center;"></a>
					</div>
					<div>
						<p class="toregister">
							已拥有账户？<a href="javascript:void(0)" onclick="login()">点击这里登录</a>
						</p>
					</div>
				</div>

			</form>
		</div>
		
		<div class="content">

			<div class="content-header">
				<div id="mbx">
					<ul id="breadcrumb">
						<li><a href="<?php echo U('Home/index/index');?>"><span class="icon icon-home"> </span>首页</a></li>
  						<li><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>"><span class="icon icon-beaker"> </span> 要去的地方</a></li>
  						<li><a href="<?php echo U('Home/yaoqu/yaoqu_qunshilan');?>"><span class="icon icon-double-angle-right"></span>维多利亚州</a></li>
  					</ul>
				</div>

				<div>
					<HR style="border:1 dashed #987cb9; margin-left:10%; margin-top:20px; margin-bottom:50px;" width="80%" color=#987cb9 SIZE=1>
				</div>
			</div>
			
			<div class="content-footer">

				<div class="lanrenzhijia" id="lanrenzhijia">
					<ul>
						<li class=""><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">新南威尔士州</a></li>
						<li class=""><a href="<?php echo U('Home/yaoqu/yaoqu_qunshilan');?>">昆士兰</a></li>
						<li class="on"><a href="<?php echo U('Home/yaoqu/yaoqu_weiduoliya');?>">维多利亚州</a></li>
						<li class=""><a href="<?php echo U('Home/yaoqu/yaoqu_nanaodaliya');?>">南澳大利亚</a></li>
						<li class=""><a href="<?php echo U('Home/yaoqu/yaoqu_xiaodaliya');?>">西澳大利亚</a></li>
						<li class=""><a href="<?php echo U('Home/yaoqu/yaoqu_tasimaniya');?>">塔斯马尼亚</a></li>
						<li class=""><a href="<?php echo U('Home/yaoqu/yaoqu_beilingdi');?>">北领地</a></li>
						<li class=""><a href="<?php echo U('Home/yaoqu/yaoqu_shoudu');?>">澳大利亚首都领地</a></li>
					</ul>
					<div class="hover" style="top: 160px;"></div>
				</div>
			
			<div class="content-text">
				<?php if(is_array($state)): $i = 0; $__LIST__ = array_slice($state,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="zw">
					
					<div class="zwwz">


						<h1><?php echo ($vo["name"]); ?></h1>
						<p  style="text-indent: 2em;"><?php echo ($vo["state_introduce"]); ?></p>
					</div>
					<div class="zwtp">
						<img src="/weiju2/Public/<?php echo ($vo["state_pic"]); ?>" width="400px" height="226px">
					</div>
					
				</div>


				<div class="lsyg">
						<h1>气候特征</h1>
						<p style="text-indent: 2em;"><?php echo ($vo["weather"]); ?></p>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				
				<div class="lsyg">
					<h1>风景名胜</h1>
					<?php if(is_array($sight)): $i = 0; $__LIST__ = $sight;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="hh2">
						<h2><a href="<?php echo U('Home/yaoqu/content');?>/sigid/<?php echo ($vo["sigid"]); ?>"><?php echo ($vo["name"]); ?></a></h2>
					</div>
					<div>
						<p><?php echo ($vo["sight_introduce"]); ?></p>
						<a href="<?php echo U('Home/yaoqu/content');?>/sigid/<?php echo ($vo["sigid"]); ?>"><img src="/weiju2/Public/<?php echo ($vo["sight_pic"]); ?>" width="100%" height="300px"></a>
						<p class="zxkk"><a href="<?php echo U('Home/yaoqu/content');?>/sigid/<?php echo ($vo["sigid"]); ?>">仔细看看&gt;&gt;</a></p>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
					
					<div>
						<p class="fy"><a href="#">&lt;&lt;</a>&nbsp;&nbsp;&nbsp;<a href="#">&lt;</a>&nbsp;&nbsp;&nbsp;<a href="#" style="color:#FF0000">1</a>&nbsp;&nbsp;&nbsp;<a href="#">2</a>&nbsp;&nbsp;&nbsp;<a href="#">3</a>&nbsp;&nbsp;&nbsp;<a href="#">4</a>&nbsp;&nbsp;&nbsp;<a href="#">5</a>&nbsp;&nbsp;&nbsp;<a href="#">&gt;&gt;</a></p>
					</div>
				</div>
			

			</div>
			
				
		</div>

	
		<div class="footer">
			<div class="footerjkgz">
				<div class="footer1">
					<div><label>即刻关注：</label></div>
					<div><a href="#"><img src="/weiju2/Public/home/images/14515034.png" width="50px" height="45px"></a></div>
					<div class="footera"><a href="#">官方微博</a></div>
					<div><a href="#"><img src="/weiju2/Public/home/images/20161123213710.png" width="50px" height="45px"></a></div>
					<div class="footera"><a href="#">官方微信</a></div>
				</div>
				<div class="footer2">
					<div><label class="yqlj_">友情链接：</label></div>
					<div class="yqlj"><a href="http://www.cnta.com/" target="_blank">国家旅游局</a></div>
					<div class="yqlj"><a href="http://travel.people.com.cn/" target="_blank">人民网旅游</a></div>
					<div class="yqlj"><a href="http://travel.gmw.cn/index.htm" target="_blank">光明网旅游</a></div>
				</div>
			</div>
			<div class="hr2">
				<hr color="#E4E4E4" size=1 align=center noshade>
			</div>
			<div class="footerliebiao">
				<div class="footerliebiao1">
					<div>
						<a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">要去的地方</a>
					</div>
					<hr color="#E4E4E4" size=1 align=center noshade class="hr3">
					<div>
						<ul>
							<li><a href="<?php echo U('Home/yaoqu/yaoqudedifang');?>">新南威尔士州</a></li>
									<li><a href="<?php echo U('Home/yaoqu/yaoqu_qunshilan');?>">昆士兰</a></li>
									<li><a href="<?php echo U('Home/yaoqu/yaoqu_weiduoliya');?>">维多利亚州</a></li>
									<li><a href="<?php echo U('Home/yaoqu/yaoqu_beilingdi');?>">北领地</a></li>
									<li><a href="<?php echo U('Home/yaoqu/yaoqu_nanaodaliya');?>">南澳大利亚</a></li>
									<li><a href="<?php echo U('Home/yaoqu/yaoqu_xiaodaliya');?>">西澳大利亚</a></li>
						</ul>
					</div>
				</div>
				<div class="footerliebiao1">
					<div>
						<a href="<?php echo U('Home/siji/sijituijian');?>">四季推荐</a>
					</div>
					<hr color="#E4E4E4" size=1 align=center noshade class="hr3">
					<div>
						<ul>
							<li><a href="<?php echo U('Home/siji/sijituijian');?>">春</a></li>
	                        <li><a href="<?php echo U('Home/siji/sijituijian_xia');?>">夏</a></li>
	                  		<li><a href="<?php echo U('Home/siji/sijituijian_qiu');?>">秋</a></li>
	                  		<li><a href="<?php echo U('Home/siji/sijituijian_dong');?>">冬</a></li>
						</ul>
					</div>
				</div>
				<div class="footerliebiao1">
					<div>
						<a href="<?php echo U('Home/xingcheng/xingcheng');?>">行程推荐</a>
					</div>
					<hr color="#E4E4E4" size=1 align=center noshade class="hr3">
					<div>
						<ul>
							<li><a href="<?php echo U('Home/xingcheng/xingcheng_content');?>">感受悉尼多元精彩经典3日游</a></li>
							<li><a href="<?php echo U('Home/xingcheng/xingcheng_content');?>">野花小袋鼠，珀斯及周边3日深度自助游</a></li>
							<li><a href="<?php echo U('Home/xingcheng/xingcheng_content');?>">太平洋海岸自驾游</a></li>
						</ul>
					</div>
				</div>
				<div class="footerliebiao1">
					<div>
						<a href="<?php echo U('Home/zhuyi/zhuyishixiang_hb');?>">注意事项</a>
					</div>
					<hr color="#E4E4E4" size=1 align=center noshade class="hr3">
					<div>
						<ul >
	                        		<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_hb');?>">货币</a></li>
	                        		<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_sq');?>">时区</a></li>
	                        		<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_jt');?>">交通</a></li>
	                        		<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_qz');?>">签证</a></li>
	                        		<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_lyts');?>">旅游贴士</a></li>
	                        		<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_jkaq');?>">健康安全</a></li>
	                        	</ul>
					</div>
				</div>
				<div class="footerliebiao1">
					<div>
						<a href="<?php echo U('Home/zhuna/zhunali');?>">住哪里</a>
					</div>
					<hr color="#E4E4E4" size=1 align=center noshade class="hr3">
					<div>
						<ul>
							<li><a href="<?php echo U('Home/zhuna/zhunali');?>">全季维多利亚酒店</a></li>
							<li><a href="<?php echo U('Home/zhuna/zhunali');?>">城市节奏公寓酒店(City Tempo)</a></li>
							<li><a href="<?php echo U('Home/zhuna/zhunali');?>">温莎酒店(The Hotel Windsor)</a></li>
						</ul>
					</div>
				</div>
				<div class="footerliebiao1">
					<div>
						<a href="<?php echo U('Home/liuxue/student');?>">留学生导游</a>
					</div>
					<hr color="#E4E4E4" size=1 align=center noshade class="hr3">
					<div>
						<ul>
							<li><a href="<?php echo U('Home/liuxue/student');?>">留学生导游信息</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footerqita">
				<div class="footerbz">
					<a href="<?php echo U('Home/index/index');?>"><img src="/weiju2/Public/home/images/u146.gif" width="110px" height="90px"></a>
				</div>
				<div class="footerlxfs">
					<ul>
						<li>地址：河北师范大学新校区</li>
						<li>电子邮件：zmalqp246805@163.com</li>
						<li>版权所有：河北师范大学软件学院微距小组</li>
					</ul>
				</div>
			</div>
		</div>
	    <div id="fade" class="black_overlay"></div>
	    <div id="shape">
		<div class="shapeColor">
			<div class="shapeFly">
			</div>
		</div>
	</div>
	</body>
</html>