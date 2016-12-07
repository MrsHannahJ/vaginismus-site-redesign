$(document).ready(function(){

//menu slideout

//$nav=$('.nav');
//$navOverlay=$('.nav-overlay');
//$('.nav-toggle').click(function(e){e.preventDefault();$nav.toggleClass('open');
//$navOverlay.toggleClass('open');});
//$navOverlay.click(function(){$nav.removeClass('open');$navOverlay.removeClass('open')});

$nav = $('.nav');
$navOverlay = $('.nav-overlay');
$('.nav-toggle').click(function(e) {
  e.preventDefault();
  $nav.toggleClass('open');
  $navOverlay.toggleClass('open');
});
$navOverlay.click(function() {
  $nav.removeClass('open');
  $navOverlay.removeClass('open')
});



// Sub Menu Accordion



  $('#cssmenu > ul > li:has(ul)').addClass("has-sub");

  $('#cssmenu > ul > li > a').click(function() {
    var checkElement = $(this).next();
    
    $('#cssmenu li').removeClass('active');
    $(this).closest('li').addClass('active');	
    
    
    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('active');
      checkElement.slideUp('normal');
    }
    
    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
      $('#cssmenu ul ul:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    
    if (checkElement.is('ul')) {
      return false;
    } else {
      return true;	
    }		
  });

});




