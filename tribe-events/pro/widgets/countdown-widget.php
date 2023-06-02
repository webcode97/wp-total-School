<?php
/**
 * Events Pro Countdown Widget
 * This is the template for the output of the event countdown widget.
 * All the items are turned on and off through the widget admin.
 * There is currently no default styling, which is highly needed.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/widgets/countdown-widget.php
 *
 * @package TribeEventsCalendarPro
 * 
 * @cmsmasters_package 	Total School
 * @cmsmasters_version 	1.0.0
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<table class="tribe-countdown-timer tribe-clearfix">
	<tr>
		<td>DD<span><?php esc_html_e( 'days', 'total-school' ); ?></span></td>
		
		<td class="tribe-countdown-timer-separator">:<span>-</span></td>
		
		<td>HH<span><?php esc_html_e( 'hrs', 'total-school' ); ?></span></td>
		
		<td class="tribe-countdown-timer-separator">:<span>-</span></td>
		
		<td>MM<span><?php esc_html_e( 'mins', 'total-school' ); ?></span></td>
		
		<?php if ( $show_seconds ) : ?>
		<td class="tribe-countdown-timer-separator">:<span>-</span></td>
		
		<td>SS<span><?php esc_html_e( 'secs', 'total-school' ); ?></span></td>
		<?php endif; ?>
	</tr>
</table>
