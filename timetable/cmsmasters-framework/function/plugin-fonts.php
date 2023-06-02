<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.5
 * 
 * Timetable Fonts Rules
 * Created by CMSMasters
 * 
 */


function total_school_timetable_fonts($custom_css) {
	$cmsmasters_option = total_school_get_global_options();
	
	
	$custom_css .= "
/***************** Start Timetable Font Styles ******************/

	/* Start Content Font */
	table.tt_timetable th,
	table.tt_timetable .event, 
	table.tt_timetable .event a, 
	table.tt_timetable .event .hours, 
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_content_font_google_font']) . $cmsmasters_option['total-school' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_content_font_font_style'] . ";
	}
	
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		text-transform: none;
	}
	
	table.tt_timetable .event .after_hour_text,
	table.tt_timetable .event, 
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] - 1) . "px;
	}
	
	table.tt_timetable .event a, 
	table.tt_timetable .event .event_header {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] + 1) . "px;
	}
	/* Finish Content Font */

	
	/* Start H3 Font */
	.event_layout_4 table.tt_timetable .event .hours {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h3_font_google_font']) . $cmsmasters_option['total-school' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H5 Font */
	.tt_tabs_navigation li a {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h5_font_google_font']) . $cmsmasters_option['total-school' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	ul.tt_upcoming_events li .tt_upcoming_events_event_container,
	table.tt_timetable .event .event_header {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h6_font_google_font']) . $cmsmasters_option['total-school' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.ui-tabs .tt_tabs_navigation.ui-widget-header li a,
	.tabs_box_navigation .tabs_box_navigation_selected, 
	table.tt_timetable .event .event_hour_booking_wrapper .event_hour_booking, 
	.tt_booking a.tt_btn {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_button_font_google_font']) . $cmsmasters_option['total-school' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_button_font_text_transform'] . ";
	}
	
	.ui-tabs .tt_tabs_navigation.ui-widget-header li a,
	.tabs_box_navigation .tabs_box_navigation_selected {
		line-height:20px;
	}
	/* Finish Button Font */
	

/***************** Finish Timetable Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('total_school_theme_fonts_filter', 'total_school_timetable_fonts');

