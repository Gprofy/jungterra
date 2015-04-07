$(document).ready(function() {
	var open = false;
	$('#mycarousel').jcarousel({
		scroll: 1,
		wrap: 'circular'
	});
	
	$('.question .text a').click(function(){
		if(open == false){
			$(this).parents('.question').addClass('active');
			open = true;
		}else{
			$(this).parents('.question').removeClass('active');
			open = false;
		}		
		return false;
	});
});