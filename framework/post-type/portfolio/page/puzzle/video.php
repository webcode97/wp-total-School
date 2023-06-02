<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.0
 * 
 * Portfolio Puzzle Video Project Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_project_metadata = explode(',', $cmsmasters_pj_metadata);

$title = (in_array('title', $cmsmasters_project_metadata)) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && (in_array('categories', $cmsmasters_project_metadata))) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_project_metadata))) ? true : false;
$likes = (in_array('likes', $cmsmasters_project_metadata)) ? true : false;
$rollover = in_array('rollover', $cmsmasters_project_metadata) ? true : false;
$hover_icon_bin = in_array('hover_icon', $cmsmasters_project_metadata) ? true : false;

if ($hover_icon_bin) {
	$hover_icon = end($cmsmasters_project_metadata);
} else {
	$hover_icon = '';
}

$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);


$cmsmasters_project_size = get_post_meta(get_the_ID(), 'cmsmasters_project_size', true);

if (!$cmsmasters_project_size) {
    $cmsmasters_project_size = 'one_x_one';
}


$project_sort_categs = get_the_terms(0, 'pj-categs');

$project_categs = '';

if ($project_sort_categs != '') {
	foreach ($project_sort_categs as $project_sort_categ) {
		$project_categs .= ' ' . $project_sort_categ->slug;
	}
	
	
	$project_categs = ltrim($project_categs, ' ');
}
?>

<!-- Start Video Project -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_project_puzzle ' . $cmsmasters_project_size); echo (($project_categs != '') ? ' data-category="' . esc_attr($project_categs) . '"' : '') ?>>
	<div class="project_outer">
	<?php 
		total_school_thumb_rollover(get_the_ID(), 'full', false, $rollover, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, ($rollover ? '' : $hover_icon));
		
		
		if ($title || $categories || $likes || $comments) {
			echo '<div class="project_inner">' . 
				'<div class="project_inner_aligner ' . $hover_icon . '">';
				
				$title ? total_school_project_heading(get_the_ID(), 'h3', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url) : '';
				
				
				if ($categories) {
					echo '<div class="cmsmasters_project_cont_info entry-meta">';
						
						total_school_get_project_category(get_the_ID(), 'pj-categs', 'page');
						
					echo '</div>';
				}
				
				
				if ($likes || $comments) {
					echo '<footer class="cmsmasters_project_footer entry-meta">';
						
						$comments ? total_school_get_project_comments('page') : '';
						
						$likes ? total_school_get_project_likes('page') : '';
						
					echo '</footer>';
				}
				
				echo '</div>' . 
			'</div>';
		}
		
		
		if (!$title) {
			echo '<div class="dn">';
				total_school_project_heading(get_the_ID(), 'h6');
			echo '</div>';
		}
		
		echo '<span class="dn meta-date">' . get_the_time('YmdHis') . '</span>';
	?>
	</div>
</article>
<!-- Finish Video Project -->

