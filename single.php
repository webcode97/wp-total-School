<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.0
 * 
 * Single Post Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = total_school_get_global_options();


list($cmsmasters_layout) = total_school_theme_page_layout_scheme();


$cmsmasters_post_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_post_sharing_box', true);

$cmsmasters_post_author_box = get_post_meta(get_the_ID(), 'cmsmasters_post_author_box', true);

$cmsmasters_post_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_post_more_posts', true);


echo '<!-- Start Content -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr">' . "\n\t";
} else {
	echo '<div class="middle_content entry">';
}


if (have_posts()) : the_post();
	echo '<div class="blog opened-article">' . "\n";
	
	
	if (get_post_format() != '') {
		get_template_part('framework/post-type/blog/post/' . get_post_format());
	} else {
		get_template_part('framework/post-type/blog/post/standard');
	}
	
	
	if ($cmsmasters_post_sharing_box == 'true') {
		total_school_sharing_box(esc_html__('Like this post?', 'total-school'), 'h4');
	}
	
	
	if ($cmsmasters_post_author_box == 'true') {
		total_school_author_box(esc_html__('About author', 'total-school'), 'h4', 'h3');
	}
	
	
	if (get_the_tags()) {
		$tgsarray = array();
		
		foreach (get_the_tags() as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}
	} else {
		$tgsarray = '';
	}
	
	
	if ($cmsmasters_post_more_posts != 'hide') {
		total_school_related( 
			'h4', 
			$cmsmasters_post_more_posts, 
			$tgsarray, 
			$cmsmasters_option['total-school' . '_blog_more_posts_count'], 
			$cmsmasters_option['total-school' . '_blog_more_posts_pause'], 
			'post' 
		);
	}
	
	
	echo total_school_get_post_pings(get_the_ID(), 'h4');
	
	
	comments_template(); 
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!--  Finish Content -->' . "\n\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo "\n" . '<!--  Start Sidebar -->' . "\n" . 
	'<div class="sidebar">' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!--  Finish Sidebar -->' . "\n";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo "\n" . '<!--  Start Sidebar -->' . "\n" . 
	'<div class="sidebar fl">' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!--  Finish Sidebar -->' . "\n";
}


get_footer();

