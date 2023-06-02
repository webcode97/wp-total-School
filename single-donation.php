<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.0
 * 
 * Single Donation Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_donation_nav_box = get_post_meta(get_the_ID(), 'cmsmasters_donation_nav_box', true) ? get_post_meta(get_the_ID(), 'cmsmasters_donation_nav_box', true) : 'true';


echo '<!-- Start Content -->' . "\n" . 
'<div class="middle_content entry">';


if (have_posts()) : the_post();
	echo '<div class="donations opened-article">' . "\n";


?>
<!-- Start Standard Donation -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_donation_info">
		<?php
		if (!post_password_required() && has_post_thumbnail()) {
			echo '<div class="cmsmasters_donation_info_img">';
				total_school_thumb(get_the_ID(), 'cmsmasters-square-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
			echo '</div>';
		}
		?>
		<div class="cmsmasters_donation_info_cont">
			<?php 
			cmsmasters_donation_heading(get_the_ID(), 'h2', false);
			
			cmsmasters_donation_amount_currency(get_the_ID(), 'post');
			
			cmsmasters_donation_campaign(get_the_ID(), 'post');
			?>
		</div>
	</div>
	<?php
	if (!is_anonymous_donation(get_the_ID()) && get_the_excerpt() != '') {
		echo '<div class="cmsmasters_donation_content entry-content">';
			
			the_excerpt();
			
		echo '</div>';
	}
	
	cmsmasters_donation_details(get_the_ID(), true);
	?>
</article>
<!-- Finish Standard Donation -->
<?php 
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!--  Finish Content -->' . "\n\n";


get_footer();

