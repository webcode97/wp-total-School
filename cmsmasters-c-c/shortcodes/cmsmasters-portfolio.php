<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.7
 * 
 * Content Composer Portfolio Shortcode
 * Created by CMSMasters
 * 
 */

/* 
	1. Create a separate file for each of the shortcodes that need to be edited. 
	2. Contents of this file will be used to substitute the corresponding code in the shortcodes.php file of the Composer Plugin.
	3. echo total_school_return_content($out) variable must contain all the shortcode front-end content
*/


extract(shortcode_atts($new_atts, $atts)); // Extract attrs (start each shortcode file you create with this)


// Shortcode body


$unique_id = uniqid();



if ($layout == 'puzzle') {
	$metadata = $metadata_puzzle;
} else {
	$metadata = $metadata_grid;
}

if ($hover_icon != '') {
	$metadata = $metadata . ',' . 'hover_icon' . ',' . $hover_icon;
}

$this->portfolio_atts = array(
	'cmsmasters_pj_metadata' => 	$metadata, 
	'cmsmasters_pj_layout_mode' => 	$layout_mode, 
);


$more_text = ($more_text != '') ? $more_text : esc_html__('Load More Projects', 'total-school');

$filter_text = ($filter_text != '') ? $filter_text : esc_html__('Filter', 'total-school');

$filter_cats_text = ($filter_cats_text != '') ? $filter_cats_text : esc_html__('All Categories', 'total-school');

$sorting_name_text = ($sorting_name_text != '') ? $sorting_name_text : esc_html__('Name', 'total-school');

$sorting_date_text = ($sorting_date_text != '') ? $sorting_date_text : esc_html__('Date', 'total-school');


$out = "<div class=\"cmsmasters_wrap_portfolio entry-summary\" id=\"portfolio_{$unique_id}\">
<script type=\"text/javascript\">
jQuery(document).ready(function () {
(function ($) {
	if ($('#portfolio_{$unique_id}').find('article').length == '0') {
		return false;
	}
	

	startPortfolio( 
		'" . $unique_id . "', 
		'" . $layout . "', 
		'" . $layout_mode . "', 
		'" . CMSMASTERS_CONTENT_COMPOSER_URL . "', 
		'" . $orderby . "', 
		'" . $order . "', 
		'" . $count . "', 
		'" . $categories . "', 
		'" . $metadata . "' 
	);
} )(jQuery);
} );
</script>
";


if ($filter != '' || $sorting != '') {
	$out .= "<div class=\"cmsmasters_project_filter_wrap cmsmasters_items_filter_wrap\">
		<div class=\"cmsmasters_project_filter cmsmasters_items_filter\">
			<span class=\"cmsmasters_project_filter_loader cmsmasters_items_filter_loader\"></span>";
			
			if ($sorting != '') {
				$out .= "<div class=\"cmsmasters_project_sort_block cmsmasters_items_sort_block\">
					<a href=\"#\" name=\"project_name\" title=\"" . $sorting_name_text . "\" class=\"button cmsmasters_project_sort_but cmsmasters_items_sort_but cmsmasters_theme_icon_slide_bottom" . 
					(($orderby == 'name') ? " current" . 
					(($order == 'DESC') ? " reversed" : "") : "") . 
					"\">
						<span>" . $sorting_name_text . "</span>
					</a>
					<a href=\"#\" name=\"project_date\" title=\"" . $sorting_date_text . "\" class=\"button cmsmasters_project_sort_but cmsmasters_items_sort_but cmsmasters_theme_icon_slide_bottom" . 
					(($orderby == 'date') ? " current" . 
					(($order == 'DESC') ? " reversed" : "") : "") . 
					"\">
						<span>" . $sorting_date_text . "</span>
					</a>
				</div>";
			}
			
			
			if ($filter != '') {
				$out .= "<div class=\"cmsmasters_project_filter_block cmsmasters_items_filter_block\">
					<a class=\"cmsmasters_project_filter_but cmsmasters_items_filter_but button\">
						<span>" . $filter_text . "</span>
					</a>
					<ul class=\"cmsmasters_project_filter_list cmsmasters_items_filter_list\">
						<li class=\"current\">
							<a class=\"button\" data-filter=\"article.project\"  title=\"" . $filter_cats_text . "\" href=\"javascript:void(0);\">
								<span>" . $filter_cats_text . "</span>
							</a>
						</li>";
						
						
						if ($categories != '') {
							$cat_array = explode(',', $categories);
							
							
							for ($i = 0; $i < count($cat_array); $i++) {
								$idObj = get_term_by('slug', $cat_array[$i], 'pj-categs');
								
								$cat_array[$i] = $idObj->term_id;
							}
						} else {
							$cat_array = $categories;
						}
						
						
						$cat_args = array( 
							'orderby' => 	'name', 
							'include' => 	$cat_array 
						);
						
						
						$project_categs = get_terms('pj-categs', $cat_args);
						
						
						if (is_array($project_categs) && !empty($project_categs)) {
							foreach ($project_categs as $project_categ) {
								$out .= "<li>
									<a class=\"button\" href=\"#\" data-filter=\"article.project[data-category~='{$project_categ->slug}']\" title=\"{$project_categ->name}\">
										<span>{$project_categ->name}</span>
									</a>
								</li>";
							}
						}
					
					$out .= "</ul>
				</div>";
			}
			
		$out .= "</div>
	</div>";
}

$out .= '<div class="portfolio ' . $layout . ' ' . $gap . '_gap ' . $layout_mode . 
	(($layout != 'puzzle') ? ' cmsmasters_' . $columns : '') . 
	(($classes != '') ? ' ' . $classes : '') . 
'">';


$orderby = ($orderby == 'popular') ? 'meta_value_num' : $orderby;


$args = array( 
	'post_type' => 				'project', 
	'orderby' => 				$orderby, 
	'order' => 					$order, 
	'posts_per_page' => 		$count 
);

if ($layout == 'puzzle') {
	$args['ignore_sticky_posts'] = true;
}

if ($categories != '') {
	$cat_array = explode(",", $categories);
	
	$args['tax_query'] = array( 
		array( 
			'taxonomy' => 'pj-categs', 
			'field' => 'slug', 
			'terms' => $cat_array 
		)
	);
}


if ($pagination == 'pagination') {
	if (get_query_var('paged')) { 
		$paged = get_query_var('paged'); 
	} elseif (get_query_var('page')) { 
		$paged = get_query_var('page'); 
	} else { 
		$paged = 1; 
	}
	
	
	$args['paged'] = $paged;
}


if ($orderby == 'meta_value_num') {
	$args['meta_key'] = 'cmsmasters_likes';
}


$query = new WP_Query($args);


if ($query->have_posts()) : 
	while ($query->have_posts()) : $query->the_post();
		if ($layout == 'puzzle') {
			if (get_post_format() != '') {
				$out .= cmsmasters_composer_ob_load_template('framework/post-type/portfolio/page/puzzle/' . get_post_format() . '.php', $this->portfolio_atts);
			} else {
				$out .= cmsmasters_composer_ob_load_template('framework/post-type/portfolio/page/puzzle/standard.php', $this->portfolio_atts);
			}
		} else {
			if (get_post_format() != '') {
				$out .= cmsmasters_composer_ob_load_template('framework/post-type/portfolio/page/grid/' . get_post_format() . '.php', $this->portfolio_atts);
			} else {
				$out .= cmsmasters_composer_ob_load_template('framework/post-type/portfolio/page/grid/standard.php', $this->portfolio_atts);
			}
		}
	endwhile;
	
	
	if ($pagination == 'more') {
		wp_enqueue_style('mediaelement');
		
		wp_enqueue_style('wp-mediaelement');
		
		
		wp_enqueue_script('mediaelement');
		
		wp_enqueue_script('wp-mediaelement');
	}
endif;


$out .= '</div>';


if ($pagination !== 'disabled') {
	$out .= '<div class="cmsmasters_wrap_more_projects cmsmasters_wrap_more_items">';
	
		if ($pagination == 'pagination' && $query->max_num_pages > 1) {
			$out .= cmsmasters_pagination($query->max_num_pages);
		} elseif ($pagination == 'more' && $query->found_posts > $count) {
			$out .= "<div class=\"cmsmasters_wrap_project_loader cmsmasters_wrap_items_loader\">
				<a href=\"javascript:void(0);\" class=\"cmsmasters_button cmsmasters_project_loader cmsmasters_items_loader\">
					<span>" . $more_text . "</span>
				</a>
			</div>";
		}
	
	$out .= '</div>';
}

$out .= '</div>';


wp_reset_query();


echo total_school_return_content($out);

