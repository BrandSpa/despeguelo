<?php

function ra_contact_sc( $atts ) {
  $at = shortcode_atts([
    "message" => "Gracias, pronto un asesor se pondrá en contacto con usted.",
    "redirect" => 'false',
    "to" => '',
    "thanks_page" => ''
  ], $atts);
  $props = [
    "message" => $at['message'],
    "redirect" => $at['redirect'],
    "thanks_page" => $at['thanks_page'],
    "to" => $at['to'],
  ];

  ob_start();
  ?>
  
  <!--ra_contact-->
  <div class="ra-contact" data-props='<?php echo json_encode($props); ?>'></div>
  <!--/ra_contact-->
  <?php
  return ob_get_clean();
}

add_shortcode( 'ra_contact', 'ra_contact_sc' );
