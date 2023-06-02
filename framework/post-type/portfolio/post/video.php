<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Video Project Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = total_school_get_global_options();


$project_tags = get_the_terms(get_the_ID(), 'pj-tags');


$cmsmasters_project_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_project_sharing_box', true);

$cmsmasters_project_author_box = get_post_meta(get_the_ID(), 'cmsmasters_project_author_box', true);

$cmsmasters_project_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_project_more_posts', true);


$cmsmasters_project_title = get_post_meta(get_the_ID(), 'cmsmasters_project_title', true);

$cmsmasters_project_features = get_post_meta(get_the_ID(), 'cmsmasters_project_features', true);


$cmsmasters_project_link_text = get_post_meta(get_the_ID(), 'cmsmasters_project_link_text', true);
$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);
$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$cmsmasters_project_video_type = get_post_meta(get_the_ID(), 'cmsmasters_project_video_type', true);
$cmsmasters_project_video_link = get_post_meta(get_the_ID(), 'cmsmasters_project_video_link', true);
$cmsmasters_project_video_links = get_post_meta(get_the_ID(), 'cmsmasters_project_video_links', true);


$cmsmasters_project_details_title = get_post_meta(get_the_ID(), 'cmsmasters_project_details_title', true);


$cmsmasters_project_features_one_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one_title', true);
$cmsmasters_project_features_one = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one', true);

$cmsmasters_project_features_two_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two_title', true);
$cmsmasters_project_features_two = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two', true);

$cmsmasters_project_features_three_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three_title', true);
$cmsmasters_project_features_three = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three', true);


$project_details = '';

if (
	$cmsmasters_option['total-school' . '_portfolio_project_like'] || 
	$cmsmasters_option['total-school' . '_portfolio_project_date'] || 
	$cmsmasters_option['total-school' . '_portfolio_project_cat'] || 
	$cmsmasters_option['total-school' . '_portfolio_project_comment'] || 
	$cmsmasters_option['total-school' . '_portfolio_project_author'] || 
	$cmsmasters_option['total-school' . '_portfolio_project_tag'] || 
	$cmsmasters_option['total-school' . '_portfolio_project_link'] || 
	(
		!empty($cmsmasters_project_features[0][0]) && 
		!empty($cmsmasters_project_features[0][1])
	) || (
		!empty($cmsmasters_project_features[1][0]) && 
		!empty($cmsmasters_project_features[1][1])
	)
) {
	$project_details = 'true';
}


$project_sidebar = '';


if (
	$project_details == 'true' || 
	(
		!empty($cmsmasters_project_features_one[0][0]) && 
		!empty($cmsmasters_project_features_one[0][1])
	) || (
		!empty($cmsmasters_project_features_one[1][0]) && 
		!empty($cmsmasters_project_features_one[1][1])
	) || (
		!empty($cmsmasters_project_features_two[0][0]) && 
		!empty($cmsmasters_project_features_two[0][1])
	) || (
		!empty($cmsmasters_project_features_two[1][0]) && 
		!empty($cmsmasters_project_features_two[1][1])
	) || (
		!empty($cmsmasters_project_features_three[0][0]) && 
		!empty($cmsmasters_project_features_three[0][1])
	) || (
		!empty($cmsmasters_project_features_three[1][0]) && 
		!empty($cmsmasters_project_features_three[1][1])
	)
) {
	$project_sidebar = 'true';
}

?>

<!-- Start Video Project -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_project'); ?>>
	<?php	
	
	echo '<div class="project_content' . (($project_sidebar == 'true') ? ' with_sidebar' : '') . '">';
		
		if (!post_password_required()) {
			if ($cmsmasters_project_video_type == 'selfhosted' && !empty($cmsmasters_project_video_links) && sizeof($cmsmasters_project_video_links) > 0) {
				$video_size = cmsmasters_image_thumbnail_list();
				
				
				$attrs = array( 
					'preload'  => 'none', 
					'height'   => $video_size['cmsmasters-project-full-thumb']['height'], 
					'width'    => $video_size['cmsmasters-project-full-thumb']['width'] 
				);
				
				
				if (has_post_thumbnail()) {
					$video_poster = wp_get_attachment_image_src((int) get_post_thumbnail_id(get_the_ID()), 'cmsmasters-project-full-thumb');
					
					
					$attrs['poster'] = $video_poster[0];
				}
				
				
				foreach ($cmsmasters_project_video_links as $cmsmasters_project_video_link_url) {
					$attrs[substr(strrchr($cmsmasters_project_video_link_url, '.'), 1)] = $cmsmasters_project_video_link_url;
				}
				
				
				echo '<div class="cmsmasters_video_wrap">' . 
					wp_video_shortcode($attrs) . 
				'</div>';
			} elseif ($cmsmasters_project_video_type == 'embedded' && $cmsmasters_project_video_link != '') {
				global $wp_embed;
				
				
				$video_size = cmsmasters_image_thumbnail_list();
				
				
				echo '<div class="cmsmasters_video_wrap">' . 
					do_shortcode($wp_embed->run_shortcode('[embed width="' . $video_size['cmsmasters-project-full-thumb']['width'] . '" height="' . $video_size['cmsmasters-project-full-thumb']['height'] . '"]' . $cmsmasters_project_video_link . '[/embed]')) . 
				'</div>';
			} elseif (has_post_thumbnail()) {
				total_school_thumb(get_the_ID(), 'cmsmasters-full-masonry-thumb', false, 'img_' . get_the_ID(), true, true, false, true, false);
			}
		}
		
		
		if (
			get_the_content() != '' || 
			$cmsmasters_project_title == 'true' || 
			$cmsmasters_project_sharing_box == 'true' || 
			$cmsmasters_project_author_box == 'true' || 
			$project_tags || 
			$cmsmasters_project_more_posts != 'hide'
		) {
			echo '<div class="cmsmasters_project_content entry-content">' . "\n";
			
				if ($cmsmasters_project_title == 'true') {
					echo '<header class="cmsmasters_project_header entry-header">';
						total_school_project_title_nolink(get_the_ID(), 'h2');
					echo '</header>';
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
				
				if ($cmsmasters_project_sharing_box == 'true') {
					total_school_sharing_box(esc_html__('Like this project?', 'total-school'), 'h4');
				}
				
				
				if ($cmsmasters_project_author_box == 'true') {
					total_school_author_box(esc_html__('About author', 'total-school'), 'h4', 'h3');
				}
				
				
				if ($project_tags) {
					$tgsarray = array();
					
					
					foreach ($project_tags as $tagone) {
						$tgsarray[] = $tagone->term_id;
					}  
				} else {
					$tgsarray = '';
				}
				
				
				if ($cmsmasters_project_more_posts != 'hide') {
					total_school_related( 
						'h4', 
						$cmsmasters_project_more_posts, 
						$tgsarray, 
						$cmsmasters_option['total-school' . '_portfolio_more_projects_count'], 
						$cmsmasters_option['total-school' . '_portfolio_more_projects_pause'], 
						'project', 
						'pj-tags' 
					);
				}
				
				
				comments_template(); 
				
			echo '</div>';
		}
		
	echo '</div>';
	
	
	if ($project_sidebar == 'true') {
		echo '<div class="project_sidebar">';
			
			if ($project_details == 'true') {
				echo '<div class="project_details entry-meta">' . 
					'<h4 class="project_details_title">' . esc_html($cmsmasters_project_details_title) . '</h4>';
					
					total_school_get_project_likes('post');
					
					total_school_get_project_comments('post');
					
					total_school_get_project_author('post');
					
					total_school_get_project_date('post');
					
					total_school_get_project_category(get_the_ID(), 'pj-categs', 'post');
					
					total_school_get_project_tags(get_the_ID(), 'pj-tags');
					
					total_school_get_project_features('details', $cmsmasters_project_features, false, 'h3', true);
					
					total_school_project_link($cmsmasters_project_link_text, $cmsmasters_project_link_url, $cmsmasters_project_link_target);
					
				echo '</div>';
			}
			
			
			total_school_get_project_features('features', $cmsmasters_project_features_one, $cmsmasters_project_features_one_title, 'h4', true);
			
			total_school_get_project_features('features', $cmsmasters_project_features_two, $cmsmasters_project_features_two_title, 'h4', true);
			
			total_school_get_project_features('features', $cmsmasters_project_features_three, $cmsmasters_project_features_three_title, 'h4', true);
			
		echo '</div>';
	}
	?>
</article>
<!-- Finish Video Project -->

