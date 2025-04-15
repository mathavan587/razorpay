<?php
  require 'vendor/autoload.php';
  use Razorpay\Api\Api;
class amt {

  public function  pay($data) {    
      
        include('config.php');


$api = new Api($keyId, $keySecret);

// // Create an order
$order = $api->order->create([
    'receipt' => 'ORD_12345',
    'amount' => $data["data"]['amt'], // Amount in paise (50000 paise = ₹500)
    'currency' => 'INR',
    'payment_capture' => 1// Auto-capture payment
    
]);

// // Get the order ID
// // print_r($order);
$orderId = $order['id'];

// // echo $order['id'] ;

// // echo "Order created successfully: " . $orderId;
// // echo "hellow" ;  
include('pay1.php');
// $this->verify_payment();
}

}