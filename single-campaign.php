<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Single Campaign Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = total_school_get_global_options();


list($cmsmasters_layout) = total_school_theme_page_layout_scheme();


$campaign_tags = get_the_terms(get_the_ID(), 'cp-tags');


$cmsmasters_campaign_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_campaign_sharing_box', true);

$cmsmasters_campaign_author_box = get_post_meta(get_the_ID(), 'cmsmasters_campaign_author_box', true);

$cmsmasters_campaign_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_campaign_more_posts', true);

$cmsmasters_campaign_title = get_post_meta(get_the_ID(), 'cmsmasters_campaign_title', true);


echo '<!-- Start Content -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr">' . "\n\t";
} else {
	echo '<div class="middle_content entry">';
}


if (have_posts()) : the_post();
	echo '<div class="campaigns opened-article">' . "\n";


?>
<!-- Start Standard Campaign -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_campaign_cont">
	<?php
		if (!post_password_required() && has_post_thumbnail()) {
			total_school_thumb(get_the_ID(), 'post-thumbnail', false, false, true, true, true, true, false);
		}
		
		
		echo '<div class="campaign_meta_wrap">';
		
			cmsmasters_campaign_target(get_the_ID(), true);
			
			cmsmasters_campaign_donations_count(get_the_ID(), true);
			
			cmsmasters_campaign_donated(get_the_ID(), 'post');
			
			cmsmasters_campaign_donate_button(get_the_ID(), true);
			
		echo '</div>';
		
		
		if ($cmsmasters_campaign_title == 'true') {
			cmsmasters_campaign_heading(get_the_ID(), 'h2', false);
		}
		
		
		if ( 
			$cmsmasters_option['total-school' . '_donations_campaign_date'] || 
			$cmsmasters_option['total-school' . '_donations_campaign_author'] || 
			$cmsmasters_option['total-school' . '_donations_campaign_cat'] || 
			$cmsmasters_option['total-school' . '_donations_campaign_tag'] || 
			$cmsmasters_option['total-school' . '_donations_campaign_like'] || 
			$cmsmasters_option['total-school' . '_donations_campaign_comment'] 
		) {
			echo '<div class="cmsmasters_campaign_cont_info entry-meta' . ((get_the_content() == '') ? ' no_bdb' : '') . '">';
				
				cmsmasters_campaign_date('post');
				
				cmsmasters_campaign_category(get_the_ID(), 'cp-categs', 'post');
				
				cmsmasters_campaign_author('post');
				
				cmsmasters_campaign_tags(get_the_ID(), 'cp-tags', 'post');
				
				if ( 
					$cmsmasters_option['total-school' . '_donations_campaign_like'] || 
					$cmsmasters_option['total-school' . '_donations_campaign_comment'] 
				) {
					echo '<div class="cmsmasters_campaign_meta_info">';
						
						cmsmasters_campaign_comments('post');
						
						cmsmasters_campaign_like('post');
						
					echo '</div>';
				}
				
			echo '</div>';
		}
		
		
		if (get_the_content() != '') {
			echo '<div class="cmsmasters_campaign_content entry-content">';
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'total-school') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => '<span>', 
					'link_after' => '</span>' 
				));
				
			echo '<div class="cl"></div>' . 
			'</div>';
		}
	?>
	</div>
</article>
<!-- Finish Standard Campaign -->
<?php
	
	
	if ($cmsmasters_campaign_sharing_box == 'true') {
		total_school_sharing_box(esc_html__('Share this campaign?', 'total-school'), 'h4');
	}
	
	
	if ($cmsmasters_campaign_author_box == 'true') {
		total_school_author_box(esc_html__('About author', 'total-school'), 'h4');
	}
	
	
	if ($campaign_tags) {
		$tgsarray = array();
		
		foreach ($campaign_tags as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}  
	} else {
		$tgsarray = '';
	}
	
	
	if ($cmsmasters_campaign_more_posts != 'hide') {
		total_school_related( 
			'h4', 
			$cmsmasters_campaign_more_posts, 
			$tgsarray, 
			$cmsmasters_option['total-school' . '_donations_more_campaigns_count'], 
			$cmsmasters_option['total-school' . '_donations_more_campaigns_pause'], 
			'campaign', 
			'cp-tags' 
		);
	}
	
	
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

