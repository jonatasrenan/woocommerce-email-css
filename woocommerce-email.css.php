<?php
/**
 * @package WooCoomerce-email-CSS
 * @version 0.1
 */
/*
Plugin Name: WooCommerce e-mail CSS
Plugin URI: http://jonatasrenan.com
Description: Add css to woocommerce e-mail
Author: Jônatas Renan
Version: 0.1
Author URI: http://jonatasrenan.com
*/

add_action('woocommerce_email_header', 'add_css_to_email');
 
function add_css_to_email() {
echo '
  <style type="text/css">
    #template_header_image > p:nth-child(1) > img:nth-child(1) {
      max-width: 500px;
    }  
  </style>
';
}

?>
