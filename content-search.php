<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-headerx">

<?php if ( 'post' == get_post_type() ) : ?>
<div class="entry-meta">
<?php endif; ?>
</div>


      <div class="container">
            <div class="row">
               
                <main class="col-md-8 main">
                   
                    
                     
                
                    
                       <div class="card problem-card wow fadeInUp">
                        <div class="img-container">
                           <?php the_post_thumbnail('' , ['class'=>'thumbnail' , 'title'=> 'post']) ?>
                            
                            
                            
                            
                        </div>
                        <div class="content">
                            <h2><?php  the_title();   ?></h2>
                            <p>  <?php   the_content();  ?> </p>
							
							<h4><?php the_category(); ?></h4>
                            <h4><?php echo get_the_date('F j, Y'); ?></h4>
                        </div>
                    </div>
                
                    
                    
                </main>
            </div>
            </div>













  


</div>
