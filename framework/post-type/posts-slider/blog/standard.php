<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.0
 * 
 * Posts Slider Standard Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);

$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && total_school_slider_post_check_exc_cont('post')) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;

?>

<!-- Start Standard Article -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_post'); ?>>
	<div class="cmsmasters_slider_post_outer">
	<?php
		echo '<div class="cmsmasters_slider_post_date_img_wrap">';
		
			total_school_thumb_rollover(get_the_ID(), 'post-thumbnail', false, false, false, false, false, false, false, false, true, false, false);
			
			if ($date || $likes || $comments) {				
			
				echo '<div class="cmsmasters_slider_post_date_top_meta_wrap">';		
					
					$date ? total_school_get_slider_post_date() : '';
						
					if ($likes || $comments) {	
						echo '<div class="cmsmasters_slider_post_social_wrap">';
							$likes ? total_school_slider_post_like('post') : '';
							
							$comments ? total_school_get_slider_post_comments('post') : '';
						echo '</div>';
					}
					
				echo '</div>';
			
			}
		
		echo '</div>';
		
		
		if ($title || $author || $categories || $excerpt || $more) {
			echo '<div class="cmsmasters_slider_post_inner">';
				
				$title ? total_school_slider_post_heading(get_the_ID(), 'post', 'h4') : '';
				
				
				if ($author || $categories) {
					echo '<div class="cmsmasters_slider_post_cont_info entry-meta">';
						
						$categories ? total_school_get_slider_post_category(get_the_ID(), 'category', 'post') : '';
						
						$author ? total_school_get_slider_post_author('post') : '';
						
					echo '</div>';
				}
				
				
				$excerpt ? total_school_slider_post_exc_cont('post') : '';
				
				
				if ($more) {
					echo '<footer class="cmsmasters_slider_post_footer entry-meta">';
						
						$more ? total_school_slider_post_more(get_the_ID()) : '';
						
					echo '</footer>';
				}
				
			echo '</div>';
		}
	?>
	</div>
</article>
<!-- Finish Standard Article -->

