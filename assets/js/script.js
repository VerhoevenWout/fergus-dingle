jQuery(document).ready(function($){
  var windowWidth;

  // MOBILE MENU TOGGLE
  function toggleMobileMenu(){
    $('.hamburger').toggleClass('is-active');
    $('.main-menu').toggleClass('main-menu-expand');
  }
  $('.hamburger').click(function(){
    toggleMobileMenu();
  });

  // MENU SCROLL FUNCTION
  var headerheight = 80;
  if($(window).width() < 500){
    headerheight = 60;
  }
  $('.main-menu li a').on('click', function(){
    toggleMobileMenu();
    $('.main-menu li a').removeClass('menu-active');
    $(this).addClass('menu-active');
  });
  var $body = $('html, body');
  $('.main-menu li a, .about-button').click(function(){
    var topOfObject = $( $.attr(this, 'href') ).offset().top
    $body.animate({
      scrollTop: topOfObject - headerheight
    }, 500);
    return false;
  });

  // WORK CONTAINER HOVER SCROLL
  $('.inner-work-wrapper').scroll(function(){
    if($('.inner-work-wrapper').scrollLeft() >= 10){
      $(".arrow-left-container").addClass('show-arrow-container');
    } else{
      $(".arrow-left-container").removeClass('show-arrow-container');
    }
  });
  var count;
  var interval;
  function moveWorkWrapper(arrowContainer, direction){
    $(arrowContainer).on('mouseover', function(){
      var div = $('.inner-work-wrapper');
      interval = setInterval(function(){
        count = count || 3;
        var pos = div.scrollLeft();
        if (direction == 'plus') {
          div.scrollLeft(pos + count);
        } else{
          div.scrollLeft(pos - count);
        }
      }, 1);
    }).on('mouseout', function() {
      clearInterval(interval);
    });
  }
  moveWorkWrapper('.arrow-right-container', 'plus');
  moveWorkWrapper('.arrow-left-container', 'min');

  // MIMIC HOVER STATE MOBILE
  $('.individual-work:eq(0)').click(function(event){
    event.preventDefault();
    if (windowWidth > 500) {
      $(this).find('.individual-work-content').toggleClass('individual-work-content-visible');
    }
  });

  // IFRAME HEADER RESPONSIVE RESIZE
  function resize(){
    var windowWidth = $(window).width();
    // Load Variables - we do this here so they are reset when the screen changes size.
    var SW = $(window).width();
    var VH = SW * 0.5625;
    var SH = $(window).height();
    var VW = SH * 1.777;
    // Screen size check based on 16:9 ratio
    if (SW > VW) {
      $(".content-big iframe").width(SW).height(VH).css("top", -(VH - SH) /2);
    } else {
      $(".content-big iframe").height(SH).width(VW).css("left", -(VW - SW) /2);
    }
  }
  resize();
  $(window).resize(function() {
    resize();
  });

  // LOADING SVG FADEOUT ON VIDEO 1s
  var iframe = document.querySelector('iframe');
  var player = new Vimeo.Player(iframe);
  player.on('progress', function(data) {
    seconds: 1;
    $('.loading-svg').addClass('hide');
    $('.play-button').addClass('hide');
  });
  var ismobile=navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i)
  if (!ismobile) {
    player.play();
  }


  // player.pause();
  $('.play-button').click(function(){
    $(this).addClass('hide');
    player.play();
    $('.loading-svg').addClass('hide');
  });
//   player.setVolume(0);

});
