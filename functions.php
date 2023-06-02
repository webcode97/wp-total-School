<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.1.7
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


/*** START EDIT THEME PARAMETERS HERE ***/

add_filter( 'learn-press/override-templates', function(){ return true; } );

// Theme Settings System Fonts List
if (!function_exists('total_school_system_fonts_list')) {
	function total_school_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('total_school_get_google_fonts_list')) {
	function total_school_get_google_fonts_list() {
		$fonts = array( 
			'Hind:400|Hind', 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic|Roboto', 
			'Roboto+Slab:400,300,700|Roboto Slab', 
			'Roboto+Condensed:400,400italic,700,700italic|Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,700,700italic|Open Sans', 
			'Open+Sans+Condensed:300,300italic,700|Open Sans Condensed', 
			'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic|Titillium Web', 
			'Droid+Sans:400,700|Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic|Droid Serif', 
			'PT+Sans:400,400italic,700,700italic|PT Sans', 
			'PT+Sans+Caption:400,700|PT Sans Caption', 
			'PT+Sans+Narrow:400,700|PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic|PT Serif', 
			'Ubuntu:400,400italic,700,700italic|Ubuntu', 
			'Ubuntu+Condensed|Ubuntu Condensed', 
			'Headland+One|Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic|Source Sans Pro', 
			'Lato:400,400italic,700,700italic|Lato', 
			'Cuprum:400,400italic,700,700italic|Cuprum', 
			'Oswald:300,400,700|Oswald', 
			'Yanone+Kaffeesatz:300,400,700|Yanone Kaffeesatz', 
			'Lobster|Lobster', 
			'Lobster+Two:400,400italic,700,700italic|Lobster Two', 
			'Questrial|Questrial', 
			'Raleway:300,400,500,600,700|Raleway', 
			'Dosis:300,400,500,700|Dosis', 
			'Cutive+Mono|Cutive Mono', 
			'Quicksand:300,400,700|Quicksand', 
			'Montserrat:400,700|Montserrat', 
			'Cookie|Cookie', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('total_school_text_transform_list')) {
	function total_school_text_transform_list() {
		$list = array( 
			'none' => esc_html__('none', 'total-school'), 
			'uppercase' => esc_html__('uppercase', 'total-school'), 
			'lowercase' => esc_html__('lowercase', 'total-school'), 
			'capitalize' => esc_html__('capitalize', 'total-school'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('total_school_text_decoration_list')) {
	function total_school_text_decoration_list() {
		$list = array( 
			'none' => esc_html__('none', 'total-school'), 
			'underline' => esc_html__('underline', 'total-school'), 
			'overline' => esc_html__('overline', 'total-school'), 
			'line-through' => esc_html__('line-through', 'total-school'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('total_school_custom_color_schemes_list')) {
	function total_school_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'total-school'), 
			'second' => esc_html__('Custom 2', 'total-school'), 
			'third' => esc_html__('Custom 3', 'total-school') 
		);
		
		
		return $list;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/



// Require Files Function
if (!function_exists('total_school_locate_template')) {
	function total_school_locate_template($template_names, $require_once = true, $load = true) {
		$located = '';
		
		
		foreach ((array) $template_names as $template_name) {
			if (!$template_name) {
				continue;
			}
			
			
			if (file_exists(get_stylesheet_directory() . '/' . $template_name)) {
				$located = get_stylesheet_directory() . '/' . $template_name;
				
				
				break;
			} elseif (file_exists(get_template_directory() . '/' . $template_name)) {
				$located = get_template_directory() . '/' . $template_name;
				
				
				break;
			}
		}
		
		
		if ($load && $located != '') {
			if ($require_once) {
				require_once($located);
			} else {
				require($located);
			}
		}
		
		
		return $located;
	}
}


// Theme Plugin Support Constants
if (class_exists('Cmsmasters_Content_Composer')) {
	define('CMSMASTERS_CONTENT_COMPOSER', true);
} else {
	define('CMSMASTERS_CONTENT_COMPOSER', false);
}

if (class_exists('woocommerce')) {
	define('CMSMASTERS_WOOCOMMERCE', false);
} else {
	define('CMSMASTERS_WOOCOMMERCE', false);
}

if (class_exists('Tribe__Events__Main')) {
	define('CMSMASTERS_EVENTS_CALENDAR', true);
} else {
	define('CMSMASTERS_EVENTS_CALENDAR', false);
}

if (class_exists('PayPalDonations')) {
	define('CMSMASTERS_PAYPALDONATIONS', true);
} else {
	define('CMSMASTERS_PAYPALDONATIONS', false);
}

if (class_exists('Cmsmasters_Donations')) {
	define('CMSMASTERS_DONATIONS', true);
} else {
	define('CMSMASTERS_DONATIONS', false);
}

if (function_exists('timetable_events_init')) {
	define('CMSMASTERS_TIMETABLE', true);
} else {
	define('CMSMASTERS_TIMETABLE', false);
}

if (class_exists('TC')) {
	define('CMSMASTERS_TC_EVENTS', true);
} else {
	define('CMSMASTERS_TC_EVENTS', false);
}

if (class_exists('Cmsmasters_Events_Schedule')) {
	define('CMSMASTERS_EVENTS_SCHEDULE', false);
} else {
	define('CMSMASTERS_EVENTS_SCHEDULE', false);
}

if (class_exists('LearnPress')) {
	define('CMSMASTERS_LEARNPRESS', true);
} else {
	define('CMSMASTERS_LEARNPRESS', false);
}

if (function_exists('sb_instagram_activate')) {
	define('CMSMASTERS_INSTAGRAM_FEED', true);
} else {
	define('CMSMASTERS_INSTAGRAM_FEED', false);
}


// CMSMasters Importer Compatibility
define('CMSMASTERS_IMPORTER', true);

// CMSMasters Custom Fonts Compatibility
define('CMSMASTERS_CUSTOM_FONTS', true);

// Theme Colored Categories Constant
define('CMSMASTERS_COLORED_CATEGORIES', true);

// Theme Projects Compatible
define('CMSMASTERS_PROJECT_COMPATIBLE', true);

// Theme Profiles Compatible
define('CMSMASTERS_PROFILE_COMPATIBLE', true);

// Developer Mode Constant
define('CMSMASTERS_DEVELOPER_MODE', false);

// Change FS Method
if (!defined('FS_METHOD')) {
	define('FS_METHOD', 'direct');
}



// Theme Image Thumbnails Size
if (!function_exists('total_school_get_image_thumbnail_list')) {
	function total_school_get_image_thumbnail_list() {
		$list = array( 
			'cmsmasters-small-thumb' => array( 
				'width' => 		60, 
				'height' => 	60, 
				'crop' => 		true 
			), 
			'cmsmasters-square-thumb' => array( 
				'width' => 		300, 
				'height' => 	300, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Square', 'total-school') 
			), 
			'cmsmasters-blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	360, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Masonry Blog', 'total-school') 
			), 
			'cmsmasters-project-thumb' => array( 
				'width' => 		580, 
				'height' => 	490, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project', 'total-school') 
			), 
			'cmsmasters-project-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Project', 'total-school') 
			), 
			'post-thumbnail' => array( 
				'width' => 		980, 
				'height' => 	588, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Featured', 'total-school') 
			), 
			'cmsmasters-masonry-thumb' => array( 
				'width' => 		980, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry', 'total-school') 
			), 
			'cmsmasters-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	610, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Full', 'total-school') 
			), 
			'cmsmasters-project-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	610, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project Full', 'total-school') 
			), 
			'cmsmasters-full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Full', 'total-school') 
			),
			'cmsmasters-full-wide-thumb' => array( 
				'width' => 		1440, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Full Wide', 'total-school') 
			) 
		);
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {
			$list['cmsmasters-event-thumb'] = array( 
				'width' => 		580, 
				'height' => 	378, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Event', 'total-school') 
			);
		}
		
		
		return $list;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('total_school_all_color_schemes_list')) {
	function total_school_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'total-school'), 
			'header' => 		esc_html__('Header', 'total-school'), 
			'navigation' => 	esc_html__('Navigation', 'total-school'), 
			'header_top' => 	esc_html__('Header Top', 'total-school'), 
			'footer' => 		esc_html__('Footer', 'total-school') 
		);
		
		
		$out = array_merge($list, total_school_custom_color_schemes_list());
		
		
		return apply_filters('cmsmasters_all_color_schemes_list_filter', $out);
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('total_school_color_schemes_defaults')) {
	function total_school_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#797979', 
				'link' => 		'#df504b', 
				'hover' => 		'#aaaaaa', 
				'heading' => 	'#2f2f2f', 
				'bg' => 		'#f8f8f8', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#dfdfdf' 
			), 
			'header' => array( // Header color scheme
				'mid_color' => 		'#ffffff', 
				'mid_link' => 		'#ffffff', 
				'mid_hover' => 		'rgba(255,255,255,0.5)', 
				'mid_bg' => 		'#2b2f47', 
				'mid_bg_scroll' => 	'#2b2f47', 
				'mid_border' => 	'rgba(255,255,255,0.07)', 
				'bot_color' => 		'#ffffff', 
				'bot_link' => 		'#ffffff', 
				'bot_hover' => 		'rgba(255,255,255,0.5)', 
				'bot_bg' => 		'#2b2f47', 
				'bot_bg_scroll' => 	'#2b2f47', 
				'bot_border' => 	'rgba(255,255,255,0.07)' 
			), 
			'navigation' => array( // Navigation color scheme
				'title_link' => 			'#ffffff', 
				'title_link_hover' => 		'rgba(255,255,255,0.5)', 
				'title_link_current' => 	'#ffffff', 
				'title_link_subtitle' => 	'rgba(255,255,255,0.5)', 
				'title_link_bg' => 			'rgba(255,255,255,0)', 
				'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
				'title_link_bg_current' => 	'rgba(255,255,255,0)', 
				'title_link_border' => 		'rgba(255,255,255,0)', 
				'dropdown_text' => 			'#797979', 
				'dropdown_bg' => 			'#ffffff', 
				'dropdown_border' => 		'#dfdfdf', 
				'dropdown_link' => 			'#2b2f47', 
				'dropdown_link_hover' => 	'#df504b', 
				'dropdown_link_subtitle' => 'rgba(43,47,71,0.5)', 
				'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
				'dropdown_link_border' => 	'#dfdfdf' 
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 					'#ffffff', 
				'link' => 					'#ffffff', 
				'hover' => 					'#ffffff', 
				'bg' => 					'#202334', 
				'border' => 				'rgba(255,255,255,0.07)', 
				'title_link' => 			'#ffffff', 
				'title_link_hover' => 		'rgba(255,255,255,0.5)', 
				'title_link_bg' => 			'#202334', 
				'title_link_bg_hover' => 	'#202334', 
				'title_link_border' => 		'#202334', 
				'dropdown_bg' => 			'#202334', 
				'dropdown_border' => 		'#202334', 
				'dropdown_link' => 			'#ffffff', 
				'dropdown_link_hover' => 	'rgba(255,255,255,0.5)', 
				'dropdown_link_highlight' => '#202334', 
				'dropdown_link_border' => 	'rgba(255,255,255,0.07)' 
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'rgba(255,255,255,0.4)', 
				'link' => 		'rgba(255,255,255,0.4)',  
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#24273b', 
				'alternate' => 	'#24273b', 
				'border' => 	'rgba(36,39,59,0)' 
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'rgba(255,255,255,0.4)', 
				'link' => 		'rgba(255,255,255,0.4)', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#2b2f47', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#dfdfdf' 
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'#797979', 
				'link' => 		'#df504b', 
				'hover' => 		'#aaaaaa', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#f8f8f8', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#dfdfdf' 
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'#797979', 
				'link' => 		'#df504b', 
				'hover' => 		'#aaaaaa', 
				'heading' => 	'#2f2f2f', 
				'bg' => 		'#f8f8f8', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#dfdfdf' 
			) 
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
define('CMSMASTERS_FRAMEWORK', 'framework');
define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
define('CMSMASTERS_COMPOSER', 'cmsmasters-c-c');
define('CMSMASTERS_DEMO_FILES_PATH', get_template_directory() . '/framework/admin/inc/demo-content/');



// Load Framework Parts
total_school_locate_template(CMSMASTERS_CLASS . '/Browser.php', true);

if (class_exists('Cmsmasters_Theme_Importer')) {
	require_once(CMSMASTERS_ADMIN_INC . '/demo-content-importer.php');
}

total_school_locate_template(CMSMASTERS_ADMIN_INC . '/config-functions.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/theme-functions.php', true);

total_school_locate_template(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php', true);

total_school_locate_template(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php', true);

total_school_locate_template(CMSMASTERS_ADMIN_INC . '/admin-scripts.php', true);

total_school_locate_template(CMSMASTERS_ADMIN_INC . '/plugin-activator.php', true);

total_school_locate_template(CMSMASTERS_CLASS . '/widgets.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/breadcrumbs.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/likes.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/pagination.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/single-comment.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/theme-fonts.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/theme-colors-primary.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/theme-colors-secondary.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/template-functions.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/template-functions-post.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/template-functions-project.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/template-functions-profile.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/template-functions-shortcodes.php', true);

total_school_locate_template(CMSMASTERS_FUNCTION . '/template-functions-widgets.php', true);


$cmsmasters_wp_version = get_bloginfo('version');

if (version_compare($cmsmasters_wp_version, '5', '>=') || function_exists('is_gutenberg_page')) {
	require_once(get_template_directory() . '/gutenberg/cmsmasters-module-functions.php');
}


// Theme Colored Categories Functions
if (CMSMASTERS_COLORED_CATEGORIES) {
	total_school_locate_template(CMSMASTERS_FUNCTION . '/theme-colored-categories.php', true);
}


if (class_exists('Cmsmasters_Content_Composer')) {
	total_school_locate_template(CMSMASTERS_COMPOSER . '/filters/cmsmasters-c-c-atts-filters.php', true);
	
	total_school_locate_template(CMSMASTERS_COMPOSER . '/shortcodes/theme-shortcodes.php', true);
}


// CMSMASTERS Donations functions
if (CMSMASTERS_DONATIONS) {
	total_school_locate_template('cmsmasters-donations/function/template-functions-donation.php', true);
}

// Woocommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	total_school_locate_template('woocommerce/cmsmasters-woo-functions.php', true);
}

// Events functions
if (CMSMASTERS_EVENTS_CALENDAR) {
	total_school_locate_template('tribe-events/cmsmasters-events-functions.php', true);
}

// CMSMasters Events Schedule functions
if (CMSMASTERS_EVENTS_SCHEDULE) {
	total_school_locate_template('cmsmasters-events-schedule/cmsmasters-events-schedule-functions.php', true);
}

// LearnPress functions
if (CMSMASTERS_LEARNPRESS) {
	total_school_locate_template('learnpress/cmsmasters-plugin-functions.php', true);
}

// TimeTable functions
if (CMSMASTERS_TIMETABLE) {
	total_school_locate_template('timetable/cmsmasters-plugin-functions.php', true);
}

// Instagram Feed functions
if (CMSMASTERS_INSTAGRAM_FEED) {
	total_school_locate_template('instagram-feed/cmsmasters-plugin-functions.php', true);
}



// Load Theme Local File
if (!function_exists('total_school_load_theme_textdomain')) {
	function total_school_load_theme_textdomain() {
		load_theme_textdomain('total-school', get_template_directory() . '/' . CMSMASTERS_FRAMEWORK . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'total_school_load_theme_textdomain')) {
	add_action('after_setup_theme', 'total_school_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('total_school_theme_activation')) {
	function total_school_theme_activation() {
		if (get_option('cmsmasters_active_theme') != 'total-school') {
			add_option('cmsmasters_active_theme', 'total-school', '', 'yes');
			
			
			total_school_add_global_options();
			
			
			total_school_add_global_icons();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsmasters-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'total_school_theme_activation');



// Framework Deactivation
if (!function_exists('total_school_theme_deactivation')) {
	function total_school_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'total_school_theme_deactivation')) {
	add_action('switch_theme', 'total_school_theme_deactivation');
}



// Plugin Activation Regenerate Styles
if (!function_exists('total_school_plugin_activation')) {
	function total_school_plugin_activation($plugin, $network_activation) {
		update_option('cmsmasters_plugin_activation', 'true');
		
		
		if ($plugin == 'classic-editor/classic-editor.php') {
			update_option('classic-editor-replace', 'no-replace');
		}
	}
}

add_action('activated_plugin', 'total_school_plugin_activation', 10, 2);


if (!function_exists('total_school_plugin_activation_regenerate')) {
	function total_school_plugin_activation_regenerate() {
		if (!get_option('cmsmasters_plugin_activation')) {
			add_option('cmsmasters_plugin_activation', 'false');
		}
		
		if (get_option('cmsmasters_plugin_activation') != 'false') {
			total_school_regenerate_styles();
			
			total_school_add_global_options();
			
			total_school_add_global_icons();
			
			update_option('cmsmasters_plugin_activation', 'false');
		}
	}
}

add_action('init', 'total_school_plugin_activation_regenerate');


function total_school_run_reinit_import_options($post_id, $key, $value) {
	if (!get_post_meta($post_id, 'cmsmasters_heading', true)) {
		$custom_post_meta_fields = total_school_get_custom_all_meta_fields();
		
		
		foreach ($custom_post_meta_fields as $field) {
			if ( 
				$field['type'] != 'tabs' && 
				$field['type'] != 'tab_start' && 
				$field['type'] != 'tab_finish' && 
				$field['type'] != 'content_start' && 
				$field['type'] != 'content_finish' 
			) {
				update_post_meta($post_id, $field['id'], $field['std']);
			}
		}
	}


	if ($key === 'cmsmasters_composer_show' && $value === 'true') {
		update_post_meta($post_id, 'cmsmasters_gutenberg_show', 'true');
	}
}

add_action('import_post_meta', 'total_school_run_reinit_import_options', 10, 3);


function total_school_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}


add_filter( 'comment_form_fields', 'total_school_comment_field_to_bottom' );

