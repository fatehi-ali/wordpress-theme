<?php
if (post_password_required()) {
	return;
}
?>
<div id="comments" class="comments-area">

	<?php if (have_comments()) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ('1' === $comments_number) {
				/* translators: %s: Post title. */
				printf(_x('One thought on &ldquo;%s&rdquo;', 'comments title', 'twentyfifteen'), get_the_title());
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_nx(
						'%1$s thought on &ldquo;%2$s&rdquo;',
						'%1$s thoughts on &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'twentyfifteen'
					),
					number_format_i18n($comments_number),
					get_the_title()
				);
			}
			?>
		</h2>
	<?php endif; // have_comments() 
	?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
	?>
		<p class="no-comments"><?php _e('Comments are closed.', 'twentyfifteen'); ?></p>
	<?php endif; ?>
	<?php comment_form([
		'fields' => [
			'author' => ' <div class="col-12 col-md-12">
			<div class="row"><div class="col-6">
				<label for="name">نام شما</label>
				<input type="text" name="author" placeholder="مثلا علی حاجی محمدی">
			  </div>',
			'email' => '<div class="col-6">
			  <label for="email">ایمیل شما</label>
			  <input type="email" name="email" placeholder="ali@alistore.com"></div></div></div>',
	        'cookies'=>''
			],
		'comment_field' => '<div class="col-12 col-md-12">
		<textarea name="comment" placeholder="متن دیدگاه شما"  ></textarea>
	    </div>',
		'submit_button' => '<button>ارسال دیدگاه</button>',
		'comment_notes_before'=>'',
		'title_reply'=>'', //دیدگاهتان را بنویسید
		'cancel_reply_link' => '<strong style="font-size: 18px;color: black;margin-right:3px;">لغو پاسخ</strong>',
		'class_form'=>'axax'
		

	]);
	?>
</div><!-- .comments-area -->