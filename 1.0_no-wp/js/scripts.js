$(function() {
/*--------------------------------------------------------------
  Remove Nodes
--------------------------------------------------------------*/
  function clean(node) {
    for(var n = 0; n < node.childNodes.length; n ++) {
      var child = node.childNodes[n];
      if ( child.nodeType === 8 || (child.nodeType === 3 && !/\S/.test(child.nodeValue)) ) {
        node.removeChild(child);
        n --;
      } else if(child.nodeType === 1) {
        clean(child);
      }
    }
  }
  clean(document);

/*--------------------------------------------------------------
  Cookie Consent
--------------------------------------------------------------*/
  window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#252e39"
        },
        "button": {
          "background": "transparent",
          "text": "#f7b816",
          "border": "#f7b816"
        }
      },
      "position": "top",
      "static": true
    });
  });

/*--------------------------------------------------------------
  IE 11 Conditional Statement
--------------------------------------------------------------*/
// Turn off Smooth Scrolling to remove "jitter" from Fixed Bg Attachment
  // Turn off Smooth Scroll (working as of 2017-09-29)
  if(navigator.userAgent.match(/Trident\/7\./)) {
    $('body').on("mousewheel", function () {
      event.preventDefault();
      var wheelDelta = event.wheelDelta;
      var currentScrollPosition = window.pageYOffset;
      window.scrollTo(0, currentScrollPosition - wheelDelta);
    });
  }

/*--------------------------------------------------------------
  General
--------------------------------------------------------------*/
  /* Navigation
  ============================================= */
  /* ---------- Variables ---------- */
    var navCont = $('.nav__cont'),
        scrollToTop = $('.to-top'),
        navHeight = $('nav').height();

  /* ---------- Functions ---------- */
    // Fixed Navigation on Scroll
      // https://codepen.io/scottbranch/pen/VYGwOK
    function stickyNav() {
      if ($(window).scrollTop() > navHeight) {
        navCont.addClass('active');
      } else {
        navCont.removeClass('active');
      }
    }

    // Prevent menu overlap on content
      // https://stackoverflow.com/questions/44196875/
      function navOffset() {
        // doesn't offset or scroll nicely to div with full URL
        // $('.nav__item a').on( 'click', function(event) {
        //   var target = $(this),
        //       element = target.attr('href');
        //   $('.nav__item a').removeClass('active');
        //   target.addClass('active');
        //   // scroll nicely to div
        //   $('body, html').animate( {
        //     scrollTop: $(element).offset().top - navHeight
        //   }, 800);
        // });

        // does offset and scroll nicely to div with full URL
          // https://gist.github.com/HoundstoothSTL/5510082
        $("a[href*=\\#]:not([href=\\#])").on( 'click', function(event) {
          var target = $(this.hash);
          $('.nav__item a').removeClass('active');
          $(this).addClass('active');
          // scroll nicely to div
          $('html,body').animate( {
            scrollTop: target.offset().top - navHeight
          }, 800);
          // removing 'return false' causes things to open in CodePen, but fixes my problem locally
          // return false;
        });
      }

    // Navigation Link Highlight on Scroll (scrollSpy)
      // https://stackoverflow.com/questions/14161132/
      // https://codepen.io/sanjeevks121/pen/mJgyRE
      // https://codepen.io/katawura/pen/myweoB
      /*------------------------------
        Wisdom from Axel:
        Setup function, something like navScroll() {}
        Call function on each scroll, something like $(document).on("scroll", navScroll);
      ------------------------------*/
    function scrollSpy() {
      // the following works on click and scroll, but doesn't work with full URL:
      // var winScroll = $(this).scrollTop();
      // $('.scrollspy').each(function() {
      //   var top = $(this).offset().top - navHeight,
      //       bottom = top + $(this).outerHeight();
      //
      //   if (winScroll >= top && winScroll <= bottom) {
      //     $('.nav__item a').removeClass('active');
      //     // $('.scrollspy').removeClass('active');
      //     // $(this).addClass('active');
      //     $('nav').find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
      //   }
      // });

      // the following works with full URL, on scroll, doesn't work properly on click for #contact:
      $('.scrollspy').each(function(i) {
        var winScroll = $(window).scrollTop(),
            top = $(this).offset().top - navHeight,
            bottom = top + $(this).outerHeight();
        if (winScroll >= top && winScroll <= bottom) {
          $('.nav__item a').removeClass('active');
          $('nav').find('a[href*="\\#'+$(this).attr('id')+'"]').addClass('active');
          // doesn't work on click properly
          // $('.nav__item a').eq(i).addClass('active');
        }
      });

    } // scrollSpy


    // Burger Navigation
    function burger() {
      var burger = $('.nav__burger');
      burger.on ('click', function() {
        $('.nav__burger, .nav__mobile--list, .logo, [class*="__hero"], [class*="__hero--img"], [class*="__hero--head"], .content').toggleClass('active');
      });
    }

  /* ---------- Calling Functions ---------- */
    $(window).scroll(function() {
      // Scroll to Top
      if ($(this).scrollTop() > 500) {
        scrollToTop.addClass('active');
      } else {
        scrollToTop.removeClass('active');
      }
      stickyNav();
      scrollSpy();
    });
    // Scroll to Top
    scrollToTop.on('click', function(){
      $('html, body').animate({ scrollTop: 0 }, 800);
    });
    navOffset();
    burger();


  /* Accordion
  ================================================== */
    $('.home__acc--title').click(function(j) {

      var dropDown = $(this).closest('.home__acc--card').find('.home__acc--panel');
      $(this).closest('.home__acc').find('.home__acc--panel').not(dropDown).slideUp();

      if ($(this).hasClass('active')) {
        $(this).removeClass('active');
      } else {
        $(this).closest('.home__acc').find('.home__acc--title.active').removeClass('active');
        $(this).addClass('active');
      }

      dropDown.stop(false, true).slideToggle();
      j.preventDefault();
    });


}); // end
