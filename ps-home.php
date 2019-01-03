
         <aside class="col-md-4">
             <div class="sidebar">

                 <div class="side-card">
                    <?php dynamic_sidebar( 'slider1' ); ?>
                 </div>


             </div>

          

         </aside>          
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  <main class="col-md-8 main">
                   
                    
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
					
					
					
                       <a href="<?php the_permalink(); ?>"> <div class="card problem-card">
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
                    </div></a>
                
<?php }}  ?>
                
                    
                
                    
                    
                </main>