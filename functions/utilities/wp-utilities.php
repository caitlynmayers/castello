<?php 

/***

WP Utilities 

This file is intended to contain functions that require 
the use of WordPress hooks including, but not limited to: 
'add_action'
'add_filter'
'add_support...'
'register...'

Please provide a basic description highlighting the purpose
of your usage for WordPress filters and/or actions.

***/

//	Head element output

	/* Title Attribute Formatting */
	function custom_title( $title, $sep ) {
		global $paged, $page;
		if ( is_feed() )
			return $title;
		$title .= get_bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );	
		return $title;
	}
	add_filter( 'wp_title', 'custom_title', 10, 2 );

	/* Remove Head Links */
	function remove_head_links() {
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'rel_canonical');
		remove_action('wp_head', 'start_post_rel_link');
		remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
	}
	add_action('init', 'remove_head_links');
	remove_action('wp_head', 'wp_generator');


//	Add theme support and/or register theme options

	/* Register Custom Image Sizes */
	add_theme_support('post-thumbnails');
	// add_image_size('sample', 500, 500, true);

	/*	Register Nav Menu Locations */
	register_nav_menus(array(
		'primary'	=>	'Primary Navigation'
	));


//	Required Functions (DO NOT EDIT)

	/*	IE styleshhet conditional output
		
		This function is required as part of our method for
		delivering specific stylesheets for IE users. The purpose 
		of the function is to properly wrap the enqueued stylesheet 
		link in a properly formatted HTML comment for IE.
	*/
	function neg_conditional($tag, $handle) {
		if($handle == 'ie9_up') {
			$tag = '<!-->' . $tag . '<!--';
		}
		return $tag;
	}
	add_filter('style_loader_tag', 'neg_conditional', 10, 2);