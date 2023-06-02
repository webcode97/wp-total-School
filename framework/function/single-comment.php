<?php 
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.0
 * 
 * Custom Single Comment Template
 * Created by CMSMasters
 * 
 */


function total_school_mytheme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>" class="comment-body cmsmasters_comment_item">
			<div class="comment-content cmsmasters_comment_item_cont">
				<?php 
				comment_text();
				
				if ($comment->comment_approved == '0') {
					echo '<p>' . 
						'<em>' . esc_html__('Your comment is awaiting moderation.', 'total-school') . '</em>' . 
					'</p>';
				}
				?>
			</div>
			<div class="comment-content cmsmasters_comment_item_meta_wrap">
				<figure class="cmsmasters_comment_item_avatar">
					<?php echo get_avatar($comment->comment_author_email, 68, get_option('avatar_default')) . "\n"; ?>
				</figure>
			
				<h3 class="fn cmsmasters_comment_item_title"><?php echo get_comment_author_link(); ?></h3>
				
				<?php 
				echo '<abbr class="published cmsmasters_comment_item_date" title="' . get_comment_date() . '">' . 
					get_comment_date() . 
				'</abbr>';
				?>
				
				<div class="comment-content cmsmasters_comment_item_buttons">
				<?php 
					comment_reply_link(array_merge($args, array( 
						'depth' => $depth, 
						'max_depth' => $args['max_depth'], 
						'reply_text' => esc_attr__('Reply', 'total-school') 
					)));
					
					edit_comment_link(esc_attr__('Edit', 'total-school'), '', '');
				?>
				</div>
			</div>
        </div>
    <?php 
}

