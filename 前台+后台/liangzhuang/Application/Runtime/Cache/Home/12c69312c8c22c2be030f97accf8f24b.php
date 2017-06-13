<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>邦迪海滩</title>
		<!--头部导航轮播图-->
		<link href="/weiju/Public/home/css/nav.css" rel="stylesheet" type="text/css">
		<link type="image/x-icon" rel="icon" href="/weiju/Public/home/images/bitbug_favicon.ico" media="screen" />
		<script type="text/javascript" src="/weiju/Public/home/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="/weiju/Public/home/js/index.js"></script>
		<!--界面和面包屑-->
		<link rel="stylesheet" href="/weiju/Public/home/css/style.css">
		<link href="/weiju/Public/home/css/footer.css" rel="stylesheet" type="text/css">
	    <link rel="stylesheet" href="/weiju/Public/home/assets/css/amazeui.css">
		<script type="text/javascript" src="/weiju/Public/home/js/jquery.min.js"></script>
		<script type="text/javascript" src="/weiju/Public/home/js/style.js"></script>
		<!--竖版菜单导航-->
		<script type="text/javascript" src="/weiju/Public/home/js/jquery.js"></script>
		<script type="text/javascript" src="/weiju/Public/home/js/juheweb.js"></script>
		<script src="/weiju/Public/home/assets/js/amazeui.js"></script>
        <style>
        	.flex-container{
        		display: -webkit-flex;
        		display: flex;
        		width: 100%;
        		height: 100%;
        	}
            .flex-item1{
            	width: 25%;
        
           
            }
        	.flex-item2{
        		width:75%;
        	
        	}
        	.body{
        		background-image: url(images/bg.jpg);
        	}
        </style>
        <script type="text/javascript">
		window.onload = function (){
			document.getElementById("body").style.zoom = window.screen.width/1366;
		}
		</script>
	</head>
	<body class="body">
		<!--头部导航与轮播图-->
		<div id="header">
			<div class="banner" id="slide">
    			<ul id="picList">
					<li class="slide_li first">
						<div class="imgBg_home"></div>
						<img class="slide_img" src="images/first1.jpg" width="100%" height="480px"/> 
					</li>
					<li class="slide_li">
						<div class="imgBg_air"></div>
						<img class="slide_img" src="images/first2.jpg" width="100%" height="480px"/>
					</li>
					<li class="slide_li">
						<div class="imgBg_work"></div>
						<img class="slide_img" src="images/first3.jpg" width="100%" height="480px"/> 
					</li>
				</ul>
    			<div id="slideThumb"></div>
			</div>
			<div class="lheader">
				<div class="hl">
					<div class="logo">
		                <h1>
							<a href="index.html" title="微距">
								<img src="images/u146.gif" width="98px" height="85px">
							</a>
		                </h1>
		            </div>
	                <div class="menu">
	                    <ul>
	                        <li>
	                        	<a href="index.html" title="首页" class="index" style="background-color:rgba(0,0,0,0.2)!important; filter:Alpha(opacity=30);">首页</a>
	                       	</li>
	                        <li id="ejdh1">
	                        	<a href="yaoqudedifang.html" title="要去的地方" class="ejdh1">要去的地方</a>
	                        	<ul>
	                        		<li><a href="#">美食</a></li>
	                        		<li><a href="#">天气</a></li>
	                        		<li><a href="#">人文</a></li>
	                        		<li><a href="#">景点</a></li>
	                        		<li><a href="#">路线</a></li>
	                        	</ul>
	                        </li>
	                        <li id="ejdh2">
	                        	<a href="sijituijian.html" title="四季推荐" class="ejdh2">四季推荐</a>
	                        	<ul>
	                        		<li><a href="#">春</a></li>
	                        		<li><a href="#">夏</a></li>
	                        		<li><a href="#">秋</a></li>
	                        		<li><a href="#">冬</a></li>
	                        	</ul>
	                        </li>
	                        <li>
	                        	<a href="xingcheng.html" title="行程推荐">行程推荐</a>
	                        </li>
	                        <li id="ejdh3">
	                        	<a href="zhuyishixiang.html" title="注意事项" class="ejdh3">注意事项</a>
	                        	<ul>
	                        		<li><a href="#">货币</a></li>
	                        		<li><a href="#">时区</a></li>
	                        		<li><a href="#">交通</a></li>
	                        		<li><a href="#">签证</a></li>
	                        		<li><a href="#">道路安全</a></li>
	                        		<li><a href="#">健康安全</a></li>
	                        		<li><a href="#">实用信息</a></li>
	                        	</ul>
	                        </li>
	                        <li>
	                        	<a href="zhunali.html" title="住哪里">住哪里</a>
	                        </li>
	                        <li><a href="student.html" title="留学生导游">留学生导游</a></li>
	                    </ul>
	                </div>
	            </div>
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
			        <a href="#"><img src="images/u127.jpg" width="20px" height="20px" /></a>
			    </div>
			</div>
			<div class="hr1">
				<hr color="#E4E4E4" width=91.5% size=1 align=center noshade>
			</div>
        </div>
		<div id="light1" class="white_content1">
			<a href="javascript:void(0)" onclick="close1()">
				<img src="images/03q58PICtSW_1024.png" width="18" height="24" id="imgclose">
			</a>
			<form method="post" id="signin1" action="index.html">
				<h1>登录</h1>
				<hr/>
				<div>
					<label>
						<p>用户名</p>
						<p>
							<input id="username1" name="username" value="" title="username" tabindex="4" type="text" placeholder="您的用户名"> 
						</p>
					</label>
				</div>
				<div>
					<label>
						<p>密码</p>
						<p>
					       	<input id="password1" name="password" value="" title="password" tabindex="5" type="password" placeholder="您的密码">
						</p>
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
				<img src="images/03q58PICtSW_1024.png" width="18" height="24" id="imgclose">
			</a>
			<form method="post" id="signin2" action="index.html">
				<h1>注册</h1>
				<hr/>
				<div class="tregister">
					<div>
						<label>
							<p>用户名<span> *</span></p>
							<p>
								<input id="username2" name="username" value="" title="username" tabindex="4" type="text" placeholder="请输入1~16位以内的英文、数字组合" class="inputpp"> 
							</p>
						</label>
					</div>
					<div style="clear: left;" class="margintop">
						<label>
							<p>登录密码<span> *</span></p>
							<p>
						       	<input id="password2" name="password" value="" title="password" tabindex="5" type="password" placeholder="请输入6~16位以内的英文、数字组合" class="inputpp">
							</p>
						</label>
					</div>
					<div class="margintop">
						<label>
							<p>确认密码<span> *</span></p>
							<p>
						       	<input id="password2" name="password" value="" title="password" tabindex="5" type="password" placeholder="请再次输入密码" class="inputpp">
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
								<div class="tourist"><label><input type="checkbox" name="用户类型" checked="checked"> 游客</label></div>
							    <div class="ciceroni"><label><input type="checkbox" name="用户类型" > 导游</label></div>
						    </p>
					</div>
				</div>
				<div class="bregister">
					<div class="logosub2">
						<input type="button" name="" value="完成注册" style="text-align: center;">
					</div>
					<div>
						<p class="toregister">
							已拥有账户？<a href="javascript:void(0)" onclick="login()">点击这里登录</a>
						</p>
					</div>
				</div>
			</form>
		</div>
		<div id="fade" class="black_overlay">123</div>
		<!--面包屑分割线与竖版菜单导航与内容-->
		<div class="content">

			<div class="content-header">
				<div id="mbx">
					<ul id="breadcrumb">
						<li><a href="index.html"><span class="icon icon-home"> </span>首页</a></li>
  						<li><a href="yaoqudedifang.html"><span class="icon icon-beaker"> </span> 要去的地方</a></li>
  						<li><a href="content.html"><span class="icon icon-double-angle-right"></span>邦迪海滩 </a></li>	
  					</ul>
				</div>

				<div>
					<HR style="border:1 dashed #987cb9; margin-left:10%; margin-top:20px; margin-bottom:50px;" width="80%" color=#987cb9 SIZE=1>
				</div>
			</div>
			
            <div class="cotent-content">

            	<div class="am-g">
            		<div class="am-u-sm-1 am-u-md-1 am-u-lg-1">&nbsp</div>
            		<div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
            		<h1 style="font-size:30px">邦迪海滩&nbsp&nbsp&nbspBondi Beach</h1>        			
            		<img src="images/3.jpg" width="100%" >
            		</div>
            		<div class="am-u-sm-4 am-u-md-4 am-u-lg-4" 	>
            			<h1>景点介绍</h1>
            			<p>&nbsp&nbsp邦迪海滩（Bondi Beach）位于澳大利亚悉尼。邦迪海滩（Bondi Beach）的名字来自于原居民的语言bondi，意思是海水拍岸的声浪。邦迪海滩（读音："BOND-eye" with a long i 听起来象“邦待”）长达1公里，虽然只是个沙滩滨海小镇，却是澳洲具历史的冲浪运动中心，是澳洲传统冲浪救生训练基地。</br>&nbsp&nbsp在夏季的周末，这里有各类冲浪活动，运动员们轮番上阵表演；有非正式的乐队在岸上声嘶力竭地演唱；有民俗活动、艺术展览活动等。沿着邦迪到库吉的悬崖观景路而行，一路上可以慢慢闲逛、游游泳，还可以到咖啡馆里喝上一杯咖啡。
邦迪海滩还是澳大利亚人休闲娱乐的地方，海水很蓝，甚是美丽。
邦迪海滩
邦迪海滩
在建于20世纪20年代的精致优雅的邦迪凉亭（Bondi Pavilion）里品尝一客鲜奶冰淇淋。
观看邦迪海滩救生员开展救生演示活动，甚至还可以亲身参与。
在悉尼的标志性场所之一邦迪冰山（Bondi Icebergs）游泳池戏水。
日落时一面领略壮观的大海美景，一面享受邦迪海滩上众多餐馆的诱人美食。
如果要了解当地人是如何享受生活的话，最好的方法就是到邦迪海滩，它的原名意为“翻动潮水的噪音”，非常恰当地描述了这个海滩上下，这里无论在夏季或冬季，都是悉尼的精华所在，海滩的生活非常舒适，每当夏季，这里也是日光浴和冲浪的绝佳地点，游客也可在这里观看一场嘉年华会。</p>
            		</div>
            		<div class="am-u-sm-1 am-u-md-1 am-u-lg-1">&nbsp</div>
            	</div>

            	<div class="am-g">
            		<div class="am-u-sm-1 am-u-md-1 am-u-lg-1">&nbsp</div>
            		<div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
            	
            			<ul class="am-avg-sm-3 am-avg-md-3 am-avg-lg-3 am-thumbnails">
						<li><img class="am-thumbnail" src="images/4.jpg" /></li>
						<li><img class="am-thumbnail" src="images/5.jpg" /></li>
						<li><img class="am-thumbnail" src="images/7.jpg" /></li>

						</ul>
  
            		</div>
            		<div class="am-u-sm-5 am-u-md-5 am-u-lg-5" style="margin-top:1%">
            			<h2>特别提醒</h2>
            			<p>1. 在北部海滩的悬崖上还有一些Eora人的土著岩石雕刻，但是非常模糊。
</br>2. 来这里之前最好做好防晒准备，否则有可能会被晒伤。</p>
            		</div>
            	</div>

            	<div class="am-g">
            		<div class="am-u-sm-1 am-u-md-1 am-u-lg-1">&nbsp</div>
            		<div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
            	
            			<h1>这样到这里：）</h1>
                        <p>&nbsp&nbsp邦迪海滩位于悉尼西南部，距离悉尼市中心约7公里，有多种交通方式可以到达这里。从悉尼市中心出发，先坐火车再搭乘公交是最便捷的到达方式，相比自驾与出租车更有优势。</p>
  
            		</div>
            		<div class="am-u-sm-5 am-u-md-5 am-u-lg-5" style="margin-top:1%">
            			
            		</div>
            	</div>

            	<div class="am-g">
            		<div class="am-u-sm-1 am-u-md-1 am-u-lg-1">&nbsp</div>
            		<div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
            	
            			<h1>游泳与水上运动</h1>
                        <p>&nbsp&nbsp邦迪在澳洲土著语里意为“碎石浪”，非常恰当地描述了这个海滩的情致。每逢阳光明媚的日子，悉尼人就会聚集在邦迪海滩上享受阳光的沐浴。邦迪海滩与悉尼的其他海滩一样，海浪很大，不太适合游泳。
多数的游人或趴在海滩上晒太阳或冲浪。不过如果想要与大自然来个亲密接触，也不用太过紧张，这里有救护员365天巡逻，只要在红色和黄色的旗帜标识的范围内游泳，就基本能保证安全。
当然，除了游泳，还有许多水上运动可以开展，比如冲浪，而这里被称为“冲浪者的天堂”，澳洲人对水上运动的热爱可见一斑。如果对冲浪运动很感兴趣，可以选择在这里报读一个初学者冲浪课程，享受午后美好的阳光，感受这个“热情的海滩”的魅力。寻求宁静，不喜折腾的话，也可以带一本好书，一把遮阳伞，听着音乐，吹着海风，感受南半球的休闲与惬意。</p>
  
            		</div>
            		<div class="am-u-sm-5 am-u-md-5 am-u-lg-5" style="margin-top:1%">
            			<img src="images/5.jpg" width="450px" height="220px">
            		</div>
            	</div>

            	<div class="am-g">
            		<div class="am-u-sm-1 am-u-md-1 am-u-lg-1">&nbsp</div>
            		<div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
            	
            			<h1>休闲娱乐</h1>
                        <p>&nbsp&nbsp这里有着壮美的海岸线，沿着邦迪到库吉的悬崖观景路而行，一路上可以慢慢闲逛，在精致优雅的邦迪凉亭里品尝一客鲜奶冰淇淋；可以观看邦迪海滩救生员开展救生演示活动，甚至还可以亲身参与；也可以在悉尼的标志性场所之一邦迪冰山游泳池戏水，更可以在日落时一边领略壮观的大海美景，一边享受邦迪海滩上众多餐馆的诱人美食。
如果不巧遇到下雨天，也不用太过失望，雨天的邦迪海滩也别有一番风情，你还是可以在此地放松身心，感受大自然的神奇造化，也可以去附近的娱乐设施消磨时光。在Hall Street有许多咖啡馆，提供Wi-Fi，这条街上还有一些书店和报刊亭，都能满足你的需求。实在无聊，也可以去Westfield看一场电影。</p>
            		</div>
            		<div class="am-u-sm-5 am-u-md-5 am-u-lg-5" style="margin-top:1%">
            			<img src="images/7.jpg" width="450px" height="250px">
            		</div>
            	</div>
                

                <div class="am-g">
            		<div class="am-u-sm-1 am-u-md-1 am-u-lg-1">&nbsp</div>
            		<div class="am-u-sm-6 am-u-md-6 am-u-lg-6" style="margin-top:-3%">
            	
            			<h1>邦迪集市</h1>
                        <p>&nbsp&nbsp周日这里会举行热闹的邦迪集市，如果碰巧遇上，千万不要错过。邦迪集市始于1993年，每周日10:00-16:00在Bondi Beach Public School靠近海滩的广场上举行。
来这里逛一逛，你会看到琳琅满目的摆设，独立设计师的服饰、手工珠宝饰品、艺术绘画、手工艺制品、古着等。当然，如果有其他重要活动，比如马拉松，周日集市会暂停，不过一般情况下都会如期举行。</p>
  
            		</div>
            		<div class="am-u-sm-5 am-u-md-5 am-u-lg-5" style="margin-top:1%">
            			
            		</div>
            	</div>

            	<div class="am-g" style="margin-top:1%">
            		<div class="am-u-sm-1 am-u-md-1 am-u-lg-1">&nbsp</div>
            		<div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
            	
            			<h1>当地美食</h1>
						<img  src="images/200.jpg" width="400px" />
            		</div>
            		<div class="am-u-sm-6 am-u-md-6 am-u-lg-6" style="margin-top:3%">
            			<p>悉尼鱼市场创建于1945年，是南半球最大的同类市场，每天多达100种海鲜上市。除了海鲜，这里还供应各类蔬菜、水果、面包和寿司，酒吧、餐馆和美味的熟食店比比皆是，是旅游者的悉尼必来之地，同时也为其提供了真正体验当地在营鱼市的机会。</br></br>这里是悉尼品尝海鲜的聚集之地，买的和卖的70%都是华人，备好的套餐拼盘价格不贵，活海鲜挑选加工并不便宜。买一些海鲜回公寓酒店做大餐是个不错的选择，也可在露天的渔人码头吃饭。当你坐在室外品尝海鲜时，忽然听到一群女生的尖叫，不用问，一定是海鸥抢了她们的美食。
悉尼海鲜烹饪学校（Sydney Seafood School）就在鱼市场的旁边，开设多种海鲜烹饪课程，其中包括一些澳州知名厨师的授课。鱼市场还有一个内部参观的旅游项目，在周一、周三、周四和周五的06:40—08:30之间，需预定。</br></br>地址：
Blackwattle Bay，Corner Pyrmont Bridge Road and Bank Street，Sydney，New South Wales，2009(查看地图)
到达方式：
轻轨（Light rail）：悉尼鱼市场（Fish Market）站下车，出站过马路步行3分钟即到。
营业时间：
周一至周四：07:00—16:00；周五至周日07:00—17:00。</p>
                        <p style="margin-left:85%"><a href="">更多</a></p>
            		</div>
            		<div class="am-u-sm-1 am-u-md-1 am-u-lg-1"></div>
            	</div>


                <div class="am-g">
                    <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">&nbsp</div>
                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                    	<h1>附近的酒店</h1>
                    	<img src="images/z2.jpg" width="400px" />
                    	<h2 style="margin-left:40%">windsor hotel</h2>
                    	<p style="margin-left:8%">&nbsp&nbsp&nbsp&nbsp这是一家澳洲著名的五星级酒店，以英国女王伊丽莎白曾入住而得名。酒店位于墨尔本中心地带，
走路十分钟可到名品街、唐人街。</p>
                    </div>

                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3" style="margin-left:3%">
                        <h1>&nbsp</h1>
                    	<img src="images/z2.jpg" width="400px" />
                    	<h2 style="margin-left:40%">windsor hotel</h2>
                    	<p style="margin-left:8%">&nbsp&nbsp&nbsp&nbsp这是一家澳洲著名的五星级酒店，以英国女王伊丽莎白曾入住而得名。酒店位于墨尔本中心地带，
走路十分钟可到名品街、唐人街。</p>
                    </div>

                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3" style="margin-left:3%">
                        <h1>&nbsp</h1>
                    	<img src="images/z2.jpg" width="400px" />
                    	<h2 style="margin-left:40%">windsor hotel</h2>
                    	<p style="margin-left:8%">&nbsp&nbsp&nbsp&nbsp这是一家澳洲著名的五星级酒店，以英国女王伊丽莎白曾入住而得名。酒店位于墨尔本中心地带，
走路十分钟可到名品街、唐人街。</p>
                    </div>
                
                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                    	
                    </div>
                </div>    

                <div class="am-g">
                    <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">&nbsp</div>
                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                    	<h1>附近的酒店</h1>
                    	<img src="images/z2.jpg" width="400px" />
                    	<h2 style="margin-left:40%">windsor hotel</h2>
                    	<p style="margin-left:8%">&nbsp&nbsp&nbsp&nbsp这是一家澳洲著名的五星级酒店，以英国女王伊丽莎白曾入住而得名。酒店位于墨尔本中心地带，
走路十分钟可到名品街、唐人街。</p>
                    </div>

                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3" style="margin-left:3%">
                        <h1>&nbsp</h1>
                    	<img src="images/z2.jpg" width="400px" />
                    	<h2 style="margin-left:40%">windsor hotel</h2>
                    	<p style="margin-left:8%">&nbsp&nbsp&nbsp&nbsp这是一家澳洲著名的五星级酒店，以英国女王伊丽莎白曾入住而得名。酒店位于墨尔本中心地带，
走路十分钟可到名品街、唐人街。</p>
                    </div>

                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3" style="margin-left:3%">
                        <h1>&nbsp</h1>
                    	<img src="images/z2.jpg" width="400px" />
                    	<h2 style="margin-left:40%">windsor hotel</h2>
                    	<p style="margin-left:8%">&nbsp&nbsp&nbsp&nbsp这是一家澳洲著名的五星级酒店，以英国女王伊丽莎白曾入住而得名。酒店位于墨尔本中心地带，
走路十分钟可到名品街、唐人街。</p><p style="margin-left:90%"><a href="zhunali.html">更多</a></p>
                    </div>
                
                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                    	
                    </div>
                </div> 
            	<!-- <div class="am-g" style="margin-top:1%">
            		<div class="am-u-sm-1 am-u-md-1 am-u-lg-1">&nbsp</div>
            		<div class="am-u-sm-11 am-u-md-11 am-u-lg-11">
            	
            			<h1>附近的酒店</h1>
                        <ul class="am-avg-sm-3 am-avg-md-3 am-avg-lg-3 am-thumbnails">
						<div style="float:left">
						   <li><img class="am-thumbnail" src="images/z2.jpg" width="400px" /></li>
                           <p>Port O Call Motel</br>
windsor hotel.这是一家澳洲著名的五星级酒店，以英国女王伊丽莎白曾入住而得名。酒店位于墨尔本中心地带，
走路十分钟可到名品街、唐人街。</p>
						</div>
						<div  style="float:left;margin-left:3%"><li><img class="am-thumbnail" src="images/z2.jpg" width="400px"/></li></div>
						<div  style="float:left;margin-left:3%"><li><img class="am-thumbnail" src="images/z2.jpg" width="400px"/></li></div>
                        <div  style="float:left"><li><img class="am-thumbnail" src="images/z2.jpg" width="400px"/></li></div>
                        <div  style="float:left"><li><img class="am-thumbnail" src="images/z2.jpg" width="400px"/></li></div>
                        <div  style="float:left"><li><img class="am-thumbnail" src="images/z2.jpg" width="400px"/></li></div>
						</ul>
  
            		</div>
            	</div> -->
            </div>
			
			

		<!--尾部信息-->
			<div class="footer" style="margin-top:5%">
			<div class="footerjkgz">
				<div class="footer1">
					<div><label>即刻关注：</label></div>
					<div><a href="#"><img src="images/14515034.png" width="50px" height="45px"></a></div>
					<div><a href="#" class="footera">官方微博</a></div>
					<div><a href="#"><img src="images/20161123213710.png" width="50px" height="45px"></a></div>
					<div><a href="#" class="footera">官方微信</a></div>
				</div>
				<div class="footer2">
					<div><label class="yqlj_">友情链接：</label></div>
					<div><a href="http://www.cnta.com/" class="yqlj" target="_blank">国家旅游局</a></div>
					<div><a href="http://travel.people.com.cn/" class="yqlj" target="_blank">人民网旅游</a></div>
					<div><a href="http://travel.gmw.cn/index.htm" class="yqlj" target="_blank">光明网旅游</a></div>
				</div>
			</div>
			<div class="hr2">
				<hr color="#E4E4E4" size=1 align=center noshade>
			</div>
			<div class="footerliebiao">
				<div class="footerliebiao1">
					<div>
						<a href="#">要去的地方</a>
					</div>
					<hr color="#E4E4E4" size=1 align=center noshade class="hr3">
					<div>
						<ul>
							<li><a href="#">主要城市</a></li>
							<li><a href="#">美食</a></li>
							<li><a href="#">天气</a></li>
							<li><a href="#">人文</a></li>
							<li><a href="#">景点</a></li>
							<li><a href="#">路线</a></li>
						</ul>
					</div>
				</div>
				<div class="footerliebiao1">
					<div>
						<a href="#">四季推荐</a>
					</div>
					<hr color="#E4E4E4" size=1 align=center noshade class="hr3">
					<div>
						<ul>
							<li><a href="#">春</a></li>
							<li><a href="#">夏</a></li>
							<li><a href="#">秋</a></li>
							<li><a href="#">冬</a></li>
						</ul>
					</div>
				</div>
				<div class="footerliebiao1">
					<div>
						<a href="#">行程推荐</a>
					</div>
					<hr color="#E4E4E4" size=1 align=center noshade class="hr3">
					<div>
						<ul>
							<li><a href="#">自驾之旅</a></li>
							<li><a href="#">探险之旅</a></li>
							<li><a href="#">自然野生动物</a></li>
							<li><a href="#">美食美酒</a></li>
						</ul>
					</div>
				</div>
				<div class="footerliebiao1">
					<div>
						<a href="#">注意事项</a>
					</div>
					<hr color="#E4E4E4" size=1 align=center noshade class="hr3">
					<div>
						<ul>
							<li><a href="#">货币</a></li>
							<li><a href="#">时区</a></li>
							<li><a href="#">交通</a></li>
							<li><a href="#">签证</a></li>
							<li><a href="#">道路安全</a></li>
							<li><a href="#">健康安全</a></li>
							<li><a href="#">实用信息</a></li>
						</ul>
					</div>
				</div>
				<div class="footerliebiao1">
					<div>
						<a href="#">住哪里</a>
					</div>
					<hr color="#E4E4E4" size=1 align=center noshade class="hr3">
					<div>
						<ul>
							<li><a href="#">按地区筛选</a></li>
							<li><a href="#">按主题筛选</a></li>
							<li><a href="#">按景观筛选</a></li>
						</ul>
					</div>
				</div>
				<div class="footerliebiao1">
					<div>
						<a href="#">留学生导游</a>
					</div>
					<hr color="#E4E4E4" size=1 align=center noshade class="hr3">
					<div>
						<ul>
							<li><a href="#">留学生导游信息</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footerqita">
				<div>
					<a href="#"><img src="images/u146.gif" width="110px" height="90px"></a>
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
	</body>
</html>