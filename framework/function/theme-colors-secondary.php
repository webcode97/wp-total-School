<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.1.3
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function total_school_theme_colors_secondary() {
	$cmsmasters_option = total_school_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.1.3
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		if (CMSMASTERS_DONATIONS) {
			$custom_css .= "
/***************** Start {$title} CMSMASTERS Donations Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.cmsmasters_campaigns .cmsmasters_owl_slider .owl-buttons > div span, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stat_title, 
	{$rule}.cmsmasters_donations_color {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.cmsmasters_single_slider_campaign .cmsmasters_stat_subtitle, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_stat_subtitle, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_target_number, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stat_subtitle, 
	{$rule}#page .cmsmasters_featured_campaign .campaign .cmsmasters_campaign_donated_percent .cmsmasters_stat_title, 
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_rest_amount, 
	{$rule}.cmsmasters_donations_link {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_campaigns .cmsmasters_owl_slider .owl-buttons > div:hover, 
	{$rule}#submit-donation-form input[type='checkbox'] + .field_before:after, 
	{$rule}#submit-donation-form input[type='radio'] + .field_before:after, 
	{$rule}.cmsmasters_campaigns .owl-pagination .owl-page.active, 
	{$rule}.cmsmasters_campaigns .owl-pagination .owl-page:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .preloader:after {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['total-school' . '_' . $scheme . '_link']) . ", 0.85);
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_donations_hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.cmsmasters_donations_heading {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.cmsmasters_campaigns .cmsmasters_owl_slider .owl-buttons > div:hover span, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .preloader, 
	{$rule}.cmsmasters_donations_bg {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_cont_wrap, 
	{$rule}.cmsmasters_featured_campaign .campaign, 
	{$rule}#submit-donation-form input[type='checkbox'] + .field_before:before, 
	{$rule}#submit-donation-form input[type='radio'] + .field_before:before, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.cmsmasters_donations_alternate {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_campaigns .cmsmasters_owl_slider .owl-buttons > div, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_campaign_inner, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_cont_wrap_bottom {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_donations_border {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_campaigns .owl-pagination .owl-page {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_details_item, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_info, 
	{$rule}#submit-donation-form input[type='checkbox'] + .field_before:before, 
	{$rule}#submit-donation-form input[type='radio'] + .field_before:before, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap > div, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap, 
	{$rule}.cmsmasters_donations .donation .img_placeholder, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_footer, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_cont_wrap_bottom, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_campaign_inner, 
	{$rule}.cmsmasters_featured_campaign .campaign, 
	{$rule}.cmsmasters_campaigns .owl-pagination .owl-page {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} CMSMASTERS Donations Color Scheme Rules ******************/


";
		}
		
		
		if (CMSMASTERS_WOOCOMMERCE) {
			$custom_css .= "
/***************** Start {$title} WooCommerce Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.widget > .product_list_widget del .amount, 
	{$rule}.widget_shopping_cart .cart_list .quantity, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_content .product_meta, 
	{$rule}.cmsmasters_single_product .price del, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table td.product-name, 
	{$rule}body .select2-container .select2-choice * , 
	{$rule}.cart_totals table, 
	{$rule}.shop_table td > .amount, 
	{$rule}.shop_table td strong > .amount, 
	{$rule}#page .remove, 
	{$rule}.out-of-stock, 
	{$rule}.stock, 
	{$rule}.cmsmasters_product .price del, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.woocommerce-MyAccount-navigation ul > li > a:hover, 
	{$rule}.widget_product_tag_cloud a, 
	{$rule}.widget_product_categories ul li a, 
	{$rule}.cmsmasters_woo_tabs .cmsmasters_tab_inner .comment-form label, 
	{$rule}.cmsmasters_update_totals, 
	{$rule}#page .cart_totals a.shipping-calculator-button, 
	{$rule}.required, 
	{$rule}.cmsmasters_star_rating .cmsmasters_star_color_wrap, 
	{$rule}.comment-form-rating .stars > span a:hover, 
	{$rule}.comment-form-rating .stars > span a.active, 
	{$rule}#page .remove:hover, 
	{$rule}.shop_table a:not(.button):hover, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .product-name strong, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}.shop_table.order_details .product-name strong, 
	{$rule}.shop_table.order_details tfoot tr:first-child th, 
	{$rule}.shop_table.order_details tfoot tr:first-child td, 
	{$rule}.widget_layered_nav ul li a:hover, 
	{$rule}.widget_layered_nav ul li.chosen a, 
	{$rule}.widget_layered_nav_filters ul li a:hover, 
	{$rule}.widget_layered_nav_filters ul li.chosen a, 
	{$rule}.widget > .product_list_widget a:hover, 
	{$rule}.widget_shopping_cart .cart_list a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button,
	{$rule}.widget_product_tag_cloud a:hover, 
	{$rule}.widget_price_filter .ui-slider-range, 
	{$rule}.shop_table thead th, 
	{$rule}.input-checkbox + label:after, 
	{$rule}.input-radio + label:after, 
	{$rule}input.shipping_method + label:after, 
	{$rule}.onsale, 
	{$rule}ul.order_details li, 
	{$rule}.widget_price_filter .ui-slider-handle {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.woocommerce-MyAccount-navigation ul > li.is-active > a, 
	{$rule}.widget_product_tag_cloud a:hover, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	@media only screen and (min-width: 768px) {
		{$rule}.woocommerce-MyAccount-navigation ul > li.is-active + li > a {
			" . cmsmasters_color_css('border-left-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		}
		{$rule}body.rtl .woocommerce-MyAccount-navigation ul > li.is-active + li > a {
			" . cmsmasters_color_css('border-right-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		}
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}.woocommerce-MyAccount-navigation ul > li.is-active + li > a {
			" . cmsmasters_color_css('border-top-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
		}
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */	
	{$rule}.widget_product_categories ul li a:hover, 
	{$rule}.widget_product_categories ul li.current-cat a, 
	{$rule}.cmsmasters_update_totals:hover, 
	{$rule}#page .cart_totals a.shipping-calculator-button:hover, 
	{$rule}.widget_shopping_cart .cart_list a:hover, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button:hover, 
	{$rule}.widget_product_categories ul li a:hover:before, 
	{$rule}.cmsmasters_product .cmsmasters_product_img .cmsmasters_product_add_wrap:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.link_hover_color {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.woocommerce-MyAccount-content .woocommerce-EditAccountForm.edit-account fieldset label, 
	{$rule}.woocommerce-MyAccount-navigation ul > li > a, 
	{$rule}.widget_shopping_cart .cart_list a, 
	{$rule}.widget_shopping_cart .total, 
	{$rule}.widget_shopping_cart .total strong, 
	{$rule}.cmsmasters_woo_tabs .cmsmasters_tab_inner .comment-form .comment-form-rating label, 
	{$rule}.cmsmasters_woo_tabs .cmsmasters_tab_inner .comment-form label span, 
	{$rule}.cmsmasters_single_product .price ins, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table tfoot tr:last-of-type * , 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .total, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong, 
	{$rule}.widget_shopping_cart .total, 
	{$rule}.widget_shopping_cart .total strong,  
	{$rule}.cmsmasters_product .price ins, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error li, 
	{$rule}#page .remove, 
	{$rule}.cmsmasters_woo_wrap_result .woocommerce-result-count, 
	{$rule}.cmsmasters_product .cmsmasters_product_cat, 
	{$rule}.cmsmasters_product .price, 
	{$rule}.cmsmasters_single_product .price, 
	{$rule}.cmsmasters_single_product .product_meta, 
	{$rule}.shop_attributes th, 
	{$rule}.shop_table, 
	{$rule}.shop_table a:not(.button), 
	{$rule}ul.order_details strong, 
	{$rule}.widget_layered_nav ul li, 
	{$rule}.widget_layered_nav ul li a, 
	{$rule}.widget_layered_nav_filters ul li, 
	{$rule}.widget_layered_nav_filters ul li a, 
	{$rule}.widget_product_categories ul li, 
	{$rule}.widget > .product_list_widget a, 
	{$rule}.widget_shopping_cart .cart_list a, 
	{$rule}.widget_shopping_cart .total {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.widget_product_tag_cloud a:hover, 
	{$rule}.shop_table thead th, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content:after, 
	{$rule}.cmsmasters_product .cmsmasters_product_add_inner .button, 
	{$rule}.onsale {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_added_product_info, 
	{$rule}.widget_product_tag_cloud a, 
	{$rule}.widget_shopping_cart .widget_shopping_cart_content, 
	{$rule}.input-checkbox + label:before, 
	{$rule}.input-radio + label:before, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}input.shipping_method + label:before,  
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content, 
	{$rule}.cmsmasters_product_inner {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}ul.order_details {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.widget_price_filter .price_slider, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error, 
	{$rule}.cmsmasters_product, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}ul.order_details strong {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.out-of-stock, 
	{$rule}.stock {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_star_rating .cmsmasters_star_trans_wrap, 
	{$rule}.comment-form-rating .stars > span {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget_product_categories ul li a:before, 
	{$rule}.cmsmasters_woo_tabs:before, 
	{$rule}div.products:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.woocommerce-MyAccount-navigation ul > li > a, 
	{$rule}.widget_product_tag_cloud a, 
	{$rule}.widget_shopping_cart .total, 
	{$rule}.widget_shopping_cart .cart_list, 
	{$rule}.widget_shopping_cart .widget_shopping_cart_content, 
	{$rule}.shop_attributes th, 
	{$rule}.shop_attributes td, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content:before, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list + p, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content, 
	{$rule}.cmsmasters_product_info, 
	{$rule}.cmsmasters_product_inner, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.input-checkbox + label:before, 
	{$rule}.input-radio + label:before, 
	{$rule}input.shipping_method + label:before, 
	{$rule}.shop_table th, 
	{$rule}.shop_table td, 
	{$rule}.cart_totals table th, 
	{$rule}.cart_totals table td, 
	{$rule}.shop_table .cart_item {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} WooCommerce Color Scheme Rules ******************/


";
		}
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {

			if ( tribe_events_views_v2_is_enabled() ) {
				$events_rule = "html .cmsmasters_tribe_events_views_v2 " . ( ( 'default' !== $scheme ) ? ".cmsmasters_color_scheme_{$scheme}" : '' );
				$rule_skeleton = ( ( 'default' !== $scheme ) ? "html .cmsmasters_tribe_events_views_v2.cmsmasters_tribe_events_style_mode_skeleton .cmsmasters_color_scheme_{$scheme} " : '' );
				$hover_rule = ( ( 'default' !== $scheme ) ? "html #page.cmsmasters_tribe_events_views_v2 .cmsmasters_color_scheme_{$scheme} " : '' );

				$cmsmasters_shortname = 'total-school';
				$cmsmasters_event_meta = '_color';

				$custom_css .= "
/***************** Start {$title} Tribe Events Color Scheme Rules ******************/
	{$events_rule} .tribe-events-calendar-list__event-description,
	{$events_rule} .tribe-events-calendar-list__event-venue,
	{$events_rule} .tribe-events-calendar-list__event-cost,
	{$events_rule} .tribe-events .tribe-events-calendar-latest-past__event-datetime-wrapper,
	{$events_rule} .tribe-events .tribe-events-calendar-latest-past__event-venue,
	{$events_rule} .tribe-events .tribe-events-calendar-latest-past__event-description,
	{$events_rule} .tribe-events .tribe-events-calendar-latest-past__event-cost,
	{$events_rule} .tribe-events-calendar-day__event-venue,
	{$events_rule} .tribe-events-calendar-day__event-cost,
	{$events_rule} .tribe-events-calendar-day__event-description,
	{$events_rule} .tribe-events-pro-photo__event-venue,
	{$events_rule} .tribe-events-pro-photo__event-cost,
	{$events_rule} .tribe-events-pro-summary__event-venue,
	{$events_rule} .tribe-events-pro-summary__event-cost,
	{$events_rule} .tribe-events-pro .tribe-events-pro-week-grid__events-time-tag,
	{$events_rule} .tribe-events-pro-map__event-venue,
	{$events_rule} .tribe-events-pro-map__event-cost,
	{$events_rule} .tribe-events-single .tribe-events-schedule .tribe-events-cost,
	{$events_rule} .tribe-events-single .tribe-events-single-event-description,
	{$events_rule} .tribe-events-single .tribe-events-event-meta .tribe-events-meta-group dd,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-datetime-wrapper,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-venue,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-cost,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-venue,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-cost,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-countdown .tribe-events-widget-countdown__number .tribe-events-widget-countdown__under,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__event-date-tag-month,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__event-datetime-wrapper,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-datetime-wrapper,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-date-tag-month,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-venue,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-cost-price,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-organizer-contact {
		" . cmsmasters_color_css( 'color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . $cmsmasters_event_meta ] ) . "
	}

	{$events_rule} .tribe-events .tribe-events-header__events-bar .tribe-events-c-events-bar__search-container .tribe-events-c-search__input-control input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$events_rule} .tribe-events .tribe-events-header__events-bar .tribe-events-c-events-bar__search-container .tribe-events-c-search__input-control input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus {
		" . cmsmasters_color_css( 'color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . $cmsmasters_event_meta ] ) . "
	}

	{$events_rule} .tribe-events .tribe-events-header__events-bar .tribe-events-c-events-bar__search-container .tribe-events-c-search__input-control input::-webkit-input-placeholder {
		" . cmsmasters_color_css( 'color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . $cmsmasters_event_meta ] ) . "
	}
	
	{$events_rule} .tribe-events .tribe-events-header__events-bar .tribe-events-c-events-bar__search-container .tribe-events-c-search__input-control input:-moz-placeholder {
		" . cmsmasters_color_css( 'color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . $cmsmasters_event_meta ] ) . "
	}

	{$events_rule} .tribe-events .tribe-events-header__events-bar .tribe-events-c-events-bar__search-container .tribe-events-c-search__input-control input:focus::-webkit-input-placeholder {
		" . cmsmasters_color_css( 'color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . $cmsmasters_event_meta ] ) . "
	}
	
	{$events_rule} .tribe-events .tribe-events-header__events-bar .tribe-events-c-events-bar__search-container .tribe-events-c-search__input-control input:focus:-moz-placeholder {
		" . cmsmasters_color_css( 'color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . $cmsmasters_event_meta ] ) . "
	}
	
	{$events_rule} .tribe-events-pro-organizer__meta .tribe-events-pro-organizer__meta-row .tribe-events-pro-organizer__meta-email a,
	{$events_rule} .tribe-events-pro-venue__meta .tribe-events-pro-venue__meta-details .tribe-events-pro-venue__meta-address-details a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__venue-info-group--website a {
		" . cmsmasters_color_css( 'color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . '_link' ] ) . "
	}

	{$hover_rule} .tribe-events .tribe-events-c-nav__next:focus,
	{$hover_rule} .tribe-events .tribe-events-c-nav__next:hover,
	{$hover_rule} .tribe-events .tribe-events-c-nav__prev:focus,
	{$hover_rule} .tribe-events .tribe-events-c-nav__prev:hover,
	{$hover_rule} .tribe-events .tribe-events-header__top-bar .tribe-events-c-top-bar__datepicker > button:hover,
	{$hover_rule} .tribe-events-calendar-list__event-title a:hover,
	{$hover_rule} .tribe-events .tribe-events-calendar-latest-past__event-title a:hover,
	{$hover_rule} .tribe-events-calendar-day__event-title a:hover,
	{$hover_rule} .tribe-events-pro-photo__event-title a:hover,
	{$hover_rule} .tribe-events-pro-summary__event-title a:hover,
	{$hover_rule} .tribe-events-pro .tribe-events-c-small-cta__link:hover,
	{$hover_rule} #tribe-events-pg-template .tribe-events-back a:hover,
	{$hover_rule} #tribe-events-l-container .tribe-events-back a:hover,
	{$hover_rule} .tribe-events-single .tribe-events-event-meta.primary > div dd a:hover,
	{$hover_rule} .tribe-events-single .tribe-events-event-meta.secondary > div dd a:hover,
	{$hover_rule} .tribe-events-single ul.tribe-related-events li .tribe-related-events-title a:hover,
	{$hover_rule} .tribe-events-pro-organizer__meta .tribe-events-pro-organizer__meta-row .tribe-events-pro-organizer__meta-email a:hover,
	{$hover_rule} .tribe-events-pro-venue__meta .tribe-events-pro-venue__meta-details .tribe-events-pro-venue__meta-address-details a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-title a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-widget-events-week__view-more a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-mobile-events__event-title a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-widget-events-week__view-more a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-calendar-month-mobile-events__mobile-event-title a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-calendar-month-mobile-events__mobile-event-title a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-widget-events-month__view-more a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-widget-events-month__view-more a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-countdown .tribe-events-widget-countdown__event-title a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__venue-name a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__view-more a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__event-title a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__venue-info-group--website a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-title a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__view-more a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-venue a:hover,
	{$hover_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-organizer-title-wrapper a:hover,
	{$hover_rule} .tribe-events .tribe-events-header__events-bar .tribe-events-c-events-bar__views .tribe-events-c-view-selector__content .tribe-events-c-view-selector__list-item:hover a,
	{$hover_rule} .tribe-events .tribe-events-header__events-bar .tribe-events-c-events-bar__views .tribe-events-c-view-selector__content .tribe-events-c-view-selector__list-item:focus a {
		" . cmsmasters_color_css( 'color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . '_hover' ] ) . "
	}
	
	{$events_rule} .tribe-events .tribe-events-c-top-bar__nav-link:hover,
	{$events_rule} .tribe-events .tribe-events-c-top-bar__nav-link:hover path {
		" . cmsmasters_color_css( 'color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . '_hover' ] ) . "
		" . cmsmasters_color_css( 'fill', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . '_hover' ] ) . "
	}

	{$events_rule} .tribe-events .tribe-events-c-nav__next,
	{$events_rule} .tribe-events .tribe-events-c-nav__prev,
	{$events_rule} .tribe-events .tribe-events-header__top-bar .tribe-events-c-top-bar__datepicker > button,
	{$events_rule} .tribe-events-calendar-list__month-separator-text,
	{$events_rule} .tribe-events-calendar-list__event-date-tag-weekday,
	{$events_rule} .tribe-events-calendar-list__event-date-tag-daynum,
	{$events_rule} .tribe-events-calendar-latest-past .tribe-events-calendar-latest-past__heading,
	{$events_rule} .tribe-events-calendar-latest-past .tribe-events-calendar-latest-past__event-date-tag-datetime > span,
	{$events_rule} .tribe-events .tribe-events-calendar-latest-past__event-title,
	{$events_rule} .tribe-events .tribe-events-calendar-latest-past__event-title a,
	{$events_rule} .tribe-events-calendar-day__type-separator-text,
	{$events_rule} .tribe-events-pro-photo__event-date-tag-month,
	{$events_rule} .tribe-events-pro-photo__event-date-tag-daynum,
	{$events_rule} .tribe-events-pro-summary__event-date-tag,
	{$events_rule} .tribe-events-pro-summary__event-title,
	{$events_rule} .tribe-events-pro-summary__event-title a,
	{$events_rule} .tribe-events-pro .tribe-events-pro-week-grid__header-column-weekday,
	{$events_rule} .tribe-events-pro .tribe-events-pro-week-grid__header-column-daynum,
	{$events_rule} .tribe-events-pro-map__event-date-tag-month,
	{$events_rule} .tribe-events-pro-map__event-date-tag-datetime,
	{$events_rule} .tribe-events-pro .tribe-events-c-small-cta__link,
	{$events_rule} #tribe-events-pg-template .tribe-events-back,
	{$events_rule} #tribe-events-pg-template .tribe-events-back a,
	{$events_rule} #tribe-events-l-container .tribe-events-back,
	{$events_rule} #tribe-events-l-container .tribe-events-back a,
	{$events_rule} .tribe-events-single .tribe-events-event-meta .tribe-events-single-section-title,
	{$events_rule} .tribe-events-single .tribe-events-event-meta .tribe-events-meta-group dt,
	{$events_rule} .cmsmasters_sidebar .widgettitle,
	{$events_rule} .tribe-events-pro-organizer__meta .tribe-events-pro-organizer__meta-title,
	{$events_rule} .tribe-events-pro-venue__meta .tribe-events-pro-venue__meta-title,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-day-selector__day-weekday,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-day-selector__day-daynum,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-title,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-title a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-pro-week-mobile-events__event-type-separator-text,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-widget-events-week__view-more,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-week .tribe-events-widget-events-week__view-more a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-day-selector__day-weekday,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-pro-week-day-selector__day-daynum,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-widget-events-week__view-more,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-shortcode-events-week .tribe-events-widget-events-week__view-more a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-c-top-bar__nav-list-date,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-calendar-month__header-row span,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-c-day-marker__date,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-widget-events-month__view-more,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-month .tribe-events-widget-events-month__view-more a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-c-top-bar__nav-list-date,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-calendar-month__header-row span,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-c-day-marker__date,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-widget-events-month__view-more,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-widget-events-shortcode-month .tribe-events-widget-events-month__view-more a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-countdown .tribe-events-widget-countdown__header-title,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-countdown .tribe-events-widget-countdown__event-title a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-countdown .tribe-events-widget-countdown__number,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__venue-name,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__venue-name a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__event-date-tag-daynum,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__venue-info-group,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__view-more,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__view-more a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__event-title,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-featured-venue .tribe-events-widget-featured-venue__event-title a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__header-title,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-date-tag-daynum,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-title,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-title a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__view-more a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-venue a,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-organizer-title-wrapper,
	{$events_rule} .tribe-events-widget.tribe-common.tribe-events.tribe-events-view--widget-events-list .tribe-events-widget-events-list__event-organizer-title-wrapper a {
		" . cmsmasters_color_css( 'color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . '_heading' ] ) . "
	}

	{$events_rule} .tribe-events-widget.tribe-events-widget-events-month .tribe-events-calendar-month__mobile-events-icon,
	{$events_rule} .tribe-events-widget.tribe-events-widget-events-shortcode-month .tribe-events-calendar-month__mobile-events-icon {
		" . cmsmasters_color_css( 'background-color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . '_heading' ] ) . "
	}

	{$events_rule} .tribe-events-pro .tribe-events-pro-map__event-card-button:hover,
	{$events_rule} .tribe-events-pro .tribe-events-pro-map__event-card-button:focus {
		" . cmsmasters_color_css( 'background-color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . '_alternate' ] ) . "
	}

	{$events_rule} .tribe-events .tribe-events-c-top-bar__nav-link,
	{$events_rule} .tribe-events .tribe-events-c-top-bar__nav-link path {
		" . cmsmasters_color_css( 'color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . '_border' ] ) . "
		" . cmsmasters_color_css( 'fill', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . '_border' ] ) . "
	}

	{$rule_skeleton} .tribe-events-c-view-selector__content,
	{$events_rule} .tribe-events-pro .tribe-events-pro-map__event-card-button,
	{$events_rule} .tribe-events-pro .tribe-events-pro-map__event-card-button:hover,
	{$events_rule} .tribe-events-pro .tribe-events-pro-map__event-card-button:focus {
		" . cmsmasters_color_css( 'border-color', $cmsmasters_option[ $cmsmasters_shortname . '_' . $scheme . '_border' ] ) . "
	}
/***************** Finish {$title} Tribe Events Color Scheme Rules ******************/

";
			} else {
				$custom_css .= "
/***************** Start {$title} Events Color Scheme Rules ******************/

	/* Start Main Content Font Color */	
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name a, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-timer td span, 
	{$rule}.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}.tribe-events-sub-nav li span:not([class]), 
	{$rule}.tribe-events-tooltip, 
	{$rule}.tribe-events-tooltip *, 
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a, 
	{$rule}.cmsmasters_single_event_meta_wrap .cmsmasters_single_event_meta .tribe-events-meta-group, 
	{$rule}.tribe-this-week-events-widget .tribe-events-page-title, 
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}#tribe-bar-views .tribe-bar-views-list li.tribe-bar-active, 
	{$rule}#tribe-bar-views .tribe-bar-views-list li:hover, 
	{$rule}.cmsmasters_event_date .cmsmasters_event_mon, 
	{$rule}.tribe-events-photo .tribe-events-event-meta .time-details:before, 
	{$rule}#tribe-events-content > .tribe-events-button, 
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a, 
	{$rule}#tribe-bar-views .tribe-bar-views-list li:hover, 
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a:hover, 
	{$rule}.tribe-events-list .tribe-events-event-meta .author > div:before, 
	{$rule}.cmsmasters_single_event .tribe-events-date:before, 
	{$rule}.cmsmasters_single_event .tribe-events-cost:before, 
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a:before, 
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a:hover, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right a:before, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right a:hover, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right a:before, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right a:hover, 
	{$rule}.tribe-mini-calendar tbody .tribe-events-present, 
	{$rule}.tribe-mini-calendar tbody .tribe-events-present a, 
	{$rule}.widget .vcalendar [class*=cmsmasters_theme_icon]:before, 
	{$rule}.tribe-mini-calendar-list-wrapper [class*=cmsmasters_theme_icon]:before, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name a:hover, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name:before, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a:hover, 
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .duration:before, 
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue:before, 
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.tribe-this-week-events-widget .tribe-this-week-widget-header-date, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-timer td, 
	{$rule}.tribe-events-grid .tribe-grid-header, 
	{$rule}.tribe-events-sub-nav li:hover span:not([class]), 
	{$rule}table.tribe-events-calendar thead th, 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-], 
	{$rule}.tribe-events-grid .tribe-grid-header a:hover, 
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a, 
	{$rule}.tribe-mini-calendar .tribe-mini-calendar-nav, 
	{$rule}.tribe-mini-calendar tbody a:before, 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-has-events:before, 
	{$rule}.tribe-this-week-events-widget .this-week-today .tribe-this-week-widget-header-date,
	{$rule}#page ~ .datepicker table .active {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_event_date, 
	{$rule}.tribe-events-sub-nav li:hover span:not([class]),
	{$rule}#tribe-bar-views .tribe-bar-views-list li.tribe-bar-active, 
	{$rule}#tribe-bar-views .tribe-bar-views-list li:hover  {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}#tribe-events-content > .tribe-events-button:hover, 
	{$rule}ul.tribe-related-events .tribe-related-events-title:hover, 
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a:hover, 
	{$rule}.event_hover, 
	{$rule}.tribe-mini-calendar tbody a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-week-event:hover .vevent .entry-title a, 
	{$rule}.tribe-events-grid .tribe-grid-header a:hover, 
	{$rule}.tribe-events-grid .tribe-grid-header .tribe-week-today, 
	{$rule}#tribe-bar-views.tribe-bar-views-open .button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_hover']) . "
	}
	
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.cmsmasters_event_date, 
	{$rule}.tribe-events-tooltip .entry-title, 
	{$rule}ul.tribe-related-events .tribe-related-events-title, 
	{$rule}.tribe-bar-filters-inner > div label, 
	{$rule}#tribe-bar-views .tribe-bar-views-list li, 
	{$rule}#tribe-bar-views .tribe-bar-views-list li, 
	{$rule}.tribe-events-sub-nav li a, 
	{$rule}.tribe-events-notices, 
	{$rule}.cmsmasters_single_event_meta dt, 
	{$rule}.tribe-events-venue .tribe-events-event-meta, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right a, 
	{$rule}.tribe-events-organizer .tribe-events-event-meta, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right a, 
	{$rule}.tribe-mini-calendar thead a:hover, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a, 
	{$rule}.tribe-mobile-day .tribe-events-event-schedule-details, 
	{$rule}.tribe-mobile-day .tribe-event-schedule-details {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.tribe-mini-calendar tbody .tribe-mini-calendar-today a:before, 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-has-events.mobile-active:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.tribe-this-week-events-widget .tribe-this-week-widget-header-date, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-timer td.tribe-countdown-timer-separator span, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-timer td, 
	{$rule}.tribe-mini-calendar thead, 
	{$rule}.tribe-mini-calendar thead a, 
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a, 
	{$rule}.tribe-events-grid .tribe-grid-header span,
	{$rule}.tribe-events-sub-nav li:hover span:not([class]), 
	{$rule}.tribe-events-tooltip:after, 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-], 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-] a, 
	{$rule}.event_bg, 
	{$rule}.tribe-mini-calendar .tribe-mini-calendar-dayofweek {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tribe-events-countdown-widget .tribe-countdown-timer td span, 
	{$rule}.tribe-mini-calendar, 
	{$rule}.tribe-events-photo .tribe-events-photo-event-wrap, 
	{$rule}.tribe-events-grid .tribe-grid-allday, 
	{$rule}.tribe-events-tooltip, 
	{$rule}table.tribe-events-calendar,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-othermonth div[id*=tribe-events-daynum-], 
	{$rule}ul.tribe-related-events li, 
	{$rule}.tribe-events-grid .tribe-scroller, 
	{$rule}.tribe-events-grid .tribe-week-grid-hours, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}table.tribe-events-calendar thead th, 
	{$rule}.tribe-this-week-events-widget .this-week-today .tribe-this-week-widget-header-date {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_alternate']) . "
	}

	{$rule}.tribe-events-sub-nav li span:not([class]), 
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	{$rule}.tribe-events-notices {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.tribe-mini-calendar tbody .tribe-events-othermonth, 
	{$rule}.tribe-mini-calendar tbody .tribe-events-othermonth a {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
	}
	
	.tribe-events-single .post_nav:before, 
	.tribe-events-single .post_nav:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-timer td span, 
	{$rule}.tribe-mini-calendar thead th.tribe-mini-calendar-dayofweek, 
	{$rule}.tribe-mini-calendar tbody td, 
	{$rule}.tribe-events-photo .tribe-events-event-meta, 
	{$rule}.tribe-events-photo .tribe-events-event-details, 
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title, 
	{$rule}.tribe-events-sub-nav li span:not([class]), 
	{$rule}.tribe-events-tooltip:before, 
	{$rule}.tribe-events-tooltip .tribe-events-event-body, 
	{$rule}table.tribe-events-calendar tbody td div[id*='tribe-events-daynum-'], 
	{$rule}#tribe-bar-views .tribe-bar-views-list li, 
	{$rule}#tribe-events-bar, 
	{$rule}ul.tribe-related-events .tribe-related-event-info, 
	{$rule}.cmsmasters_single_event_meta_wrap .cmsmasters_single_event_meta .cmsmasters_event_meta_info_item, 
	{$rule}.tribe-events-single > div,  
	{$rule}.cmsmasters_single_event_content_wrapper, 
	{$rule}table.tribe-events-calendar tbody td, 
	{$rule}table.tribe-events-calendar tbody td .tribe_events, 
	{$rule}.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}.tribe-events-list .tribe-events-day-time-slot > h5, 
	{$rule}.tribe-events-list .type-tribe_events, 
	{$rule}.tribe-events-photo .tribe-events-page-title, 
	{$rule}.tribe-events-map .tribe-events-page-title, 
	{$rule}.tribe-events-grid .tribe-scroller, 
	{$rule}.tribe-events-grid .tribe-week-grid-block div, 
	{$rule}.tribe-events-grid .tribe-grid-allday, 
	{$rule}.tribe-events-grid .tribe-grid-content-wrap .column, 
	{$rule}.tribe-events-grid .tribe-week-grid-hours div, 
	{$rule}.cmsmasters_single_event, 
	{$rule}.widget .vcalendar .type-tribe_events, 
	{$rule}.tribe-mini-calendar-list-wrapper .type-tribe_events, 
	{$rule}.tribe-mobile-day .tribe-events-mobile, 
	{$rule}.tribe-this-week-events-widget .tribe-this-week-widget-day {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} Events Color Scheme Rules ******************/


";
			}
		}
	}
	
	
	$custom_css .= "
/***************** Start Header Middle Color Scheme Rules ******************/

	/* Start Header Middle Content Color */
	.header_mid,
	.header_mid input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.header_mid textarea,
	.header_mid select,
	.header_mid option {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_mid_color']) . "
	}
	/* Finish Header Middle Content Color */
	
	
	/* Start Header Middle Primary Color */
	.header_mid .resp_mid_nav_wrap .resp_mid_nav, 
	.header_mid .search_wrap .search_bar_wrap .search_button button:before, 
	.header_mid .search_wrap .search_bar_wrap .search_button button, 
	.header_mid a {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_mid_link']) . "
	}
	
	@media only screen and (max-width: 1440px) {
		.header_donation_but_wrap .header_donation_but .cmsmasters_button, 
		.header_donation_but_wrap .header_donation_but .cmsmasters_button:before {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_mid_link']) . "
		}
		
		.header_donation_but_wrap .header_donation_but .cmsmasters_button {
			background-color:transparent;
		}
	}
	
	.header_mid .button:hover, 
	.header_mid input[type=submit]:hover, 
	.header_mid input[type=button]:hover, 
	.header_mid button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_mid_link']) . "
	}
	
	.header_mid .search_wrap .search_bar_wrap .search_button button {
		background:transparent;
	}
	
	@media only screen and (max-width: 768px) {
		#header .header_mid .search_wrap .search_bar_wrap .search_button button {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_mid_link']) . "
		}
	}
	/* Finish Header Middle Primary Color */
	
	
	/* Start Header Middle Rollover Color */
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:hover, 
	.header_mid .resp_mid_nav_wrap .resp_mid_nav.active, 
	.header_mid .search_wrap .search_bar_wrap .search_button button:hover:before, 
	.header_mid .search_wrap .search_bar_wrap .search_button button:hover, 
	.header_mid a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_mid_hover']) . "
	}
	
	@media only screen and (max-width: 1440px) {
		.header_donation_but_wrap .header_donation_but .cmsmasters_button:hover, 
		.header_donation_but_wrap .header_donation_but .cmsmasters_button:hover:before {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_mid_hover']) . "
		}
	}
	
	.header_mid .button, 
	.header_mid input[type=submit], 
	.header_mid input[type=button], 
	.header_mid button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_mid_hover']) . "
	}
	
	.header_mid input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	.header_mid textarea:focus,
	.header_mid select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_header_mid_hover']) . "
	}
	/* Finish Header Middle Rollover Color */
	
	
	/* Start Header Middle Background Color */
	.header_mid .button, 
	.header_mid input[type=submit], 
	.header_mid input[type=button], 
	.header_mid button, 
	.header_mid .button:hover, 
	.header_mid input[type=submit]:hover, 
	.header_mid input[type=button]:hover, 
	.header_mid button:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_mid_bg']) . "
	}

	.header_mid,
	.header_mid input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.header_mid textarea,
	.header_mid select,
	.header_mid option {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_mid_bg']) . "
	}
	/* Finish Header Middle Background Color */
	
	
	/* Start Header Middle Background Color on Scroll */
	.navi_scrolled .header_mid {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_mid_bg_scroll']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_mid_bg_scroll']) . "
		}
	}
	/* Finish Header Middle Background Color on Scroll */
	
	
	/* Start Header Middle Borders Color */
	.header_mid input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.header_mid textarea,
	.header_mid select,
	.header_mid option {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_header_mid_border']) . "
	}
	/* Finish Header Middle Borders Color */
	
	
	/* Start Header Middle Custom Rules */
	.header_mid ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['total-school' . '_header_mid_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_mid_bg']) . "
	}
	
	.header_mid ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['total-school' . '_header_mid_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_mid_bg']) . "
	}
	/* Finish Header Middle Custom Rules */

/***************** Finish Header Middle Color Scheme Rules ******************/



/***************** Start Header Bottom Color Scheme Rules ******************/

	/* Start Header Bottom Content Color */
	.header_bot,
	.header_bot input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.header_bot textarea,
	.header_bot select,
	.header_bot option, 
	.header_bot .resp_bot_nav_wrap .resp_bot_nav, 
	.header_bot .resp_bot_nav_wrap .resp_bot_nav:hover, 
	.header_bot .resp_bot_nav_wrap .resp_bot_nav.active	{
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_bot_color']) . "
	}
	/* Finish Header Bottom Content Color */
	
	
	/* Start Header Bottom Primary Color */
	.header_bot a {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_bot_link']) . "
	}
	
	.header_bot .button:hover, 
	.header_bot input[type=submit]:hover, 
	.header_bot input[type=button]:hover, 
	.header_bot button:hover, 
	.header_bot .search_wrap .search_bar_wrap .search_button button:hover, 
	.header_bot .search_wrap.search_opened .search_bar_wrap .search_button button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_bot_link']) . "
	}
	/* Finish Header Bottom Primary Color */
	
	
	/* Start Header Bottom Rollover Color */
	.header_bot a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_bot_hover']) . "
	}
	
	.header_bot .button, 
	.header_bot input[type=submit], 
	.header_bot input[type=button], 
	.header_bot button,
	.header_bot .search_wrap .search_bar_wrap .search_button button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_bot_hover']) . "
	}
	
	.header_bot input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	.header_bot textarea:focus,
	.header_bot select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_header_bot_hover']) . "
	}
	/* Finish Header Bottom Rollover Color */
	
	
	/* Start Header Bottom Background Color */
	.header_bot .button, 
	.header_bot input[type=submit], 
	.header_bot input[type=button], 
	.header_bot button, 
	.header_bot .search_wrap .search_bar_wrap .search_button button {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_bot_bg']) . "
	}
	
	.header_bot,
	.header_bot input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_bot_bg']) . "
	}
	/* Finish Header Bottom Background Color */
	
	
	/* Start Header Bottom Background Color on Scroll */
	.navi_scrolled .header_bot {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_bot_bg_scroll']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_bot_bg_scroll']) . "
		}
	}
	/* Finish Header Bottom Background Color on Scroll */
	
	
	/* Start Header Bottom Borders Color */
	.header_bot input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_header_bot_border']) . "
	}
	/* Finish Header Bottom Borders Color */
	
	
	/* Start Header Bottom Custom Rules */
	.header_bot ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['total-school' . '_header_bot_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_bot_bg']) . "
	}
	
	.header_bot ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['total-school' . '_header_bot_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_bot_bg']) . "
	}
	/* Finish Header Bottom Custom Rules */

/***************** Finish Header Bottom Color Scheme Rules ******************/



/***************** Start Navigation Color Scheme Rules ******************/

	/* Start Navigation Title Link Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_navigation_title_link']) . "
		}
	}
	/* Finish Navigation Title Link Color */
	
	
	/* Start Navigation Title Link Hover Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li.menu-item-highlight > a,
		ul.navigation > li > a:hover,
		ul.navigation > li > a:hover .nav_subtitle,
		ul.navigation > li:hover > a,
		ul.navigation > li:hover > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_navigation_title_link_hover']) . "
		}
	}
	/* Finish Navigation Title Link Hover Color */
	
	
	/* Start Navigation Title Link Current Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li.menu-item.current-menu-item > a, 
		ul.navigation > li.menu-item.current-menu-item > a .nav_subtitle, 
		ul.navigation > li.menu-item.current-menu-ancestor > a, 
		ul.navigation > li.menu-item.current-menu-ancestor > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_navigation_title_link_current']) . "
		}
	}
	/* Finish Navigation Title Link Current Color */
	
	
	/* Start Navigation Title Link Subtitle Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_navigation_title_link_subtitle']) . "
		}
		
		ul.navigation > li > a .nav_tag:before {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_navigation_title_link_subtitle']) . "
		}
	}
	/* Finish Navigation Title Link Subtitle Color */
	
	
	/* Start Navigation Title Link Background Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a .nav_tag {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_navigation_title_link_bg']) . "
		}
	
		ul.navigation > li > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_navigation_title_link_bg']) . "
		}
	}
	/* Finish Navigation Title Link Background Color */
	
	
	/* Start Navigation Title Link Hover Background Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a:hover,
		ul.navigation > li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_navigation_title_link_bg_hover']) . "
		}
	}
	/* Finish Navigation Title Link Hover Background Color */
	
	
	/* Start Navigation Title Link Current Background Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li.menu-item.current-menu-item > a, 
		ul.navigation > li.menu-item.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_navigation_title_link_bg_current']) . "
		}
	}
	/* Finish Navigation Title Link Current Background Color */
	
	
	/* Start Navigation Title Link Border Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_navigation_title_link_border']) . "
		}
	}
	/* Finish Navigation Title Link Border Color */
	
	
	/* Start Navigation Dropdown Text Color */
	.navigation li .menu-item-mega-description-container, 
	.navigation li .menu-item-mega-description-container * {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_navigation_dropdown_text']) . "
	}
	/* Finish Navigation Dropdown Tex Color */
	
	
	/* Start Navigation Dropdown Background Color */
	@media only screen and (max-width: 1024px) {
		ul.navigation {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_navigation_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1025px) {
		ul.navigation ul, 
		ul.navigation .menu-item-mega-container {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_navigation_dropdown_bg']) . "
		}
	}
	/* Finish Navigation Dropdown Background Color */
	
	
	/* Start Navigation Dropdown Border Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation ul, 
		ul.navigation .menu-item-mega-container {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_navigation_dropdown_border']) . "
		}
	}
	/* Finish Navigation Dropdown Border Color */
	
	
	/* Start Navigation Dropdown Link Color */
	.navigation li a, 
	.navigation li a .nav_tag {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_navigation_dropdown_link']) . "
	}
	/* Finish Navigation Dropdown Link Color */
	
	
	/* Start Navigation Dropdown Link Hover Color */
	.navigation li > a:hover,
	.navigation li > a:hover .nav_subtitle, 
	.navigation li.menu-item-highlight > a, 
	.navigation li.current-menu-item > a, 
	.navigation li.current-menu-item > a .nav_subtitle, 
	.navigation li.current-menu-ancestor > a, 
	.navigation li.current-menu-ancestor > a .nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_navigation_dropdown_link_hover']) . "
	}
	
	.navigation li a .nav_tag {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_navigation_dropdown_link_hover']) . "
	}
		
	@media only screen and (min-width: 1025px) {
		ul.navigation li > ul li:hover > a, 
		ul.navigation li > ul li:hover > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_navigation_dropdown_link_hover']) . "
		}
	}
	/* Finish Navigation Dropdown Link Hover Color */
	
	
	/* Start Navigation Dropdown Link Subtitle Color */
	.navigation li a .nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_navigation_dropdown_link_subtitle']) . "
	}
	/* Finish Navigation Dropdown Link Subtitle Color */
	
	
	/* Start Navigation Dropdown Link Hover Highlight Color */
	ul.navigation ul li.menu-item-highlight > a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_navigation_dropdown_link_highlight']) . "
	}
	/* Finish Navigation Dropdown Link Hover Highlight Color */
	
	
	/* Start Navigation Dropdown Link Border Color */
	.navigation li {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_navigation_dropdown_link_border']) . "
	}
	/* Finish Navigation Dropdown Link Border Color */

/***************** Finish Navigation Color Scheme Rules ******************/



/***************** Start Header Top Color Scheme Rules ******************/

	/* Start Header Top Content Color */
	.header_top .responsive_top_nav, 
	.header_top {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_top_color']) . "
	}
	/* Finish Header Top Content Color */
	
	
	/* Start Header Top Primary Color */
	.header_top a, 
	.header_top .header_top_but:hover, 
	.header_top .header_top_but.opened, 
	.header_top .responsive_top_nav {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_top_link']) . "
	}
	/* Finish Header Top Primary Color */
	
	
	/* Start Header Top Rollover Color */
	.header_top a:hover,
	.header_top .meta_wrap [class^=cmsmasters-icon-]:before,
	.header_top .meta_wrap [class*= cmsmasters-icon-]:before,
	.header_top .header_top_but {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_top_hover']) . "
	}
	/* Finish Header Top Rollover Color */
	
	
	/* Start Header Top Background Color */
	.header_top .responsive_top_nav, 
	.header_top {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_top_bg']) . "
	}
	/* Finish Header Top Background Color */
	
	
	/* Start Header Top Borders Color */
	.header_top .header_top_but {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_header_top_border']) . "
	}
	/* Finish Header Top Borders Color */
	
	
	/* Start Header Top Custom Rules */
	.header_top ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['total-school' . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_top_bg']) . "
	}
	
	.header_top ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['total-school' . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_top_bg']) . "
	}
	/* Finish Header Top Custom Rules */

/***************** Finish Header Top Color Scheme Rules ******************/



/***************** Start Header Top Navigation Color Scheme Rules ******************/

	/* Start Header Top Navigation Title Link Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_top_title_link']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Color */
	
	
	/* Start Header Top Navigation Title Link Hover Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a:hover,
		ul.top_line_nav > li:hover > a,
		ul.top_line_nav > li.current-menu-item > a,
		ul.top_line_nav > li.current-menu-ancestor > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_top_title_link_hover']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Hover Color */
	
	
	/* Start Header Top Navigation Title Link Background Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_top_title_link_bg']) . "
		}
	}
	
	@media only screen and (max-width: 1024px) {
		ul.top_line_nav {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_top_title_link_bg']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Background Color */
	
	
	/* Start Header Top Navigation Title Link Hover Background Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a:hover,
		ul.top_line_nav > li:hover > a,
		ul.top_line_nav > li.current-menu-item > a,
		ul.top_line_nav > li.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_top_title_link_bg_hover']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Hover Background Color */
	
	
	/* Start Header Top Navigation Title Link Border Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_header_top_title_link_border']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Border Color */
	
	
	/* Start Header Top Navigation Dropdown Background Color */	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_top_dropdown_bg']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Background Color */
	
	
	/* Start Header Top Navigation Dropdown Border Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_header_top_dropdown_border']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Border Color */
	
	
	/* Start Header Top Navigation Dropdown Link Color */
	.top_line_nav li a {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_top_dropdown_link']) . "
	}
	/* Finish Header Top Navigation Dropdown Link Color */
	
	
	/* Start Header Top Navigation Dropdown Link Hover Color */
	.top_line_nav li > a:hover,
	.top_line_nav li.current-menu-item > a {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_top_dropdown_link_hover']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul li:hover > a, 
		ul.top_line_nav ul li.current-menu-ancestor > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_header_top_dropdown_link_hover']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Link Hover Color */
	
	
	/* Start Header Top Navigation Dropdown Link Hover Highlight Color */
	.top_line_nav li > a:hover,
	.top_line_nav li.current-menu-item > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_top_dropdown_link_highlight']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul li:hover > a,
		ul.top_line_nav ul li.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_header_top_dropdown_link_highlight']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Link Hover Highlight Color */
	
	
	/* Start Header Top Navigation Dropdown Link Border Color */
	.top_line_nav li {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['total-school' . '_header_top_dropdown_link_border']) . "
	}
	/* Finish Header Top Navigation Dropdown Link Border Color */

/***************** Finish Header Top Navigation Color Scheme Rules ******************/

";
	
	
	return apply_filters('total_school_theme_colors_secondary_filter', $custom_css);
}

