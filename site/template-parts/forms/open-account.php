<?php
/**
 * Template: Contact Form - Open an Account
 */
?>

<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . ('/Kingsley_Distribution/site/template-parts/variables.php');
?>

<form action="" method="post" class="wpcf7-form open-account" novalidate="novalidate">
  <div style="display: none;">
    <input name="_wpcf7" value="64" type="hidden">
    <input name="_wpcf7_version" value="4.9.2" type="hidden">
    <input name="_wpcf7_locale" value="en_GB" type="hidden">
    <input name="_wpcf7_unit_tag" value="wpcf7-f64-p65-o1" type="hidden">
    <input name="_wpcf7_container_post" value="65" type="hidden">
  </div>
  <div class="col-2">
    <span class="wpcf7-form-control-wrap open-account__forename">
      <input name="open-account__forename" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" aria-labelledby="forename" placeholder="Forename" type="text">
    </span>
    <span class="wpcf7-form-control-wrap open-account__surname">
      <input name="open-account__surname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Surname" type="text">
    </span>
    <span class="wpcf7-form-control-wrap open-account__email">
      <input name="open-account__email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" type="email">
    </span>
    <span class="wpcf7-form-control-wrap open-account__telephone">
      <input name="open-account__telephone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Phone" type="tel">
    </span>
    <span class="wpcf7-form-control-wrap open-account__company">
      <input name="open-account__company" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Company Name" type="text">
    </span>
    <span class="wpcf7-form-control-wrap open-account__vat">
      <input name="open-account__vat" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="VAT Number (if applicable)" type="text">
    </span>
    <span class="wpcf7-form-control-wrap open-account__address">
      <input name="open-account__address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form__address" aria-required="true" aria-invalid="false" placeholder="Company Address" type="text">
    </span>
    <span class="wpcf7-form-control-wrap open-account__message">
      <textarea name="open-account__message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form__message" aria-invalid="false" placeholder="Message"></textarea>
    </span>
    <div>
      <input value="Send" class="wpcf7-form-control wpcf7-submit btn__wht" type="submit">
      <span class="ajax-loader"></span>
    </div>
  </div>
  <div class="wpcf7-response-output wpcf7-display-none"></div>
</form>
