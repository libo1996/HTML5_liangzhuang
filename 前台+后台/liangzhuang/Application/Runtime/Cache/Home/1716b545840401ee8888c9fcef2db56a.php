<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>注意事项</title>
		<link type="image/x-icon" rel="icon" href="/weiju2/Public/home/images/bitbug_favicon.ico" media="screen" />
		<!--头部导航轮播图-->
		<script type="text/javascript" src="/weiju2/Public/home/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/weiju2/Public/home/js/jquery.mousewheel.min.js"></script>
	    <script type="text/javascript" src="/weiju2/Public/home/js/main.js"></script>
	    <script type="text/javascript" src="/weiju2/Public/home/js/index.js"></script>
	    <link rel="stylesheet" href="/weiju2/Public/home/css/main.css">
   	 	<link rel="stylesheet" type="text/css" href="/weiju2/Public/home/css/style4.css">
		<!--界面和面包屑-->
		<link rel="stylesheet" href="/weiju2/Public/home/css/style.css">
		<script type="text/javascript" src="/weiju2/Public/home/js/style.js"></script>
		<!--竖版菜单导航-->
		<script type="text/javascript" src="/weiju2/Public/home/js/juheweb.js"></script>
		<!--尾部样式-->
		<link href="/weiju2/Public/home/css/footer.css" rel="stylesheet" type="text/css">
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
		

		<!--面包屑分割线与竖版菜单导航与内容-->

		<div class="content">
			<div class="content-header">
				<div id="mbx">
					<ul id="breadcrumb">
						<li><a href="<?php echo U('Home/index/index');?>"><span class="icon icon-home"> </span>首页</a></li>
  						<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_hb');?>"><span class="icon icon-beaker"> </span> 注意事项</a></li>
  						<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_jt');?>"><span class="icon icon-double-angle-right"></span> 交通</a></li>
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
						<li class="on"><a href="<?php echo U('Home/zhuyi/zhuyishixiang_jt');?>">交通</a></li>
						<li class=""><a href="<?php echo U('Home/zhuyi/zhuyishixiang_qz');?>">签证</a></li>
						<li class=""><a href="<?php echo U('Home/zhuyi/zhuyishixiang_lyts');?>">旅游贴士</a></li>
						<li class=""><a href="<?php echo U('Home/zhuyi/zhuyishixiang_jkaq');?>">健康安全</a></li>
					</ul>
					<div class="hover" style="top: 160px;"></div>
				</div>

				<div class="content-text">
					<div id="zw">
						<h1>前往澳大利亚</h1>
						<h2>澳大利亚交通方式</h2>
						<p id="zw">
							众所周知，澳大利亚幅员辽阔，但这里便利的交通方式也将让你惊叹不已。
							<br/><br/>
							绵延数英里的海滩，一片自然风光；辽阔的沙漠一望无际，与天相接，等待着人们的探索。想要坐船游览圣灵群岛（Whitsundays），开越野车探索澳洲大陆，或乘火车穿越雨林冠层?以下几种方式帮助您探索我们广阔迥异的地形地貌。
							<br/><br/>
							飞机
							<br/><br/>
							短时间内游览大片地域的最佳方式是乘飞机。旅途过程大大缩短，节省更多时间欣赏澳大利亚独特风景，感受悠闲的生活方式。澳大利亚国内航空公司——澳洲航空（Qantas），捷星航空（Jetstar），维珍澳洲航空（Virgin Australia），雷克斯航空（Rex）及其子公司都设有往返于各州首府及偏远地区主要城市的航线。国内各航空公司互相竞争，票价更优。
							<br/><br/>
							自驾游
							<br/><br/>
							澳大利亚拥有广阔的公路网络，道路状况良好，不少风景宜人的自驾游线路举世闻名。从悉尼（Sydney）到布里斯班（Brisband）沿途经过数个慵懒的海边小镇和植被茂盛的腹地。自驾穿越沙漠，感受澳大利亚的红土中心（Red Centre），整个行程如史诗般壮丽。推荐的另一条自驾游路线是维多利亚州（Victoria）环抱壮美东南海岸的大洋路（Great Ocean Road）。各大机场，市中心，郊区和旅游胜地均设有汽车租赁服务。可选择四轮驱动汽车，旅行车或摩托车立刻上路。
							<br/><br/>
							道路交通法规
							<br/><br/>
							澳大利亚汽车方向盘靠右，行车靠左。城市和乡镇的最高时速为60公里/小时，某些郊区为50公里/小时。国道和高速公路最高时速通常为110公里/小时。为确保安全，驾驶员和乘客必须始终系好安全带；酒驾违法。骑摩托车和自行车必须戴头盔。持有有效的海外驾照的外国游客可在澳大利亚境内驾驶相同类别的汽车。开车时必须同时携带本国驾照和国际驾照。
							<br/><br/>
							大巴车/长途汽车
							<br/><br/>
							乘坐大巴和长途机车游览澳大利亚便捷、舒适、经济实惠。大巴车上通常设有空调、阅读灯、可调节座椅和电影放映机。车次很多，票价便宜，快速便捷。澳大利亚国营长途客运公司灰狗公司（Greyhound）提供各种价位的长途汽车票。
							<br/><br/>
							火车
							<br/><br/>
							在澳大利亚，乘火车旅行方便实惠，亦可欣赏沿途风光。州际和州内火车连接大小城市及偏远地区中心。越野火车乘客可饱览澳大利亚广阔地貌和丰富的自然人文风光。火车上设有经济座和头等座。合理计划票价和行程助您饱览风景同时节省旅游开支。
							<br/><br/>
							乡村连接铁路公司（Countrylink）的火车连接新南威尔士州（New South Wales）各个景区，亦可乘坐其火车沿着澳大利亚东海岸游览墨尔本（Melbourne），布里斯班（Brisbane）和堪培拉（Canberra）。维多利亚地方铁路公司VLine的火车将墨尔本和州内各地区中心连接。提供相同服务的还有昆士兰州（Queensland）的Traveltrain铁路公司和西澳大利亚（Western Australia）的TransWA 铁路公司。
							<br/><br/>
							澳大利亚有着壮丽的铁路游览线路，如“加恩”号列车（The Ghan）和印度-太平洋号列车（The Indian-Pacific）；两条线路纵向横向穿越澳洲大陆，极具舒适感和怀旧的浪漫气息。印度-太平洋号列车横向行驶，从悉尼抵达珀斯（Perth）。沿途停靠小镇可游览布罗肯山（Broken Hill），阿德莱德（Adelaide）小城和富含金矿的卡尔古利（Kalgoorlie）。富有传奇色彩的“加恩”号列车（The Ghan）由南向北从阿德莱德驶向达尔文（Darwin），可欣赏澳大利亚的红土中心（Red Centre）和地处热带的北端地区（Top End）。
							<br/><br/>
							公共交通
							<br/><br/>
							澳大利亚所有首府城市都有广泛的公共交通服务，包括火车，大巴，渡轮，单轨铁路，轻轨和有轨电车。出租车打表计费。
							<br/><br/>
							渡轮
							<br/><br/>
							塔斯马尼亚之魂渡轮公司（The Spirit of Tasmania）运营每晚往返于墨尔本（Melbourne）和塔斯马尼亚（Tasmania）之间的渡轮，搭载乘客和机动车。夏季高峰期增设班次。Sealink公司的渡轮连接南澳州（South Australia）和袋鼠岛（Kangaroo Island），一天几班。另有渡轮往返于各首府城市和郊区——穿过悉尼港（Sydney Harbour），珀斯的天鹅湖（Swan River）和布里斯班（Brisbane）的布里斯班河（Brisbane River）。
							<br/><br/>
							步行
							<br/><br/>
							徒步是游览城市的理想方式，准备好徜徉于我们宽阔舒适的步行街。也可挑战一下澳大利亚引以为豪的几条世界最长的徒步旅行线路——有的行程长达一千公里；有的甚至更长，需几周时间完成。
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
	    <script>
			$('.ck-slide').ckSlide({
				autoPlay: true,//默认为不自动播放，需要时请以此设置
				dir: 'x',//默认效果淡隐淡出，x为水平移动，y 为垂直滚动
				interval:1080//默认间隔2000毫秒
				
			});
		</script>
	</body>
</html>