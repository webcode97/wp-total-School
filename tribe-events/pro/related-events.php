<?php
/**
 * Related Events Template
 * The template for displaying related events on the single event page.
 *
 * You can recreate an ENTIRELY new related events view by doing a template override, and placing
 * a related-events.php file in a tribe-events/pro/ directory within your theme directory, which
 * will override the /views/related-events.php.
 *
 * You can use any or all filters included in this file or create your own filters in
 * your functions.php. In order to modify or extend a single filter, please see our
 * readme on templates hooks and filters
 *
 * @package TribeEventsCalendarPro
 * 
 * @cmsmasters_package 	Total School
 * @cmsmasters_version 	1.0.0
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$posts = tribe_get_related_posts();

if ( is_array( $posts ) && ! empty( $posts ) ) : ?>

<h5 class="tribe-events-related-events-title"><?php printf( esc_html__( 'Related %s', 'total-school' ), tribe_get_event_label_plural() ); ?></h5>

<ul class="tribe-related-events tribe-clearfix hfeed vcalendar clearfix">
	<?php foreach ( $posts as $post ) : ?>
	<li>
		<div class="tribe-related-events-thumbnail">
			<a href="<?php echo esc_url( tribe_get_event_link( $post ) ); ?>" class="url" rel="bookmark">
				<?php echo (has_post_thumbnail($post->ID)) ? get_the_post_thumbnail($post->ID, 'cmsmasters-project-thumb') : '<span class="cmsmasters_events_img_placeholder cmsmasters_theme_icon_image"></span>'; ?>
			</a>
		</div>
		<div class="tribe-related-event-info">
			<a href="<?php echo esc_url(tribe_get_event_link( $post )); ?>" class="url tribe-related-events-title summary" rel="bookmark"><?php echo esc_html(get_the_title( $post->ID )); ?></a>
		</div>
	</li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>