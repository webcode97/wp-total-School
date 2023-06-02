<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Blog Post Audio Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = total_school_get_global_options();


$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);

$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);

?>

<!-- Start Audio Article -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
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
<!-- Finish Audio Article -->

