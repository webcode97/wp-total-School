<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.7
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function total_school_theme_colors_primary() {
	$cmsmasters_option = total_school_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.7
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category li a, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive li a, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap .sub-menu > li > a, 
	{$rule}a.notice_close, 
	{$rule}select, 
	{$rule}.widget_custom_popular_projects_entries .widgettitle + .widget_custom_projects_entries_slides .owl-buttons > div span, 
	{$rule}.widget_custom_latest_projects_entries .widgettitle + .widget_custom_projects_entries_slides .owl-buttons > div span, 
	{$rule}.cmsmasters_posts_slider .owl-buttons > div span, 
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div span, 
	{$rule}.cmsmasters_twitter_wrap .owl-buttons > div span, 
	{$rule}.cmsmasters_clients_slider .owl-buttons > div span, 
	{$rule}.cmsmasters_single_slider .img_placeholder, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers, 
	{$rule}.cmsmasters_likes a > span, 
	{$rule}.cmsmasters_comments a > span, 
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}select,
	{$rule}option, 
	{$rule}.owl-buttons > div > span {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}#page .header_mid .search_wrap .search_bar_wrap .search_field input {
		background-color:transparent;
		border:none;
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}.color_2, 
	{$rule}.widget_pages ul li a, 
	{$rule}.widget_meta ul li a, 
	{$rule}.widget_categories ul li a, 
	{$rule}#wp-calendar #today, 
	{$rule}.widget_tag_cloud a, 
	{$rule}.widget_custom_twitter_entries .tweet_time:before, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_no_quote_img:before, 
	{$rule}.cmsmasters_pricing_table .feature_list .feature_icon:before, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_price_wrap, 
	{$rule}.cmsmasters_twitter_wrap .twr_icon, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	{$rule}.cmsmasters_stats .cmsmasters_stat_inner_stat_info:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type='checkbox'] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type='checkbox'] + label:after,
	{$rule}#wp-comment-cookies-consent + label:after,
	{$rule}.woocommerce .woocommerce-form__input-checkbox + span:after, 
	{$rule}.cmsmasters_dropcap.type1,
	{$rule}.cmsmasters_wrap_more_items.cmsmasters_loading:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	{$rule}.bypostauthor > .comment-body .alignleft:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a, 
	{$rule}.search_bar_wrap .search_button button:hover:before, 
	{$rule}.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button:hover, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_mon, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current, 
	{$rule}.cmsmasters_profile_subtitle, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_footer a,  
	{$rule}.comment-reply-title a, 
	{$rule}.comment-respond label span, 
	{$rule}.cmsmasters_toggles.toggles_mode_toggle .cmsmasters_toggle_title a:hover, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_plus:before, 
	{$rule}.cmsmasters_toggles.toggles_mode_toggle .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title a, 
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_date_top_meta_wrap span > a:hover:before, 
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_date_top_meta_wrap span > a.active:before, 
	{$rule}.cmsmasters_likes a:hover, 
	{$rule}.cmsmasters_likes a.active, 
	{$rule}.cmsmasters_comments a:hover, 
	{$rule}.cmsmasters_comments a.active {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	" . (($scheme == 'default') ? "mark," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} mark," : '') . "
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab a, 
	{$rule}.widget_nav_menu ul li a:hover, 
	{$rule}#wp-calendar caption, 
	{$rule}.widget_tag_cloud a:hover, 
	{$rule}.cmsmasters_posts_slider .owl-buttons > div:hover, 
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:hover, 
	{$rule}.widget_custom_popular_projects_entries .widgettitle + .widget_custom_projects_entries_slides .owl-buttons > div:hover, 
	{$rule}.widget_custom_latest_projects_entries .widgettitle + .widget_custom_projects_entries_slides .owl-buttons > div:hover, 
	{$rule}.cmsmasters_twitter_wrap .owl-buttons > div:hover, 
	{$rule}.cmsmasters_clients_slider .owl-buttons > div:hover, 
	{$rule}.cmsmasters_table thead th, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner, 
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap:hover, 
	{$rule}.cmsmasters_clients_slider_wrap .owl-page.active, 
	{$rule}.post_nav, 
	{$rule}.post_nav > span, 
	{$rule}#page .profile_social_icons a, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.next, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.prev, 
	{$rule}.owl-pagination .owl-page.active, 
	{$rule}.owl-pagination .owl-page:hover, 
	{$rule}.cmsmasters_posts_slider .owl-pagination .owl-page.active, 
	{$rule}.cmsmasters_posts_slider .owl-pagination .owl-page:hover, 
	{$rule}.cmsmasters_button,
	{$rule}.button, 
	{$rule}input[type=submit], 
	{$rule}input[type=button], 
	{$rule}button, 
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:after,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap.current_toggle, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item:hover, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab, 
	{$rule}.owl-buttons > div:hover, 
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_content_line, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_content_line {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button:hover,
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}button:hover, 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover a, 
	{$rule}.project .cmsmasters_img_rollover_wrap .cmsmasters_img_rollover a, 
	{$rule}.profile .cmsmasters_img_rollover a, 
	{$rule}.project .cmsmasters_img_rollover > a {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['total-school' . '_' . $scheme . '_link']) . ", 0.85);
	}

	{$rule}.widget_tag_cloud a:hover, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab a, 
	{$rule}.widget_nav_menu ul li a:hover, 
	{$rule}table.cmsmasters_table thead th, 
 	{$rule}.cmsmasters_stats .cmsmasters_stat_inner_stat_info, 
 	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.next, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.prev, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date, 
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:after, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item:hover, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab, 
	{$rule}.cmsmasters_posts_slider .owl-buttons > div:hover, 
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:hover, 
	{$rule}.widget_custom_popular_projects_entries .widgettitle + .widget_custom_projects_entries_slides .owl-buttons > div:hover, 
	{$rule}.widget_custom_latest_projects_entries .widgettitle + .widget_custom_projects_entries_slides .owl-buttons > div:hover, 
	{$rule}.cmsmasters_twitter_wrap .owl-buttons > div:hover, 
	{$rule}.cmsmasters_clients_slider .owl-buttons > div:hover, 
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	{$rule}textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab + .cmsmasters_tabs_list_item {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab + .cmsmasters_tabs_list_item {
			" . cmsmasters_color_css('border-top-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		}
	}
	
	@media only screen and (max-width: 1024px) {
		{$rule}#header .navigation .cmsmasters_resp_nav_toggle.cmsmasters_theme_icon_resp_nav_slide_up {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		}
	
		{$rule}.header_top .header_top_but.opened, 
		{$rule}.header_top .header_top_outer {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		}
	}
	
	@media only screen and (min-width: 950px) and (max-width: 1440px) {
		{$rule}#page .content_wrap.r_sidebar .widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab > a,
		{$rule}#page .content_wrap.l_sidebar .widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab > a {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		}
	}
	
	@media only screen and (min-width: 768px) {
		{$rule}body:not(.rtl) .cmsmasters_tabs:not(.lpr).tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab + .cmsmasters_tabs_list_item {
			" . cmsmasters_color_css('border-left-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		}
		
		{$rule}body.rtl .cmsmasters_tabs:not(.lpr).tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab + .cmsmasters_tabs_list_item {
			" . cmsmasters_color_css('border-right-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		}
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	" . (($scheme == 'default') ? ".headline_outer a:hover," : '') . "
	{$rule}a:hover,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	{$rule}.widget_rss ul li .rsswidget:hover, 
	{$rule}.widget_recent_comments ul li a:hover, 
	{$rule}.widget_pages ul li a:hover, 
	{$rule}.widget_meta ul li a:hover, 
	{$rule}.widget_categories ul li a:hover, 
	{$rule}.comment-reply-title a:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover, 
	{$rule}.footer_nav > li.current-menu-item > a, 
	{$rule}.footer_nav > li.current-menu-ancestor > a
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but.current, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current, 
	{$rule}.cmsmasters_post_info_bottom .cmsmasters_post_cont_info a:hover, 
	{$rule}#header .search_opened .search_bar_wrap .search_button button:hover:before,  
	{$rule}.search_bar_wrap .search_button button:hover:before, 
	{$rule}a.cmsmasters_cat_color:hover,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a:hover, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a:hover, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_footer a:hover, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap .sub-menu > li > a:hover, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive li a:hover, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category li a:hover, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont a:hover, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li a:hover, 
	{$rule}.widget_recent_entries ul li a:hover, 
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_date_top_meta_wrap span > a:before, 
	{$rule}.cmsmasters_likes a, 
	{$rule}.cmsmasters_comments a,
	{$rule}.subpage_nav > span {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_hover']) . "
	}
	
	#page .cmsmasters_quotes_slider .cmsmasters_quote_site a:hover, 
	#page .cmsmasters_quotes_grid .cmsmasters_quote_site a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_hover']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.widget_archive ul li a:hover:before, 
	{$rule}.widget_pages ul li a:hover:before, 
	{$rule}.widget_meta ul li a:hover:before, 
	{$rule}.widget_categories ul li a:hover:before, 
	{$rule}.post_nav > span:hover, 
	{$rule}#page .profile_social_icons a:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.next:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.prev:hover, 
	{$rule}.cmsmasters_hover_slider .cmsmasters_hover_slider_thumbs a:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner, 
	{$rule}.cmsmasters_toggles.toggles_mode_toggle .cmsmasters_toggle_wrap.current_toggle, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_footer a:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.next:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.prev:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but.current {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}fieldset legend,
	{$rule}blockquote footer,
	{$rule}table caption,
	{$rule}.img_placeholder_small, 
	{$rule}#wp-calendar thead td, 
	{$rule}#wp-calendar thead th, 
	{$rule}.widget_custom_twitter_entries .tweet_text, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont a, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner a:hover, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_title_counter_wrap, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before, 
	{$rule}.search_bar_wrap .search_button button:before,  
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_day, 
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_title a, 
	{$rule}.cmsmasters_toggles.toggles_mode_toggle .cmsmasters_toggle_title a, 
	{$rule}a.notice_close:hover, 
	{$rule}.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content, 
	{$rule}.cmsmasters_table tfoot td, 
	{$rule}.widget_nav_menu ul li a, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li a, 
	{$rule}.widget_recent_comments ul li a, 
	{$rule}.widget_recent_entries ul li a, 
	{$rule}.widget_rss ul li .rsswidget, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item > a span {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}form .formError .formErrorContent {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	" . (($scheme == 'default') ? ".headline_outer * ," : '') . "
	" . (($scheme == 'default') ? ".headline_outer .cmsmasters_breadcrumbs_inner * ," : '') . "
	" . (($scheme == 'default') ? ".headline_outer .headline_inner .headline_text:before ," : '') . "
	{$rule}.widget_tag_cloud a:hover, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab a span, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab a, 
	{$rule}.widget_nav_menu ul li a:hover, 
	{$rule}#wp-calendar caption, 
	{$rule}.cmsmasters_table thead th, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .feature_list .feature_icon:before, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner .pricing_title, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner .cmsmasters_price_wrap, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner .feature_list * , 
	{$rule}#page .profile_social_icons a, 
	{$rule}.cmsmasters_project_puzzle .project_inner * ,
	{$rule}.cmsmasters_project_puzzle .project_inner a,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.next, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.prev, 
	{$rule}mark,
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}#header .search_opened .search_bar_wrap .search_button button:before, 
	{$rule}#header .search_bar_wrap .search_field input	{
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#header .search_bar_wrap .search_field input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#header .search_bar_wrap .search_field input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont_wrapper, 
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_cont_wrapper, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_cont_wrapper, 
	{$rule}.cmsmasters_profile_vertical .profile_outer, 
	{$rule}.cmsmasters_project_grid .project_outer, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_outer, 
	{$rule}.cmsmasters_profile_horizontal .profile_inner, 
	{$rule}#page:not(.enable_header_bottom):not(.cmsmasters_header_overlaps_enabled) #header, 
	{$rule}.widget_tag_cloud a, 
	{$rule}.widget_nav_menu ul li a, 
	{$rule}.cmsmasters_table tbody td, 
	{$rule}.gallery-item .gallery-icon,
	{$rule}.gallery-item .gallery-caption,
	{$rule}.cmsmasters_img.with_caption, 
	{$rule}.cmsmasters_stats .cmsmasters_stat_inner_stat_info, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}#wp-comment-cookies-consent + label:before,
	{$rule}.woocommerce .woocommerce-form__input-checkbox + span:before, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_cont, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but, 
	{$rule}.owl-pagination .owl-page {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}fieldset,
	{$rule}fieldset legend, 
	{$rule}.post_nav span, 
	{$rule}.post_nav a, 
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon_wrap, 
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before, 
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap:hover .cmsmasters_toggle_plus,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap:hover .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_plus:before, 
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title a, 
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap .cmsmasters_toggle_inner *, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item:hover a, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab > a, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item:hover a span, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab > a span, 
	{$rule}.owl-buttons > div:hover > span, 
	{$rule}.cmsmasters_posts_slider .owl-buttons > div:hover span, 
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:hover span, 
	{$rule}.cmsmasters_twitter_wrap .owl-buttons > div:hover span, 
	{$rule}.cmsmasters_clients_slider .owl-buttons > div:hover span, 
	{$rule}.widget_custom_popular_projects_entries .widgettitle + .widget_custom_projects_entries_slides .owl-buttons > div:hover span, 
	{$rule}.widget_custom_latest_projects_entries .widgettitle + .widget_custom_projects_entries_slides .owl-buttons > div:hover span, 
	{$rule}.cmsmasters_button:hover,
	{$rule}.button:hover,
	{$rule}.cmsmasters_button,
	{$rule}.button, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}button:hover, 
	{$rule}input[type=submit], 
	{$rule}input[type=button], 
	{$rule}button, 
	{$rule}.profile .cmsmasters_img_rollover a, 
	{$rule}.project .cmsmasters_img_rollover > a, 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover a, 
	{$rule}.project .cmsmasters_img_rollover_wrap .cmsmasters_img_rollover a {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.widget_custom_popular_projects_entries .widgettitle + .widget_custom_projects_entries_slides .owl-buttons > div, 
	{$rule}.widget_custom_latest_projects_entries .widgettitle + .widget_custom_projects_entries_slides .owl-buttons > div, 
	{$rule}.sticky .cmsmasters_post_title:before, 
	{$rule}.cmsmasters_posts_slider .owl-buttons > div, 
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div, 
	{$rule}.cmsmasters_table tfoot td, 
	{$rule}.cmsmasters_twitter_wrap .owl-buttons > div, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_container, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat canvas, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:before, 
	{$rule}.cmsmasters_clients_slider .owl-buttons > div, 
	{$rule}.img_placeholder_small, 
	{$rule}.cmsmasters_featured_block,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item, 
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}option, 
	{$rule}.owl-buttons > div, 
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_outer, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_inner, 
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_content, 
	{$rule}.cmsmasters_quotes_grid, 
	{$rule}.cmsmasters_profile_horizontal .profile_inner, 
	{$rule}.cmsmasters_profile_vertical .profile_outer, 
	{$rule}.cmsmasters_project_grid .project_inner {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_content:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */ 
	{$rule}.footer_inner_wrap:before, 
	{$rule}.widget_archive ul li a:before, 
	{$rule}.widget_pages ul li a:before, 
	{$rule}.widget_meta ul li a:before, 
	{$rule}.widget_categories ul li a:before, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_vert:before, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_vert:after, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_vert span, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_list:before, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote:before, 
	{$rule}.cmsmasters_clients_slider_wrap .owl-page, 
	{$rule}.cmsmasters_open_profile .profile_content.with_sidebar:before, 
	{$rule}.cmsmasters_open_profile .profile_content.with_sidebar + .profile_sidebar:before, 
	{$rule}.cmsmasters_open_project .project_content.with_sidebar:before, 
	{$rule}.cmsmasters_open_project .project_content.with_sidebar + .project_sidebar:before, 
	{$rule}.content_wrap.r_sidebar .content:before, 
	{$rule}.content_wrap.l_sidebar .content:before, 
	{$rule}.content_wrap.r_sidebar .sidebar:before, 
	{$rule}.content_wrap.l_sidebar .sidebar:before, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li:before, 
	{$rule}.cmsmasters_footer_default .footer_copyright:before, 
	{$rule}.blog.timeline .post:before, 
	{$rule}.blog.timeline:before, 
	{$rule}.cmsmasters_posts_slider .owl-pagination .owl-page {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
	}
	
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_list .cmsmasters_quote, 
	{$rule}.widget_custom_twitter_entries li, 
	{$rule}.widget_tag_cloud a, 
	{$rule}.widget_nav_menu ul li a, 
	{$rule}#wp-calendar td, 
	{$rule}#wp-calendar th, 
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_cont_wrap .cmsmasters_archive_item_cont_wrap_top, 
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_cont_wrap_info, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_outer .img_placeholder, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_inner, 
	{$rule}.cmsmasters_table td, 
	{$rule}.cmsmasters_table th, 
	{$rule}.cmsmasters_quotes_grid, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_price_wrap, 
	{$rule}.cmsmasters_pricing_table .feature_list li, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item_inner, 
	{$rule}.cmsmasters_tabs .cmsmasters_tab_inner, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap, 
	{$rule}.cmsmasters_open_profile .profile_sidebar .profile_details_item, 
	{$rule}.cmsmasters_open_profile .profile_sidebar .profile_features_item, 
	{$rule}.cmsmasters_open_project .project_sidebar .project_details_item, 
	{$rule}.cmsmasters_open_project .project_sidebar .project_features_item, 
	{$rule}.cmsmasters_single_slider .img_placeholder, 
	{$rule}.cmsmasters_comment_item, 
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_item_inner, 
	{$rule}.about_author .about_author_inner, 
	{$rule}.cmsmasters_open_post .cmsmasters_open_post_inner, 
	{$rule}.cmsmasters_open_post .cmsmasters_open_post_top, 
	{$rule}.cmsmasters_profile_vertical .profile_outer, 
	{$rule}.cmsmasters_profile_horizontal .profile_inner, 
	{$rule}.cmsmasters_project_grid .project_inner, 
	{$rule}.cmsmasters_project_grid .project_outer .img_placeholder, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but, 
	{$rule}.post .cmsmasters_post_cont_wrapper, 
	{$rule}.post .cmsmasters_post_cont_wrapper .cmsmasters_post_info, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_info, 
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}select,
	{$rule}textarea,
	{$rule}option,
	{$rule}hr,
	{$rule}.cmsmasters_divider,
	{$rule}.cmsmasters_widget_divider,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon, 
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}#wp-comment-cookies-consent + label:before,
	{$rule}.woocommerce .woocommerce-form__input-checkbox + span:before, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_footer a, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item, 
	{$rule}.owl-buttons > div, 
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_date_top_meta_wrap, 
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_inner, 
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_content, 
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_content:before, 
	{$rule}table, 
	{$rule}table td, 
	{$rule}table th, 
	{$rule}table tr {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_table thead th:not(:last-child){
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
	} 
	
	@media only screen and (min-width: 950px) and (max-width: 1440px) {
		{$rule}#page .content_wrap.r_sidebar .widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a,
		{$rule}#page .content_wrap.l_sidebar .widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
		}
	}
	/* Finish Borders Color */
	
	
	/* Start Custom Rules */
	{$rule}::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['total-school' . '_' . $scheme . '_hover']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['total-school' . '_' . $scheme . '_hover']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	";
	
	
	if ($scheme != 'default') {
		$custom_css .= "
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_top_zigzag:before, 
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_bot_zigzag:after {
			background-image: -webkit-linear-gradient(135deg, " . $cmsmasters_option['total-school' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-webkit-linear-gradient(45deg, " . $cmsmasters_option['total-school' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -moz-linear-gradient(135deg, " . $cmsmasters_option['total-school' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-moz-linear-gradient(45deg, " . $cmsmasters_option['total-school' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -ms-linear-gradient(135deg, " . $cmsmasters_option['total-school' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-ms-linear-gradient(45deg, " . $cmsmasters_option['total-school' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -o-linear-gradient(135deg, " . $cmsmasters_option['total-school' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-o-linear-gradient(45deg, " . $cmsmasters_option['total-school' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: linear-gradient(315deg, " . $cmsmasters_option['total-school' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					linear-gradient(45deg, " . $cmsmasters_option['total-school' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
		}
		";
	}
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	{$rule}.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return apply_filters('total_school_theme_colors_primary_filter', $custom_css);
}

