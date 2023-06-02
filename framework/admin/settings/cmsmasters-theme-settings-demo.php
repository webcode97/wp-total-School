<?php 
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.0
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function total_school_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'total-school');
	$tabs['export'] = esc_attr__('Export', 'total-school');
	
	
	return $tabs;
}


function total_school_options_demo_sections() {
	$tab = total_school_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'total-school');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'total-school');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function total_school_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = total_school_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => 'total-school' . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'total-school'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'total-school'), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => 'total-school' . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'total-school'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file", 'total-school'), 
			'type' => 'button', 
			'std' => esc_html__('Export Theme Settings', 'total-school'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

