<?php  get_header() ?>

<header>

<video muted autoplay loop>
   <source src="<?php echo get_template_directory_uri()  ?>/videos/video.mp4" type="video/mp4">
   Your browser does not support HTML5 video.
 </video>

 <div class="overlay"></div>

 <div class="intro">
     <h1>Dr Nagi's</h1>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun</p>
     
 </div>

</header>
<div class="container">
     <div class="row">
         <aside class="col-md-4">
             <div class="sidebar wow fadeInLeft" data-wow-duration="1.5s">

                 <div class="side-card">
                    <?php dynamic_sidebar( 'slider1' ); ?>
                 </div>


             </div>
			            <?php

           $args = array(
           'post_type' => 'post',
          'post_status' => 'publish',
          'category_name' => 'reviews',
           'cat'   => 6



           );
           $q = new WP_Query( $args );
           if($q->have_posts()){

           $q->the_post();

?>

             <div class="sidebar wow fadeInLeft" data-wow-duration="1.5s">
                 <h4>Recent Posts</h4>
                 <div class="side-card">
                     <?php the_post_thumbnail('' , ['class'=>'thumbnail' , 'title'=> 'post']) ?>
                     <div class="content">
                         <h3><?php the_title(); ?></h3>
                          <span>Review</span>
						 
                     <a href="<?php the_permalink(); ?>">Show More</a>
                     </div>
                 </div>
				 
		   <?php  } ?>
		   
		   
		   
		   					<?php

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'category_name' => 'ps',
'posts_per_page' =>2,
'cat'   => 4



);
$q = new WP_Query( $args );
if($q->have_posts()){
while($q->have_posts()){
$q->the_post();

?>
		   
                 <div class="side-card">
                     <?php the_post_thumbnail('' , ['class'=>'thumbnail' , 'title'=> 'post']) ?>
                     <div class="content">
                         <h3><?php  the_title();  ?></h3>
                         <span><?php  the_category();  ?></span>
                     <a href="<?php the_permalink(); ?>">Show More</a>
                     </div>
                 </div>
                 <div class="side-card">
                     <?php the_post_thumbnail('' , ['class'=>'thumbnail' , 'title'=> 'post']) ?>
                     <div class="content">
                         <h3><?php  the_title();  ?></h3>
                         <span><?php  the_category();  ?></span>
                     <a href="<?php the_permalink(); ?>">Show More</a>
                     </div>
                 </div>
				 
<?php  }}  ?>
             </div>

         </aside>
         <main class="col-md-8 main">
           <!--  start review -->
           <?php

           $args = array(
           'post_type' => 'post',
          'post_status' => 'publish',
          'category_name' => 'reviews',
           'cat'   => 6



           );
           $q = new WP_Query( $args );
           if($q->have_posts()){

           $q->the_post();

?>
          <div class="card reveiw-card wow fadeInUp" data-wow-duration="1.5s">
            <a href="<?php echo bloginfo('url')  ?>/category/reviews">  <div class="img-container">

              
                  <?php the_post_thumbnail('' , ['class'=>'thumbnail' , 'title'=> 'post']) ?>


                  <div class="overlay">
                      <div class="category">
                          <img src="<?php echo get_template_directory_uri()  ?>/images/icons/magnifier-b.svg"> Review
                      </div>

                  </div>
                
              </div></a>
              <div class="content">

                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p><?php the_content(__('...See more <span class="meta-nav">&rarr;</span>', 'nagiz')); ?> </p>
              </div>
			 <span class="vi"><img class="v" src="<?php echo get_template_directory_uri()  ?>/images/icons/eye.svg"> <?php echo do_shortcode('[post-views]');?></span>
          </div>

          <?php

           }



            ?>

<!-- end review  -->



<!-- start compaires -->

<?php

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'category_name' => 'compares',
'cat'   => 5



);
$q = new WP_Query( $args );
if($q->have_posts()){

$q->the_post();

?>

            <!-- <div class="card compare-card wow fadeInUp" data-wow-duration="1.5s">
                 
                 <div class="content">
                     <h2><a href="<?php //the_permalink(); ?>"><?php the_title(); ?></a></h2>
                     <p> <?php// the_content(); ?></p>
                 </div>
             </div>-->
			 
			           <div class="card compare-card wow fadeInUp" data-wow-duration="1.5s">
                        <div class="img-container">
                            <img src="<?php  echo get_template_directory_uri();  ?>/images/c-product2.png" class="product1">
                            
                            <span class="vs">VS</span>
                            
                            <img src="<?php  echo get_template_directory_uri();  ?>/images/c-product.jpg" class="product2">
                            <div class="overlay">
                                <div class="category">
                                    <img src="<?php  echo get_template_directory_uri();  ?>/images/icons/compare.png"> Compare
                                </div>
                                
                            </div>
                            <div class="votes">
                                <span>40%</span>
                                <span>60%</span>
                            </div>
                        </div>
                        <div class="content">
                            <h2><?php the_title()   ?></h2>
                            <p><?php the_content();     ?></p>
                        </div>
                    </div>

           <?php }  ?>

<!--  end compaires -->

<!---   start ps      -->

					<?php

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'category_name' => 'ps',
'cat'   => 4



);
$q = new WP_Query( $args );
if($q->have_posts()){
while($q->have_posts()){
$q->the_post();

?>
           <a href="<?php echo bloginfo('url')  ?>/category/ps/">   <div class="card problem-card wow fadeInUp" data-wow-duration="1.5s">
                 <div class="img-container">
                      <?php the_post_thumbnail('' , ['class'=>'thumbnail' , 'title'=> 'post']) ?>
                     <div class="overlay">

                         <div class="category">
                             Problem &amp; Solution
                         </div>

                     </div>

                     <div class="padge">
                             <img src="<?php echo get_template_directory_uri()  ?>/images/icons/light-bulbx.png"> <img src="<?php echo get_template_directory_uri()  ?>/images/icons/light-bulby.png">
                         </div>

                 </div>
                 <div class="content">
                    
					<a href="<?php the_permalink(); ?>"><h2><?php  the_title();   ?></h2></a>
                            <p><?php  the_content();   ?></p>
				 </div>
				  <span class="vi"><?php echo do_shortcode('[post-views]');?></span>
             </div></a>
			 
<?php    }}  ?>
			 <!--  end ps -->

             <div class="articles wow fadeInUp" data-wow-duration="1.5s">

                 <h3 class="category"><img class="ctgIcon" src="<?php echo get_template_directory_uri()  ?>/images/icons/play-arrow.svg"> <a href="<?php echo bloginfo('url')  ?>/category/videos/">Videos</a></h3>

                 <div class="owl-carousel22">



                     <div class="cardContainer">
                         <div class="articleCard">
                              <?php echo do_shortcode('[Rich_Web_Video id="2"]');?>
                         </div>
                     </div>

                 </div>
             </div>

         </main>
     </div>
     </div>





<?php   get_footer()  ?>
