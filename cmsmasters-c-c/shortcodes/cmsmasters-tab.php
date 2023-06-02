<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.7
 * 
 * Content Composer Single Tab Shortcode
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


$unique_id = uniqid();


$this->tabs_atts['tab_counter']++;

if ($custom_colors == 'true') { 
	$this->tabs_atts['style_tab'] .= "\n" . 
	'.cmsmasters_tabs #cmsmasters_tabs_list_item_' . $unique_id . ' { ' . 
		"\n\t" . cmsmasters_color_css('background-color', $bg_color) . 
		"\n\t" . cmsmasters_color_css('border-color', $bg_color) . 
	"\n" . '} ' . "\n" . 
	'@media only screen and (min-width: 768px) {' . 
		'body:not(.rtl) .cmsmasters_tabs #cmsmasters_tabs_list_item_' . $unique_id . '.current_tab + .cmsmasters_tabs_list_item { ' . 
			"\n\t" . cmsmasters_color_css('border-left-color', $bg_color) . 
		"\n" . '} ' . "\n" . 
		
		'body.rtl .cmsmasters_tabs #cmsmasters_tabs_list_item_' . $unique_id . '.current_tab + .cmsmasters_tabs_list_item { ' . 
			"\n\t" . cmsmasters_color_css('border-right-color', $bg_color) . 
		"\n" . '} ' . "\n" . 
	'}' . 
	'.cmsmasters_tabs #cmsmasters_tabs_list_item_' . $unique_id . ' a,' . 
	'.cmsmasters_tabs #cmsmasters_tabs_list_item_' . $unique_id . ' a *, ' . 
	'.cmsmasters_tabs #cmsmasters_tabs_list_item_' . $unique_id . '.current_tab a * { ' . 
		"\n\t" . cmsmasters_color_css('color', '#ffffff') . 
	"\n" . '} ' . "\n";
}


$this->tabs_atts['out_tabs'] .= '<li id="cmsmasters_tabs_list_item_' . $unique_id . '" class="cmsmasters_tabs_list_item' . 
(($this->tabs_atts['tab_active'] == $this->tabs_atts['tab_counter']) ? ' current_tab' : '') . 
'">' . "\n" . 
	'<a href="#"' . 
	(($icon != '') ? ' class="' . $icon . '"' : '') . 
	'>' . "\n" . 
		'<span>' . $title . '</span>' . "\n" . 
	'</a>' . "\n" . 
'</li>';


$out = '<div id="cmsmasters_tab_' . $unique_id . '" class="cmsmasters_tab' . 
(($this->tabs_atts['tab_active'] == $this->tabs_atts['tab_counter']) ? ' active_tab' : '') . 
(($classes != '') ? ' ' . $classes : '') . 
'">' . "\n" . 
	cmsmasters_divpdel('<div class="cmsmasters_tab_inner">' . "\n" . 
		do_shortcode(wpautop($content)) . 
	'</div>' . "\n") . 
'</div>';


echo total_school_return_content($out);

