//ALT HEADER

function fakesearch(time){
  $("#search-bar").addClass("loading");
  $("#search-btn").addClass("loading");
  setTimeout(function(){
    $("#search-bar").removeClass('active loading');
    $("#search-btn").removeClass("loading");
    $("nav,#user").removeClass("hide");
  },time);
}

$(document).ready(function(){
  $('a').click(function(e){
    e.preventDefault();
  })
  //nav
  $("nav #hamburger").click(function(e){
    $('nav').toggleClass('open');
  });
  $("#primary-nav a,#service-nav a").click(function(e){
    S = $(this).data('section');
    $('nav').removeClass('open');
    $("section.active").addClass('out').removeClass("active");
    $("#"+S).addClass("active");
    setTimeout(function(){$('section.out').removeClass('out');},500);
  });
  //search
  $("#search-bar #search-btn").click(function(e){
    if($("#search-bar").hasClass('active')){
      e.preventDefault();
      fakesearch(2000);
    }else{
      e.preventDefault();
      $("#search-bar").addClass("active");
      $("#search-input").focus();
      $("nav,#user").removeClass("open").addClass("hide");
    }
  });
  $("#close-search").click(function(e){
    $("#search-bar").removeClass("active");
    $("#search-btn").removeClass("loading");
     $("nav,#user").removeClass("hide");
  });
  //user
  $('#user').click(function(){
    $('#user-panel').addClass('open');
  });
  $('#close-user-panel').click(function(){
    $('#user-panel').removeClass('open');
  });

});
  
//  ALT HEADER DONE