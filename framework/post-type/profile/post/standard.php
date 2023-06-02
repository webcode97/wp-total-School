<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Profile Standard Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = total_school_get_global_options();


$cmsmasters_profile_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_profile_sharing_box', true);


$cmsmasters_profile_title = get_post_meta(get_the_ID(), 'cmsmasters_profile_title', true);

$cmsmasters_profile_featured_image = get_post_meta(get_the_ID(), 'cmsmasters_profile_featured_image', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

$cmsmasters_profile_features = get_post_meta(get_the_ID(), 'cmsmasters_profile_features', true);

$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);


$cmsmasters_profile_details_title = get_post_meta(get_the_ID(), 'cmsmasters_profile_details_title', true);


$cmsmasters_profile_features_one_title = get_post_meta(get_the_ID(), 'cmsmasters_profile_features_one_title', true);
$cmsmasters_profile_features_one = get_post_meta(get_the_ID(), 'cmsmasters_profile_features_one', true);

$cmsmasters_profile_features_two_title = get_post_meta(get_the_ID(), 'cmsmasters_profile_features_two_title', true);
$cmsmasters_profile_features_two = get_post_meta(get_the_ID(), 'cmsmasters_profile_features_two', true);

$cmsmasters_profile_features_three_title = get_post_meta(get_the_ID(), 'cmsmasters_profile_features_three_title', true);
$cmsmasters_profile_features_three = get_post_meta(get_the_ID(), 'cmsmasters_profile_features_three', true);


$profile_details = '';

if (
	$cmsmasters_option['total-school' . '_profile_post_cat'] || 
	$cmsmasters_option['total-school' . '_profile_post_comment'] || 
	(
		!empty($cmsmasters_profile_features[0][0]) && 
		!empty($cmsmasters_profile_features[0][1])
	) || (
		!empty($cmsmasters_profile_features[1][0]) && 
		!empty($cmsmasters_profile_features[1][1])
	)
) {
	$profile_details = 'true';
}


$profile_sidebar = '';

if (
	$profile_details == 'true' || 
	$cmsmasters_profile_social != '' || 
	(
		!empty($cmsmasters_profile_features_one[0][0]) && 
		!empty($cmsmasters_profile_features_one[0][1])
	) || (
		!empty($cmsmasters_profile_features_one[1][0]) && 
		!empty($cmsmasters_profile_features_one[1][1])
	) || (
		!empty($cmsmasters_profile_features_two[0][0]) && 
		!empty($cmsmasters_profile_features_two[0][1])
	) || (
		!empty($cmsmasters_profile_features_two[1][0]) && 
		!empty($cmsmasters_profile_features_two[1][1])
	) || (
		!empty($cmsmasters_profile_features_three[0][0]) && 
		!empty($cmsmasters_profile_features_three[0][1])
	) || (
		!empty($cmsmasters_profile_features_three[1][0]) && 
		!empty($cmsmasters_profile_features_three[1][1])
	)
) {
	$profile_sidebar = 'true';
}

?>

<!-- Start Standard Profile -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_profile'); ?>>
	<?php	
	
	echo '<div class="profile_content' . (($profile_sidebar == 'true') ? ' with_sidebar' : '') . '">';
		
		if (
			get_the_content() != '' || 
			$cmsmasters_profile_title == 'true' || 
			$cmsmasters_profile_featured_image == 'true' ||
			$cmsmasters_profile_sharing_box == 'true'
		) {
			echo '<div class="cmsmasters_profile_content entry-content">' . "\n";
				
				if (
					has_post_thumbnail() && 
					$cmsmasters_profile_featured_image == 'true'
				) {
					total_school_thumb(get_the_ID(), 'cmsmasters-full-thumb', false, 'img_' . get_the_ID(), true, true, false, true, false);
				}
				
				if ($cmsmasters_profile_title == 'true') {
					echo '<header class="cmsmasters_profile_header entry-header">';
						total_school_profile_title_nolink(get_the_ID(), 'h2', $cmsmasters_profile_subtitle, 'h4');
					echo '</header>';
				}
				
				if ($cmsmasters_profile_featured_image == 'true') {
					
				}
				
				if (get_the_content() != '') {
					the_content();
					
					
					wp_link_pages(array( 
						'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'total-school') . ':</strong>', 
						'after' => '</div>', 
						'link_before' => '<span>', 
						'link_after' => '</span>' 
					));
				}
				
				if ($cmsmasters_profile_sharing_box == 'true') {
					total_school_sharing_box(esc_html__('Like this profile?', 'total-school'), 'h4');
				}
				
				
				comments_template(); 
				
			echo '</div>';
		}
		
	echo '</div>';
	
	
	if ($profile_sidebar == 'true') {
		echo '<div class="profile_sidebar">';
		
			if ($profile_details == 'true') {
				echo '<div class="profile_details entry-meta">' . 
					'<h4 class="profile_details_title">' . esc_html($cmsmasters_profile_details_title) . '</h4>';
					
					total_school_get_profile_likes('post');
					
					total_school_get_profile_comments('post');
					
					total_school_get_profile_features('details', $cmsmasters_profile_features, false, 'h3', true);
					
					total_school_get_profile_category(get_the_ID(), 'pl-categs', 'post');
					
				echo '</div>';
			}
			
			
			total_school_get_profile_features('features', $cmsmasters_profile_features_one, $cmsmasters_profile_features_one_title, 'h4', true);
			
			total_school_get_profile_features('features', $cmsmasters_profile_features_two, $cmsmasters_profile_features_two_title, 'h4', true);
			
			total_school_get_profile_features('features', $cmsmasters_profile_features_three, $cmsmasters_profile_features_three_title, 'h4', true);
			
			
			total_school_profile_social_icons($cmsmasters_profile_social, esc_html__('Socials', 'total-school'), 'h4');
		
		echo '</div>';
	}
	?>
</article>
<!-- Finish Standard Profile -->

