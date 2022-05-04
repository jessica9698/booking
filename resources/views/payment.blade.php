<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Accept a payment</title>
    <meta name="description" content="A demo of a payment on Stripe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  </head>
  <body>
    <!-- Display a payment form -->
    <!-- <form id="payment-form">
      <div id="payment-element">
        <--Stripe.js injects the Payment Element--
      </div>
      <button id="submit">
        <div class="spinner hidden" id="spinner"></div>
        <span id="button-text">Pay now</span>
      </button>
      <div id="payment-message" class="hidden"></div>
    </form> -->
    <div class="form-row">
      <label for="card-element-2">
          Credit or debit card
      </label>
      <h4>{{$calculate_rate}}</h4>
    <div id="card-element-2" class="form-control">
    </div>
    <div id="card-errors" role="alert"></div>
    </div>
    <button type="submit" id="checkout-button">Checkout</button>



    <!-- <form id="payment-form">
        <div id="payment-element">
            <- Elements will create form elements here --
        </div>
        <button id="submit">Submit</button>
        <div id="error-message">
             Display error message to your customers here -
        </div>
    </form> -->




  </body>
<script src="https://js.stripe.com/v3/"></script>
<script> 
 /* const stripe = Stripe
 ("pk_test_51IgcyRLzBzBxz2hSXts52KO8lqADelOPrvYvjyKuoP8xDCDGOIJKuqwhd7fRpnkJ7lBaU1i1J6uXQtX2aoPboVEo00wgqROmnq"); */


/* const options = {
  clientSecret: "sk_test_51J9NRsK9N34q6w7zmig3hAFW3Lh2oNm4XUl9cmiBGFzqtdPGIEN0hhTmOsIeEjwiXz8OJP7O367jrCsJIZmCAMWn000XY87oSa",

}; */

var stripe = Stripe('pk_test_51IgcyRLzBzBxz2hSXts52KO8lqADelOPrvYvjyKuoP8xDCDGOIJKuqwhd7fRpnkJ7lBaU1i1J6uXQtX2aoPboVEo00wgqROmnq');

var elements = stripe.elements();

var style = {
  base: {
    color: '#32325d',
    lineHeight: '24px',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

document.querySelectorAll('[id^=card-element]').forEach(e => {
  var card = elements.create('card', {
    style: style
  });

  card.mount(`#${e.id}`);
});


 
</script>

</html>
