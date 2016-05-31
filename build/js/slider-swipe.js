$(document).ready(function() {  
   $("#slider-swipe").swiperight(function() {  
      $("#slider-swipe").carousel('prev');  
    });  
   $("#slider-swipe").swipeleft(function() {  
      $("#slider-swipe").carousel('next');  
   });  
});  