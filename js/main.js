$(document).ready(function(){  
    
    
   
    var win = $(window),
    navbar = $('nav'),
    pos = $(".main-bar").innerHeight(),
        
    
        sticky = function(){ 
            
        if(win.scrollTop() > pos){
            navbar.addClass("navFixed");
            $(".main-bar").css("margin-bottom","30px");
            

        }else{
            navbar.removeClass("navFixed");
            $(".main-bar").css("margin-bottom","0px");
            
        }
        /*
        if( win.scrollTop() >= $('.products').outerHeight() - 464 ){
            navbar.removeClass('sticky');
            $(".sticky-fix").css("display","none");
        }
        */
    }
    
    
win.scroll(sticky);
    
    $(".owl-carousel2").owlCarousel({
        items: 2,
        nav: true,
        navText: ["<img src='images/icons/leftnavbutton.svg'>","<img src='images/icons/rightnavbutton.svg'>"],
        loop: true,
        autoplay: false,
        autoplayTimeout: 5000,
        responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        786:{
            items:2,
            nav:false
        },
    }
        
    });
    
     new WOW().init()

});