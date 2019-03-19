<?php
 require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;
class DBconnect{
 protected static function con() {
 

$woocommerce = new Client(
    '', 
  // Your consumer key
    '', 
  // Your consumer secret
    '', 
    [
  // Enable the WP REST API integration
        'wp_api' => true, 
    // WooCommerce WP REST API version
        'version' => 'wc/v3' 
    ]
);
return $woocommerce;
}
protected static function conMysql(){
    $pdo = new PDO('mysql:host=107.180.56.153;dbname=i5137467_wp2;charset=utf8', 'i5137467_wp2','V.DyYKTKTapzcLCgB7d58');
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
}



 
