
<?php 
	function add_cdn_files(){
		wp_enqueue_style('materialize-css', '//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css');
		wp_enqueue_script('materialize-js', '//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');
		wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Raleway');
		wp_enqueue_style('material-icons', '//fonts.googleapis.com/icon?family=Material+Icons');
		wp_enqueue_style('font_awesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css');
	}

	function custom_styles_scripts(){
		wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false, microtime(), 'all');
		wp_enqueue_style('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), microtime(), 'all');	
	}

	function agency_adjust_queries($query){
		if (!is_admin() AND is_post_type_archive('package') AND $query->is_main_query()) {
			$query->set('orderby', 'title');
			$query->set('order', 'ASC');
			$query->set('posts_per_page', -1);
		}
	}

	function add_website_features(){
		add_theme_support( 'post-thumbnails' );
		add_image_size('testimonial-img', 80, 80, true);
	}

	add_action('wp_enqueue_scripts', 'add_cdn_files');
	add_action('wp_enqueue_scripts', 'custom_styles_scripts');
	add_action('pre_get_posts', 'agency_adjust_queries');
	add_action('after_setup_theme', 'add_website_features');
?>
