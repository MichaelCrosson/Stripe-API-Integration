<?php
require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51J3cvIGKUmLV3VlznAGQprgn6DpjvqcRyNcsZsxoWNu$
header('Content-Type: application/json');
$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'unit_amount' => 1,
      'product_data' => [
        'name' => 'INSERT NAME',
        'images' => ["https://i.imgur.com/EHyR2nP.png"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'jesusfilled.com/success.html',
  'cancel_url' => 'jesusfilled.com/cancel.html',
]);
header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
