<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Template Name: Sitemap
 * Created by CMSMasters
 * 
 */


get_header();

$cmsmasters_option = total_school_get_global_options();


list($cmsmasters_layout) = total_school_theme_page_layout_scheme();


echo '<!-- Start Content -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr">' . "\n\t";
} else {
	echo '<div class="middle_content entry">';
}

echo '<div class="cmsmasters_sitemap_wrap">' . "\n";


if (have_posts()) : the_post();
	$content_start = substr(get_post_field('post_content', get_the_ID()), 0, 15);
	
	
	if ($cmsmasters_layout == 'fullwidth' && $content_start === '[cmsmasters_row') {
		echo '</div>' . 
		'</div>';
	}
	
	
	the_content();
	
	echo '<div class="cl"></div>';
	
	
	if ($cmsmasters_layout == 'fullwidth' && $content_start === '[cmsmasters_row') {
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
endif;


if ($cmsmasters_option['total-school' . '_sitemap_nav']) { 
	echo '<h1>' . esc_html__('Website Pages', 'total-school') . '</h1>';
	
	wp_nav_menu(array( 
		'theme_location' => 'primary', 
		'container' => '', 
		'sort_column' => 'menu_order', 
		'menu_class' => 'cmsmasters_sitemap navigation_menu' 
	));
}


if ($cmsmasters_option['total-school' . '_sitemap_categs']) {
	echo '<div class="cmsmasters_divider solid"></div>' . 
	'<h2>' . esc_html__('Blog Archives by Categories', 'total-school') . '</h2>' . 
	'<ul class="cmsmasters_sitemap_category">';
	
	wp_list_categories(array( 
		'title_li' => '', 
		'orderby' => 'name', 
		'order' => 'ASC' 
	));
	
	echo '</ul>';
}


if ($cmsmasters_option['total-school' . '_sitemap_tags']) {
	$tags = get_tags(array( 
		'orderby' => 'name', 
		'order' => 'DESC' 
	));
	
	echo '<div class="cmsmasters_divider solid"></div>' . 
	'<h2>' . esc_html__('Blog Archives by Tags', 'total-school') . '</h2>' . 
	'<ul class="cmsmasters_sitemap_archive">';
	
	foreach ((array) $tags as $tag) {
		echo '<li><a href="' . esc_url(get_tag_link($tag->term_id)) . '" rel="tag" title="' . esc_attr($tag->name) . '">' . esc_html($tag->name) . '</a> (' . $tag->count . ')</li>';
	}
	
	echo '</ul>';
}


if ($cmsmasters_option['total-school' . '_sitemap_month']) {
	echo '<div class="cmsmasters_divider solid"></div>' . 
	'<h2>' . esc_html__('Blog Archives by Month', 'total-school') . '</h2>' . 
	'<ul class="cmsmasters_sitemap_archive">';
	
	wp_get_archives(array( 
		'show_post_count' => true, 
		'format' => 'custom', 
		'before' => '<li>', 
		'after' => '</li>' 
	));
	
	echo '</ul>';
}


if ($cmsmasters_option['total-school' . '_sitemap_pj_categs']) {
	echo '<div class="cmsmasters_divider solid"></div>' . 
	'<h2>' . esc_html__('Portfolio Archives by Categories', 'total-school') . '</h2>' . 
	'<ul class="cmsmasters_sitemap_category">';
	
	wp_list_categories(array( 
		'title_li' => '', 
		'orderby' => 'name', 
		'order' => 'ASC', 
		'taxonomy' => 'pj-categs' 
	));
	
	echo '</ul>';
}


if ($cmsmasters_option['total-school' . '_sitemap_pj_tags']) {
	echo '<div class="cmsmasters_divider solid"></div>' . 
	'<h2>' . esc_html__('Portfolio Archives by Tags', 'total-school') . '</h2>' . 
	'<ul class="cmsmasters_sitemap_archive">';
	
	wp_list_categories(array( 
		'title_li' => '', 
		'orderby' => 'name', 
		'order' => 'ASC', 
		'hierarchical' => false, 
		'taxonomy' => 'pj-tags' 
	));
	
	echo '</ul>';
}

echo '</div>' . "\n" . 
'</div>' . "\n" . 
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

