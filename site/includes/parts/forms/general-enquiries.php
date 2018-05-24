<?php
/**
 * Template: Contact Form - General Enquiries
 */
?>

<form action="" method="post" class="wpcf7-form general" novalidate="novalidate">
  <div style="display: none;">
    <input name="_wpcf7" value="64" type="hidden">
    <input name="_wpcf7_version" value="4.9.2" type="hidden">
    <input name="_wpcf7_locale" value="en_GB" type="hidden">
    <input name="_wpcf7_unit_tag" value="wpcf7-f64-p65-o1" type="hidden">
    <input name="_wpcf7_container_post" value="65" type="hidden">
  </div>
  <div>
    <span class="wpcf7-form-control-wrap general__name">
      <input name="general_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" aria-labelledby="name" placeholder="Full Name" type="text">
    </span>
    <span class="wpcf7-form-control-wrap general__email">
      <input name="general_email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" type="email">
    </span>
    <span class="wpcf7-form-control-wrap general__phone">
      <input name="general_telephone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Phone" type="tel">
    </span>
    <span class="wpcf7-form-control-wrap general__message">
      <textarea name="general_message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea>
    </span>
    <div>
      <input value="Submit" class="wpcf7-form-control wpcf7-submit btn__gry" type="submit">
      <span class="ajax-loader"></span>
    </div>
  </div>
  <div class="wpcf7-response-output wpcf7-display-none"></div>
</form>
