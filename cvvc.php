<?php

$args = array(
'post_type' => 'post',
'orderby' => 'date',
'order' => 'DESC',
'posts_per_page' => 1,
'category_name' => 'Reviews',
'paged' => get_query_var('paged')
);
$q = new $wp_query($args);
if($q->have_posts()){
$q->the_post();
$q->the_title();

}



 ?>
