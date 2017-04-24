// IIFE - Immediately Invoked Function Expression
(function (yourcode) {

  // The global jQuery object is passed as a parameter
  yourcode(window.jQuery, window, document);

}(function ($, window, document) {

  // The $ is now locally scoped
  $(function () {
    // The DOM is ready!
    //mobile nav slideout
    $nav = $('.nav-js');
    $navOverlay = $('.nav-overlay');
    $('.nav-toggle').click(function (e) {
      e.preventDefault();
      $nav.toggleClass('open');
      $navOverlay.toggleClass('open');
    });
    $navOverlay.click(function () {
      $nav.removeClass('open');
      $navOverlay.removeClass('open');
    });

    //smooth scroll
    var $root = $('html, body');
    $('a').click(function () {
      var href = $.attr(this, 'href');
      $root.animate({
        scrollTop: $(href).offset().top
      }, 500, function () {
        window.location.hash = href;
      });
      return false;
    });

    //press dropdown
    //button that slides article bottom up/down
    $('.togglePressArticle, .closePressArticle').on('click', function () {

      var $this = $(this);
      $parent_box = $(this).closest('.box');
      $parent_box.siblings().find('.bottom').slideUp();
      $parent_box.find('.bottom').slideToggle(500, 'swing');

      //change button text on click to open/close
      $('.togglePressArticle').text('Read Full Article');
      $kk = $parent_box.find('.togglePressArticle');
      $kk.toggleClass('openArticleBtn');
      if ($kk.hasClass('openArticleBtn')) {
        $kk.text('Collapse Article');
      } else if (!$kk.hasClass('openArticleBtn')) {
        $kk.text('Read Full Article');
      }


      //      $bottom = $this.closest('.bottom');
      //      $kk = $this.closest('.togglePressArticle');
      //      if ($bottom.css('display') == 'none') {
      //        $kk.text('Collapse Article');
      //      } else {
      //        $kk.text('Read Full Article');
      //      }
      //      $kk.toggleClass('pressArticleBtn');
      //      if ($kk.hasClass('pressArticleBtn')) {
      //        $kk.text('Collapse Article');
      //      } else {
      //        $kk.text('Read Full Article');
      //      }
      //      if ($kk.text('Read Full Article')) {
      //        $kk.text('Collapse Article');
      //      } else if ($kk.text('Collapse Article')) {
      //        $kk.text('Read Full Article');
      //      }
    });
    //close button inside of bottom article
    $('.closePressArticle').on('click', function () {
      //      $aa = $this.closest('.togglePressArticle');
      //      $aa.toggleClass('kittens');
      //      if ($kk.hasClass('french')) {
      //        $kk.text('hi');
      //      } else if (!$kk.hasClass('french')) {
      //        $kk.text('lo');
      //      }


      //      $parent_box = $(this).closest('.box');
      //$parent_box.siblings().find('.bottom').slideUp();
      //$parent_box.find('.bottom').slideToggle(500, 'swing');
      //      $('.togglePressArticle').show(500);
      //change button text on click to open/close
      //      $toggle2 = $(this).closest(".togglePressArticle");
      //      if ($toggle2.text() == 'Read Full Article') {
      //        $toggle2.text('Collapse Article');
      //      } else {
      //        $toggle2.text('Read Full Article');
      //      }
      //animate scroll up to top of closest section



      $nextsection = $(this).closest("#press-section");
      $('html, body').animate({
        scrollTop: $nextsection.offset().top - 48
      }, 500);
    });

    //initiate slick carousel
    $(".img-carousel").slick({
      centerMode: true,
      centerPadding: "5px",
      slidesToShow: 3,
      autoplay: true,
      dots: true,
      arrows: true,
      infinite: true,
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


  });
  // The rest of your code goes here!
}));



//$(function () {
//  "use strict";
//menu slideout

//$nav=$('.nav');
//$navOverlay=$('.nav-overlay');
//$('.nav-toggle').click(function(e){e.preventDefault();$nav.toggleClass('open');
//$navOverlay.toggleClass('open');});
//$navOverlay.click(function(){$nav.removeClass('open');$navOverlay.removeClass('open')});






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





//});
