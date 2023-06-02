<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.0
 * 
 * Images Page Template
 * Created by CMSMasters
 * 
 */


get_header();


echo '<!-- Start Content -->' . "\n" . 
'<div class="middle_content entry">';


if (have_posts()) : the_post();
	echo '<div class="cmsmasters_attach_img image-attachment">';
		
		$metadata = wp_get_attachment_metadata();
		
		echo '<div class="cmsmasters_attach_img_info entry-meta">'; 
			edit_post_link(esc_html__('Edit Media', 'total-school'), '<h6 class="cmsmasters_attach_img_edit">', '</h6>');
			
			echo '<h6 class="cmsmasters_attach_img_meta">' . esc_html__('Published', 'total-school') . ' <abbr class="published" title="' . esc_attr(get_the_date()) . '">' . get_the_date() . '</abbr> ' . esc_html__('at', 'total-school') . ' ' . esc_html($metadata['width']) . '&times;' . esc_html($metadata['height']) . ' ' . esc_html__('in', 'total-school') . ' ' . '<a href="' . esc_url(get_permalink($post->post_parent)) . '" title="' . cmsmasters_title($post->post_parent, false) . '">' . cmsmasters_title($post->post_parent, false) . '</a>.</h6>' . 
		'</div>' . 
		total_school_thumb(get_the_ID(), 'full', false, 'img_' . get_the_ID(), true, true, true, false, get_the_ID());
		
		
		comments_template();
		
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!--  Finish Content -->' . "\n\n";


get_footer();

