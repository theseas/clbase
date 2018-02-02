<?php

# if post is password protected don't show comments.
if(post_password_required()){
	return;
}

$args = array(
	'status' => 'approve',
	'post_id'=> get_the_ID(),
);

$comments_query = new WP_Comment_Query;
$comments = $comments_query->query($args);
?>

<div id="comments">
<?php if($comments): ?>
<h3><?php _e('Thoughts on ', 'clbase'); the_title(); ?></h3>
<?php	foreach($comments as $comment): ?>
		<div class="comment">
			<p>
				<span><?php _e('Comment by: ', 'clbase');  ?>
				<?php if(get_user_by('login', $comment->comment_author)): ?>
					<a href="<?php echo esc_url(bloginfo('url') . '/author/' . $comment->comment_author); ?>"><?php echo $comment->comment_author; ?></a>
				<?php 
					else: 
						echo $comment->comment_author;
					endif;
				?>
				</span>
				<span><?php echo __("Posted on ", 'clbase') . $comment->comment_date; ?> </span>
			</p>
			<p><a rel="nofollow" href="<?php echo esc_url($comment->comment_author_url);?>"><?php echo $comment->comment_author_url; ?></a></p>
			<p> <?php echo $comment->comment_content; ?> </p>
			<div class="comment-controls">
				<span><?php edit_comment_link(__('Edit Comment', 'clbase')); ?></span>
			</div> <!-- END .comment-controls -->
		</div> <!-- END .comment -->

<?php
	endforeach;
else:
	_e('This post has no comments.', 'clbase');
endif;

comment_form();
?>

</div> <!-- END #comments -->

