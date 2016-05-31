$(document).ready(function() {
    /* popup on time */
    setTimeout(function() {
      $('#pop-up').modal('show');
    }, 5000); // milliseconds 
	
	/*popup on click*/
    $( "#top-pick" ).click(function() {
	  $('#pick-seller').modal('show');
	});
});

$("#price-range").ionRangeSlider({
    type: "double",
    min: 8000,
    max: 35000,
    grid: false, 
    postfix: ' €', 
    from: 9250,
    to: 33850
});