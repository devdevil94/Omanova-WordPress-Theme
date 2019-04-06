<?php get_header(); ?>

 
<div class="container">
	<ul>
  	<?php 
  		while (have_posts()) {
  			the_post(); 
    ?>

		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

  	<?php 
    	}
  		echo paginate_links();
  	?>
	</ul> 
</div>


<?php get_footer(); ?>