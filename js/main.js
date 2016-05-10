
$(document).ready(function() {
 
  $(".client_img").owlCarousel({

  	//Pagination
    pagination : false,
    navigation : true,
    navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    theme : "button-only-bg",

 
  });
    $(".quotes_area").owlCarousel({

  	//Pagination
  	singleItem : true,
    pagination : true,
    theme : "button-only-paged",
    
 
  });
    $(function(){
    $('#nav').slicknav();
  });
 
});