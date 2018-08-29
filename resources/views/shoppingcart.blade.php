@extends('master')
@section('pages')
<main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Shopping Cart</h2>
                    <p>Here is the cash list of your transaction, Please verify your amount.</p>
                </div>
                <div class="content">
                    <div class="row no-gutters">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="assets/img/iPhoneX.png"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a href="#" class="product-name">iPhoneX</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">5 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">4GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">32GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><span>$120</span></div>
                                        <div class="col-6 col-md-2 price"><button class="btn btn-primary" type="button" style="background-color:#ff4f44;"><i class="fa fa-trash-o"></i></button></div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="assets/img/tech/image2.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a href="#" class="product-name">Lorem Ipsum dolor</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">5 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">4GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">32GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><span>$120</span></div>
                                        <div class="col-6 col-md-2 price"><button class="btn btn-primary" type="button" style="background-color:#ff3b3b;"><i class="fa fa-trash"></i></button></div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="assets/img/tech/image2.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a href="#" class="product-name">Lorem Ipsum dolor</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">5 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">4GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">32GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="col-form-label d-none d-md-block" for="quantity">$120</label></div>
                                        <div class="col-6 col-md-2 price"><button class="btn btn-primary" type="button" style="background-color:#ff0000;"><i class="fa fa-trash"></i></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4" style="background-color:#fdfdfe;">
                            <div class="summary">
                                <h3 class="text-center" style="color:rgb(118,115,115);font-size:35px;">Summary</h3>
                                <h4><span class="d-inline-block text" style="color:#a6a6a6;">Subtotal</span><span class="float-right price" style="color:#a6a6a6;">$360</span></h4>
                                <h4><span class="text" style="width:5px;color:rgb(187,187,187);">Discount</span><span class="float-right price" style="color:#a6a6a6;">$0</span></h4>
                                <h4><span class="text" style="color:#a6a6a6;">Discount</span><span class="float-right price" style="color:#a6a6a6;">$0</span></h4>
                                <h4><span class="text" style="color:#a6a6a6;">Shipping</span><span class="float-right price" style="color:#a6a6a6;">$0</span></h4>
                                <h4><span class="text" style="color:#a6a6a6;">Total</span><span class="float-right price" style="color:#a6a6a6;">$360</span></h4>
                                <div class="row">
                                    <div class="col-md-6"><button class="btn btn-primary btn-block btn-lg" type="button" style="width:164px;background-color:rgb(49,117,254);"><i class="fa fa-dollar" style="color:rgb(255,255,255);"></i>Pay With Cash</button></div>
                                    <div class="col-md-6"><button class="btn btn-primary btn-block btn-lg" type="button"><i class="fa fa-bitcoin" style="color:rgb(255,252,252);"></i>Pay with Coin</button></div>
                                </div>
                                <div class="row">
                                    <div class="col"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection()