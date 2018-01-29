<?php

$args = array(
	'status' => 'approve'
);

$comments_query = new WP_Comment_Query;
$comments = $comments_query->query($args);

if($comments){
	foreach($comments as $comment){
		echo '<p>' . $comment->comment_content . '</p>'
	}
}else{
	__('No comments found.');
}

?>
