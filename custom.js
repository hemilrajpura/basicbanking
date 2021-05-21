  jQuery('a[href^="#"]').on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 800, function(){        
        window.location.href.split('#')[0];
      });
    }
  });



/*Page Loader*/
$(window).on('load', function(){
  $(".se-pre-con").fadeOut("slow");
  AOS.init();
});
/*Page Loader End*/
$( document ).ready(function() {

  /*Responsive Menu*/
  (function($) {
      $.fn.menumaker = function(options) {
          var cssmenu = $(this),
              settings = $.extend({
                  format: "dropdown",
                  sticky: false
              }, options);
          return this.each(function() {
              $(this).find(".button").on('click', function() {
                  $(this).toggleClass('menu-opened');
                  var mainmenu = $(this).next('ul');
                  mainmenu.slideToggle();
                  if (mainmenu.hasClass('open')) {
                      mainmenu.toggleClass('open');
                  } else {
                      mainmenu.toggleClass('open');
                      if (settings.format === "dropdown") {
                          mainmenu.find('ul').show();
                      }
                  }
              });
              cssmenu.find('li ul').parent().addClass('has-sub');
              multiTg = function() {
                  cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                  cssmenu.find('.submenu-button').on('click', function() {
                      $(this).toggleClass('submenu-opened');
                      if ($(this).siblings('ul').hasClass('open')) {
                          $(this).siblings('ul').removeClass('open');
                      } else {
                          $(this).siblings('ul').addClass('open');
                      }
                  });
              };
              if (settings.format === 'multitoggle') multiTg();
              else cssmenu.addClass('dropdown');
              if (settings.sticky === true) cssmenu.css('position', 'fixed');
              resizeFix = function() {
                  var mediasize = 840;
                  if ($(window).width() > mediasize) {
                      cssmenu.find('ul').show();
                  }
                  if ($(window).width() <= mediasize) {
                      cssmenu.find('ul').hide().removeClass('open');
                  }
              };
              resizeFix();
              return $(window).on('resize', resizeFix);
          });
      };
  })(jQuery);

  (function($) {
      $(document).ready(function() {
          $("#cssmenu").menumaker({
              format: "multitoggle"
          });
      });
  })(jQuery);
  $(window).on("load, resize", function() {
      $(".button").removeClass("menu-opened");
      $(".submenu-button").removeClass("submenu-opened");
  });
  /*Responsive Menu End*/

  /*Sticky Header*/
  $(window).scroll(function(){
    var sticky = $('.sticky'),
        scroll = $(window).scrollTop();
    if (scroll >= 200) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  });
  /*Sticky Header End*/

    width_counter = function(){
        var win_width = $( window ).width();
        var con_width = $('.container').width();
        var count_width = win_width - con_width;
        var count_2 = parseInt(count_width/2) - parseInt(15);
        $('.left-container').css('padding-left',count_2);
        $('.right-container').css('padding-right',count_2);
    }

    width_counter();
    
    $(window).on("load, resize", function() {
      width_counter();
    });

    height_counter = function()
    {
      var height = $('.sub-page header').outerHeight();
      $('.sub-page').css("margin-top",height);
    }
    height_counter();
    $(window).on("load, resize", function() {
      height_counter();
    });

    if($(window).width() <= 767)
    {
      var previousScroll = 0;
      $(window).scroll(function(event){
         var scroll = $(this).scrollTop();
         if (scroll > previousScroll){
          $('.side-block').addClass('slide-bottom');
        } else {
          $('.side-block').removeClass('slide-bottom');
        }
       previousScroll = scroll;
    });
    }

    jQuery(".search-icon__item").click(function(){
      jQuery('.search-icon').toggleClass('search-icon--transformed');
      jQuery('.search-box').slideToggle();
    });

    $('.f_p_caarousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    nav: true,
    navText: ["<img src='images/left.png'>","<img src='images/right.png'>"],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        540:{
            items:2,
        },
        768:{
            items:3,
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
      }
  })

});