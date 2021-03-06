<!DOCTYPE html>


<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<div class="parallax-container">
		<div class="navbar-fixed"> 
			<nav>
				<div class="nav-wrapper cyan lighten-1">
					<a href="<?php echo site_url(); ?>" class="brand-logo">Omanova</a>
					<a href="#" data-target="nav-mobile" class="sidenav-trigger">
						<i class="material-icons">menu</i>
					</a>
					<ul class="right hide-on-med-and-down">
						<li><a href="<?php echo site_url(); ?>">Home</a></li>
						<li><a href="<?php echo get_post_type_archive_link('package'); ?>">Packages</a></li>
						<li><a href="<?php echo get_post_type_archive_link('attraction'); ?>">Attractions</a></li>
						<li><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
						<li><a href="<?php echo site_url('/contact-information'); ?>">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
		
		<div class="parallax"><img src="<?php echo get_theme_file_uri('img/muscat_center.jpg') ?>"></div>

		<ul id="nav-mobile" class="sidenav cyan lighten-1">
			<li><a href="<?php echo site_url(); ?>">Home</a></li>
			<li><a href="<?php echo get_post_type_archive_link('package'); ?>">Packages</a></li>
			<li><a href="<?php echo get_post_type_archive_link('attraction'); ?>">Attractions</a></li>
			<li><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
			<li><a href="<?php echo site_url('/contact-information'); ?>">Contact</a></li>
		</ul>
	</div>
</header>		
