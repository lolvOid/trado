<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Brand</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="css/smoothproducts.css">
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Brand</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto"></ul>
            </div>
        </div>
    </nav>
    <main class="page payment-page">
        <section class="clean-block payment-form dark">
            <div class="container">
                <div class="block-heading">
                        @if (session()->has('success_message'))
						<div class="alert alert-success">
							{{session()->get('success_message')}}
						</div>
						@endif

						@if (count($errors)>0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{$error}}</li>
								@endforeach
							</ul>
						</div>
						@endif
                    <h2 class="text-info">Payment</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
            <form action="{{route('checkout.store')}}" method="POST" payment-form">
                {{ csrf_field() }}
                    <div class="products">
                        <h3 class="title">Checkout</h3>
                        @foreach (Cart::content() as $item)
                            
                        
                        <div class="item"><span class="price">{{presentPrice($item->model->price)}}</span>
                            <p class="item-name">{{$item->model->name}}</p>
                            <p class="item-description">{{$item->model->details}}</p>
                        </div>
                        @endforeach
                        <div class="total"><span>Total</span><span class="price">{{presentPrice(Cart::total())}}</span></div>
                    </div>
                    <div class="form-row register-form">
                        <div class="col-md-8 offset-md-2">
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="text"></div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="email"></div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="address" >Address</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="text" id="address" name="address"></div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="city">City</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="text" id="city" name="city"></div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="province">Province</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="text" id="province" name="province"></div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="postal_code">Postal Code</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="text" id="postal_code" name="postal_code"></div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="phone">Phone</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="text" id="phone" name="phone"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="title">Credit Card Details</h3>
                        <div class="form-row">
                            <div class="col-sm-8">
                                <div class="form-group"><label for="card-holder">Card Holder</label><input class="form-control" type="text" placeholder="Card Holder" id="card_holder" name="card_holder"></div>
                        </div>

                                


                            
                            {{-- <div class="col-sm-5">
                                <div class="form-group"><label>Expiration date</label>
                                    <div class="input-group expiration-date"><input class="form-control" type="text" placeholder="MM"><input class="form-control" type="text" placeholder="YY"></div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group"><label for="card-number">Card Number</label><input class="form-control" type="text" placeholder="Card Number" id="card-number"></div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group"><label for="cvc">CVC</label><input class="form-control" type="text" placeholder="CVC" id="cvc"></div>
                            </div>
                             --}} 
                        </div>
                        <div class="form-group">
                                <label for="card-element">
                                        Credit or debit card
                                      </label>
                                      <div id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                      </div>
                                  
                                      <!-- Used to display form errors. -->
                                      <div id="card-errors" role="alert"></div>
                        </div>

                        <div class="col-sm-12">
                                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Proceed</button></div>
                            </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text</p>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="js/smoothproducts.min.js"></script>
    <script src="js/theme.js"></script>

    <script>
    (function() {
        // Create a Stripe client.
            var stripe = Stripe('pk_test_zUykpIRtyoQxkqw7QEscbwzp');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
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

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});
                style:style,
                
            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');
                
            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
            event.preventDefault();

            var options={
                name:document.getElementById('card_holder').value,
                address_line1:document.getElementById('address').value,
                address_city:document.getElementById('city').value,
                adderss_state:document.getElementById('province').value,
                address_zip:document.getElementById('postal_code').value,
                
            }



            stripe.createToken(card,options).then(function(result) {
                if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
                } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
                }
            });
            });

            function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
           form.submit();
}
            
    })();</script>
</body>

</html>