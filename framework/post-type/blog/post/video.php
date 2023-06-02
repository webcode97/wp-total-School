<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Blog Post Video Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = total_school_get_global_options();


$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);

$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);

$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);

$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);


list($cmsmasters_layout) = total_school_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-thumb';
} else {
	$cmsmasters_image_thumb_size = 'post-thumbnail';
}

?>

<!-- Start Video Article -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
	if (!post_password_required()) {
		if ($cmsmasters_post_video_type == 'selfhosted' && !empty($cmsmasters_post_video_links) && sizeof($cmsmasters_post_video_links) > 0) {
			$video_size = cmsmasters_image_thumbnail_list();
			
			
			$attrs = array( 
				'preload'  => 'none', 
				'height'   => $video_size[$cmsmasters_image_thumb_size]['height'], 
				'width'    => $video_size[$cmsmasters_image_thumb_size]['width'] 
			);
			
			
			if (has_post_thumbnail()) {
				$video_poster = wp_get_attachment_image_src((int) get_post_thumbnail_id(get_the_ID()), $cmsmasters_image_thumb_size);
				
				
				$attrs['poster'] = $video_poster[0];
			}
			
			
			foreach ($cmsmasters_post_video_links as $cmsmasters_post_video_link_url) {
				$attrs[substr(strrchr($cmsmasters_post_video_link_url, '.'), 1)] = $cmsmasters_post_video_link_url;
			}
			
			
			echo '<div class="cmsmasters_video_wrap">' . 
				wp_video_shortcode($attrs) . 
			'</div>';
		} elseif ($cmsmasters_post_video_type == 'embedded' && $cmsmasters_post_video_link != '') {
			global $wp_embed;
			
			
			$video_size = cmsmasters_image_thumbnail_list();
			
			
			echo '<div class="cmsmasters_video_wrap">' . 
				do_shortcode($wp_embed->run_shortcode('[embed width="' . $video_size[$cmsmasters_image_thumb_size]['width'] . '" height="' . $video_size[$cmsmasters_image_thumb_size]['height'] . '"]' . $cmsmasters_post_video_link . '[/embed]')) . 
			'</div>';
		} elseif (has_post_thumbnail()) {
			total_school_thumb(get_the_ID(), $cmsmasters_image_thumb_size, true, false, true, false, true, true, false);
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
<!-- Finish Video Article -->

