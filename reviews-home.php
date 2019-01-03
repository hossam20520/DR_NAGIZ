
         <aside class="col-md-4">
             <div class="sidebar">

                 <div class="side-card">
                    <?php dynamic_sidebar( 'slider1' ); ?>
                 </div>


             </div>

             <div class="sidebar">
                 <h4>Most Viewed</h4>
                 <div class="side-card">
                     <img src="<?php echo get_template_directory_uri()  ?>/images/r-product.jpg">
                     <div class="content">
                         <h3>17 oz. Waterless Wash and Shine</h3>
                          <span>Review</span>
                     <a href="#">Show More</a>
                     </div>
                 </div>
                 <div class="side-card">
                     <img src="<?php echo get_template_directory_uri()  ?>/images/c-product.jpg">
                     <div class="content">
                         <h3>17 oz. Waterless Wash and Shine</h3>
                         <span>Compare</span>
                     <a href="#">Show More</a>
                     </div>
                 </div>
                 <div class="side-card">
                     <img src="<?php echo get_template_directory_uri()  ?>/images/c-product2.png">
                     <div class="content">
                         <h3>17 oz. Waterless Wash and Shine</h3>
                         <span>P&amp;S</span>
                     <a href="#">Show More</a>
                     </div>
                 </div>
             </div>

         </aside>

<?php

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'category_name' => 'reviews',
'cat'   => 6



);
$q = new WP_Query( $args );
if($q->have_posts()){
while($q->have_posts()){
$q->the_post();
 	
?>

<main class="col-md-8 main">
         <div class="card reveiw-card">
              <div class="img-container">
                 <a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('' , ['class'=>'thumbnail' , 'title'=> 'post']) ?></a>
                 <div class="overlay">
                     <div class="category">
                         <img src="<?php echo get_template_directory_uri(); ?>/images/icons/magnifier-b.svg"> Review
                     </div>

                 </div>

             </div>
             <div class="content">
                 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                 <p><?php the_content('...more'); ?></p>
             </div>
         </div>




     </main>
     <aside class="col-md-2">


               </aside>


             <?php }} ?>
			 
			 
			 
			
