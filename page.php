<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Default Page Template
 * Created by CMSMasters
 * 
 */


get_header();


list($cmsmasters_layout) = total_school_theme_page_layout_scheme();


if (is_singular('lp_course')) {
	$cmsmasters_lpr_course_title = get_post_meta(get_the_ID(), 'cmsmasters_lpr_course_title', true);

	$cmsmasters_lpr_course_image = get_post_meta(get_the_ID(), 'cmsmasters_lpr_course_image', true);
}


echo '<!-- Start Content -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr">' . "\n\t";
} else {
	echo '<div class="middle_content entry">';
}


if (have_posts()) : the_post();
	$content_start = substr(ltrim(get_post_field('post_content', get_the_ID())), 0, 15);
	
	
	if (!is_singular('lp_course') && $cmsmasters_layout == 'fullwidth' && $content_start === '[cmsmasters_row') {
		echo '</div>' . 
		'</div>';
	}
	
	if (is_singular('lp_course')) {
		if ($cmsmasters_lpr_course_title == 'true') {
			the_title( '<h2 class="entry-title cmsmasters_course_title">', '</h2>' );
		}
		
		if ($cmsmasters_lpr_course_image == 'true' && has_post_thumbnail()) {
			total_school_thumb(get_the_ID(), 'post-thumbnail', false, true, true, false, true, true, false);
		}
	}
	
	the_content();
	
	echo '<div class="cl"></div>';
	
	
	if (!is_singular('lp_course') && $cmsmasters_layout == 'fullwidth' && $content_start === '[cmsmasters_row') {
		echo '<div class="content_wrap ' . $cmsmasters_layout . 
		((is_singular('project')) ? ' project_page' : '') . 
		((is_singular('profile')) ? ' profile_page' : '') . 
		'">' . "\n\n" . 
			'<div class="middle_content entry">';
	}
	
	
	wp_link_pages(array( 
		'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'total-school') . ':</strong>', 
		'after' => '</div>' . "\n", 
		'link_before' => '<span>', 
		'link_after' => '</span>' 
	));
	
	
	comments_template();
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

