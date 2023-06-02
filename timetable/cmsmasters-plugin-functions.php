<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.1.1
 * 
 * Timetable Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
total_school_locate_template('timetable/cmsmasters-framework/function/plugin-colors.php', true);

total_school_locate_template('timetable/cmsmasters-framework/function/plugin-fonts.php', true);

total_school_locate_template('timetable/cmsmasters-framework/admin/plugin-settings.php', true);

total_school_locate_template('timetable/cmsmasters-framework/admin/plugin-options.php', true);


if (CMSMASTERS_CONTENT_COMPOSER) {
	total_school_locate_template('timetable/cmsmasters-framework/cmsmasters-c-c/filters/plugin-c-c-atts-filters.php', true);
	
	total_school_locate_template('timetable/cmsmasters-framework/cmsmasters-c-c/shortcodes/plugin-shortcodes.php', true);
}



/* Register CSS Styles and Scripts */
function total_school_timetable_register_styles_scripts() {
	wp_dequeue_style('timetable_sf_style');
	
	wp_dequeue_style('timetable_style');
	
	wp_dequeue_style('timetable_event_template');
	
	wp_dequeue_style('timetable_responsive_style');
	
	
	wp_enqueue_style('cmsmasters-timetable-style', get_template_directory_uri() . '/timetable/cmsmasters-framework/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('cmsmasters-timetable-adaptive', get_template_directory_uri() . '/timetable/cmsmasters-framework/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('cmsmasters-timetable-rtl', get_template_directory_uri() . '/timetable/cmsmasters-framework/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
}

add_action('wp_enqueue_scripts', 'total_school_timetable_register_styles_scripts');




/* Script for Admin */
function total_school_timetable_admin_scripts() {
	wp_enqueue_script('cmsmasters_timetable_settings_js_toggle', get_template_directory_uri() . '/timetable/cmsmasters-framework/admin/js/plugin-settings-toggle.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('cmsmasters_timetable_settings_js_toggle', 'cmsmasters_settings', array( 
		'shortname' => 	'total-school' 
	));
	
	wp_enqueue_script('cmsmasters_timetable_options_js_toggle', get_template_directory_uri() . '/timetable/cmsmasters-framework/admin/js/plugin-options-toggle.js', array('jquery'), '1.0.0', true);
}

add_action('admin_enqueue_scripts', 'total_school_timetable_admin_scripts');




/* Unregister Sidebar */
function total_school_timetable_unregister_sidebar() {
	unregister_sidebar('sidebar-event');
}

add_action('widgets_init', 'total_school_timetable_unregister_sidebar');

