<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.1
 * 
 * Single Lesson Template
 * Created by CMSMasters
 * 
 */


get_header();


list($cmsmasters_layout) = total_school_theme_page_layout_scheme();


echo '<!-- Start Content -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry" role="main">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content entry" role="main">' . "\n\t";
}


if (have_posts()) : the_post();
	echo '<div class="cmsmasters_lesson opened-article">' . "\n";
	
	
	the_content();
	
	
	total_school_prev_next_posts();
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!--  Finish Content -->' . "\n\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo "\n" . '<!--  Start Sidebar -->' . "\n" . 
	'<div class="sidebar" role="complementary">' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!--  Finish Sidebar -->' . "\n";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo "\n" . '<!--  Start Sidebar -->' . "\n" . 
	'<div class="sidebar fl" role="complementary">' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!--  Finish Sidebar -->' . "\n";
}


get_footer();

