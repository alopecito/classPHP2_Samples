var handler = StripeCheckout.configure({
  key: 'pk_test_p3KRa6Lka4kGKYHuNDHfz8Ud',
  image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
  locale: 'auto',
  token: function(token) {
    console.log(token);
    var data = {
        stripeToken: token.id,
        email: token.email,
        amount: 3000

    };

    httpRequest('POST', '/payment/', data, function (response){

      console.log('esponse from server: ', response);
    });
    // You can access the token ID with `token.id`.
    // Get the token ID to your server-side code for use.
  }
});

document.getElementById('customButton').addEventListener('click', function(e) {
  // Open Checkout with further options:
  handler.open({
    name: 'Unit purchase',
    description: '2 widgets',
    currency: 'cad',
    amount: 15000
  });
  e.preventDefault();
});

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handler.close();
});