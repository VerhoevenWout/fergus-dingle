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
