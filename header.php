<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Главная</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/thumbs.css">
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css">

	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/sForm.js"></script>
	<script src="js/jquery.ui.totop.js"></script>
	<script src="js/jquery.equalheights.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.iosslider.min.js"></script>
	<script src="fancybox/source/jquery.fancybox.pack.js"></script>
	<script>
	$(document).ready(function(){
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<style>
		@import 'https://fonts.googleapis.com/css?family=Lobster';
	</style>
	<style>

		.logo {
			width: 71px;
		}
		h2.brend {
			font-family: 'Lobster';
			width: 590px;
			text-align: center;
			font-size: 48px;
			vertical-align: top;
			padding-top: 32px;
			font-weight: 500;
		}
		.left {
			float: left;
		}

		.right {
			float: right;
		}

		a.btn {
			margin-top: 4px;
		}

		.sf-menu > li > a:hover{
			cursor: pointer;
		}

		.fancybox img{
			width: 20%;
			padding: 5px;
		}
	</style>
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
			<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		</a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<link rel="stylesheet" media="screen" href="css/ie.css">
	<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<h1 id="logo" class="left">
						<a class="logo" href="/">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
					<h2 class="brend left">Союз отцов Брянщины</h2>
					<div class="menu_block ">
						<!-- <a href="#" class="donate">DONATE</a> -->
						<div class="clear"></div>
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li <?=$current['page1']?>><a href="/?url=page1">Главная</a></li>
								<li <?=$current['page2']?>><a href="/?url=page2">Галерея</a></li>
								<li <?=$current['page3']?>><a href="/?url=page3">Контакты</a></li>
								<!-- <li><a href="/?url=page4">Get Involved</a></li>
								<li><a href="/?url=page5-">Contacts</a></li> -->
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</header>
		