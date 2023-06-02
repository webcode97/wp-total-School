<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.7
 * 
 * Content Composer Counters Shortcode
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


$this->counters_atts = array(
	'style_counters' => '', 
	'counters_count' => '' 
);


if ($count == 5) {
	$this->counters_atts['counters_count'] = ' one_fifth';
} elseif ($count == 4) {
	$this->counters_atts['counters_count'] = ' one_fourth';
} elseif ($count == 3) {
	$this->counters_atts['counters_count'] = ' one_third';
} elseif ($count == 2) {
	$this->counters_atts['counters_count'] = ' one_half';
} else {
	$this->counters_atts['counters_count'] = ' one_first';
}


$this->counters_atts['style_counters'] = "\n" . '#cmsmasters_counters_' . $unique_id . ' .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner, ' . "\n" . 
'#cmsmasters_counters_' . $unique_id . ' .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner, ' . 
'#cmsmasters_counters_' . $unique_id . ' .cmsmasters_counter.counter_has_image .cmsmasters_counter_inner, ' . 
'#cmsmasters_counters_' . $unique_id . '.counters_type_horizontal .cmsmasters_counter.counter_has_icon .cmsmasters_counter_subtitle { ' . 
	"\n\t" . 'padding-' . (($type == 'horizontal') ? ((is_rtl()) ? 'right' : 'left') : 'top') . ':' . ((int) $icon_space + 10) . 'px; ' . 
"\n" . '} ' . "\n\n" . 
'#cmsmasters_counters_' . $unique_id . '.counters_type_vertical .cmsmasters_counter .cmsmasters_counter_inner:before { ' . 
	"\n\t" . 'margin-' . ((is_rtl()) ? 'right' : 'left') . ':-' . ((int) $icon_space / 2) . 'px; ' . 
"\n" . '} ' . "\n\n" . 
'#cmsmasters_counters_' . $unique_id . '.counters_type_horizontal .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap { ' . 
	"\n\t" . 'line-height:' . $icon_space . 'px; ' . 
"\n" . '} ' . "\n\n" . 
'#cmsmasters_counters_' . $unique_id . ' .cmsmasters_counter .cmsmasters_counter_inner:before { ' . 
	"\n\t" . 'font-size:' . $icon_size . 'px; ' . 
	"\n\t" . 'line-height:' . ((int) $icon_space - ((int) $icon_border_width * 2)) . 'px; ' . 
	"\n\t" . 'width:' . $icon_space . 'px; ' . 
	"\n\t" . 'height:' . $icon_space . 'px; ' . 
	"\n\t" . 'border-width:' . $icon_border_width . 'px; ' . 
	(((int) $icon_border_radius > 0) ? "\n\t" . '-webkit-border-radius:' . $icon_border_radius . '; ' : '') . 
	(((int) $icon_border_radius > 0) ? "\n\t" . 'border-radius:' . $icon_border_radius . '; ' : '') . 
"\n" . '} ' . "\n\n";


$counters = do_shortcode($content);


echo '<style type="text/css"> ' . $this->counters_atts['style_counters'] . '</style> ' . "\n" . 
'<div id="cmsmasters_counters_' . $unique_id . '" class="cmsmasters_counters counters_type_' . $type . 
(($classes != '') ? ' ' . $classes : '') . 
'"' . 
(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
'>' . 
	$counters . 
'</div>';

