<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Gallery Project Format Template
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


$cmsmasters_project_details_title = get_post_meta(get_the_ID(), 'cmsmasters_project_details_title', true);


$cmsmasters_project_features_one_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one_title', true);
$cmsmasters_project_features_one = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one', true);

$cmsmasters_project_features_two_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two_title', true);
$cmsmasters_project_features_two = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two', true);

$cmsmasters_project_features_three_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three_title', true);
$cmsmasters_project_features_three = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three', true);


$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_project_images', true))));


$cmsmasters_project_columns = get_post_meta(get_the_ID(), 'cmsmasters_project_columns', true);


if ($cmsmasters_project_columns == 'three' || $cmsmasters_project_columns == 'two') {
    $project_thumb = 'cmsmasters-project-thumb';
} else {
    $project_thumb = 'cmsmasters-project-full-thumb';
}


$cmsmasters_project_img_columns = 'one_third';

if ($cmsmasters_project_columns == 'two') {
	$cmsmasters_project_img_columns = 'one_half';
} elseif ($cmsmasters_project_columns == 'one') {
	$cmsmasters_project_img_columns = 'one_first';
}

$colnumb = 0;


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

<!-- Start Gallery Project -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_project cmsmasters_' . $cmsmasters_project_columns); ?>>
	<?php
	
	echo '<div class="project_content' . (($project_sidebar == 'true') ? ' with_sidebar' : '') . '">';
		
		if (!post_password_required()) {
			if (sizeof($cmsmasters_project_images) > 0 && $cmsmasters_project_images[0] != '') {
				echo '<div class="project_gallery_row">';
				
				
				foreach ($cmsmasters_project_images as $cmsmasters_project_image) {
					$link_href = wp_get_attachment_image_src(strstr($cmsmasters_project_image, '|', true), 'full');
					
					$image_atts = wp_prepare_attachment_for_js(strstr($cmsmasters_project_image, '|', true));
					
					
					if ($cmsmasters_project_columns == 'one' && $colnumb == 1) { 
						echo '<div class="cl"></div></div><div class="project_gallery_row">';
						
						
						$colnumb = 0;
					} else if ($cmsmasters_project_columns == 'two' && $colnumb == 2) {
						echo '<div class="cl"></div></div><div class="project_gallery_row">';
						
						
						$colnumb = 0;
					} else if ($cmsmasters_project_columns == 'three' && $colnumb == 3) {
						echo '<div class="cl"></div></div><div class="project_gallery_row">';
						
						
						$colnumb = 0;
					}
					
					
					echo '<div class="' . $cmsmasters_project_img_columns . '">' . 
						'<figure class="cmsmasters_img_rollover_wrap preloader">' . 
							wp_get_attachment_image(strstr($cmsmasters_project_image, '|', true), $project_thumb, false, array( 
								'class' => 'full-width', 
								'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsmasters_title(get_the_ID(), false), 
								'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false) 
							)) . 
							'<div class="cmsmasters_img_rollover">' . 
								'<a href="' . esc_url($link_href[0]) . '" rel="ilightbox[img_' . get_the_ID() . ']" title="' . (($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false)) . '" class="cmsmasters_image_link"></a>' . 
							'</div>' . 
						'</figure>' . 
					'</div>';
					
					
					$colnumb++;
				}
				
				
				echo '<div class="cl"></div></div>';
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
<!-- Finish Album Project -->

