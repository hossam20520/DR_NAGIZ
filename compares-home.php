
<?php

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'category_name' => 'compares',
'cat'   => 5



);
$q = new WP_Query( $args );
if($q->have_posts()){
while($q->have_posts()){
$q->the_post();

?>
<main class="col-md-9 main">




  <div class="card compare-card">
                          <!-- <div class="img-container">
                               <img src="images/c-product2.png" class="product1">

                              <span class="vs">VS</span>

                              <img src="images/c-product.jpg" class="product2">
                              <div class="overlay">
                                  <div class="category">
                                      <img src="images/icons/compare.png"> Compare
                                  </div>

                              </div>

                              <div class="votes">
                                  <span>40%</span>
                                  <span>60%</span>
                              </div>
                          </div>
                          <div class="content">
                              <h2>17 oz. Waterless Wash and Shine</h2>
                              <p>Waterless Wash and Shine is a revolutionary new method of washing and shining your car in less than 15 minutes without water. No buckets, no hoses no rinsing and drying. Simply spray on the surface and wipe dry. With your vehicle tes without water. No butes without water. No butes without water. No bu anywhere, anytime. The unique formuformuformu formuformu formuformu  formulatiIt also leaves a protective film that pro....<br><span>+200 <img src="images/icons/eye.svg"></span></p>
                          </div> -->
                            <?php the_content(); ?>
                      </div>

















     </main>
     <aside class="col-md-2">


               </aside>


             <?php }} ?>
