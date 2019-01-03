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
    
    console.log(pos);

win.scroll(sticky);
     

});


function initMap() {
        var myLatLng = {lat: 30.298602, lng: 31.733054};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: '10th of Ramadan City, Egypt'
        });
      }
