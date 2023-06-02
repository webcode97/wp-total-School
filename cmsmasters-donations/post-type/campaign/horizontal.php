<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.0
 * 
 * Campaigns Page Horizontal Campaign Format Template
 * Created by CMSMasters
 * 
 */

$cmsmasters_metadata = explode(',', $cmsmasters_campaigns_metadata);

$title = (in_array('title', $cmsmasters_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$donated_percent = (in_array('donated_percent', $cmsmasters_metadata) || is_home() || is_archive() || is_search()) ? true : false;

global $post;

$camp = $post;


if (is_home() || is_archive() || is_search()) {
	$cmsmasters_thumb_size = 'post-thumbnail';
} else {
	$cmsmasters_thumb_size = 'cmsmasters-project-thumb';
}
?>

<!-- Start Horizontal Campaign -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	total_school_thumb($camp->ID, $cmsmasters_thumb_size, true, false, true, false, true, true, false, false, 'cmsmasters_theme_icon_money');
	
	if ($title || $excerpt || $donated_percent) {
		echo '<div class="cmsmasters_campaign_inner">';
		
			if ($title) {
				cmsmasters_campaign_heading($camp->ID, 'h4', true);
			}
			
			
			if ($excerpt) {
				if ($camp->post_excerpt != '') {
					$cmsmasters_content = $camp->post_excerpt;
				} else {
					$cmsmasters_content = $camp->post_content;
				}
				
				
				cmsmasters_campaign_exc_cont($cmsmasters_content);
			}
			
			
			if ($donated_percent) {
				cmsmasters_campaign_donated($camp->ID, 'page', 'horizontal');
			}

		echo '</div>';
	}
	?>
</article>
<!-- Finish Horizontal Campaign -->

