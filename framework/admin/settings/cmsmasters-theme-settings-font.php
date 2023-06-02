<?php 
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.1.6
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function total_school_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'total-school');
	$tabs['link'] = esc_attr__('Links', 'total-school');
	$tabs['nav'] = esc_attr__('Navigation', 'total-school');
	$tabs['heading'] = esc_attr__('Heading', 'total-school');
	$tabs['other'] = esc_attr__('Other', 'total-school');
	$tabs['google'] = esc_attr__('Google Fonts', 'total-school');
	
	return $tabs;
}


function total_school_options_font_sections() {
	$tab = total_school_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'total-school');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'total-school');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'total-school');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'total-school');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'total-school');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'total-school');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;
} 


function total_school_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = total_school_get_the_tab();
	}
	
	
	$cmsmasters_option = total_school_get_global_options();
	
	
	$options = array();
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Hind:400', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'total-school' . '_link_font', 
			'title' => esc_html__('Links Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Hind:400', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'total-school' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'total-school'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'none', 
			'choices' => total_school_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'total-school' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Slab:400,300,700', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'total-school' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Slab:400,300,700', 
				'font_size' => 			'12', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'total-school' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Slab:400,300,700', 
				'font_size' => 			'40', 
				'line_height' => 		'46', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'total-school' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Slab:400,300,700', 
				'font_size' => 			'30', 
				'line_height' => 		'36', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'total-school' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Slab:400,300,700', 
				'font_size' => 			'24', 
				'line_height' => 		'30', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'total-school' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Slab:400,300,700', 
				'font_size' => 			'20', 
				'line_height' => 		'26', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'total-school' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Slab:400,300,700', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'total-school' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Slab:400,300,700', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'total-school' . '_button_font', 
			'title' => esc_html__('Button Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Slab:400,300,700', 
				'font_size' => 			'14', 
				'line_height' => 		'44', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'total-school' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Hind:400', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'total-school' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Hind:400', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'total-school' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'total-school'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Slab:400,300,700', 
				'font_size' => 			'16', 
				'line_height' => 		'28', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'total-school' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'total-school'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => cmsmasters_google_fonts_list()
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'total-school' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'total-school'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'total-school') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'total-school') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'total-school') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'total-school') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'total-school') . '|' . 'greek', 
				esc_html__('Greek Extended', 'total-school') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'total-school') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'total-school') . '|' . 'japanese', 
				esc_html__('Korean', 'total-school') . '|' . 'korean', 
				esc_html__('Thai', 'total-school') . '|' . 'thai', 
				esc_html__('Bengali', 'total-school') . '|' . 'bengali', 
				esc_html__('Devanagari', 'total-school') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'total-school') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'total-school') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'total-school') . '|' . 'hebrew', 
				esc_html__('Kannada', 'total-school') . '|' . 'kannada', 
				esc_html__('Khmer', 'total-school') . '|' . 'khmer', 
				esc_html__('Malayalam', 'total-school') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'total-school') . '|' . 'myanmar', 
				esc_html__('Oriya', 'total-school') . '|' . 'oriya', 
				esc_html__('Sinhala', 'total-school') . '|' . 'sinhala', 
				esc_html__('Tamil', 'total-school') . '|' . 'tamil', 
				esc_html__('Telugu', 'total-school') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return $options;	
}

