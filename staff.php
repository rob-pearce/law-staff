<?php

/*
Plugin Name: Staff
Plugin URI: http://www.lmhtechnology.com/law-firm-staff-plugin/
Description:  WordPress Plugin to keep track of information related to a law firm
Version: 1.0
Author: Rob Pearce rob@lmhtechnology.com
Author URI: http://www.lmhtechnology.com
License: GPL2
*/

/*-------------------------------------------------------------------------------------------*/
/* lmh_firm_staff Post Type */
/*-------------------------------------------------------------------------------------------*/
class lmh_firm_staff {

	function lmh_firm_staff() {
		add_action('init',array($this,'create_post_type'));
	}

	function create_post_type() {
		$labels = array(
			'name' => 'Staff',
			'singular_name' => 'Staff',
			'add_new' => 'Add New Staff',
			'all_items' => 'All Staff',
			'add_new_item' => 'Add New Staff',
			'edit_item' => 'Edit Staff',
			'new_item' => 'New Staff',
			'view_item' => 'View Staff',
			'search_items' => 'Search Staff',
			'not_found' =>  'No Staff found',
			'not_found_in_trash' => 'No Staff found in trash',
			'parent_item_colon' => 'Parent Staff:',
			'menu_name' => 'Staff'
		);
		$args = array(
			'labels' => $labels,
			'description' => "List of Firm staff",
			'public' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => true,
			'show_in_menu' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 20,
			'menu_icon' => 'dashicons-id',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('title','editor','author','thumbnail','revisions'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'staff'),
			'query_var' => true,
			'can_export' => true
		);
		register_post_type('lmh_firm_staff',$args);
	}
}

$lmh_firm_staff = new lmh_firm_staff();
