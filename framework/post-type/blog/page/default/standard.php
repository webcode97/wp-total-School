<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.4
 * 
 * Blog Page Default Standard Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || (is_home() && CMSMASTERS_CONTENT_COMPOSER)) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;

?>

<!-- Start Standard Article -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_default'); ?>>
	<div class="cmsmasters_post_cont">
		<?php
		if (!post_password_required() && has_post_thumbnail()) {
			total_school_thumb(get_the_ID(), 'post-thumbnail', true, false, false, false, false, true, false);
		}
		
		echo '<div class="cmsmasters_post_cont_wrapper">';
		
			if ($date || $likes || $comments) {
				echo '<div class="cmsmasters_post_info entry-meta">';
					
					$date ? total_school_get_post_date('page', 'default') : '';

					if ($likes || $comments) {
						echo '<div class="cmsmasters_post_meta_info">';
							
							$comments ? total_school_get_post_comments('page') : '';
							
							$likes ? total_school_get_post_likes('page') : '';

						echo '</div>';
					}
					
				echo '</div>';
			}

			echo '<div class="cmsmasters_post_info_bottom entry-meta">';
			
				total_school_post_heading(get_the_ID(), 'h2');
				
				
				if ($author || $categories) {
					echo '<div class="cmsmasters_post_cont_info entry-meta">';
						
						$categories ? total_school_get_post_category(get_the_ID(), 'category', 'page') : '';

						$author ? total_school_get_post_author('page') : '';
						
					echo '</div>';
				}
				
				
				total_school_post_exc_cont();
				
				
				if ($more) {
					echo '<footer class="cmsmasters_post_footer entry-meta">';
						
						$more ? total_school_post_more(get_the_ID()) : '';
						
					echo '</footer>';
				}

			echo '</div>';

		echo '</div>';
		?>
	</div>
</article>
<!-- Finish Standard Article -->
