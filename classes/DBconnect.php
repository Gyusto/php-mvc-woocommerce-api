<?php
 require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;
class DBconnect{
 protected static function con() {
 

$woocommerce = new Client(
    'https://www.sanaabiz.co.tz', 
  // Your consumer key
    'ck_5e134a4434919b7914bcfa1d5a7ffe6a05302562', 
  // Your consumer secret
    'cs_19bb148f720904cf2074182c40e2a4e9641f61a5', 
    [
  // Enable the WP REST API integration
        'wp_api' => true, 
    // WooCommerce WP REST API version
        'version' => 'wc/v3' 
    ]
);
return $woocommerce;
}

}



 
