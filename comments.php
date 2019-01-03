<?php

if(comments_open()){?>
	
	<h3 class="comments-count"> <?php comments_number('0 Comments' , '1 Comment' , '% Comments' );       ?>   </h3>
	
	<?php
	echo '<ul class="list_unstyled comments-list">';
	$commrnts_args = array(
	'max_depth' => 3 , 
	'type'   =>  'comment',
	'avatar_size' => 64
	
	);
	wp_list_comments($commrnts_args);
	echo '</ul>';
}else{
	echo "not open";
	
}














?>