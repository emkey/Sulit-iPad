<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Sulit.com.ph</title>

  		<meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="cleartype" content="on">
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="APP TITLE">
    
		<link rel="stylesheet" href="stylesheets/app.css">
		<link rel="stylesheet" href="stylesheets/overwrite.css">
		<link rel="stylesheet" href="stylesheets/styles.css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="javascripts/vendor/custom.modernizr.js"></script>
		<script src="javascripts/vendor/jquery.mobile-menu.js"></script>
		<script>
			$(function(){
				$("body").mobile_menu({
					menu: ['#main-nav ul', '#secondary-nav ul'],
      		menu_width: 260,
      		prepend_button_to: '#mobile-bar'
				});
			});
		</script>
</head>
<body>
		<header>
			<nav id="mobile-bar" class="top-bar">
				
				<h1 class="logo">Sulit.com.ph</h1>
				<div id="searchbar">
					<input type="text" id="searchfield" placeholder="Ano Hanap Mo" />
					<a href="#" id="location-button">Location</a>
				</div>
				<a href="" id="postad-button">
					Post a free Ad
				</a>
			</nav>
			
			<nav id="main-nav">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Nav 2</a></li>
					<li><a href="#">Nav 3</a></li>
					<li><a href="#">Nav 4</a></li>
					<li><a href="#">Nav 5</a></li>
					<li><a href="#">Nav 6</a></li>
				</ul>
			</nav>
			
			<nav id="secondary-nav">
				<ul>
					<li><a href="#">Secondary Nav 1</a></li>
					<li><a href="#">Secondary Nav 2</a></li>
					<li><a href="#">Secondary Nav 3</a></li>
					<li><a href="#">Secondary Nav 4</a></li>
					<li><a href="#">Secondary Nav 5</a></li>
					<li><a href="#">Secondary Nav 6</a></li>
				</ul>
			</nav>
		</header>