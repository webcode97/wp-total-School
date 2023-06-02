<?php 
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Template Functions for Campaign & Donation
 * Created by CMSMasters
 * 
 */


/********** Template Functions for Campaign **********/

/* Get Campaigns Heading Function */
function cmsmasters_campaign_heading($cmsmasters_id, $tag = 'h1', $link = true, $show = true) { 
	$out = '<header class="cmsmasters_campaign_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsmasters_campaign_title entry-title">' . 
			($link ? '<a href="' . esc_url(get_permalink($cmsmasters_id)) . '">' : '') . 
				cmsmasters_title($cmsmasters_id, false) . 
			($link ? '</a>' : '') . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Campaigns Date Function */
function cmsmasters_campaign_date($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsmasters_campaign_date">' . 
			esc_html__('On', 'total-school') . ' ' . 
			'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
				get_the_date() . 
			'</abbr>' . 
			'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
				get_the_modified_date() . 
			'</abbr>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = total_school_get_global_options();
		
		$out = '';
		
		if ($cmsmasters_option['total-school' . '_donations_campaign_date']) {
			$out .= '<span class="cmsmasters_campaign_date">' . 
				esc_html__('On', 'total-school') . ' ' . 
				'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
					get_the_date() . 
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					get_the_modified_date() . 
				'</abbr>' . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Campaigns Author Function */
function cmsmasters_campaign_author($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsmasters_campaign_user_name">' . 
			esc_html__('By', 'total-school') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'total-school') . ' ' . get_the_author_meta('display_name') . '" class="vcard author"><span class="fn" rel="author">' . get_the_author_meta('display_name') . '</span></a>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = total_school_get_global_options();
		
		$out = '';
		
		
		if ($cmsmasters_option['total-school' . '_donations_campaign_author']) {
			$out .= '<span class="cmsmasters_campaign_user_name">' . 
				esc_html__('By', 'total-school') . ' ' . 
				'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'total-school') . ' ' . get_the_author_meta('display_name') . '" class="vcard author"><span class="fn" rel="author">' . get_the_author_meta('display_name') . '</span></a>' . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Campaigns Category Function */
function cmsmasters_campaign_category($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_campaign_category">' . 
				get_the_term_list($cmsmasters_id, $taxonomy, '', ', ', '') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = total_school_get_global_options();
			
			$out = '';
			
			
			if ($cmsmasters_option['total-school' . '_donations_campaign_cat']) {
				$out .= '<span class="cmsmasters_campaign_category">' . 
					get_the_term_list($cmsmasters_id, $taxonomy, esc_html__('In', 'total-school') . ' ', ', ', '') . 
				'</span>';
			}
		}
		
		
		if ($show) {
			echo total_school_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Campaigns Tags Function */
function cmsmasters_campaign_tags($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_campaign_tags">' . 
				get_the_term_list($cmsmasters_id, $taxonomy, '', ', ', '') . 
			'</span>';
		} else if ($template_type == 'post') {
			$cmsmasters_option = total_school_get_global_options();
			
			$out = '';
			
			
			if ($cmsmasters_option['total-school' . '_donations_campaign_tag']) {
				$out .= '<span class="cmsmasters_campaign_tags">' . 
					get_the_term_list($cmsmasters_id, $taxonomy, esc_html__('Tags', 'total-school') . ' ', ', ', '') . 
				'</span>';
			}
		}
		
		
		if ($show) {
			echo wp_kses_post($out);
		} else {
			return wp_kses_post($out);
		}
	}
}



/* Get Campaigns Content/Excerpt Function */
function cmsmasters_campaign_exc_cont($content = '', $word_count = 55, $show = true) {
	if ($content != '') {
		$content = preg_replace('~\[[^\]]+\]~', '', $content);
		
		$words = explode(' ', $content);
		
		if (count($words) > $word_count) {
			array_splice($words, $word_count);
			
			$content = implode(' ', $words);
		}
		
		
		$out = cmsmasters_divpdel('<div class="cmsmasters_campaign_content entry-content">' . "\n" . 
			'<p>' . $content . '</p>' . 
		'</div>' . "\n");
		
		
		if ($show) {
			echo total_school_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Campaigns Like Function */
function cmsmasters_campaign_like($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = cmsmasters_like(false);
	} elseif ($template_type == 'post') {
		$cmsmasters_option = total_school_get_global_options();
		
		$out = '';
		
		
		if ($cmsmasters_option['total-school' . '_donations_campaign_like']) {
			$out = cmsmasters_like(false);
		}
	}
	
	
	if ($show) {
		echo total_school_return_content($out);
	} else {
		return $out;
	}
}



/* Get Campaigns Comments Function */
function cmsmasters_campaign_comments($template_type = 'page', $show = true) {
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_comments">' . 
				'<a class="cmsmasters_post_comments cmsmasters_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'total-school') . ' ' . get_the_title() . '">' . 
					'<span>' . get_comments_number() . '</span>' . 
				'</a>' . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = total_school_get_global_options();
			
			$out = '';
			
			
			if ($cmsmasters_option['total-school' . '_donations_campaign_comment']) {
				$out = '<span class="cmsmasters_comments">' . 
					'<a class="cmsmasters_post_comments cmsmasters_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'total-school') . ' ' . get_the_title() . '">' . 
						'<span>' . get_comments_number() . '</span>' . 
					'</a>' . 
				'</span>';
			}
		}
		
		
		if ($show) {
			echo total_school_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Campaign Rest Amount Function */
function cmsmasters_campaign_rest_amount($cmsmasters_id, $show = true) {
	$target = get_the_campaign_target($cmsmasters_id);
	
	$funds = get_the_funds($cmsmasters_id);
	
	$togo_number = $target - ($funds > $target ? $target : $funds);
	
	
	$out = '<span class="cmsmasters_campaign_rest_amount">' . 
		sprintf(esc_attr__('%s To Go', 'total-school'), cmsmasters_donations_currency($togo_number)) . 
	'</span>';
	
	
	if ($show) {
		echo total_school_return_content($out);
	} else {
		return $out;
	}
}



/* Get Campaign Target Function */
function cmsmasters_campaign_target($cmsmasters_id, $show = true) {
	$target = get_the_campaign_target($cmsmasters_id, true);
	
	
	$out = '<div class="cmsmasters_campaign_target">' . 
		'<div class="cmsmasters_campaign_target_inner">' . 
			'<h4 class="cmsmasters_campaign_target_number">' . cmsmasters_donations_currency($target) . '</h4>' . 
			'<h3 class="cmsmasters_campaign_target_title">' . esc_html__('Campaign Target', 'total-school') . '</h3>' . 
		'</div>' . 
	'</div>';
	
	
	if ($show) {
		echo total_school_return_content($out);
	} else {
		return $out;
	}
}



/* Get Campaign Donations Count Function */
function cmsmasters_campaign_donations_count($cmsmasters_id, $show = true) {
	$funds_number = get_the_funds($cmsmasters_id, true);
	
	
	$out = '<div class="cmsmasters_campaign_donations_count">' . 
		'<div class="cmsmasters_campaign_donations_count_inner">' . 
			'<h4 class="cmsmasters_campaign_donations_count_number">' . $funds_number . '</h4>' . 
			'<h3 class="cmsmasters_campaign_donations_count_title">' . esc_html__('Donations', 'total-school') . '</h3>' . 
		'</div>' . 
	'</div>';
	
	
	if ($show) {
		echo total_school_return_content($out);
	} else {
		return $out;
	}
}



/* Get Campaign Donated Function */
function cmsmasters_campaign_donated($cmsmasters_id, $template_type = 'page', $layout_type = 'horizontal', $togo = true, $show = true) {
	$target = get_the_campaign_target($cmsmasters_id);
	
	$funds = get_the_funds($cmsmasters_id);
	
	
	$progress = ($target != 0 ? floor((100 / $target) * $funds) : 0);
	
	$progress = ($progress > 100 ? 100 : $progress);
	
	$togo_number = $target - ($funds > $target ? $target : $funds);
	
	$unique_id = uniqid();
	
	if ($template_type == 'page') {
		if ($layout_type == 'horizontal') {
			$out = '<div class="cmsmasters_campaign_donated_percent">' . 
				'<style type="text/css">' . 
					'.cmsmasters_stats.shortcode_animated #cmsmasters_stat_' . $unique_id . '.cmsmasters_stat { ' . 
						'width:' . $progress . '%; ' . 
					'} ' . 
				'</style>' . 
				'<div class="cmsmasters_stats stats_mode_bars stats_type_horizontal">' . 
					'<div class="cmsmasters_stat_wrap">' . 
						'<span class="cmsmasters_stat_subtitle">' . sprintf(esc_attr__('%s to go', 'total-school'), cmsmasters_donations_currency($togo_number)) . '</span>' . 
						'<div id="cmsmasters_stat_' . $unique_id . '" class="cmsmasters_stat" data-percent="' . $progress . '">' . 
							'<div class="cmsmasters_stat_inner"></div>' . 
						'</div>' . 
						'<div class="cmsmasters_stat_title_wrap">' . 
							'<span class="cmsmasters_stat_title">' . esc_html__('Donated', 'total-school') . '</span>' . 
							'<span class="cmsmasters_stat_counter">' . $progress . '</span>' . 
							'<span class="cmsmasters_stat_units">%</span>' . 
						'</div>' . 
					'</div>' . 
				'</div>' . 
			'</div>';
		} elseif ($layout_type == 'vertical') {		
			$out = '<div class="cmsmasters_campaign_donated_percent">' . 
				'<style type="text/css">' . 
					'.cmsmasters_stats.shortcode_animated #cmsmasters_stat_' . $unique_id . '.cmsmasters_stat { ' . 
						'height:' . $progress . '%; ' . 
					'} ' . 
				'</style>' . 
				'<div class="cmsmasters_stats stats_mode_bars stats_type_vertical">' . 
					'<div class="cmsmasters_stat_wrap">' . 
						'<div class="cmsmasters_stat_inner_stat_info">' . 
							'<span class="cmsmasters_stat_counter_wrap">' . 
								'<span class="cmsmasters_stat_counter">' . $progress . '</span>' . 
								'<span class="cmsmasters_stat_units">%</span>' . 
								'<span class="cmsmasters_stat_title">' . esc_html__('Donated', 'total-school') . '</span>' . 
							'</span>' . 
						'</div>' . 
						'<div class="cmsmasters_stat_container">' . 
							'<div id="cmsmasters_stat_' . $unique_id . '" class="cmsmasters_stat" data-percent="' . $progress . '">' . 
								'<div class="cmsmasters_stat_inner">' . 
									'<span class="cmsmasters_stat_counter_wrap">' . 
										'<span class="cmsmasters_stat_counter">' . $progress . '</span>' . 
										'<span class="cmsmasters_stat_units">%</span>' . 
									'</span>' . 
								'</div>' . 
								'<canvas height="140" width="140"></canvas>' . 
							'</div>' . 
						'</div>' . 
					'</div>' . 
				'</div>' . 
			'</div>';
		}
	} elseif ($template_type == 'post') {
		$out = '<div class="cmsmasters_campaign_donated">' . 
			'<div class="cmsmasters_campaign_donated_inner">' . 
				'<style type="text/css">' . 
					'.cmsmasters_stats.shortcode_animated #cmsmasters_stat_' . $unique_id . '.cmsmasters_stat { ' . 
						'width:' . $progress . '%; ' . 
					'} ' . 
				'</style>' . 
				'<div class="cmsmasters_stats stats_mode_bars stats_type_horizontal">' . 
					'<div class="cmsmasters_stat_wrap">' . 
						(($togo) ? '<h6 class="cmsmasters_stat_subtitle">' . sprintf(esc_attr__('%s to go', 'total-school'), cmsmasters_donations_currency($togo_number)) . '</h6>' : '') . 
						'<div id="cmsmasters_stat_' . $unique_id . '" class="cmsmasters_stat" data-percent="' . $progress . '">' . 
							'<div class="cmsmasters_stat_inner"></div>' . 
						'</div>' . 
						'<div class="cmsmasters_stat_title_wrap">' . 
							'<span class="cmsmasters_stat_title">' . esc_html__('Donated', 'total-school') . '</span>' . 
							'<span class="cmsmasters_stat_counter">' . $progress . '</span>' . 
							'<span class="cmsmasters_stat_units">%</span>' . 
						'</div>' . 
					'</div>' . 
				'</div>' . 
			'</div>' . 
		'</div>';
	}
	
	
	if ($show) {
		echo total_school_return_content($out);
	} else {
		return $out;
	}
}



/* Get Campaign Donate Button Function */
function cmsmasters_campaign_donate_button($cmsmasters_id, $show = true) {
	$cmsmasters_donations_form_page = get_option('cmsmasters_donations_form_page');
	
	
	$out = '<div class="cmsmasters_campaign_donate_button">' . 
		'<div class="cmsmasters_campaign_donate_button_inner">' . 
			'<a class="button" href="' . add_query_arg('campaign_id', urlencode($cmsmasters_id), get_permalink($cmsmasters_donations_form_page)) . '">' . esc_html__('Donate Now', 'total-school') . '</a>' . 
		'</div>' . 
	'</div>';
	
	
	if ($show) {
		echo total_school_return_content($out);
	} else {
		return $out;
	}
}



/********** Template Functions for Donation **********/

/* Get Donations Heading Function */
function cmsmasters_donation_heading($cmsmasters_id, $tag = 'h1', $link = true, $show = true) { 
	$out = '<header class="cmsmasters_donation_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsmasters_donation_title entry-title">' . 
			($link ? '<a href="' . esc_url(get_permalink()) . '">' : '');
			
				if (
					!is_anonymous_donation($cmsmasters_id) && 
					(
						get_the_donator_meta('firstname', $cmsmasters_id) || 
						get_the_donator_meta('lastname', $cmsmasters_id)
					)
				) {
					$out .= get_the_donator_meta('firstname', $cmsmasters_id) . ' ' . get_the_donator_meta('lastname', $cmsmasters_id);
				} else {
					$out .= esc_html__('Anonym', 'total-school');
				}
				
			$out .= ($link ? '</a>' : '') . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Donation Amount Currency Function */
function cmsmasters_donation_amount_currency($cmsmasters_id, $template_type = 'page', $show = true) { 
	if (get_the_donation_amount_currency($cmsmasters_id)) {
		if ($template_type == 'page') {
			$cmsmasters_donation_amount = get_the_donation_amount_currency($cmsmasters_id);
			
			$out = '<span class="cmsmasters_donation_amount_title">' . esc_html__('Donated', 'total-school') . '</span>' . 
			'<span class="cmsmasters_donation_amount_currency">' . 
				substr($cmsmasters_donation_amount, 0, -3) . 
			'</span>';
		} elseif ($template_type == 'post') {
			$out = '<span class="cmsmasters_donation_amount_currency">' . 
				get_the_donation_amount_currency($cmsmasters_id) . 
				((is_recurring_donation($cmsmasters_id)) ? ' ' . get_the_recurrence_period($cmsmasters_id) : ' ' . esc_html__('One-time', 'total-school')) . 
			'</span>';
		}
		
		
		if ($show) {
			echo total_school_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Donation Amount Currency Function */
function cmsmasters_donation_campaign($cmsmasters_id, $template_type = 'page', $show = true) { 
	if (get_the_donation_campaign($cmsmasters_id)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_donation_campaign">' . 
				get_the_donation_campaign($cmsmasters_id, true) . 
			'</span>';
		} elseif ($template_type == 'post') {
			$out = '<span class="cmsmasters_donation_campaign">' . 
				get_the_donation_campaign($cmsmasters_id, true) . 
			'</span>';
		}
		
		
		if ($show) {
			echo total_school_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Donation Details Info Function */
function cmsmasters_donation_details($cmsmasters_id, $show = true) {
	$out = '';
	
	
	if (!is_anonymous_donation($cmsmasters_id)) {
		$out .= '<div class="cmsmasters_donation_details entry-meta">';
		
			if (get_the_donator_meta('details_title', get_the_ID()) != '') {
				$out .= '<h2>' . get_the_donator_meta('details_title', get_the_ID()) . '</h2>';
			}
			
			$out .= '<div class="cmsmasters_row">' . 
				'<div class="cmsmasters_row_margin">' . 
					'<div class="cmsmasters_column one_half">';
					
						if (get_the_donator_meta('firstname', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('First Name:', 'total-school') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('firstname', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('lastname', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Last Name:', 'total-school') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('lastname', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('email', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Email:', 'total-school') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . '<a href="mailto:' . esc_html(get_the_donator_meta('email', $cmsmasters_id)) . '">' . esc_html(get_the_donator_meta('email', $cmsmasters_id)) . '</a></span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('company', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Company:', 'total-school') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('company', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('phone', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Phone:', 'total-school') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('phone', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('website', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Website:', 'total-school') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value"><a href="' . esc_url(get_the_donator_meta('website', $cmsmasters_id)) . '">' . esc_url(get_the_donator_meta('website', $cmsmasters_id)) . '</a></span>' . 
							'</div>';
						}
						
					$out .= '</div>' . 
					'<div class="cmsmasters_column one_half">';
					
						if (get_the_donator_meta('address', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Address:', 'total-school') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('address', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('city', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('City:', 'total-school') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('city', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('state', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('State / Province:', 'total-school') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('state', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('zip', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Postal / Zip Code:', 'total-school') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('zip', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('country', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Country:', 'total-school') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('country', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
					$out .= '</div>' . 
				'</div>' . 
			'</div>' . 
		'</div>';
	}
	
	
	if ($show) {
		echo total_school_return_content($out);
	} else {
		return $out;
	}
}

