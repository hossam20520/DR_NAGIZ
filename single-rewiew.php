
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



 <?php //echo get_the_date(); ?>





     <div class="container">
            <div class="row">
                
                 
                <main class="col-md-12 main">
                    <div class="card reveiw-card">
                        <div class="img-container">
                         <?php the_post_thumbnail('' , ['class'=>'thumbnail' , 'title'=> 'post']) ?>
                            <div class="overlay">
                               
                                
                            </div>
                         
                        </div>
                        <div class="content">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                    
                      
                      
                     
                </main>
                
                 
                
               
                
            </div>
            </div>



<?php endwhile; ?>
<?php endif; ?>

 







