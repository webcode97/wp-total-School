<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.0
 * 
 * Blog Page Timeline Audio Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = explode(',', $cmsmasters_metadata);


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);

?>

<!-- Start Audio Article -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_timeline'); ?>>
	<?php 
	if ($date) {
		echo '<div class="cmsmasters_post_info entry-meta">';
		
			total_school_get_post_date('page', 'timeline');
			
		echo '</div>';
	}
	?>
	<div class="cmsmasters_timeline_margin">
		<div class="cmsmasters_post_cont">
			<?php
			echo '<div class="cmsmasters_post_cont_wrapper">';

				echo '<div class="cmsmasters_post_info_bottom entry-meta">';
				
					total_school_post_heading(get_the_ID(), 'h3');
					
					
					if ($author || $categories) {
						echo '<div class="cmsmasters_post_cont_info entry-meta">';
							
							$categories ? total_school_get_post_category(get_the_ID(), 'category', 'page') : '';

							$author ? total_school_get_post_author('page') : '';
							
						echo '</div>';
					}


					if ($likes || $comments) {
						echo '<div class="cmsmasters_post_meta_info entry-meta">';
									
							$comments ? total_school_get_post_comments('page') : '';
							
							$likes ? total_school_get_post_likes('page') : '';
							
						echo '</div>';
					}
					
					
					total_school_post_exc_cont();
					

					if (!post_password_required() && !empty($cmsmasters_post_audio_links) && sizeof($cmsmasters_post_audio_links) > 0) {
						$attrs = array(
							'preload' => 'none'
						);
						
						
						foreach ($cmsmasters_post_audio_links as $cmsmasters_post_audio_link_url) {
							$attrs[substr(strrchr($cmsmasters_post_audio_link_url, '.'), 1)] = $cmsmasters_post_audio_link_url;
						}
						
						
						echo '<div class="cmsmasters_audio">' . 
							wp_audio_shortcode($attrs) . 
						'</div>';
					}
					
					if ($more) {
						echo '<footer class="cmsmasters_post_footer entry-meta">';
							
							$more ? total_school_post_more(get_the_ID()) : '';
							
						echo '</footer>';
					}

				echo '</div>';

			echo '</div>';
			?>
		</div>
	</div>
</article>
<!-- Finish Audio Article -->

