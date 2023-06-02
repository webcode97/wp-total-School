<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Website Footer Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = total_school_get_global_options();

$cmsmasters_donation_nav_box = get_post_meta(get_the_ID(), 'cmsmasters_donation_nav_box', true) ? get_post_meta(get_the_ID(), 'cmsmasters_donation_nav_box', true) : 'true';
?>


		</div>
	</div>
</div>

<?php
	$cmsmasters_post_type = get_post_type();
	
	
	if (
		is_single() && 
		!is_archive()
	) {
		if (
			($cmsmasters_option['total-school' . '_blog_post_nav_box'] && $cmsmasters_post_type == 'post') || 
			($cmsmasters_option['total-school' . '_donations_campaign_nav_box'] && $cmsmasters_post_type == 'campaign') || 
			($cmsmasters_option['total-school' . '_profile_post_nav_box'] && $cmsmasters_post_type == 'profile') || 
			($cmsmasters_option['total-school' . '_portfolio_project_nav_box'] && $cmsmasters_post_type == 'project') || 
			($cmsmasters_donation_nav_box == 'true' && $cmsmasters_post_type == 'donation')
		) {
			total_school_prev_next_posts();
		} elseif (
			CMSMASTERS_EVENTS_CALENDAR && 
			$cmsmasters_post_type == 'tribe_events'
		) {
			total_school_prev_next_events();
		}
	}
?>

<!--  Finish Middle -->
<?php 

get_sidebar('bottom');

?>
<a href="javascript:void(0);" id="slide_top" class="cmsmasters_theme_icon_slide_top"></a>
</div>
<!--  Finish Main -->

<!--  Start Footer -->
<footer id="footer" class="<?php echo 'cmsmasters_color_scheme_' . $cmsmasters_option['total-school' . '_footer_scheme'] . ($cmsmasters_option['total-school' . '_footer_type'] == 'default' ? ' cmsmasters_footer_default' : ' cmsmasters_footer_small'); ?>">
	<div class="footer_inner">
		<div class="footer_inner_wrap">
			<?php 
				total_school_footer_logo($cmsmasters_option);
				
				
				total_school_get_footer_custom_html($cmsmasters_option);
				
				
				total_school_get_footer_nav($cmsmasters_option);
				
				
				total_school_get_footer_social_icons($cmsmasters_option);
			?>
			<span class="footer_copyright copyright">
			<?php 
			if (function_exists('the_privacy_policy_link')) {
				the_privacy_policy_link('', ' / ');
			}
			
			echo esc_html(stripslashes($cmsmasters_option['total-school' . '_footer_copyright']));
			?>
			</span>
		</div>
	</div>
</footer>
<!--  Finish Footer -->


</div>
<span class="cmsmasters_responsive_width"></span>
<!--  Finish Page -->

<?php wp_footer(); ?>
</body>
</html>
