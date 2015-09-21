<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="generator" content="Anchor CMS" />
		<!--Stylesheets-->
			<!--Eric Meyer's Brilliant CSS Reset 2.0-->
			<link rel="stylesheet" type="text/css" href="<?php echo theme_url('css/reset.css'); ?>">
			<!--Basic site-wide stylesheet for fonts, etc.-->
			<link rel="stylesheet" type="text/css" href="<?php echo theme_url('css/styles.css'); ?>">
			<!--"Branding" CSS, including divs and spans for logo-->
			<link rel="stylesheet" type="text/css" href="<?php echo theme_url('css/nl-brand.css'); ?>">
		<!--Page Title-->
		<title><?php echo page_title(); ?> | <?php echo site_name(); ?></title>
		
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.ico'); ?>" type="image/x-icon" />
		
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
			<div id="navigation" class="verticalNav">
				<a class="logo" href="<?php echo base_url(); ?>" title="<?php site_description(); ?>">
					<div id="logotext"><span class="nathan">Nathan</span> Lawrence</div>
				</a>
				<?php if(has_menu_items()) : ?>
				    <nav role="main">
				    	<ul class="verticalNavList">
				        <?php while(menu_items()) : ?>
				            <li><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
				        <?php endwhile; ?>
				        </ul>
				    </nav>
				<?php endif; ?>
				<div id="navFooter">
					<div class="anchorCitation">Proud member of the <a href="http://anchorcms.com/">Anchor CMS</a> community. Fork my theme at <a href="https://github.com/NathanLawrence/nl-anchor-theme">GitHub</a>.</div>
				</div>
			</div>
		</header>

