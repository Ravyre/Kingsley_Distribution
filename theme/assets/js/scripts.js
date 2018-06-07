/*--------------------------------------------------------------
  Vanilla
--------------------------------------------------------------*/
document.addEventListener("DOMContentLoaded", function() {

  var KINGSLEY = window.KINGSLEY || {};

  /*--------------------------------------------------------------
    Cookie Consent
  --------------------------------------------------------------*/
  KINGSLEY.consent = function() {

    /* Variables
    ================================================== */
    var gaID = 'UA-64908037-1',
        gaDisable = 'ga-disable-' + gaID,
        consent = document.getElementById('consent'),
        consentHeight = consent.scrollHeight,
        options = document.getElementById('options'),
        accept = document.getElementById('accept'),
        decline = document.getElementById('decline'),
        navConsent = document.getElementById('nav__link--consent');


    /* Functions
    ================================================== */

    /* ---------- Let's make ourselves a nice little cookie ---------- */
    function createCookie(name, value, days) {
      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
      }
      else var expires = "";
      document.cookie = name + "=" + value + expires + "; path=/";
    }

    /* ---------- Actually, I'm on a diet. Remove the cookie ---------- */
    function deleteCookie(name) {
      createCookie(name, "", -1);
      console.log("Cookie will be deleted on refresh.");
    }

    /* ---------- Consent Banner Toggle ---------- */
    function consentToggle(transition) {
      var consent = document.getElementById('consent');
      consent.classList.toggle('active');
      consent.style.transitionDelay = transition + "s";
    }

    /* ---------- Consent Banner Responses ---------- */
    function consentResponse(responseParameter) {
      var response = document.getElementById('response'),
          responseModifier = document.getElementById(responseParameter);
      response.classList.toggle('active');
      responseModifier.classList.toggle('active');
      // We don't want the response to forever be active
      setTimeout(function() {
        response.classList.toggle('active');
        responseModifier.classList.toggle('active');
      }, 3000);
    }


    /* Let's a go, Mario! (when page has loaded)
    ================================================== */
    window.addEventListener('load', function() {

      var cookieAccept = document.cookie.indexOf('consentAccept'),
          cookieDecline = document.cookie.indexOf('consentDecline');

      /* ---------- Are there any cookies? ---------- */
      if ( cookieAccept >= 0 || cookieDecline >= 0) {
        // console.log('all the fucking cookies');
      } else {
        if (!consent.classList.contains('active')) {
          consentToggle(0);
        }
      }

    }); // load


    /* Accepted Consent
    ================================================== */
    accept.addEventListener('click', yesToConsent);

    function yesToConsent() {

      /* ---------- Does the Decline Cookie exit? ---------- */
      if (document.cookie.indexOf('consentDecline') >= 0) {
        deleteCookie("consentDecline");
        createCookie("consentAccept", "accept", 365);
      } else {
        createCookie("consentAccept", "accept", 365);
      }

      /* ---------- Google Cookies ---------- */
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', gaID);
      gtag('config', gaID, {
        'anonymize_ip': true,
        'allow_display_features': false
      });
      // gtag('config', gaID, { 'anonymize_ip': true });
      // gtag('config', gaID, { 'allow_display_features': false });


      /* ---------- Banner, please leave ---------- */
      consentToggle(1.5);
      consentResponse('thankyou');

    } // yesToConsent


    /* Declined Consent
    ================================================== */
    decline.addEventListener('click', noToConsent);

    function noToConsent() {

      /* ---------- Does the Accept Cookie exit? ---------- */
      if (document.cookie.indexOf('consentAccept') >= 0) {
        deleteCookie("consentAccept");
        createCookie("consentDecline", "accept", 365);
      } else {
        createCookie("consentDecline", "accept", 365);
      }

      /* ---------- Delete Cookies ---------- */
      deleteCookie("_ga");
      deleteCookie("_gid");
      deleteCookie("_gat_gtag_UA_64908037_1");

      /* ---------- Banner, please leave ---------- */
      consentToggle(1.5);
      consentResponse('noproblem');

    } // noToConsent


    /* Menu Re-Open Consent Banner
    ================================================== */
    navConsent.addEventListener('click', reopenConsentBanner);

    function reopenConsentBanner() {
      var navMenu = document.querySelector('.nav__menu'),
          navBurger = document.querySelector('.nav__burger');
      navMenu.classList.toggle('active');
      navBurger.classList.toggle('active');
      consentToggle(0);
    }

  }; // KD.consent end
  KINGSLEY.consent();


  /*--------------------------------------------------------------
    Burger Menu
  --------------------------------------------------------------*/
  KINGSLEY.burgerMenu = function() {

    // var burger = document.getElementById('burger');

    var navMenu = document.querySelector('.nav__menu'),
        navBurger = document.querySelector('.nav__burger');

    burger.addEventListener('click', function() {
      navMenu.classList.toggle('active');
      navBurger.classList.toggle('active');
    }); // Click Function

    /* Close when clicked outside of element
    ================================================== */
    document.addEventListener('click', clickedOutside);
    function clickedOutside(event) {
      if ( navMenu.classList.contains('active') && !event.target.closest('.nav__menu') ) {
        console.log('clicking outside');
      }
    }


    /* Close when ESC key is pressed
    ================================================== */
    document.onkeydown = function(evt) {
      evt = evt || window.event;
      var isEscape = false;

      if ("key" in evt) {
        isEscape = (evt.key == "Escape" || evt.key == "Esc");
      } else {
        isEscape = (evt.keyCode == 27);
      }
      if (isEscape) {
        navMenu.classList.toggle('active');
        navBurger.classList.toggle('active');
      }

    };

  }; // KD.burgerMenu end
  KINGSLEY.burgerMenu();


  /*--------------------------------------------------------------
    Policies Page
  --------------------------------------------------------------*/
  KINGSLEY.policies = function() {
    var overlay = document.getElementById('overlay'),
        content = document.getElementById('content'),
        privacy = document.getElementById('privacy');

    if(privacy != null ) {
      content.classList.add('policy');
    }

    // // JS I used to help me: https://codepen.io/flashingmoose/pen/yeJJpp

    var policyHelpOpenBtn = document.getElementsByClassName('policy__help'),
        policyMeaning = document.querySelectorAll('.policy__meaning'),
        policyHelpCloseBtn = document.getElementsByClassName('policy__meaning--btn');


    /* ---------- Open the Policy Information Modal ---------- */
    function openPolicyHelpModal() {

      for (var i = 0; i < policyHelpOpenBtn.length; i++) {
        policyHelpOpenBtn[i].addEventListener('click', openModal);

        function openModal(evt) {
          var modal = evt.currentTarget.parentElement.querySelector('.policy__meaning');
          modal.classList.toggle('active');
          overlay.classList.toggle('active');
          console.log('Clicked: Open Button for Policy Help Modal');
        }

      }

    }
    openPolicyHelpModal();


    /* ---------- Close the Policy Information Modal ---------- */
    function closePolicyHelpModal() {

      for (var i = 0; i < policyHelpCloseBtn.length; i++) {
        policyHelpCloseBtn[i].addEventListener('click', closeModal);

        function closeModal(evt) {
          var modal = evt.currentTarget.parentElement.parentElement;
          modal.classList.toggle('active');
          overlay.classList.toggle('active');
          console.log('Clicked: Close Button for Policy Help Modal');
        }

      }

    }
    closePolicyHelpModal();


  }; // KD.policies end
  KINGSLEY.policies();


  /*--------------------------------------------------------------
    Index
  --------------------------------------------------------------*/
    /* Accordion
    ================================================== */
    KINGSLEY.accordionIndex = function() {

      // https://stackoverflow.com/questions/40487117/
      // https://codepen.io/zomars/pen/jGKjxZ

      // var accordions,
      //     i;
      //
      // if (!document.querySelectorAll || !document.body.classList) return;
      //
      // function makeAccordion(accordion) {
      //   var targets,
      //       currentTarget,
      //       i;
      //   targets = accordion.querySelectorall('.accorion > * > h1');
      //   for(i = 0; i < targets.length; i++) {
      //     targets[i].addEventListener('click', function() {
      //       if (currentTarget)
      //         currentTarget.classList.remove('expanded');
      //         currentTarget = this.parentNode;
      //         currentTarget.classList.add('expanded');
      //     });
      //   }
      // }


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




    }; // KD.accordion end
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
