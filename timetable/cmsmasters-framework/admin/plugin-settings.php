<?php 
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.0
 * 
 * Timetable Admin Settings
 * Created by CMSMasters
 * 
 */


/* Filters for Settings */
// Settings Names
function total_school_timetable_option_name($cmsmasters_option_name, $tab) {
	if ($tab == 'tt_event') {
		$cmsmasters_option_name = 'cmsmasters_options_' . 'total-school' . '_single_tt_event';
	}
	
	
	return $cmsmasters_option_name;
}

add_filter('cmsmasters_option_name_filter', 'total_school_timetable_option_name', 10, 2);


// Add Settings
function total_school_timetable_add_global_options($cmsmasters_option_names) {
	$cmsmasters_option_names[] = array( 
		'cmsmasters_options_' . 'total-school' . '_single_tt_event', 
		total_school_options_single_fields('tt_event') 
	);
	
	
	return $cmsmasters_option_names;
}

add_filter('cmsmasters_add_global_options_filter', 'total_school_timetable_add_global_options');


// Get Settings
function total_school_timetable_get_global_options($cmsmasters_option_names) {
	array_push($cmsmasters_option_names, 'cmsmasters_options_' . 'total-school' . '_single_tt_event');
	
	
	return $cmsmasters_option_names;
}

add_filter('cmsmasters_get_global_options_filter', 'total_school_timetable_get_global_options');


// Single Posts Settings
function total_school_timetable_options_single_tabs($tabs) {
	$tabs['tt_event'] = esc_attr__('Timetable Event', 'total-school');
	
	
	return $tabs;
}

add_filter('cmsmasters_options_single_tabs_filter', 'total_school_timetable_options_single_tabs');


function total_school_timetable_options_single_sections($sections, $tab) {
	if ($tab == 'tt_event') {
		$sections = array();
		
		$sections['tt_event_section'] = esc_attr__('Timetable Event Options', 'total-school');
	}
	
	
	return $sections;
}

add_filter('cmsmasters_options_single_sections_filter', 'total_school_timetable_options_single_sections', 10, 2);


function total_school_timetable_options_single_fields($options, $tab) {
	if ($tab == 'tt_event') {
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'total-school' . '_tt_event_hours', 
			'title' => esc_html__('Event Hours', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'total-school' . '_tt_event_hours_title', 
			'title' => esc_html__('Event Hours Title', 'total-school'), 
			'desc' => esc_html__('Enter a event hours block title', 'total-school'), 
			'type' => 'text', 
			'std' => 'Event Hours', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'total-school' . '_tt_event_details_title', 
			'title' => esc_html__('Event Details Title', 'total-school'), 
			'desc' => esc_html__('Enter a event details block title', 'total-school'), 
			'type' => 'text', 
			'std' => 'Event Details', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'total-school' . '_tt_event_cat', 
			'title' => esc_html__('Event Categories', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_single_fields_filter', 'total_school_timetable_options_single_fields', 10, 2);

