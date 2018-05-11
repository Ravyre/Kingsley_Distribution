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

    if ($(this).is('#user_login')) {
      $(this).parent().prepend('<span class="icon-user"></span>');
    } else if ($(this).is('#user_pass')) {
      $(this).parent().prepend('<span class="icon-lock"></span>');
    } else if ($(this).is('#user_email')) {
      $(this).parent().prepend('<span class="icon-mail2"></span>');
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
  $('#login').append('<span class="happymsg"><span class="fontello-coffee"></span>Any problems? Please let me know.</span>');

}); // end
