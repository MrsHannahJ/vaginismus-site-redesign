
$(document).ready(function(){

//menu slideout

//$nav=$('.nav');
//$navOverlay=$('.nav-overlay');
//$('.nav-toggle').click(function(e){e.preventDefault();$nav.toggleClass('open');
//$navOverlay.toggleClass('open');});
//$navOverlay.click(function(){$nav.removeClass('open');$navOverlay.removeClass('open')});

$nav = $('.nav-js');
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

  
  
  
//initiate slick carousel
   
$('.img-carousel').slick({
  centerMode: true,
  centerPadding: '5px',
  slidesToShow: 3,
  autoplay: true,
  dots: true,
  arrows: true,
  infinite:true,
//  autoplaySpeed:3000,
  speed: 600,
  responsive: [
//    {
//      breakpoint: 980,
//      settings: {
//        arrows: false,
//        centerMode: true,
//        centerPadding: '40px',
//        slidesToShow: 3
//      }
//    },
    //small screens
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
//        centerPadding: '5px',
        slidesToShow: 1
      }
    }
  ]
});
  



// Sub Menu Accordion Header



//  $('#cssmenu > ul > li:has(ul)').addClass("has-sub");
//
//  $('#cssmenu > ul > li > a').click(function() {
//    var checkElement = $(this).next();
//    
//    $('#cssmenu li').removeClass('active');
//    $(this).closest('li').addClass('active');
//    
//    
//    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
//      $(this).closest('li').removeClass('active');
//      checkElement.slideUp('normal');
//    }
//    
//    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
//      $('#cssmenu ul ul:visible').slideUp('normal');
//      checkElement.slideDown('normal');
//    }
//    
//    if (checkElement.is('ul')) {
//      return false;
//    } else {
//      return true;
//    }
//  });
  
  
// Footer Accordion
//	$("#accordian h5").click(function(){
//		//slide up all the link lists
//		$("#accordian ul ul").slideUp();
//        $("#accordian h5").removeClass("selected");
//		//slide down the link list below the h3 clicked - only if its closed
//		if(!$(this).next().is(":visible"))
//		{
//		  $(this).next().slideDown();
//          $(this).addClass("selected");
//		}
//	})
    


 
    
});




