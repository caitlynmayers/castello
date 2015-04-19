<?php

/***

Primary Functions

For the sake of organization, this file should only include
require statements for the various types of function files 
that you are going to be using.

***/

// Enqueue Scripts & Stylesheets
require_once(trailingslashit(get_stylesheet_directory()) . 'functions/queue-scripts.php');

// Initialize Custom Post Types
require_once(trailingslashit(get_stylesheet_directory()) . 'functions/post-types.php');

// Initialize Custom Taxonomies
require_once(trailingslashit(get_stylesheet_directory()) . 'functions/taxonomies.php');

// Enqueue Utility Functions
require_once(trailingslashit(get_stylesheet_directory()) . 'functions/utilities/wp-utilities.php'); 
require_once(trailingslashit(get_stylesheet_directory()) . 'functions/utilities/global-utilities.php');

// Enqueue Modular Functions
require_once(trailingslashit(get_stylesheet_directory()) . 'functions/modules/sample.php'); 