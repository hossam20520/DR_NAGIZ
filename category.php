<?php  get_header() ?>

<div class="container">
<div class="row">


<?php if (is_category('reviews')) : ?>

<?php get_template_part( 'reviews', 'home' );  ?>
<?php elseif (is_category('compares')) : ?>
<?php get_template_part( 'compares', 'home' );  ?>
<?php elseif (is_category('videos')) : ?>

<?php get_template_part( 'videos', 'home' );  ?>


<?php elseif (is_category('ps')) : ?>
    
<?php get_template_part( 'ps', 'home' );  ?>
<?php else : ?>
<p>This is some generic text to describe all other category pages,
I could be left blank</p>
<?php endif; ?>
</div>

</div>
<?php   get_footer()  ?>
