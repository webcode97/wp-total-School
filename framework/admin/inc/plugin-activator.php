<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.1.7
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


require_once(get_template_directory() . '/framework/class/class-tgm-plugin-activation.php');


if (!function_exists('total_school_register_theme_plugins')) {

function total_school_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'total-school'), 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory() . '/framework/admin/inc/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '1.8.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Custom Fonts', 'total-school'), 
			'slug'					=> 'cmsmasters-custom-fonts', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-custom-fonts.zip', 
			'required'				=> true, 
			'version'				=> '1.0.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Donations', 'total-school'), 
			'slug'					=> 'cmsmasters-donations', 
			'source'				=> get_template_directory() . '/framework/admin/inc/plugins/cmsmasters-donations.zip', 
			'required'				=> false, 
			'version'				=> '1.1.9', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'total-school'), 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory() . '/framework/admin/inc/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.7', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> esc_html__('Envato Market', 'total-school'), 
			'slug'					=> 'envato-market', 
			'source'				=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip', 
			'required'				=> false
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'total-school'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory() . '/framework/admin/inc/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '7.6.7', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Importer', 'total-school'), 
			'slug'					=> 'cmsmasters-importer', 
			'source'				=> get_template_directory() . '/framework/admin/inc/plugins/cmsmasters-importer.zip', 
			'required'				=> true, 
			'version'				=> '1.0.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'total-school'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory() . '/framework/admin/inc/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '6.6.8', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'total-school'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name'					=> esc_html__('GDPR Cookie Consent', 'total-school'), 
			'slug'					=> 'cookie-law-info', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('The Events Calendar', 'total-school'), 
			'slug' 					=> 'the-events-calendar', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('LearnPress', 'total-school'), 
			'slug' 					=> 'learnpress', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('LearnPress Course Review', 'total-school'), 
			'slug' 					=> 'learnpress-course-review', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('LearnPress Courses Wishlist', 'total-school'), 
			'slug' 					=> 'learnpress-wishlist', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('LearnPress Prerequisite Courses', 'total-school'), 
			'slug' 					=> 'learnpress-prerequisites-courses', 
			'required' 				=> false 
		), 
		array( 
			'name'					=> esc_html__('MailPoet 3', 'total-school'), 
			'slug'					=> 'mailpoet', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('Instagram Feed', 'total-school'), 
			'slug'					=> 'instagram-feed', 
			'required'				=> false 
 		) 
	);
	
	
	$config = array( 
		'id' => 				'total-school', 
		'menu' => 				'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	__('Theme Required & Recommended Plugins', 'total-school'), 
			'menu_title' => 	__('Theme Plugins', 'total-school'), 
			'return' => 		__('Return to Theme Required & Recommended Plugins', 'total-school') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'total_school_register_theme_plugins');

