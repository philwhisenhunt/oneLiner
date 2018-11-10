@extends ('layouts.master')

   @section ('content')

 <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <a href="/"><h2>OneLiner</h2></a>
        <p class="lead">Pay a small fee to add to the story</div>


        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Write your sentence here</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-12 mb-3">
                <input type="text" class="form-control" id="firstName" placeholder="i.e. The frog walked down the road" value="" required>
                <div class="invalid-feedback">
                  Make a real sentence
                </div>
              </div>
             
            </div>
          </div>


               <div class="col-md-8 mb-3">

                  <label for="cc-name">Real email</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted">Valid email address</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>

              </div>

                <div class="col-md-4 mb-3">

                    <label for="cc-name">Password</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Valid email address</small>
                    <div class="invalid-feedback">
                      Name on card is required
                    </div>

                </div>
             
              <div class="col-md-6 mb-3">

            <hr class="mb-4">



            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">

      

               


                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">PayPal</label>
              </div>
            </div>
            <div class="row">

              <div class="col-md-8 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-8 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="checkout-btn btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        



@endsection
  </div>

