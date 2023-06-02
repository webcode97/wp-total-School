<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.1.6
 * 
 * Theme and Plugin functions
 * Created by CMSMasters
 * 
 */


// Theme Settings Google Fonts List
if (!function_exists('cmsmasters_fonts_list')) {
	function cmsmasters_fonts_list() {
		$cmsmasters_option = total_school_get_global_options();
		
		
		$google_web_fonts = array();
		
		if (isset($cmsmasters_option['total-school' . '_google_web_fonts']) && is_array($cmsmasters_option['total-school' . '_google_web_fonts'])) {
			$google_web_fonts_array = $cmsmasters_option['total-school' . '_google_web_fonts'];
			
			
			foreach ($google_web_fonts_array as $google_web_font) {
				$google_web_font = explode('|', $google_web_font);
				
				$google_web_fonts[$google_web_font[0]] = $google_web_font[1];
			}
		}
		
		
		$local_fonts = array();
		
		if (class_exists('Cmsmasters_Custom_Fonts') && CMSMASTERS_CUSTOM_FONTS) {
			$local_fonts_query = new WP_Query(array(
				'post_type' => 'cmsmasters_font', 
				'orderby' => 'title', 
				'order' => 'ASC', 
				'posts_per_page' => -1 
			));
			
			
			if (count($local_fonts_query->posts) > 0) {
				foreach ($local_fonts_query->posts as $local_font) {
					$value = $local_font->ID . ':' . $local_font->post_title;
					
					$local_fonts[$value] = $local_font->post_title;
				}
			}
			
			wp_reset_postdata();
		}
		
		
		ksort($google_web_fonts);
		
		
		$fonts = array( 
			'' => esc_html__('None', 'total-school'), 
			'local' => $local_fonts, 
			'web' => $google_web_fonts 
		);
		
		
		return apply_filters('total_school_google_fonts_list_filter', $fonts);
	}
}


// Add google web fonts if empty
function total_school_add_google_web_fonts_first() {
	$font_google = get_option( 'cmsmasters_options_' . 'total-school' . '_font_google', array() );

	if ( ! empty( $font_google ) ) {
		return;
	}

	$fonts = array(
		'total-school' . '_google_web_fonts' => cmsmasters_google_fonts_list(),
		'total-school' . '_google_web_fonts_subset' => '',
	);

	update_option( 'cmsmasters_options_' . 'total-school' . '_font_google', $fonts );
}

add_action('init', 'total_school_add_google_web_fonts_first');


// Theme Settings Google Fonts List
if (!function_exists('cmsmasters_google_fonts_list')) {
	function cmsmasters_google_fonts_list() {
		$fonts = total_school_get_google_fonts_list();
		
		
		return $fonts;
	}
}



// Theme Settings Font Weights List
if (!function_exists('cmsmasters_font_weight_list')) {
	function cmsmasters_font_weight_list() {
		$list = array( 
			'normal' => 	'normal', 
			'100' => 		'100', 
			'200' => 		'200', 
			'300' => 		'300', 
			'400' => 		'400', 
			'500' => 		'500', 
			'600' => 		'600', 
			'700' => 		'700', 
			'800' => 		'800', 
			'900' => 		'900', 
			'bold' => 		'bold', 
			'bolder' => 	'bolder', 
			'lighter' => 	'lighter', 
		);
		
		
		return $list;
	}
}



// Theme Settings Font Styles List
if (!function_exists('cmsmasters_font_style_list')) {
	function cmsmasters_font_style_list() {
		$list = array( 
			'normal' => 	'normal', 
			'italic' => 	'italic', 
			'oblique' => 	'oblique', 
			'inherit' => 	'inherit', 
		);
		
		
		return $list;
	}
}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {
	function cmsmasters_color_picker_palettes() {
		$palettes = array( 
			'#797979', 
			'#df504b', 
			'#aaaaaa', 
			'#2f2f2f', 
			'#f8f8f8', 
			'#dfdfdf', 
			'#ffffff', 
			'#000000' 
		);
		
		
		return $palettes;
	}
}


// Theme Image Thumbnails Size
if (!function_exists('cmsmasters_image_thumbnail_list')) {
	function cmsmasters_image_thumbnail_list() {
		$list = total_school_get_image_thumbnail_list();
		
		
		return $list;
	}
}



// Theme Settings Color Schemes List
if (!function_exists('cmsmasters_color_schemes_list')) {
	function cmsmasters_color_schemes_list() {
		$list = total_school_all_color_schemes_list();
		
		
		unset($list['header']);
		
		unset($list['navigation']);
		
		unset($list['header_top']);
		
		
		$out = array_merge($list, total_school_custom_color_schemes_list());
		
		
		return $out;
	}
}

