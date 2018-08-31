@extends('master')


@section('pages')

 <div class="container">
        <div style="text-align:center;">
            <h2 class="divider-style"><span>Billing form</span></h2>
        </div>
        <div class="row .payment-dialog-row">
            <div class="col-12 col-md-4 offset-md-4" style="background-color:#308ee4;">
                <div class="card credit-card-box">
                    <div class="card-header" style="background-color:rgba(38,203,255,0.03);">
                        <h6 class="mb-0"><span class="panel-title-text">Payment Details </span><img class="img-fluid panel-title-image" src="/img/accepted_cards.png"></h6>
                    </div>
                    <div class="card-body">
                        <form id="payment-form">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group"><label for="cardNumber" style="color:rgb(137,137,137);">Card number </label>
                                        <div class="input-group"><input class="form-control" type="tel" required="" placeholder="Valid Card Number" id="cardNumber">
                                            <div class="input-group-append"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-7">
                                    <div class="form-group"><label for="cardExpiry"><span>expiration </span><span>EXP </span> date</label><input class="form-control" type="tel" required="" placeholder="MM / YY" id="cardExpiry"></div>
                                </div>
                                <div class="col-5 pull-right">
                                    <div class="form-group"><label for="cardCVC" style="color:rgb(142,142,142);">cv code</label><input class="form-control" type="tel" required="" placeholder="CVC" id="cardCVC"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group"><label for="couponCode" style="color:rgb(142,142,142);">coupon code</label><input class="form-control" type="text" id="couponCode"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12"><button class="btn btn-success btn-block btn-lg" type="submit" style="background-color:rgb(40,149,195);">Start Subscription</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection()