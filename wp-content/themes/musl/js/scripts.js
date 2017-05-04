(function ($, root, undefined) {
	
	$(function () {
		
		$(".wpcf7").on('wpcf7:submit', function(event){
		  $(".wpcf7-form-control").fadeOut(0);
		  $(".sign_up_more").fadeOut();
		});

	});
	
})(jQuery, this);

/*

wpcf7:invalid
wpcf7:spam
wpcf7:mailsent
wpcf7:mailfailed
wpcf7:submit

*/
