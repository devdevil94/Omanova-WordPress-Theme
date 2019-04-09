<?php get_header(); ?>

 
<div class="container">
	<h4>Packages</h4>
<?php 
  		while (have_posts()) {
			the_post();
			
			$modalTargetId = get_the_ID().'-modal';
			if (has_post_thumbnail())
			$thumbUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail_name')[0];
?>
			<div class="row package">
				<div class="col xl5 l5 m12 s12 package-image">
					<img class="responsive-img modal-trigger"
					data-target="<?php echo $modalTargetId ?>" src="<?php echo $thumbUrl ?>">
				</div>
				<div class="col xl7 l7 m12 s12 package-content">
					<h5 class="modal-trigger" data-target="<?php echo $modalTargetId ?>"><?php the_title() ?></h5>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Doloremque, ipsum? Magnam reiciendis unde<br>
						<span><i class="material-icons pink-text text-lighten-1">access_time</i> Duration: 5 Days/4 Nights </span><br>
						<span><i class="material-icons pink-text text-lighten-1">attach_money</i> Price (per pax): $500 </span><br>
						<a class="btn-flat right btn-small amber-text text-lighten-5 cyan lighten-1 modal-trigger" data-target="<?php echo $modalTargetId ?>">View Details</a>
					</p>
				</div>
			</div>
			<div id="<?php echo $modalTargetId ?>" class="modal modal-fixed-footer">
				<div class="modal-content">
					<h4 class="center-align"><?php the_title() ?></h4>
					<img class="responsive-img" src="<?php echo $thumbUrl ?>">
					<?php the_content() ?>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-close waves-effect cyan lighten-1 btn-flat">Book</a>
				</div>
			</div>

<?php 
    	}
  		//echo paginate_links();
?> 
</div>


<?php get_footer(); ?>