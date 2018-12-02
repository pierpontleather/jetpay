<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="content-wrapper">
			<div class=content>
				<header class="container">
				<?php Logo(array('size' => '150')); ?>
				<div class="header-menu">
					<a href="#">
						<div class="header-menu-primary">Services</div>
					</a>
					<a href="#">
						<div class="header-menu-primary">Company</div>
					</a>
					<a href="#">
						<div class="header-menu-primary">Blog</div>
					</a>
					<a href="#">
						<div class="header-menu-primary">Resources</div>
					</a>
				</div>
				</header>