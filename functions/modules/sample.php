<?php

/***

Modular Theme Functions

The modules directory is designed to help encourage and support
more maintainable function utilization within the theme. Large
groups of functions that are related should be separated into 
modules.

Modular functions should be used to pull any complex and/or 
lengthy PHP code out of the template and partial files.

The sample contained in this file is a function that will construct
a set of information that is associated with pages that are rendered
with indexing templates such as: 

	* index.php 
	* archive.php
	* category.php

This function allows us to eliminate the need for the archive.php
and category.php files for less complex blog and custom post type
archiving requirements.

***/

/***

Construct Index Object

This is an example of a modular function. These functions are 
used to build an index object.

***/

function get_index_attributes() {
	$index = new stdClass;
	$index->is_blog_home = is_blog_home();
	$index->page_type = get_index_page_type();
	$index->header_output = get_index_header_output($index->is_blog_home, $index->page_type);

	return $index;
}

// Is blog homepage
function is_blog_home() {
	$is_blog_home = is_home() ? true: false;
	return $is_blog_home;
}

// 	Index page type
function get_index_page_type() {
	$index_page_type = (object) array();
	$index_page_type->is_blog_category = is_category() ? true: false;
	$index_page_type->is_blog_tag = is_tag() ? true: false;
	$index_page_type->is_blog_day = is_day() ? true: false;
	$index_page_type->is_blog_month = is_month() ? true: false;
	$index_page_type->is_blog_year = is_year() ? true: false;
	$index_page_type->is_blog_author = is_author() ? true: false;

	return $index_page_type;
}

//	Index header output
function get_index_header_output($is_blog_home, $index_page_type) {
	if($is_blog_home) {
		$index_headline = 'Blog Index';
	} else {
		if($index_page_type->is_blog_category) {
			$category = single_term_title("", false);
			$index_headline = 'Archives for the "' . $category . '" Category';
		} elseif($index_page_type->is_blog_tag) {
			$tag = single_term_title("", false);
			$index_headline = 'Archives for the "' . $tag . '" Category';
		} elseif($index_page_type->is_blog_day) {
			$index_headline = 'Archive for ' . get_the_time('F jS, Y');	
		} elseif($index_page_type->is_blog_month) {
			$index_headline = 'Archive for ' . get_the_time('F Y');	
		} elseif($index_page_type->is_blog_year) {
			$index_headline = 'Archive for ' . get_the_time('Y');	
		} elseif($index_page_type->is_blog_author) {
			$index_headline = 'Author Archive';	
		} else {
			$index_headline = 'Blog Archives';
		}				
	}
	return $index_headline;
}