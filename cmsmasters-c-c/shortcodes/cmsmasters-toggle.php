<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.7
 * 
 * Content Composer Single Progress Bar Shortcode
 * Created by CMSMasters
 * 
 */

/* 
	1. Create a separate file for each of the shortcodes that need to be edited. 
	2. Contents of this file will be used to substitute the corresponding code in the shortcodes.php file of the Composer Plugin.
	3. echo total_school_return_content($out) variable must contain all the shortcode front-end content
*/


extract(shortcode_atts($new_atts, $atts)); // Extract attrs (start each shortcode file you create with this)


// Shortcode body


$this->toggles_atts['toggle_counter']++;


$toggle_tags = explode(',', $tags);


foreach ($toggle_tags as $toggle_tag) {
	if ($toggle_tag != '') {
		$this->toggles_atts['sort_toggles'][generateSlug(trim($toggle_tag), 30)] = trim($toggle_tag);
	}
}


$out = '<div class="cmsmasters_toggle_wrap' . 
(($this->toggles_atts['toggle_active'] == $this->toggles_atts['toggle_counter']) ? ' current_toggle' : '') . 
(($classes != '') ? ' ' . $classes : '') . 
'" data-tags="all ';


$tgl_tag_str = '';


foreach ($toggle_tags as $tgl_tag) {
	$tgl_tag_str .= generateSlug(trim($tgl_tag), 30) . ' ';
}


$out .= substr($tgl_tag_str, 0, strlen($tgl_tag_str) - 1);


$out .= '">' . "\n" . 
	'<div class="cmsmasters_toggle_title">' . "\n" . 
		'<span class="cmsmasters_toggle_plus cmsmasters-icon-angle-down">' . "\n" . 
		'</span>' . "\n" . 
		'<a href="#">' . $title . '</a>' . "\n" . 
	'</div>' . "\n" . 
	'<div class="cmsmasters_toggle">' . "\n" . 
		cmsmasters_divpdel('<div class="cmsmasters_toggle_inner">' . "\n" . 
			do_shortcode(wpautop($content)) . 
		'</div>' . "\n") . 
	'</div>' . "\n" . 
'</div>';


echo total_school_return_content($out);

