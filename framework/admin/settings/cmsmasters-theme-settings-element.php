<?php 
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.1.5
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function total_school_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'total-school');
	$tabs['icon'] = esc_attr__('Social Icons', 'total-school');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'total-school');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'total-school');
	$tabs['error'] = esc_attr__('404', 'total-school');
	$tabs['code'] = esc_attr__('Custom Codes', 'total-school');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'total-school');
	}
	
	return $tabs;
}


function total_school_options_element_sections() {
	$tab = total_school_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'total-school');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'total-school');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'total-school');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'total-school');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'total-school');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'total-school');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'total-school');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;	
} 


function total_school_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = total_school_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'total-school' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'total-school'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'total-school' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'total-school'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'total-school') . '|true||', 
				'cmsmasters-icon-twitter-1|#|' . esc_html__('Twitter', 'total-school') . '|true||', 
				'cmsmasters-icon-gplus-1|#|' . esc_html__('Google+', 'total-school') . '|true||', 
				'cmsmasters-icon-tumblr-1|#|' . esc_html__('Tumblr', 'total-school') . '|true||', 
				'cmsmasters-icon-skype-1|#|' . esc_html__('Skype', 'total-school') . '|true||' 
			) 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'total-school'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				esc_html__('Dark', 'total-school') . '|dark', 
				esc_html__('Light', 'total-school') . '|light', 
				esc_html__('Mac', 'total-school') . '|mac', 
				esc_html__('Metro Black', 'total-school') . '|metro-black', 
				esc_html__('Metro White', 'total-school') . '|metro-white', 
				esc_html__('Parade', 'total-school') . '|parade', 
				esc_html__('Smooth', 'total-school') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'total-school'), 
			'desc' => esc_html__('Sets path for switching windows', 'total-school'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				esc_html__('Vertical', 'total-school') . '|vertical', 
				esc_html__('Horizontal', 'total-school') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'total-school'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'total-school'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'total-school'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'total-school'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'total-school'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'total-school'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'total-school'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'total-school'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'total-school'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'total-school'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'total-school'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'total-school'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				esc_html__('Center', 'total-school') . '|center', 
				esc_html__('Fit', 'total-school') . '|fit', 
				esc_html__('Fill', 'total-school') . '|fill', 
				esc_html__('Stretch', 'total-school') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'total-school'), 
			'desc' => esc_html__('Sets buttons be available or not', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'total-school'), 
			'desc' => esc_html__('Enable the arrow buttons', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'total-school'), 
			'desc' => esc_html__('Sets the fullscreen button', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'total-school'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'total-school'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'total-school'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'total-school'), 
			'desc' => esc_html__('Sets the swipe navigation', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'total-school' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'total-school'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'total-school' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'total-school' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'total-school' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'total-school' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'total-school' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'total-school' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'total-school' . '_error_color', 
			'title' => esc_html__('Text Color', 'total-school'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#292929' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'total-school' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'total-school'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#fbfbfb' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'total-school' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'total-school' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'total-school'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'total-school'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'total-school' . '_error_bg_rep', 
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
			'section' => 'error_section', 
			'id' => 'total-school' . '_error_bg_pos', 
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
			'section' => 'error_section', 
			'id' => 'total-school' . '_error_bg_att', 
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
			'section' => 'error_section', 
			'id' => 'total-school' . '_error_bg_size', 
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
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'total-school' . '_error_search', 
			'title' => esc_html__('Search Line', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'total-school' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'total-school' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'total-school'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'total-school' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'total-school'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'total-school' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'total-school'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
 			'section' => 'code_section', 
			'id' => 'total-school' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'total-school'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'total-school' . '_twitter_access_token', 
			'title' => esc_html__('Twitter Access Token', 'total-school'), 
			'desc' => sprintf(
				/* translators: Twitter access token. %s: Link to twitter access token generator */
				esc_html__( 'Generate %s and paste Access Token to this field.', 'total-school' ),
				'<a href="' . esc_url( 'https://api.cmsmasters.net/wp-json/cmsmasters-api/v1/twitter-request-token' ) . '" target="_blank">' .
					esc_html__( 'twitter access token', 'total-school' ) .
				'</a>'
			), 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'total-school' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'total-school'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'total-school' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'total-school'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

