<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.7
 * 
 * Content Composer Profiles Shortcode
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


$this->profiles_atts = array(
	'profile_columns' => $columns, 
	'profile_hover_icon' => $hover_icon
);


$args = array( 
	'post_type' => 				'profile', 
	'orderby' => 				$orderby, 
	'order' => 					$order, 
	'posts_per_page' => 		$count, 
	'ignore_sticky_posts' => 	true 
);


if ($categories != '') {
	$cat_array = explode(",", $categories);
	
	$args['tax_query'] = array( 
		array( 
			'taxonomy' => 	'pl-categs', 
			'field' => 		'slug', 
			'terms' => 		$cat_array 
		)
	);
}


$query = new WP_Query($args);


$out = '';


if ($query->have_posts()) :
	
	$out .= '<div id="' . $unique_id . '" class="cmsmasters_profile ' . $layout . 
		(($classes != '') ? ' ' . $classes : '') . 
		'"' . 
		(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
		(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n";
	
	
	while ($query->have_posts()) : $query->the_post();
		
		if ($layout == 'vertical') {
			$out .= cmsmasters_composer_ob_load_template('framework/post-type/profile/page/vertical.php', $this->profiles_atts);
		} else {
			$out .= cmsmasters_composer_ob_load_template('framework/post-type/profile/page/horizontal.php', $this->profiles_atts);
		}
		
	endwhile;
	
	
	$out .= '</div>' . "\n";
	
endif;


wp_reset_query();


echo total_school_return_content($out);

