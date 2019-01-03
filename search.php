<?php
/**
 * The template for displaying search results pages
 *

 */

?>

<?php get_header(); ?>
<section>
<hr class="no-margin" />
<div class="blog-container section-content">
<div class="container">
<div class="row">

<div class="col-md-4">
<?php if ( have_posts() ) : ?>
<div class="page-headerc">

<h3 class="page-title"><?php printf( __( 'Search Results for: %s', '_s' ), '
<h3>' . get_search_query() . '</h3>
' ); ?></h3>

</div>
<!-- .page-header -->
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php /*** Run the loop for the search to output the results. */ get_template_part( 'content', 'search' ); ?>
<?php endwhile; ?>
<?php else : ?>
<center><h3 style="
    margin-top: 82px;
    margin-bottom: 210px;
">No results found</h3></center>
<?php endif; ?>
</div>
<div class="col-md-3 col-md-offset-1 margin-sidebar">

</div>
</div>
</div>
</div>
</section>



<?php get_footer();
