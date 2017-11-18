function mobmenu(x) {
    x.classList.toggle("change");
    $(".hammenu").toggle(0);
}

$(document).ready(function() {
    $menuLeft = $('.pushmenu-left');
    $nav_list = $('#nav_list');

    $nav_list.click(function() {
    $(this).toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toright');
    $menuLeft.toggleClass('pushmenu-open');

  });

    $('.links').on('click', function(){
        $(".pushmenu").removeClass("pushmenu-open");
        $(".pushmenu-push").removeClass("pushmenu-push-toright");
        $(".mob-menu").removeClass("change");
  });

});
