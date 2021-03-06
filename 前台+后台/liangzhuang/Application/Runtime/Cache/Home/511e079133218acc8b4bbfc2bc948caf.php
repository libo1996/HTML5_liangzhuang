<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>注意事项</title>
		<link type="image/x-icon" rel="icon" href="/liangzhuang/Public/home/images/bitbug_favicon.ico" media="screen" />
		<!--头部导航轮播图-->
		<script type="text/javascript" src="/liangzhuang/Public/home/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/liangzhuang/Public/home/js/jquery.mousewheel.min.js"></script>
	    <script type="text/javascript" src="/liangzhuang/Public/home/js/main.js"></script>
	    <script type="text/javascript" src="/liangzhuang/Public/home/js/index.js"></script>
	    <link rel="stylesheet" href="/liangzhuang/Public/home/css/main.css">
   	 	<link rel="stylesheet" type="text/css" href="/liangzhuang/Public/home/css/style4.css">
		<!--界面和面包屑-->
		<link rel="stylesheet" href="/liangzhuang/Public/home/css/style.css">
		<script type="text/javascript" src="/liangzhuang/Public/home/js/style.js"></script>
		<!--竖版菜单导航-->
		<script type="text/javascript" src="/liangzhuang/Public/home/js/juheweb.js"></script>
		<!--尾部样式-->
		<link href="/liangzhuang/Public/home/css/footer.css" rel="stylesheet" type="text/css">
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
          <a class="logo" href="<?php echo U('Home/index/index');?>"><img src="/liangzhuang/Public/home/images/u146.gif" width="98px" height="70px" id="logowj"></a>
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
			        <a href="javascript:void(0)" onclick="search1()"><img src="/liangzhuang/Public/home/images/u127.jpg" width="20px" height="20px" /></a>
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
                <li><span><img src="/liangzhuang/Public/admin/images/dao.jpg" width="100%" height="668px"></span><div><h3>悉尼歌剧院</h3></div></li>
                <li><span><img src="/liangzhuang/Public/admin/images/dao1.jpg" width="100%" height="668px"></span><div><h3>大堡礁</h3></div></li>
                <li><span><img src="/liangzhuang/Public/home/images/3.jpg" width="100%" height="668px"></span><div><h3>黄金海岸</h3></div></li>
                <li><span><img src="/liangzhuang/Public/home/images/4.jpg" width="100%" height="668px"></span><div><h3>国王公园</h3></div></li>
                <li><span><img src="/liangzhuang/Public/admin/images/dao2.jpg" width="100%" height="668px"></span><div><h3>圣玛丽大教堂</h3></div></li>
                <li><span><img src="/liangzhuang/Public/admin/images/dao3.jpg" width="100%" height="668px"></span><div><h3>袋鼠岛</h3></div></li>
            </ul>
            </label> 
        </div> 
    </section>
    <div id="light1" class="white_content1">
			<a href="javascript:void(0)" onclick="close1()">
				<img src="/liangzhuang/Public/home/images/03q58PICtSW_1024.png" width="18" height="24" id="imgclose">
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
				<img src="/liangzhuang/Public/home/images/03q58PICtSW_1024.png" width="18" height="24" id="imgclose">
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
  						<li><a href="<?php echo U('Home/zhuyi/zhuyishixiang_qz');?>"><span class="icon icon-double-angle-right"></span> 签证</a></li>
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
						<li class="on"><a href="<?php echo U('Home/zhuyi/zhuyishixiang_qz');?>">签证</a></li>
						<li class=""><a href="<?php echo U('Home/zhuyi/zhuyishixiang_lyts');?>">旅游贴士</a></li>
						<li class=""><a href="<?php echo U('Home/zhuyi/zhuyishixiang_jkaq');?>">健康安全</a></li>
					</ul>
					<div class="hover" style="top: 220px;"></div>
				</div>

				<div class="content-text">
					<div id="zw">
						<h1>前往澳大利亚</h1>
						<h2>签证信息</h2>
						<p id="zw">
							非澳大利亚或新西兰公民需持签证才能进入澳大利亚。
							<br/><br/>
							非澳大利亚籍或非新西兰籍的游客，必须持有澳大利亚签证才能进入澳大利亚。 在申请或者获得澳大利亚签证前，请特别注意以下重要事项：确保申请正确的签证类型（如澳大利亚旅游签证、电子签证或工作签证）、明确签证申请的具体要求、了解在澳大利亚期间的义务以及遵守签证条件的重要性等。
							<br/><br/>
							欲了解更多详细信息，敬请访问<a href="http://www.immi.gov.au/Pages/Welcome.aspx" target="_blank">澳大利亚移民与边境保护部（Australia Government Department of Immigration and Border Protection）</a>或持中国护照游客亦可访问<a href="http://www.china.embassy.gov.au/bjngchinese/Visas_and_Migration.html" target="_blank">澳大利亚驻华大使馆网站</a>了解相关签证信息。
							<br/><br/>
							澳大利亚访客签证便捷申请指南
							<br/><br/>
							申请步骤：
							<br/><br/>
							第1步：
							<br/><br/>
							登陆澳大利亚大使馆网站：
							<br/><br/>
							详见：
							<br/><br/>
							<a href="http://www.china.embassy.gov.au/bjngchinese/DIAC07092012p1cn.html" target="_blank">http://china.embassy.gov.au/bjngchinese/DIAC07092012p1cn.html</a>
							<br/><br/>
							第2步：
							<br/><br/>
							下载签证申请核对清单及签证申请表（中英文版本均有）：
							<br/><br/>
							中文版：
							<br/><br/>
							<a href="http://china.embassy.gov.au/bjngchinese/visa_checklistsCN.html" target="_blank">http://china.embassy.gov.au/bjngchinese/visa_checklistsCN.html</a>
							<br/><br/>
							英文版：
							<br/><br/>
							<a href="https://www.border.gov.au/about/corporate/information/forms" target="_blank">https://www.border.gov.au/about/corporate/information/forms</a>
							<br/><br/>
							第3步：
							<br/><br/>
							填写签证申请表，并复印您的申请材料：
							<br/><br/>
							• 请注明申请停留的时长。游客类的访客签证通常允许在一年内多次入境澳大利亚，每次入境可停留最长三个月。根据具体个人情况，有时也可批准更长的停留期限。
							<br/><br/>
							• 请授权澳大利亚大使馆使用电子联系方式，可加快办理流程。
							<br/><br/>
							第4步：
							<br/><br/>
							通过申请中心或经认可的旅行社递交签证申请：
							<br/><br/>
							• 亲自前往申请中心递交：
							<br/><br/>
							详见：
							<br/><br/>
							<a href="http://china.embassy.gov.au/bjngchinese/DIAC07092012P23cn.html" target="_blank">http://china.embassy.gov.au/bjngchinese/DIAC07092012P23cn.html</a>
							<br/><br/>
							• 通过邮递/快递方式向申请中心递交申请（需提供护照原件）。
							<br/><br/>
							• 通过经认可的旅行社递交申请。
							<br/><br/>
							第5步：
							<br/><br/>
							申请结果一经确认，将通过电邮直接通知。
							<br/><br/>
							附：有关签证申请费与申请中心服务费情况：
							<br/><br/>
							详见：
							<br/><br/>
							<a href="http://china.embassy.gov.au/bjngchinese/DIMAcn23.html" target="_blank">http://china.embassy.gov.au/bjngchinese/DIMAcn23.html</a>
							<br/><br/>
							*注：所有签证申请均由移民与边境保护部办理
							<br/><br/><br/><br/>
							访客签证（600类别）
							<br/><br/>
							访客签证（600类别）允许签证持有人赴澳旅游、从事商务活动或探亲访友。 访客签证可以一次或多次出入澳大利亚，每次停留不超过三个月、六个月或十二个月；
							<br/><br/>
							该类别签证持有人不能在澳大利亚工作，不能为澳大利亚企业或机构提供服务，也不能向澳大利亚公众售卖产品或提供服务。若申请人的赴澳目的为在澳从事短期工作，他们则应申请新设立的临时工作签证（短期停留活动）（400类别）。
							<br/><br/>
							该签证类别包括四个细类：
							<br/><br/>
							• 旅游系列：赴澳度假、休闲或探亲访友。若在澳大利亚境内申请该系列签证，在签证批准时，申请人应在澳大利亚境内。若在澳大利亚境外申请该系列签证，在签证批准时，申请人应在澳大利亚境外。
							<br/><br/>
							- 学生团: 不超过三个月的学生团可申请旅游系列签证。我们为学校组团赴澳专门设立了学生团签证申请程序。如果您参加或组织一个学生团到澳大利亚，请参考<a href="http://www.china.embassy.gov.au/bjngchinese/Visas_and_Migration.html" target="_blank">澳大利亚驻华大使馆网站</a>提供的材料清单。请注意，领团的老师和工作人员应申请访客签证（600类别）中的商务访客系列签证。
							<br/><br/>
							- 澳大利亚公民和永久居民的父母：有关澳大利亚公民和永久居民的父母的访客签证安排，请参阅：向澳大利亚公民或永久居民的父母签发长期访客签证。
							<br/><br/>
							• 商务访客系列：赴澳进行短期商务访问。这包括参加会议、进行商务谈判或会谈。在递交签证申请及签证批准时，申请人应在澳大利亚境外。
							<br/><br/>
							• 担保类家庭系列：赴澳探亲。申请人必须有担保人。担保人可能会被要求支付保证金。在递交签证申请及签证批准时，申请人应在澳大利亚境外。申请人在澳大利亚境内不能再申请其他签证。
							<br/><br/>
							• 被批准的旅游目的地签证系列：中国公民参团赴澳旅游。在递交签证申请及签证批准时，申请人应在澳大利亚境外。
							<br/><br/>
							临时工作签证（短期停留活动）（400类别）
							<br/><br/>
							临时工作签证（短期停留活动）（400类别）允许签证申请人在澳大利亚以临时停留为基础，进行下列活动：
							<br/><br/>
							• 从事短期、非持续性的、高度专业性的工作；
							<br/>
							• 作为被邀请方参与某项活动。
							<br/><br/>
							申请人通常最多可在澳大利亚停留三个月的时间。在递交签证申请及签证被批准时，申请人应在澳大利亚境外。
							<br/><br/><br/><br/>
							电子旅行许可（601类别）
							<br/><br/>
							某些国家护照持有人可申请电子旅行许可赴澳进行旅游或商务活动。中国护照持有人不能申请电子旅行许可（ETA）。
							<br/><br/><br/><br/>
							医疗签证（602类别）
							<br/><br/>
							医疗签证允许病患人员赴澳进行医学治疗或医疗咨询。
							<br/><br/>
							医疗签证（602类别）是一个临时签证。申请人在澳大利亚境内、或境外均可递交签证申请。若在澳大利亚境内递交签证申请，在签证批准时申请人应在澳大利亚境内。允许申请人从事下列活动：
							<br/>
							• 在澳大利亚接受医学治疗或医疗咨询；
							<br/>
							• 进行器官捐赠；
							<br/>
							• 协助在澳接受医学治疗的人员。
							<br/><br/>
							若以代孕母亲为目的接受医学治疗，申请人不能申请该签证。
							<br/><br/>
							该签证允许申请人：
							<br/><br/>
							• 在澳停留接受医学治疗；
							<br/><br/>
							• 在澳学习不超过三个月的时间，除非申请人未满18周岁，或申请人在澳期间个人情况发生了变化；
							<br/><br/>
							• 申请人持该签证前往澳大利亚：
							<br/><br/>
							1.一次入境澳大利亚，直至其医疗计划完成；或
							<br/><br/>
							2.在签证到期前，多次入境澳大利亚。
							<br/><br/>
							若申请人所持签证上有“不能预期滞留”条款，则申请人不能申请该签证。
							<br/><br/>
							若申请人欲申请新护照，请务必在申请签证前申请新护照。申请人在签证申请中提供的护照号码将与其签证相关联。申请人必须持该本护照赴澳。
							<br/><br/><br/><br/>
							参加中国公民自费旅游目的地计划（ADS）旅游团 （600类别）
							<br/><br/>
							ADS签证是一种面向参加团体包办赴澳度假旅游的中国公民旅游签证（600类别）。 <a href="https://www.austrade.gov.au/Tourism/About/Consumer-rights" target="_blank">本情况说明书介绍</a>ADS签证条件及你在澳期间的ADS消费者权利，帮助你尽情享受愉快的ADS度假体验。
							<br/><br/>
							详见：
							<br/><br/>
							<a href="http://www.china.embassy.gov.au/bjngchinese/DIAC0509201302.html" target="_blank">http://china.embassy.gov.au/bjngchinese/DIAC0509201302.html</a>
							<br/><br/><br/><br/>
							打工与度假签证（462类别）
							<br/><br/>
							澳大利亚已同中国达成协议对中国公民开放打工与度假签证，这种签证将允许每年最多5000名接受过高等教育并有英文技能的中国年轻人赴澳打工度假。在线预约递交打工与度假（462类别）签证申请系统将于2016年3月7日北京时间早上9点开放。预约成功以后请在你选定的日期和时间亲自往澳洲签证申请中心递交申请。
							<br/><br/>
							查询你是否满足打工与度假签证（462类别）的申请条件，请参阅<a href="http://china.embassy.gov.au/bjngchinese/WorkandHolidaysc462FAQcn.html" target="_blank">常见问题</a>， <a href="http://china.embassy.gov.au/files/bjng/Checklist-462-Work-and-Holiday-China-CN.pdf" target="_blank">材料清单</a>。
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
					<div><a href="#"><img src="/liangzhuang/Public/home/images/14515034.png" width="50px" height="45px"></a></div>
					<div class="footera"><a href="#">官方微博</a></div>
					<div><a href="#"><img src="/liangzhuang/Public/home/images/20161123213710.png" width="50px" height="45px"></a></div>
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
					<a href="<?php echo U('Home/index/index');?>"><img src="/liangzhuang/Public/home/images/u146.gif" width="110px" height="90px"></a>
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