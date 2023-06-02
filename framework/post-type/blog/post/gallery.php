<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Blog Post Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = total_school_get_global_options();


$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);

$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));


list($cmsmasters_layout) = total_school_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-thumb';
} else {
	$cmsmasters_image_thumb_size = 'post-thumbnail';
}


$uniqid = uniqid();

?>

<!-- Start Gallery Article -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
	if (!post_password_required()) {
		if (sizeof($cmsmasters_post_images) > 1) {
	?>
			<script type="text/javascript">
				jQuery(document).ready(function () {
					jQuery('.cmsmasters_slider_<?php echo esc_attr($uniqid); ?>').owlCarousel( { 
						singleItem : 		true, 
						transitionStyle : 	false, 
						rewindNav : 		true, 
						slideSpeed : 		200, 
						paginationSpeed : 	800, 
						rewindSpeed : 		1000, 
						autoPlay : 			false, 
						stopOnHover : 		false, 
						pagination : 		true, 
						navigation : 		false, 
						navigationText : 	[ 
							'<span></span>', 
							'<span></span>' 
						] 
					} );
				} );
			</script>
			<div id="cmsmasters_owl_carousel_<?php the_ID(); ?>" class="cmsmasters_slider_<?php echo esc_attr($uniqid); ?> cmsmasters_owl_slider">
			<?php 
				foreach ($cmsmasters_post_images as $cmsmasters_post_image) {
					$image_atts = wp_prepare_attachment_for_js(strstr($cmsmasters_post_image, '|', true));
					
					
					echo '<div>' . 
						'<figure>' . 
							wp_get_attachment_image(strstr($cmsmasters_post_image, '|', true), $cmsmasters_image_thumb_size, false, array( 
								'class' => 	'full-width', 
								'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsmasters_title(get_the_ID(), false), 
								'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false) 
							)) . 
						'</figure>' . 
					'</div>';
				}
			?>
			</div>
		<?php 
		} elseif (sizeof($cmsmasters_post_images) == 1 && $cmsmasters_post_images[0] != '') {
			total_school_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'img_' . get_the_ID(), true, true, true, true, $cmsmasters_post_images[0]);
		} elseif (has_post_thumbnail()) {
			total_school_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'img_' . get_the_ID(), true, true, true, true, false);
		}
	}
	
	
	echo '<div class="cmsmasters_open_post_inner">';
	
	
	if (
		$cmsmasters_option['total-school' . '_blog_post_date'] || 
		$cmsmasters_option['total-school' . '_blog_post_like'] || 
		$cmsmasters_option['total-school' . '_blog_post_comment'] 
	) {
		echo '<div class="cmsmasters_open_post_top entry-meta">';
					
			total_school_get_post_date('post');

			if (
				$cmsmasters_option['total-school' . '_blog_post_like'] || 
				$cmsmasters_option['total-school' . '_blog_post_comment'] 
			) {
				echo '<div class="cmsmasters_open_post_top_meta">';
					
					total_school_get_post_comments('post');
					
					total_school_get_post_likes('post');

				echo '</div>';
			}
			
		echo '</div>';
	}
	
	
	if (
		$cmsmasters_post_title == 'true' || 
		$cmsmasters_option['total-school' . '_blog_post_author'] || 
		$cmsmasters_option['total-school' . '_blog_post_cat'] || 
		get_the_content() != '' 
	) {
		echo '<div class="cmsmasters_post_content entry-content">';
		
			if ($cmsmasters_post_title == 'true') {
				total_school_post_title_nolink(get_the_ID(), 'h2');
			}
			
			if (
				$cmsmasters_option['total-school' . '_blog_post_author'] || 
				$cmsmasters_option['total-school' . '_blog_post_cat'] 
			) {
				echo '<div class="cmsmasters_post_content_meta entry-meta">';
				
					total_school_get_post_category(get_the_ID(), 'category', 'post');
				
					total_school_get_post_author('post');
				
				echo '</div>';
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
		
		echo '</div>';
	}
	
	
	if (
		$cmsmasters_option['total-school' . '_blog_post_tag']
	) {
		echo '<footer class="cmsmasters_post_footer entry-meta">';
			
			total_school_get_post_tags();
						
		echo '</footer>';
	}
	
	
	echo '</div>';
	?>
</article>
<!-- Finish Gallery Article -->

