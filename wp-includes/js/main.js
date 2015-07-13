jQuery(document).ready(function()  {
		var $ = jQuery;
	$('[data-mask="phone"]').mask("+7 (999) 999-99-99");
	
	$('[data-form="send"]').ajaxForm(function() { 
		$('#call').modal('hide');
		$('#thx').modal('show');
	}); 
	$('a.smooth').click(function(){
		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 500);
		return false;
	});
});