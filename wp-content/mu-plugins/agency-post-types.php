<?php 

	function agency_post_types(){
		//Package Post Type
		register_post_type('package', array( 
			'has_archive' => true,
			'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'),
			'rewrite' => array('slug' => 'packages'),
			'public' => true,
			'labels' => array(
				'name' => 'Packages',
				'add_new_item' => 'Add New Package',
				'edit_item' => 'Edit Package',
				'all_items' => 'All Packages',
				'singular_name' => 'Package'),
			'menu_icon' => 'dashicons-calendar' 
		));

		//Testimonial Post Type
		register_post_type('testimonial', array(
			'supports' => array('custom-fields', 'thumbnail'),
			'rewrite' => array('slug' => 'testimonials'),
			'public' => true,
			'labels' => array(
				'name' => 'Testimonials',
				'add_new_item' => 'Add New Testimonial',
				'edit_item' => 'Edit Testimonial',
				'all_items' => 'All Testimonials',
				'singular_name' => 'Testimonial'),
			'menu_icon' => 'dashicons-businessman' 
		));
	}
	//'title', 'editor',
	add_action( 'init', 'agency_post_types');
?>