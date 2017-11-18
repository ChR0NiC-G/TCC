// SCRIPT DA NAVBAR (TRANSPARENTE PARA BRANCO)
$(window).on("load",function() {
	$(window).scroll(function() {
  	if($(document).scrollTop() > 10) {
    	$('#nav').addClass('shrink');
    }else{
    $('#nav').removeClass('shrink');
    }
  });
});
