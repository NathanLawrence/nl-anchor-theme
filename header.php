<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="generator" content="Anchor CMS" />
		<!--Stylesheets-->
			<!--Font Awesome, from CDN-->
    		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
			<!--Compiled from Custom and Bootstrap LESS, so All Boostrap 3 commands will work!-->
			<link rel="stylesheet" type="text/css" href="<?php echo theme_url('css/bootstrap-nl.css'); ?>">
		<!--JS-->
			<!--JQuery from Google's CDN-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<!--Bootstrap JS-->
			<script src="<?php echo theme_url('js/bootstrap.min.js'); ?>"></script>
		<!--Page Title-->
		<title><?php echo page_title(); ?> | <?php echo site_name(); ?></title>
		
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.ico'); ?>" type="image/x-icon" />
		
		<!--Google Analytics Tracking Code-->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga')	
			ga('create', 'UA-24079898-1', 'auto');
			ga('send', 'pageview');
		</script>

		<!-- Add per-post CSS -->
		<?php if(article_css()): ?>
			<style><?php echo article_css(); ?></style>
		<?php endif; ?>
		
		<!-- Add per-post JS -->
		<?php if(article_js()): ?>
			<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>

	<body>
		<header>
			<div id="navigation" class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsemenu" aria-expanded="false">
						<span class="sr-only">Toggle Navigation Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="logo navbar-brand" href="<?php echo base_url(); ?>" title="<?php site_description(); ?>">
						<div id="logotext"><span class="nathan">Nathan</span> Lawrence</div>
					</a>
				</div>
				<?php if(has_menu_items()) : ?>
					<div class="collapse navbar-collapse" id="collapsemenu">
					    <nav role="main">
					    	<ul class="horizontalNavList nav navbar-nav">
					        <?php while(menu_items()) : ?>
					            <li><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
					        <?php endwhile; ?>
					        </ul>
					    </nav>
				    </div>
				<?php endif; ?>
			</div>
		</header>
		<div class="container">

