jQuery(document).ready(function($) {

  var s = window.location.href;
  if (s.indexOf("albums") > -1) {
    $(".nav-wolk").css("left", "9.5%");
    $(".nav-man").css("left", "7.5%");
    $(".nav-wolk").fadeIn();
  } else if (s.indexOf("recent") > -1) {
    $(".nav-wolk").css("left", "18.5%");
    $(".nav-man").css("left", "16.5%");
    $(".nav-wolk").fadeIn();
  } else if (s.indexOf("workshop") > -1) {
    $(".nav-wolk").css("left", "67.3%");
    $(".nav-man").css("left", "64.5%");
    $(".nav-wolk").fadeIn();
  } else if (s.indexOf("contact") > -1) {
    $(".nav-wolk").css("left", "76.3%");
    $(".nav-man").css("left", "73.5%");
    $(".nav-wolk").fadeIn();
  } else if (s.indexOf("blog") > -1) {
    $(".nav-wolk").css("left", "83.3%");
    $(".nav-man").css("left", "80.5%");
    $(".nav-wolk").fadeIn();
  } else if (s.indexOf("app") > -1) {
    $(".nav-wolk").css("left", "89.3%");
    $(".nav-man").css("left", "86.5%");
    $(".nav-wolk").fadeIn();
  } else {
    $(".nav-wolk").css("left", "1.8%");
    $(".nav-man").css("left", "0%");
    $(".nav-wolk").fadeIn();
  }
});
