<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

       <div class="container">
            <div class="row">
                
                
                <main class="col-md-12 main">
                   
                    
                      <div class="card problem-card">
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
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                
                    
                    
                </main>
            </div>
            </div>
			
			
			
<?php endwhile; ?>
<?php endif; ?>
