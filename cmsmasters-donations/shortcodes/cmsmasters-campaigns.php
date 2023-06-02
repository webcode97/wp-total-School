<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.7
 * 
 * Content Composer Campaigns Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();


$this->campaigns_atts = array(
	'cmsmasters_campaigns_metadata' => 	$campaigns_metadata
);


$args = array( 
	'post_type' => 				'campaign', 
	'order' => 					$order, 
	'posts_per_page' => 		$count, 
	'ignore_sticky_posts' => 	true 
);


if ($orderby == 'campaigns' && $campaigns_ids != '') {
	$campaigns_ids_array = explode(',', $campaigns_ids);
	
	$args['post__in'] = $campaigns_ids_array;
	
	$args['orderby'] = 'menu_order';
} else {
	$args['orderby'] = $orderby;
	
	if ($campaigns_categories != '') {
		$cat_array = explode(',', $campaigns_categories);
		
		$args['tax_query'] = array(
			array( 
				'taxonomy' => 	'cp-categs', 
				'field' => 		'slug', 
				'terms' => 		$cat_array 
			)
		);
	}
}


$query = new WP_Query($args);


$pause = ($pause == '' ? 0 : $pause);


$out = "";


if ($query->have_posts()) : 
	
	$out .= "<div class=\"cmsmasters_campaigns" . 
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
				
					$out .= cmsmasters_composer_ob_load_template('cmsmasters-donations/post-type/campaign/horizontal.php', $this->campaigns_atts);
					
				$out .= '</div>';
				
			endwhile;
			
		$out .= '</div>' . 
	'</div>';

endif;


wp_reset_query();


echo total_school_return_content($out);

