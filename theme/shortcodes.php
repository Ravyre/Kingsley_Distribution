<?php

/*--------------------------------------------------------------*\
	Images
\*--------------------------------------------------------------*/

  /* Picture
  ================================================== */
  // https://www.pixafy.com/blog/2013/04/understanding-wordpress-args-variable-args-ye-scurvy-lads/
  function picture_shortcode($atts) {
    $imgBits = shortcode_atts( array(
      'class' => '',
      'imgclass' => '',
      'url' => '',
      'type' => '',
      'alt' => ''
    ), $atts);
    return
    '<picture' . esc_attr($imgBits['class']) . '>
      <source data-srcset="https://res.cloudinary.com/kingsley/image/upload/q_auto/' . esc_attr($imgBits['url']) . '.webp" srcset="#" type="image/webp">
      <img class="' . esc_attr($imgBits['imgclass']) . '" data-src="https://res.cloudinary.com/kingsley/image/upload/q_auto/' . esc_attr($imgBits['url']) . '.' . esc_attr($imgBits['type']) . '" src="#" alt="' . esc_attr($imgBits['alt']) . '">
    </picture>';
  }
add_shortcode('picture', 'picture_shortcode');


/*--------------------------------------------------------------*\
	Call To Actions
\*--------------------------------------------------------------*/

  /* Ranges; Order Now
  ================================================== */
  function ranges_orderNow($atts, $content = null) {
    $orderStuff = shortcode_atts( array(
      'brand' => ''
    ), $atts);
    return
    '<div class="call-to">
      <div class="letter-o">
        <h2>Place an Order Now</h2>
      </div>
      ' . $content . '
      <a class="btn__order--ylw" href="mailto:sales@kingsleydistribution.co.uk?subject=Order: ' . esc_attr($orderStuff['brand']) . '">Make an Order</a>
      </div>';
  }
add_shortcode('order', 'ranges_orderNow');
?>
