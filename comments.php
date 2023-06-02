<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.7
 * 
 * Comments Template
 * Created by CMSMasters
 * 
 */


if (post_password_required()) { 
	echo '<p class="nocomments">' . esc_html__('This post is password protected. Enter the password to view comments.', 'total-school') . '</p>';
	
	
    return;
}


if (comments_open()) {
	if (have_comments()) {
		echo '<aside id="comments" class="post_comments">' . "\n" . 
			'<h4 class="post_comments_title">';
		
		
		comments_number(esc_attr__('No Comments', 'total-school'), esc_attr__('Comment', 'total-school') . ' (1)', esc_attr__('Comments', 'total-school') . ' (%)');
		
		
		echo '</h4>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="project_navi">';
				
				if (get_previous_comments_link()) {
					echo '<span class="fl">';
						
						previous_comments_link('&larr; ' . esc_attr__('Older Comments', 'total-school'));
						
					echo '</span>';
				}
				
				
				if (get_next_comments_link()) {
					echo '<span class="fr">';
						
						next_comments_link(esc_attr__('Newer Comments', 'total-school') . ' &rarr;');
						
					echo '</span>';
				}
				
			echo '</aside>';
		}
		
		
		echo '<ol class="commentlist">' . "\n";
		
		
		wp_list_comments(array( 
			'type' => 'comment', 
			'callback' => 'total_school_mytheme_comment' 
		));
		
		
		echo '</ol>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="project_navi">';
				
				if (get_previous_comments_link()) {
					echo '<span class="fl">';
						
						previous_comments_link('&larr; ' . esc_attr__('Older Comments', 'total-school'));
						
					echo '</span>';
				}
				
				
				if (get_next_comments_link()) {
					echo '<span class="fr">';
						
						next_comments_link(esc_attr__('Newer Comments', 'total-school') . ' &rarr;');
						
					echo '</span>';
				}
				
			echo '</aside>';
		}
		
		
		echo '</aside>';
	}
	
	
	$form_fields =  array( 
		'author' => '<p class="comment-form-author">' . "\n" . 
			'<input type="text" id="author" name="author" value="' . esc_attr($commenter['comment_author']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . ' placeholder="' . esc_attr__('Your name', 'total-school') . (($req) ? ' *' : '') . '" />' . "\n" . 
		'</p>' . "\n", 
		'email' => '<p class="comment-form-email">' . "\n" . 
			'<input type="text" id="email" name="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . ' placeholder="' . esc_attr__('Your email', 'total-school') . (($req) ? ' *' : '') . '" />' . "\n" . 
		'</p>' . "\n" 
	);
	
	
	if (get_option('show_comments_cookies_opt_in') == '1') {
		$form_fields['cookies'] = '<p class="comment-form-cookies-consent">' . "\n" . 
			'<input type="checkbox" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" value="yes"' . (empty($commenter['comment_author_email']) ? '' : ' checked="checked"') . ' />' . "\n" . 
			'<label for="wp-comment-cookies-consent">' . esc_html__('Save my name, email, and website in this browser for the next time I comment.', 'total-school') . '</label>' . "\n" . 
		'</p>' . "\n";
	}
	
	
	echo "\n\n";
	
	
	comment_form(array( 
		'fields' => 			apply_filters('comment_form_default_fields', $form_fields), 
		'comment_field' => 		'<p class="comment-form-comment">' . 
									'<textarea name="comment" id="comment" cols="67" rows="2" placeholder="' . esc_attr__('Message', 'total-school') . '"></textarea>' . 
								'</p>', 
		'must_log_in' => 		'<p class="must-log-in">' . 
									esc_html__('You must be', 'total-school') . 
									' <a href="' . esc_url(wp_login_url(apply_filters('the_permalink', get_permalink()))) . '">' 
										. esc_html__('logged in', 'total-school') . 
									'</a> ' 
									. esc_html__('to post a comment', 'total-school') . 
								'.</p>' . "\n", 
		'logged_in_as' => 		'<p class="logged-in-as">' . 
									esc_html__('Logged in as', 'total-school') . 
									' <a href="' . esc_url(admin_url('profile.php')) . '">' . 
										$user_identity . 
									'</a>. ' . 
									'<a class="all" href="' . esc_url(wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '" title="' . esc_attr__('Log out of this account', 'total-school') . '">' . 
										esc_html__('Log out?', 'total-school') . 
									'</a>' . 
								'</p>' . "\n", 
		'comment_notes_before' => 	'<p class="comment-notes">' . 
										esc_html__('Your email address will not be published.', 'total-school') . 
									'</p>' . "\n", 
		'comment_notes_after' => 	'', 
		'id_form' => 				'commentform', 
		'id_submit' => 				'submit', 
		'title_reply' => 			esc_html__('Leave a Reply', 'total-school'), 
		'title_reply_to' => 		esc_html__('Leave your comment to', 'total-school'), 
		'cancel_reply_link' => 		esc_html__('Cancel Reply', 'total-school'), 
		'label_submit' => 			esc_html__('Add Comment', 'total-school') 
	));
}

