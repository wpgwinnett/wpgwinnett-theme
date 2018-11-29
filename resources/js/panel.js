(function($) {
$('.fa-bars').click( 
    function() {
		console.log('clicked');
        $('#popout').animate({ left: screen.width-384}, 'fast', function() {
				$('.overlay').css('visibility', 'visible');
				$('body').css('overflow-y', 'hidden');
           
		
			
			
        });
    }
);

})(jQuery);




(function($) {
$('#popout .fa-times').click( 
	function() {
		console.log('fa times click');
        $('#popout').animate({ left: screen.width + 500 }, 'fast', function() {
            	$('.overlay').css('visibility', 'hidden');
				$('body').css('overflow-y', 'scroll');
        });
    }


);
})(jQuery);



(function($){
	
	$( document ).ready(function() {
		
		$('#popout').css('left', screen.width + 500);
		
		
	});
})(jQuery);





