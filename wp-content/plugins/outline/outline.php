<?php
/**
 * Plugin Name: OUTLINE
 */

 add_action( 'woocommerce_add_to_cart', 'so_payment_complete' );
 //add_action( 'woocommerce_payment_complete', 'so_payment_complete' );

 function so_payment_complete( $order_id ){
     print "we are in";
     $order = wc_get_order( $order_id );
     $user = $order->get_user();
     echo "order is started";

    $cURLConnection = curl_init('https://167.99.202.210:17175/ThtFk8CS89LJmq1spjRN-Q//access-keysi');
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    //ignore ssl validation
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    // $apiResponse - available data from the API request
    $jsonArrayResponse - json_decode($apiResponse);
    echo "response is " + $jsonArrayResponse.accessUrl;
 }

 ?>
