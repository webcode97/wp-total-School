<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.1.1
 * 
 * LearnPress Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts for LearnPress Plugin */
total_school_locate_template('learnpress/cmsmasters-framework/function/plugin-colors.php', true);

total_school_locate_template('learnpress/cmsmasters-framework/function/plugin-fonts.php', true);



/* Register CSS Styles and Scripts for LearnPress Plugin */
function total_school_learnpress_register_styles_scripts() {
	$depend_learnpress_style = array();
	
	if (LP()->settings->get('load_css') == 'yes' || LP()->settings->get('load_css') == '') {
		$depend_learnpress_style = array('learnpress');
	}
	
	wp_enqueue_style('cmsmasters-learnpress-style', get_template_directory_uri() . '/learnpress/cmsmasters-framework/css/plugin-style.css', $depend_learnpress_style, '1.0.0', 'screen');
	
	wp_enqueue_style('cmsmasters-learnpress-adaptive', get_template_directory_uri() . '/learnpress/cmsmasters-framework/css/plugin-adaptive.css', $depend_learnpress_style, '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('cmsmasters-learnpress-rtl', get_template_directory_uri() . '/learnpress/cmsmasters-framework/css/plugin-rtl.css', $depend_learnpress_style, '1.0.0', 'screen');
	}
}

add_action('wp_enqueue_scripts', 'total_school_learnpress_register_styles_scripts');



/* Register Post Formats for LearnPress Plugin */
if (function_exists('add_theme_support')) {
	function total_school_lpr_course_add_attr() {
		add_post_type_support('lp_course', 'page-attributes');
	}
	
	add_action('init', 'total_school_lpr_course_add_attr', 100);
}


function total_school_learnpress_headline_type_filter( $type ) {
	$pages = learn_press_static_page_ids();

	if ( is_page( $pages['profile'] ) ) {
		$type = 'disabled';
	}

	if ( is_singular( 'lp_course' ) ) {
		$type = 'disabled';
	}

	return $type;
}

add_filter( 'cmsmasters_headline_type', 'total_school_learnpress_headline_type_filter' );


function total_school_learnpress_remove_custom_meta_box() {
	remove_meta_box( 'cmsmasters_custom_meta_box', 'lp_course' , 'normal' );

	$pages = learn_press_static_page_ids();

	if ( $pages['profile'] == get_the_ID() ) {
		remove_meta_box( 'cmsmasters_custom_meta_box', null , 'normal' );
	}
}

add_action( 'add_meta_boxes' , 'total_school_learnpress_remove_custom_meta_box', 99 );


// LearnPress functions
if (CMSMASTERS_LEARNPRESS) {
	function total_school_learnpress_advanced_settings_filter( $settings ) {
		$cmsmasters_option = total_school_get_global_options();

		foreach ( $settings as $index => $setting ) {
			if ( 'primary_color' === $setting['id'] ) {
				$settings[ $index ]['default'] = $cmsmasters_option['total-school' . '_default_link'];
				$settings[ $index ]['desc'] = sprintf( __( 'Default: %s', 'total-school' ), '<code>' . $cmsmasters_option['total-school' . '_default_link'] . '</code>' );
			} elseif ( 'secondary_color' === $setting['id'] ) {
				$settings[ $index ]['default'] = $cmsmasters_option['total-school' . '_default' . '_heading'];
				$settings[ $index ]['desc'] = sprintf( __( 'Default: %s', 'total-school' ), '<code>' . $cmsmasters_option['total-school' . '_default' . '_heading'] . '</code>' );
			}
		}

		return $settings;
	}

	add_filter( 'learn_press_advanced_settings', 'total_school_learnpress_advanced_settings_filter' );


	function total_school_learnpress_print_custom_styles() {
		$cmsmasters_option = total_school_get_global_options();
		$primary_color   = LP()->settings()->get( 'primary_color' );
		$secondary_color = LP()->settings()->get( 'secondary_color' );
		?>

		<style id="learn-press-custom-css">
			:root {
				--lp-primary-color: <?php echo ! empty( $primary_color ) ? $primary_color : $cmsmasters_option['total-school' . '_default_link']; ?>;
				--lp-secondary-color: <?php echo ! empty( $secondary_color ) ? $secondary_color : $cmsmasters_option['total-school' . '_default' . '_heading']; ?>;
			}
		</style>

		<?php
	}

	remove_action( 'wp_head', 'learn_press_print_custom_styles' );
	add_action( 'wp_head', 'total_school_learnpress_print_custom_styles' );

	add_action( 'add_meta_boxes' , 'total_school_learnpress_remove_custom_meta_box', 99 );
}
