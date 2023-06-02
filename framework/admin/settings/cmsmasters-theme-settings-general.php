<?php 
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.5
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function total_school_options_general_tabs() {
	$cmsmasters_option = total_school_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'total-school');
	
	if ($cmsmasters_option['total-school' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'total-school');
	}
	
	$tabs['header'] = esc_attr__('Header', 'total-school');
	$tabs['content'] = esc_attr__('Content', 'total-school');
	$tabs['footer'] = esc_attr__('Footer', 'total-school');
	
	return $tabs;
}


function total_school_options_general_sections() {
	$tab = total_school_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'total-school');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'total-school');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'total-school');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'total-school');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'total-school');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;
} 


function total_school_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = total_school_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'total-school' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'liquid', 
			'choices' => array( 
				esc_html__('Liquid', 'total-school') . '|liquid', 
				esc_html__('Boxed', 'total-school') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'total-school' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				esc_html__('Image', 'total-school') . '|image', 
				esc_html__('Text', 'total-school') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'total-school' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'total-school'), 
			'desc' => esc_html__('Choose your website logo image.', 'total-school'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'total-school' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'total-school'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'total-school'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'total-school' . '_logo_url_overlaps', 
			'title' => esc_html__('Logo Image For Overlaps', 'total-school'), 
			'desc' => esc_html__('Choose your website logo image for overlaps.', 'total-school'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_overlaps.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'total-school' . '_logo_url_retina_overlaps', 
			'title' => esc_html__('Retina Logo Image For Overlaps', 'total-school'), 
			'desc' => esc_html__('Choose logo image for retina displays and overlaps.', 'total-school'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_overlaps_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'total-school' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'total-school'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : 'Total School'), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'total-school' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'total-school'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'total-school' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'total-school'), 
			'desc' => esc_html__('enable', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'total-school' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'total-school'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'total-school' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'total-school'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'total-school' . '_bg_col', 
			'title' => esc_html__('Background Color', 'total-school'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'total-school' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'total-school' . '_bg_img', 
			'title' => esc_html__('Background Image', 'total-school'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'total-school'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'total-school' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'total-school') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'total-school') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'total-school') . '|repeat-y', 
				esc_html__('Repeat', 'total-school') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'total-school' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'total-school'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				esc_html__('Top Left', 'total-school') . '|top left', 
				esc_html__('Top Center', 'total-school') . '|top center', 
				esc_html__('Top Right', 'total-school') . '|top right', 
				esc_html__('Center Left', 'total-school') . '|center left', 
				esc_html__('Center Center', 'total-school') . '|center center', 
				esc_html__('Center Right', 'total-school') . '|center right', 
				esc_html__('Bottom Left', 'total-school') . '|bottom left', 
				esc_html__('Bottom Center', 'total-school') . '|bottom center', 
				esc_html__('Bottom Right', 'total-school') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'total-school' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_html__('Scroll', 'total-school') . '|scroll', 
				esc_html__('Fixed', 'total-school') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'total-school' . '_bg_size', 
			'title' => esc_html__('Background Size', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_html__('Auto', 'total-school') . '|auto', 
				esc_html__('Cover', 'total-school') . '|cover', 
				esc_html__('Contain', 'total-school') . '|contain' 
			) 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'total-school' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'total-school'), 
			'desc' => esc_html__('enable', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'total-school' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'total-school'), 
			'desc' => esc_html__('enable', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'total-school' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'total-school' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'total-school'), 
			'desc' => esc_html__('pixels', 'total-school'), 
			'type' => 'number', 
			'std' => '34', 
			'min' => '30' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'total-school' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'total-school'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'total-school') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'total-school' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_html__('None', 'total-school') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'total-school') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'total-school') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'total-school' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'default', 
			'choices' => array( 
				esc_html__('Default Style', 'total-school') . '|default', 
				esc_html__('Compact Style Left Navigation', 'total-school') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'total-school') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'total-school') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'total-school' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'total-school'), 
			'desc' => esc_html__('pixels', 'total-school'), 
			'type' => 'number', 
			'std' => '98', 
			'min' => '80' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'total-school' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'total-school'), 
			'desc' => esc_html__('pixels', 'total-school'), 
			'type' => 'number', 
			'std' => '50', 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'total-school' . '_header_search', 
			'title' => esc_html__('Header Search', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
			
		if (CMSMASTERS_DONATIONS) {
			$options[] = array( 
				'section' => 'header_section', 
				'id' => 'total-school' . '_header_donations_but', 
				'title' => esc_html__('Header Donations Button', 'total-school'), 
				'desc' => esc_html__('show', 'total-school'), 
				'type' => 'checkbox', 
				'std' => 0 
			);
			
			$options[] = array( 
				'section' => 'header_section', 
				'id' => 'total-school' . '_header_donations_but_text', 
				'title' => esc_html__('Header Donations Button Text', 'total-school'), 
				'desc' => '', 
				'type' => 'text', 
				'std' => esc_html__('Donate Now!', 'total-school'), 
				'class' => 'nohtml' 
			);
		}
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'total-school' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_html__('None', 'total-school') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'total-school') . '|social', 
				esc_html__('Header Custom HTML', 'total-school') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'total-school' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'total-school'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'total-school') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		if (CMSMASTERS_WOOCOMMERCE) {
			$options[] = array(
				'section' => 'header_section',
				'id' => 'total-school' . '_woocommerce_cart_dropdown',
				'title' => esc_html__('Disable WooCommerce Cart', 'total-school'),
				'desc' => '',
				'type' => 'checkbox',
				'std' => 0
			);
		}
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'total-school'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'total-school'), 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'total-school'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'total-school'), 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'total-school'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'total-school'), 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
	if (CMSMASTERS_EVENTS_CALENDAR) {
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_events_layout', 
			'title' => esc_html__('Events Calendar Layout Type', 'total-school'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
	}
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'total-school'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'total-school'), 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'left', 
			'choices' => array( 
				esc_html__('Left', 'total-school') . '|left', 
				esc_html__('Right', 'total-school') . '|right', 
				esc_html__('Center', 'total-school') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_heading_scheme', 
			'title' => esc_html__('Heading Color Scheme by Default', 'total-school'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'total-school'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'total-school'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'total-school') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'total-school') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'total-school') . '|repeat-y', 
				esc_html__('Repeat', 'total-school') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_html__('Scroll', 'total-school') . '|scroll', 
				esc_html__('Fixed', 'total-school') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_html__('Auto', 'total-school') . '|auto', 
				esc_html__('Cover', 'total-school') . '|cover', 
				esc_html__('Contain', 'total-school') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'total-school'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => '#df504b' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'total-school'), 
			'desc' => esc_html__('pixels', 'total-school'), 
			'type' => 'number', 
			'std' => '224', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Color Scheme', 'total-school'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'total-school'), 
			'desc' => esc_html__('show', 'total-school') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'total-school' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'total-school'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '14141414', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'total-school' . '_footer_scheme', 
			'title' => esc_html__('Footer Color Scheme', 'total-school'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'total-school' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'small', 
			'choices' => array( 
				esc_html__('Default', 'total-school') . '|default', 
				esc_html__('Small', 'total-school') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'total-school' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'total-school'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'nav', 
			'choices' => array( 
				esc_html__('None', 'total-school') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'total-school') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'total-school') . '|social', 
				esc_html__('Custom HTML', 'total-school') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'total-school' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'total-school' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'total-school'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'total-school'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'total-school' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'total-school'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'total-school'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'total-school' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'total-school' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'total-school' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'total-school'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'total-school') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'total-school' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'total-school'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => 'Total School' . ' &copy; ' . date('Y') . ' / ' . esc_html__('All Rights Reserved', 'total-school'), 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;
}

