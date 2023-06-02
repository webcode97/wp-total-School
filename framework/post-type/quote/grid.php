<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Quotes Grid Format Template
 * Created by CMSMasters
 * 
 */


?>

<!-- Start Grid Article -->
<?php
$unique_id = 'cmsmasters_quote_inner_' . uniqid();


if ($quote_color != '') {
	echo "<style type=\"text/css\">
		#{$unique_id} .cmsmasters_quote_content_line {
			background-color:{$quote_color};
		}
		
		#{$unique_id} .cmsmasters_quote_site a {
			color:{$quote_color};
		}
	</style>";
}
?>
<article id="<?php echo esc_attr($unique_id); ?>" class="cmsmasters_quote_inner">
<?php 	
	echo '<span class="cmsmasters_quote_content_line"></span>' . 
	cmsmasters_divpdel('<div class="cmsmasters_quote_content">' . 
		do_shortcode(wpautop($quote_content)) . 
	'</div>');
	
	
	if ($quote_image != '' || $quote_name != '' || $quote_subtitle != '' || $quote_website != '' || $quote_link != '') {
		echo '<div class="cmsmasters_quote_img_info_wrap' . ($quote_image == '' ? ' cmsmasters_no_quote_img' : '') . '">';
			
			if ($quote_image != '') {
				echo '<figure class="cmsmasters_quote_image">' . 
					wp_get_attachment_image(strstr($quote_image, '|', true), 'cmsmasters-square-thumb') . 
				'</figure>';
			}
			
			
			if ($quote_name != '' || $quote_subtitle != '' || $quote_website != '' || $quote_link != '') {
				echo '<div class="cmsmasters_quote_info_wrap">';
					
					if ($quote_name != '') {
						echo '<header class="cmsmasters_quote_header">' . 
							'<h4 class="cmsmasters_quote_title">' . esc_html($quote_name) . '</h4>' . 
						'</header>';
					}
					
					if ($quote_subtitle != '' || $quote_website != '' || $quote_link != '') {
						echo '<div class="cmsmasters_quote_subtitle_wrap">' . 
							
							($quote_subtitle != '' ? '<p class="cmsmasters_quote_subtitle">' . esc_html($quote_subtitle) . '</p>' : '');
							
							
							if ($quote_website != '' || $quote_link != '') {
								echo '<span class="cmsmasters_quote_site">' . 
									($quote_link != '' ? '<a href="' . esc_url($quote_link) . '" target="_blank">' : '') . 
									
									($quote_website != '' ? esc_html($quote_website) : esc_html($quote_link)) . 
									
									($quote_link != '' ? '</a>' : '') . 
								'</span>';
							}
							
						echo '</div>';
					}
					
				echo '</div>';
			}
			
		echo '</div>';
	}
	
?>
</article>
<!-- Finish Grid Article -->

