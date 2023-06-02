<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.1.1
 * 
 * LearnPress Fonts Rules
 * Created by CMSMasters
 * 
 */


function total_school_learnpress_fonts($custom_css) {
	$cmsmasters_option = total_school_get_global_options();
	
	
	$custom_css .= "
/***************** Start LearnPress Font Styles ******************/

	/* Start Content Font */
	.cmsmasters_learnpress_shortcode .lpr_course_post .cmsmasters_course_footer,
	.cmsmasters_learnpress_shortcode .lpr_course_post .cmsmasters_course_footer a {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_learnpress_shortcode .lpr_course_post .cmsmasters_course_origin_price {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] - 2) . "px;
	}
	/* Finish Content Font */


	/* Start H1 Font */
	.cmsmasters_course_title {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h1_font_google_font']) . $cmsmasters_option['total-school' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h1_font_text_decoration'] . ";
	}
	/* Finish H1 Font */	
	
	
	/* Start Button Font */
	#course-item-content-header .form-button.lp-button-back button,
	.learnpress-page .lp-button,
	.learnpress-page #lp-button,
	#learn-press-course .learn-press-course-wishlist,
	#learn-press-profile .learn-press-course-wishlist,
	#learn-press-course .course-summary-sidebar .course-sidebar-preview .lp-course-buttons button,
	#learn-press-profile #profile-content .lp-button,
	#checkout-payment #checkout-order-action button,
	#popup-course #popup-content .lp-button.completed {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_button_font_google_font']) . $cmsmasters_option['total-school' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_button_font_text_transform'] . ";
	}
	/* Finish Button Font */
	

/***************** Finish LearPress Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('total_school_theme_fonts_filter', 'total_school_learnpress_fonts');

