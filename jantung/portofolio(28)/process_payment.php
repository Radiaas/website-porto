<?php

require 'vendor/autoload.php';

$stripe = new \Stripe\StripeClient('sk_test_51P8MePIFhCieNx7c64gfoWYfJsGo8qVLBqsoWACyZPPStcdBqX3vpNb5GvtrhRdvrPix9XAsMthkNNl43UbJ9LMw00eW1ChKc5');

$checkout_session = $stripe->checkout->sessions->create([
  'line_items' => [[
    'price_data' => [
      'currency' => 'idr', // Ubah mata uang menjadi IDR
      'product_data' => [
        'name' => 'Waterfall',
      ],
      'unit_amount' => 50000000, // Ubah nominal menjadi 100.000 Rupiah
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'http://localhost/portofolio/jantung/portofolio(28)/succes.php',
  'cancel_url' => 'http://localhost:4242/cancel',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
?>
