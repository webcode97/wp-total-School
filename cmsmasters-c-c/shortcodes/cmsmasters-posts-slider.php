<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.7
 * 
 * Content Composer Posts Slider Shortcode
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


$this->posts_slider_atts = array(
	'cmsmasters_post_metadata' => 		$blog_metadata, 
	'cmsmasters_project_metadata' => 	$portfolio_metadata 
);


if (!isset($post_type) || $post_type == '') {
	$post_type = 'post';
}


$args = array( 
	'post_type' => 				$post_type,
	'ignore_sticky_posts' => 	1, 
	'orderby' => 				$orderby, 
	'order' => 					$order, 
	'posts_per_page' => 		$count 
);


if ($post_type == 'post' && $blog_categories != '') {
	$args['category_name'] = $blog_categories;
} elseif ($post_type == 'project' && $portfolio_categories != '') {
	$cat_array = explode(",", $portfolio_categories);
	
	$args['tax_query'] = array(
		array( 
			'taxonomy' => 	'pj-categs', 
			'field' => 		'slug', 
			'terms' => 		$cat_array 
		)
	);
}


$query = new WP_Query($args);


$pause = ($pause == '' ? 0 : $pause);


$out = "";


if ($query->have_posts()) : 
	
	$out .= "<div class=\"cmsmasters_posts_slider " . 
		$post_type . 
		(($classes != '') ? ' ' . $classes : '') . 
	"\" " . 
		(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
		(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	">
		<script type=\"text/javascript\">
			jQuery(document).ready(function () { 
				var container = jQuery('.cmsmasters_slider_{$unique_id}');
					containerWidth = container.width(), 
					firstPost = container.find('article'), 
					postMinWidth = Number(firstPost.css('minWidth').replace('px', '')), 
					postThreeColumns = (postMinWidth * 4) - 1;
					postTwoColumns = (postMinWidth * 3) - 1;
					postOneColumns = (postMinWidth * 2) - 1; 
				
				
				jQuery('.cmsmasters_slider_{$unique_id}').owlCarousel( {
					items : {$columns}, 
					itemsDesktop : false,
					itemsDesktopSmall : [postThreeColumns," . (($columns > 3) ? '3' : $columns) . "], 
					itemsTablet : [postTwoColumns," . (($columns > 2) ? '2' : $columns) . "], 
					itemsMobile : [postOneColumns,1], 
					transitionStyle : false, 
					rewindNav : true, 
					slideSpeed : 200, 
					paginationSpeed : 800, 
					rewindSpeed : 1000, " . 
					(($pause == '0') ? 'autoPlay : false, ' : 'autoPlay : ' . ($pause * 1000) . ', ') . 
					"stopOnHover : true, 
					autoHeight : true, 
					addClassActive : true, 
					responsiveBaseWidth : '.cmsmasters_slider_{$unique_id}', 
					pagination : true, 
					navigation : false, 
					navigationText : [ " . 
						'"<span class=\"cmsmasters_prev_arrow\"><span></span></span>", ' . 
						'"<span class=\"cmsmasters_next_arrow\"><span></span></span>" ' . 
					"] 
				} );
			} );
		</script>
		<div id=\"cmsmasters_owl_carousel_{$unique_id}\" class=\"" . 
			'cmsmasters_owl_slider ' . 
			'cmsmasters_slider_' . $unique_id . '">';
			
			
			while ($query->have_posts()) : $query->the_post();
				
				$out .= '<div>';
					
					if ($post_type == 'post') {
						if (get_post_format() != '') {
							$out .= cmsmasters_composer_ob_load_template('framework/post-type/posts-slider/blog/' . get_post_format() . '.php', $this->posts_slider_atts);
						} else {
							$out .= cmsmasters_composer_ob_load_template('framework/post-type/posts-slider/blog/standard.php', $this->posts_slider_atts);
						}
					} elseif ($post_type == 'project') {
						if (get_post_format() != '') {
							$out .= cmsmasters_composer_ob_load_template('framework/post-type/posts-slider/portfolio/' . get_post_format() . '.php', $this->posts_slider_atts);
						} else {
							$out .= cmsmasters_composer_ob_load_template('framework/post-type/posts-slider/portfolio/standard.php', $this->posts_slider_atts);
						}
					}
					
				$out .= '</div>';
				
			endwhile;
			
			
		$out .= '</div>' . 
	'</div>';

endif;


wp_reset_postdata();


echo total_school_return_content($out);

