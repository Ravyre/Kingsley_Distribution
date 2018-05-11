/*--------------------------------------------------------------
  Vanilla
--------------------------------------------------------------*/
document.addEventListener("DOMContentLoaded", function() {

  var KINGSLEY = window.KINGSLEY || {};

  /*--------------------------------------------------------------
    IE 11 Conditional Statement
  --------------------------------------------------------------*/
  KINGSLEY.ie = function() {
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
  };
  KINGSLEY.ie();

  /*--------------------------------------------------------------
    Burger Menu
  --------------------------------------------------------------*/
  KINGSLEY.burgerMenu = function() {
    document.getElementById('burger').addEventListener('click', function() {

      // console.log("You finally clicked without jQuery");
      document.querySelector('.nav__menu').classList.toggle('active');
      document.querySelector('.nav__burger').classList.toggle('active');

    });
  };
  KINGSLEY.burgerMenu();

  /*--------------------------------------------------------------
    Index
  --------------------------------------------------------------*/
    /* Accordion
    ================================================== */
    KINGSLEY.accordionIndex = function() {

      // https://stackoverflow.com/questions/40487117/
      // https://codepen.io/zomars/pen/jGKjxZ

      var accordions,
          i;

      if (!document.querySelectorAll || !document.body.classList) return;

      function makeAccordion(accordion) {
        var targets,
            currentTarget,
            i;
        targets = accordion.querySelectorall('.accorion > * > h1');
        for(i = 0; i < targets.length; i++) {
          targets[i].addEventListener('click', function() {
            if (currentTarget)
              currentTarget.classList.remove('expanded');
              currentTarget = this.parentNode;
              currentTarget.classList.add('expanded');
          });
        }
      }


      // Squeezebox Inspired
        // http://nobitagit.github.io/squeezebox-vanilla/

        // do it do it

    //___________________________________________________________________________

      // document.querySelector('.home__acc--title').addEventListener('click', function() {
      //
      //   console.log('Toggled: accordion');
      //   accordionTitle[1].classList.toggle('active');
      //   // accordionPanel[0].classList.toggle('active');
      //
      // });


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



      $('.faq__acc--title').click(function(j) {

        var dropDown = $(this).closest('.faq__acc--card').find('.faq__acc--panel');
        $(this).closest('.faq__acc').find('.faq__acc--panel').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
          $(this).removeClass('active');
        } else {
          $(this).closest('.faq__acc').find('.faq__acc--title.active').removeClass('active');
          $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();
        j.preventDefault();
      });


      // https://codepen.io/wakamoleguy/pen/lJhys




    };
    KINGSLEY.accordionIndex();

}); // end



/*--------------------------------------------------------------
  jQuery
--------------------------------------------------------------*/
$(function() {

/*--------------------------------------------------------------
  Contact Form 7
--------------------------------------------------------------*/
    /* ---------- Insert Label ---------- */
    var findInput = $('.wpcf7-form-control');
    $(findInput).each(function() {
      $(this).parent('.wpcf7-form-control-wrap').prepend('<label for="' + this.id + '"><span class="screen-reader">' + this.id + '</span></label>');
    });

}); // end
