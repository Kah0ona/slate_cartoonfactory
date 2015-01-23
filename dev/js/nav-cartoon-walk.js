jQuery(document).ready(function($) {
  var s = window.location.href + '/';
  if (s.indexOf("/albums/") > -1 || s.indexOf("/karikaturen/") > -1 || s.indexOf("/characters/") > -1 || s.indexOf("/cartoon/") > -1 || s.indexOf("/sneltekenen/") > -1 || s.indexOf("/fantasie-art/") > -1 || s.indexOf("/animatie/") > -1 || s.indexOf("/divers/") > -1) {
    $(".nav-wolk3").css("left", "25.3%");
    $(".nav-man").css("left", "25%");
    $(".nav-wolk3").fadeIn();

  } else if (s.indexOf("/recent") > -1) {
    $(".nav-wolk4").css("left", "62%");
    $(".nav-wolk4").css("top", "-12px");
    $(".nav-man").css("left", "66%");
    $(".nav-wolk4").fadeIn();
  } else if (s.indexOf("/hoe-werk-ik") > -1) {
    $(".nav-wolk2").css("left", "10.2%");
    $(".nav-man").css("left", "15%");
    $(".nav-wolk2").fadeIn();
  } else if (s.indexOf("/contact") > -1) {
    $(".nav-wolk6").css("left", "83.8%");
    $(".nav-man").css("left", "83%");
    $(".nav-wolk6").fadeIn();
  } else if (s.indexOf("app") > -1) {
    $(".nav-wolk5").css("left", "76.5%");
    $(".nav-man").css("left", "74%");
    $(".nav-wolk5").fadeIn();
  } else {
    $(".nav-wolk1").css("left", "1.7%");1
    $(".nav-man").css("left", "0%");
    $(".nav-wolk1").fadeIn();
  }
});
