<?php get_header(); ?>
<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>


 <?php //the_title(); ?>
 <?php //the_content(); ?>
 <?php //echo get_the_date(); ?>


<?php// endwhile; ?>
<?php //endif; ?>
<?php        
if(has_term('ps', 'category', $post)) {      
   get_template_part('single-ps', 'ps');
} elseif(has_term('reviews', 'category', $post)) {
   // use default template file single-template.php
   //get_template_part('single-template');
    get_template_part('single-rewiew', 'rewiew');
	echo  '<hr>';
	 dynamic_sidebar( 'related' );
	 comments_template();
	 
	 
	/*$args_form = array(
	'fields' => array(
	'author' =>  '<div class="form-group"><label> Name </label> This Is Name Field</div>',
	'email' => '<div class="form-group"><label> Email </label> This Is Email Field</div>',
	'url' =>  '<div class="form-group"><label> Url </label> This Is Url Field</div>'
	
	),
	'comment_field' => '<div class="form-group">Textarea</div>',
	
	);*/
	 
comment_form();	 
}elseif(has_term('compares', 'category', $post)){
	get_template_part('single-compare', 'compare');
}
?>
<?php get_footer(); ?>
