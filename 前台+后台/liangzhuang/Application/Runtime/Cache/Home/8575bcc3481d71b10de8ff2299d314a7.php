<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>微距，一个最贴切的旅游网站！</title>
<link rel="stylesheet" type="text/css" href="/weiju2/Public/home/css/normalize.css">
<link rel="stylesheet" type="text/css" href="/weiju2/Public/home/css/select-css.css">
<link rel="stylesheet" type="text/css" href="/weiju2/Public/home/css/demo.css">
<style type="text/css">
	#button {
	display: inline-block;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	font: 14px/100% Arial, Helvetica, sans-serif;
	font-family: "微软雅黑";
	padding: .5em 2em .55em;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	-webkit-border-radius: .5em; 
	-moz-border-radius: .5em;
	border-radius: .5em;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
#button:hover {
	text-decoration: none;
}
#button:active {
	position: relative;
	top: 1px;
}
</style>
</head>
<body>
<div style="margin-left:1%;margin-top:1%">
	<a href="<?php echo U('Home/index/index');?>"><input type="button" id="button" name="fanhui" value="返回首页"></a>
</div>
<svg class="hidden">
	<defs>
		<symbol id="icon-arrow" viewbox="0 0 24 24">
			<title>arrow</title>
			<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "></polygon>
		</symbol>
		<symbol id="icon-drop" viewbox="0 0 24 24">
			<title>drop</title>
			<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"></path><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"></path>
		</symbol>
		<symbol id="icon-cam" viewbox="0 0 24 24">
			<title>cam</title>
			<path d="M1.7,10.4l1.1,0.5c-0.3,0.2-0.4,0.5-0.3,0.8l0.9,2.6c0.1,0.2,0.2,0.3,0.4,0.4c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.2,0,0.2,0L5,14.5c0.3,0.5,0.9,0.8,1.5,0.8c0.2,0,0.4,0,0.6-0.1L13,13c0.3,0.5,0.9,0.9,1.5,1l1.1,2.9c0.3,0.9,1.3,1.6,2.3,1.6h3.1v1c0,0.6,0.5,1,1,1h0.7c0.2,0,0.3-0.2,0.3-0.3v-5.5c0-0.2-0.2-0.3-0.3-0.3h-0.7c-0.6,0-1,0.5-1,1v1h-3.1c-0.1,0-0.3-0.1-0.3-0.2l-1.1-3c0.3-0.4,0.5-1,0.4-1.6l5-1.8c0.9-0.3,1.3-1.3,1-2.2l-1.1-2.9c0,0,0,0,0,0l-0.5-1.3c-0.3-0.9-1.3-1.3-2.2-1L1.8,8.7C1.2,8.9,1,9.3,1,9.5C1,9.7,1.1,10.1,1.7,10.4z M21.6,15.4c0-0.2,0.2-0.3,0.3-0.3h0.3v4.8h-0.3c-0.2,0-0.3-0.2-0.3-0.3V15.4z M15.2,14c0.1,0,0.2,0,0.3-0.1c0.1,0,0.2-0.1,0.4-0.2l1,2.7c0.1,0.4,0.5,0.7,1,0.7h3.1v0.7h-3.1c-0.7,0-1.4-0.5-1.6-1.1L15.2,14z M13.6,12.8l2.5-0.9c0,0.4-0.1,0.8-0.4,1c0,0,0,0,0,0c-0.1,0.1-0.3,0.2-0.5,0.3c-0.2,0.1-0.3,0.1-0.5,0.1c0,0,0,0,0,0C14.3,13.3,13.9,13.1,13.6,12.8z M3.7,11.3l0.2,0.1l0.9,2.4l-0.6,0.2l-0.9-2.6L3.7,11.3z M1.7,9.5c0,0,0.1-0.1,0.3-0.2l17.3-6.3c0.5-0.2,1.1,0.1,1.3,0.6l0.4,1c0,0,0,0,0,0L21.1,5c0.2,0.5-0.1,1.1-0.6,1.3l-0.3,0.1C20,6.5,19.9,6.7,20,6.8C20.1,7,20.3,7.1,20.4,7l0.3-0.1c0.4-0.1,0.7-0.4,0.8-0.7l0.6,1.6c0.2,0.5-0.1,1.1-0.6,1.3L6.8,14.5c-0.5,0.2-1.1-0.1-1.3-0.6l-0.8-2.1C5.1,11.9,5.6,12,6.1,12c0.4,0,0.9-0.1,1.2-0.2l9.9-3.6c0.2-0.1,0.3-0.3,0.2-0.4c-0.1-0.2-0.3-0.3-0.4-0.2l-9.9,3.6c-0.6,0.2-1.7,0.2-2.3-0.1l-0.5-0.2c0,0,0,0,0,0l-0.4-0.2c0,0,0,0,0,0L2,9.8C1.8,9.7,1.7,9.6,1.7,9.5z"></path><path d="M18.1,7.5c0.1,0.1,0.2,0.2,0.3,0.2c0,0,0.1,0,0.1,0l0.6-0.2c0.2-0.1,0.3-0.3,0.2-0.4c-0.1-0.2-0.3-0.3-0.4-0.2l-0.6,0.2C18.1,7.2,18,7.4,18.1,7.5z"></path>
		</symbol>
		<symbol id="icon-clock" viewbox="0 0 24 24">
			<title>clock</title>
			<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path><path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path>
		</symbol>
		<symbol id="icon-wave" viewbox="0 0 24 24">
			<title>wave</title>
			<path d="M9.6,17.4c1,0.1,2,0.3,2.9,0.6c0,0,0,0,0,0l0,0c1.3,0.4,2.4,0.8,3.4,1.3c1.5,0.6,2.9,1.2,4.3,1.2c0.3,0,0.7,0,1-0.1c0,0,0,0,0,0l0,0c0.9-0.2,1.8-0.7,2.8-1.7l-1-1.1c-0.5,0.5-1,0.8-1.4,1c-1.1-1-2.6-2.9-2.1-4.4c0.6-2,2.8-3.2,2.8-3.2l1.8-1l-2-0.4c-0.1,0-7.3-1.4-9.8,5.7c-0.7-1.1-1-2.3-1-3.5c0-5.2,5.9-5.7,6.2-5.7l2.7-0.2l-2.5-1.2C17.4,4.5,10.5,1.3,5.5,6c-4,3.8-4,9.7-3.9,11.7C0.5,18.6,0,19.4,0,19.5l1.3,0.7C1.3,20.2,3.3,16.8,9.6,17.4z M19.8,11.1c-0.7,0.7-1.4,1.6-1.8,2.8c-0.6,1.9,0.6,3.8,1.7,5.1c-1-0.1-2-0.6-3.2-1.1c-0.9-0.4-1.9-0.8-3.1-1.2C14.6,12.2,17.7,11.2,19.8,11.1z M6.6,7.1c2.5-2.4,5.8-2.3,8-1.9c-2.4,0.9-4.8,2.9-4.8,6.6c0,1.5,0.4,3,1.2,4.2c-0.4-0.1-0.7-0.1-1.1-0.1c-3-0.3-5.1,0.2-6.7,0.9C3.1,14.6,3.4,10.1,6.6,7.1z"></path>
		</symbol>
		<symbol id="icon-thermometer" viewbox="0 0 24 24">
			<title>thermometer</title>
			<path d="M12.7,16.3V9.6h-1.5v6.7c-0.9,0.3-1.5,1.1-1.5,2.1c0,1.2,1,2.2,2.2,2.2c1.2,0,2.2-1,2.2-2.2	C14.2,17.4,13.6,16.6,12.7,16.3z M12,19.1c-0.4,0-0.7-0.3-0.7-0.7c0-0.4,0.3-0.7,0.7-0.7s0.7,0.3,0.7,0.7	C12.7,18.8,12.4,19.1,12,19.1z"></path><path d="M15.2,15V4.2C15.2,2.4,13.8,1,12,1S8.8,2.4,8.8,4.2V15c-0.9,0.9-1.5,2.1-1.5,3.4c0,2.6,2.1,4.7,4.7,4.7s4.7-2.1,4.7-4.7C16.7,17.1,16.1,15.9,15.2,15z M12,21.5c-1.8,0-3.2-1.4-3.2-3.2c0-1,0.4-1.9,1.2-2.5l0.3-0.2V4.2c0-0.9,0.8-1.7,1.7-1.7c0.9,0,1.7,0.8,1.7,1.7v11.5l0.3,0.2c0.8,0.6,1.2,1.5,1.2,2.5C15.2,20.1,13.8,21.5,12,21.5z"></path>
		</symbol>
		<symbol id="icon-direction" viewbox="0 0 100 100">
			<title>direction</title>
			<path d="M51.1,16c-0.5,0-1,0.3-1.2,0.8L25.6,82.3c-0.2,0.5,0,1.1,0.4,1.5c0.4,0.3,1.1,0.4,1.5,0L51.1,67l21.3,16.7c0.4,0.3,1.1,0.4,1.5,0c0.1,0,0.1-0.1,0.2-0.1c0.3-0.3,0.5-0.8,0.3-1.3L52.3,16.8C52.1,16.3,51.7,16,51.1,16z"></path>
		</symbol>
		<symbol id="icon-cross" viewbox="0 0 24 24">
			<title>cross</title>
			<path d="M22.8,3.3l-2.2-2.2L12,9.8L3.3,1.2L1.2,3.3L9.8,12l-8.7,8.7l2.2,2.2l8.7-8.7l8.7,8.7l2.2-2.2L14.2,12L22.8,3.3z"></path>
		</symbol>
		<symbol id="state-sunny" viewbox="0 0 80 80">
			<title>sunny</title>
			<path d="M25,20.31A13.12,13.12,0,1,1,11.88,33.44,13.13,13.13,0,0,1,25,20.31Z" fill="#FFEB3B"></path>
		</symbol>
		<symbol id="state-clearnight" viewbox="0 0 80 80">
			<title>clearnight</title>
			<path d="M32.35,39.08A11,11,0,0,1,21.27,28.24a10.72,10.72,0,0,1,4-8.33,13.33,13.33,0,1,0,.26,26.65,13.62,13.62,0,0,0,13-9.33A11.23,11.23,0,0,1,32.35,39.08Z" fill="#435965"></path>
		</symbol>
		<symbol id="state-cloudy" viewbox="0 0 80 80">
			<title>cloudy</title>
			<path d="M60.38,35.59a14.06,14.06,0,0,0-25.48-5.34,5.55,5.55,0,0,0-2.41-.56,5.62,5.62,0,0,0-5.63,5.63v0l-.94,0A10.31,10.31,0,0,0,15.63,45.62c0,.35,0,.69.05,1a6.55,6.55,0,0,0,.89,13H57.81a12.19,12.19,0,0,0,2.57-24.1Z" fill="#e1e1e1"></path>
		</symbol>
		<symbol id="state-partlycloudy" viewbox="0 0 80 80">
			<title>partly cloudy</title>
			<path d="M25,20.31A13.12,13.12,0,1,1,11.88,33.44,13.13,13.13,0,0,1,25,20.31Z" fill="#FFEB3B"></path><path d="M60.38,35.59a14.06,14.06,0,0,0-25.48-5.34,5.55,5.55,0,0,0-2.41-.56,5.62,5.62,0,0,0-5.63,5.63v0l-.94,0A10.31,10.31,0,0,0,15.63,45.62c0,.35,0,.69.05,1a6.55,6.55,0,0,0,.89,13H57.81a12.19,12.19,0,0,0,2.57-24.1Z" fill="#fff"></path>
		</symbol>
		<symbol id="state-partlycloudynight" viewbox="0 0 80 80">
			<title>partlycloudynight</title>
			<path d="M32.35,39.08A11,11,0,0,1,21.27,28.24a10.72,10.72,0,0,1,4-8.33,13.33,13.33,0,1,0,.26,26.65,13.62,13.62,0,0,0,13-9.33A11.23,11.23,0,0,1,32.35,39.08Z" fill="#435965"></path><path d="M60.38,35.59a14.06,14.06,0,0,0-25.48-5.34,5.55,5.55,0,0,0-2.41-.56,5.62,5.62,0,0,0-5.63,5.63v0l-.94,0A10.31,10.31,0,0,0,15.63,45.62c0,.35,0,.69.05,1a6.55,6.55,0,0,0,.89,13H57.81a12.19,12.19,0,0,0,2.57-24.1Z" fill="#e4e6e6"></path>
		</symbol>
		<symbol id="state-rain" viewbox="0 0 80 80">
			<title>rain</title>
			<path d="M60.38,35.59a14.06,14.06,0,0,0-25.48-5.34,5.55,5.55,0,0,0-2.41-.56,5.62,5.62,0,0,0-5.63,5.63v0l-.94,0A10.31,10.31,0,0,0,15.63,45.62c0,.35,0,.69.05,1a6.55,6.55,0,0,0,.89,13H57.81a12.19,12.19,0,0,0,2.57-24.1Z" fill="#a0b0b0"></path><path d="M35.36,54.71A1,1,0,0,0,34,55.1l-2.06,3.71a1,1,0,0,0,1.75,1l2.06-3.71A1,1,0,0,0,35.36,54.71Zm2.75-7-2.06,3.71a1,1,0,0,0,1.75,1l2.06-3.71a1,1,0,0,0-1.75-1Zm.69,15.41a1,1,0,0,0-1.36.39l-2.06,3.71a1,1,0,0,0,1.75,1l2.06-3.71A1,1,0,0,0,38.8,63.08Zm4.11-7.42a1,1,0,0,0-1.36.39L39.5,59.76a1,1,0,0,0,1.75,1L43.31,57A1,1,0,0,0,42.92,55.66ZM27.8,53.75a1,1,0,0,0-1.36.39l-2.06,3.71a1,1,0,0,0,1.75,1l2.06-3.71A1,1,0,0,0,27.8,53.75Zm-4.11,7.42a1,1,0,0,0-1.36.39l-2.06,3.71a1,1,0,0,0,1.75,1l2.06-3.71A1,1,0,0,0,23.69,61.17Zm7.56,1a1,1,0,0,0-1.36.39l-2.06,3.71a1,1,0,0,0,1.75,1l2.06-3.71A1,1,0,0,0,31.25,62.13Zm-4.12,7.42a1,1,0,0,0-1.36.39l-2.06,3.71a1,1,0,0,0,1.75,1l2.06-3.71A1,1,0,0,0,27.13,69.55Zm4.79-23.22a1,1,0,0,0-1.36.39L28.5,50.43a1,1,0,0,0,1.75,1l2.06-3.71A1,1,0,0,0,31.92,46.33Z" fill="#576a7e"></path>
		</symbol>
		<symbol id="state-thunders" viewbox="0 0 80 80">
			<title>thunders</title>
			<path d="M60.38,35.59a14.06,14.06,0,0,0-25.48-5.34,5.55,5.55,0,0,0-2.41-.56,5.62,5.62,0,0,0-5.63,5.63v0l-.94,0A10.31,10.31,0,0,0,15.63,45.62c0,.35,0,.69.05,1a6.55,6.55,0,0,0,.89,13H57.81a12.19,12.19,0,0,0,2.57-24.1Z" fill="#7a90a5"></path><path d="M45.67,56.26l-7.69,0L42.6,45.88H31.73L25.5,63h7.9L30.14,73.36Z" fill="#f0f0f0"></path>
		</symbol>
	</defs>
</svg>
<main class="theme-1">
	<header class="codrops-header">
		<div class="custom-select"></div>
	</header>
	
	<div class="content content--cam">
		<div data-type="youtube" data-video-id="lqmNApZXnGM"></div>
		<button class="btn btn--close" aria-label="Close Live Cam"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
	</div>
	<div class="content content--graph">
		<svg class="graph" viewbox="0 0 1440 800" preserveaspectratio="none">
			<defs>
				<lineargradient id="gradient1">
					<stop offset="0%" stop-color="#1231bb"></stop>
					<stop offset="100%" stop-color="#238DE0"></stop>
				</lineargradient>
				<lineargradient id="gradient2" x1="0" x2="0" y1="0" y2=".7" xlink:href="#gradient1"></lineargradient>
			</defs>
		</svg>
	</div>
	<!-- Button for toggling the live cam content -->
	<button class="btn btn--cam btn--hidden">
		<svg class="icon icon--cam icon--btn"><use xlink:href="#icon-cam"></use></svg>
		<span class="btn__text">Live Cam</span>
	</button>
</main>

<script src="/weiju2/Public/home/js/anime.min.js"></script>
<script src="/weiju2/Public/home/js/enquire.min.js"></script>
<script src="/weiju2/Public/home/js/catmullrom2bezier.js"></script>
<script src="/weiju2/Public/home/js/plyr.js"></script>
<script src="/weiju2/Public/home/js/main1.js"></script>

</body>
</html>