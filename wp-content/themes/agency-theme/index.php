
<?php get_header(); ?>

<hr class="w-75 my-5">

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div id="attractionsSliderIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#attractionsSliderIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#attractionsSliderIndicators" data-slide-to="1"></li>
					<li data-target="#attractionsSliderIndicators" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active">
					  	<img class="d-block w-100" src="<?php echo get_theme_file_uri('img/41117494141_a2809ae23e_o.jpg'); ?>" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
					    	<h5 class="text-dark">Sultan Qaboos Mosque</h5>
					  	</div>
					</div>
					<div class="carousel-item">
					  	<img class="d-block w-100" src="<?php echo get_theme_file_uri('img/39390331741_56abc913e4_o.jpg'); ?>" alt="Second slide">
					  	<div class="carousel-caption d-none d-md-block">
					    	<h5 class="text-dark">Sultan Qaboos Mosque</h5>
					  	</div>
					</div>
					<div class="carousel-item">
					  	<img class="d-block w-100" src="<?php echo get_theme_file_uri('img/39394819962_616c85c251_o.jpg'); ?>" alt="Third slide">
					  	<div class="carousel-caption d-none d-md-block">
					    	<h5 class="text-dark">Sultan Qaboos Mosque</h5>
					  	</div>
					</div>
				</div>

				<a class="carousel-control-prev" href="#attractionsSliderIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	
</div>

<hr class="w-75 my-5">

<div class="container d-flex justify-content-around">
	<?php
		$popularPackages = new WP_Query(array(
			'posts_per_page' => 3,
			'post_type' => 'package',
			'orderby' => 'title',
			'order' => 'ASC')
		);
		
		while($popularPackages->have_posts()){
			$popularPackages->the_post();
	?>
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="<?php echo get_theme_file_uri('img/39394819962_616c85c251_o.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"><?php the_title(); ?></h5>
					<p class="card-text"><?php echo get_the_excerpt(); ?></p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
	<?php 
		}
	?>
</div>

<hr class="w-75 my-5">

<!-- Testimonials -->
<section>
    <h2>Testimonials from our guests...</h2>

	<?php 
		$testimonials = new WP_Query(array(
			'posts_per_page' => 3,
			'post_type' => 'testimonial')
		); 
	?>
	<div class="container">
		
		<div id="testimonialsSliderIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">	
				<?php
				$count = 0;
				while ($testimonials->have_posts()) {
					$testimonials->the_post(); ?>
					<li data-target="#testimonialsSliderIndicators" data-slide-to="<?php echo $count; ?>"
						<?php if($count == 0) echo 'class="active"' ?> ></li>
				<?php
					$count++;
				} ?>
			</ol>
			<div class="carousel-inner">
			<?php
			$count = 0;
				while ($testimonials->have_posts()) {
					$testimonials->the_post(); ?>		
				    <div class="carousel-item <?php if($count == 0) echo ' active'; ?>">
				    	<img class="d-block w-100" src="<?php the_post_thumbnail('testimonial-img'); ?>" alt="Thumbnail">
				       	<div class="carousel-caption d-none d-md-block">
		    				<p class="quote">
		    					<?php echo '"'.get_field('quote').'"'; ?>
	    						<br>
	    						<span class="guest"><?php echo get_field('guest_name'); ?></span> 
		    				</p>
		    				
		  				</div> 
				    </div>
			    <?php
			    	$count++;
				} ?>
	    </div>
	    	
    </div>
</section>


<?php get_footer(); ?>