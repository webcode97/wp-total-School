<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.0
 * 
 * Profiles Page Vertical Profile Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

$profile_hover_icon = ($profile_hover_icon != '') ? $profile_hover_icon : '';
?>

<!-- Start Vertical Profile -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_profile_vertical'); ?>>
	<div class="profile_outer">
	<?php
	if (has_post_thumbnail()) {
	
		echo '<div class="cmsmasters_img_wrap">';
			total_school_thumb_rollover(get_the_ID(), 'cmsmasters-square-thumb', true, true, false, false, false, false, false, false, true, false, true, $profile_hover_icon);
		echo '</div>';
	}
	
	
	echo '<div class="profile_inner">';
		
		total_school_profile_heading(get_the_ID(), 'h3', $cmsmasters_profile_subtitle, 'h6');
		
		total_school_profile_exc_cont();
		
		total_school_profile_social_icons($cmsmasters_profile_social);
		
	echo '</div>';
	?>
	</div>
</article>
<!-- Finish Vertical Profile -->

