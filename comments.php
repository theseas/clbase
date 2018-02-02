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

if($comments): ?>
<div id="comments">
<?php	foreach($comments as $comment): ?>
		<div class="comment">
			<p><?php echo $comment->comment_author; ?></p>
			<p><?php echo $comment->comment_author_email; ?></p>
			<p> <?php echo $comment->comment_content; ?> </p>
		</div>

<?php
	endforeach;
	comment_form();
else:
	_e('This post has no comments.', 'clbase');
endif;

?>

