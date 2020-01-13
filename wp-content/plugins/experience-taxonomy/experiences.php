<?php
/**
 * @package Experiences
 * @version 0.01
 */
/*
Plugin Name: Experiences
Plugin URI: leadershipintl.org
Description: This adds Experiences Taxonomy to Site.
Author: Jess Erickson
Version: 0.01
Author URI: http://spirographics.com
*/



/* Custom Post Type Start */

function create_posttype() {
register_post_type( 'Experience',
// CPT Options

array(
  'labels' => array(
   'name' => __( 'Experiences' ),
   'singular_name' => __( 'Experience' )
  ),
  'public' => true,
  'has_archive' => true,
  'rewrite' => array('slug' => 'experiences'),
 )
);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/* Custom Post Type End */

/*Custom Post type start*/

function post_type_experience() {

$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);

$labels = array(
'name' => _x('experiences', 'plural'),
'singular_name' => _x('experience', 'singular'),
'menu_name' => _x('Experiences', 'admin menu'),
'name_admin_bar' => _x('experience', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New news'),
'new_item' => __('New experience'),
'edit_item' => __('Edit experience'),
'view_item' => __('View experience'),
'all_items' => __('All experiences'),
'search_items' => __('Search experience'),
'not_found' => __('No experience found.'),
);

$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'experiences'),
'has_archive' => true,
'hierarchical' => true,
);
register_post_type('experience', $args);
}
add_action('init', 'post_type_experience');

/*Custom Post type end*/
