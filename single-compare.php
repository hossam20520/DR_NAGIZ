
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>





 <div class="card compare-card wow fadeInUp" data-wow-duration="1.5s">
                 
                 <div class="content">
                     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                     <p> <?php the_content(); ?></p>
                 </div>
             </div>












<?php endwhile; ?>
<?php endif; ?>
