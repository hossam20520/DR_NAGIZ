
<?php
require_once('wp-bootstrap-navwalker.php');


add_theme_support('post-thumbnails');
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

function hossam_add_style(){

  wp_enqueue_style('owl-css' , get_template_directory_uri() . '/css/owl.carousel.min.css');
   wp_enqueue_style('font-css' , get_template_directory_uri() . '/css/font-awesome.min.css');
  wp_enqueue_style('bootstrap-css' , get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('animate-css' , get_template_directory_uri() . '/css/animate.css'); 
  wp_enqueue_style('main-css' , get_template_directory_uri() . '/css/main.css?v=1');
   wp_enqueue_style('comment-css' , get_template_directory_uri() . '/css/comments.css');


 if (is_category('reviews')){
     wp_enqueue_style('review-css' , get_template_directory_uri() . '/css/Review.css');
 }elseif(is_category('compares')){
	
   wp_enqueue_style('compaires-css' , get_template_directory_uri() . '/css/Compare.css');
   
 }elseif(is_page('about')){
	 wp_enqueue_style('animate-css' , get_template_directory_uri() . '/css/animate.css'); 
	 wp_enqueue_style('slick-css' , get_template_directory_uri() . '/css/slick.css'); 
	 wp_enqueue_style('about-css' , get_template_directory_uri() . '/css/about.css'); 
	 
 }elseif(is_page('contact')){
	 
	 wp_enqueue_style('animate-css' , get_template_directory_uri() . '/css/animate.css'); 
	 wp_enqueue_style('slick-css' , get_template_directory_uri() . '/css/slick.css'); 
	 /*wp_enqueue_style('about-css' , get_template_directory_uri() . '/css/about.css'); 
	 wp_enqueue_style('contact-css' , get_template_directory_uri() . '/css/contact.css'); 
	  wp_enqueue_style('form-css' , get_template_directory_uri() . '/css/form_contact.css'); */
 }elseif(is_category('ps')){
	 wp_enqueue_style('review-css' , get_template_directory_uri() . '/css/Review.css');
	 wp_enqueue_style('Compaire-css' , get_template_directory_uri() . '/css/Compare.css');
	 wp_enqueue_style('ps-css' , get_template_directory_uri() . '/css/Ps.css');
 }elseif(is_category('videos')){
	 
	 wp_enqueue_style('video-css' , get_template_directory_uri() . '/css/videos.css');
 }elseif(is_search()){
	 wp_enqueue_style('search-css' , get_template_directory_uri() . '/css/search.css');
 }
 
 
 if(has_term('reviews', 'category', $post)) { 

 wp_enqueue_style('review-css' , get_template_directory_uri() . '/css/Review.css');
 wp_enqueue_style('single-css' , get_template_directory_uri() . '/css/Single-review.css');
 
 }elseif(has_term('ps', 'category', $post)){
	 
	 wp_enqueue_style('review-css' , get_template_directory_uri() . '/css/Review.css');
	 wp_enqueue_style('Compaire-css' , get_template_directory_uri() . '/css/Compare.css');
	 wp_enqueue_style('ps-css' , get_template_directory_uri() . '/css/Ps.css'); 
	 
 }elseif(has_term('compares', 'category', $post)){
	 
	 wp_enqueue_style('review-css' , get_template_directory_uri() . '/css/Review.css');
	 wp_enqueue_style('Compaire-css' , get_template_directory_uri() . '/css/Compare.css'); 
 }
 
 
 
 
 


}



function hossam_add_script(){
wp_enqueue_script('jquery-js' , get_template_directory_uri() . '/js/jquery-3.1.1.min.js' , array() , false , true);
 wp_enqueue_script('ow-js' , get_template_directory_uri() . '/js/owl.carousel.min.js' , array() , false , true);
 wp_enqueue_script('wow-js' , get_template_directory_uri() . '/js/wow.min.js' , array() , false , true); 

 wp_enqueue_script('bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array() , false , true);
 
  wp_enqueue_script('main-js' , get_template_directory_uri() . '/js/main.js' , array() , false , true); 
   
  
  if(is_page('about')){
	wp_enqueue_script('slick-js' , get_template_directory_uri() . '/js/slick.min.js' , array() , false , true);  
	wp_enqueue_script('wow-js' , get_template_directory_uri() . '/js/wow.min.js' , array() , false , true); 
    wp_enqueue_script('about-js' , get_template_directory_uri() . '/js/about.js' , array() , false , true);
   wp_enqueue_script('activea-js' , get_template_directory_uri() . '/js/active_about.js' , array() , false , true);
  
  }elseif(is_page('contact')){
	  
	  	wp_enqueue_script('slick-js' , get_template_directory_uri() . '/js/slick.min.js' , array() , false , true);  
	
    wp_enqueue_script('about-js' , get_template_directory_uri() . '/js/about.js' , array() , false , true);
	wp_enqueue_script('contact_ac-js' , get_template_directory_uri() . '/js/active_contact.js' , array() , false , true);
   
  }elseif(is_category('compares')){
	   
	wp_enqueue_script('activ-js' , get_template_directory_uri() . '/js/active_compare.js' , array() , false , true);
  }elseif(is_category('ps')){
	 wp_enqueue_script('ps-js' , get_template_directory_uri() . '/js/active_ps.js' , array() , false , true); 
	  
  }elseif(is_category('reviews')){
	  
	  wp_enqueue_script('rev-js' , get_template_directory_uri() . '/js/active_rev.js' , array() , false , true); 
	  
  }


}



add_action('wp_enqueue_scripts'  ,'hossam_add_style');
add_action('wp_enqueue_scripts'  ,'hossam_add_script');


function hossam_regester_menu(){
  register_nav_menu('bootstrap-menu' , __('navigation bar'));
}

add_action('init'  ,'hossam_regester_menu');

function fire_menu(){
  wp_nav_menu(array(

    'theme_location' => 'bootstrap-menu',
    'menu_class' => 'hossam',
	'container' => false,
	'depth' => 2,
	'walker' => new wp_bootstrap_navwalker()
  )



  );
}


// 'before_widget' => '<div class="item">',
// 'after_widget'  => '</div>',
// 'before_title'  => '<h2 class="rounded">',
// 'after_title'   => '</h2>',

function SliderPro1() {

        register_sidebar( array(
        'name'          => 'Slider',
        'id'            => 'slider1',

        ) );

        }

add_action( 'widgets_init', 'SliderPro1' );


function The_form() {

        register_sidebar( array(
        'name'          => 'form',
        'id'            => 'form1',

        ) );

        }

add_action( 'widgets_init', 'The_form' );

function Related() {

        register_sidebar( array(
        'name'          => 'related_post',
        'id'            => 'related',

        ) );

        }

add_action( 'widgets_init', 'Related' );

function Counter() {

        register_sidebar( array(
        'name'          => 'counter',
        'id'            => 'counter1',

        ) );

        }

add_action( 'widgets_init', 'Counter' );

function add_class_to_category( $thelist, $separator, $parents){
    $class_to_add = 'custom-slug';
    return str_replace('<a href="',  '<a class="'. $class_to_add. '" href="', $thelist);
}

add_filter('the_category', __NAMESPACE__ . '\\add_class_to_category',10,3);



add_filter('kdmfi_featured_images', function( $featured_images ) {
  $args = array(
    'id' => 'featured-image-2',
    'desc' => 'Your description here.',
    'label_name' => 'Featured Image 2',
    'label_set' => 'Set featured image 2',
    'label_remove' => 'Remove featured image 2',
    'label_use' => 'Set featured image 2',
    'post_type' => array( 'page' ),
  );

  $featured_images[] = $args;

  return $featured_images;
});







function get_custom_cat_template($single_template) {
   global $post;
   if ( in_category( 'movies' )) {
      $single_template = dirname( __FILE__ ) . '/single-movies.php';
   }
   return $single_template;
} 
add_filter( "single_template", "get_custom_cat_template" ) ;



















 ?>
