<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>
		 <?php
	if (function_exists('is_tag') && is_tag()) {
		single_tag_title("Tag Archive for "); echo '" - '; }
	elseif (is_archive()) {
		  wp_title(''); echo ' Archive - '; }
	elseif (is_search()) {
		   echo 'Search for "'.wp_specialchars($s).'" - '; }
	elseif (!(is_404()) && (is_single()) || (is_page() && !is_front_page())) {
		   wp_title(''); echo ' - '; }
	elseif (is_404()) {
		   echo 'Not Found - '; }
	if (is_home() || is_front_page()) {
		bloginfo('name'); echo ' - '; bloginfo('description'); }
	else {
		   bloginfo('name'); }
	if ($paged>1) {
	echo ' - page '. $paged; }
?>
	</title>
	<meta name="description" content="<?php echo of_get_option('site_description','no entry'); ?>">
	<link rel="shortcut icon" href="<?php echo of_get_option('site_favicon', 'no entry'); ?>" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

		<!-- CSS
  ================================================== -->
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

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

	<script type="text/javascript">

	 //<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded

            jQuery("#status").fadeOut(); // will first fade out the loading animation
            jQuery("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.

            var container = document.querySelector('#masonry');
			var msnry = new Masonry( container, {
				// options
				columnWidth: 40,
				itemSelector: '.item'
				});

			jQuery('#menu').slicknav({
				label: 'Menu',
				duration: 1000
			});

			jQuery('.viewport').mouseenter(function(e) {
			jQuery(this).children('a').children('img').animate({ left: '0', top: '0'}, 100);
			jQuery(this).children('a').children('span').fadeIn(200);
				}).mouseleave(function(e) {
			jQuery(this).children('a').children('img').animate({left: '-20', top: '-20'}, 100);
			jQuery(this).children('a').children('span').fadeOut(200);

			});



			// Using custom configuration
			jQuery(".additional-images").carouFredSel({
				items: 4,
				responsive: false,
				auto: false,
				height: null,
				align: "left",
					scroll : {
						items			: 2,
						duration		: 800,
						pauseOnHover	: true
					},
				swipe : {
					onTouch		: true
						},
				prev : {
					button	: "#foo2_prev",
					key		: "left"
					},
				next : {
					button	: "#foo2_next",
					key		: "right"
					},
			});

			jQuery("#scrolling").carouFredSel({
				items	: 4,
				responsive: true,
				scroll	: {
					items			: 2,
					duration		: 1000,
					timeoutDuration	: 2000
				},
				swipe :{
					onTouch		:true
				},
				auto	: false,
				prev	: "#scroll_prev",
				next	: "#scroll_next"
			});

			jQuery("#scroll_prev").hide();
			jQuery("#scroll_next").hide();

			jQuery(".scrollfocus").mouseenter( function(){

				jQuery("#scroll_prev").fadeIn('slow');
				jQuery("#scroll_next").fadeIn('slow');

			});

			jQuery(".scrollfocus").mouseleave( function(){

				jQuery("#scroll_prev").fadeOut('slow');
				jQuery("#scroll_next").fadeOut('slow');

			});

			jQuery('ul#lookbook-slider').slippry({
				// general elements & wrapper
				slippryWrapper: '<div class="slippry_box portfolio-slider" />',

				// options
				adaptiveHeight: true,
				start: 'random',
				loop: true,
				captionsSrc: 'li',
				captions: 'custom',
				captionsEl: '.external-captions',

				// transitions
				transition: 'horizontal',
				easing: 'linear',
				continuous: true,

				//slideshow
				auto: false,
			});

		})
    //]]>


	</script>

</head>

<body <?php body_class(); ?> style="<?php $background = of_get_option('site_background');

	if ($background){

		if($background['image']){
			echo 'background: '.$background['color'].' url('.$background['image'].') '.$background['repeat'].' '.$background['position'].' '.$background['attachment'].'  ';
		}

		else{
			echo 'background:'.$background['color'].' ';
		}

	}
?>
">

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<!-- Primary Page Layout
================================================== -->
<div class="band upperdeck">
	<div class="container">
		<div class="eight columns upperdeck-lft alpha">
			<?php echo of_get_option('site_message', 'no entry'); ?>
		</div>
		<div class="eight columns upperdeck-rgt omega">

		<?php wp_nav_menu(array(

						'menu'			=> 'toplinks',
						'items_wrap'	=> '<ul class="inline">%3$s<li><a href="cart.php"><span class="shopcart-icon" data-icon="&#xe07a;"></span></a> <span>(4)</span></li><li><a href="wishlist.php"><span class="wishlist-icon" data-icon="&#xe089;"></span></a></li></ul>',
						'depth'=> '0'

					));?>
		</div>
	</div>
</div>

<div class="band header">
	<div class="container">
		<div class="six columns alpha">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo of_get_option('site_logo'); ?>" width="215" title="<?php echo of_get_option('site_title'); ?>" alt="Moda Wordpress Theme"/></a>
		</div>
		<div class="ten columns omega">
			<div class="search">
				<form>
					<input type="text" name="search" id="searchbox" value=""/></div>
				</form>
			<div class="nav">
				<ul id="menu">
					<li><a href="/">Home</a></li>
					<li><a href="/shop">Shop</a></li>
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