<?php 
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.1
 * 
 * LearnPress Admin Settings
 * Created by CMSMasters
 * 
 */


/* Filters for Settings */
// Settings Names
function total_school_learnpress_option_name($cmsmasters_option_name, $tab) {
	if ($tab == 'lpr_course') {
		$cmsmasters_option_name = 'cmsmasters_options_' . 'total-school' . '_single_lpr_course';
	}
	
	
	return $cmsmasters_option_name;
}

add_filter('cmsmasters_option_name_filter', 'total_school_learnpress_option_name', 10, 2);


// Add Settings
function total_school_learnpress_add_global_options($cmsmasters_option_names) {
	$cmsmasters_option_names[] = array( 
		'cmsmasters_options_' . 'total-school' . '_single_lpr_course', 
		total_school_options_single_fields('lpr_course') 
	);
	
	
	return $cmsmasters_option_names;
}

add_filter('cmsmasters_add_global_options_filter', 'total_school_learnpress_add_global_options');


// Get Settings
function total_school_learnpress_get_global_options($cmsmasters_option_names) {
	array_push($cmsmasters_option_names, 'cmsmasters_options_' . 'total-school' . '_single_lpr_course');
	
	
	return $cmsmasters_option_names;
}

add_filter('cmsmasters_get_global_options_filter', 'total_school_learnpress_get_global_options');


// Single Posts Settings
function total_school_learnpress_options_single_tabs($tabs) {
	$tabs['lpr_course'] = esc_attr__('Course', 'total-school');
	
	
	return $tabs;
}

add_filter('cmsmasters_options_single_tabs_filter', 'total_school_learnpress_options_single_tabs');


function total_school_learnpress_options_single_sections($sections, $tab) {
	if ($tab == 'lpr_course') {
		$sections = array();
		
		$sections['lpr_course_section'] = esc_attr__('LearnPress Course Options', 'total-school');
	}
	
	
	return $sections;
}

add_filter('cmsmasters_options_single_sections_filter', 'total_school_learnpress_options_single_sections', 10, 2);


function total_school_learnpress_options_single_fields($options, $tab) {
	if ($tab == 'lpr_course') {
		$options[] = array( 
			'section' => 'lpr_course_section', 
			'id' => 'total-school' . '_lpr_post_layout', 
			'title' => esc_html__('Layout Type', 'total-school'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lpr_course_section', 
			'id' => 'total-school' . '_lpr_course_title', 
			'title' => esc_html__('Course Title', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'),  
			'type' => 'checkbox', 
			'std' => 1
		);
		
		$options[] = array( 
			'section' => 'lpr_course_section', 
			'id' => 'total-school' . '_lpr_course_image', 
			'title' => esc_html__('Course Featured Image', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'),  
			'type' => 'checkbox', 
			'std' => 1
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_single_fields_filter', 'total_school_learnpress_options_single_fields', 10, 2);

