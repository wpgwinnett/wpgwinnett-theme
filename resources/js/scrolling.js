(function($){
    $(window).on('scroll', function() {
				
		var header = $(window).scrollTop();
  var height = $(".app-header").height();
  
  
  
  var firstSection = $(".app-header").height() + ($(".app-header").height()) / 3 ;
  if ($(window).scrollTop() >=  height) {
	  
    $('.app-header').addClass("app-header__sticky");
	
	
  } else {
    $('.app-header').removeClass("app-header__sticky");
  }
  if (header > firstSection) {
	  
    $('.app-header').addClass("in-view");

	$('.app-main:first-child').addClass('app-main__scrollclass');
 
  } else {
    $('.app-header').removeClass("in-view");
	$('.app-main:first-child').removeClass('app-main__scrollclass');
		
  }
		
		
		
    });
})(jQuery);
