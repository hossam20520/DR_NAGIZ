<?php  kdmfi_the_featured_image( 'featured-image-2', 'full' ); ?>
<!DOCTYPE html>
<html <?php language_attributes();    ?> >
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php bloginfo('name') ?></title>
     <link rel="icon" href="<?php echo get_template_directory_uri()  ?>/images/c-product2.png">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head() ?>
  </head>
  <body>


    <div class="main-bar">
             <a href="index.html" title="home"><img class="logo" src="<?php echo get_template_directory_uri()  ?>/images/c-product2.png"></a>

             <form id="demo-2">
                 <input type="search" name = "s" id="search" value="<?php the_search_query();   ?>" placeholder="Search">
             </form>

            
         </div>

         <nav>
             <input type="checkbox" class="trigger" id="mainNavButton">
             <label for="mainNavButton"> Menu
               <div class="burger">
                 <span>&nbsp;</span>
                 <span>&nbsp;</span>
                 <span>&nbsp;</span>
               </div>
             </label>

             <?php fire_menu(); ?>
         </nav>
