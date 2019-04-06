<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header class="h-container d-flex flex-column" style="background-image: url(<?php echo get_theme_file_uri('/img/39390331741_56abc913e4_o.jpg'); ?>">
			<a class="navbar-brand text-white" href="#">Omanova</a>

			<div class="hero">
	            <h1>Tagline for the Company</h1>
	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut tempor enim.</p>
	        </div>

        	<nav class="navbar navbar-expand-lg bg-transparent">
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="navbar-collapse collapse justify-content-center" id="navbarNav">
					<ul class="navbar-nav mx-auto bg-transparent">
						<li class="nav-item">
					    	<a class="nav-link text-white active" href="<?php echo site_url(); ?>">Home</a>
						</li>
					    <li class="nav-item">
					        <a class="nav-link text-white" href="<?php echo get_post_type_archive_link('package'); ?>">Packages</a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link text-white" href="#">Attractions</a>
					    </li>	
						<li class="nav-item">
					        <a class="nav-link text-white" href="#">About</a>
					    </li>
						<li class="nav-item">
					        <a class="nav-link text-white" href="#">Contact Us</a>
					    </li>		    
					</ul>
				</div>
			</nav> 
    	</header>
