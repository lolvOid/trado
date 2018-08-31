@extends('master')
@section('pages')
<div>
        {{-- <main class="page payment-page">
            <section class="clean-block payment-form dark">
                <div class="container">
                    <div class="block-heading">
                        <h2 class="text-info">Payment</h2>
                        <p>Thanks for your patient. Please Choose how to pay</p>
                    </div>
                </div>
            </section>
        </main> --}}
    </div>
    <main data-aos="fade-up" class="page payment-page">
        <section class="clean-block payment-form dark">
            <div class="container" style="background-color:#ffffff;">
                <div class="block-heading">
                    <h2 class="text-info" style="font-size:44px;">Payment</h2>
                    <p>Here is the checkout for your product.Enjoy Trading with our website</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
    <div class="col-12 col-md-12 d-block  center-block" style="  align:center;
  width:1215px;
">
        <form style="  padding:0px;
  margin:0px;
  background-color:#ffffff;
  border-top:4px solid rgba(72,123,255,0.1);
  margin-top:10px;
  padding-top:19px;
  font-weight:600;
  line-height:1;
 
">
            <div class="products">
                <h2 class="text-center title" style="  color:#373737;
  font-size:29px;
">Checkout</h2>
                <div class="item" style="  color:#f5f6ff;
  background-color:#ffffff;
">
                    <p class="item-name" style="  font-size:22px;
">iPhoneX<span class="float-right price" style="  font-family:Montserrat,;
  font-size:22px;
">$120</span></p>
                    <p class="item-description">This is the description</p>
                </div>
                <div class="item" style="  background-color:#ffffff;
">
                    <p class="text-nowrap text-truncate text-left item-name" style="  font-size:22px;
">Product 2<span class="float-right price" style="  font-family:Montserrat,;
  font-size:22px;
">$120</span></p>
                    <p class="item-description">This is the description too</p>
                </div>
                <div class="total" style="  background-color:#ffffff;
"><span style="  font-size:22px;
">Total</span><span class="float-right price" style="  font-size:22px;
">$320</span></div>
            </div>
            <div class="card-details">
                <h3 class="title">Credit Card Details</h3>
                <div class="form-row">
                    <div class="col-sm-12">
                        <div class="form-row">
                            <div class="col"><button class="btn btn-primary btn-block" type="button" style="  width:200px;
"><i class="fa fa-dollar" style="  color:rgb(255,255,255);
"></i>Pay With Cash</button><i class="fa fa-dollar" style="  color:rgb(255,255,255);
"></i></div>
                            <div class="col"><button class="btn btn-primary btn-block" type="button" style=" float:right; width:200px;
"><i class="fa fa-bitcoin " style="  color:rgb(255,255,255);
"></i>Pay With Bitcoin</button></div>
                        </div>
                        <div class="form-group"></div>
                        <div class="form-group"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
            </div>
            <div class="container float-none align-content-center" style="align-content:center;">
                <div class="row" style="align-content:center;"></div>
            </div>
        </section>
    </main>
    <div></div>
  @endsection()