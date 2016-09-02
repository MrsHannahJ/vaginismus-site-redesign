//CONTACT FORM VALIDATION


function captchaCode() {
  var Numb1, Numb2, Numb3, Numb4, Code;
  Numb1 = (Math.ceil(Math.random() * 10) - 1).toString();
  Numb2 = (Math.ceil(Math.random() * 10) - 1).toString();
  Numb3 = (Math.ceil(Math.random() * 10) - 1).toString();
  Numb4 = (Math.ceil(Math.random() * 10) - 1).toString();

  Code = Numb1 + Numb2 + Numb3 + Numb4;
  $("#captcha span").remove();
  $("#captcha input").remove();
  $("#captcha").append("<span id='code'>" + Code + "</span><input type='button' onclick='captchaCode();'>");
}

$(function() {
  captchaCode();

  $('#contactForm').submit(function() {
    var captchaVal = $("#code").text();
    var captchaCode = $(".captcha").val();
    if (captchaVal == captchaCode) {
      $(".captcha").css({
//        "color": "#609D29"
      });
    } else {
      $(".captcha").css({
//        "color": "#CE3B46"
      });
    }

    var emailFilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,10})+$/;
    var emailText = $(".email").val();
    if (emailFilter.test(emailText)) {
      $(".email").css({
//        "color": "#609D29"
      });
    } else {
      $(".email").css({
//        "color": "#CE3B46"
      });
    }

    var nameFilter = /^([a-zA-Z \t]{3,15})+$/;
    var nameText = $(".name").val();
    if (nameFilter.test(nameText)) {
      $(".name").css({
//        "color": "#609D29"
      });
    } else {
      $(".name").css({
//        "color": "#CE3B46"
      });
    }

    var messageText = $(".message").val().length;
    if (messageText > 2) {
      $(".message").css({
//        "color": "#609D29"
      });
    } else {
      $(".message").css({
//        "color": "#CE3B46"
      });
    }

    if ((captchaVal !== captchaCode) || (!emailFilter.test(emailText)) || (!nameFilter.test(nameText)) || (messageText < 2)) {
      return false;
    }
    if ((captchaVal === captchaCode) && (emailFilter.test(emailText)) && (nameFilter.test(nameText)) && (messageText > 2)) {
      $("#contactForm").css("display", "none");
      $("#form").append("<h2>Message sent!</h2>");
      return false;
    }
  });
});

//ALT HEADER

//function fakesearch(time){
//  $("#search-bar").addClass("loading");
//  $("#search-btn").addClass("loading");
//  setTimeout(function(){
//    $("#search-bar").removeClass('active loading');
//    $("#search-btn").removeClass("loading");
//    $("nav,#user").removeClass("hide");
//  },time);
//}
//
//$(document).ready(function(){
//  $('a').click(function(e){
//    e.preventDefault();
//  })
//  //nav
//  $("nav #hamburger").click(function(e){
//    $('nav').toggleClass('open');
//  });
//  $("#primary-nav a,#service-nav a").click(function(e){
//    S = $(this).data('section');
//    $('nav').removeClass('open');
//    $("section.active").addClass('out').removeClass("active");
//    $("#"+S).addClass("active");
//    setTimeout(function(){$('section.out').removeClass('out');},500);
//  });
//  //search
//  $("#search-bar #search-btn").click(function(e){
//    if($("#search-bar").hasClass('active')){
//      e.preventDefault();
//      fakesearch(2000);
//    }else{
//      e.preventDefault();
//      $("#search-bar").addClass("active");
//      $("#search-input").focus();
//      $("nav,#user").removeClass("open").addClass("hide");
//    }
//  });
//  $("#close-search").click(function(e){
//    $("#search-bar").removeClass("active");
//    $("#search-btn").removeClass("loading");
//     $("nav,#user").removeClass("hide");
//  });
//  //user
//  $('#user').click(function(){
//    $('#user-panel').addClass('open');
//  });
//  $('#close-user-panel').click(function(){
//    $('#user-panel').removeClass('open');
//  });
//
//});
  
//  ALT HEADER DONE