<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Moda Premium Wordpress Theme Home</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Clicker+Script' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Gafata' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


	<!-- Javascript
	================================================== -->

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="js/masonry.pkgd.min.js" type="text/javascript"></script>

<script type="text/javascript">

	 //<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $("#status").fadeOut(); // will first fade out the loading animation
            $("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
            var container = document.querySelector('#masonry');
			var msnry = new Masonry( container, {
				// options
				columnWidth: 40,
				itemSelector: '.item'
				});
        })
    //]]>

</script>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Primary Page Layout
================================================== -->
<div class="band upperdeck">
	<div class="container">
		<div class="eight columns upperdeck-lft alpha">
			Need help with an order? <strong>1 (800) Moda Mia</strong>
		</div>
		<div class="eight columns upperdeck-rgt omega">
			<ul class="inline">
				<li><a href="myaccount.php"><span>Sign In</span></a></li>
				<li><a href="myaccount.php"><span>My Account</span></a></li>
				<li><a href="#"><span>Customer Service</span></a></li>
				<li><a href="cart.php"><span class="shopcart-icon" data-icon="&#xe07a;"></span></a> <span>(4)</span></li>
				<li><a href="wishlist.php"><span class="wishlist-icon" data-icon="&#xe089;"></span></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="band header">
	<div class="container">
		<div class="six columns alpha">
			<a href="home2.php"><img src="images/logo.png" width="215" title="Moda Wordpress Theme" alt="Moda Wordpress Theme"/></a>
		</div>
		<div class="ten columns omega">
			<div class="search">
				<form>
					<input type="text" name="search" id="searchbox" value=""/></div>
				</form>
			<div class="nav">
				<ul id="main-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="page-aboutus.php">Pages</a></li>
					<li><a href="portfolio-fullwidth.php">Portfolio</a></li>
					<li><a href="blog-leftsidebar.php">Blog</a></li>
					<li><a href="#">Features</a></li>
					<li><a href="page-contactus.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>