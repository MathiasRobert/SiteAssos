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
