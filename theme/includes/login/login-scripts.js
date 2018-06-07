$(function() {
/*--------------------------------------------------------------
  Add HTML to Login Page
--------------------------------------------------------------*/

  /* Variables
  ============================================= */
  var input = $('.input');

  $('#login h1 a').replaceWith('<a href="https://kingsleydistribution.co.uk/" title="Leading Distribution for the Tabletop Industry" tabindex="-1">Kingsley Distribtion</a>');

  /* Loops through each input that exists on page
  ============================================= */
  $('input').each(function() {

    // appends input to parent
    $(this).parent('label').parent().append($(this));

    // remove label
    $(this).parent().children('label').remove();

    var svgUser = '<svg xmlns="http://www.w3.org/2000/svg" width="768" height="768" viewBox="0 0 768 768"><path fill="#fff" d="M512 448h-256c-89.6 0-160 70.4-160 160v64c0 19.2 12.8 32 32 32s32-12.8 32-32v-64c0-54.4 41.6-96 96-96h256c54.4 0 96 41.6 96 96v64c0 19.2 12.8 32 32 32s32-12.8 32-32v-64c0-89.6-70.4-160-160-160z"></path><path fill="#fff" d="M383.999 384c89.6 0 160-70.4 160-160s-70.4-160-160-160-160 70.4-160 160 70.4 160 160 160zM383.999 128c54.4 0 96 41.6 96 96s-41.6 96-96 96-96-41.6-96-96 41.6-96 96-96z"></path></svg>';
    var svgPass = '<svg xmlns="http://www.w3.org/2000/svg" width="768" height="768" viewBox="0 0 768 768"><path fill="#fff" d="M608 320h-32v-96c0-105.6-86.4-192-192-192s-192 86.4-192 192v96h-32c-54.4 0-96 41.6-96 96v224c0 54.4 41.6 96 96 96h448c54.4 0 96-41.6 96-96v-224c0-54.4-41.6-96-96-96zM256 224c0-70.4 57.6-128 128-128s128 57.6 128 128v96h-256v-96zM640 640c0 19.2-12.8 32-32 32h-448c-19.2 0-32-12.8-32-32v-224c0-19.2 12.8-32 32-32h448c19.2 0 32 12.8 32 32v224z"></path></svg>';
    var svgMail = '<svg xmlns="http://www.w3.org/2000/svg" width="768" height="768" viewBox="0 0 768 768"><path d="M640 96h-512c-54.4 0-96 41.6-96 96v384c0 54.4 41.6 96 96 96h512c54.4 0 96-41.6 96-96v-384c0-54.4-41.6-96-96-96zM128 160h512c12.8 0 22.4 6.4 28.8 19.2l-284.8 198.4-284.8-198.4c6.4-12.8 16-19.2 28.8-19.2zM640 608h-512c-19.2 0-32-12.8-32-32v-323.2l268.8 188.8c6.4 3.2 12.8 6.4 19.2 6.4s12.8-3.2 19.2-6.4l268.8-188.8v323.2c0 19.2-12.8 32-32 32z"></path></svg>';

    if ($(this).is('#user_login')) {
      $(this).parent().prepend(svgUser);
    } else if ($(this).is('#user_pass')) {
      $(this).parent().prepend(svgPass);
    } else if ($(this).is('#user_email')) {
      $(this).parent().prepend(svgMail);
    }

    // remove forgetmenot
    $('.forgetmenot').remove();

    // replaces <p> with <div>
    $(this).parent('p').replaceWith('<div class="login__form--input">' + $(this).parent().html() + '</div>');

  });

  /* Add classes
  ============================================= */
  $('#login').addClass('login__contents');
  $('#loginform, #lostpasswordform').addClass('login__form');
  $('#wp-submit').addClass('login__form--submit');
  $('#nav').addClass('lost-pass');
  $('#backtoblog').addClass('backtoblog');

  /* Add happy little message
  ============================================= */
  // $('#login').append('<span class="happymsg"><span class="fontello-coffee"></span>Any problems? Please let me know.</span>');
  // $('#login').append('<span class="happymsg"><img src="/Kingsley_Distribution/wordpress/wp-content/themes/kingsley_distribution/includes/login/img/coffee.svg">Any problems? Please let me know.</span>');


}); // end
