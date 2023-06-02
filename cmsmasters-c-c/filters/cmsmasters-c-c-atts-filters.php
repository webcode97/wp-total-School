<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.7
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */


/* Register Admin Panel JS Scripts */
function total_school_register_admin_js_scripts() {
	global $pagenow;
	
	$cmsmasters_option = total_school_get_global_options();
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('composer-shortcodes-extend', get_template_directory_uri() . '/cmsmasters-c-c/js/cmsmasters-c-c-shortcodes-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
			'portfolio_hover_icon' => 				esc_attr__('Hover Icon', 'total-school'), 
			'portfolio_hover_icon_descr' => 		esc_attr__('Choose icon for hover on project', 'total-school'), 
			'profiles_hover_icon' => 				esc_attr__('Hover Icon', 'total-school'), 
			'profiles_hover_icon_descr' => 			esc_attr__('Choose icon for hover on profile image', 'total-school'), 
			'heading_tablet_check' => 				esc_attr__('Font size for small tablet', 'total-school'), 
			'heading_tablet_font_size' => 			esc_attr__('Tablet font size', 'total-school'), 
			'heading_tablet_line_height' => 		esc_attr__('Tablet line height', 'total-school'), 
			'quote_field_color_title' => 			esc_attr__('Color', 'total-school'), 
			'quote_field_color_descr' => 			esc_attr__('Choose color for this quote', 'total-school'), 
			'timetable_field_box_bd_color_title' => 	esc_attr__('Timetable box border color', 'total-school'),
			
			
			/* Timetable Default Colors */
			'box_bg_color' => 					$cmsmasters_option['total-school' . '_default' . '_bg'], 
			'box_bd_color' => 					$cmsmasters_option['total-school' . '_default' . '_border'], 
			'box_hover_bg_color' => 			$cmsmasters_option['total-school' . '_default' . '_link'], 
			'box_txt_color' => 					$cmsmasters_option['total-school' . '_default' . '_color'], 
			'box_hover_txt_color' => 			"rgba(" . cmsmasters_color2rgb($cmsmasters_option['total-school' . '_default' . '_alternate']) . ", 0.99)", 
			'box_hours_txt_color' => 			$cmsmasters_option['total-school' . '_default' . '_link'], 
			'box_hours_hover_txt_color' => 		$cmsmasters_option['total-school' . '_default' . '_bg'], 
			'row1_bg_color' => 					"rgba(" . cmsmasters_color2rgb($cmsmasters_option['total-school' . '_default' . '_alternate']) . ", 0.99)", 
			'row1_txt_color' => 				$cmsmasters_option['total-school' . '_default' . '_color'], 
			'row2_bg_color' => 					$cmsmasters_option['total-school' . '_default' . '_bg'], 
			'row2_txt_color' => 				$cmsmasters_option['total-school' . '_default' . '_color'], 
			'booking_text_color' => 			"rgba(" . cmsmasters_color2rgb($cmsmasters_option['total-school' . '_default' . '_alternate']) . ", 0.99)", 
			'booking_bg_color' => 				$cmsmasters_option['total-school' . '_default' . '_heading'], 
			'booking_hover_text_color' => 		$cmsmasters_option['total-school' . '_default' . '_link'], 
			'booking_hover_bg_color' => 		$cmsmasters_option['total-school' . '_default' . '_heading'], 
			'booked_text_color' => 				"rgba(" . cmsmasters_color2rgb($cmsmasters_option['total-school' . '_default' . '_alternate']) . ", 0.99)", 
			'booked_bg_color' => 				$cmsmasters_option['total-school' . '_default' . '_heading'], 
			'unavailable_text_color' => 		"rgba(" . cmsmasters_color2rgb($cmsmasters_option['total-school' . '_default' . '_alternate']) . ", 0.99)", 
			'unavailable_bg_color' => 			$cmsmasters_option['total-school' . '_default' . '_heading'], 
			'available_slots_color' => 			$cmsmasters_option['total-school' . '_default' . '_color'], 
			
			
			/* LearnPress Plugin Translations */
			'learnpress_title' => 						esc_attr__('Courses', 'total-school'),
			'course_field_orderby_descr' => 			esc_attr__('Choose your courses order by parameter', 'total-school'),
			'course_field_categories_descr' => 			esc_attr__('Show courses associated with certain categories.', 'total-school'),
			'course_field_categories_descr_note' =>		esc_attr__('If you don\'t choose any course categories, all your courses will be shown', 'total-school'),
			'course_field_postsnumber_title' => 		esc_attr__('Courses Number', 'total-school'),
			'course_field_postsnumber_descr' => 		esc_attr__('Enter the number of courses to be shown in shortcode', 'total-school'),
			'course_field_postsnumber_descr_note' =>	esc_attr__('number, if empty - show all courses', 'total-school'),
			'course_field_col_count_descr' =>			esc_attr__('Choose number of courses per row', 'total-school') 
		));
	}
}

add_action('admin_enqueue_scripts', 'total_school_register_admin_js_scripts');


/**
* Heading
*/
add_filter('cmsmasters_custom_heading_atts_filter', 'cmsmasters_custom_heading_atts');

function cmsmasters_custom_heading_atts() {
	return array( 
		'type' => 					'h1', 
		'font_family' => 			'', 
		'font_size' => 				'', 
		'line_height' => 			'', 
		'tablet_check' =>  			'', 
		'tablet_font_size' => 		'', 
		'tablet_line_height' => 	'', 
		'font_weight' => 			'400', 
		'font_style' => 			'normal', 
		'icon' => 					'', 
		'text_align' => 			'left', 
		'color' => 					'', 
		'bg_color' => 				'', 
		'link' => 					'', 
		'target' => 				'', 
		'margin_top' => 			'0', 
		'margin_bottom' => 			'0', 
		'border_radius' => 			'', 
		'divider' => 				'', 
		'divider_type' => 			'short', 
		'divider_height' => 		'1', 
		'divider_style' => 			'solid', 
		'divider_color' => 			'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}


// Portfolio Shortcode Attributes Filter
add_filter('cmsmasters_portfolio_atts_filter', 'cmsmasters_portfolio_atts');

function cmsmasters_portfolio_atts() {
	return array( 
		'orderby' => 			'date', 
		'order' => 				'DESC', 
		'count' => 				'12', 
		'categories' => 		'', 
		'hover_icon' => 		'', 
		'layout' => 			'grid', 
		'layout_mode' => 		'perfect', 
		'columns' => 			'4', 
		'metadata_grid' => 		'', 
		'metadata_puzzle' => 	'', 
		'hover_icon' => 		'', 
		'gap' => 				'large', 
		'filter' => 			'', 
		'filter_text' => 		'', 
		'filter_cats_text' => 	'', 
		'sorting' => 			'', 
		'sorting_name_text' => 	'', 
		'sorting_date_text' => 	'', 
		'pagination' => 		'pagination', 
		'more_text' => 			'', 
		'classes' => 			'' 
	);
}


// Profiles Shortcode Attributes Filter
add_filter('cmsmasters_profiles_atts_filter', 'cmsmasters_profiles_atts');

function cmsmasters_profiles_atts() {
	return array( 
		'orderby' => 			'', 
		'order' => 				'', 
		'count' => 				'1000', 
		'categories' => 		'', 
		'layout' => 			'', 
		'columns' => 			'', 
		'hover_icon' => 		'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Single Quote Shortcode Attributes Filter
add_filter('cmsmasters_quote_atts_filter', 'cmsmasters_quote_atts');

function cmsmasters_quote_atts() {
	return array( 
		'image' => 		'', 
		'name' => 		'', 
		'subtitle' => 	'', 
		'color' => 		'', 
		'link' => 		'', 
		'website' => 	'', 
		'classes' => 	'' 
	);
}


// Timetable Shortcode Attributes Filter
add_filter('cmsmasters_timetable_atts_filter', 'cmsmasters_timetable_atts');

function cmsmasters_timetable_atts() {
	return array( 
		'event' => 								'', 
		'event_category' => 					'', 
		'hour_category' => 						'', 
		'columns' => 							'', 
		'measure' => 							'1', 
		'filter_style' => 						'dropdown_list', 
		'filter_kind' => 						'event', 
		'filter_label' => 						'All Events', 
		'filter_label_2' => 					'All Events Categories', 
		'time_format' => 						'H.i', 
		'time_format_custom' => 				'', 
		'hide_all_events_view' => 				'0', 
		'hide_hours_column' => 					'0', 
		'show_end_hour' => 						'0', 
		'event_layout' => 						'1', 
		'hide_empty' => 						'0', 
		'disable_event_url' => 					'0', 
		'text_align' => 						'center', 
		'id' => 								'', 
		'row_height' => 						'31', 
		'desktop_list_view' => 					'0', 
		'event_description_responsive' => 		'none', 
		'collapse_event_hours_responsive' => 	'0', 
		'colors_responsive_mode' => 			'0', 
		'export_to_pdf_button' => 				'0', 
		'generate_pdf_label' => 				'Generate PDF', 
		'show_booking_button' => 				'no', 
		'show_available_slots' => 				'no', 
		'available_slots_singular_label' => 	'{number_available}/{number_total} slot available', 
		'available_slots_plural_label' => 		'{number_available}/{number_total} slots available', 
		'default_booking_view' => 				'user', 
		'allow_user_booking' => 				'yes', 
		'allow_guest_booking' => 				'no', 
		'show_guest_name_field' => 				'yes', 
		'guest_name_field_required' => 			'yes', 
		'show_guest_phone_field' => 			'no', 
		'guest_phone_field_required' => 		'no', 
		'show_guest_message_field' => 			'no', 
		'guest_message_field_required' => 		'no', 
		'booking_label' => 						'Book now', 
		'booked_label' => 						'Booked', 
		'unavailable_label' => 					'Unavailable', 
		'booking_popup_label' => 				'Book now', 
		'login_popup_label' => 					'Log in', 
		'cancel_popup_label' => 				'Cancel', 
		'continue_popup_label' => 				'Continue', 
		'terms_checkbox' => 					'no', 
		'terms_message' => 						'Please accept terms and conditions', 
		'booking_popup_message' => 				'', 
		'booking_popup_thank_you_message' => 	'', 
		'box_bg_color' => 						'', 
		'box_bd_color' => 						'', 
		'box_hover_bg_color' => 				'', 
		'box_txt_color' => 						'', 
		'box_hover_txt_color' => 				'', 
		'box_hours_txt_color' => 				'', 
		'box_hours_hover_txt_color' => 			'', 
		'row1_bg_color' => 						'', 
		'row1_txt_color' => 					'', 
		'row2_bg_color' => 						'', 
		'row2_txt_color' => 					'', 
		'booking_text_color' => 				'', 
		'booking_bg_color' => 					'', 
		'booking_hover_text_color' => 			'', 
		'booking_hover_bg_color' => 			'', 
		'booked_text_color' => 					'', 
		'booked_bg_color' => 					'', 
		'unavailable_text_color' => 			'', 
		'unavailable_bg_color' => 				'', 
		'available_slots_color' => 				'', 
		'classes' => 							'' 
	);
}



/* Composer Lightbox Functions for LearnPress */
global $pagenow;


if ( 
	is_admin() && 
	$pagenow == 'post-new.php' || 
	($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
) {
	add_action('admin_footer', 'cmsmasters_learnpress_composer_shortcodes_init');
}


function cmsmasters_learnpress_composer_shortcodes_init() {
	if (wp_script_is('cmsmasters_content_composer_js', 'queue') && wp_script_is('cmsmasters_composer_lightbox_js', 'queue')) {
		cmsmasters_composer_learnpress();
		
		if (CMSMASTERS_LEARNPRESS) {
			cmsmasters_composer_lpr_course_categories();
		}
	}
}


function cmsmasters_composer_learnpress() {
	$out = "\n" . '<script type="text/javascript"> ' . "\n" . 
	'/* <![CDATA[ */' . "\n\t" . 
		'function cmsmasters_composer_learnpress() { ' . "\n\t\t";
	
	
	if (CMSMASTERS_LEARNPRESS) {
		$out .= "return 'true'; \n";
	} else {
		$out .= "return 'false'; \n";
	}
	
	
	$out .= '} ' . "\n" . 
		'cmsmasters_composer_learnpress();' . "\n" . 
	'/* ]]> */' . "\n" . 
	'</script>' . "\n\n";
	
	
	echo total_school_return_content($out);
}


function cmsmasters_composer_lpr_course_categories() {
	$categories = get_terms('course_category', array( 
		'hide_empty' => 0 
	));
	
	
	$out = "\n" . '<script type="text/javascript"> ' . "\n" . 
	'/* <![CDATA[ */' . "\n\t" . 
		'function cmsmasters_composer_lpr_course_categories() { ' . "\n\t\t" . 
			'return { ' . "\n";
	
	
	if (!empty($categories)) {
		foreach ($categories as $category) {
			$out .= "\t\t\t\"" . urldecode(esc_attr($category->slug)) . "\" : \"" . esc_html($category->name) . "\", \n";
		}
		
		
		$out = substr($out, 0, -3);
	}
	
	
	$out .= "\n\t\t" . '}; ' . "\n\t" . 
		'} ' . "\n" . 
	'/* ]]> */' . "\n" . 
	'</script>' . "\n\n";
	
	
	echo total_school_return_content($out);
}
