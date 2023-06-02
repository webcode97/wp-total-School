<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.0
 * 
 * Instagram Feed Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function total_school_instagram_feed_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('cmsmasters-c-c-instagram-feed-extend', get_template_directory_uri() . '/instagram-feed/cmsmasters-framework/cmsmasters-c-c/js/cmsmasters-c-c-plugin-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('cmsmasters-c-c-instagram-feed-extend', 'cmsmasters_instagram_feed_shortcodes', array( 
			'instagram_feed_title' =>        		esc_attr__('Instagram Feed', 'total-school'), 
			'id_instagram_feed_title' =>      		esc_attr__('User Id', 'total-school'), 
			'id_instagram_feed_descr' =>       		esc_attr__('There may be several ids', 'total-school') 
		));
	}
}

add_action('admin_enqueue_scripts', 'total_school_instagram_feed_register_c_c_scripts');

