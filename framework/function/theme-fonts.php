<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.1.2
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function total_school_theme_fonts() {
	$cmsmasters_option = total_school_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.1.2
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */ 
	#wp-calendar tbody td, 
	#wp-calendar tbody th, 
	.widget_rss ul li .rsswidget, 
	.widget_recent_comments ul li a, 
	.widget_recent_entries ul li a, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li p,  
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont a, 
	.cmsmasters_open_profile .profile_sidebar .cmsmasters_likes a > span, 
	.cmsmasters_open_profile .profile_sidebar .cmsmasters_comments a > span, 
	.cmsmasters_open_profile .profile_sidebar .cmsmasters_profile_category a, 
	.cmsmasters_open_profile .profile_sidebar .cmsmasters_profile_tags a, 
	.cmsmasters_open_project .project_sidebar .cmsmasters_likes a > span, 
	.cmsmasters_open_project .project_sidebar .cmsmasters_comments a > span, 
	.cmsmasters_open_project .project_sidebar .cmsmasters_project_category a, 
	.cmsmasters_open_project .project_sidebar .cmsmasters_project_tags a, 
	body, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title, 
	.header_top a, 
	.header_top, 
	.top_line_nav > li > a,
	.top_line_nav ul li a {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_content_font_google_font']) . $cmsmasters_option['total-school' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_content_font_font_style'] . ";
	}
	
	.header_top a, 
	.header_top, 
	.top_line_nav > li > a, 
	.top_line_nav ul li a {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_content_font_line_height'] - 4) . "px;
	}
	
	.top_line_nav > li > a {
		letter-spacing:1px;
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter_subtitle {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_campaigns .campaign .cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_content_font_line_height'] + 3) . "px;
	}
	
	#page .select2-container .select2-choice {
		font-weight:" . $cmsmasters_option['total-school' . '_content_font_font_weight'] . ";
	}
	
	#wp-calendar tbody td, 
	#wp-calendar tbody th {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_content_font_line_height'] - 2) . "px;
		font-weight:400; /* static */
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li p {
		line-height:" . ((int) $cmsmasters_option['total-school' . '_content_font_line_height'] - 6) . "px;
	}
	
	.widget_rss ul li .rsswidget, 
	.widget_recent_entries ul li a, 
	.widget_recent_comments ul li a, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li * , 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont a {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_footer_default .footer_custom_html {
		line-height:" . ((int) $cmsmasters_option['total-school' . '_content_font_line_height'] - 8) . "px;
	}
	
	.cmsmasters_open_profile .profile_sidebar .profile_details_item .profile_details_item_title, 
	.cmsmasters_open_profile .profile_sidebar .profile_features_item .profile_features_item_title, 
	.cmsmasters_open_project .project_sidebar .project_details_item .project_details_item_title, 
	.cmsmasters_open_project .project_sidebar .project_features_item .project_features_item_title, 
	.footer_inner .footer_copyright { 
		line-height:" . $cmsmasters_option['total-school' . '_content_font_line_height'] . "px;
	}
	
	.share_wrap {
		line-height:20px; /* static */
	}
	
	.cmsmasters_open_profile .profile_sidebar .cmsmasters_profile_category a, 
	.cmsmasters_open_profile .profile_sidebar .cmsmasters_profile_tags a, 
	.cmsmasters_open_project .project_sidebar .cmsmasters_project_category a, 
	.cmsmasters_open_project .project_sidebar .cmsmasters_project_tags a {
		text-transform:none;
	}
	
	@media only screen and (max-width: 540px) {
		#page .post_nav a {
			font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_content_font_google_font']) . $cmsmasters_option['total-school' . '_content_font_system_font'] . ";
			font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] + 2) . "px;
			line-height:" . $cmsmasters_option['total-school' . '_content_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['total-school' . '_content_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['total-school' . '_content_font_font_style'] . ";
		}
	}
	/* Finish Content Font */


	/* Start Link Font */
	a,
	.subpage_nav > strong,
	.subpage_nav > span,
	.subpage_nav > a {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_link_font_google_font']) . $cmsmasters_option['total-school' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_link_font_text_decoration'] . ";
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option['total-school' . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	.navigation > li > a, 
	.footer_nav > li > a {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_nav_title_font_google_font']) . $cmsmasters_option['total-school' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_nav_title_font_text_transform'] . ";
	}
	
	.footer_nav > li > a {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_nav_title_font_font_size'] - 2) . "px;
	}
	
	.mid_nav > li > a .nav_title:before {
		font-size:20px; /* static */
	}

	.bot_nav > li > a .nav_title:before {
		font-size:14px; /* static */	
	}
	
	.navigation li > a .nav_subtitle, 
	.navigation li > a .nav_tag {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_nav_title_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_nav_title_font_line_height'] - 2) . "px;	
		font-weight:800;
		text-transform:uppercase;
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.navigation .menu-item-mega-container > ul > li > a, 
	.navigation ul li a {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['total-school' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_nav_dropdown_font_text_transform'] . ";
	}
	
	.navigation .menu-item-mega-container > ul > li > a {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_nav_dropdown_font_font_size'] + 2) . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		.navigation > li > a, 
		.navigation .menu-item-mega-container > ul > li > a .nav_title {
			font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['total-school' . '_nav_dropdown_font_system_font'] . ";
			font-size:" . $cmsmasters_option['total-school' . '_nav_dropdown_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['total-school' . '_nav_dropdown_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['total-school' . '_nav_dropdown_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['total-school' . '_nav_dropdown_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['total-school' . '_nav_dropdown_font_text_transform'] . ";
		}
		
		#header .navigation li li > a {
			font-size:" . ((int) $cmsmasters_option['total-school' . '_nav_dropdown_font_font_size'] - 1) . "px;
		}
	}
	/* Finish Navigation Dropdown Font */
	
	
	/* Start H1 Font */
	h1,
	h1 a,
	.logo .title, 
	.cmsmasters_pricing_table .cmsmasters_price_wrap, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	#header .search_bar_wrap .search_field input {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h1_font_google_font']) . $cmsmasters_option['total-school' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h1_font_font_size'] + 8) . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_h1_font_line_height'] + 8) . "px;
	}
	
	.cmsmasters_dropcap {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h1_font_google_font']) . $cmsmasters_option['total-school' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['total-school' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h1_font_google_font']) . $cmsmasters_option['total-school' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['total-school' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:60px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:36px; /* static */
	}
	
	.cmsmasters_pricing_table .cmsmasters_price_wrap, 
	#header .search_bar_wrap .search_field input {
		font-size:60px; /* static */
		line-height:60px; /* static */
	}
	
	.cmsmasters_sitemap_wrap > h1 {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h1_font_font_size'] - 12) . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_h1_font_line_height'] - 12) . "px;
	}
	
	.navi_scrolled .logo .title {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h1_font_line_height'] - 20) . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_h1_font_line_height'] - 20) . "px;
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h1_font_line_height'] + 15) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option['total-school' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option['total-school' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['total-school' . '_h1_font_line_height'] + 15) . "px;
	}
	
	@media only screen and (max-width: 768px) {
		.headline_outer .headline_inner .headline_icon:before {
			font-size:40px;
		}
		
		.headline_outer .headline_inner.align_center .headline_icon:before {
			font-size:45px;
		}
		
		.headline_outer .headline_inner.align_center .headline_icon {
			padding-top:50px;
		}
		
		#header .search_bar_wrap .search_field input {
			font-size:30px; /* static */
			line-height:30px; /* static */
		}
	
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h2_font_google_font']) . $cmsmasters_option['total-school' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a, 
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content, 
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content a, 
	.cmsmasters_stats .cmsmasters_stat_inner_stat_info .cmsmasters_stat_counter_wrap, 
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.post_nav a, 
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_day, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title a, 
	.cmsmasters_profile_horizontal .cmsmasters_profile_title, 
	.cmsmasters_profile_horizontal .cmsmasters_profile_title a, 
	.cmsmasters_profile_vertical .cmsmasters_profile_title, 
	.cmsmasters_profile_vertical .cmsmasters_profile_title a {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h3_font_google_font']) . $cmsmasters_option['total-school' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h3_font_text_decoration'] . ";
	}
	
	.post_nav a:before, 
	.post_nav a:after {
		line-height:" . $cmsmasters_option['total-school' . '_h3_font_line_height'] . "px;
	}
	
	.cmsmasters_stats .cmsmasters_stat_inner_stat_info .cmsmasters_stat_counter_wrap, 
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_day {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h3_font_font_size'] + 6) . "px;
	}
	
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title a {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h3_font_font_size'] - 6) . "px;
	}
	
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content a, 
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content {
		line-height:" . ((int) $cmsmasters_option['total-school' . '_h3_font_line_height'] + 6) . "px;
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a, 
	.cmsmasters_table thead th, 
	.cmsmasters_table tfoot td, 
	.cmsmasters_tabs .cmsmasters_tabs_list_item > a span, 
	.comment-respond .comment-reply-title, 
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_toggles .cmsmasters_toggle_title a {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h4_font_google_font']) . $cmsmasters_option['total-school' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_tabs .cmsmasters_tabs_list_item > a span, 
	.cmsmasters_slider_post .cmsmasters_slider_post_header .cmsmasters_slider_post_title, 
	.cmsmasters_slider_post .cmsmasters_slider_post_header .cmsmasters_slider_post_title a, 
	.cmsmasters_quotes_slider .cmsmasters_quote_title, 
	.cmsmasters_quotes_grid .cmsmasters_quote_title {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h4_font_font_size'] - 2) . "px;
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5, 
	h5 a, 
	.wpcf7 p, 
	.widget_tag_cloud a, 
	#wp-calendar caption, 
	.cmsmasters_table tbody td, 
	.cmsmasters_pricing_table .cmsmasters_period, 
	.comment-respond label, 
	.comment-reply-title a, 
	.cmsmasters_comment_item_buttons a, 
	.cmsmasters_comment_item > a, 
	.cmsmasters_open_post .cmsmasters_post_date, 
	.cmsmasters_wrap_pagination ul li .page-numbers, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > .sub-menu > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive li a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive li, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category li a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category li, 
	.widget_rss .widgettitle a, 
	.widget .widgettitle, 
	.widget_nav_menu ul li a, 
	.widget.widget_nav_menu .sub-menu > li > a, 
	.widget_pages ul li a {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h5_font_google_font']) . $cmsmasters_option['total-school' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h5_font_text_decoration'] . ";
	}
	
	.widget_rss .widgettitle a, 
	.widget .widgettitle,
	.widget_nav_menu ul li a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h5_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_h5_font_line_height'] + 3) . "px;
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a, 
	.widget_custom_twitter_entries .tweet_time, 
	.widget_rss ul li cite, 
	.widget_rss ul li .rss-date, 
	.widget_recent_entries .post-date, 
	.widget.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li small, 
	.widget.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li small * , 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > .published, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a * , 
	.widget.widget_nav_menu .sub-menu > li li a, 
	#wp-calendar thead td, 
	#wp-calendar thead th, 
	.widget_archive ul li a, 
	.widget_meta ul li a, 
	.widget_categories ul li a, 
	.cmsmasters_archive_type .cmsmasters_archive_item_cont_wrap .cmsmasters_archive_item_cont_wrap_bottom .entry-meta *, 
	.cmsmasters_archive_type .cmsmasters_archive_item_cont_wrap .cmsmasters_archive_item_cont_wrap_top *, 
	.cmsmasters_slider_project_category a, 
	.cmsmasters_twitter_wrap .published, 
	.cmsmasters_img .cmsmasters_img_caption, 
	.cmsmasters_open_profile .profile_sidebar .profile_details_item_title, 
	.cmsmasters_open_profile .profile_sidebar .profile_features_item_title, 	
	.cmsmasters_open_project .project_sidebar .project_details_item_title, 
	.cmsmasters_open_project .project_sidebar .project_features_item_title, 
	.comment-respond .logged-in-as, 
	.comment-respond .logged-in-as a, 
	.cmsmasters_comment_item .cmsmasters_comment_item_date, 
	.share_posts a, 
	.cmsmasters_open_post .cmsmasters_post_footer a, 
	.cmsmasters_project_category > a, 
	.footer_copyright, 
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_mon, 
	.cmsmasters_likes a > span, 
	.cmsmasters_comments a > span, 
	.post .cmsmasters_post_cont_wrapper .cmsmasters_post_info > a, 
	.post .cmsmasters_post_cont_wrapper .cmsmasters_post_info > span, 
	.post .cmsmasters_post_cont_wrapper .cmsmasters_post_info > div,
	.cmsmasters_open_post .cmsmasters_open_post_top > a, 
	.cmsmasters_open_post .cmsmasters_open_post_top > span, 
	.cmsmasters_open_post .cmsmasters_open_post_top > div,
	.cmsmasters_post_content_meta * , 
	.cmsmasters_post_info_bottom .cmsmasters_post_cont_info * , 
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner * , 
	#wp-calendar tfoot a, 
	.cmsmasters_slider_post .cmsmasters_slider_post_read_more {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h6_font_google_font']) . $cmsmasters_option['total-school' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_slider_post .cmsmasters_slider_post_read_more, 
	.cmsmasters_profile_horizontal .cmsmasters_profile_subtitle, 
	.cmsmasters_profile_vertical .cmsmasters_profile_subtitle {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h6_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_profile_horizontal .cmsmasters_profile_subtitle, 
	.cmsmasters_profile_vertical .cmsmasters_profile_subtitle {
		letter-spacing:1px;
	}

	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner * {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h6_font_font_size'] - 2) . "px;
	}
	
	.post .cmsmasters_post_cont_wrapper .cmsmasters_post_info > span {
		line-height:" . $cmsmasters_option['total-school' . '_h6_font_line_height'] . "px;
	}
	
	.widget_tag_cloud a {
		font-size:" . $cmsmasters_option['total-school' . '_h6_font_font_size'] . "px !important;
	}
	
	@media only screen and (max-width: 540px) {
		.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title {
			font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h6_font_google_font']) . $cmsmasters_option['total-school' . '_h6_font_system_font'] . ";
			font-size:" . $cmsmasters_option['total-school' . '_h6_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['total-school' . '_h6_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['total-school' . '_h6_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['total-school' . '_h6_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['total-school' . '_h6_font_text_transform'] . ";
			text-decoration:" . $cmsmasters_option['total-school' . '_h6_font_text_decoration'] . ";
		}
	}
	
	
	@media only screen and (max-width: 768px) {
		.cmsmasters_tabs .cmsmasters_tabs_list_item > a span {
			font-size:" . $cmsmasters_option['total-school' . '_h6_font_font_size'] . "px;
		}
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_button_font_google_font']) . $cmsmasters_option['total-school' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_button_font_text_transform'] . ";
	}
	
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a, 
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but, 
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but, 
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:before	{
		line-height:" . ((int) $cmsmasters_option['total-school' . '_button_font_line_height'] - 8) . "px;
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['total-school' . '_button_font_font_size'] . "px !important;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['total-school' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['total-school' . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small
	form .formError .formErrorContent, 
	.cmsmasters_slider_post .cmsmasters_slider_post_date_top_meta_wrap, 
	.cmsmasters_slider_post .cmsmasters_slider_post_date_top_meta_wrap .cmsmasters_likes a > span, 
	.cmsmasters_slider_post .cmsmasters_slider_post_date_top_meta_wrap .cmsmasters_comments a > span, 
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info, 
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info a, 
	.cmsmasters_campaigns .campaign .cmsmasters_stat_subtitle {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_small_font_google_font']) . $cmsmasters_option['total-school' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_small_font_text_transform'] . ";
	}
	
	.cmsmasters_slider_post .cmsmasters_slider_post_date_top_meta_wrap, 
	.cmsmasters_slider_post .cmsmasters_slider_post_date_top_meta_wrap .cmsmasters_likes a > span, 
	.cmsmasters_slider_post .cmsmasters_slider_post_date_top_meta_wrap .cmsmasters_comments a > span {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_small_font_font_size'] - 2) . "px;
		letter-spacing:1px;
	}
	
	.cmsmasters_campaigns .campaign .cmsmasters_stat_subtitle {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_small_font_font_size'] + 1) . "px;
		letter-spacing:1px;
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_small_font_google_font']) . $cmsmasters_option['total-school' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['total-school' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['total-school' . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]), 
	textarea,
	select,
	option {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_input_font_google_font']) . $cmsmasters_option['total-school' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_input_font_font_style'] . ";
	}
	
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		line-height:46px; /*static*/
	}
	
	.gform_wrapper input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['total-school' . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote, 
	.cmsmasters_quotes_slider .cmsmasters_quote_content, 
	.cmsmasters_quotes_grid .cmsmasters_quote_content {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_quote_font_google_font']) . $cmsmasters_option['total-school' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_quote_font_google_font']) . $cmsmasters_option['total-school' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['total-school' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";


if (CMSMASTERS_DONATIONS) {

	$custom_css .= "
/***************** Start CMSMASTERS Donations Font Styles ******************/

	/* Start Content Font */
	.cmsmasters_single_slider_campaign .cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap * , 
	.cmsmasters_campaigns .campaign .cmsmasters_stat_title {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_content_font_google_font']) . $cmsmasters_option['total-school' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_single_slider_campaign .cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap * , 
	.cmsmasters_campaigns .campaign .cmsmasters_stat_title {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start Navigation Title Font */
	/* Finish Navigation Title Font */
	
	
	/* Start H1 Font */
	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h1_font_google_font']) . $cmsmasters_option['total-school' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h1_font_text_decoration'] . ";
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	/* Finish H2 Font */
	
	
	/* Start H3 Font */	
	.cmsmasters_donation_field > label, 
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_stat_title_wrap * {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h3_font_google_font']) . $cmsmasters_option['total-school' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h3_font_text_decoration'] . ";
	}
	
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donations_count_title, 
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_target_title {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h3_font_font_size'] - 8) . "px;
	}
	
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_stat_title_wrap * {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h3_font_font_size'] - 10) . "px;
	}
	
	@media only screen and (max-width: 600px) {
		.cmsmasters_donation_field > label {
			font-size:" . ((int) $cmsmasters_option['total-school' . '_h3_font_font_size'] - 8) . "px;
		}
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_rest_amount {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h4_font_google_font']) . $cmsmasters_option['total-school' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_slider_campaign .cmsmasters_single_slider_item_title {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h4_font_font_size'] + 2) . "px;
	}
	
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donations_count_number, 
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_target_number {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h4_font_font_size'] + 4) . "px;
	}
	
	.cmsmasters_featured_campaign .cmsmasters_campaign_donated_percent .cmsmasters_stat_container {
		height:" . ((int) $cmsmasters_option['total-school' . '_h4_font_line_height'] * 2 + 220 + 56) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.donations.opened-article > .donation .cmsmasters_donation_campaign a {
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
	.donations.opened-article > .donation .cmsmasters_donation_details_item_title, 
	.donations.opened-article > .donation .cmsmasters_donation_details_item_title a, 
	.donations.opened-article > .donation .cmsmasters_donation_details_item_value, 
	.donations.opened-article > .donation .cmsmasters_donation_details_item_value a, 
	.cmsmasters_single_slider_campaign .cmsmasters_stat_subtitle, 
	.opened-article > .campaign .cmsmasters_campaign_cont_info > span * , 
	.opened-article > .campaign .cmsmasters_campaign_cont_info > span, 
	.cmsmasters_donations .donation .cmsmasters_donation_campaign a, 
	#page .cmsmasters_featured_campaign .cmsmasters_campaign_donated_percent .cmsmasters_stat_title {
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
	.header_donation_but .cmsmasters_button {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_button_font_font_size'] + 2) . "px;
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish CMSMASTERS Donations Font Styles ******************/


";

}


if (CMSMASTERS_WOOCOMMERCE) {

	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Content Font */
	.widget > .product_list_widget a, 
	.woocommerce-shipping-fields > h3 > label, 
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .order-total .amount,
	.shop_table .product-name a, 
	.widget_shopping_cart .cart_list a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong, 
	.widget_shopping_cart .total, 
	.widget_shopping_cart .total strong, 
	.cmsmasters_product .price del .amount, 
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_content_font_google_font']) . $cmsmasters_option['total-school' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_product .price del .amount {
		line-height:" . ((int) $cmsmasters_option['total-school' . '_content_font_line_height'] - 10) . "px;	
	}
	
	.cart_totals table th, 
	.cmsmasters_product .cmsmasters_product_info .price {
		line-height:" . $cmsmasters_option['total-school' . '_content_font_line_height'] . "px;
	}
	
	.widget > .product_list_widget a, 
	.shop_table .product-name a {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] + 2) . "px;	
	}
	
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.cmsmasters_single_product .cmsmasters_product_title_wrap .product_title, 
	.cmsmasters_single_product .price {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h2_font_google_font']) . $cmsmasters_option['total-school' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h2_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_product .price {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h2_font_font_size'] - 6) . "px;	
		line-height:" . ((int) $cmsmasters_option['total-school' . '_h2_font_line_height'] - 6) . "px;	
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.cmsmasters_product .price .amount, 
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	.shop_table.order_details tfoot tr:last-child th, 
	.shop_table.order_details tfoot tr:last-child td,  
	ul.order_details {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h3_font_google_font']) . $cmsmasters_option['total-school' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h3_font_text_decoration'] . ";
	}
	
	.cmsmasters_product .price .amount {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h3_font_font_size'] + 6) . "px;	
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.shop_table td > .amount, 
	.shop_table td strong > .amount, 
	.shop_table thead th, 
	.cmsmasters_product .price, 
	.shop_table.order_details tfoot tr th {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h4_font_google_font']) . $cmsmasters_option['total-school' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_product .price del {
		font-size:" . $cmsmasters_option['total-school' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h4_font_line_height'] . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.woocommerce-MyAccount-navigation ul > li a, 
	.widget_product_tag_cloud a, 
	.shop_table.woocommerce-checkout-review-order-table tfoot tr:last-of-type * , 
	.shop_table.woocommerce-checkout-review-order-table tbody th, 
	.shop_table.woocommerce-checkout-review-order-table tbody td, 
	.shop_table.woocommerce-checkout-review-order-table tbody td * , 
	.shop_table.woocommerce-checkout-review-order-table tfoot th, 
	.shop_table.woocommerce-checkout-review-order-table tfoot td, 
	.shop_table.woocommerce-checkout-review-order-table tfoot td * , 
	.form-row label, 
	.woocommerce-message, 
	.woocommerce-info, 
	.woocommerce-error, 
	.woocommerce-message * , 
	.woocommerce-info * , 
	.woocommerce-error * , 
	.cmsmasters_update_totals, 
	.cmsmasters_woo_wrap_result .woocommerce-result-count, 
	.shipping-calculator-button, 
	.shop_table.woocommerce-checkout-review-order-table .shipping th, 
	.shop_table.order_details tfoot tr td, 
	ul.order_details strong, 
	.widget_shopping_cart .cart_list .quantity {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h5_font_google_font']) . $cmsmasters_option['total-school' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h5_font_text_decoration'] . ";
	}
	
	.cart_totals table th {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h5_font_google_font']) . $cmsmasters_option['total-school' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h5_font_font_size'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h5_font_text_decoration'] . ";
	}
	
	.shop_table.woocommerce-checkout-review-order-table .shipping th, 
	.shop_table.order_details tfoot tr td, 
	ul.order_details strong {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_h5_font_line_height'] + 2) . "px;
	}
	
	div.products > h5 {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h5_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_h5_font_line_height'] + 3) . "px;
	}
	
	.widget_product_tag_cloud a {
		font-size:" . $cmsmasters_option['total-school' . '_h5_font_font_size'] . "px !important;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.widget_layered_nav ul li a, 
	.widget_layered_nav_filters ul li a, 
	.widget_product_categories ul li a, 
	.widget > .product_list_widget .amount, 
	.shop_attributes th, 
	.widget_shopping_cart .cart_list .quantity, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity, 
	.onsale, 
	.out-of-stock, 
	.stock, 
	.cmsmasters_product .cmsmasters_product_cat, 
	.cmsmasters_product .cmsmasters_product_cat a, 
	.cmsmasters_single_product .product_meta, 
	.cmsmasters_single_product .product_meta a {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h6_font_google_font']) . $cmsmasters_option['total-school' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h6_font_text_decoration'] . ";
	}
	
	.onsale, 
	.out-of-stock, 
	.stock {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h6_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_h6_font_line_height'] - 4) . "px;
		text-transform:uppercase;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.woocommerce-message .button, 
	.woocommerce-info .button, 
	.woocommerce-error .button {
		line-height:" . $cmsmasters_option['total-school' . '_button_font_line_height'] . "px;
	}
	
	#page .cmsmasters_single_product .quantity .text {
		line-height:" . $cmsmasters_option['total-school' . '_button_font_line_height'] . "px;
		height:" . $cmsmasters_option['total-school' . '_button_font_line_height'] . "px;
	}
	
	body .select2-container .select2-choice, 
	.wc-proceed-to-checkout .checkout-button, 
	#page .quantity .text {
		line-height:" . ((int) $cmsmasters_option['total-school' . '_button_font_line_height'] + 4) . "px;
	}
	/* Finish Button Font */
	
	
	/* Start Text Fields Font */
	#page .shop_table.cart .actions .coupon .input-text {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_input_font_google_font']) . $cmsmasters_option['total-school' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_input_font_font_size'] . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_input_font_line_height'] + 10) . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */

/***************** Finish WooCommerce Font Styles ******************/


";

}


if (CMSMASTERS_EVENTS_CALENDAR) {

	if ( tribe_events_views_v2_is_enabled() ) {
		$cmsmasters_option = total_school_get_global_options();

		$cmsmasters_shortname = 'total-school';
		$cmsmasters_event_title = '_h2';
		$cmsmasters_event_smaller_title = '_h3';
		$cmsmasters_event_meta = '_h6';
		$cmsmasters_single_title = '_h1';
		$cmsmasters_widget_title = '_h3';

		$custom_css .= "
/***************** Start Tribe Events Font Styles ******************/
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-list__event-description,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-list__event-description p,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-day__event-description,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-day__event-description p,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-month__multiday-event-bar-title,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-month__multiday-event-bar-title p,
	.tribe-events-calendar-month__calendar-event-tooltip .tribe-events-calendar-month__calendar-event-tooltip-description,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-week-grid__multiday-event-bar-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-single .tribe_events,
	.cmsmasters_tribe_events_views_v2 .tribe-events-single .tribe-events-single-event-description,
	.cmsmasters_tribe_events_views_v2 .tribe-events-single .tribe-events-single-event-description p {
		font-family:" . total_school_get_google_font( $cmsmasters_option[ $cmsmasters_shortname . '_content_font_google_font' ] ) . $cmsmasters_option[ $cmsmasters_shortname . '_content_font_system_font' ] . ";
		font-size:" . $cmsmasters_option[ $cmsmasters_shortname . '_content_font_font_size' ] . "px;
		line-height:" . $cmsmasters_option[ $cmsmasters_shortname . '_content_font_line_height' ] . "px;
		font-weight:" . $cmsmasters_option[ $cmsmasters_shortname . '_content_font_font_weight' ] . ";
		font-style:" . $cmsmasters_option[ $cmsmasters_shortname . '_content_font_font_style' ] . ";
	}

	.cmsmasters_tribe_events_views_v2 .tribe-events-single *,
	.cmsmasters_tribe_events_views_v2 .tribe-events *,
	.cmsmasters_tribe_events_views_v2 .tribe-events-pro *,
	.tribe-events-calendar-month__calendar-event-tooltip * {
		font-family:" . total_school_get_google_font( $cmsmasters_option[ $cmsmasters_shortname . '_content_font_google_font' ] ) . $cmsmasters_option[ $cmsmasters_shortname . '_content_font_system_font' ] . " !important;
	}

	.tribe-events-calendar-month__calendar-event-tooltip .tribe-events-calendar-month__calendar-event-tooltip-description {
		font-size:" . ( (int) $cmsmasters_option[ $cmsmasters_shortname . '_content_font_font_size' ] - 2 ) . "px;
		line-height:" . ( (int) $cmsmasters_option[ $cmsmasters_shortname . '_content_font_line_height' ] - 2 ) . "px;
	}

	.cmsmasters_tribe_events_views_v2 .tribe-events .tribe-events-calendar-month__multiday-event-wrapper,
	.cmsmasters_tribe_events_views_v2 .tribe-events .tribe-events-pro-week-grid__multiday-event-wrapper {
		height:" . $cmsmasters_option[ $cmsmasters_shortname . '_content_font_line_height' ] . "px;
	}

	.cmsmasters_tribe_events_views_v2 .tribe-events-single .tribe-events-single-event-title {
		font-family:" . total_school_get_google_font( $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_single_title . '_font_google_font' ] ) . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_single_title . '_font_system_font' ] . ";
		font-size:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_single_title . '_font_font_size' ] . "px;
		line-height:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_single_title . '_font_line_height' ] . "px;
		font-weight:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_single_title . '_font_font_weight' ] . ";
		font-style:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_single_title . '_font_font_style' ] . ";
		text-transform:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_single_title . '_font_text_transform' ] . ";
		text-decoration:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_single_title . '_font_text_decoration' ] . ";
	}

	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-list__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-list__event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-day__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-day__event-title a,
	.tribe-events-calendar-month__calendar-event-tooltip .tribe-events-calendar-month__calendar-event-tooltip-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-single ul.tribe-related-events li .tribe-related-events-title {
		font-family:" . total_school_get_google_font( $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_title . '_font_google_font' ] ) . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_title . '_font_system_font' ] . ";
		font-size:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_title . '_font_font_size' ] . "px;
		line-height:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_title . '_font_line_height' ] . "px;
		font-weight:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_title . '_font_font_weight' ] . ";
		font-style:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_title . '_font_font_style' ] . ";
		text-transform:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_title . '_font_text_transform' ] . ";
		text-decoration:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_title . '_font_text_decoration' ] . ";
	}

	.tribe-events-calendar-month__calendar-event-tooltip .tribe-events-calendar-month__calendar-event-tooltip-title {
		font-size:" . ( (int) $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_title . '_font_font_size' ] - 2 ) . "px;
		line-height:" . ( (int) $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_title . '_font_line_height' ] - 2 ) . "px;
	}

	
	@media only screen and (max-width: 540px) {
		.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-list__event-title,
		.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-list__event-title a,
		.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-day__event-title,
		.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-day__event-title a,
		.tribe-events-calendar-month__calendar-event-tooltip .tribe-events-calendar-month__calendar-event-tooltip-title,
		.cmsmasters_tribe_events_views_v2 .tribe-events-single ul.tribe-related-events li .tribe-related-events-title {
			font-family:" . total_school_get_google_font( $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_google_font' ] ) . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_system_font' ] . ";
			font-size:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_font_size' ] . "px;
			line-height:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_line_height' ] . "px;
			font-weight:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_font_weight' ] . ";
			font-style:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_font_style' ] . ";
			text-transform:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_text_transform' ] . ";
			text-decoration:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_text_decoration' ] . ";
		}
	
		.tribe-events-calendar-month__calendar-event-tooltip .tribe-events-calendar-month__calendar-event-tooltip-title {
			font-size:" . ( (int) $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_font_size' ] - 2 ) . "px;
			line-height:" . ( (int) $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_line_height' ] - 2 ) . "px;
		}
	}

	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-summary__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-summary__event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-photo__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-photo__event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-calendar-month-mobile-events__mobile-event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-calendar-month-mobile-events__mobile-event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-calendar-month-mobile-events__mobile-event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-calendar-month-mobile-events__mobile-event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-title a {
		font-family:" . total_school_get_google_font( $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_google_font' ] ) . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_system_font' ] . ";
		font-size:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_font_size' ] . "px;
		line-height:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_line_height' ] . "px;
		font-weight:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_font_weight' ] . ";
		font-style:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_font_style' ] . ";
		text-transform:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_text_transform' ] . ";
		text-decoration:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_text_decoration' ] . ";
	}

	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-map__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-map__event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-calendar-month-mobile-events__mobile-event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-calendar-month-mobile-events__mobile-event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-calendar-month-mobile-events__mobile-event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-calendar-month-mobile-events__mobile-event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-title a {
		font-size:" . ( (int) $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_font_size' ] - 2 ) . "px;
		line-height:" . ( (int) $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_smaller_title . '_font_line_height' ] - 2 ) . "px;
	}

	.cmsmasters_tribe_events_views_v2 .cmsmasters_sidebar .widgettitle,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-countdown .tribe-events-widget-countdown__header-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__header-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__header-title {
		font-family:" . total_school_get_google_font( $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_widget_title . '_font_google_font' ] ) . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_widget_title . '_font_system_font' ] . ";
		font-size:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_widget_title . '_font_font_size' ] . "px;
		line-height:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_widget_title . '_font_line_height' ] . "px;
		font-weight:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_widget_title . '_font_font_weight' ] . ";
		font-style:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_widget_title . '_font_font_style' ] . ";
		text-transform:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_widget_title . '_font_text_transform' ] . ";
		text-decoration:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_widget_title . '_font_text_decoration' ] . ";
	}

	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-list__event-datetime-wrapper,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-list__event-venue,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-list__event-cost,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-day__event-datetime-wrapper,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-day__event-venue,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-calendar-day__event-cost,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-photo__event-datetime,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-photo__event-venue,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-photo__event-cost,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-summary__event-datetime-wrapper,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-summary__event-venue,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-summary__event-cost,
	.tribe-events-calendar-month__calendar-event-tooltip .tribe-events-calendar-month__calendar-event-tooltip-datetime,
	.tribe-events-calendar-month__calendar-event-tooltip .tribe-events-calendar-month__calendar-event-tooltip-cost,
	.cmsmasters_tribe_events_views_v2 .tribe-events-single .tribe-events-schedule,
	.cmsmasters_tribe_events_views_v2 .tribe-events-single .tribe-events-schedule *,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-header,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-datetime-wrapper,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-venue,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-cost,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-header,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-datetime-wrapper,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-venue,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-cost,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-calendar-month-mobile-events__mobile-event-datetime,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-calendar-month-mobile-events__mobile-event-datetime,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-countdown .tribe-events-widget-countdown__event-title,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-countdown .tribe-events-widget-countdown__event-title a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__venue-name,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__venue-name a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__event-datetime-wrapper,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-datetime-wrapper,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-venue a,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-organizer-title-wrapper a {
		font-family:" . total_school_get_google_font( $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_meta . '_font_google_font' ] ) . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_meta . '_font_system_font' ] . ";
		font-size:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_meta . '_font_font_size' ] . "px;
		line-height:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_meta . '_font_line_height' ] . "px;
		font-weight:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_meta . '_font_font_weight' ] . ";
		font-style:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_meta . '_font_font_style' ] . ";
		text-transform:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_meta . '_font_text_transform' ] . ";
		text-decoration:" . $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_meta . '_font_text_decoration' ] . ";
	}

	.tribe-events-calendar-month__calendar-event-tooltip .tribe-events-calendar-month__calendar-event-tooltip-datetime,
	.tribe-events-calendar-month__calendar-event-tooltip .tribe-events-calendar-month__calendar-event-tooltip-cost,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-map__event-datetime-wrapper,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-map__event-venue,
	.cmsmasters_tribe_events_views_v2 .tribe-common .tribe-events-pro-map__event-cost,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-datetime-wrapper,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-venue,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-cost,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-datetime-wrapper,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-venue,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-cost,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-calendar-month-mobile-events__mobile-event-datetime,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-calendar-month-mobile-events__mobile-event-datetime,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__event-datetime-wrapper,
	.cmsmasters_tribe_events_views_v2 .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-datetime-wrapper {
		font-size:" . ( (int) $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_meta . '_font_font_size' ] - 2 ) . "px;
		line-height:" . ( (int) $cmsmasters_option[ $cmsmasters_shortname . $cmsmasters_event_meta . '_font_line_height' ] - 2 ) . "px;
	}

	.cmsmasters_tribe_events_views_v2 .tribe-events .tribe-events-c-nav__next,
	.cmsmasters_tribe_events_views_v2 .tribe-events .tribe-events-c-nav__prev,
	.cmsmasters_tribe_events_views_v2 .tribe-events-pro .tribe-events-c-small-cta__link {
		font-family:" . total_school_get_google_font( $cmsmasters_option[ $cmsmasters_shortname . '_button_font_google_font' ] ) . $cmsmasters_option[ $cmsmasters_shortname . '_button_font_system_font' ] . ";
		font-size:" . $cmsmasters_option[ $cmsmasters_shortname . '_button_font_font_size' ] . "px;
		line-height:" . $cmsmasters_option[ $cmsmasters_shortname . '_button_font_line_height' ] . "px;
		font-weight:" . $cmsmasters_option[ $cmsmasters_shortname . '_button_font_font_weight' ] . ";
		font-style:" . $cmsmasters_option[ $cmsmasters_shortname . '_button_font_font_style' ] . ";
		text-transform:" . $cmsmasters_option[ $cmsmasters_shortname . '_button_font_text_transform' ] . ";
	}

	.cmsmasters_tribe_events_views_v2 .tribe-events-pro .tribe-events-c-small-cta__link {
		font-size:" . ( (int) $cmsmasters_option[ $cmsmasters_shortname . '_button_font_font_size' ] - 2 ) . "px;
		line-height:" . ( (int) $cmsmasters_option[ $cmsmasters_shortname . '_button_font_line_height' ] - 2 ) . "px;
	}
/***************** Finish Tribe Events Font Styles ******************/
";
	} else {
		$custom_css .= "
/***************** Start Events Font Styles ******************/

	/* Start Content Font */
	.tribe-this-week-events-widget .tribe-this-week-event .entry-title, 
	.tribe-this-week-events-widget .tribe-this-week-event .entry-title a, 
	.tribe-events-list-widget-content-wrap .entry-title, 
	.tribe-events-list-widget-content-wrap .entry-title a, 
	.tribe-events-countdown-widget .tribe-countdown-text, 
	.tribe-events-countdown-widget .tribe-countdown-text a, 
	.tribe-events-grid .tribe-week-event .vevent .entry-title a, 
	table.tribe-events-calendar tbody td .tribe-events-month-event-title, 
	table.tribe-events-calendar tbody td .tribe-events-month-event-title a, 
	.cmsmasters_single_event .cmsmasters_single_event_header_right a, 
	.tribe-mini-calendar tbody, 
	.tribe-mini-calendar tbody a, 
	.widget .vcalendar .cmsmasters_widget_event_info, 
	.widget .vcalendar .cmsmasters_widget_event_info a, 
	.tribe-events-countdown-widget .tribe-countdown-time span, 
	.tribe-this-week-events-widget .tribe-events-page-title {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_content_font_google_font']) . $cmsmasters_option['total-school' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_content_font_font_style'] . ";
	}
	
	.tribe-this-week-events-widget .tribe-this-week-event .entry-title, 
	.tribe-this-week-events-widget .tribe-this-week-event .entry-title a, 
	.tribe-events-list-widget-content-wrap .entry-title, 
	.tribe-events-list-widget-content-wrap .entry-title a, 
	.tribe-events-countdown-widget .tribe-countdown-text, 
	.tribe-events-countdown-widget .tribe-countdown-text a, 
	.tribe-related-events-title {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] + 2) . "px;
	}
	
	.widget .vcalendar .cmsmasters_widget_event_info, 
	.widget .vcalendar .cmsmasters_widget_event_info a {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] - 1) . "px;
	}
	
	.tribe-events-grid .column.first, 
	.tribe-events-grid .tribe-week-grid-hours {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_content_font_font_size'] - 4) . "px;
	}
	
	.cmsmasters_single_event .cmsmasters_single_event_header_right a {
		font-weight:400; /*static*/
	}
	
	.tribe-this-week-events-widget .tribe-this-week-event .entry-title, 
	.tribe-this-week-events-widget .tribe-this-week-event .entry-title a, 
	.tribe-events-grid .tribe-week-event .vevent .entry-title a, 
	.tribe-this-week-events-widget .tribe-events-page-title {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	.tribe-events-countdown-widget .tribe-countdown-timer td {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h1_font_google_font']) . $cmsmasters_option['total-school' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h1_font_text_decoration'] . ";
	}
	
	.tribe-events-countdown-widget .tribe-countdown-timer td {
		line-height:" . $cmsmasters_option['total-school' . '_h1_font_font_size'] . "px;
	}
	
	@media only screen and (min-width: 950px) and (max-width: 1440px) {
		.content_wrap.r_sidebar .tribe-events-countdown-widget .tribe-countdown-timer td, 
		.content_wrap.l_sidebar .tribe-events-countdown-widget .tribe-countdown-timer td, 
		.sidebar_layout_14141414 .tribe-events-countdown-widget .tribe-countdown-timer td {
			font-size:16px; /* static */
			line-height:22px; /* static */
		}
	}
	
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.tribe-events-page-title, 
	.tribe-mobile-day .tribe-mobile-day-date {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h2_font_google_font']) . $cmsmasters_option['total-school' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.tribe-events-sub-nav li a {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h3_font_google_font']) . $cmsmasters_option['total-school' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.tribe-events-venue-widget .tribe-venue-widget-venue-name a, 
	.tribe-mini-calendar [id*=tribe-mini-calendar-month], 
	.tribe-events-grid .tribe-grid-header span, 
	.tribe-events-list .tribe-events-list-separator-month, 
	.tribe-events-list .tribe-events-day-time-slot > h5, 
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a, 
	table.tribe-events-calendar thead th, 
	#tribe-bar-views > div > span, 
	.tribe-bar-filters-inner > div label, 
	#tribe-events-content > .tribe-events-button, 
	.tribe-events-venue .cmsmasters_events_venue_header_right a, 
	.tribe-events-organizer .cmsmasters_events_organizer_header_right a, 
	.tribe-events-widget-link a, 
	.tribe-mobile-day .tribe-events-read-more, 
	.tribe-this-week-events-widget .tribe-events-viewmore a {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_h5_font_google_font']) . $cmsmasters_option['total-school' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['total-school' . '_h5_font_text_decoration'] . ";
	}
	
	.tribe-events-list .tribe-events-day-time-slot > h5, 
	.tribe-events-grid .tribe-grid-header span, 
	.tribe-events-list .tribe-events-list-separator-month, 
	table.tribe-events-calendar thead th, 
	.tribe-events-related-events-title, 
	.tribe-events-event-meta > div > h5 {
		font-size:" . ((int) $cmsmasters_option['total-school' . '_h5_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsmasters_option['total-school' . '_h5_font_line_height'] + 2) . "px;
	}
	
	@media only screen and (max-width: 600px) {
		table.tribe-events-calendar thead th {
			font-size:12px; /* static */
		}
	}
	
	@media only screen and (max-width: 500px) {
		table.tribe-events-calendar thead th {
			font-size:10px; /* static */
		}
	}
	
	@media only screen and (max-width: 400px) {
		table.tribe-events-calendar thead th {
			font-size:8px; /* static */
		}
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.widget.tribe-events-adv-list-widget .cmsmasters_widget_event_info * ,  
	.widget.tribe-events-adv-list-widget .cmsmasters_widget_event_info a,  
	.tribe-this-week-events-widget .tribe-this-week-event div * ,  
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date, 
	.tribe-events-countdown-widget .tribe-countdown-timer td span,  
	.tribe-events-photo .tribe-events-event-meta, 
	.tribe-events-grid .column.first, 
	.tribe-events-grid .tribe-week-grid-hours, 
	.tribe-events-tooltip .duration, 
	.cmsmasters_single_event_meta dt, 
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_title, 
	.cmsmasters_single_event .tribe-events-date, 
	.cmsmasters_single_event .tribe-events-cost, 
	.tribe-events-list .tribe-events-event-meta, 
	.tribe-events-list .tribe-events-event-meta a, 
	.tribe-events-photo .tribe-events-event-meta, 
	.tribe-events-photo .tribe-events-event-meta a, 
	.cmsmasters_single_event .tribe-events-schedule, 
	.cmsmasters_single_event .tribe-events-schedule a, 
	.tribe-events-venue .tribe-events-event-meta, 
	.tribe-events-venue .tribe-events-event-meta a, 
	.tribe-events-organizer .tribe-events-event-meta, 
	.tribe-events-organizer .tribe-events-event-meta a, 
	.tribe-mini-calendar thead th, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a, 
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info, 
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info a, 
	.tribe-mobile-day .tribe-events-event-schedule-details, 
	.tribe-mobile-day .tribe-event-schedule-details {
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
	#tribe-bar-views .tribe-bar-views-list li, 
	#tribe-bar-views .tribe-bar-views-list li {
		font-family:" . total_school_get_google_font($cmsmasters_option['total-school' . '_button_font_google_font']) . $cmsmasters_option['total-school' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['total-school' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['total-school' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['total-school' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['total-school' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['total-school' . '_button_font_text_transform'] . ";
	}
	
	#tribe-bar-views .tribe-bar-views-list li, 
	#tribe-bar-views .tribe-bar-views-list li {
		line-height:34px; /*static*/
	}
	
	.tribe-bar-filters .tribe-events-button {
		line-height:" . ((int) $cmsmasters_option['total-school' . '_button_font_line_height'] + 4) . "px;
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish Events Font Styles ******************/


";

	}
}
	
	
	return apply_filters('total_school_theme_fonts_filter', $custom_css);
}

