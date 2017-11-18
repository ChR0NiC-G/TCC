// PARALLAX COM FADE NO TEXTO
// SCRIPT POR pascalmaddin ( https://gist.github.com/pascalmaddin/5756515 )

function scrollBanner() {
  $(document).scroll(function(){
  	var scrollPos = $(this).scrollTop();
  	$('#bg').css({
  	  'background-position' : 'center ' + (-scrollPos/2)+'px'
  	});
  });
}
scrollBanner();
