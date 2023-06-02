<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.1.6
 * 
 * Theme Functions
 * Created by CMSMasters
 * 
 */


/* Register CSS Styles */
function total_school_register_css_styles() {
	if (!is_admin()) {
		global $post, 
			$wp_styles;
		
		
		$cmsmasters_option = total_school_get_global_options();
		
		
		wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'screen, print');
		
		wp_enqueue_style('theme-design-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'screen, print');
		
		wp_enqueue_style('theme-adapt', get_template_directory_uri() . '/css/adaptive.css', array(), '1.0.0', 'screen, print');
				
		wp_enqueue_style('theme-retina', get_template_directory_uri() . '/css/retina.css', array(), '1.0.0', 'screen');
		
		
		wp_enqueue_style('theme-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('theme-icons-custom', get_template_directory_uri() . '/css/fontello-custom.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'screen');
		
		wp_register_style('isotope', get_template_directory_uri() . '/css/jquery.isotope.css', array(), '1.5.26', 'screen');
		
		
		if ( 
			is_a($post, 'WP_Post') && 
			strpos($post->post_content, '[cmsmasters_portfolio ') 
		) {
			wp_enqueue_style('isotope');
		}
		
		
		// CMSMASTERS Donations styles
		if (CMSMASTERS_DONATIONS) {
			wp_enqueue_style('theme-cmsmasters-donations-style', get_template_directory_uri() . '/cmsmasters-donations/css/cmsmasters-donations-style.css', array(), '1.0.0', 'screen');
			
			wp_enqueue_style('theme-cmsmasters-donations-adaptive', get_template_directory_uri() . '/cmsmasters-donations/css/cmsmasters-donations-adaptive.css', array(), '1.0.0', 'screen');
			
			if (is_rtl()) {
				wp_enqueue_style('theme-cmsmasters-donations-rtl', get_template_directory_uri() . '/cmsmasters-donations/css/cmsmasters-donations-rtl.css', array(), '1.0.0', 'screen');
			}
		}
		
		
		// WooCommerce styles
		if (CMSMASTERS_WOOCOMMERCE) {
			wp_enqueue_style('theme-cmsmasters-woo-style', get_template_directory_uri() . '/css/cmsmasters-woo-style.css', array(), '1.0.0', 'screen');
			
			wp_enqueue_style('theme-cmsmasters-woo-adaptive', get_template_directory_uri() . '/css/cmsmasters-woo-adaptive.css', array(), '1.0.0', 'screen');
			
			if (is_rtl()) {
				wp_enqueue_style('theme-cmsmasters-woo-rtl', get_template_directory_uri() . '/css/cmsmasters-woo-rtl.css', array(), '1.0.0', 'screen');
			}
		}
		
		
		// Events styles
		if (CMSMASTERS_EVENTS_CALENDAR) {
			if ( tribe_events_views_v2_is_enabled() ) {
				wp_enqueue_style('theme-cmsmasters-events-v2-style', get_template_directory_uri() . '/css/cmsmasters-events-v2-style.css', array(), '1.0.0', 'screen');
			} else {
				wp_enqueue_style('theme-cmsmasters-events-style', get_template_directory_uri() . '/css/cmsmasters-events-style.css', array(), '1.0.0', 'screen');
				
				wp_enqueue_style('theme-cmsmasters-events-adaptive', get_template_directory_uri() . '/css/cmsmasters-events-adaptive.css', array(), '1.0.0', 'screen');
				
				if (is_rtl()) {
					wp_enqueue_style('theme-cmsmasters-events-rtl', get_template_directory_uri() . '/css/cmsmasters-events-rtl.css', array(), '1.0.0', 'screen');
				}
			}
		}
		
		
		// iLightBox skins
		$ilightbox_skin = $cmsmasters_option['total-school' . '_ilightbox_skin'];
		
		wp_enqueue_style('ilightbox', get_template_directory_uri() . '/css/ilightbox.css', array(), '2.2.0', 'screen');
		
		wp_enqueue_style('ilightbox-skin-' . $ilightbox_skin, get_template_directory_uri() . '/css/ilightbox-skins/' . $ilightbox_skin . '-skin.css', array(), '2.2.0', 'screen');
		
		
		// Fonts and Colors styles
		$upload_dir = wp_upload_dir();
		
		$style_dir = str_replace('\\', '/', $upload_dir['basedir'] . '/cmsmasters_styles');
		
		
		$cmsmasters_styles_dir = get_template_directory_uri() . '/css/styles/';
		
		
		if (is_dir($style_dir) && get_option('cmsmasters_style_exists_' . 'total-school')) {
			$cmsmasters_styles_dir = $upload_dir['baseurl'] . '/cmsmasters_styles/';
		}
		
		
		wp_enqueue_style('theme-fonts-schemes', $cmsmasters_styles_dir . 'total-school' . '.css', array(), '1.0.0', 'screen');
	}
}

add_action('wp_enqueue_scripts', 'total_school_register_css_styles');



/* Register JS Scripts */
function total_school_register_js_scripts() {
	if (!is_admin()) {
		global $post;
		
		
		$cmsmasters_option = total_school_get_global_options();
		
		
		wp_enqueue_script('libs', get_template_directory_uri() . '/js/jsLibraries.min.js', array('jquery'), '1.0.0', false);
		
		wp_enqueue_script('jLibs', get_template_directory_uri() . '/js/jqueryLibraries.min.js', array('jquery'), '1.0.0', true);
		
		wp_localize_script('jLibs', 'cmsmasters_jlibs', array( 
			'button_height' => 	(is_admin_bar_showing() ? 32 : 0) - ($cmsmasters_option['total-school' . '_button_font_line_height'] / 2)
		));
		
		wp_enqueue_script('iLightBox', get_template_directory_uri() . '/js/jquery.iLightBox.min.js', array('jquery'), '2.2.0', false);
		
		wp_enqueue_script('cmsmasters-scrollspy', get_template_directory_uri() . '/js/scrollspy.js', array('jquery'), '1.0.0', true);
		
		wp_enqueue_script('script', get_template_directory_uri() . '/js/jquery.script.js', array('jquery'), '1.0.0', true);
		
		$primary_color = $cmsmasters_option['total-school' . '_default_link'];
		
		wp_localize_script('script', 'cmsmasters_script', array( 
			'theme_url' => 							get_template_directory_uri(), 
			'site_url' => 							get_site_url() . '/', 
			'ajaxurl' => 							admin_url('admin-ajax.php'), 
			'nonce_ajax_like' => 					wp_create_nonce('cmsmasters_ajax_like-nonce'), 
			'primary_color' => 						$primary_color, 
			'ilightbox_skin' => 					$cmsmasters_option['total-school' . '_ilightbox_skin'], 
			'ilightbox_path' => 					$cmsmasters_option['total-school' . '_ilightbox_path'], 
			'ilightbox_infinite' => 				$cmsmasters_option['total-school' . '_ilightbox_infinite'], 
			'ilightbox_aspect_ratio' => 			$cmsmasters_option['total-school' . '_ilightbox_aspect_ratio'], 
			'ilightbox_mobile_optimizer' => 		$cmsmasters_option['total-school' . '_ilightbox_mobile_optimizer'], 
			'ilightbox_max_scale' => 				$cmsmasters_option['total-school' . '_ilightbox_max_scale'], 
			'ilightbox_min_scale' => 				$cmsmasters_option['total-school' . '_ilightbox_min_scale'], 
			'ilightbox_inner_toolbar' => 			$cmsmasters_option['total-school' . '_ilightbox_inner_toolbar'], 
			'ilightbox_smart_recognition' => 		$cmsmasters_option['total-school' . '_ilightbox_smart_recognition'], 
			'ilightbox_fullscreen_one_slide' => 	$cmsmasters_option['total-school' . '_ilightbox_fullscreen_one_slide'], 
			'ilightbox_fullscreen_viewport' => 		$cmsmasters_option['total-school' . '_ilightbox_fullscreen_viewport'], 
			'ilightbox_controls_toolbar' => 		$cmsmasters_option['total-school' . '_ilightbox_controls_toolbar'], 
			'ilightbox_controls_arrows' => 			$cmsmasters_option['total-school' . '_ilightbox_controls_arrows'], 
			'ilightbox_controls_fullscreen' => 		$cmsmasters_option['total-school' . '_ilightbox_controls_fullscreen'], 
			'ilightbox_controls_thumbnail' => 		$cmsmasters_option['total-school' . '_ilightbox_controls_thumbnail'], 
			'ilightbox_controls_keyboard' => 		$cmsmasters_option['total-school' . '_ilightbox_controls_keyboard'], 
			'ilightbox_controls_mousewheel' => 		$cmsmasters_option['total-school' . '_ilightbox_controls_mousewheel'], 
			'ilightbox_controls_swipe' => 			$cmsmasters_option['total-school' . '_ilightbox_controls_swipe'], 
			'ilightbox_controls_slideshow' => 		$cmsmasters_option['total-school' . '_ilightbox_controls_slideshow'], 
			'ilightbox_close_text' => 				esc_html__('Close', 'total-school'), 
			'ilightbox_enter_fullscreen_text' => 	esc_html__('Enter Fullscreen (Shift+Enter)', 'total-school'), 
			'ilightbox_exit_fullscreen_text' => 	esc_html__('Exit Fullscreen (Shift+Enter)', 'total-school'), 
			'ilightbox_slideshow_text' => 			esc_html__('Slideshow', 'total-school'), 
			'ilightbox_next_text' => 				esc_html__('Next', 'total-school'), 
			'ilightbox_previous_text' => 			esc_html__('Previous', 'total-school'), 
			'ilightbox_load_image_error' => 		esc_html__('An error occurred when trying to load photo.', 'total-school'), 
			'ilightbox_load_contents_error' => 		esc_html__('An error occurred when trying to load contents.', 'total-school'), 
			'ilightbox_missing_plugin_error' => 	esc_html__("The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\/a>.", 'total-school') 
		));
		
		
		wp_enqueue_script('twitter', get_template_directory_uri() . '/js/jquery.tweet.min.js', array('jquery'), '1.3.1', true);
		
		
		wp_register_script('isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array('jquery'), '1.5.19', true);
		
		wp_register_script('isotopeMode', get_template_directory_uri() . '/js/jquery.isotope.mode.js', array('jquery', 'isotope'), '1.0.0', true);
		
		wp_localize_script('isotopeMode', 'cmsmasters_isotope_mode', array( 
			'ilightbox_skin' => 					$cmsmasters_option['total-school' . '_ilightbox_skin'], 
			'ilightbox_path' => 					$cmsmasters_option['total-school' . '_ilightbox_path'], 
			'ilightbox_infinite' => 				$cmsmasters_option['total-school' . '_ilightbox_infinite'], 
			'ilightbox_aspect_ratio' => 			$cmsmasters_option['total-school' . '_ilightbox_aspect_ratio'], 
			'ilightbox_mobile_optimizer' => 		$cmsmasters_option['total-school' . '_ilightbox_mobile_optimizer'], 
			'ilightbox_max_scale' => 				$cmsmasters_option['total-school' . '_ilightbox_max_scale'], 
			'ilightbox_min_scale' => 				$cmsmasters_option['total-school' . '_ilightbox_min_scale'], 
			'ilightbox_inner_toolbar' => 			$cmsmasters_option['total-school' . '_ilightbox_inner_toolbar'], 
			'ilightbox_smart_recognition' => 		$cmsmasters_option['total-school' . '_ilightbox_smart_recognition'], 
			'ilightbox_fullscreen_one_slide' => 	$cmsmasters_option['total-school' . '_ilightbox_fullscreen_one_slide'], 
			'ilightbox_fullscreen_viewport' => 		$cmsmasters_option['total-school' . '_ilightbox_fullscreen_viewport'], 
			'ilightbox_controls_toolbar' => 		$cmsmasters_option['total-school' . '_ilightbox_controls_toolbar'], 
			'ilightbox_controls_arrows' => 			$cmsmasters_option['total-school' . '_ilightbox_controls_arrows'], 
			'ilightbox_controls_fullscreen' => 		$cmsmasters_option['total-school' . '_ilightbox_controls_fullscreen'], 
			'ilightbox_controls_thumbnail' => 		$cmsmasters_option['total-school' . '_ilightbox_controls_thumbnail'], 
			'ilightbox_controls_keyboard' => 		$cmsmasters_option['total-school' . '_ilightbox_controls_keyboard'], 
			'ilightbox_controls_mousewheel' => 		$cmsmasters_option['total-school' . '_ilightbox_controls_mousewheel'], 
			'ilightbox_controls_swipe' => 			$cmsmasters_option['total-school' . '_ilightbox_controls_swipe'], 
			'ilightbox_controls_slideshow' => 		$cmsmasters_option['total-school' . '_ilightbox_controls_slideshow'], 
			'ilightbox_close_text' => 				esc_html__('Close', 'total-school'), 
			'ilightbox_enter_fullscreen_text' => 	esc_html__('Enter Fullscreen (Shift+Enter)', 'total-school'), 
			'ilightbox_exit_fullscreen_text' => 	esc_html__('Exit Fullscreen (Shift+Enter)', 'total-school'), 
			'ilightbox_slideshow_text' => 			esc_html__('Slideshow', 'total-school'), 
			'ilightbox_next_text' => 				esc_html__('Next', 'total-school'), 
			'ilightbox_previous_text' => 			esc_html__('Previous', 'total-school'), 
			'ilightbox_load_image_error' => 		esc_html__('An error occurred when trying to load photo.', 'total-school'), 
			'ilightbox_load_contents_error' => 		esc_html__('An error occurred when trying to load contents.', 'total-school'), 
			'ilightbox_missing_plugin_error' => 	esc_html__("The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\/a>.", 'total-school') 
		));
		
		
		if ( 
			is_a($post, 'WP_Post') && 
			strpos($post->post_content, '[cmsmasters_portfolio ') 
		) {
			wp_enqueue_script('isotope');
			
			wp_enqueue_script('isotopeMode');
		}
		
		
		if ( 
			is_a($post, 'WP_Post') && 
			strpos($post->post_content, '[/cmsmasters_google_map_markers]') 
		) {
			wp_enqueue_script('gMapAPI', '//maps.googleapis.com/maps/api/js?key=' . $cmsmasters_option['total-school' . '_gmap_api_key'], array('jquery'), '1.0.0', true);
			
			wp_enqueue_script('gMap', get_template_directory_uri() . '/js/jquery.gMap.min.js', array('jquery', 'gMapAPI'), '3.2.0', true);
		}
		
		
		// WooCommerce scripts
		if (CMSMASTERS_WOOCOMMERCE) {
			wp_enqueue_script('cmsmasters-woo-script', get_template_directory_uri() . '/js/jquery.cmsmasters-woo-script.js', array('jquery'), '1.0.0', true);
			
			
			$cart_currency_symbol = get_woocommerce_currency_symbol();
			
			$cart_currency_symbol_pos = get_option('woocommerce_currency_pos');
			
			$currency_symbol = $cart_currency_symbol;
			
			
			if ($cart_currency_symbol_pos == 'left_space') {
				$currency_symbol = $cart_currency_symbol . ' ';
			} elseif ($cart_currency_symbol_pos == 'right_space') {
				$currency_symbol = ' ' . $cart_currency_symbol;
			}
			
			
			$shop_thumbnail_image_size = get_option('shop_thumbnail_image_size');
			
			wp_localize_script('cmsmasters-woo-script', 'cmsmasters_woo_script', array( 
				'currency_symbol' => 			$currency_symbol, 
				'thumbnail_image_width' => 		$shop_thumbnail_image_size['width'], 
				'thumbnail_image_height' => 	$shop_thumbnail_image_size['height'] 
			));
		}
	}
	
	
	// Comment Reply enqueue
	if (is_singular() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'total_school_register_js_scripts');



/* Developer Mode */
function total_school_developer_mode() {
	if (!is_admin() && CMSMASTERS_DEVELOPER_MODE) {
		total_school_regenerate_styles();
	}
}

add_action('wp_enqueue_scripts', 'total_school_developer_mode');



/* Google Fonts Generate Function */
if (!function_exists('total_school_theme_google_fonts_generate')) {

function total_school_theme_google_fonts_generate() {
	$cmsmasters_option = total_school_get_global_options();
	
	global $cmsmasters_font_keys;
	
	$cmsmasters_font_keys = array();
	
	$fonts = array();
	
	$font_fields = array(
		'content',
		'link',
		'nav_title',
		'nav_dropdown',
		'h1',
		'h2',
		'h3',
		'h4',
		'h5',
		'h6',
		'button',
		'small',
		'input',
		'quote'
	);
	
	$fonts_list = cmsmasters_fonts_list();
	
	
	foreach ($font_fields as $font_field) {
		$font_option = 'total-school' . '_' . $font_field . '_font_google_font';
		
		
		if (
			isset($cmsmasters_option[$font_option]) && 
			$cmsmasters_option[$font_option] != ''
		) {
			if (
				array_key_exists($cmsmasters_option[$font_option], $fonts_list['web']) || 
				array_key_exists($cmsmasters_option[$font_option], $fonts_list['local'])
			) {
				$fonts[] = $cmsmasters_option[$font_option];
			}
		}
	}
	
	
	$local_fonts = get_post_meta(get_the_ID(), 'cmsmasters_shortcodes_local_fonts', true);
	
	if ($local_fonts != '') {
		$local_fonts = explode('|', substr($local_fonts, 0, -1));
		
		$fonts = array_merge($fonts, $local_fonts);
	}
	
	
	if (!empty($fonts)) {
		$fonts = array_unique($fonts);
		
		
		foreach ($fonts as $font) {
			$cmsmasters_font_keys[] = $font;
		}
		
		
		cmsmasters_theme_google_font($fonts);
	}
}

}

add_action('wp_enqueue_scripts', 'total_school_theme_google_fonts_generate');
add_action('enqueue_block_editor_assets', 'total_school_theme_google_fonts_generate');



/* Google Fonts Enqueue Function */
if (!function_exists('cmsmasters_theme_google_font')) {

function cmsmasters_theme_google_font($fonts, $font_name = '') {
	global $cmsmasters_font_keys;
	
	
	if (!isset($cmsmasters_font_keys)) {
		return;
	}
	
	
	if ( 
		$font_name == '' || 
		($font_name != '' && is_array($cmsmasters_font_keys) && !in_array($font_name, $cmsmasters_font_keys)) 
	) {
		$local_fonts = '';
		
		$web_fonts = '';
		
		
		if (is_array($fonts)) {
			foreach($fonts as $font) {
				$check_font = explode(':', $font);
				
				
				if (is_numeric($check_font[0])) {
					$local_fonts .= get_post_meta($check_font[0], 'cmsmasters_font_face', true);
				} else {
					$web_fonts .= $font . '|';
				}
			}
		} else {
			$check_font = explode(':', $fonts);
			
			
			if (is_numeric($check_font[0])) {
				$local_fonts .= get_post_meta($check_font[0], 'cmsmasters_font_face', true);
			} else {
				$web_fonts .= $fonts . '|';
			}
		}
		
		
		if ($local_fonts != '' && $font_name == '') {
			wp_add_inline_style('theme-design-style', $local_fonts);
		}
		
		
		if ($web_fonts != '') {
			$web_fonts = str_replace('+', ' ', substr($web_fonts, 0, -1));
			
			
			if ($font_name != '') {
				$font_name = explode(':', $font_name);
				
				$web_font_id = '-' . str_replace('+', '-', strtolower($font_name[0]));
			} else {
				$web_font_id = '';
			}
			
			
			$web_font_url = add_query_arg('family', urlencode($web_fonts), '//fonts.googleapis.com/css');
			
			
			$cmsmasters_option = total_school_get_global_options();
			
			
			if (
				isset($cmsmasters_option['total-school' . '_google_web_fonts_subset']) && 
				is_array($cmsmasters_option['total-school' . '_google_web_fonts_subset'])
			) {
				$web_fonts_subset_array = $cmsmasters_option['total-school' . '_google_web_fonts_subset'];
			} else {
				$web_fonts_subset_array = array();
			}
			
			
			$web_fonts_subset = '';
			
			foreach ($web_fonts_subset_array as $subset) {
				$web_fonts_subset .= $subset . ',';
			}
			
			
			if ($web_fonts_subset != '') {
				$web_font_url = $web_font_url . '&amp;subset=' . substr($web_fonts_subset, 0, -1);
			}
			
			
			wp_enqueue_style("google-fonts{$web_font_id}", $web_font_url);
		}
	}
}

}



/* Google Fonts Font Family Substing Generate Function */
function total_school_get_google_font($font) {
	if ($font != '') {
		if (strpos($font, ':')) {
			$font_array = explode(':', $font);
			
			
			if (is_numeric($font_array[0])) {
				$font_out = "'" . str_replace('+', ' ', $font_array[1]) . "', ";
			} else {
				$font_out = "'" . str_replace('+', ' ', $font_array[0]) . "', ";
			}
		} elseif (strpos($font, '&')) {
			$font_array = explode('&', $font);
			
			
			$font_out = "'" . str_replace('+', ' ', $font_array[0]) . "', ";
		} else {
			$font_out = "'" . str_replace('+', ' ', $font) . "', ";
		}
	} else {
		$font_out = '';
	}
	
	
	return $font_out;
}



/* Register Default Theme Sidebars */
function total_school_the_widgets_init() {
    if (!function_exists('register_sidebars')) {
        return;
    }
    
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'total-school'), 
            'id' => 'sidebar_default', 
            'description' => esc_html__('Widgets in this area will be shown in all left and right sidebars till you don\'t use custom sidebar.', 'total-school'), 
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
            'after_widget' => '</aside>', 
            'before_title' => '<h3 class="widgettitle">', 
            'after_title' => '</h3>'
        )
    );
    
    register_sidebar(
        array(
            'name' => esc_html__('Bottom Sidebar', 'total-school'), 
            'id' => 'sidebar_bottom', 
            'description' => esc_html__('Widgets in this area will be shown at the bottom of middle block below the content and middle sidebar, but above footer.', 'total-school'), 
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
            'after_widget' => '</aside>', 
            'before_title' => '<h3 class="widgettitle">', 
            'after_title' => '</h3>'
        )
    );
    
    register_sidebar(
        array(
            'name' => esc_html__('Archive Sidebar', 'total-school'), 
            'id' => 'sidebar_archive', 
            'description' => esc_html__('Widgets in this area will be shown in all left and right sidebars on archives pages.', 'total-school'), 
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
            'after_widget' => '</aside>', 
            'before_title' => '<h3 class="widgettitle">', 
            'after_title' => '</h3>'
        )
    );
    
    register_sidebar(
        array(
            'name' => esc_html__('Search Sidebar', 'total-school'), 
            'id' => 'sidebar_search', 
            'description' => esc_html__('Widgets in this area will be shown in left or right sidebar on search page.', 'total-school'), 
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
            'after_widget' => '</aside>', 
            'before_title' => '<h3 class="widgettitle">', 
            'after_title' => '</h3>'
        )
    );
	
	
	$cmsmasters_option = total_school_get_global_options();
	
	
	if (isset($cmsmasters_option['total-school' . '_sidebar']) && sizeof($cmsmasters_option['total-school' . '_sidebar']) > 0) {
		foreach ($cmsmasters_option['total-school' . '_sidebar'] as $sidebar) {
			register_sidebar(array( 
				'name' => $sidebar, 
				'id' => generateSlug($sidebar, 45), 
				'description' => esc_html__('Custom sidebar created with cmsmasters admin panel.', 'total-school'), 
				'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
				'after_widget' => '</aside>', 
				'before_title' => '<h3 class="widgettitle">', 
				'after_title' => '</h3>' 
			) );
		}
	}
}

add_action('widgets_init', 'total_school_the_widgets_init');



/* Register Theme Navigations */
register_nav_menus(array( 
    'primary' => 	esc_html__('Primary Navigation', 'total-school'), 
    'footer' => 	esc_html__('Footer Navigation', 'total-school'), 
	'top_line' => 	esc_html__('Top Line Navigation', 'total-school') 
));



/* Register Showing Home Page on Default WordPress Pages Menu */
function total_school_page_menu_args($args) {
    $args['show_home'] = true;
    
	
    return $args;
}

add_filter('wp_page_menu_args', 'total_school_page_menu_args');



/* Register Showing Home Page on Default WordPress Pages Menu */
function cmsmasters_custom_mega_menu_item_output($args) {
	$shcd_args = $args['args'];
	
	$shcd_attrs = $args['attrs'];
	
	$shcd_depth = $args['depth'];
	
	$shcd_item = $args['item'];
	
	$shcd_cols_count = $args['cols_count'];
	
	
	$item_output = '';
	
	
	if (!empty($shcd_item->color)) {
		$item_output .= '<style type="text/css"> ' . 
			'.navigation .menu-item-' . $shcd_item->ID . ' > a {' . 
				'color:' . $shcd_item->color . ';' . 
			'} ' . 
		'</style>';
	}
	
	
	$item_output .= $shcd_args->before . 
		'<a' . $shcd_attrs . '>';
	
	
	$item_output .= $shcd_args->link_before;
	
	
	if ( 
		($shcd_depth <= 1 && empty($shcd_item->hide_text)) || 
		($shcd_depth == 0 && !empty($shcd_item->hide_text) && !empty($shcd_item->icon)) || 
		($shcd_depth == 1 && $shcd_cols_count == NULL && !empty($shcd_item->hide_text)) || 
		($shcd_depth == 1 && $shcd_cols_count != NULL && !empty($shcd_item->hide_text) && !empty($shcd_item->icon)) || 
		($shcd_depth > 1) 
	) {
		$item_output .= '<span class="nav_title' . (!empty($shcd_item->icon) ? ' ' . $shcd_item->icon : '') . '">';
		
			if (empty($shcd_item->hide_text)) {
				$item_output .= apply_filters('the_title', $shcd_item->title, $shcd_item->ID);
			}
			
		$item_output .= '</span>';
		
		
		if (!empty($shcd_item->tag)) {
			$item_output .= '<span class="nav_tag">' . esc_attr($shcd_item->tag) . '</span>';
		}
		
		
		if ( 
			($shcd_depth == 0 && !empty($shcd_item->subtitle)) || 
			($shcd_depth == 1 && $shcd_cols_count != NULL && !empty($shcd_item->subtitle)) 
		) {
			$item_output .= '<span class="nav_subtitle">' . 
				$shcd_item->subtitle . 
			'</span>';
		}
	}
	
	
	$item_output .= $shcd_args->link_after . 
		'</a>' . 
	$shcd_args->after;
	
	
	return $item_output;
}

add_filter('cmsmasters_mega_item_output', 'cmsmasters_custom_mega_menu_item_output');



/* Register wp_nav_menu() Fallback Function */
function total_school_fallback_menu($args) {
	$cmsmasters_option = total_school_get_global_options();
	
	
	echo '<div class="navigation_wrap">' . "\n" . 
		'<ul id="navigation" class="' . 
			'navigation ' . 
			($cmsmasters_option['total-school' . '_header_styles'] == 'default' ? 'mid_nav' : 'bot_nav') . 
		'">' . "\n";
	
	
	wp_list_pages(array( 
		'title_li' => '', 
		'link_before' => '<span class="nav_item_wrap">', 
		'link_after' => '</span>' 
	));
	
	
	echo '</ul>' . "\r" . 
	'</div>' . "\n";
}



/* Register Post Formats, Feed Links, Post Thumbnails and Set Image Sizes*/
if (function_exists('add_theme_support')) {
	add_theme_support('post-formats', array( 
		'image', 
		'gallery', 
		'video', 
		'audio' 
	));
	
	
	function total_school_add_post_type_support_project($post) {
		$screen = get_current_screen();
		
		$post_type = $screen->post_type;
		
		
		if ($post_type == 'project') {
			add_theme_support('post-formats', array( 
				'gallery', 
				'video' 
			));
		}
	}
	
	add_action('load-post.php', 'total_school_add_post_type_support_project');
	
	add_action('load-post-new.php', 'total_school_add_post_type_support_project');
	
	
	// Add post-formats to post_type 'project'
	function total_school_add_post_formats_to_project() {
		add_post_type_support('project', 'post-formats');
		
		register_taxonomy_for_object_type('post_format', 'project');
	}
	
	add_action('init', 'total_school_add_post_formats_to_project', 11);
	
	
	add_theme_support('post-thumbnails');
	
	
	add_theme_support('title-tag');
	
	
	add_theme_support('automatic-feed-links');
	
	
	add_theme_support('html5', array( 
		'comment-list', 
		'comment-form', 
		'search-form', 
		'gallery', 
		'caption' 
	));
	
	
	$thumbnail_list = cmsmasters_image_thumbnail_list();
	
	
	if (!isset($content_width)) {
		$content_width = $thumbnail_list['cmsmasters-full-thumb']['width'];
	}
	
	
	set_post_thumbnail_size($thumbnail_list['post-thumbnail']['width'], $thumbnail_list['post-thumbnail']['height'], $thumbnail_list['post-thumbnail']['crop']);
	
	
	if (function_exists('add_image_size')) {
		foreach ($thumbnail_list as $key => $image_size) {
			if ($key != 'post-thumbnail') {
				add_image_size($key, $image_size['width'], $image_size['height'], (isset($image_size['crop']) ? isset($image_size['crop']) : false));
			}
		}
	}
	
	
	add_filter('image_size_names_choose', 'total_school_select_image_size');
}



/* Add Image Thumbnails Size to the List */
function total_school_select_image_size($sizes) {
	$thumbnail_list = cmsmasters_image_thumbnail_list();
	
	
	$new_sizes = array();
	
	
	foreach ($thumbnail_list as $key => $image_size) {
		if (isset($image_size['title'])) {
			$new_sizes[$key] = $image_size['title'];
		}
	}
	
	
	$sizes = array_merge($sizes, $new_sizes);
	
	
	return $sizes;
}



/* Register Visual Content Editor CSS Stylesheet */
function total_school_add_editor_styles() {
	add_editor_style('framework/admin/inc/css/custom-editor-style.css');
	
	
	add_editor_style('//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext');
}

$cmsmasters_wp_version = get_bloginfo('version');

if (version_compare($cmsmasters_wp_version, '5', '<') && !function_exists('is_gutenberg_page')) {
	add_action('init', 'total_school_add_editor_styles');
}



/* Register Removing 'More Text' From Excerpt */
function total_school_new_excerpt_more($more) {
	return '...';
}

add_filter('excerpt_more', 'total_school_new_excerpt_more');



/* Register Custom Excerpt Length Function */
class Excerpt {
	var $length = 55;
	
	function __construct($length) {
		$this->length = $length;
		
		add_filter('excerpt_length', array($this, 'new_length'), 999);
	}
	
	public function new_length() {
		return $this->length;
	}
	
	function output() {
		the_excerpt();
	}
	
	function return_out() {
		return get_the_excerpt();
	}
}

function theme_excerpt($length = 55, $show = true) {
	if ($show) {
		$result = new Excerpt($length);
		
		$result->output();
	} else {
		$result = new Excerpt($length);
		
		return $result->return_out();
	}
}



/* Register Post Types in Author & Date Archive */
function total_school_post_author_archive($query) {
	if (isset($query) && !is_admin() && (is_author()  || is_date())) {
		$query->set('post_type', array( 
			'post', 
			'project', 
			'campaign' 
		));
	}
	
	
	return $query;
}

add_action('pre_get_posts', 'total_school_post_author_archive');



/* Check Row p Wrapper */
function total_school_rowcheck($content) {
    $content = str_replace('[/cmsmasters_row]</p>', '[/cmsmasters_row]', $content);
    $content = str_replace('<p>[cmsmasters_row', '[cmsmasters_row', $content);
	
	
    return $content;
}



/* Register Removing 'p' Tags that Wrap Divs */
function cmsmasters_divpdel($content) {
	$block = '(address|article|aside|audio|blockquote|canvas|dd|div|dl|fieldset|figcaption|figure|footer|form|h1|h2|h3|h4|h5|h6|header|hgroup|hr|noscript|ol|output|pre|section|table|tfoot|ul|video|style|iframe)';
	
	
	$content = preg_replace('/^<\/p>/', '', $content);
	$content = preg_replace('/<p>$/', '', $content);
	$content = preg_replace('/<\/' . $block . '>(\s*)<\/p>/', '</\1>', $content);
	$content = preg_replace('/<' . $block . '([^>]+)>(\s*)<\/p>/', '<\1\2>', $content);
	$content = preg_replace('/<p>\s+<' . $block . '([^>]+)>/', '<\1\2>', $content);
	$content = preg_replace('/<p>\s+<\/' . $block . '>/', '</\1>', $content);
	$content = preg_replace('/<p><' . $block . '/', '<\1', $content);
	$content = preg_replace('/(<a\shref="[^"]*"\sid="[^"]*"\sclass="button[^"]*"[^>]*>[^<]+<\/a>\s*)<\/p>/', '\1', $content);
	
	
    return $content;
}



/* Generate Slug Function */
function generateSlug($phrase, $maxLength) {
	$result = strtolower($phrase);
	
	
	$result = preg_replace("/[^a-z0-9\s-]/", "", $result);
	$result = trim(preg_replace("/[\s-]+/", " ", $result));
	$result = trim(substr($result, 0, $maxLength));
	$result = preg_replace("/\s/", "-", $result);
	
	
	return $result;
}



/* Add Icons List to Database */
function total_school_add_global_icons() {
	global $wp_filesystem;
	
	
	if (empty($wp_filesystem)) {
		require_once(ABSPATH . '/wp-admin/includes/file.php');
		
		WP_Filesystem();
	}
	
	
	if ($wp_filesystem) {
		$icons = $wp_filesystem->get_contents(get_template_directory() . '/' . CMSMASTERS_ADMIN . '/inc/fonts/config.json');
		
		$icons_custom = $wp_filesystem->get_contents(get_template_directory() . '/' . CMSMASTERS_ADMIN . '/inc/fonts/config-custom.json');
		
		
		$arr = json_decode($icons, true);
		
		$arr_custom = json_decode($icons_custom, true);
		
		
		update_option('cmsmasters_' . 'total-school' . '_icons', serialize($arr));
		
		update_option('cmsmasters_' . 'total-school' . '_icons_custom', serialize($arr_custom));
	}
}



/* Generate Icons List */
function cmsmasters_composer_icons() {
	$icons = get_option('cmsmasters_' . 'total-school' . '_icons');
	
	$icons_custom = get_option('cmsmasters_' . 'total-school' . '_icons_custom');
	
	
	$arr = unserialize($icons);
	
	$arr_custom = unserialize($icons_custom);
	
	$new_icons = '';
	
	
	$out = "\n" . '<script type="text/javascript"> ' . "\n" . 
	'/* <![CDATA[ */' . "\n\t" . 
		'function cmsmasters_composer_icons() { ' . "\n\t\t" . 
			'return { ' . "\n\t\t\t";
	
	
	if (!empty($arr_custom)) {
		foreach ($arr_custom['glyphs'] as $item) {
			if ($new_icons != $item['src']) {
				if ($new_icons != '') {
					$out = substr($out, 0, -4);
					
					$out .= ' ' . "\n\t\t\t" . '}, ' . "\n\t\t\t";
				}
				
				
				$out .= "'" . $item['src'] . "' : { \n\t";
				
				
				$new_icons = $item['src'];
			}
			
			
			$out .= "\t\t\t'" . $item['css'] . "' : '" . $arr_custom['css_prefix_text'] . $item['css'] . "', \n\t";
		}
	}
	
	
	if (!empty($arr)) {
		foreach ($arr['glyphs'] as $item) {
			if ($new_icons != $item['src']) {
				if ($new_icons != '') {
					$out = substr($out, 0, -4);
					
					$out .= ' ' . "\n\t\t\t" . '}, ' . "\n\t\t\t";
				}
				
				
				$out .= "'" . $item['src'] . "' : { \n\t";
				
				
				$new_icons = $item['src'];
			}
			
			
			$out .= "\t\t\t'" . $item['css'] . "' : '" . $arr['css_prefix_text'] . $item['css'] . "', \n\t";
		}
	}
	
	
	$out = substr($out, 0, -4);
	
	$out .= ' ' . "\n\t\t\t" . '} ' . "\n\t\t" . 
			'}; ' . "\n\t" . 
		'} ' . "\n" . 
	'/* ]]> */' . "\n" . 
	'</script>' . "\n\n";
	
	
	echo total_school_return_content($out);
}



/* Generate CSS Rules */
function cmsmasters_color_css($rule, $color) {
	return $rule . ':' . $color . ';';
}



/* Generate RGB from HEX/RGBA Color */
function cmsmasters_color2rgb($color) {
	return (preg_match('/^#[a-f0-9]{3}$/i', $color) || preg_match('/^#[a-f0-9]{6}$/i', $color)) ? cmsmasters_hex2rgb($color) : cmsmasters_rgba2rgb($color);
}



/* Generate RGB Color from HEX */
function cmsmasters_hex2rgb($color) {
	$new_color = substr($color, 1);
	
	$color_len = strlen($new_color);
	
	
	$result = '';
	
	
	if ($color_len == 6) {
		$rgb = str_split($new_color, 2);
	} elseif ($color_len == 3) {
		$rgb = str_split($new_color, 1);
	}
	
	
	foreach ($rgb as $number) {
		$result .= hexdec((strlen($number) == 2) ? $number : $number . $number) . ', ';
	}
	
	
	$rgb_color = substr($result, 0, -2);
	
	
	return $rgb_color;
}



/* Generate HEX Color from RGB */
function cmsmasters_rgb2hex($rgb) {
	$newRGBs = explode(',', $rgb);
	
	
	$r = trim($newRGBs[0]);
	$g = trim($newRGBs[1]);
	$b = trim($newRGBs[2]);
	
	
	$hex_color = '#' . dechex($r) . dechex($g) . dechex($b);
	
	
	return $hex_color;
}



/* Generate RGB Color from RGBA */
function cmsmasters_rgba2rgb($rgba) {
	$newRGBAs = explode(',', $rgba);
	
	$r = trim(substr($newRGBAs[0], 5));
	$g = trim($newRGBAs[1]);
	$b = trim($newRGBAs[2]);
	
	
	$rgb_color = "rgb({$r}, {$g}, {$b})";
	
	
	return $rgb_color;
}



/* Generate HSL Color from RGB */
function cmsmasters_rgb2hsl($rgb) {
	$newRGBs = explode(',', $rgb);
	
	
	$r = trim($newRGBs[0]);
	$g = trim($newRGBs[1]);
	$b = trim($newRGBs[2]);
	
	
	$oldR = $r;
	$oldG = $g;
	$oldB = $b;
	
	
	$r /= 255;
	$g /= 255;
	$b /= 255;
	
	
	$max = max($r, $g, $b);
	$min = min($r, $g, $b);
	
	
	$h;
	$s;
	
	
	$l = ($max + $min) / 2;
	$d = $max - $min;
	
	
	if ($d == 0) {
		$h = $s = 0;
	} else {
		$s = $d / (1 - abs(2 * $l - 1));
		
		
		switch ($max) {
		case $r:
			$h = 60 * fmod((($g - $b) / $d), 6);
			
			
			if ($b > $g) {
				$h += 360;
			}
			
			
			break;
		case $g:
			$h = 60 * (($b - $r) / $d + 2);
			
			
			break;
		case $b:
			$h = 60 * (($r - $g) / $d + 4);
			
			
			break;
		}
	}
	
	
	return array(round($h, 2), round($s, 2), round($l, 2));
}



/* Generate RGB Color from HSL */
function cmsmasters_hsl2rgb($h, $s, $l) {
	$r;
	$g;
	$b;
	
	
	$c = (1 - abs(2 * $l - 1)) * $s;
	$x = $c * (1 - abs(fmod(($h / 60), 2) - 1));
	$m = $l - ($c / 2);
	
	
	if ($h < 60) {
		$r = $c;
		$g = $x;
		$b = 0;
	} else if ($h < 120) {
		$r = $x;
		$g = $c;
		$b = 0;	
	} else if ($h < 180) {
		$r = 0;
		$g = $c;
		$b = $x;	
	} else if ($h < 240) {
		$r = 0;
		$g = $x;
		$b = $c;
	} else if ($h < 300) {
		$r = $x;
		$g = 0;
		$b = $c;
	} else {
		$r = $c;
		$g = 0;
		$b = $x;
	}
	
	
	$r = ($r + $m) * 255;
	$g = ($g + $m) * 255;
	$b = ($b + $m) * 255;
	
	
	return floor($r) . ', ' . floor($g) . ', ' . floor($b);
}



/* Convert Embedded Video URL Function */
function cmsmasters_embedConvert($url) {
	if (str_replace('youtube', '', $url) !== $url) {
		parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
		
		$result = '//www.youtube.com/embed/' . $my_array_of_vars['v'] . '?autoplay=1&autohide=1&border=0&egm=0&showinfo=0';
	} elseif (str_replace('vimeo', '', $url) !== $url) {
		$video_id = substr(parse_url($url, PHP_URL_PATH), 1);
		
		$result = '//player.vimeo.com/video/' . $video_id . '?autoplay=1';
	} else {
		$result = '';
	}
	
	
	return $result;
}



/* Return of get_template_part() */
function cmsmasters_load_template_part($template_name, $part_name = null) {
    ob_start();
	
	
    get_template_part($template_name, $part_name);
	
	
    $out = ob_get_contents();
	
	
    ob_end_clean();
	
	
    return $out;
}



/* Return of get_template_part() File Function */
function cmsmasters_return_template_part($post_format = 'standard', $post_layout = 'default', $post_page = 'page', $post_type = 'blog') {
    get_template_part('framework/post-type/' . $post_type . '/' . (($post_page) ? $post_page . '/' : '') . (($post_layout) ? $post_layout . '/' : '') . $post_format);
	
	
	$out = $post_type . '_' . (($post_page) ? $post_page . '_' : '') . (($post_layout) ? $post_layout . '_' : '') . $post_format;
	
	
	return $out();
}



/* Regenerate Custom Styles Function */
function total_school_regenerate_styles() {
	$custom_css_fonts = total_school_theme_fonts();
	
	$custom_css_colors_primary = total_school_theme_colors_primary();
	
	$custom_css_colors_secondary = total_school_theme_colors_secondary();
	
	
	$custom_css = $custom_css_fonts . $custom_css_colors_primary . $custom_css_colors_secondary;
	
	
	total_school_write_styles($custom_css_fonts, 'total-school' . '_fonts');
	
	total_school_write_styles($custom_css_colors_primary, 'total-school' . '_colors_primary');
	
	total_school_write_styles($custom_css_colors_secondary, 'total-school' . '_colors_secondary');
	
	
	total_school_write_styles($custom_css);
}



/* Regenerate Custom Styles Function for plugins */
function cmsmasters_regenerate_styles() {
	total_school_regenerate_styles();
}



/* Write Custom Styles to File Function */
function total_school_write_styles($styles, $filename = '') {
	$upload_dir = wp_upload_dir();
	
	
	$style_dir = str_replace('\\', '/', $upload_dir['basedir'] . '/cmsmasters_styles');
	
	
	$is_dir = total_school_create_folder($style_dir);
	
	
	if ($is_dir === false) {
		update_option('cmsmasters_style_dir_writable_' . 'total-school', 'false');
		
		update_option('cmsmasters_style_exists_' . 'total-school', 'false');
		
		
		return;
	}
	
	
	$file = trailingslashit($style_dir) . (($filename != '') ? $filename : 'total-school') . '.css';
	
	
	$created = total_school_create_file($file, $styles);
	
	
	if ($created === true) {
		update_option('cmsmasters_style_dir_writable_' . 'total-school', 'true');
		
		update_option('cmsmasters_style_exists_' . 'total-school', 'true');
	}
}



/* Create Folder Function */
function total_school_create_folder(&$folder, $addindex = true) {
	if (is_dir($folder) && $addindex == false) {
		return true;
	}
	
	
	$created = wp_mkdir_p(trailingslashit($folder));
	
	
	@chmod($folder, 0755);
	
	
	if ($addindex == false) {
		return $created;
	}
	
	
	$index_file = trailingslashit($folder) . 'index.php';
	
	
	if (file_exists($index_file)) {
		return $created;
	}
	
	
	global $wp_filesystem;
	
	
	if (empty($wp_filesystem)) {
		require_once(ABSPATH . '/wp-admin/includes/file.php');
		
		WP_Filesystem();
	}
	
	
	if ($wp_filesystem) {
		$wp_filesystem->put_contents(
			$index_file,
			"<?php\n// Silence is golden.\n",
			FS_CHMOD_FILE
		);
	}
	
	
	return $created;
}



/* Create File Function */
function total_school_create_file($file, $content = '', $verifycontent = true) {
	global $wp_filesystem;
	
	
	if (empty($wp_filesystem)) {
		require_once(ABSPATH . '/wp-admin/includes/file.php');
		
		WP_Filesystem();
	}
	
	
	if ($wp_filesystem) {
		$created = $wp_filesystem->put_contents(
			$file,
			$content,
			FS_CHMOD_FILE
		);
	}
	
	
	if ($created !== false) {
		$created = true;
	}
	
	
	return $created;
}



/* Twitter Shortcode Function */
function cmsmasters_get_tweets( $username, $count ) {
	$backup_name = 'cmsmasters_' . 'total-school' . '_tweets_list_backup';

	$backup_tweets = get_option( $backup_name );

	if ( 'done' === get_transient( 'cmsmasters_' . 'total-school' . '_tweets_list_regeneration' ) && ! empty( $backup_tweets ) ) {
		return $backup_tweets;
	}

	$cmsmasters_option = total_school_get_global_options();

	if ( empty( $cmsmasters_option['total-school' . '_twitter_access_token'] ) ) {
		return $backup_tweets;
	}

	$response = wp_remote_get(
		'https://api.twitter.com/1.1/statuses/user_timeline.json',
		array(
			'headers' => array(
				'Authorization' => 'Bearer ' . esc_html( $cmsmasters_option['total-school' . '_twitter_access_token'] ),
			),
			'body' => array(
				'screen_name' => $username,
				'count' => max( 50, $count * 3 ),
				'exclude_replies' => true,
				'include_rts' => true,
			),
		)
	);

	if ( 200 !== wp_remote_retrieve_response_code( $response ) ) {
		return $backup_tweets;
	}

	$fetchedTweets = json_decode( wp_remote_retrieve_body( $response ) );
	$limitToDisplay = min( $count, count( $fetchedTweets ) );
	$tweets = array();

	for ( $i = 0; $i < $limitToDisplay; $i++ ) {
		$tweet = $fetchedTweets[$i];
		$name = $tweet->user->name;
		$permalink = '//twitter.com/' . $name . '/status/' . $tweet->id_str;
		$image = $tweet->user->profile_image_url;
		$pattern = '/(http|https):(\S)+/';
		$replace = '<a href="${0}" target="_blank" rel="nofollow">${0}</a>';
		$text = preg_replace($pattern, $replace, $tweet->text);
		$time = $tweet->created_at;
		$time = date_parse($time);
		$uTime = mktime($time['hour'], $time['minute'], $time['second'], $time['month'], $time['day'], $time['year']);

		$tweets[] = array(
			'text' => $text,
			'name' => $name,
			'permalink' => $permalink,
			'image' => $image,
			'time' => $uTime,
		);
	}

	update_option( $backup_name, $tweets );

	set_transient( 'cmsmasters_' . 'total-school' . '_tweets_list_regeneration', 'done', HOUR_IN_SECONDS * 6 );

	return $tweets;
}



/* Theme Header Styles & Custom CSS Function */
function total_school_theme_header_styles() {
	$cmsmasters_option = total_school_get_global_options();
	
	
	$header_top_height = (($cmsmasters_option['total-school' . '_header_top_height'] !== '') ? $cmsmasters_option['total-school' . '_header_top_height'] : '34');
	
	$header_mid_height = (($cmsmasters_option['total-school' . '_header_mid_height'] !== '') ? $cmsmasters_option['total-school' . '_header_mid_height'] : '95');
	
	$header_bot_height = (($cmsmasters_option['total-school' . '_header_bot_height'] !== '') ? $cmsmasters_option['total-school' . '_header_bot_height'] : '45');
	
	
	$out = "
	.header_top {
		height : {$header_top_height}px;
	}
	
	.header_mid {
		height : {$header_mid_height}px;
	}
	
	.header_bot {
		height : {$header_bot_height}px;
	}
	
	#page.cmsmasters_heading_after_header #middle, 
	#page.cmsmasters_heading_under_header #middle .headline .headline_outer {
		padding-top : {$header_mid_height}px;
	}
	
	#page.cmsmasters_heading_after_header.enable_header_top #middle, 
	#page.cmsmasters_heading_under_header.enable_header_top #middle .headline .headline_outer {
		padding-top : " . ($header_mid_height + $header_top_height) . "px;
	}
	
	#page.cmsmasters_heading_after_header.enable_header_bottom #middle, 
	#page.cmsmasters_heading_under_header.enable_header_bottom #middle .headline .headline_outer {
		padding-top : " . ($header_mid_height + $header_bot_height) . "px;
	}
	
	#page.cmsmasters_heading_after_header.enable_header_top.enable_header_bottom #middle, 
	#page.cmsmasters_heading_under_header.enable_header_top.enable_header_bottom #middle .headline .headline_outer {
		padding-top : " . ($header_mid_height + $header_top_height + $header_bot_height) . "px;
	}
	
	
	/* Header Overlaps Styles Start */
	@media only screen and (min-width: 1025px) {
		#page.cmsmasters_header_overlaps_enabled #header:not(.navi_scrolled) .search_button button:before, 
		#page.cmsmasters_header_overlaps_enabled #header:not(.navi_scrolled) .cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button {
			color:#ffffff;
		}
		
		#page.cmsmasters_header_overlaps_enabled #header:not(.navi_scrolled) .header_mid ul.navigation > li > a {
			background-color:transparent;
			color:#ffffff;
		}
		
		#page.cmsmasters_header_overlaps_enabled #header:not(.navi_scrolled) .header_mid ul.navigation > li > a:hover {
			color: rgba(255,255,255,.7);
		}
	}
	
	#page.cmsmasters_header_overlaps_enabled #header:not(.navi_scrolled) .header_mid {
		background-color:transparent;
	}
	
	#page.cmsmasters_header_overlaps_enabled #header:not(.navi_scrolled) .search_button button:hover:before, 
	#page.cmsmasters_header_overlaps_enabled #header:not(.navi_scrolled) .cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button:hover {
		color: rgba(255,255,255,.7);
	}
	
	#page.cmsmasters_header_overlaps_enabled #header:not(.navi_scrolled) .header_mid ul.navigation > li {
		border-color:transparent;
		 -webkit-transition: top 1s ease-out 0.5s;
	}
	
	/* Header Overlaps Styles End */
	
	@media only screen and (max-width: 1024px) {
		.header_top,
		.header_mid,
		.header_bot {
			height : auto;
		}
		
		.header_mid .header_mid_inner > div {
			height : {$header_mid_height}px;
		}
		
		.header_bot .header_bot_inner > div {
			height : {$header_bot_height}px;
		}
		
		#page.cmsmasters_heading_after_header #middle, 
		#page.cmsmasters_heading_under_header #middle .headline .headline_outer, 
		#page.cmsmasters_heading_after_header.enable_header_top #middle, 
		#page.cmsmasters_heading_under_header.enable_header_top #middle .headline .headline_outer, 
		#page.cmsmasters_heading_after_header.enable_header_bottom #middle, 
		#page.cmsmasters_heading_under_header.enable_header_bottom #middle .headline .headline_outer, 
		#page.cmsmasters_heading_after_header.enable_header_top.enable_header_bottom #middle, 
		#page.cmsmasters_heading_under_header.enable_header_top.enable_header_bottom #middle .headline .headline_outer {
			padding-top : 0 !important;
		}
	}
	
	@media only screen and (max-width: 768px) {
		.header_mid .header_mid_inner > div, 
		.header_bot .header_bot_inner > div {
			height:auto;
		}
	}
";
	
	
	if (is_404()) {
		if (
			$cmsmasters_option['total-school' . '_error_bg_img_enable'] && 
			$cmsmasters_option['total-school' . '_error_bg_image'] != ''
		) {
			$error_bg_image = explode('|', $cmsmasters_option['total-school' . '_error_bg_image']);
			
			
			if (is_numeric($error_bg_image[0])) {
				$error_bg_image_url = wp_get_attachment_image_src((int) $error_bg_image[0], 'full');
			}
			
			
			$out .= "
	.error .error_bg {
		background-image : " . (!empty($cmsmasters_option['total-school' . '_error_bg_image']) ? 'url(' . ((is_numeric($error_bg_image[0])) ? $error_bg_image_url[0] : $error_bg_image[1]) . ')' : 'none') . ";
		background-position : " . (!empty($cmsmasters_option['total-school' . '_error_bg_pos']) ? $cmsmasters_option['total-school' . '_error_bg_pos'] : 'top center') . ";
		background-repeat : " . (!empty($cmsmasters_option['total-school' . '_error_bg_rep']) ? $cmsmasters_option['total-school' . '_error_bg_rep'] : 'repeat') . ";
		background-attachment : " . (!empty($cmsmasters_option['total-school' . '_error_bg_att']) ? $cmsmasters_option['total-school' . '_error_bg_att'] : 'scroll') . ";
		background-size : " . (!empty($cmsmasters_option['total-school' . '_error_bg_size']) ? $cmsmasters_option['total-school' . '_error_bg_size'] : 'auto') . ";
	}
";
		}
		
		
		$out .= "
	.error .error_bg {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['total-school' . '_error_bg_color']) . "
	}
	
	.error .error_title, 
	.error .error_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option['total-school' . '_error_color']) . "
	}
";
	}
	
	
	if ($cmsmasters_option['total-school' . '_custom_css'] != '') {
		$out .= stripslashes($cmsmasters_option['total-school' . '_custom_css']);
	}
	
	
	return $out;
}



/* Theme Background Styles Function */
function total_school_theme_bg_styles() {
	global $post;
	
	
	$cmsmasters_option = total_school_get_global_options();
	
	
	if (is_singular()) {
		$cmsmasters_page_id = $post->ID;
	} elseif (CMSMASTERS_WOOCOMMERCE && is_shop()) {
		$cmsmasters_page_id = wc_get_page_id('shop');
	}
	
	
	$out = "";
	
	
	if ($cmsmasters_option['total-school' . '_theme_layout'] == 'boxed') {
		$cmsmasters_bg_default = 'true';
		
		
		if (
			is_singular() || 
			(CMSMASTERS_WOOCOMMERCE && is_shop())
		) {
			$cmsmasters_bg_default = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_default', true);
		}
		
		
		if ($cmsmasters_bg_default == 'false') {
			$cmsmasters_bg_col = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_col', true);
			$cmsmasters_bg_img_enable = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_img_enable', true);
			$cmsmasters_bg_img_str = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_img', true);
			$cmsmasters_bg_pos = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_pos', true);
			$cmsmasters_bg_rep = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_rep', true);
			$cmsmasters_bg_att = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_att', true);
			$cmsmasters_bg_size = get_post_meta($cmsmasters_page_id, 'cmsmasters_bg_size', true);
		} else {
			$cmsmasters_bg_col = $cmsmasters_option['total-school' . '_bg_col'];
			$cmsmasters_bg_img_enable = $cmsmasters_option['total-school' . '_bg_img_enable'];
			$cmsmasters_bg_img_str = $cmsmasters_option['total-school' . '_bg_img'];
			$cmsmasters_bg_pos = $cmsmasters_option['total-school' . '_bg_pos'];
			$cmsmasters_bg_rep = $cmsmasters_option['total-school' . '_bg_rep'];
			$cmsmasters_bg_att = $cmsmasters_option['total-school' . '_bg_att'];
			$cmsmasters_bg_size = $cmsmasters_option['total-school' . '_bg_size'];
		}
		
		
		$cmsmasters_bg_img = (!empty($cmsmasters_bg_img_str) ? explode('|', $cmsmasters_bg_img_str) : $cmsmasters_bg_img_str);
		$cmsmasters_bg_img_url = (isset($cmsmasters_bg_img[0]) && is_numeric($cmsmasters_bg_img[0]) ? wp_get_attachment_image_src((int) $cmsmasters_bg_img[0], 'full') : '');
		$cmsmasters_bg_img_src = (is_array($cmsmasters_bg_img) ? 'url(' . ((is_numeric($cmsmasters_bg_img[0])) ? $cmsmasters_bg_img_url[0] : $cmsmasters_bg_img[1]) . ')' : 'none');
		
		
		$out .= "
	body {
		background-color : {$cmsmasters_bg_col};";
		
		if ($cmsmasters_bg_img_enable) {
			$out .= "
		background-image : {$cmsmasters_bg_img_src};
		background-position : {$cmsmasters_bg_pos};
		background-repeat : {$cmsmasters_bg_rep};
		background-attachment : {$cmsmasters_bg_att};
		background-size : {$cmsmasters_bg_size};
		";
		}
		
		$out .= "
	}";
	}
	
	
	return $out;
}



/* Theme Custom Styles */
function total_school_theme_custom_styles() {
	echo '<style type="text/css">' . 
		total_school_theme_header_styles() . 
		total_school_theme_bg_styles() . 
		total_school_theme_logo_styles() . 
		total_school_theme_page_heading_styles() . 
		(CMSMASTERS_COLORED_CATEGORIES ? total_school_theme_category_styles() : '') . 
		total_school_theme_social_icons_styles() . 
	'</style>';
}

add_action('wp_head', 'total_school_theme_custom_styles');



/* Theme Footer Scripts Function */
function total_school_theme_footer_scripts() {
	$cmsmasters_option = total_school_get_global_options();
	
	
	if ($cmsmasters_option['total-school' . '_custom_js'] != '') {
		echo "
<script type=\"text/javascript\">
	" . stripslashes($cmsmasters_option['total-school' . '_custom_js']) . "
</script>
";
	}
}

add_action('wp_print_footer_scripts', 'total_school_theme_footer_scripts');



/* Theme Page Layout and Scheme Function */
function total_school_theme_page_layout_scheme() {
	$cmsmasters_option = total_school_get_global_options();
	
	
	if (is_singular()) {
		$cmsmasters_page_id = get_the_ID();
	} elseif (CMSMASTERS_WOOCOMMERCE && is_shop()) {
		$cmsmasters_page_id = wc_get_page_id('shop');
	} else {
		$cmsmasters_page_id = false;
	}
	
	
	if (
		is_404() || 
		is_attachment() || 
		is_singular('project') || 
		is_singular('profile') || 
		is_singular('donation')
	) {
		$cmsmasters_layout = 'fullwidth';
	} elseif (
		is_singular() || 
		(CMSMASTERS_WOOCOMMERCE && is_shop())
	) {
		$cmsmasters_layout = get_post_meta($cmsmasters_page_id, 'cmsmasters_layout', true);
	} elseif (CMSMASTERS_EVENTS_CALENDAR && tribe_is_event_query() && isset($cmsmasters_option['total-school' . '_events_layout'])) {
		$cmsmasters_layout = $cmsmasters_option['total-school' . '_events_layout'];
	} elseif (is_archive() || is_home()) {
		$cmsmasters_layout = $cmsmasters_option['total-school' . '_archives_layout'];
	} elseif (is_search()) {
		$cmsmasters_layout = $cmsmasters_option['total-school' . '_search_layout'];
	} else {
		$cmsmasters_layout = $cmsmasters_option['total-school' . '_other_layout'];
	}
	
	if (CMSMASTERS_LEARNPRESS && learn_press_is_profile()) {
		$cmsmasters_layout = 'fullwidth';
	}
	
	
	if ($cmsmasters_layout == '') {
		$cmsmasters_layout = $cmsmasters_option['total-school' . '_layout'];
	}
	
	
	if ($cmsmasters_layout != 'fullwidth') {
		if ($cmsmasters_page_id) {
			$sidebar_id = get_post_meta($cmsmasters_page_id, 'cmsmasters_sidebar_id', true);
		}
		
		
		if (isset($sidebar_id) && !is_active_sidebar($sidebar_id)) {
			if (!is_active_sidebar('sidebar_default')) {
				$cmsmasters_layout = 'fullwidth';
			}
		} else if ((is_home() || is_archive()) && !is_active_sidebar('sidebar_archive') && !is_active_sidebar('sidebar_default')) {
			$cmsmasters_layout = 'fullwidth';
		} else if (is_search() && !is_active_sidebar('sidebar_search') && !is_active_sidebar('sidebar_default')) {
			$cmsmasters_layout = 'fullwidth';
		}
	}
	
	
	if (
		is_singular() || 
		(CMSMASTERS_WOOCOMMERCE && is_shop())
	) {
		$cmsmasters_page_scheme = get_post_meta($cmsmasters_page_id, 'cmsmasters_page_scheme', true);
	} else {
		$cmsmasters_page_scheme = 'default';
	}
	
	
	if (!isset($cmsmasters_page_scheme) || $cmsmasters_page_scheme == '') {
		$cmsmasters_page_scheme = 'default';
	}
	
	
	$cmsmasters_layout = apply_filters('cmsmasters_theme_page_layout_filter', $cmsmasters_layout);
	
	$cmsmasters_page_scheme = apply_filters('cmsmasters_theme_page_scheme_filter', $cmsmasters_page_scheme);
	
	
	return array($cmsmasters_layout, $cmsmasters_page_scheme);
}



/* Return content */
function total_school_return_content($content) {
	return $content;
}



/* Register Moving 'style' Tags from Shortcodes to Content Start */
function total_school_global_shortcodes_styles_move($content) {
	preg_match_all("/(?<!['\"])<style.*?>([^`]*?)<\/style>/", $content, $new_content);
	
	$nostyle_content = preg_replace("/(?<!['\"])<style.*?>([^`]*?)<\/style>/", '', $content);
	
	
	$style_content = '<style type="text/css">';
	
	
	foreach ($new_content[1] as $new_content_part) {
		$style_content .= $new_content_part;
	}
	
	
	$style_content .= '</style>';
	
	
	$style_content = preg_replace('/<p>/', '', $style_content);
	$style_content = preg_replace('/<\/p>/', '', $style_content);
	
	
    $content = $style_content . $nostyle_content;
	
	
    return $content;
}

add_filter('the_content', 'total_school_global_shortcodes_styles_move', 11, 2);
add_filter('widget_text_content', 'total_school_global_shortcodes_styles_move', 11, 3);


function total_school_row_checker($data) {
	$out = total_school_rowcheck($data);
	
	return $out;
}

add_filter('the_content', 'total_school_row_checker', 10, 2);



/* Project Post Type Registration Rename */
function total_school_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'total-school'), 
		'singular_name' => 			esc_html__('Project', 'total-school'), 
		'menu_name' => 				esc_html__('Projects', 'total-school'), 
		'all_items' => 				esc_html__('All Projects', 'total-school'), 
		'add_new' => 				esc_html__('Add New', 'total-school'), 
		'add_new_item' => 			esc_html__('Add New Project', 'total-school'), 
		'edit_item' => 				esc_html__('Edit Project', 'total-school'), 
		'new_item' => 				esc_html__('New Project', 'total-school'), 
		'view_item' => 				esc_html__('View Project', 'total-school'), 
		'search_items' => 			esc_html__('Search Projects', 'total-school'), 
		'not_found' => 				esc_html__('No projects found', 'total-school'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'total-school') 
	);
}

// add_filter('cmsmasters_project_labels_filter', 'total_school_project_labels');


function total_school_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'total-school'), 
		'singular_name' => 			esc_html__('Project Category', 'total-school') 
	);
}

// add_filter('cmsmasters_pj_categs_labels_filter', 'total_school_pj_categs_labels');


function total_school_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'total-school'), 
		'singular_name' => 			esc_html__('Project Tag', 'total-school') 
	);
}

// add_filter('cmsmasters_pj_tags_labels_filter', 'total_school_pj_tags_labels');



/* Profile Post Type Registration Rename */
function total_school_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'total-school'), 
		'singular_name' => 			esc_html__('Profiles', 'total-school'), 
		'menu_name' => 				esc_html__('Profiles', 'total-school'), 
		'all_items' => 				esc_html__('All Profiles', 'total-school'), 
		'add_new' => 				esc_html__('Add New', 'total-school'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'total-school'), 
		'edit_item' => 				esc_html__('Edit Profile', 'total-school'), 
		'new_item' => 				esc_html__('New Profile', 'total-school'), 
		'view_item' => 				esc_html__('View Profile', 'total-school'), 
		'search_items' => 			esc_html__('Search Profiles', 'total-school'), 
		'not_found' => 				esc_html__('No Profiles found', 'total-school'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'total-school') 
	);
}

// add_filter('cmsmasters_profile_labels_filter', 'total_school_profile_labels');


function total_school_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'total-school'), 
		'singular_name' => 			esc_html__('Profile Category', 'total-school') 
	);
}

// add_filter('cmsmasters_pl_categs_labels_filter', 'total_school_pl_categs_labels');



/* Cmsmasters Ajax like callback */
function cmsmasters_ajax_like_callback() {
	$nonce = $_POST['nonce'];

	if( wp_verify_nonce($nonce, 'cmsmasters_ajax_like-nonce') ){
		$post_ID = intval( $_POST['id'] );
		
		$ip = getenv('REMOTE_ADDR');
		
		$ip_name = str_replace('.', '-', $ip);
		
		
		if ($post_ID != '') {
			$likes = (get_post_meta($post_ID, 'cmsmasters_likes', true) != '') ? get_post_meta($post_ID, 'cmsmasters_likes', true) : '0';
			
			
			$ipPost = new WP_Query(array( 
				'post_type' => 		'cmsmasters_like', 
				'post_status' => 	'draft', 
				'post_parent' => 	$post_ID, 
				'name' => 			$ip_name 
			));
			
			
			$ipCheck = $ipPost->posts;
			
			
			if (isset($_COOKIE['like-' . $post_ID]) || count($ipCheck) != 0) {
				echo esc_html($likes);
			} else {
				$plusLike = $likes + 1;
				
				
				update_post_meta($post_ID, 'cmsmasters_likes', $plusLike);
				
				
				setcookie('like-' . $post_ID, time(), time() + 31536000, '/');
				
				
				wp_insert_post(array( 
					'post_type' => 		'cmsmasters_like', 
					'post_status' => 	'draft', 
					'post_parent' => 	$post_ID, 
					'post_name' => 		$ip_name, 
					'post_title' => 	$ip 
				));
				
				
				echo esc_html($plusLike);
			}
		}
		
		wp_die();
	} else { 
		die('Stop!'); 
	}
}

add_action('wp_ajax_cmsmasters_ajax_like', 'cmsmasters_ajax_like_callback');

add_action('wp_ajax_nopriv_cmsmasters_ajax_like', 'cmsmasters_ajax_like_callback');



/* Cmsmasters Ajax Import Settings callback */
function cmsmasters_ajax_import_settings_callback() {
	$nonce = $_POST['nonce'];

	if( wp_verify_nonce($nonce, 'cmsmasters_ajax_import_settings-nonce') ){
		if (isset($_POST['settings'])) {
			$cmsmasters_php_ver = phpversion();
			
			
			if (version_compare($cmsmasters_php_ver, '5.4.0', '<')) {
				$settings = json_decode(pack("H*", $_POST['settings']), true);
			} else {
				$settings = json_decode(hex2bin($_POST['settings']), true);
			}
			
			
			foreach ($settings as $name => $value) {
				update_option($name, $value);
			}
			
			
			total_school_regenerate_styles();
		}
		
		wp_die();
	} else { 
		die('Stop!'); 
	}
}

add_action('wp_ajax_cmsmasters_ajax_import_settings', 'cmsmasters_ajax_import_settings_callback');

add_action('wp_ajax_nopriv_cmsmasters_ajax_import_settings', 'cmsmasters_ajax_import_settings_callback');



/* Cmsmasters Ajax Export Settings callback */
function cmsmasters_ajax_export_settings_callback() {
	$nonce = $_POST['nonce'];

	if( wp_verify_nonce($nonce, 'cmsmasters_ajax_export_settings-nonce') ){
		
		$cmsmasters_global_settings = array( 
			'cmsmasters_options_' . 'total-school' . '_general', 
			'cmsmasters_options_' . 'total-school' . '_bg', 
			'cmsmasters_options_' . 'total-school' . '_header', 
			'cmsmasters_options_' . 'total-school' . '_content', 
			'cmsmasters_options_' . 'total-school' . '_footer', 
			'cmsmasters_options_' . 'total-school' . '_font_content', 
			'cmsmasters_options_' . 'total-school' . '_font_link', 
			'cmsmasters_options_' . 'total-school' . '_font_nav', 
			'cmsmasters_options_' . 'total-school' . '_font_heading', 
			'cmsmasters_options_' . 'total-school' . '_font_other', 
			'cmsmasters_options_' . 'total-school' . '_element_sidebar', 
			'cmsmasters_options_' . 'total-school' . '_element_icon', 
			'cmsmasters_options_' . 'total-school' . '_element_lightbox', 
			'cmsmasters_options_' . 'total-school' . '_element_sitemap', 
			'cmsmasters_options_' . 'total-school' . '_element_error', 
			'cmsmasters_options_' . 'total-school' . '_element_code', 
			'cmsmasters_options_' . 'total-school' . '_element_recaptcha', 
			'cmsmasters_options_' . 'total-school' . '_single_post', 
			'cmsmasters_options_' . 'total-school' . '_single_project', 
			'cmsmasters_options_' . 'total-school' . '_single_profile'
		);

		$wp_global_settings = array( 
			'thumbnail_size_w', 
			'thumbnail_size_h', 
			'medium_size_w', 
			'medium_size_h', 
			'large_size_w', 
			'large_size_h', 
			'theme_mods_' . 'total-school', 
			'sidebars_widgets', 
			'widget_custom-advertisement', 
			'widget_akismet_widget', 
			'widget_archives', 
			'widget_calendar', 
			'widget_categories', 
			'widget_custom-contact-form', 
			'widget_custom-contact-info', 
			'widget_nav_menu', 
			'widget_custom-divider', 
			'widget_custom-video', 
			'widget_custom-facebook', 
			'widget_custom-flickr', 
			'widget_custom-html5-audio', 
			'widget_custom-html5-video', 
			'widget_custom-latest-projects', 
			'widget_layerslider_widget', 
			'widget_meta', 
			'widget_pages', 
			'widget_custom-popular-projects', 
			'widget_custom-posts-tabs', 
			'widget_custom-recent-comments', 
			'widget_custom-recent-posts', 
			'widget_rev-slider-widget', 
			'widget_rss', 
			'widget_search', 
			'widget_tag_cloud', 
			'widget_text', 
			'widget_custom-twitter', 
			'widget_icl_lang_sel_widget' 
		);


		$cmsmasters_global_colors = array();


		foreach (total_school_all_color_schemes_list() as $key => $value) {
			$cmsmasters_global_colors[] = 'cmsmasters_options_' . 'total-school' . '_color_' . $key;
		}


		$options = array_merge($cmsmasters_global_settings, $cmsmasters_global_colors, $wp_global_settings);


		$settings = array();


		foreach ($options as $option) {
			if (get_option($option)) {
				$settings[$option] = get_option($option);
			}
		}


		$result = bin2hex(json_encode($settings));


		echo total_school_return_content($result);
		
		
		wp_die();
	} else { 
		die('Stop!'); 
	}
}

add_action('wp_ajax_cmsmasters_ajax_export_settings', 'cmsmasters_ajax_export_settings_callback');

add_action('wp_ajax_nopriv_cmsmasters_ajax_export_settings', 'cmsmasters_ajax_export_settings_callback');
