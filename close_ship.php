<?php
/*
  Plugin Name: Close "Ship to different address"
  Plugin URI: http://gulftobayweb.com
  Description: This plugin closes the "Ship to different address" on checkout page by default
  Version: 1.0.1
  Author: Torsten Dreier / Gulf To Bay Web
  Author URI: http://gulftobayweb.com
  Text Domain: close_shipto
*/
 
add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );

?>