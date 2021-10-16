<?php

require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_51J3cvIGKUmLV3VlznAGQprgn6DpjvqcRyNcs

$session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'product_data' => [
        'name' => 'INSERT NAME',
      ],
      'unit_amount' => 100,
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'http://jesusfilled.com/success.html',
    'cancel_url' => 'http://jesusfilled.com/cancel.html',
]);

?>

<html>
  <head>
    <title>JesusFilled</title>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <button id="checkout-button">Checkout</button>
    <script>
      var stripe =
Stripe('pk_test_51J3cvIGKUmLV3Vlzw5tJn6sHKFgxzBZsQbnb3iaPpeLVBQqyjvb
      const btn = document.getElementById("checkout-button")
      btn.addEventListener('click', function(e) {
      e.preventDefault();
      stripe.redirectToCheckout({
          sessionId: "<?php echo $session->id; ?>"
        });
      });
    </script>
  </body>
</html>


