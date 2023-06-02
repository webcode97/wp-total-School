<?php 
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.0
 * 
 * Admin Panel Post, Project, Profile & Donations Campaign Settings
 * Created by CMSMasters
 * 
 */


function total_school_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'total-school');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'total-school');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'total-school');
	}
	
	if (CMSMASTERS_DONATIONS) {
		$tabs['campaign'] = esc_attr__('Campaign', 'total-school');
	}
	
	
	return $tabs;
}


function total_school_options_single_sections() {
	$tab = total_school_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'total-school');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'total-school');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'total-school');
		
		
		break;
	case 'campaign':
		$sections = array();
		
		$sections['campaign_section'] = esc_attr__('Donations Campaign Options', 'total-school');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function total_school_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = total_school_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'total-school'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_post_share_box', 
			'title' => esc_html__('Sharing Box', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'total-school'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'popular', 
			'choices' => array( 
				esc_html__('Show Related Posts', 'total-school') . '|related', 
				esc_html__('Show Popular Posts', 'total-school') . '|popular', 
				esc_html__('Show Recent Posts', 'total-school') . '|recent', 
				esc_html__('Hide More Posts Box', 'total-school') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'total-school'), 
			'desc' => esc_html__('posts', 'total-school'), 
			'type' => 'number', 
			'std' => '3', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'total-school' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'total-school'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'total-school'), 
			'type' => 'number', 
			'std' => '1', 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'total-school'), 
			'desc' => esc_html__('Enter a project details block title', 'total-school'), 
			'type' => 'text', 
			'std' => 'Project details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'total-school'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'popular', 
			'choices' => array( 
				esc_html__('Show Related Projects', 'total-school') . '|related', 
				esc_html__('Show Popular Projects', 'total-school') . '|popular', 
				esc_html__('Show Recent Projects', 'total-school') . '|recent', 
				esc_html__('Hide More Projects Box', 'total-school') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'total-school'), 
			'desc' => esc_html__('projects', 'total-school'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'total-school'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'total-school'), 
			'type' => 'number', 
			'std' => '1', 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'total-school'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'total-school'), 
			'type' => 'text', 
			'std' => 'project', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'total-school'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'total-school'), 
			'type' => 'text', 
			'std' => 'pj-categs', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'total-school' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'total-school'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'total-school'), 
			'type' => 'text', 
			'std' => 'pj-tags', 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'total-school' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'total-school' . '_profile_post_featured_image', 
			'title' => esc_html__('Profile Featured Image', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'total-school' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'total-school'), 
			'desc' => esc_html__('Enter a profile details block title', 'total-school'), 
			'type' => 'text', 
			'std' => 'Profile details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'total-school' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'total-school' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'total-school' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'total-school' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'total-school' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'total-school' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'total-school'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'total-school'), 
			'type' => 'text', 
			'std' => 'profile', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'total-school' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'total-school'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'total-school'), 
			'type' => 'text', 
			'std' => 'pl-categs', 
			'class' => '' 
		);
		
		
		break;
	case 'campaign':
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_campaign_layout', 
			'title' => esc_html__('Layout Type', 'total-school'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'total-school') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_campaign_title', 
			'title' => esc_html__('Campaign Title', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_campaign_date', 
			'title' => esc_html__('Campaign Date', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_campaign_cat', 
			'title' => esc_html__('Campaign Categories', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_campaign_author', 
			'title' => esc_html__('Campaign Author', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_campaign_comment', 
			'title' => esc_html__('Campaign Comments', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_campaign_tag', 
			'title' => esc_html__('Campaign Tags', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_campaign_like', 
			'title' => esc_html__('Campaign Likes', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_campaign_nav_box', 
			'title' => esc_html__('Campaign Navigation Box', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_campaign_share_box', 
			'title' => esc_html__('Sharing Box', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_campaign_author_box', 
			'title' => esc_html__('About Author Box', 'total-school'), 
			'desc' => esc_html__('show', 'total-school'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_more_campaigns_box', 
			'title' => esc_html__('More Campaigns Box', 'total-school'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'related', 
			'choices' => array( 
				esc_html__('Show Related Campaigns', 'total-school') . '|related', 
				esc_html__('Show Popular Campaigns', 'total-school') . '|popular', 
				esc_html__('Show Recent Campaigns', 'total-school') . '|recent', 
				esc_html__('Hide More Campaigns Box', 'total-school') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_more_campaigns_count', 
			'title' => esc_html__('More Campaigns Box Items Number', 'total-school'), 
			'desc' => esc_html__('campaigns', 'total-school'), 
			'type' => 'number', 
			'std' => '3', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_more_campaigns_pause', 
			'title' => esc_html__('More Campaigns Slider Pause Time', 'total-school'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'total-school'), 
			'type' => 'number', 
			'std' => '0', 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'total-school' . '_donations_campaign_slug', 
			'title' => esc_html__('Campaign Slug', 'total-school'), 
			'desc' => esc_html__('Enter a page slug that should be used for your donations campaign single item', 'total-school'), 
			'type' => 'text', 
			'std' => 'campaign', 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return $options;
}

