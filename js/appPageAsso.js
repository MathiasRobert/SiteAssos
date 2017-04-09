var pos = $(".avatar").position();
var mainPos = $(".main").position();
var width = $(".avatar").outerWidth();

$(".avatar-nav").css({
  position: "absolute",
  left: (pos.left) + "px"
});
$(".avatar").css({
  top: (mainPos.top - ($(".avatar").outerHeight())/2) + "px"
});

$(window).resize(function() {
  var pos = $(".avatar").position();
  $(".avatar-nav").css({
    position: "absolute",
    left: (pos.left) + "px"
  });
});

$(window).scroll(function() {

if(($('.avatar-nav').css("display") == "none") && ($(window).scrollTop() > $('.avatar').offset().top -10)) {
  $('.avatar-nav').css("display", "block");
  $('.avatar').css("opacity", "0");

}
else if (($('.avatar-nav').css("display") == "block") && ($(window).scrollTop() < $('.avatar').position().top - 70)) {
  $('.avatar-nav').css("display", "none");
  $('.avatar').css("opacity", "1");
}
});

$(document).ready(function () {
  moment.locale('fr');
  $('.author').each(function() {
    var date = $(this).text();
    $(this).text(moment(date, "YYYY-MM-DD hh:mm:ss").fromNow());
  });
});

var window_width = $(window).width();
if (window_width >= 768){
    big_image = $('.page-header[data-parallax="active"]');
    if(big_image.length != 0){
        $(window).on('scroll', materialKitDemo.checkScrollForParallax);
    }
}

materialKitDemo = {
    checkScrollForParallax: debounce(function(){
        if(isElementInViewport(big_image)){
            var current_scroll = $(this).scrollTop();

            oVal = ($(window).scrollTop() / 3);
            big_image.css({
                'transform':'translate3d(0,' + oVal +'px,0)',
                '-webkit-transform':'translate3d(0,' + oVal +'px,0)',
                '-ms-transform':'translate3d(0,' + oVal +'px,0)',
                '-o-transform':'translate3d(0,' + oVal +'px,0)'
            });
        }
    }, 4)
  };

function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this, args = arguments;
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    }, wait);
    if (immediate && !timeout) func.apply(context, args);
  };
};
