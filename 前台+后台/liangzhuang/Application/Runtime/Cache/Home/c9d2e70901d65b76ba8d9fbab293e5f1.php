<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>注意事项</title>
		<link type="image/x-icon" rel="icon" href="/weiju1/Public/home/images/bitbug_favicon.ico" media="screen" />
		<!--头部导航轮播图-->
		<script type="text/javascript" src="/weiju1/Public/home/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/weiju1/Public/home/js/jquery.mousewheel.min.js"></script>
	    <script type="text/javascript" src="/weiju1/Public/home/js/main.js"></script>
	    <script type="text/javascript" src="/weiju1/Public/home/js/index.js"></script>
	    <link rel="stylesheet" href="/weiju1/Public/home/css/main.css">
   	 	<link rel="stylesheet" type="text/css" href="/weiju1/Public/home/css/style4.css">
		<!--界面和面包屑-->
		<link rel="stylesheet" href="/weiju1/Public/home/css/style.css">
		<script type="text/javascript" src="/weiju1/Public/home/js/style.js"></script>
		<!--竖版菜单导航-->
		<script type="text/javascript" src="/weiju1/Public/home/js/juheweb.js"></script>
		<!--尾部样式-->
		<link href="/weiju1/Public/home/css/footer.css" rel="stylesheet" type="text/css">
		<!--本页面-->
		<style type="text/css">
		#zw a:link{
			color: #FF5F3E;
		}
		#zw a:hover{
			text-decoration: underline;
		}
		#zw a:visited { 
			color:#FF0000; 
			text-decoration:none; 
		} 
		#zw h1{
			margin-top: 5%;
			margin-bottom: 5%;
			margin-left: 40%;
			font-size: 32px;
			color: #333333;
		}
		#zw h2{
			font-family: "Myriad Pro", "Lucida Grande", "Verdana", sans-serif;
			margin-left:20%;
		}
		</style>
	</head>
	<body>
		<!--头部导航与轮播图-->
		<section class="banner" role="banner">
      <header id="header">
        <div class="header-content clearfix"> 
          <a class="logo" href="<?php echo U('Home/index/index');?>"><img src="/weiju1/Public/home/images/u146.gif" width="98px" height="70px" id="logowj"></a>
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
			        <a href="javascript:void(0)" onclick="search1()"><img src="/weiju1/Public/home/images/u127.jpg" width="20px" height="20px" /></a>
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
                <li><span><img src="/weiju1/Public/admin/images/dao.jpg" width="100%" height="668px"></span><div><h3>悉尼歌剧院</h3></div></li>
                <li><span><img src="/weiju1/Public/admin/images/dao1.jpg" width="100%" height="668px"></span><div><h3>大堡礁</h3></div></li>
                <li><span><img src="/weiju1/Public/home/images/3.jpg" width="100%" height="668px"></span><div><h3>黄金海岸</h3></div></li>
                <li><span><img src="/weiju1/Public/home/images/4.jpg" width="100%" height="668px"></span><div><h3>国王公园</h3></div></li>
                <li><span><img src="/weiju1/Public/admin/images/dao2.jpg" width="100%" height="668px"></span><div><h3>圣玛丽大教堂</h3></div></li>
                <li><span><img src="/weiju1/Public/admin/images/dao3.jpg" width="100%" height="668px"></span><div><h3>袋鼠岛</h3></div></li>
            </ul>
            </label> 
        </div> 
    </section>
    <div id="light1" class="white_content1">
			<a href="javascript:void(0)" onclick="close1()">
				<img src="/weiju1/Public/home/images/03q58PICtSW_1024.png" width="18" height="24" id="imgclose">
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
				<img src="/weiju1/Public/home/images/03q58PICtSW_1024.png" width="18" height="24" id="imgclose">
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
		

		<!--面包屑分割线与竖版菜单导航与内容-->

		<div class="content">
			<div class="content-header">
				<div id="mbx">
					<ul id="breadcrumb">
						<li><a href="<?php echo U('Home/index/index');?>"><span class="icon icon-home"> </span>首页</a></li>
  						<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_hb');?>"><span class="icon icon-beaker"> </span> 注意事项</a></li>
  						<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_jkaq');?>"><span class="icon icon-double-angle-right"></span> 健康安全</a></li>
  					</ul>
				</div>

				<div>
					<HR style="border:1 dashed #987cb9; margin-left:10%; margin-top:20px; margin-bottom:50px;" width="80%" color=#987cb9 SIZE=1>
				</div>
			</div>

			<div class="content-footer">

				<div class="lanrenzhijia" id="lanrenzhijia">
					<ul>
						<li class=""><a href="<?php echo U('Home/zhuyi/zhuyishixiang_hb');?>">货币</a></li>
						<li class=""><a href="<?php echo U('Home/zhuyi/zhuyishixiang_sq');?>">时区</a></li>
						<li class=""><a href="<?php echo U('Home/zhuyi/zhuyishixiang_jt');?>">交通</a></li>
						<li class=""><a href="<?php echo U('Home/zhuyi/zhuyishixiang_qz');?>">签证</a></li>
						<li class=""><a href="<?php echo U('Home/zhuyi/zhuyishixiang_lyts');?>">旅游贴士</a></li>
						<li class="on"><a href="<?php echo U('Home/zhuyi/zhuyishixiang_jkaq');?>">健康安全</a></li>
					</ul>
					<div class="hover" style="top: 340px;"></div>
				</div>

				<div class="content-text">
					<div id="zw">
						<h1>前往澳大利亚</h1>
						<h2>服务及健康安全</h2>
						<p id="zw">
							总的来说，澳大利亚是安全的旅游目的地，旅游者在其个人安全方面大可放心，尽管自由享受澳大利亚之旅。稳定的政治体系、维护良好的公路、低犯罪率以及较高的健康水平让澳大利亚成为安全且令人放心的旅游国家。
							<br/><br/>
							你可以运用一般常识安全地游览澳大利亚各种独特的地貌，从广袤的内陆到纯净的海滩或原生态自然奇观。然而，无论是在国内还是国外旅行，你都应遵守同样的预防措施，保证你的人身财产安全。
							<br/><br/>
							在此，你可了解有关可用健康设施和服务的实用信息以及有关更多详细信息的网站链接。
							<br/><br/><br/>
							旅游保险和医疗服务
							<br/><br/>
							强烈建议你在出国前投保一份旅游保险，范围涵盖物品偷窃和遗失、意外事故以及健康问题。如果你计划参加任何冒险活动，如潜水、丛林漫步或在偏远地区旅游，请检查保单中是否完全包含这些活动。请记住随身携带旅游保险单的详细资料和紧急联系电话。
							<br/><br/>
							澳大利亚的公共医疗保健系统叫做国民医疗保健（Medicare），澳大利亚的医院提供世界级的医疗设施和护理标准。澳大利亚政府与一些国家之间签 订了互惠医疗保健协议，在旅游者观光澳大利亚期间为其提供必要的医护治疗。然而，你最好在出国前检查自己是否符合资格，并投保相应的旅游保险以为自己在澳 大利亚的旅游提供保障。
							<br/><br/><br/>
							免疫接种和药品
							<br/><br/>
							在澳大利亚观光不需要进行特殊免疫或疫苗接种，除非你来自宣布有黄热病的国家或在到达澳大利亚之前六天内曾访问过相关国家。然而，相关规定和医疗建议可能随时变更，所以请在出游前与你的医生核实并查看澳大利亚政府相关网站。
							<br/><br/>
							澳大利亚严格管制带入境的个人用药，必须在你到达时如实申报。建议你携带医生的处方或信函，说明你的医疗情况，并列出所携带的药品。如果你在澳大利亚期间需要服用处方药，必须由澳大利亚的医生开处方。
							<br/><br/><br/>
							无障碍旅游
							<br/><br/>
							近年来，我们已投入大量时间和精力确保残疾人士也可以尽情享受澳大利亚所提供的一切便利。如果你有医疗情况或特殊需要，则将获得充分的服务。请联系你的旅行代理并告之你的特殊要求，或者访问下面的网站，以帮助你在出国前做好准备。
							<br/><br/><br/>
							防晒
							<br/><br/>
							澳大利亚的阳光非常猛烈，所以务必要全年做好防晒准备，即使阴天也一样要做好防晒。
							<br/><br/>
							澳大利亚政府在过去几十年间投入大量时间和精力教导澳大利亚人如何防护过多阳光紫外线照射，所有澳大利亚儿童现在都涂抹防晒霜并戴宽沿帽上学；许多泳衣现在也使用防晒材料制作。
							<br/><br/>
							在澳大利亚旅游时，要“对阳光敏感”，穿着可尽量遮盖皮肤的衣服，即使在游泳时也一样；经常涂抹高倍防水防晒霜；戴帽子和太阳镜保护好脸部、鼻子、脖子、耳朵和眼睛；坐在阴凉处而不要直接暴晒在太阳下，从而保护自己以免被阳光晒伤。
							<br/><br/>
							在中午紫外线最强烈时应进行额外保护，确保饮用充足的水分以防脱水。澳大利亚政府的 SunSmart 紫外线警报（SunSmart UV Alert）将告诉你需要特别注意防晒的时间段，并且会在大部分日报和气象局（Bureau of Meteorology）网站的天气页显示该警报。
							<br/><br/>
							澳大利亚癌症理事会（Cancer Council Australia）已开发出一系列高质量、经济实惠的防晒产品，包括太阳镜、紫外线防晒衣、防晒霜、帽子、遮阳棚、泳镜、大帐篷、遮阳伞和化妆品，你可 以在线购买或通过癌症理事会在州和领地的商店、百货商场、药店和其他全国范围内的零售商店购买。
							<br/><br/><br/>
							冲浪和水上安全
							<br/><br/>
							大部分澳大利亚人口都居住在海岸线附近，海滩在澳大利亚人心目中一直占有特殊地位。澳大利亚人热爱水上运动，每天都有成千上万人涌向海岸线，在这里游泳、冲浪、放松和游乐。但是美丽的海滩也会隐藏各种危险，会出现强烈海流，对于还不适应的人来说，海滩条件会发生巨大变化。
							<br/><br/>
							从十月到次年四月，澳大利亚最受欢迎的海滩通常都有义务救生员巡逻，并用红色和黄色旗子标出最安全的游泳区域。为保证安全，请在这些旗帜标出的区域游泳，并与其他人一起结伴。
							<br/><br/>
							如果你想潜水，请找本地的潜水经营者或联系你所在州的潜水行业协会（Diving Industry Association）了解有关地点条件、安全规定、执照、许可证和潜水者级别要求的相关信息。
							<br/><br/><br/>
							野生动物
							<br/><br/>
							澳大利亚独特、与众不同的野生动物是吸引游客的主要原因之一。如果你掌握常识，则不用过多担心澳大利亚野生动物的危险性。
							<br/><br/>
							澳大利亚很少发生鲨鱼袭击人的情况，海滩上的鲨鱼网亦可防止鲨鱼袭击，选择在有救生员巡逻的海滩游泳，而且结伴于旗帜之间的海域游泳，可以进一步降低风 险。鳄鱼生活在整个澳大利亚北部的河流和入海口。在鳄鱼栖息地附近游览时，务必要观看安全标志，不要在河里、入海口、潮汐河、深水潭或红树林海岸边游泳。 在露营、钓鱼或划船前也要寻求专家的建议。
							<br/><br/>
							十一月到来年四月的热带水域经常有水母出现。所以在此期间，你只能在防水母保护圈内游泳，大部分受欢迎的海滩都设有防水母保护圈。在这些区域游泳时，你也需要穿防护衣并随时观察任何警告标记。
							<br/><br/>
							澳大利亚也有毒蛇和蜘蛛，但是被咬的情况极其罕见也很少会致命。在健行或远足时，穿上保护性鞋子并掌握常识，以防被咬。万一被咬，应立即寻找医护人员进行治疗。
							<br/><br/><br/>
							在偏远地区旅游
							<br/><br/>
							澳大利亚的内陆路径是世界上最适合驾驶四驱车游览的地方，但是在澳大利亚偏远、崎岖的地区驾车则需做好充分准备。开始一 次无人保护的内陆之旅前，务必要检查道路状况，确保你的车辆有适当装备，并且要有一张最新的地图、额外的储备并制定紧急计划。确保告知其他人你预期到达的 地方。澳大利亚的内陆城镇通常都相距几百公里，所以要计划好你的行程。
							<br/><br/>
							请注意，手机在偏远地区可能信号有限。如果你的汽车在偏远地区发生故障，请不要离开你的汽车。这是唯一最重要的生存规则。有一些公路不适合独自旅行，只能跟有组织的车队一起走。
							<br/><br/>
							如果想丛林漫步或徒步，请查看行走的长度和难度，并考虑使用本地向导进行长途或富有挑战的行走。查看澳大利亚公园管理处（Parks Australia）网站，了解有关路径状况和危险指数的最新信息。
							<br/><br/><br/>
							自然灾害
							<br/><br/>
							澳大利亚不时会经历各种“自然灾害”，例如森林大火、洪水、干旱、热浪、强烈的暴雨以及偶尔发生的地震和山崩。这些事件通常被视为澳大利亚国家特点，也是澳大利亚天气类型自然循环的一部分。
							<br/><br/>
							许多澳大利亚政府代理机构在出现重大紧急事件时都会发挥重要作用。 如果出现卫生紧急事件，澳大利亚政府的卫生应急部（Health Emergency）网站会提供最新信息、重要的健康信息以及与此相关的安排。
							<br/><br/><br/>
							紧急服务
							<br/><br/>
							000 是澳大利亚所有紧急服务的电话。接线员可以为你联系警察、救护车或消防队。不过只有在紧急情况下，你才能拨打 000。
							<br/><br/><br/>	
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer">
			<div class="footerjkgz">
				<div class="footer1">
					<div><label>即刻关注：</label></div>
					<div><a href="#"><img src="/weiju1/Public/home/images/14515034.png" width="50px" height="45px"></a></div>
					<div class="footera"><a href="#">官方微博</a></div>
					<div><a href="#"><img src="/weiju1/Public/home/images/20161123213710.png" width="50px" height="45px"></a></div>
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
						<a href="<?php echo U('Home/zhuyi/zhuyishixiang');?>">注意事项</a>
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
					<a href="<?php echo U('Home/index/index');?>"><img src="/weiju1/Public/home/images/u146.gif" width="110px" height="90px"></a>
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
	    <script>
			$('.ck-slide').ckSlide({
				autoPlay: true,//默认为不自动播放，需要时请以此设置
				dir: 'x',//默认效果淡隐淡出，x为水平移动，y 为垂直滚动
				interval:1080//默认间隔2000毫秒
				
			});
		</script>
	</body>
</html>