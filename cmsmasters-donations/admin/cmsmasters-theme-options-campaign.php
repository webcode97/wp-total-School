<?php 
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.0
 * 
 * Donations Campaign Options Functions
 * Created by CMSMasters
 * 
 */


if (!function_exists('total_school_get_custom_campaign_meta_fields')) {
function total_school_get_custom_campaign_meta_fields() {
	$cmsmasters_option = total_school_get_global_options();
	
	
	$cmsmasters_global_donations_campaign_layout = (isset($cmsmasters_option['total-school' . '_donations_campaign_layout']) && $cmsmasters_option['total-school' . '_donations_campaign_layout'] !== '') ? $cmsmasters_option['total-school' . '_donations_campaign_layout'] : 'r_sidebar';
	
	$cmsmasters_global_bottom_sidebar = (isset($cmsmasters_option['total-school' . '_bottom_sidebar']) && $cmsmasters_option['total-school' . '_bottom_sidebar'] !== '') ? (($cmsmasters_option['total-school' . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_bottom_sidebar_layout = (isset($cmsmasters_option['total-school' . '_bottom_sidebar_layout'])) ? $cmsmasters_option['total-school' . '_bottom_sidebar_layout'] : '14141414';
	
	$cmsmasters_global_bg = (isset($cmsmasters_option['total-school' . '_theme_layout']) && $cmsmasters_option['total-school' . '_theme_layout'] === 'boxed') ? true : false;
	
	
	$cmsmasters_global_donations_campaign_title = (isset($cmsmasters_option['total-school' . '_donations_campaign_title']) && $cmsmasters_option['total-school' . '_donations_campaign_title'] !== '') ? (($cmsmasters_option['total-school' . '_donations_campaign_title'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_donations_campaign_share_box = (isset($cmsmasters_option['total-school' . '_donations_campaign_share_box']) && $cmsmasters_option['total-school' . '_donations_campaign_share_box'] !== '') ? (($cmsmasters_option['total-school' . '_donations_campaign_share_box'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_donations_campaign_author_box = (isset($cmsmasters_option['total-school' . '_donations_campaign_author_box']) && $cmsmasters_option['total-school' . '_donations_campaign_author_box'] !== '') ? (($cmsmasters_option['total-school' . '_donations_campaign_author_box'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_donations_more_campaigns_box = (isset($cmsmasters_option['total-school' . '_donations_more_campaigns_box'])) ? $cmsmasters_option['total-school' . '_donations_more_campaigns_box'] : 'related';
	
	
	$cmsmasters_option_name = 'cmsmasters_campaign_';
	
	
	$tabs_array = array();
	
	
	$tabs_array['cmsmasters_campaign'] = array( 
		'label' => esc_html__('Campaign', 'total-school'), 
		'value'	=> 'cmsmasters_campaign' 
	);
	
	
	$tabs_array['cmsmasters_layout'] = array( 
		'label' => esc_html__('Layout', 'total-school'), 
		'value'	=> 'cmsmasters_layout' 
	);
	
	
	if ($cmsmasters_global_bg) {
		$tabs_array['cmsmasters_bg'] = array( 
			'label' => esc_html__('Background', 'total-school'), 
			'value'	=> 'cmsmasters_bg' 
		);
	}
	
	
	$tabs_array['cmsmasters_heading'] = array( 
		'label' => esc_html__('Heading', 'total-school'), 
		'value'	=> 'cmsmasters_heading' 
	);
	
	
	$custom_campaign_meta_fields = array( 
		array( 
			'id'	=> $cmsmasters_option_name . 'tabs', 
			'type'	=> 'tabs', 
			'std'	=> 'cmsmasters_campaign', 
			'options' => $tabs_array 
		), 
		array( 
			'id'	=> 'cmsmasters_campaign', 
			'type'	=> 'tab_start', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> __('Campaign Target', 'total-school'), 
			'desc'	=> __('do not add currency symbol', 'total-school'), 
			'id'	=> $cmsmasters_option_name . 'target', 
			'type'	=> 'number', 
			'hide'	=> '', 
			'std'	=> '0', 
			'min' 	=> '0', 
			'max' 	=> '', 
			'step' 	=> '10', 
			'size' 	=> '10' 
		), 
		array( 
			'label'	=> __('Campaign Funds', 'total-school'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'funds', 
			'type'	=> 'funds', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Campaign Title', 'total-school'), 
			'desc'	=> __('Show', 'total-school'), 
			'id'	=> $cmsmasters_option_name . 'title', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_donations_campaign_title 
		), 
		array( 
			'label'	=> __('Sharing Box', 'total-school'), 
			'desc'	=> __('Show', 'total-school'), 
			'id'	=> $cmsmasters_option_name . 'sharing_box', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_donations_campaign_share_box 
		), 
		array( 
			'label'	=> __('About Author Box', 'total-school'), 
			'desc'	=> __('Show', 'total-school'), 
			'id'	=> $cmsmasters_option_name . 'author_box', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_donations_campaign_author_box 
		), 
		array( 
			'label'	=> __('More Posts Box', 'total-school'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'more_posts', 
			'type'	=> 'select', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_donations_more_campaigns_box, 
			'options' => array( 
				'related' => array( 
					'label' => __('Show Related Tab', 'total-school'), 
					'value'	=> 'related' 
				), 
				'popular' => array( 
					'label' => __('Show Popular Tab', 'total-school'), 
					'value'	=> 'popular' 
				), 
				'recent' => array( 
					'label' => __('Show Recent Tab', 'total-school'), 
					'value'	=> 'recent' 
				), 
				'hide' => array( 
					'label' => __('Hide More Posts Box', 'total-school'), 
					'value'	=> 'hide' 
				) 
			) 
		), 
		array( 
			'label'	=> __("'Read More' Buttons Text", 'total-school'), 
			'desc'	=> __("Enter the 'Read More' button text that should be used in you campaigns shortcode", 'total-school'), 
			'id'	=> $cmsmasters_option_name . 'read_more', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> __('Read More', 'total-school') 
		), 
		array( 
			'id'	=> 'cmsmasters_campaign', 
			'type'	=> 'tab_finish' 
		), 
		array( 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Page Color Scheme', 'total-school'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_page_scheme', 
			'type'	=> 'select_scheme', 
			'hide'	=> 'false', 
			'std'	=> 'default' 
		), 
		array( 
			'label'	=> __('Page Layout', 'total-school'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'radio_img', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_donations_campaign_layout, 
			'options' => array( 
				'r_sidebar' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg', 
					'label' => __('Right Sidebar', 'total-school'), 
					'value'	=> 'r_sidebar' 
				), 
				'l_sidebar' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg', 
					'label' => __('Left Sidebar', 'total-school'), 
					'value'	=> 'l_sidebar' 
				), 
				'fullwidth' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg', 
					'label' => __('Full Width', 'total-school'), 
					'value'	=> 'fullwidth' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Choose Right\Left Sidebar', 'total-school'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Bottom Sidebar', 'total-school'), 
			'desc'	=> __('Show', 'total-school'), 
			'id'	=> 'cmsmasters_bottom_sidebar', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_bottom_sidebar 
		), 
		array( 
			'label'	=> __('Choose Bottom Sidebar', 'total-school'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bottom_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Choose Bottom Sidebar Layout', 'total-school'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bottom_sidebar_layout', 
			'type'	=> 'select', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_bottom_sidebar_layout, 
			'options' => array( 
				'11' => array( 
					'label' => '1/1',
					'value'	=> '11' 
				), 
				'1212' => array( 
					'label' => '1/2 + 1/2',
					'value'	=> '1212' 
				), 
				'1323' => array( 
					'label' => '1/3 + 2/3',
					'value'	=> '1323' 
				), 
				'2313' => array( 
					'label' => '2/3 + 1/3',
					'value'	=> '2313' 
				), 
				'1434' => array( 
					'label' => '1/4 + 3/4',
					'value'	=> '1434' 
				), 
				'3414' => array( 
					'label' => '3/4 + 1/4',
					'value'	=> '3414' 
				), 
				'131313' => array( 
					'label' => '1/3 + 1/3 + 1/3',
					'value'	=> '131313' 
				), 
				'121414' => array( 
					'label' => '1/2 + 1/4 + 1/4',
					'value'	=> '121414' 
				), 
				'141214' => array( 
					'label' => '1/4 + 1/2 + 1/4',
					'value'	=> '141214' 
				), 
				'141412' => array( 
					'label' => '1/4 + 1/4 + 1/2',
					'value'	=> '141412' 
				), 
				'14141414' => array( 
					'label' => '1/4 + 1/4 + 1/4 + 1/4',
					'value'	=> '14141414' 
				) 
			) 
		), 
		array( 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'tab_finish' 
		) 
	);
	
	
	return $custom_campaign_meta_fields;
}
}

