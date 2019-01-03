

<footer>
<div class="footer">

 <div class="container">
     <div class="row">
         <div class="col-sm-4 logo">
             <img src="<?php echo get_template_directory_uri()  ?>/images/c-product2.png" >
         </div>

         <div class="col-sm-4 about">
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
         </div>

         <div class="col-sm-4 social">
             <div class="row">
                 <a href="https://www.facebook.com/" title="facebook" class="col-sm-3"><i class="fa fa-facebook"></i></a>
                 <a href="#" class="col-sm-3"><i class="fa fa-twitter" title="twitter"></i></a>
                 <a href="#" class="col-sm-3"><i class="fa fa-youtube-play" title="youtube"></i></a>
                 <a href="#" class="col-sm-3"><i class="fa fa-instagram" title="instagram"></i></a>
             </div>
         </div>

     </div>
 </div>
</div>

</footer>
<?php  wp_footer(); ?>
<?php if(is_page('about') OR is_page('contact') ){
	?>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBenFW7knU8aOYP5pDHplxLCKJSd8Hvn1w&callback=initMap"></script>
<?php	
}    ?>
</body>
</html>
