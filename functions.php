<?php

	require_once ('lib/load-jquery.php');
	require_once ('lib/load-js.php');
	require_once ('lib/remove-header-junk.php');
  // require_once ('ies/html5reset.php');
  require_once ('lib/general.php');
  require_once ('lib/no-self-pings.php');
  require_once ('lib/remove-trackbacks-from-comments.php');

	//ADDING GOOGLE FONT
	function load_fonts() {
	  wp_register_style('fergus_fonts', 'https://fonts.googleapis.com/css?family=Titillium+Web:300,300i,400');
	  wp_enqueue_style( 'fergus_fonts');
	}
	add_action('wp_print_styles', 'load_fonts');

	// ADDING STYLES/SCRIPTS
	function add_scripts() {
	  wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ), '', true );
	  wp_register_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
	  wp_enqueue_style( 'bootstrap-style' );
		wp_register_style( 'hamburger-style', get_template_directory_uri() . '/assets/css/hamburgers.css');
		wp_enqueue_style( 'hamburger-style' );
		wp_register_style( 'featherlight-style', get_template_directory_uri() . '/assets/css/featherlight.css');
		wp_enqueue_style( 'featherlight-style' );
		wp_register_style( 'custom-style', get_template_directory_uri() . '/assets/css/screen.css');
		wp_enqueue_style( 'custom-style' );

		wp_register_script( 'script-jquery', get_template_directory_uri() . '/assets/js/jquery-1.9.1.min.js', '', true  );
		wp_enqueue_script( 'script-jquery' );
		wp_register_script( 'script-featherlight', get_template_directory_uri() . '/assets/js/featherlight.js', '', true  );
		wp_enqueue_script( 'script-featherlight' );
		wp_enqueue_script( 'vimeo-api', 'https://player.vimeo.com/api/player.js', true );
		wp_enqueue_script( 'vimeo-api' );
		wp_register_script( 'script-custom', get_template_directory_uri() . '/assets/js/script.js', '', true  );
		wp_enqueue_script( 'script-custom' );
	}
	add_action( 'wp_enqueue_scripts', 'add_scripts' );

	// GFORM SCROLL TO ERROR
	add_filter( 'gform_confirmation_anchor', '__return_true' );

	// FAVICON
	// function blog_favicon() {
	// echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'http://cdn.wpbeginner.com/favicon.ico" />';
	// }
	// add_action('wp_head', 'blog_favicon');

	// REMOVE EDITOR/YOAST METABOXES
	// function reset_editor() {
  //    global $_wp_post_type_features;
  //    $post_type="page";
  //    $feature = "editor";
  //    if ( !isset($_wp_post_type_features[$post_type]) ){}
  //    elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
  //    unset($_wp_post_type_features[$post_type][$feature]);
	// }
	// add_action("init","reset_editor");
	// function mamaduka_remove_metabox() {
  //   if ( ! current_user_can( 'edit_others_posts' ) )
  //     remove_meta_box( 'wpseo_meta', 'post', 'normal' );
	// }
	// add_action( 'add_meta_boxes', 'mamaduka_remove_metabox', 11 );


	function encode_email($e) {
		$output = "";
		for ($i = 0; $i < strlen($e); $i++) { $output .= '&#'.ord($e[$i]).';'; }
		return $output;
	}
